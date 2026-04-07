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
}