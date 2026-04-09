<?php

namespace W4\Native\Themes\Components\FeedBack;

use W4\Native\Tools\Themes\AbstractComponentTheme;

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
