<?php

namespace W4\Native\Daisy\Tools\Themes;

use TailwindMerge\TailwindMerge;
use InvalidArgumentException;
use W4\Native\Daisy\Contracts\ComponentThemeContract;
use W4\Native\Daisy\Contracts\ThemeContract;
use W4\Native\Daisy\Support\ThemeManifest;
use W4\Native\Daisy\Support\ThemeRegistry;

class NativeDaisyTheme implements ThemeContract
{
    protected array $components = [];

    /**
     * Caché de clases resueltas en memoria para reducir el overhead en runtime.
     * @var array<string, array>
     */
    protected array $resolvedCache = [];

    public function __construct(
        protected ThemeRegistry $registry,
        protected ThemeManifest $manifest,
        array $components = []
    ) {
        $this->components = $components;
    }

    public function name(): string
    {
        return 'native-daisy';
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

        $cacheKey = $this->generateCacheKey($component, $state);

        if (array_key_exists($cacheKey, $this->resolvedCache)) {
            return $this->resolvedCache[$cacheKey];
        }

        $classes = ['w4-' . $component];

        if (array_key_exists($component, $this->components)) {
            $resolver = $this->components[$component];
            if ($resolver instanceof ComponentThemeContract) {
                $classes = $resolver->resolve($state);
            }
        }

        $this->resolvedCache[$cacheKey] = $classes;

        return $classes;
    }

    /**
     * Genera una clave única basada en el componente y su estado.
     */
    protected function generateCacheKey(string $component, array $state): string
    {
        if (empty($state)) {
            return $component;
        }

        // Ordenamos las llaves para que ['size'=>'sm', 'variant'=>'primary'] 
        // produzca el mismo hash que ['variant'=>'primary', 'size'=>'sm']
        ksort($state);

        return $component . ':' . md5(json_encode($state));
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

    public function mergeClasses(array|string $baseClasses, array|string $userClasses): string
    {
        $base = is_array($baseClasses) ? implode(' ', $baseClasses) : $baseClasses;
        $user = is_array($userClasses) ? implode(' ', $userClasses) : $userClasses;

        return TailwindMerge::instance()->merge($base, $user);
    }
}