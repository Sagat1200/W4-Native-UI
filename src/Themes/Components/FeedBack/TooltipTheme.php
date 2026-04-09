<?php

namespace W4\Native\Themes\Components\FeedBack;

use W4\Native\Tools\Themes\AbstractComponentTheme;

class TooltipTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'tooltip';
    }

    protected function variants(): array
    {
        return ['top', 'right', 'bottom', 'left'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}
