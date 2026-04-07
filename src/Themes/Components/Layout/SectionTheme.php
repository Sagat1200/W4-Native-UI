<?php

namespace W4\NativeUi\Themes\Components\Layout;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

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
