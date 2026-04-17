<?php

namespace W4\NativeUI\Themes\Components\FeedBack\Loading;

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
        return ['enabled', 'disabled', 'active', 'hidden', 'loading'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'loading:enabled',
            ],
            'disabled' => [
                'class' => 'w4-loading-disabled',
                'js' => 'loading:disabled',
            ],
            'active' => [
                'class' => 'w4-loading-active',
                'js' => 'loading:active',
            ],
            'hidden' => [
                'class' => 'w4-loading-hidden',
                'js' => 'loading:hidden',
            ],
            'loading' => [
                'class' => 'w4-loading-loading',
                'js' => 'loading:loading',
            ],
        ];
    }
}