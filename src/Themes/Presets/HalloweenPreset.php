<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class HalloweenPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.halloween';
    }

    protected function overrides(): array
    {
        return [
            // Color System
            'primary' => '36 152% 42%',
            'primary-content' => '180 7% 8%',
            'secondary' => '279 118% 35%',
            'secondary-content' => '266 67% 90%',
            'accent' => '89 179% 24%',
            'accent-content' => '0 0% 0%',
            'neutral' => '31 81% 10%',
            'neutral-content' => '29 10% 80%',
            'base-100' => '334 0% 13%',
            'base-200' => '336 0% 11%',
            'base-300' => '340 0% 10%',
            'base-content' => '350 0% 81%',
            'info' => '221 83% 53%',
            'info-content' => '219 98% 91%',
            'success' => '142 76% 36%',
            'success-content' => '130 96% 2%',
            'warning' => '32 95% 44%',
            'warning-content' => '17 99% 3%',
            'error' => '3 87% 62%',
            'error-content' => '2 84% 4%',
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

