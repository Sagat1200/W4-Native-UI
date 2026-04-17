<?php

namespace W4\NativeUI\Themes\Components\UI\Label;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class LabelTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'label';
    }

    protected function variants(): array
    {
        return ['neutral', 'primary', 'secondary', 'accent', 'muted', 'required'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'label:enabled',
            ],
            'disabled' => [
                'class' => 'w4-label-disabled',
                'js' => 'label:disabled',
            ],
            'active' => [
                'class' => 'w4-label-active',
                'js' => 'label:active',
            ],
            'hidden' => [
                'class' => 'w4-label-hidden',
                'js' => 'label:hidden',
            ],
        ];
    }
}