<?php

namespace W4\NativeUI\Themes\Components\Layout;

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
}
