<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Contracts\PresetContract;

abstract class AbstractPreset implements PresetContract
{
    public function tokens(): array
    {
        return array_merge($this->baseTokens(), $this->overrides());
    }

    protected function baseTokens(): array
    {
        return [
            'primary' => '222 89% 55%',
            'primary-content' => '0 0% 100%',
            'secondary' => '262 83% 58%',
            'secondary-content' => '0 0% 100%',
            'accent' => '174 72% 43%',
            'accent-content' => '0 0% 100%',
            'base-100' => '0 0% 100%',
            'base-200' => '210 20% 96%',
            'base-300' => '214 18% 90%',
            'base-content' => '222 47% 11%',
            'radius-button' => '0.75rem',
            'radius-input' => '0.625rem',
            'radius-card' => '1rem',
            'shadow-sm' => '0 1px 2px rgba(0, 0, 0, 0.05)',
            'shadow-md' => '0 4px 6px rgba(0, 0, 0, 0.10)',
        ];
    }

    abstract protected function overrides(): array;
}