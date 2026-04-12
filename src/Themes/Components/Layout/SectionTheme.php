<?php

namespace W4\Native\Themes\Components\Layout;

use W4\Native\Tools\Themes\AbstractComponentTheme;

class SectionTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'section';
    }

    protected function variants(): array
    {
        return ['default', 'muted'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}
