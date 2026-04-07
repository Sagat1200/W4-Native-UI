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

        $this->assertFileExists($distCss);
        $this->assertStringContainsString(':root {', (string) file_get_contents($distCss));
        $this->assertStringContainsString('.w4-btn', (string) file_get_contents($distCss));
    }
}
