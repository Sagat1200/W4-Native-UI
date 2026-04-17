<?php

namespace W4\NativeUI\Themes\Components\Navigation\Menu;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class MenuTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'menu';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'neutral', 'base-100', 'base-200', 'base-300'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'open', 'horizontal', 'vertical', 'compact', 'expanded'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'menu:enabled',
            ],
            'disabled' => [
                'class' => 'w4-menu-disabled',
                'js' => 'menu:disabled',
            ],
            'active' => [
                'class' => 'w4-menu-active',
                'js' => 'menu:active',
            ],
            'hidden' => [
                'class' => 'w4-menu-hidden',
                'js' => 'menu:hidden',
            ],
            'open' => [
                'class' => 'w4-menu-open',
                'js' => 'menu:open',
            ],
            'horizontal' => [
                'class' => 'w4-menu-horizontal',
            ],
            'vertical' => [
                'class' => 'w4-menu-vertical',
            ],
            'compact' => [
                'class' => 'w4-menu-compact',
            ],
            'expanded' => [
                'class' => 'w4-menu-expanded',
            ],
        ];
    }
}