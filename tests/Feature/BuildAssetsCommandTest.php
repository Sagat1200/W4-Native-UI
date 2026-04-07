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
        $this->assertStringContainsString('.w4-heading', $content);
        $this->assertStringContainsString('.w4-icon-button', $content);
        $this->assertStringContainsString('.w4-icon', $content);
        $this->assertStringContainsString('.w4-label', $content);
        $this->assertStringContainsString('.w4-link', $content);
        $this->assertStringContainsString('.w4-text', $content);
        $this->assertStringContainsString('.w4-checkbox-readonly', $content);
        $this->assertStringContainsString('.w4-radio-readonly', $content);
        $this->assertStringContainsString('.w4-select-readonly', $content);
        $this->assertStringContainsString('.w4-toggle-readonly', $content);
        $this->assertStringContainsString('.w4-textarea-readonly', $content);
        $this->assertStringContainsString('.w4-field-error', $content);
        $this->assertStringContainsString('.w4-helper-text', $content);
        $this->assertStringContainsString('.w4-input-readonly', $content);
    }
}
