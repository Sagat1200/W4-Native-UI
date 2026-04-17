<?php

namespace W4\NativeUI\Themes\Components\Layout\Section;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class SectionTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'section';
    }

    protected function variants(): array
    {
        return ['default', 'muted'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'collapsed'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'section:enabled',
            ],
            'disabled' => [
                'class' => 'w4-section-disabled',
                'js' => 'section:disabled',
            ],
            'active' => [
                'class' => 'w4-section-active',
                'js' => 'section:active',
            ],
            'hidden' => [
                'class' => 'w4-section-hidden',
                'js' => 'section:hidden',
            ],
            'collapsed' => [
                'class' => 'w4-section-collapsed',
                'js' => 'section:collapsed',
            ],
        ];
    }
}