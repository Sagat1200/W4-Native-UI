<?php

namespace W4\NativeUi\Themes\Components\FeedBack;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class ProgressTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'progress';
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
