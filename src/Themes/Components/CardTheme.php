<?php

namespace W4\NativeUi\Themes\Components;

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
}
