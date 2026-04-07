<?php

namespace W4\NativeUi\Themes\Components;

class InputTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'input';
    }

    protected function variants(): array
    {
        return ['bordered', 'ghost'];
    }

    protected function sizes(): array
    {
        return ['sm', 'md', 'lg'];
    }
}