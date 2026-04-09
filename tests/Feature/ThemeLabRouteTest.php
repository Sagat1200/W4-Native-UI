<?php

namespace W4\Native\Tests\Feature;

use W4\Native\Tests\TestCase;

class ThemeLabRouteTest extends TestCase
{
    public function test_theme_lab_route_esta_disponible_en_testing(): void
    {
        $this->get('/w4/theme-lab')
            ->assertOk()
            ->assertSee('W4 Theme Lab')
            ->assertSee('themeSwitcher');
    }
}