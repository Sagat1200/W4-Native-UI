<?php

namespace W4\NativeUi\Themes\Components\Forms;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class RadioTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'radio';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary'];
    }

    protected function sizes(): array
    {
        return ['sm', 'md', 'lg'];
    }

    protected function states(): array
    {
        return ['disabled', 'readonly', 'checked'];
    }
}
