<?php

namespace W4\NativeUI\Themes\Components\Navigation\DropDown;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class DropDownTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'dropdown';
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
        return ['enabled', 'disabled', 'active', 'hidden', 'open', 'end', 'top', 'bottom', 'left', 'right', 'hover'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'dropdown:enabled',
            ],
            'disabled' => [
                'class' => 'w4-dropdown-disabled',
                'js' => 'dropdown:disabled',
            ],
            'active' => [
                'class' => 'w4-dropdown-active',
                'js' => 'dropdown:active',
            ],
            'hidden' => [
                'class' => 'w4-dropdown-hidden',
                'js' => 'dropdown:hidden',
            ],
            'open' => [
                'class' => 'w4-dropdown-open',
                'js' => 'dropdown:open',
            ],
            'hover' => [
                'class' => 'w4-dropdown-hover',
            ],
            'end' => [
                'class' => 'w4-dropdown-end',
            ],
            'top' => [
                'class' => 'w4-dropdown-top',
            ],
            'bottom' => [
                'class' => 'w4-dropdown-bottom',
            ],
            'left' => [
                'class' => 'w4-dropdown-left',
            ],
            'right' => [
                'class' => 'w4-dropdown-right',
            ],
        ];
    }
}