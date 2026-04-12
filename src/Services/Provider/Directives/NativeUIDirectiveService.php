<?php

namespace W4\NativeUI\Services\Provider\Directives;

use Illuminate\Support\Facades\Blade;

class NativeUIDirectiveService
{
    public static function register(): void
    {
        Blade::directive('NativeUIStyles', function () {
            return "<?php echo '<link rel=\"stylesheet\" href=\"'.asset('vendor/w4-native-ui/w4-native-ui.css').'\">'; ?>";
        });

        Blade::directive('NativeUIScripts', function () {
            return "<?php echo '<script src=\"'.asset('vendor/w4-native-ui/w4-native-ui.js').'\"></script>'; ?>";
        });

        Blade::directive('NativeUIInit', function () {
            return "<?php echo '<script>document.addEventListener(\"DOMContentLoaded\", function () { window.NativeUI.init(document); });</script>'; ?>";
        });

        Blade::directive('NativeUILivewire', function () {
            return "<?php echo '<script>document.addEventListener(\"livewire:navigated\", function () { window.NativeUI.init(document); });</script>'; ?>";
        });
    }
}