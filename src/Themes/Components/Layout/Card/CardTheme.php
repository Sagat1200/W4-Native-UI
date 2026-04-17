<?php

namespace W4\NativeUI\Themes\Components\Layout\Card;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

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
