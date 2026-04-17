<?php

namespace W4\NativeUI\Providers;

use Illuminate\Support\ServiceProvider;
use W4\NativeUI\Console\Commands\BuildNativeUIAssetsCommand;
use W4\NativeUI\Console\Commands\InstallNativeUICommand;
use W4\NativeUI\Services\Provider\Components\FeedBack\NativeUIFeedBackService;
use W4\NativeUI\Services\Provider\Components\Form\NativeUIFormService;
use W4\NativeUI\Services\Provider\Components\Interactive\NativeUIInteractiveService;
use W4\NativeUI\Services\Provider\Components\Layout\NativeUILayoutService;
use W4\NativeUI\Services\Provider\Components\UI\NativeUIUIService;
use W4\NativeUI\Services\Provider\Directives\NativeUIDirectiveService;
use W4\NativeUI\Services\Provider\Route\NativeUIFeedbackRouteService;
use W4\NativeUI\Services\Provider\Route\NativeUIFormsRouteService;
use W4\NativeUI\Services\Provider\Route\NativeUIInteractiveRouteService;
use W4\NativeUI\Services\Provider\Route\NativeUILayoutRouteService;
use W4\NativeUI\Services\Provider\Route\NativeUINavigationRouteService;
use W4\NativeUI\Services\Provider\Route\NativeUIUIRouteService;
use W4\NativeUI\Services\Themes\NativeUIThemeService;
use W4\NativeUI\Support\ThemeManifest;
use W4\NativeUI\Support\ThemeRegistry;
use W4\NativeUI\Tools\Themes\NativeUITheme;

class NativeUIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $configPath = __DIR__ . '/../../config/w4-native-ui.php';

        if (is_file($configPath)) {
            $this->mergeConfigFrom($configPath, 'w4-native-ui');
        }

        $this->app->singleton(ThemeManifest::class, function () {
            return ThemeManifest::fromConfig(config('w4-native-ui', []));
        });

        $this->app->singleton(ThemeRegistry::class, function () {
            $registry = new ThemeRegistry();

            NativeUIThemeService::registerPresets($registry);

            return $registry;
        });

        $this->app->singleton(NativeUITheme::class, function ($app) {
            return new NativeUITheme(
                $app->make(ThemeRegistry::class),
                $app->make(ThemeManifest::class),
                array_merge(
                    NativeUIUIService::getComponents(),
                    NativeUIFormService::getComponents(),
                    NativeUILayoutService::getComponents(),
                    NativeUIFeedBackService::getComponents(),
                    NativeUIInteractiveService::getComponents()
                )
            );
        });
    }

    public function boot(): void
    {
        $packageRoot = dirname(__DIR__, 2);
        $configPath = $packageRoot . '/config/w4-native-ui.php';
        $distPath = $packageRoot . '/dist';
        $inertiaPath = $packageRoot . '/resources/inertia';

        $this->loadViewsFrom($packageRoot . '/resources/views', 'w4-native');

        NativeUIDirectiveService::register();

        NativeUIUIRouteService::registerRoutes();
        NativeUIFeedbackRouteService::registerRoutes();
        NativeUIFormsRouteService::registerRoutes();
        NativeUIInteractiveRouteService::registerRoutes();
        NativeUILayoutRouteService::registerRoutes();
        NativeUINavigationRouteService::registerRoutes();

        if (class_exists(\Livewire\Livewire::class)) {
            \W4\NativeUI\Integrations\Livewire\NativeUILivewire::register();
        }

        if ($this->app->runningInConsole()) {
            if (is_file($configPath)) {
                $this->publishes([
                    $configPath => config_path('w4-native-ui.php'),
                ], 'w4-native-ui-config');
            } // php artisan vendor:publish --tag=w4-native-ui-config --path=config/w4-native-ui.php

            if (is_dir($distPath)) {
                $this->publishes([
                    $distPath => public_path('vendor/w4-native-ui'),
                ], 'w4-native-ui-dist');
            } // php artisan vendor:publish --tag=w4-native-ui-dist --path=public/vendor/w4-native-ui

            if (is_dir($inertiaPath)) {
                $this->publishes([
                    $inertiaPath => resource_path('js/vendor/w4-native-ui'),
                ], 'w4-native-ui-inertia');
            }

            $publish = [];
            if (is_file($configPath)) {
                $publish[$configPath] = config_path('w4-native-ui.php');
            }

            if (is_dir($distPath)) {
                $publish[$distPath] = public_path('vendor/w4-native-ui');
            }

            if ($publish !== []) {
                $this->publishes($publish, 'w4-native-ui-assets');
            }

            $this->commands([
                BuildNativeUIAssetsCommand::class,
                InstallNativeUICommand::class,
            ]);
        }
    }
}
