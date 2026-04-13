<?php

namespace W4\NativeUI\Tools\Themes;

use W4\NativeUI\Contracts\PresetContract;

abstract class AbstractPreset implements PresetContract
{
    public function tokens(): array
    {
        return array_merge($this->baseTokens(), $this->overrides());
    }

    public function cssVariables(): array
    {
        $vars = [];
        foreach ($this->tokens() as $key => $value) {
            $vars["--w4-{$key}"] = $value;
        }
        return $vars;
    }

    protected function baseTokens(): array
    {
        return [
            // Core Color Defaults
            'primary' => '277 100% 47%',
            'primary-content' => '273 100% 93%',
            'secondary' => '354 100% 65%',
            'secondary-content' => '342 100% 94%',
            'accent' => '182 100% 77%',
            'accent-content' => '188 100% 38%',
            'base-100' => '0 0% 100%',
            'base-200' => '0 0% 98%',
            'base-300' => '0 0% 95%',
            'base-content' => '286 100% 21%',
            'info' => '198 93% 60%',
            'info-content' => '198 100% 12%',
            'success' => '158 64% 52%',
            'success-content' => '158 100% 10%',
            'warning' => '43 96% 56%',
            'warning-content' => '43 100% 11%',
            'error' => '0 91% 71%',
            'error-content' => '0 100% 14%',

            // Morphology Tokens (Shapes & Sizes)
            'radius-button' => '0.5rem',
            'radius-input' => '0.5rem',
            'radius-card' => '1rem',
            'radius-panel' => '1rem',
            'radius-pill' => '9999px',
            'border-width-control' => '1px',
            'control-height-xs' => '1.5rem',
            'control-height-sm' => '2rem',
            'control-height-md' => '3rem',
            'control-height-lg' => '4rem',
            'control-height-xl' => '5rem',

            // Surface Tokens (Shadows & Elevations)
            'shadow-sm' => '0 1px 2px rgba(0, 0, 0, 0.05)',
            'shadow-md' => '0 4px 6px rgba(0, 0, 0, 0.10)',
            'shadow-lg' => '0 10px 15px rgba(0, 0, 0, 0.10)',
            'shadow-control' => '0 1px 2px rgba(0, 0, 0, 0.05)',

            // Interaction Tokens
            'focus-ring-width' => '2px',
            'focus-ring-offset' => '2px',
            'focus-ring-opacity' => '0.5',
            'hover-brightness' => '1.1',
            'hover-translate-y' => '-1px',
            'active-scale' => '0.98',
            'active-translate-y' => '1px',
            'disabled-opacity' => '0.5',
            'loading-opacity' => '0.7',
            'transition-fast' => '0.15s ease',
            'transition-normal' => '0.3s ease',
            'transition-slow' => '0.5s ease',
        ];
    }

    abstract protected function overrides(): array;
}