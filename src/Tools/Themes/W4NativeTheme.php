<?php

namespace W4\Native\Tools\Themes;

use InvalidArgumentException;
use W4\Native\Contracts\ComponentThemeContract;
use W4\Native\Contracts\ThemeContract;
use W4\Native\Support\ThemeManifest;
use W4\Native\Support\ThemeRegistry;

class W4NativeTheme implements ThemeContract
{
    public function __construct(
        protected ThemeRegistry $registry,
        protected ThemeManifest $manifest,
        protected array $components = []
    ) {}

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

        if (array_key_exists($component, $this->components)) {
            $resolver = $this->components[$component];
            if ($resolver instanceof ComponentThemeContract) {
                return $resolver->resolve($state);
            }
        }

        return ['w4-' . $component];
    }

    public function resolveComponentContract(string $component, array $state = []): array
    {
        $classes = $this->resolveComponent($component, $state);
        $component = strtolower(trim($component));

        $stateMap = [];
        $jsHooks = [];
        if (array_key_exists($component, $this->components)) {
            $resolver = $this->components[$component];

            if (is_object($resolver) && method_exists($resolver, 'stateMap')) {
                $stateMap = (array) $resolver->stateMap();
            }

            if (is_object($resolver) && method_exists($resolver, 'jsHooks')) {
                $jsHooks = (array) $resolver->jsHooks($state);
            }
        }

        return [
            'component' => $component,
            'classes' => $classes,
            'state_map' => $stateMap,
            'js_hooks' => $jsHooks,
        ];
    }
}
