<?php

namespace W4\Native\Themes\Components\FeedBack;

use W4\Native\Tools\Themes\AbstractComponentTheme;

class SkeletonTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'skeleton';
    }

    protected function variants(): array
    {
        return ['line', 'block', 'circle'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}
