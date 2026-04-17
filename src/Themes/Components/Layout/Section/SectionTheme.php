<?php

namespace W4\NativeUI\Themes\Components\Layout\Section;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

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
