<?php

namespace W4\NativeUI\Themes\Components\Forms\CheckBox;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class CheckboxTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'checkbox';
    }

    protected function variants(): array
    {
        return ['default', 'primary', 'secondary', 'accent'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'readonly', 'invalid', 'valid', 'loading', 'checked', 'indeterminate'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'checkbox:enabled',
            ],
            'disabled' => [
                'class' => 'w4-checkbox-disabled',
                'js' => 'checkbox:disabled',
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