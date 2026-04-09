<?php

namespace W4\Native\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use W4\Native\Console\Commands\BuildNativeAssetsCommand;
use W4\Native\Console\Commands\InstallNativeCommand;
use W4\Native\Services\Provider\Components\FeedBack\W4NativeFeedBackService;
use W4\Native\Services\Provider\Components\Form\W4NativeFormService;
use W4\Native\Services\Provider\Components\Interactive\W4NativeInteractiveService;
use W4\Native\Services\Provider\Components\Layout\W4NativeLayoutService;
use W4\Native\Services\Provider\Components\UI\W4NativeUI;
use W4\Native\Services\Provider\Directives\W4NativeDirectiveService;
use W4\Native\Services\Themes\W4NativeThemeService;
use W4\Native\Support\ThemeManifest;
use W4\Native\Support\ThemeRegistry;
use W4\Native\Tools\Themes\W4NativeTheme;

class W4NativeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $configPath = __DIR__ . '/../../config/w4-native.php';

        if (is_file($configPath)) {
            $this->mergeConfigFrom($configPath, 'w4-native');
        }

        $this->app->singleton(ThemeManifest::class, function () {
            return ThemeManifest::fromConfig(config('w4-native', []));
        });

        $this->app->singleton(ThemeRegistry::class, function () {
            $registry = new ThemeRegistry();

            W4NativeThemeService::registerPresets($registry);

            return $registry;
        });

        $this->app->singleton(W4NativeTheme::class, function ($app) {
            return new W4NativeTheme(
                $app->make(ThemeRegistry::class),
                $app->make(ThemeManifest::class),
                array_merge(
                    W4NativeUI::getComponents(),
                    W4NativeFormService::getComponents(),
                    W4NativeLayoutService::getComponents(),
                    W4NativeFeedBackService::getComponents(),
                    W4NativeInteractiveService::getComponents()
                )
            );
        });
    }

    public function boot(): void
    {
        $packageRoot = dirname(__DIR__, 2);
        $configPath = $packageRoot . '/config/w4-native.php';
        $distPath = $packageRoot . '/dist';

        $this->loadViewsFrom($packageRoot . '/resources/views', 'w4-native');

        W4NativeDirectiveService::register();

        Route::get('/w4/theme-lab', function () {
            return view('w4-native::w4-theme-lab');
        })->name('w4-native.theme-lab');

        if ($this->app->runningInConsole()) {
            if (is_file($configPath)) {
                $this->publishes([
                    $configPath => config_path('w4-native.php'),
                ], 'w4-native-config');
            }

            if (is_dir($distPath)) {
                $this->publishes([
                    $distPath => public_path('vendor/w4-native'),
                ], 'w4-native-dist');
            }

            $publish = [];
            if (is_file($configPath)) {
                $publish[$configPath] = config_path('w4-native.php');
            }

            if (is_dir($distPath)) {
                $publish[$distPath] = public_path('vendor/w4-native');
            }

            if ($publish !== []) {
                $this->publishes($publish, 'w4-native-assets');
            }

            $this->commands([
                BuildNativeAssetsCommand::class,
                InstallNativeCommand::class,
            ]);
        }
    }
}
