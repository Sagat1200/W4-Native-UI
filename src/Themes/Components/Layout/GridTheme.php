<?php

namespace W4\NativeUI\Themes\Components\Layout;

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
}
