<?php

namespace W4\NativeUI\Themes\Components\UI\Icon;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class IconTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'icon';
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
                'class' => 'w4-icon-disabled',
                'js' => 'icon:disable',
            ],
            'active' => [
                'class' => 'w4-icon-active',
                'js' => 'icon:active',
            ],
            'hidden' => [
                'class' => 'w4-icon-hidden',
                'js' => 'icon:hide',
            ],
        ];
    }

    public function resolve(array $state = []): array
    {
        $classes = parent::resolve($state);

        if (!empty($state['spin'])) {
            $classes[] = 'w4-icon-spin';
        }

        if (!empty($state['decorative'])) {
            $classes[] = 'w4-icon-decorative';
        }

        return array_values(array_unique($classes));
    }
}
