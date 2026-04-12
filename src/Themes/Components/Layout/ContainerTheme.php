<?php

namespace W4\Native\Daisy\Themes\Components\Layout;

use W4\Native\Daisy\Tools\Themes\AbstractComponentTheme;

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
