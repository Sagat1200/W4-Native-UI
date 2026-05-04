<?php

namespace W4\NativeUI\Services\Provider\Directives;

use Illuminate\Support\Facades\Blade;

class NativeUIDirectiveService
{
    public static function register(): void
    {
        $styles = function () {
            return "<?php echo '<link rel=\"stylesheet\" href=\"'.asset('vendor/w4-native-ui/w4-native-ui.css').'\">'; ?>";
        };

        $scripts = function () {
            return "<?php echo '<script src=\"'.asset('vendor/w4-native-ui/w4-native-ui.js').'\"></script>'; ?>";
        };

        $init = function () {
            return "<?php echo '<script>document.addEventListener(\"DOMContentLoaded\", function () { if(window.W4NativeUI) { window.W4NativeUI.start(); } else if(window.NativeUI) { window.NativeUI.init(document); } });</script>'; ?>";
        };

        $livewire = function () {
            return "<?php echo '<script>document.addEventListener(\"livewire:navigated\", function () { if(window.W4NativeUI) { window.W4NativeUI.start(); } else if(window.NativeUI) { window.NativeUI.init(document); } });</script>'; ?>";
        };

        Blade::directive('NativeUIStyles', $styles);
        Blade::directive('NativeUIScripts', $scripts);
        Blade::directive('NativeUIInit', $init);
        Blade::directive('NativeUILivewire', $livewire);

        // Backward compatibility aliases.
        Blade::directive('W4NativeStyles', $styles);
        Blade::directive('W4NativeScripts', $scripts);
        Blade::directive('W4NativeInit', $init);
        Blade::directive('W4NativeLivewire', $livewire);

        Blade::directive('w4Merge', function ($expression) {
            return "<?php echo \TailwindMerge\TailwindMerge::instance()->merge($expression); ?>";
        });
    }
}
