<?php

namespace W4\Native\Daisy\Themes\Components\Layout;

use W4\Native\Daisy\Tools\Themes\AbstractComponentTheme;

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
}
