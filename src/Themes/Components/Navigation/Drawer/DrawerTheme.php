<?php

namespace W4\NativeUI\Themes\Components\Navigation\Drawer;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class DrawerTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'drawer';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'neutral', 'base-100', 'base-200', 'base-300'];
    }

    protected function sizes(): array
    {
        // Drawer sizes typically refer to width
        return ['xs', 'sm', 'md', 'lg', 'xl', 'full'];
    }

    protected function states(): array
    {
        return ['closed', 'open', 'left', 'right', 'top', 'bottom', 'fixed'];
    }

    public function stateMap(): array
    {
        return [
            'closed' => [
                'class' => '',
                'js' => 'drawer:closed',
            ],
            'open' => [
                'class' => 'w4-drawer-open',
                'js' => 'drawer:open',
            ],
            'left' => [
                'class' => 'w4-drawer-left',
            ],
            'right' => [
                'class' => 'w4-drawer-right',
            ],
            'top' => [
                'class' => 'w4-drawer-top',
            ],
            'bottom' => [
                'class' => 'w4-drawer-bottom',
            ],
            'fixed' => [
                'class' => 'w4-drawer-fixed',
            ],
        ];
    }
}
