<?php

namespace W4\NativeUi\Themes;

use InvalidArgumentException;
use W4\NativeUi\Contracts\ThemeContract;
use W4\NativeUi\Support\ThemeManifest;
use W4\NativeUi\Support\ThemeRegistry;

class NativeTheme implements ThemeContract
{
    public function __construct(
        protected ThemeRegistry $registry,
        protected ThemeManifest $manifest
    ) {
    }

    public function name(): string
    {
        return 'native';
    }

    public function defaultPreset(): string
    {
        return $this->manifest->defaultPreset();
    }

    public function presets(): array
    {
        return $this->registry->allPresets();
    }

    public function resolveComponent(string $component, array $state = []): array
    {
        $component = strtolower(trim($component));
        if ($component === '') {
            throw new InvalidArgumentException('El nombre del componente no puede estar vacío.');
        }

        $classes = ['w4-' . $component];

        if (isset($state['variant']) && $state['variant'] !== '') {
            $classes[] = "w4-{$component}-{$state['variant']}";
        }

        if (isset($state['size']) && $state['size'] !== '') {
            $classes[] = "w4-{$component}-{$state['size']}";
        }

        if (!empty($state['disabled'])) {
            $classes[] = "w4-{$component}-disabled";
        }

        return array_values(array_unique($classes));
    }
}
