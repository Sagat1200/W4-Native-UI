<?php

namespace W4\Native\Daisy\Providers;

use Illuminate\Support\ServiceProvider;
use W4\Native\Daisy\Console\Commands\BuildNativeDaisyAssetsCommand;
use W4\Native\Daisy\Console\Commands\InstallNativeDaisyCommand;
use W4\Native\Daisy\Services\Provider\Components\FeedBack\NativeFeedBackService;
use W4\Native\Daisy\Services\Provider\Components\Form\NativeFormService;
use W4\Native\Daisy\Services\Provider\Components\Interactive\NativeInteractiveService;
use W4\Native\Daisy\Services\Provider\Components\Layout\NativeLayoutService;
use W4\Native\Daisy\Services\Provider\Components\UI\NativeUI;
use W4\Native\Daisy\Services\Provider\Directives\W4NativeDaisyDirectiveService;
use W4\Native\Daisy\Services\Provider\Route\W4NativeDaisyUIRouteService;
use W4\Native\Daisy\Services\Themes\W4NativeDaisyThemeService;
use W4\Native\Daisy\Support\ThemeManifest;
use W4\Native\Daisy\Support\ThemeRegistry;
use W4\Native\Daisy\Tools\Themes\NativeDaisyTheme;

class NativeDaisyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $configPath = __DIR__ . '/../../config/w4-native-daisy.php';

        if (is_file($configPath)) {
            $this->mergeConfigFrom($configPath, 'w4-native-daisy');
        }

        $this->app->singleton(ThemeManifest::class, function () {
            return ThemeManifest::fromConfig(config('w4-native-daisy', []));
        });

        $this->app->singleton(ThemeRegistry::class, function () {
            $registry = new ThemeRegistry();

            W4NativeDaisyThemeService::registerPresets($registry);

            return $registry;
        });

        $this->app->singleton(NativeDaisyTheme::class, function ($app) {
            return new NativeDaisyTheme(
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

        W4NativeDaisyDirectiveService::register();

        W4NativeDaisyUIRouteService::registerRoutes();

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
                BuildNativeDaisyAssetsCommand::class,
                InstallNativeDaisyCommand::class,
            ]);
        }
    }
}