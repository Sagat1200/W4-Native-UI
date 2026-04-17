<?php

namespace W4\NativeUI\Themes\Components\FeedBack\Progress;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class ProgressTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'progress';
    }

    protected function variants(): array
    {
        return ['default', 'primary', 'secondary', 'neutral', 'accent', 'info', 'success', 'warning', 'error'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'loading', 'indeterminate'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'progress:enabled',
            ],
            'disabled' => [
                'class' => 'w4-progress-disabled',
                'js' => 'progress:disabled',
            ],
            'active' => [
                'class' => 'w4-progress-active',
                'js' => 'progress:active',
            ],
            'hidden' => [
                'class' => 'w4-progress-hidden',
                'js' => 'progress:hidden',
            ],
            'loading' => [
                'class' => 'w4-progress-loading',
                'js' => 'progress:loading',
            ],
            'indeterminate' => [
                'class' => 'w4-progress-indeterminate',
                'js' => 'progress:indeterminate',
            ],
        ];
    }
}