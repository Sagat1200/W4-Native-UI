<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class LightPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.light';
    }

    protected function overrides(): array
    {
        return [
            // Color System
            'primary' => '248 67% 50%',
            'primary-content' => '226 103% 94%',
            'secondary' => '328 90% 57%',
            'secondary-content' => '326 66% 94%',
            'accent' => '175 177% 30%',
            'accent-content' => '176 82% 17%',
            'base-100' => '338 0% 100%',
            'base-200' => '345 0% 97%',
            'base-300' => '330 0% 93%',
            'base-content' => '240 6% 10%',
            'info' => '194 134% 43%',
            'info-content' => '204 89% 15%',
            'success' => '165 164% 31%',
            'success-content' => '166 117% 14%',
            'warning' => '47 163% 38%',
            'warning-content' => '23 93% 25%',
            'error' => '350 104% 70%',
            'error-content' => '342 95% 15%',
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

