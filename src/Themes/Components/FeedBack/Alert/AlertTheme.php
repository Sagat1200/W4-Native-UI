<?php

namespace W4\NativeUI\Themes\Components\FeedBack\Alert;

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
        return ['enabled', 'disabled', 'active', 'hidden', 'dismissed', 'top', 'bottom', 'start', 'end', 'center', 'middle'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'alert:enabled',
            ],
            'disabled' => [
                'class' => 'w4-alert-disabled',
                'js' => 'alert:disabled',
            ],
            'active' => [
                'class' => 'w4-alert-active',
                'js' => 'alert:active',
            ],
            'hidden' => [
                'class' => 'w4-alert-hidden',
                'js' => 'alert:hidden',
            ],
            'dismissed' => [
                'class' => 'w4-alert-dismissed',
                'js' => 'alert:dismissed',
            ],
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