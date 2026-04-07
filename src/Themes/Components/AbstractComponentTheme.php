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

        $stateMap = $this->stateMap();
        $activeStates = $this->activeStates($state, array_keys($stateMap));
        foreach ($activeStates as $activeState) {
            $classes[] = $stateMap[$activeState]['class'] ?? "w4-{$component}-{$activeState}";
        }

        return array_values(array_unique($classes));
    }

    public function stateMap(): array
    {
        $component = $this->component();
        $map = [];

        foreach ($this->states() as $state) {
            $map[$state] = [
                'class' => "w4-{$component}-{$state}",
                'js' => "w4:{$component}:{$state}",
            ];
        }

        return $map;
    }

    public function jsHooks(array $state = []): array
    {
        $stateMap = $this->stateMap();
        $hooks = [];

        foreach ($this->activeStates($state, array_keys($stateMap)) as $activeState) {
            if (!empty($stateMap[$activeState]['js'])) {
                $hooks[] = (string) $stateMap[$activeState]['js'];
            }
        }

        return array_values(array_unique($hooks));
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

    protected function activeStates(array $state, array $allowedStates): array
    {
        $activeStates = [];
        $currentState = $state['state'] ?? null;
        $statesFromList = $state['states'] ?? [];

        if (is_string($currentState) && in_array($currentState, $allowedStates, true)) {
            $activeStates[] = $currentState;
        }

        if (is_string($statesFromList) && $statesFromList !== '') {
            $statesFromList = [$statesFromList];
        }

        if (is_array($statesFromList)) {
            foreach ($statesFromList as $resolvedState) {
                if (is_string($resolvedState) && in_array($resolvedState, $allowedStates, true)) {
                    $activeStates[] = $resolvedState;
                }
            }
        }

        foreach ($allowedStates as $allowedState) {
            if (!empty($state[$allowedState])) {
                $activeStates[] = $allowedState;
            }
        }

        return array_values(array_unique($activeStates));
    }
}
