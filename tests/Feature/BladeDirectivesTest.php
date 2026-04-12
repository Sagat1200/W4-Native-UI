<?php

namespace W4\NativeUI\Tests\Feature;

use Illuminate\Support\Facades\Blade;
use W4\NativeUI\Tests\TestCase;

class BladeDirectivesTest extends TestCase
{
    public function test_renderiza_directiva_w4_native_styles(): void
    {
        $html = Blade::render('@NativeUI-Styles');

        $this->assertStringContainsString('vendor/w4-native-ui/w4-native-ui.css', $html);
        $this->assertStringContainsString('rel="stylesheet"', $html);
    }

    public function test_renderiza_directiva_w4_native_scripts(): void
    {
        $html = Blade::render('@NativeUI-Scripts');

        $this->assertStringContainsString('vendor/w4-native-ui/w4-native-ui.js', $html);
        $this->assertStringContainsString('<script', $html);
    }

    public function test_renderiza_directiva_w4_native_init(): void
    {
        $html = Blade::render('@NativeUI-Init');

        $this->assertStringContainsString('DOMContentLoaded', $html);
        $this->assertStringContainsString('window.NativeUI.init(document)', $html);
    }

    public function test_renderiza_directiva_w4_native_livewire(): void
    {
        $html = Blade::render('@NativeUI-Livewire');

        $this->assertStringContainsString('livewire:navigated', $html);
        $this->assertStringContainsString('window.NativeUI.init(document)', $html);
    }
}