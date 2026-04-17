<?php

namespace W4\NativeUI\Themes\Components\Interactive\Modal;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class ModalTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'modal';
    }

    protected function variants(): array
    {
        // Modals typically don't have color variants like buttons, but we can allow base structural colors
        // or contextual variants like 'info', 'success', 'warning', 'error' for the modal boundary
        return ['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error', 'neutral', 'base-100', 'base-200', 'base-300'];
    }

    protected function sizes(): array
    {
        // Sizes typically represent the max-width of the modal dialog
        return ['xs', 'sm', 'md', 'lg', 'xl', 'full'];
    }

    protected function states(): array
    {
        return ['open', 'closing', 'bottom', 'middle', 'top'];
    }

    public function stateMap(): array
    {
        return [
            'open' => [
                'class' => 'w4-modal-open',
                'js' => 'modal:open',
            ],
            'closing' => [
                'class' => 'w4-modal-closing',
                'js' => 'modal:closing',
            ],
            'bottom' => [
                'class' => 'w4-modal-bottom',
            ],
            'middle' => [
                'class' => 'w4-modal-middle',
            ],
            'top' => [
                'class' => 'w4-modal-top',
            ],
        ];
    }
}
