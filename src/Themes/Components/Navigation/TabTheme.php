<?php

namespace W4\NativeUI\Themes\Components\Navigation;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class TabTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'tab';
    }

    protected function variants(): array
    {
        // For tabs, variants usually affect the active state highlight
        return ['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'neutral', 'base-100', 'base-200', 'base-300'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['active', 'disabled', 'bordered', 'lifted', 'boxed'];
    }

    public function stateMap(): array
    {
        return [
            'active' => [
                'class' => 'w4-tab-active',
            ],
            'disabled' => [
                'class' => 'w4-tab-disabled',
            ],
            'bordered' => [
                'class' => 'w4-tab-bordered',
            ],
            'lifted' => [
                'class' => 'w4-tab-lifted',
            ],
            'boxed' => [
                'class' => 'w4-tab-boxed',
            ],
        ];
    }
}
