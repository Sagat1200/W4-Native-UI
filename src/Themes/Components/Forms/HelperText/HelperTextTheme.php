<?php

namespace W4\NativeUI\Themes\Components\Forms\HelperText;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class HelperTextTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'helper-text';
    }

    protected function variants(): array
    {
        return ['neutral', 'muted', 'info', 'success', 'warning'];
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
                'js' => 'helper-text:enabled',
            ],
            'disabled' => [
                'class' => 'w4-helper-text-disabled',
                'js' => 'helper-text:disabled',
            ],
            'active' => [
                'class' => 'w4-helper-text-active',
                'js' => 'helper-text:active',
            ],
            'hidden' => [
                'class' => 'w4-helper-text-hidden',
                'js' => 'helper-text:hidden',
            ],
        ];
    }
}