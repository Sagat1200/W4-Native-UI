<?php

namespace W4\Native\Themes\Components\FeedBack;

use W4\Native\Tools\Themes\AbstractComponentTheme;

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
        return ['top', 'right', 'bottom', 'left', 'open'];
    }

    public function stateMap(): array
    {
        return [
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