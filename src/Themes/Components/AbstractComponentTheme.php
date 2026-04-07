<?php

namespace W4\NativeUi\Themes\Components;

use W4\NativeUi\Contracts\ComponentThemeContract;

abstract class AbstractComponentTheme implements ComponentThemeContract
{
    public function resolve(array $state = []): array
    {
        $component = $this->component();
        $classes = ['w4-' . $component];

        $variant = (string) ($state['variant'] ?? '');
        if ($variant !== '' && in_array($variant, $this->variants(), true)) {
            $classes[] = "w4-{$component}-{$variant}";
        }

        $size = (string) ($state['size'] ?? '');
        if ($size !== '' && in_array($size, $this->sizes(), true)) {
            $classes[] = "w4-{$component}-{$size}";
        }

        if (!empty($state['disabled'])) {
            $classes[] = "w4-{$component}-disabled";
        }

        return array_values(array_unique($classes));
    }

    protected function variants(): array
    {
        return [];
    }

    protected function sizes(): array
    {
        return [];
    }
}