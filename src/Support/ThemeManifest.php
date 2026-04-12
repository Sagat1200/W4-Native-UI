<?php

namespace W4\Native\Daisy\Support;

class ThemeManifest
{
    public function __construct(
        protected string $defaultPreset,
        protected array $availablePresets = []
    ) {}

    public static function fromConfig(array $config): self
    {
        return new self(
            $config['default_preset'] ?? 'native.light',
            $config['available_presets'] ?? []
        );
    }

    public function defaultPreset(): string
    {
        return $this->defaultPreset;
    }

    public function availablePresets(): array
    {
        return $this->availablePresets;
    }
}
