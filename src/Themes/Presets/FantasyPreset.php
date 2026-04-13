<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class FantasyPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.fantasy';
    }

    protected function overrides(): array
    {
        return [
            // Color System
            'primary' => '296 100% 20%',
            'primary-content' => '298 29% 85%',
            'secondary' => '199 100% 28%',
            'secondary-content' => '206 65% 88%',
            'accent' => '35 100% 43%',
            'accent-content' => '17 100% 5%',
            'neutral' => '215 28% 17%',
            'neutral-content' => '215 7% 82%',
            'base-100' => '338 0% 100%',
            'base-200' => '334 0% 91%',
            'base-300' => '334 0% 82%',
            'base-content' => '215 28% 17%',
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

