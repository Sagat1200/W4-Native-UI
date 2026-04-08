<?php

namespace W4\NativeUi\Tests\Feature;

use Illuminate\Support\Facades\Blade;
use W4\NativeUi\Tests\TestCase;

class BladeDirectivesTest extends TestCase
{
    public function test_renderiza_directiva_w4_native_styles(): void
    {
        $html = Blade::render('@W4NativeStyles');

        $this->assertStringContainsString('vendor/w4-native-ui/w4-native.css', $html);
        $this->assertStringContainsString('rel="stylesheet"', $html);
    }

    public function test_renderiza_directiva_w4_native_scripts(): void
    {
        $html = Blade::render('@W4NativeScripts');

        $this->assertStringContainsString('vendor/w4-native-ui/w4-native.js', $html);
        $this->assertStringContainsString('<script', $html);
    }
}
