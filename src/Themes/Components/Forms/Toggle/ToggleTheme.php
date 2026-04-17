<?php

namespace W4\NativeUI\Themes\Components\Forms\Toggle;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class ToggleTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'toggle';
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
        return ['disabled', 'readonly', 'invalid', 'valid', 'loading', 'checked'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-toggle-disabled',
                'js' => 'toggle:disable',
            ],
            'readonly' => [
                'class' => 'w4-toggle-readonly',
                'js' => 'toggle:readonly',
            ],
            'invalid' => [
                'class' => 'w4-toggle-invalid',
                'js' => 'toggle:invalid',
            ],
            'valid' => [
                'class' => 'w4-toggle-valid',
                'js' => 'toggle:valid',
            ],
            'loading' => [
                'class' => 'w4-toggle-loading',
                'js' => 'toggle:loading',
            ],
            'checked' => [
                'class' => 'w4-toggle-checked',
                'js' => 'toggle:check',
            ],
        ];
    }
}