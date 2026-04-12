<?php

namespace W4\NativeUI\Themes\Components\FeedBack;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class AlertTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'alert';
    }

    protected function variants(): array
    {
        return ['default', 'info', 'success', 'warning', 'error'];
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
                'class' => 'w4-alert-top',
            ],
            'bottom' => [
                'class' => 'w4-alert-bottom',
            ],
            'start' => [
                'class' => 'w4-alert-start',
            ],
            'end' => [
                'class' => 'w4-alert-end',
            ],
            'center' => [
                'class' => 'w4-alert-center',
            ],
            'middle' => [
                'class' => 'w4-alert-middle',
            ],
        ];
    }
}