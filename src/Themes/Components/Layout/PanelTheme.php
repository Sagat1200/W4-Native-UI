<?php

namespace W4\NativeUi\Themes\Components\Layout;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

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
