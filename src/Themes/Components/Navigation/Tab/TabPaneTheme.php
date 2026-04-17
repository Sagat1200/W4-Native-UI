<?php

namespace W4\NativeUI\Themes\Components\Navigation\Tab;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class TabPaneTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'tab-pane';
    }

    protected function variants(): array
    {
        return ['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'neutral', 'base-100', 'base-200', 'base-300'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'active', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'active' => [
                'class' => 'w4-tab-pane-active',
            ],
            'hidden' => [
                'class' => 'w4-tab-pane-hidden',
            ],
        ];
    }
}