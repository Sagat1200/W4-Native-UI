<?php

namespace W4\NativeUI\Themes\Components\UI\Link;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class LinkTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'link';
    }

    protected function variants(): array
    {
        return ['neutral', 'primary', 'secondary', 'accent', 'muted'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['disabled', 'active', 'hidden'];
    }

    public function stateMap(): array
    {
        return [
            'disabled' => [
                'class' => 'w4-link-disabled',
                'js' => 'link:disable',
            ],
            'active' => [
                'class' => 'w4-link-active',
                'js' => 'link:active',
            ],
            'hidden' => [
                'class' => 'w4-link-hidden',
                'js' => 'link:hide',
            ],
        ];
    }
}
