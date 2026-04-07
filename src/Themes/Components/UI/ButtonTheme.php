<?php

namespace W4\NativeUi\Themes\Components\UI;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class ButtonTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'button';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'neutral', 'outline', 'ghost'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'loading', 'active', 'readonly'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-button-disabled',
                'js' => 'button:disable',
            ],
            'loading' => [
                'class' => 'w4-button-loading',
                'js' => 'button:loading',
            ],
            'active' => [
                'class' => 'w4-button-active',
                'js' => 'button:active',
            ],
            'readonly' => [
                'class' => 'w4-button-readonly',
                'js' => 'button:readonly',
            ],
        ];
    }
}