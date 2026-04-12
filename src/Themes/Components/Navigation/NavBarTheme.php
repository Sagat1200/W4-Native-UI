<?php

namespace W4\NativeUI\Themes\Components\Navigation;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class NavBarTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'navbar';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'neutral', 'base-100', 'base-200', 'base-300', 'ghost'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['sticky', 'fixed', 'transparent'];
    }

    public function stateMap(): array
    {
        return [
            'sticky' => [
                'class' => 'w4-navbar-sticky',
            ],
            'fixed' => [
                'class' => 'w4-navbar-fixed',
            ],
            'transparent' => [
                'class' => 'w4-navbar-transparent',
            ],
        ];
    }
}
