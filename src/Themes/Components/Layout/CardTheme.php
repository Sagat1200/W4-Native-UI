<?php

namespace W4\NativeUi\Themes\Components\Layout;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

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

    protected function states(): array
    {
        return ['hover'];
    }
}
