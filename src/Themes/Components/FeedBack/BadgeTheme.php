<?php

namespace W4\NativeUi\Themes\Components\FeedBack;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class BadgeTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'badge';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent'];
    }

    protected function sizes(): array
    {
        return ['sm', 'md', 'lg'];
    }
}