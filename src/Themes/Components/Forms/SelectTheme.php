<?php

namespace W4\NativeUi\Themes\Components\Forms;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class SelectTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'select';
    }

    protected function variants(): array
    {
        return ['bordered', 'ghost'];
    }

    protected function sizes(): array
    {
        return ['sm', 'md', 'lg'];
    }

    protected function states(): array
    {
        return ['disabled', 'loading', 'readonly', 'invalid', 'valid', 'focus'];
    }
}
