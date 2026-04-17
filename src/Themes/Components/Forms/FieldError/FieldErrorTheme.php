<?php

namespace W4\NativeUI\Themes\Components\Forms\FieldError;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class FieldErrorTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'field-error';
    }

    protected function variants(): array
    {
        return ['error', 'warning', 'info', 'inline'];
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
                'js' => 'field-error:enabled',
            ],
            'disabled' => [
                'class' => 'w4-field-error-disabled',
                'js' => 'field-error:disabled',
            ],
            'active' => [
                'class' => 'w4-field-error-active',
                'js' => 'field-error:active',
            ],
            'hidden' => [
                'class' => 'w4-field-error-hidden',
                'js' => 'field-error:hidden',
            ],
        ];
    }
}