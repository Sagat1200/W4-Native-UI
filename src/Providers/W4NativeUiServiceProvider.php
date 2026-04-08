<?php

namespace W4\NativeUi\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use W4\NativeUi\Console\Commands\InstallNativeUiCommand;
use W4\NativeUi\Console\Commands\BuildNativeUiAssetsCommand;
use W4\NativeUi\Support\ThemeManifest;
use W4\NativeUi\Support\ThemeRegistry;
use W4\NativeUi\Themes\NativeTheme;
use W4\NativeUi\Themes\Components\UI\ButtonTheme;
use W4\NativeUi\Themes\Components\UI\IconTheme;
use W4\NativeUi\Themes\Components\UI\IconButtonTheme;
use W4\NativeUi\Themes\Components\UI\LabelTheme;
use W4\NativeUi\Themes\Components\UI\LinkTheme;
use W4\NativeUi\Themes\Components\UI\TextTheme;
use W4\NativeUi\Themes\Components\Forms\InputTheme;
use W4\NativeUi\Themes\Components\Forms\FieldErrorTheme;
use W4\NativeUi\Themes\Components\Forms\HelperTextTheme;
use W4\NativeUi\Themes\Components\Forms\SelectTheme;
use W4\NativeUi\Themes\Components\Forms\TextareaTheme;
use W4\NativeUi\Themes\Components\Forms\CheckboxTheme;
use W4\NativeUi\Themes\Components\Forms\RadioTheme;
use W4\NativeUi\Themes\Components\Forms\ToggleTheme;
use W4\NativeUi\Themes\Components\Layout\CardTheme;
use W4\NativeUi\Themes\Components\Layout\ContainerTheme;
use W4\NativeUi\Themes\Components\Layout\StackTheme;
use W4\NativeUi\Themes\Components\Layout\GridTheme;
use W4\NativeUi\Themes\Components\Layout\SectionTheme;
use W4\NativeUi\Themes\Components\Layout\PanelTheme;
use W4\NativeUi\Themes\Components\UI\DividerTheme;
use W4\NativeUi\Themes\Components\UI\HeadingTheme;
use W4\NativeUi\Themes\Components\FeedBack\AlertTheme;
use W4\NativeUi\Themes\Components\FeedBack\BadgeTheme;
use W4\NativeUi\Themes\Components\FeedBack\ToastTheme;
use W4\NativeUi\Themes\Components\FeedBack\ProgressTheme;
use W4\NativeUi\Themes\Components\FeedBack\SkeletonTheme;
use W4\NativeUi\Themes\Components\FeedBack\TooltipTheme;
use W4\NativeUi\Themes\Presets\CorporatePreset;
use W4\NativeUi\Themes\Presets\DarkPreset;
use W4\NativeUi\Themes\Presets\NightPreset;
use W4\NativeUi\Themes\Presets\SynthwavePreset;
use W4\NativeUi\Themes\Presets\LightPreset;
use W4\NativeUi\Themes\Presets\CupcakePreset;
use W4\NativeUi\Themes\Presets\BumblebeePreset;
use W4\NativeUi\Themes\Presets\EmeraldPreset;
use W4\NativeUi\Themes\Presets\RetroPreset;
use W4\NativeUi\Themes\Presets\CyberpunkPreset;
use W4\NativeUi\Themes\Presets\ValentinePreset;
use W4\NativeUi\Themes\Presets\HalloweenPreset;

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

            $registry->registerPreset(new DarkPreset());
            $registry->registerPreset(new CorporatePreset());
            $registry->registerPreset(new NightPreset());
            $registry->registerPreset(new SynthwavePreset());
            $registry->registerPreset(new LightPreset());
            $registry->registerPreset(new CupcakePreset());
            $registry->registerPreset(new BumblebeePreset());
            $registry->registerPreset(new EmeraldPreset());
            $registry->registerPreset(new RetroPreset());
            $registry->registerPreset(new CyberpunkPreset());
            $registry->registerPreset(new ValentinePreset());
            $registry->registerPreset(new HalloweenPreset());

            return $registry;
        });

        $this->app->singleton(NativeTheme::class, function ($app) {
            return new NativeTheme(
                $app->make(ThemeRegistry::class),
                $app->make(ThemeManifest::class),
                [
                    'button' => new ButtonTheme(),
                    'icon' => new IconTheme(),
                    'icon-button' => new IconButtonTheme(),
                    'label' => new LabelTheme(),
                    'link' => new LinkTheme(),
                    'text' => new TextTheme(),
                    'input' => new InputTheme(),
                    'field-error' => new FieldErrorTheme(),
                    'helper-text' => new HelperTextTheme(),
                    'select' => new SelectTheme(),
                    'textarea' => new TextareaTheme(),
                    'checkbox' => new CheckboxTheme(),
                    'radio' => new RadioTheme(),
                    'toggle' => new ToggleTheme(),
                    'card' => new CardTheme(),
                    'alert' => new AlertTheme(),
                    'badge' => new BadgeTheme(),
                    'divider' => new DividerTheme(),
                    'heading' => new HeadingTheme(),
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

        $this->loadViewsFrom($packageRoot . '/resources/views', 'w4-native-ui');

        Blade::directive('W4NativeStyles', function () {
            return "<?php echo '<link rel=\"stylesheet\" href=\"'.asset('vendor/w4-native-ui/w4-native.css').'\">'; ?>";
        });

        Blade::directive('W4NativeScripts', function () {
            return "<?php echo '<script src=\"'.asset('vendor/w4-native-ui/w4-native.js').'\"></script>'; ?>";
        });

        Blade::directive('W4NativeInit', function () {
            return
                "<?php echo '<script>document.addEventListener(\"DOMContentLoaded\", function () { window.W4NativeUI.init(document); });</script>'; ?>";
        });

        Blade::directive('W4NativeLivewire', function () {
            return
                "<?php echo '<script>document.addEventListener(\"livewire:navigated\", function () { window.W4NativeUI.init(document); });</script>'; ?>";
        });

        Route::get('/w4/theme-lab', function () {
            return view('w4-native-ui::w4-theme-lab');
        })->name('w4-native-ui.theme-lab');

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
