<?php

namespace W4\NativeUi\Themes\Components\Forms;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class TextareaTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'textarea';
    }

    protected function variants(): array
    {
        return ['bordered'];
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
