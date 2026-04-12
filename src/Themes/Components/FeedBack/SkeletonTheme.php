<?php

namespace W4\NativeUI\Themes\Components\FeedBack;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

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
