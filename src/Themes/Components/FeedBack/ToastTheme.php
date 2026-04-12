<?php

namespace W4\Native\Themes\Components\FeedBack;

use W4\Native\Tools\Themes\AbstractComponentTheme;

class ToastTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'toast';
    }

    protected function variants(): array
    {
        return ['info', 'success', 'warning', 'error'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['top', 'bottom', 'start', 'end', 'center', 'middle'];
    }

    public function stateMap(): array
    {
        return [
            'top' => [
                'class' => 'w4-toast-top',
            ],
            'bottom' => [
                'class' => 'w4-toast-bottom',
            ],
            'start' => [
                'class' => 'w4-toast-start',
            ],
            'end' => [
                'class' => 'w4-toast-end',
            ],
            'center' => [
                'class' => 'w4-toast-center',
            ],
            'middle' => [
                'class' => 'w4-toast-middle',
            ],
        ];
    }
}
