<?php

namespace W4\NativeUI\Tests\Feature;

use Illuminate\Support\Facades\Blade;
use W4\NativeUI\Tests\TestCase;

class BladeDirectivesTest extends TestCase
{
    public function test_renderiza_directiva_w4_native_styles(): void
    {
        $html = Blade::render('@NativeUIStyles');

        $this->assertStringContainsString('vendor/w4-native-ui/w4-native-ui.css', $html);
        $this->assertStringContainsString('rel="stylesheet"', $html);
    }

    public function test_renderiza_directiva_w4_native_scripts(): void
    {
        $html = Blade::render('@NativeUIScripts');

        $this->assertStringContainsString('vendor/w4-native-ui/w4-native-ui.js', $html);
        $this->assertStringContainsString('<script', $html);
    }

    public function test_renderiza_directiva_w4_native_init(): void
    {
        $html = Blade::render('@NativeUIInit');

        $this->assertStringContainsString('DOMContentLoaded', $html);
        $this->assertStringContainsString('window.NativeUI.init(document)', $html);
    }

    public function test_renderiza_directiva_w4_native_livewire(): void
    {
        $html = Blade::render('@NativeUILivewire');

        $this->assertStringContainsString('livewire:navigated', $html);
        $this->assertStringContainsString('window.NativeUI.init(document)', $html);
    }

    public function test_renderiza_directiva_w4_merge(): void
    {
        $html = Blade::render('@w4Merge("p-4 bg-red-500", "bg-blue-500 text-white")');

        $result = trim($html);
        $this->assertStringContainsString('p-4', $result);
        $this->assertStringContainsString('bg-blue-500', $result);
        $this->assertStringContainsString('text-white', $result);
        $this->assertStringNotContainsString('bg-red-500', $result);
    }

    public function test_registra_directivas_blade(): void
    {
        $directives = Blade::getCustomDirectives();

        $this->assertArrayHasKey('NativeUIStyles', $directives);
        $this->assertArrayHasKey('NativeUIScripts', $directives);
        $this->assertArrayHasKey('NativeUIInit', $directives);
        $this->assertArrayHasKey('NativeUILivewire', $directives);
        $this->assertArrayHasKey('W4NativeStyles', $directives);
        $this->assertArrayHasKey('W4NativeScripts', $directives);
        $this->assertArrayHasKey('W4NativeInit', $directives);
        $this->assertArrayHasKey('W4NativeLivewire', $directives);
        $this->assertArrayHasKey('w4Merge', $directives);
    }
}
