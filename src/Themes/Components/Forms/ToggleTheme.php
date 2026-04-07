<?php

namespace W4\NativeUi\Themes\Components\Forms;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class ToggleTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'toggle';
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
