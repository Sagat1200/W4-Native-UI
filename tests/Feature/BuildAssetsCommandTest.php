<?php

namespace W4\NativeUI\Tests\Feature;

use W4\NativeUI\Tests\TestCase;

class BuildAssetsCommandTest extends TestCase
{
    public function test_compila_assets_css_en_dist(): void
    {
        $this->artisan('w4-native-ui:build-assets')
            ->assertSuccessful();

        $distCss = dirname(__DIR__, 2) . '/dist/w4-native-ui.css';
        $distJs = dirname(__DIR__, 2) . '/dist/w4-native-ui.js';
        $content = (string) file_get_contents($distCss);
        $jsContent = (string) file_get_contents($distJs);

        $this->assertFileExists($distCss);
        $this->assertFileExists($distJs);
        $this->assertStringContainsString(':root {', $content);
        $this->assertStringContainsString('.w4-button', $content);
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
        $this->assertStringContainsString('.w4-button-xs', $content);
        $this->assertStringContainsString('.w4-button-loading', $content);
        $this->assertStringContainsString('.w4-card-lg', $content);
        $this->assertStringContainsString('.w4-alert-xs', $content);
        $this->assertStringContainsString('.w4-badge-lg', $content);
        $this->assertStringContainsString('.w4-section-xs', $content);
        $this->assertStringContainsString('.w4-tooltip-lg', $content);
        $this->assertStringContainsString('.w4-button-accent', $content);
        $this->assertStringContainsString('.w4-button-secondary', $content);
        $this->assertStringContainsString('.w4-button-outline', $content);
        $this->assertStringContainsString('.w4-button-ghost', $content);
        $this->assertStringContainsString('.w4-divider-primary', $content);
        $this->assertStringContainsString('.w4-divider-secondary', $content);
        $this->assertStringContainsString('.w4-divider-accent', $content);
        $this->assertStringContainsString('.w4-divider-muted', $content);
        $this->assertStringContainsString('window.W4NativeUI', $jsContent);
        $this->assertStringContainsString('data-w4-component', $jsContent);
        $this->assertStringContainsString('MutationObserver', $jsContent);
        $this->assertStringContainsString('class W4Core', $jsContent);
        $this->assertStringContainsString('W4Core.on(', $jsContent);
        $this->assertStringContainsString('W4Core.init()', $jsContent);
        $this->assertStringContainsString('applyPressFeedback', $jsContent);
        $this->assertStringContainsString('w4-button-pressing', $jsContent);
    }
}
