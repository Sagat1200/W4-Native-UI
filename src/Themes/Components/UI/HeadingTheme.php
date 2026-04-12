<?php

namespace W4\Native\Daisy\Themes\Components\UI;

use W4\Native\Daisy\Tools\Themes\AbstractComponentTheme;

class HeadingTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'heading';
    }

    protected function variants(): array
    {
        return ['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'];
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
                'class' => 'w4-heading-disabled',
                'js' => 'heading:disable',
            ],
            'active' => [
                'class' => 'w4-heading-active',
                'js' => 'heading:active',
            ],
            'hidden' => [
                'class' => 'w4-heading-hidden',
                'js' => 'heading:hide',
            ],
        ];
    }

    public function resolve(array $state = []): array
    {
        $classes = parent::resolve($state);
        $level = strtolower((string) ($state['level'] ?? 'h2'));

        if (in_array($level, ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'], true)) {
            $classes[] = "w4-heading-{$level}";
        }

        return array_values(array_unique($classes));
    }
}
