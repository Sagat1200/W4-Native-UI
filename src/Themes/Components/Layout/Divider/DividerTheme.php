<?php

namespace W4\NativeUI\Themes\Components\Layout\Divider;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class DividerTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'divider';
    }

    protected function variants(): array
    {
        return ['neutral', 'primary', 'secondary', 'accent', 'success', 'info', 'warning', 'error'];
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
                'class' => 'w4-divider-disabled',
                'js' => 'divider:disable',
            ],
            'active' => [
                'class' => 'w4-divider-active',
                'js' => 'divider:active',
            ],
            'hidden' => [
                'class' => 'w4-divider-hidden',
                'js' => 'divider:hide',
            ],
        ];
    }

    public function resolve(array $state = []): array
    {
        $classes = parent::resolve($state);
        $orientation = (string) ($state['orientation'] ?? 'horizontal');

        if (in_array($orientation, ['horizontal', 'vertical'], true)) {
            $classes[] = "w4-divider-{$orientation}";
        }

        return array_values(array_unique($classes));
    }
}
