<?php

namespace W4\NativeUI\Themes\Components\Forms;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class HelperTextTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'helper-text';
    }

    protected function variants(): array
    {
        return ['neutral', 'muted', 'info', 'success', 'warning'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'active', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-helper-text-disabled',
                'js' => 'helper-text:disable',
            ],
            'active' => [
                'class' => 'w4-helper-text-active',
                'js' => 'helper-text:active',
            ],
            'hidden' => [
                'class' => 'w4-helper-text-hidden',
                'js' => 'helper-text:hide',
            ],
        ];
    }
}
