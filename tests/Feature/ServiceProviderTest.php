<?php

namespace W4\NativeUI\Tests\Feature;

use W4\NativeUI\Support\ThemeRegistry;
use W4\NativeUI\Tests\TestCase;
use W4\NativeUI\Tools\Themes\NativeUITheme;

class ServiceProviderTest extends TestCase
{
    public function test_resuelve_servicios_principales(): void
    {
        $registry = $this->app->make(ThemeRegistry::class);
        $theme = $this->app->make(NativeUITheme::class);

        $this->assertTrue($registry->hasPreset('native-ui.light'));
        $this->assertTrue($registry->hasPreset('native-ui.dark'));
        $this->assertSame('native-ui.default', $theme->defaultPreset());
    }

    public function test_resuelve_clases_de_componente(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

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

    public function test_permite_variantes_dinamicas_passthrough(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('button', [
            'variant' => 'nueva-variante-no-registrada',
            'size' => 'md',
        ]);

        $this->assertSame([
            'w4-button',
            'w4-button-nueva-variante-no-registrada',
            'w4-button-md',
        ], $classes);
    }

    public function test_cachea_la_resolucion_de_componentes_para_evitar_overhead(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        // Primera llamada: resuelve y guarda en caché
        $state = ['variant' => 'primary', 'size' => 'lg'];
        $classes1 = $theme->resolveComponent('button', $state);

        // Segunda llamada con el mismo estado: debe venir de caché (rápido)
        $classes2 = $theme->resolveComponent('button', $state);

        // Tercera llamada con llaves desordenadas: también debe venir de caché
        $stateReordered = ['size' => 'lg', 'variant' => 'primary'];
        $classes3 = $theme->resolveComponent('button', $stateReordered);

        $this->assertSame($classes1, $classes2);
        $this->assertSame($classes1, $classes3);
        $this->assertContains('w4-button-primary', $classes1);
    }

    public function test_resuelve_componentes_form_adicionales(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

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
        $theme = $this->app->make(NativeUITheme::class);

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
        $theme = $this->app->make(NativeUITheme::class);

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
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('unknown-component');

        $this->assertSame(['w4-unknown-component'], $classes);
    }

    public function test_expone_contrato_de_estados_y_hooks_js(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

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

    public function test_divider_resuelve_estado_core_y_orientacion(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('divider', [
            'variant' => 'neutral',
            'size' => 'md',
            'orientation' => 'vertical',
            'state' => 'hidden',
        ]);

        $this->assertSame([
            'w4-divider',
            'w4-divider-neutral',
            'w4-divider-md',
            'w4-divider-hidden',
            'w4-divider-vertical',
        ], $classes);

        $contract = $theme->resolveComponentContract('divider', [
            'state' => 'hidden',
        ]);

        $this->assertContains('divider:hide', $contract['js_hooks']);
    }

    public function test_heading_resuelve_level_y_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('heading', [
            'variant' => 'primary',
            'size' => 'lg',
            'level' => 'h1',
            'state' => 'active',
        ]);

        $this->assertSame([
            'w4-heading',
            'w4-heading-primary',
            'w4-heading-lg',
            'w4-heading-active',
            'w4-heading-h1',
        ], $classes);

        $contract = $theme->resolveComponentContract('heading', [
            'state' => 'active',
        ]);

        $this->assertContains('heading:active', $contract['js_hooks']);
    }

    public function test_icon_button_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('icon-button', [
            'variant' => 'primary',
            'size' => 'md',
            'state' => 'loading',
        ]);

        $this->assertSame([
            'w4-icon-button',
            'w4-icon-button-primary',
            'w4-icon-button-md',
            'w4-icon-button-loading',
        ], $classes);

        $contract = $theme->resolveComponentContract('icon-button', [
            'state' => 'loading',
        ]);

        $this->assertContains('icon-button:loading', $contract['js_hooks']);
    }

    public function test_icon_resuelve_estado_core_y_flags_visuales(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('icon', [
            'variant' => 'primary',
            'size' => 'lg',
            'state' => 'active',
            'spin' => true,
            'decorative' => true,
        ]);

        $this->assertSame([
            'w4-icon',
            'w4-icon-primary',
            'w4-icon-lg',
            'w4-icon-active',
            'w4-icon-spin',
            'w4-icon-decorative',
        ], $classes);

        $contract = $theme->resolveComponentContract('icon', [
            'state' => 'active',
        ]);

        $this->assertContains('icon:active', $contract['js_hooks']);
    }

    public function test_label_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('label', [
            'variant' => 'required',
            'size' => 'sm',
            'state' => 'active',
        ]);

        $this->assertSame([
            'w4-label',
            'w4-label-required',
            'w4-label-sm',
            'w4-label-active',
        ], $classes);

        $contract = $theme->resolveComponentContract('label', [
            'state' => 'active',
        ]);

        $this->assertContains('label:active', $contract['js_hooks']);
    }

    public function test_link_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('link', [
            'variant' => 'accent',
            'size' => 'md',
            'state' => 'active',
        ]);

        $this->assertSame([
            'w4-link',
            'w4-link-accent',
            'w4-link-md',
            'w4-link-active',
        ], $classes);

        $contract = $theme->resolveComponentContract('link', [
            'state' => 'active',
        ]);

        $this->assertContains('link:active', $contract['js_hooks']);
    }

    public function test_text_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('text', [
            'variant' => 'lead',
            'size' => 'lg',
            'state' => 'active',
        ]);

        $this->assertSame([
            'w4-text',
            'w4-text-lead',
            'w4-text-lg',
            'w4-text-active',
        ], $classes);

        $contract = $theme->resolveComponentContract('text', [
            'state' => 'active',
        ]);

        $this->assertContains('text:active', $contract['js_hooks']);
    }

    public function test_checkbox_resuelve_estado_core_y_flags(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('checkbox', [
            'variant' => 'secondary',
            'size' => 'lg',
            'state' => 'readonly',
            'checked' => true,
        ]);

        $this->assertSame([
            'w4-checkbox',
            'w4-checkbox-secondary',
            'w4-checkbox-lg',
            'w4-checkbox-readonly',
            'w4-checkbox-checked',
        ], $classes);

        $contract = $theme->resolveComponentContract('checkbox', [
            'state' => 'readonly',
        ]);

        $this->assertContains('checkbox:readonly', $contract['js_hooks']);
    }

    public function test_radio_resuelve_estado_core_y_flags(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('radio', [
            'variant' => 'secondary',
            'size' => 'lg',
            'state' => 'readonly',
            'selected' => true,
        ]);

        $this->assertSame([
            'w4-radio',
            'w4-radio-secondary',
            'w4-radio-lg',
            'w4-radio-readonly',
            'w4-radio-selected',
        ], $classes);

        $contract = $theme->resolveComponentContract('radio', [
            'state' => 'readonly',
        ]);

        $this->assertContains('radio:readonly', $contract['js_hooks']);
    }

    public function test_toggle_resuelve_estado_core_y_flags(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('toggle', [
            'variant' => 'secondary',
            'size' => 'lg',
            'state' => 'readonly',
            'checked' => true,
        ]);

        $this->assertSame([
            'w4-toggle',
            'w4-toggle-secondary',
            'w4-toggle-lg',
            'w4-toggle-readonly',
            'w4-toggle-checked',
        ], $classes);

        $contract = $theme->resolveComponentContract('toggle', [
            'state' => 'readonly',
        ]);

        $this->assertContains('toggle:readonly', $contract['js_hooks']);
    }

    public function test_select_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('select', [
            'variant' => 'default',
            'size' => 'xl',
            'state' => 'readonly',
        ]);

        $this->assertSame([
            'w4-select',
            'w4-select-default',
            'w4-select-xl',
            'w4-select-readonly',
        ], $classes);

        $contract = $theme->resolveComponentContract('select', [
            'state' => 'readonly',
        ]);

        $this->assertContains('select:readonly', $contract['js_hooks']);
    }

    public function test_textarea_resuelve_estado_core_y_resize(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('textarea', [
            'variant' => 'default',
            'size' => 'xl',
            'state' => 'readonly',
            'resize' => 'horizontal',
        ]);

        $this->assertSame([
            'w4-textarea',
            'w4-textarea-default',
            'w4-textarea-xl',
            'w4-textarea-readonly',
            'w4-textarea-resize-horizontal',
        ], $classes);

        $contract = $theme->resolveComponentContract('textarea', [
            'state' => 'readonly',
        ]);

        $this->assertContains('textarea:readonly', $contract['js_hooks']);
    }

    public function test_input_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('input', [
            'variant' => 'default',
            'size' => 'xl',
            'state' => 'readonly',
        ]);

        $this->assertSame([
            'w4-input',
            'w4-input-default',
            'w4-input-xl',
            'w4-input-readonly',
        ], $classes);

        $contract = $theme->resolveComponentContract('input', [
            'state' => 'readonly',
        ]);

        $this->assertContains('input:readonly', $contract['js_hooks']);
    }

    public function test_field_error_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('field-error', [
            'variant' => 'warning',
            'size' => 'sm',
            'state' => 'active',
        ]);

        $this->assertSame([
            'w4-field-error',
            'w4-field-error-warning',
            'w4-field-error-sm',
            'w4-field-error-active',
        ], $classes);

        $contract = $theme->resolveComponentContract('field-error', [
            'state' => 'active',
        ]);

        $this->assertContains('field-error:active', $contract['js_hooks']);
    }

    public function test_helper_text_resuelve_estado_core(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $classes = $theme->resolveComponent('helper-text', [
            'variant' => 'info',
            'size' => 'sm',
            'state' => 'active',
        ]);

        $this->assertSame([
            'w4-helper-text',
            'w4-helper-text-info',
            'w4-helper-text-sm',
            'w4-helper-text-active',
        ], $classes);

        $contract = $theme->resolveComponentContract('helper-text', [
            'state' => 'active',
        ]);

        $this->assertContains('helper-text:active', $contract['js_hooks']);
    }

    public function test_todos_los_componentes_registrados_soportan_xs_y_lg(): void
    {
        $theme = $this->app->make(NativeUITheme::class);

        $components = [
            'button',
            'icon',
            'icon-button',
            'label',
            'link',
            'text',
            'input',
            'field-error',
            'helper-text',
            'select',
            'textarea',
            'checkbox',
            'radio',
            'toggle',
            'card',
            'container',
            'stack',
            'grid',
            'section',
            'panel',
            'divider',
            'heading',
            'alert',
            'badge',
            'toast',
            'progress',
            'skeleton',
            'tooltip',
        ];

        foreach ($components as $component) {
            $xsClasses = $theme->resolveComponent($component, ['size' => 'xs']);
            $lgClasses = $theme->resolveComponent($component, ['size' => 'lg']);

            $this->assertContains("w4-{$component}-xs", $xsClasses, "El componente {$component} no resuelve size xs");
            $this->assertContains("w4-{$component}-lg", $lgClasses, "El componente {$component} no resuelve size lg");
        }
    }
}