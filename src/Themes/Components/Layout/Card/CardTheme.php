<?php

namespace W4\NativeUI\Themes\Components\Layout\Card;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class CardTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'card';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'neutral', 'info', 'success', 'warning', 'error', 'default', 'bordered', 'elevated'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'collapsed', 'hover'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'card:enabled',
            ],
            'disabled' => [
                'class' => 'w4-card-disabled',
                'js' => 'card:disabled',
            ],
            'active' => [
                'class' => 'w4-card-active',
                'js' => 'card:active',
            ],
            'hidden' => [
                'class' => 'w4-card-hidden',
                'js' => 'card:hidden',
            ],
            'collapsed' => [
                'class' => 'w4-card-collapsed',
                'js' => 'card:collapsed',
            ],
            'hover' => [
                'class' => 'w4-card-hover',
            ],
        ];
    }
}