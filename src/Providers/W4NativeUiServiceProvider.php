<?php

namespace W4\NativeUi\Providers;

use Illuminate\Support\ServiceProvider;
use W4\NativeUi\Console\Commands\InstallNativeUiCommand;

class W4NativeUiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $configPath = __DIR__ . '/../../config/w4-native-ui.php';

        if (is_file($configPath)) {
            $this->mergeConfigFrom($configPath, 'w4-native-ui');
        }
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
                InstallNativeUiCommand::class,
            ]);
        }
    }
}
