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
        // Sidebar sizes typically refer to width
        return ['xs', 'sm', 'md', 'lg', 'xl', 'full'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'collapsed', 'open', 'right', 'left', 'fixed'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
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
            'open' => [
                'class' => 'w4-sidebar-open',
                'js' => 'sidebar:open',
            ],
            'right' => [
                'class' => 'w4-sidebar-right',
            ],
            'left' => [
                'class' => 'w4-sidebar-left',
            ],
            'fixed' => [
                'class' => 'w4-sidebar-fixed',
            ],
        ];
    }
}