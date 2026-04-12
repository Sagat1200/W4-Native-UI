<?php

namespace W4\Native\Contracts;

interface ThemeContract
{
    public function name(): string;

    public function defaultPreset(): string;

    public function presets(): array;

    public function resolveComponent(string $component, array $state = []): array;

    /**
     * Combina clases base del componente con clases proporcionadas por el usuario
     * resolviendo conflictos de CSS inteligentemente.
     */
    public function mergeClasses(array|string $baseClasses, array|string $userClasses): string;
}