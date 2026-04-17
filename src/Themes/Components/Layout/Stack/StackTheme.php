<?php

namespace W4\NativeUI\Themes\Components\Layout\Stack;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class StackTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'stack';
    }

    protected function variants(): array
    {
        return ['vertical', 'horizontal'];
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
                'js' => 'stack:enabled',
            ],
            'disabled' => [
                'class' => 'w4-stack-disabled',
                'js' => 'stack:disabled',
            ],
            'active' => [
                'class' => 'w4-stack-active',
                'js' => 'stack:active',
            ],
            'hidden' => [
                'class' => 'w4-stack-hidden',
                'js' => 'stack:hidden',
            ],
        ];
    }
}