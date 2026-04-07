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

        $allowedStates = $this->states();

        $statesFromList = $state['states'] ?? [];
        if (is_string($statesFromList) && $statesFromList !== '') {
            $statesFromList = [$statesFromList];
        }
        if (is_array($statesFromList)) {
            foreach ($statesFromList as $resolvedState) {
                if (is_string($resolvedState) && in_array($resolvedState, $allowedStates, true)) {
                    $classes[] = "w4-{$component}-{$resolvedState}";
                }
            }
        }

        foreach ($allowedStates as $allowedState) {
            if (!empty($state[$allowedState])) {
                $classes[] = "w4-{$component}-{$allowedState}";
            }
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

    protected function states(): array
    {
        return [];
    }
}