<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class CmykPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.cmyk';
    }

    protected function overrides(): array
    {
        return [
            // Color System
            'primary' => '203 83% 60%',
            'primary-content' => '208 85% 4%',
            'secondary' => '335 78% 60%',
            'secondary-content' => '343 83% 4%',
            'accent' => '56 100% 60%',
            'accent-content' => '55 93% 4%',
            'neutral' => '330 0% 10%',
            'neutral-content' => '330 0% 80%',
            'base-100' => '338 0% 100%',
            'base-200' => '334 0% 91%',
            'base-300' => '334 0% 82%',
            'base-content' => '340 0% 9%',
            'info' => '192 48% 52%',
            'info-content' => '196 76% 3%',
            'success' => '291 48% 38%',
            'success-content' => '291 31% 88%',
            'warning' => '25 85% 57%',
            'warning-content' => '16 92% 4%',
            'error' => '4 81% 56%',
            'error-content' => '1 91% 4%',
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

