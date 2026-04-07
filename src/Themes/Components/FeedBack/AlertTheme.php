<?php

namespace W4\NativeUi\Themes\Components\FeedBack;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class AlertTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'alert';
    }

    protected function variants(): array
    {
        return ['info', 'success', 'warning', 'error'];
    }
}