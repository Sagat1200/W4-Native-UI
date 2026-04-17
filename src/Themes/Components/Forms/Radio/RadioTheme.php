<?php

namespace W4\NativeUI\Themes\Components\Forms\Radio;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class RadioTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'radio';
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
        return ['enabled', 'disabled', 'readonly', 'invalid', 'valid', 'loading', 'selected'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'radio:enabled',
            ],
            'disabled' => [
                'class' => 'w4-radio-disabled',
                'js' => 'radio:disabled',
            ],
            'readonly' => [
                'class' => 'w4-radio-readonly',
                'js' => 'radio:readonly',
            ],
            'invalid' => [
                'class' => 'w4-radio-invalid',
                'js' => 'radio:invalid',
            ],
            'valid' => [
                'class' => 'w4-radio-valid',
                'js' => 'radio:valid',
            ],
            'loading' => [
                'class' => 'w4-radio-loading',
                'js' => 'radio:loading',
            ],
            'selected' => [
                'class' => 'w4-radio-selected',
                'js' => 'radio:selected',
            ],
        ];
    }
}