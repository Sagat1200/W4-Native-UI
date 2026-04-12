<?php

namespace W4\NativeUI\Themes\Components\FeedBack;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class ProgressTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'progress';
    }

    protected function variants(): array
    {
        return ['default', 'primary', 'secondary', 'neutral', 'accent', 'info', 'success', 'warning', 'error'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}
