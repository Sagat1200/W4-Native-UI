<?php

namespace W4\NativeUI\Tests\Feature;

use Illuminate\Support\Facades\Blade;
use W4\NativeUI\Tests\TestCase;

class BladeComponentsRenderTest extends TestCase
{
    public function test_renderiza_componentes_blade_de_ejemplo(): void
    {
        $button = Blade::render('<x-w4-native::button variant="primary" size="md">Guardar</x-w4-native::button>');
        $this->assertStringContainsString('w4-button', $button);
        $this->assertStringContainsString('w4-button-primary', $button);

        $badge = Blade::render('<x-w4-native::badge variant="success" soft>Activo</x-w4-native::badge>');
        $this->assertStringContainsString('w4-badge', $badge);
        $this->assertStringContainsString('w4-badge-success', $badge);
        $this->assertStringContainsString('w4-badge-soft', $badge);

        $alert = Blade::render('<x-w4-native::alert variant="warning">Revisa</x-w4-native::alert>');
        $this->assertStringContainsString('role="alert"', $alert);
        $this->assertStringContainsString('w4-alert-warning', $alert);

        $card = Blade::render('<x-w4-native::card variant="base-100" bordered bordered-variant="primary">Contenido</x-w4-native::card>');
        $this->assertStringContainsString('w4-card', $card);
        $this->assertStringContainsString('w4-card-bordered', $card);
        $this->assertStringContainsString('w4-card-bordered-primary', $card);

        $toggle = Blade::render('<x-w4-native::toggle name="newsletter" variant="primary" :checked="true" />');
        $this->assertStringContainsString('type="checkbox"', $toggle);
        $this->assertStringContainsString('w4-toggle', $toggle);
        $this->assertStringContainsString('w4-toggle-primary', $toggle);
    }
}
