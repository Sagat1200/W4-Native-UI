<?php

namespace W4\NativeUI\Themes\Components\Interactive\Tooltip;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class TooltipTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'tooltip';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'neutral', 'info', 'success', 'warning', 'error'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'open', 'top', 'right', 'bottom', 'left'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'tooltip:enabled',
            ],
            'disabled' => [
                'class' => 'w4-tooltip-disabled',
                'js' => 'tooltip:disabled',
            ],
            'active' => [
                'class' => 'w4-tooltip-active',
                'js' => 'tooltip:active',
            ],
            'hidden' => [
                'class' => 'w4-tooltip-hidden',
                'js' => 'tooltip:hidden',
            ],
            'top' => [
                'class' => 'w4-tooltip-top',
            ],
            'right' => [
                'class' => 'w4-tooltip-right',
            ],
            'bottom' => [
                'class' => 'w4-tooltip-bottom',
            ],
            'left' => [
                'class' => 'w4-tooltip-left',
            ],
            'open' => [
                'class' => 'w4-tooltip-open',
                'js' => 'tooltip:open',
            ],
        ];
    }
}