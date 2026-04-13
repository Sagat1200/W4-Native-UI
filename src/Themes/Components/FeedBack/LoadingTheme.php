<?php

namespace W4\NativeUI\Themes\Components\FeedBack;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class LoadingTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'loading';
    }

    protected function variants(): array
    {
        return ['default', 'primary', 'secondary', 'accent', 'neutral', 'info', 'success', 'warning', 'error'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-loading-disabled',
                'js' => 'loading:disable',
            ],
            'hidden' => [
                'class' => 'w4-loading-hidden',
                'js' => 'loading:hide',
            ],
        ];
    }
}