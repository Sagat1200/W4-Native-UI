<?php

namespace W4\NativeUi\Themes\Components\Forms;

use W4\NativeUi\Themes\Components\AbstractComponentTheme;

class TextareaTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'textarea';
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
                'class' => 'w4-textarea-disabled',
                'js' => 'textarea:disable',
            ],
            'loading' => [
                'class' => 'w4-textarea-loading',
                'js' => 'textarea:loading',
            ],
            'readonly' => [
                'class' => 'w4-textarea-readonly',
                'js' => 'textarea:readonly',
            ],
            'invalid' => [
                'class' => 'w4-textarea-invalid',
                'js' => 'textarea:invalid',
            ],
            'valid' => [
                'class' => 'w4-textarea-valid',
                'js' => 'textarea:valid',
            ],
        ];
    }

    public function resolve(array $state = []): array
    {
        $classes = parent::resolve($state);
        $resize = (string) ($state['resize'] ?? '');

        if (in_array($resize, ['none', 'both', 'horizontal', 'vertical'], true)) {
            $classes[] = "w4-textarea-resize-{$resize}";
        }

        return array_values(array_unique($classes));
    }
}