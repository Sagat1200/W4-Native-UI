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
                    'button' => new ConfigurableComponentTheme('button', ['primary', 'secondary', 'accent', 'neutral', 'outline', 'ghost'], ['xs', 'sm', 'md', 'lg', 'xl'], ['disabled', 'loading', 'active']),
                    'input' => new ConfigurableComponentTheme('input', ['bordered', 'ghost'], ['sm', 'md', 'lg'], ['disabled', 'invalid', 'focus']),
                    'select' => new ConfigurableComponentTheme('select', ['bordered', 'ghost'], ['sm', 'md', 'lg'], ['disabled', 'invalid', 'focus']),
                    'textarea' => new ConfigurableComponentTheme('textarea', ['bordered'], ['sm', 'md', 'lg'], ['disabled', 'invalid', 'focus']),
                    'checkbox' => new ConfigurableComponentTheme('checkbox', ['primary', 'secondary'], ['sm', 'md', 'lg'], ['disabled', 'checked']),
                    'radio' => new ConfigurableComponentTheme('radio', ['primary', 'secondary'], ['sm', 'md', 'lg'], ['disabled', 'checked']),
                    'toggle' => new ConfigurableComponentTheme('toggle', ['primary', 'secondary'], ['sm', 'md', 'lg'], ['disabled', 'checked']),
                    'card' => new ConfigurableComponentTheme('card', ['default', 'bordered', 'elevated'], [], ['hover']),
                    'alert' => new ConfigurableComponentTheme('alert', ['info', 'success', 'warning', 'error'], ['sm', 'md', 'lg']),
                    'badge' => new ConfigurableComponentTheme('badge', ['primary', 'secondary', 'accent'], ['sm', 'md', 'lg']),
                    'divider' => new ConfigurableComponentTheme('divider'),
                    'container' => new ConfigurableComponentTheme('container', ['fluid', 'narrow'], ['sm', 'md', 'lg']),
                    'stack' => new ConfigurableComponentTheme('stack', ['vertical', 'horizontal'], ['sm', 'md', 'lg']),
                    'grid' => new ConfigurableComponentTheme('grid', ['1', '2', '3', '4'], ['sm', 'md', 'lg']),
                    'section' => new ConfigurableComponentTheme('section', ['default', 'muted'], ['sm', 'md', 'lg']),
                    'panel' => new ConfigurableComponentTheme('panel', ['default', 'bordered', 'elevated'], ['sm', 'md', 'lg']),
                    'toast' => new ConfigurableComponentTheme('toast', ['info', 'success', 'warning', 'error'], ['sm', 'md', 'lg']),
                    'progress' => new ConfigurableComponentTheme('progress', ['primary', 'secondary', 'accent'], ['sm', 'md', 'lg']),
                    'skeleton' => new ConfigurableComponentTheme('skeleton', ['line', 'block', 'circle'], ['sm', 'md', 'lg']),
                    'tooltip' => new ConfigurableComponentTheme('tooltip', ['top', 'right', 'bottom', 'left'], ['sm', 'md', 'lg']),
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