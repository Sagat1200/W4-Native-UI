<?php

namespace W4\NativeUi\Themes\Components\FeedBack;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

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
        return ['sm', 'md', 'lg'];
    }
}
