<?php

namespace W4\Native\Themes\Components\FeedBack;

use W4\Native\Tools\Themes\AbstractComponentTheme;

class BadgeTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'badge';
    }

    protected function variants(): array
    {
        return ['default', 'primary', 'secondary', 'accent', 'neutral', 'info', 'success', 'warning', 'error'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}
