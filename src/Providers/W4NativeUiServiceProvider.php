<?php

namespace W4\NativeUi\Providers;

use Illuminate\Support\ServiceProvider;
use W4\NativeUi\Console\Commands\InstallNativeUiCommand;
use W4\NativeUi\Console\Commands\BuildNativeUiAssetsCommand;
use W4\NativeUi\Support\ThemeManifest;
use W4\NativeUi\Support\ThemeRegistry;
use W4\NativeUi\Themes\NativeTheme;
use W4\NativeUi\Themes\Components\UI\ButtonTheme;
use W4\NativeUi\Themes\Components\Forms\InputTheme;
use W4\NativeUi\Themes\Components\Forms\SelectTheme;
use W4\NativeUi\Themes\Components\Forms\TextareaTheme;
use W4\NativeUi\Themes\Components\Forms\CheckboxTheme;
use W4\NativeUi\Themes\Components\Forms\RadioTheme;
use W4\NativeUi\Themes\Components\Forms\ToggleTheme;
use W4\NativeUi\Themes\Components\Layout\CardTheme;
use W4\NativeUi\Themes\Components\Layout\DividerTheme;
use W4\NativeUi\Themes\Components\Layout\ContainerTheme;
use W4\NativeUi\Themes\Components\Layout\StackTheme;
use W4\NativeUi\Themes\Components\Layout\GridTheme;
use W4\NativeUi\Themes\Components\Layout\SectionTheme;
use W4\NativeUi\Themes\Components\Layout\PanelTheme;
use W4\NativeUi\Themes\Components\FeedBack\AlertTheme;
use W4\NativeUi\Themes\Components\FeedBack\BadgeTheme;
use W4\NativeUi\Themes\Components\FeedBack\ToastTheme;
use W4\NativeUi\Themes\Components\FeedBack\ProgressTheme;
use W4\NativeUi\Themes\Components\FeedBack\SkeletonTheme;
use W4\NativeUi\Themes\Components\FeedBack\TooltipTheme;
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
                    'button' => new ButtonTheme(),
                    'input' => new InputTheme(),
                    'select' => new SelectTheme(),
                    'textarea' => new TextareaTheme(),
                    'checkbox' => new CheckboxTheme(),
                    'radio' => new RadioTheme(),
                    'toggle' => new ToggleTheme(),
                    'card' => new CardTheme(),
                    'alert' => new AlertTheme(),
                    'badge' => new BadgeTheme(),
                    'divider' => new DividerTheme(),
                    'container' => new ContainerTheme(),
                    'stack' => new StackTheme(),
                    'grid' => new GridTheme(),
                    'section' => new SectionTheme(),
                    'panel' => new PanelTheme(),
                    'toast' => new ToastTheme(),
                    'progress' => new ProgressTheme(),
                    'skeleton' => new SkeletonTheme(),
                    'tooltip' => new TooltipTheme(),
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
