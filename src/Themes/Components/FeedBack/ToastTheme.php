<?php

namespace W4\NativeUi\Themes\Components\FeedBack;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class ToastTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'toast';
    }

    protected function variants(): array
    {
        return ['info', 'success', 'warning', 'error'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}
