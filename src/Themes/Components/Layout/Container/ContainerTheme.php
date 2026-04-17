<?php

namespace W4\NativeUI\Themes\Components\Layout\Container;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class ContainerTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'container';
    }

    protected function variants(): array
    {
        return ['fluid', 'narrow'];
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
                'js' => 'container:enabled',
            ],
            'disabled' => [
                'class' => 'w4-container-disabled',
                'js' => 'container:disabled',
            ],
            'active' => [
                'class' => 'w4-container-active',
                'js' => 'container:active',
            ],
            'hidden' => [
                'class' => 'w4-container-hidden',
                'js' => 'container:hidden',
            ],
        ];
    }
}