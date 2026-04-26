<?php

namespace W4\NativeUI\Themes\Components\Navigation\SideBar;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class SideBarTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'sidebar';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'neutral', 'base-100', 'base-200', 'base-300'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl', 'full'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'collapsed', 'expanded', 'left', 'right', 'fixed', 'sticky'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => 'w4-sidebar-enabled',
                'js' => 'sidebar:enabled',
            ],
            'disabled' => [
                'class' => 'w4-sidebar-disabled',
                'js' => 'sidebar:disabled',
            ],
            'active' => [
                'class' => 'w4-sidebar-active',
                'js' => 'sidebar:active',
            ],
            'hidden' => [
                'class' => 'w4-sidebar-hidden',
                'js' => 'sidebar:hidden',
            ],
            'collapsed' => [
                'class' => 'w4-sidebar-collapsed',
                'js' => 'sidebar:collapsed',
            ],
            'expanded' => [
                'class' => 'w4-sidebar-expanded',
                'js' => 'sidebar:expanded',
            ],
            'left' => [
                'class' => 'w4-sidebar-left',
            ],
            'right' => [
                'class' => 'w4-sidebar-right',
            ],
            'fixed' => [
                'class' => 'w4-sidebar-fixed',
            ],
            'sticky' => [
                'class' => 'w4-sidebar-sticky',
            ],
        ];
    }
}
