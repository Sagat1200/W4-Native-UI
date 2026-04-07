<?php

namespace W4\NativeUi\Themes\Components\UI;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class ButtonTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'button';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'neutral', 'outline', 'ghost'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}