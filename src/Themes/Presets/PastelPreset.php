<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class PastelPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.pastel';
    }

    protected function overrides(): array
    {
        return [
            // Color System
            'primary' => '284 22% 80%',
            'primary-content' => '284 10% 6%',
            'secondary' => '352 70% 88%',
            'secondary-content' => '352 16% 7%',
            'accent' => '158 55% 81%',
            'accent-content' => '158 23% 6%',
            'neutral' => '199 44% 61%',
            'neutral-content' => '201 54% 4%',
            'base-100' => '338 0% 100%',
            'base-200' => '210 20% 98%',
            'base-300' => '216 12% 84%',
            'base-content' => '340 0% 9%',
            'info' => '194 100% 34%',
            'info-content' => '0 0% 0%',
            'success' => '161 100% 30%',
            'success-content' => '0 0% 0%',
            'warning' => '46 100% 39%',
            'warning-content' => '0 0% 0%',
            'error' => '357 100% 71%',
            'error-content' => '0 0% 0%',
            // Morphology System (Sharp)
            'radius-button' => '0.25rem',
            'radius-input' => '0.25rem',
            'radius-card' => '0.5rem',
            // Interaction System (Hard Ring)
            'focus-ring-width' => '2px',
            'focus-ring-color' => 'var(--w4-primary)',
            // Surface System
            'border-width-control' => '1px',
            'shadow-card' => '0 4px 6px rgba(0, 0, 0, 0.3)',

        ];
    }
}

