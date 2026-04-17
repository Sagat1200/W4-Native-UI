<?php

namespace W4\NativeUI\Themes\Components\Layout\Grid;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class GridTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'grid';
    }

    protected function variants(): array
    {
        return ['1', '2', '3', '4'];
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
                'js' => 'grid:enabled',
            ],
            'disabled' => [
                'class' => 'w4-grid-disabled',
                'js' => 'grid:disabled',
            ],
            'active' => [
                'class' => 'w4-grid-active',
                'js' => 'grid:active',
            ],
            'hidden' => [
                'class' => 'w4-grid-hidden',
                'js' => 'grid:hidden',
            ],
        ];
    }
}