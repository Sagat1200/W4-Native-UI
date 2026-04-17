<?php

namespace W4\NativeUI\Themes\Components\UI\Text;

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
        return ['enabled', 'disabled', 'active', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'text:enabled',
            ],
            'disabled' => [
                'class' => 'w4-text-disabled',
                'js' => 'text:disabled',
            ],
            'active' => [
                'class' => 'w4-text-active',
                'js' => 'text:active',
            ],
            'hidden' => [
                'class' => 'w4-text-hidden',
                'js' => 'text:hidden',
            ],
        ];
    }
}