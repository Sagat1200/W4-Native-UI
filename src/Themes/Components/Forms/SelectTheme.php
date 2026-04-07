<?php

namespace W4\NativeUi\Themes\Components\Forms;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class SelectTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'select';
    }

    protected function variants(): array
    {
        return ['default', 'bordered', 'ghost'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'loading', 'readonly', 'invalid', 'valid'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-select-disabled',
                'js' => 'select:disable',
            ],
            'loading' => [
                'class' => 'w4-select-loading',
                'js' => 'select:loading',
            ],
            'readonly' => [
                'class' => 'w4-select-readonly',
                'js' => 'select:readonly',
            ],
            'invalid' => [
                'class' => 'w4-select-invalid',
                'js' => 'select:invalid',
            ],
            'valid' => [
                'class' => 'w4-select-valid',
                'js' => 'select:valid',
            ],
        ];
    }
}
