<?php

namespace W4\NativeUi\Providers;

use Illuminate\Support\ServiceProvider;
use W4\NativeUi\Console\Commands\InstallNativeUiCommand;
use W4\NativeUi\Console\Commands\BuildNativeUiAssetsCommand;
use W4\NativeUi\Support\ThemeManifest;
use W4\NativeUi\Support\ThemeRegistry;
use W4\NativeUi\Themes\NativeTheme;
use W4\NativeUi\Themes\Components\ConfigurableComponentTheme;
use W4\NativeUi\Themes\Presets\CorporatePreset;
use W4\NativeUi\Themes\Presets\DarkPreset;
use W4\NativeUi\Themes\Presets\DefaultPreset;
use W4\NativeUi\Themes\Presets\NightPreset;
use W4\NativeUi\Themes\Presets\SoftPreset;

class W4NativeUiServiceProvider extends ServiceProvider
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
            $registry->registerPreset(new DefaultPreset());
            $registry->registerPreset(new DarkPreset());
            $registry->registerPreset(new CorporatePreset());
            $registry->registerPreset(new SoftPreset());
            $registry->registerPreset(new NightPreset());

            return $registry;
        });

        $this->app->singleton(NativeTheme::class, function ($app) {
            return new NativeTheme(
                $app->make(ThemeRegistry::class),
                $app->make(ThemeManifest::class),
                [
                    'button' => new ConfigurableComponentTheme('button', ['primary', 'secondary', 'accent', 'neutral', 'outline', 'ghost'], ['xs', 'sm', 'md', 'lg', 'xl']),
                    'input' => new ConfigurableComponentTheme('input', ['bordered', 'ghost'], ['sm', 'md', 'lg']),
                    'select' => new ConfigurableComponentTheme('select', ['bordered', 'ghost'], ['sm', 'md', 'lg']),
                    'textarea' => new ConfigurableComponentTheme('textarea', ['bordered'], ['sm', 'md', 'lg']),
                    'checkbox' => new ConfigurableComponentTheme('checkbox', ['primary', 'secondary'], ['sm', 'md', 'lg']),
                    'radio' => new ConfigurableComponentTheme('radio', ['primary', 'secondary'], ['sm', 'md', 'lg']),
                    'toggle' => new ConfigurableComponentTheme('toggle', ['primary', 'secondary'], ['sm', 'md', 'lg']),
                    'card' => new ConfigurableComponentTheme('card', ['default', 'bordered', 'elevated']),
                    'alert' => new ConfigurableComponentTheme('alert', ['info', 'success', 'warning', 'error']),
                    'badge' => new ConfigurableComponentTheme('badge', ['primary', 'secondary', 'accent'], ['sm', 'md', 'lg']),
                    'divider' => new ConfigurableComponentTheme('divider'),
                ]
            );
        });
    }

    public function boot(): void
    {
        $packageRoot = dirname(__DIR__, 2);
        $configPath = $packageRoot . '/config/w4-native-ui.php';
        $distPath = $packageRoot . '/dist';

        if ($this->app->runningInConsole()) {
            if (is_file($configPath)) {
                $this->publishes([
                    $configPath => config_path('w4-native-ui.php'),
                ], 'w4-native-ui-config');
            }

            if (is_dir($distPath)) {
                $this->publishes([
                    $distPath => public_path('vendor/w4-native-ui'),
                ], 'w4-native-ui-dist');
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
                BuildNativeUiAssetsCommand::class,
                InstallNativeUiCommand::class,
            ]);
        }
    }
}
