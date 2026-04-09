<?php

namespace W4\Native\Themes\Components\Forms;

use W4\Native\Tools\Themes\AbstractComponentTheme;

class CheckboxTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'checkbox';
    }

    protected function variants(): array
    {
        return ['default', 'primary', 'secondary'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'readonly', 'invalid', 'valid', 'loading', 'checked', 'indeterminate'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-checkbox-disabled',
                'js' => 'checkbox:disable',
            ],
            'readonly' => [
                'class' => 'w4-checkbox-readonly',
                'js' => 'checkbox:readonly',
            ],
            'invalid' => [
                'class' => 'w4-checkbox-invalid',
                'js' => 'checkbox:invalid',
            ],
            'valid' => [
                'class' => 'w4-checkbox-valid',
                'js' => 'checkbox:valid',
            ],
            'loading' => [
                'class' => 'w4-checkbox-loading',
                'js' => 'checkbox:loading',
            ],
            'checked' => [
                'class' => 'w4-checkbox-checked',
                'js' => 'checkbox:check',
            ],
            'indeterminate' => [
                'class' => 'w4-checkbox-indeterminate',
                'js' => 'checkbox:indeterminate',
            ],
        ];
    }
}
