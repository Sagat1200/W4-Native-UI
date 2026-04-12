<?php

namespace W4\Native\Providers;

use Illuminate\Support\ServiceProvider;
use W4\Native\Console\Commands\BuildNativeAssetsCommand;
use W4\Native\Console\Commands\InstallNativeCommand;
use W4\Native\Services\Provider\Components\FeedBack\NativeFeedBackService;
use W4\Native\Services\Provider\Components\Form\NativeFormService;
use W4\Native\Services\Provider\Components\Interactive\NativeInteractiveService;
use W4\Native\Services\Provider\Components\Layout\NativeLayoutService;
use W4\Native\Services\Provider\Components\UI\NativeUI;
use W4\Native\Services\Provider\Directives\W4NativeDirectiveService;
use W4\Native\Services\Provider\Route\W4NativeUIRouteService;
use W4\Native\Services\Themes\NativeThemeService;
use W4\Native\Support\ThemeManifest;
use W4\Native\Support\ThemeRegistry;
use W4\Native\Tools\Themes\NativeTheme;

class NativeServiceProvider extends ServiceProvider
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

            NativeThemeService::registerPresets($registry);

            return $registry;
        });

        $this->app->singleton(NativeTheme::class, function ($app) {
            return new NativeTheme(
                $app->make(ThemeRegistry::class),
                $app->make(ThemeManifest::class),
                array_merge(
                    NativeUI::getComponents(),
                    NativeFormService::getComponents(),
                    NativeLayoutService::getComponents(),
                    NativeFeedBackService::getComponents(),
                    NativeInteractiveService::getComponents()
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

        W4NativeUIRouteService::registerRoutes();

        if ($this->app->runningInConsole()) {
            if (is_file($configPath)) {
                $this->publishes([
                    $configPath => config_path('w4-native.php'),
                ], 'w4-native-config');
            } // php artisan vendor:publish --tag=w4-native-config --path=config/w4-native.php

            if (is_dir($distPath)) {
                $this->publishes([
                    $distPath => public_path('vendor/w4-native'),
                ], 'w4-native-dist');
            } // php artisan vendor:publish --tag=w4-native-dist --path=public/vendor/w4-native

            $publish = [];
            if (is_file($configPath)) {
                $publish[$configPath] = config_path('w4-native-daisy.php');
            }

            if (is_dir($distPath)) {
                $publish[$distPath] = public_path('vendor/w4-native-daisy');
            }

            if ($publish !== []) {
                $this->publishes($publish, 'w4-native-daisy-assets');
            }

            $this->commands([
                BuildNativeAssetsCommand::class,
                InstallNativeCommand::class,
            ]);
        }
    }
}