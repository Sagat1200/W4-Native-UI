<?php

namespace W4\NativeUI\Themes\Components\UI;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class TextTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'text';
    }

    protected function variants(): array
    {
        return ['neutral', 'primary', 'secondary', 'accent', 'muted', 'lead'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'active', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-text-disabled',
                'js' => 'text:disable',
            ],
            'active' => [
                'class' => 'w4-text-active',
                'js' => 'text:active',
            ],
            'hidden' => [
                'class' => 'w4-text-hidden',
                'js' => 'text:hide',
            ],
        ];
    }
}