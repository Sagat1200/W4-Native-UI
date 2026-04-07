<?php

namespace W4\NativeUi\Themes\Components\Layout;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

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
        return ['sm', 'md', 'lg'];
    }
}