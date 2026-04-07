<?php

namespace W4\NativeUi\Themes\Components\UI;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

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
        return ['disabled', 'active', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-label-disabled',
                'js' => 'label:disable',
            ],
            'active' => [
                'class' => 'w4-label-active',
                'js' => 'label:active',
            ],
            'hidden' => [
                'class' => 'w4-label-hidden',
                'js' => 'label:hide',
            ],
        ];
    }
}