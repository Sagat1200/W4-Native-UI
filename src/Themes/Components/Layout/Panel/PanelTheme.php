<?php

namespace W4\NativeUI\Themes\Components\Layout\Panel;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class PanelTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'panel';
    }

    protected function variants(): array
    {
        return ['default', 'neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'bordered', 'elevated'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'collapsed'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'panel:enabled',
            ],
            'disabled' => [
                'class' => 'w4-panel-disabled',
                'js' => 'panel:disabled',
            ],
            'active' => [
                'class' => 'w4-panel-active',
                'js' => 'panel:active',
            ],
            'hidden' => [
                'class' => 'w4-panel-hidden',
                'js' => 'panel:hidden',
            ],
            'collapsed' => [
                'class' => 'w4-panel-collapsed',
                'js' => 'panel:collapsed',
            ],
        ];
    }
}