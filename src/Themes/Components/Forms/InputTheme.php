<?php

namespace W4\Native\Daisy\Themes\Components\Forms;

use W4\Native\Daisy\Tools\Themes\AbstractComponentTheme;

class InputTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'input';
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
                'class' => 'w4-input-disabled',
                'js' => 'input:disable',
            ],
            'loading' => [
                'class' => 'w4-input-loading',
                'js' => 'input:loading',
            ],
            'readonly' => [
                'class' => 'w4-input-readonly',
                'js' => 'input:readonly',
            ],
            'invalid' => [
                'class' => 'w4-input-invalid',
                'js' => 'input:invalid',
            ],
            'valid' => [
                'class' => 'w4-input-valid',
                'js' => 'input:valid',
            ],
        ];
    }
}
