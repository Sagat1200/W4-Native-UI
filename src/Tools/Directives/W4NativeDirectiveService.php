<?php

namespace W4\Native\Tools\Directives;

use Illuminate\Support\Facades\Blade;

class W4NativeDirectiveService
{
    public static function register(): void
    {
        Blade::directive('W4NativeStyles', function () {
            return "<?php echo '<link rel=\"stylesheet\" href=\"'.asset('vendor/w4-native/w4-native.css').'\">'; ?>";
        });

        Blade::directive('W4NativeScripts', function () {
            return "<?php echo '<script src=\"'.asset('vendor/w4-native/w4-native.js').'\"></script>'; ?>";
        });

        Blade::directive('W4NativeInit', function () {
            return "<?php echo '<script>document.addEventListener(\"DOMContentLoaded\", function () { window.W4Native.init(document); });</script>'; ?>";
        });

        Blade::directive('W4NativeLivewire', function () {
            return "<?php echo '<script>document.addEventListener(\"livewire:navigated\", function () { window.W4Native.init(document); });</script>'; ?>";
        });
    }
}
