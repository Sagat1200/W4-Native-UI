<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class LemonadePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.lemonade';
    }

    protected function overrides(): array
    {
        return [
            // Color System
            'primary' => '86 100% 21%',
            'primary-content' => '106 100% 1%',
            'secondary' => '61 100% 26%',
            'secondary-content' => '61 100% 2%',
            'accent' => '54 100% 34%',
            'accent-content' => '49 100% 4%',
            'neutral' => '59 100% 9%',
            'neutral-content' => '62 11% 80%',
            'base-100' => '83 82% 97%',
            'base-200' => '83 21% 88%',
            'base-300' => '83 11% 79%',
            'base-content' => '83 5% 8%',
            'info' => '197 56% 80%',
            'info-content' => '197 24% 6%',
            'success' => '143 33% 79%',
            'success-content' => '143 15% 6%',
            'warning' => '54 33% 77%',
            'warning-content' => '54 19% 6%',
            'error' => '6 59% 85%',
            'error-content' => '6 18% 7%',
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

