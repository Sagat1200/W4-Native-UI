<?php

namespace W4\NativeUI\Themes\Components\UI\IconButton;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class IconButtonTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'icon-button';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'neutral', 'ghost'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'loading', 'readonly', 'active'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-icon-button-disabled',
                'js' => 'icon-button:disable',
            ],
            'loading' => [
                'class' => 'w4-icon-button-loading',
                'js' => 'icon-button:loading',
            ],
            'readonly' => [
                'class' => 'w4-icon-button-readonly',
                'js' => 'icon-button:readonly',
            ],
            'active' => [
                'class' => 'w4-icon-button-active',
                'js' => 'icon-button:active',
            ],
        ];
    }
}
