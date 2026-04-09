<?php

namespace W4\Native\Themes\Components\Layout;

use W4\Native\Tools\Themes\AbstractComponentTheme;

class CardTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'card';
    }

    protected function variants(): array
    {
        return ['default', 'bordered', 'elevated'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['hover'];
    }
}
