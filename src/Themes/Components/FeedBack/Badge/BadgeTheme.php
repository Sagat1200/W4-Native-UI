<?php

namespace W4\NativeUI\Themes\Components\FeedBack\Badge;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class BadgeTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'badge';
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
        return ['enabled', 'disabled', 'active', 'hidden', 'highlighted'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'badge:enabled',
            ],
            'disabled' => [
                'class' => 'w4-badge-disabled',
                'js' => 'badge:disabled',
            ],
            'active' => [
                'class' => 'w4-badge-active',
                'js' => 'badge:active',
            ],
            'hidden' => [
                'class' => 'w4-badge-hidden',
                'js' => 'badge:hidden',
            ],
            'highlighted' => [
                'class' => 'w4-badge-highlighted',
                'js' => 'badge:highlighted',
            ],
        ];
    }
}