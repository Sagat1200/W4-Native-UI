<?php

namespace W4\NativeUi\Themes\Components\FeedBack;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

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
        return ['sm', 'md', 'lg'];
    }
}
