<?php

namespace W4\Native\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use W4\Native\Console\Commands\InstallNativeCommand;
use W4\Native\Console\Commands\BuildNativeAssetsCommand;
use W4\Native\Support\ThemeManifest;
use W4\Native\Support\ThemeRegistry;
use W4\Native\Themes\NativeTheme;
use W4\Native\Themes\Components\UI\ButtonTheme;
use W4\Native\Themes\Components\UI\IconTheme;
use W4\Native\Themes\Components\UI\IconButtonTheme;
use W4\Native\Themes\Components\UI\LabelTheme;
use W4\Native\Themes\Components\UI\LinkTheme;
use W4\Native\Themes\Components\UI\TextTheme;
use W4\Native\Themes\Components\Forms\InputTheme;
use W4\Native\Themes\Components\Forms\FieldErrorTheme;
use W4\Native\Themes\Components\Forms\HelperTextTheme;
use W4\Native\Themes\Components\Forms\SelectTheme;
use W4\Native\Themes\Components\Forms\TextareaTheme;
use W4\Native\Themes\Components\Forms\CheckboxTheme;
use W4\Native\Themes\Components\Forms\RadioTheme;
use W4\Native\Themes\Components\Forms\ToggleTheme;
use W4\Native\Themes\Components\Layout\CardTheme;
use W4\Native\Themes\Components\Layout\ContainerTheme;
use W4\Native\Themes\Components\Layout\StackTheme;
use W4\Native\Themes\Components\Layout\GridTheme;
use W4\Native\Themes\Components\Layout\SectionTheme;
use W4\Native\Themes\Components\Layout\PanelTheme;
use W4\Native\Themes\Components\UI\DividerTheme;
use W4\Native\Themes\Components\UI\HeadingTheme;
use W4\Native\Themes\Components\FeedBack\AlertTheme;
use W4\Native\Themes\Components\FeedBack\BadgeTheme;
use W4\Native\Themes\Components\FeedBack\ToastTheme;
use W4\Native\Themes\Components\FeedBack\ProgressTheme;
use W4\Native\Themes\Components\FeedBack\SkeletonTheme;
use W4\Native\Themes\Components\FeedBack\TooltipTheme;
use W4\Native\Tools\W4NativeTheme;

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

            W4NativeTheme::registerPresets($registry);

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
        $configPath = $packageRoot . '/config/w4-native.php';
        $distPath = $packageRoot . '/dist';

        $this->loadViewsFrom($packageRoot . '/resources/views', 'w4-native');

        Blade::directive('W4NativeStyles', function () {
            return "<?php echo '<link rel=\"stylesheet\" href=\"'.asset('vendor/w4-native/w4-native.css').'\">'; ?>";
});

Blade::directive('W4NativeScripts', function () {
return "<?php echo '<script src=\"'.asset('vendor/w4-native/w4-native.js').'\"></script>'; ?>";
});

Blade::directive('W4NativeInit', function () {
return
"<?php echo '<script>document.addEventListener(\"DOMContentLoaded\", function () { window.W4Native.init(document); });</script>'; ?>";
});

Blade::directive('W4NativeLivewire', function () {
return
"<?php echo '<script>document.addEventListener(\"livewire:navigated\", function () { window.W4Native.init(document); });</script>'; ?>";
});

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
$publish[$configPath] = config_path('w4-native-ui.php');
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