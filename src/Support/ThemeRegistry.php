<?php

namespace W4\Native\Daisy\Support;

use InvalidArgumentException;
use W4\Native\Daisy\Contracts\PresetContract;

class ThemeRegistry
{
    protected array $presets = [];

    public function registerPreset(PresetContract $preset): void
    {
        $this->presets[$preset->name()] = $preset;
    }

    public function hasPreset(string $name): bool
    {
        return array_key_exists($name, $this->presets);
    }

    public function preset(string $name): PresetContract
    {
        if (!$this->hasPreset($name)) {
            throw new InvalidArgumentException("Preset [{$name}] no está registrado.");
        }

        return $this->presets[$name];
    }

    public function allPresets(): array
    {
        return $this->presets;
    }

    public function presetNames(): array
    {
        return array_keys($this->presets);
    }
}
