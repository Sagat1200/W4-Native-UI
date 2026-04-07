<?php

namespace W4\NativeUi\Tests\Feature;

use W4\NativeUi\Tests\TestCase;

class BuildAssetsCommandTest extends TestCase
{
    public function test_compila_assets_css_en_dist(): void
    {
        $this->artisan('w4-native:build-assets')
            ->assertSuccessful();

        $distCss = dirname(__DIR__, 2) . '/dist/w4-native.css';
        $content = (string) file_get_contents($distCss);

        $this->assertFileExists($distCss);
        $this->assertStringContainsString(':root {', $content);
        $this->assertStringContainsString('.w4-btn', $content);
        $this->assertStringContainsString('.w4-select', $content);
        $this->assertStringContainsString('.w4-panel', $content);
        $this->assertStringContainsString('.w4-toast', $content);
    }
}
