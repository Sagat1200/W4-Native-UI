<?php

namespace W4\NativeUi\Contracts;

interface ThemeContract
{
    public function name(): string;

    public function defaultPreset(): string;

    public function presets(): array;

    public function resolveComponent(string $component, array $state = []): array;
}
