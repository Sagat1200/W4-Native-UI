<?php

namespace W4\Native\Tests\Feature;

use Illuminate\Support\Facades\Blade;
use W4\Native\Tests\TestCase;

class BladeDirectivesTest extends TestCase
{
    public function test_renderiza_directiva_w4_native_styles(): void
    {
        $html = Blade::render('@W4NativeStyles');

        $this->assertStringContainsString('vendor/w4-native/w4-native-daisy.css', $html);
        $this->assertStringContainsString('rel="stylesheet"', $html);
    }

    public function test_renderiza_directiva_w4_native_scripts(): void
    {
        $html = Blade::render('@W4NativeScripts');

        $this->assertStringContainsString('vendor/w4-native/w4-native-daisy.js', $html);
        $this->assertStringContainsString('<script', $html);
    }

    public function test_renderiza_directiva_w4_native_init(): void
    {
        $html = Blade::render('@W4NativeInit');

        $this->assertStringContainsString('DOMContentLoaded', $html);
        $this->assertStringContainsString('window.W4Native.init(document)', $html);
    }

    public function test_renderiza_directiva_w4_native_livewire(): void
    {
        $html = Blade::render('@W4NativeLivewire');

        $this->assertStringContainsString('livewire:navigated', $html);
        $this->assertStringContainsString('window.W4Native.init(document)', $html);
    }
}
