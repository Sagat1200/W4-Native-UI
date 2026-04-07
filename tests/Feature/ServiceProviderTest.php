<?php

namespace W4\NativeUi\Tests\Feature;

use W4\NativeUi\Support\ThemeRegistry;
use W4\NativeUi\Tests\TestCase;
use W4\NativeUi\Themes\NativeTheme;

class ServiceProviderTest extends TestCase
{
    public function test_resuelve_servicios_principales(): void
    {
        $registry = $this->app->make(ThemeRegistry::class);
        $theme = $this->app->make(NativeTheme::class);

        $this->assertTrue($registry->hasPreset('native.default'));
        $this->assertTrue($registry->hasPreset('native.dark'));
        $this->assertSame('native.default', $theme->defaultPreset());
    }

    public function test_resuelve_clases_de_componente(): void
    {
        $theme = $this->app->make(NativeTheme::class);

        $classes = $theme->resolveComponent('button', [
            'variant' => 'primary',
            'size' => 'lg',
            'disabled' => true,
        ]);

        $this->assertSame([
            'w4-button',
            'w4-button-primary',
            'w4-button-lg',
            'w4-button-disabled',
        ], $classes);
    }

    public function test_ignora_variant_invalida_en_resolver(): void
    {
        $theme = $this->app->make(NativeTheme::class);

        $classes = $theme->resolveComponent('button', [
            'variant' => 'invalid',
            'size' => 'md',
        ]);

        $this->assertSame([
            'w4-button',
            'w4-button-md',
        ], $classes);
    }

    public function test_resuelve_componentes_form_adicionales(): void
    {
        $theme = $this->app->make(NativeTheme::class);

        $classes = $theme->resolveComponent('select', [
            'variant' => 'bordered',
            'size' => 'md',
        ]);

        $this->assertSame([
            'w4-select',
            'w4-select-bordered',
            'w4-select-md',
        ], $classes);
    }

    public function test_resuelve_estados_de_componentes(): void
    {
        $theme = $this->app->make(NativeTheme::class);

        $classes = $theme->resolveComponent('toggle', [
            'variant' => 'primary',
            'size' => 'sm',
            'checked' => true,
            'disabled' => true,
        ]);

        $this->assertSame([
            'w4-toggle',
            'w4-toggle-primary',
            'w4-toggle-sm',
            'w4-toggle-disabled',
            'w4-toggle-checked',
        ], $classes);
    }

    public function test_resuelve_componentes_layout_y_feedback(): void
    {
        $theme = $this->app->make(NativeTheme::class);

        $panelClasses = $theme->resolveComponent('panel', [
            'variant' => 'elevated',
            'size' => 'md',
        ]);

        $toastClasses = $theme->resolveComponent('toast', [
            'variant' => 'success',
        ]);

        $this->assertSame([
            'w4-panel',
            'w4-panel-elevated',
            'w4-panel-md',
        ], $panelClasses);

        $this->assertSame([
            'w4-toast',
            'w4-toast-success',
        ], $toastClasses);
    }

    public function test_fallback_para_componente_sin_resolver(): void
    {
        $theme = $this->app->make(NativeTheme::class);

        $classes = $theme->resolveComponent('unknown-component');

        $this->assertSame(['w4-unknown-component'], $classes);
    }

    public function test_expone_contrato_de_estados_y_hooks_js(): void
    {
        $theme = $this->app->make(NativeTheme::class);

        $contract = $theme->resolveComponentContract('button', [
            'variant' => 'primary',
            'size' => 'md',
            'loading' => true,
        ]);

        $this->assertSame('button', $contract['component']);
        $this->assertContains('w4-button-loading', $contract['classes']);
        $this->assertArrayHasKey('loading', $contract['state_map']);
        $this->assertSame('button:loading', $contract['state_map']['loading']['js']);
        $this->assertContains('button:loading', $contract['js_hooks']);
    }
}