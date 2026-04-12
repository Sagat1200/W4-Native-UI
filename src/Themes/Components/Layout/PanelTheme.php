<?php

namespace W4\Native\Daisy\Themes\Components\Layout;

use W4\Native\Daisy\Tools\Themes\AbstractComponentTheme;

class PanelTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'panel';
    }

    protected function variants(): array
    {
        return ['default', 'bordered', 'elevated'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}
