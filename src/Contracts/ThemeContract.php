<?php

namespace W4\Native\Contracts;

interface ThemeContract
{
    public function name(): string;

    public function defaultPreset(): string;

    public function presets(): array;

    public function resolveComponent(string $component, array $state = []): array;
}
