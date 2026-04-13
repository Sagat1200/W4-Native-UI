<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class ForestPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.forest';
    }

    protected function overrides(): array
    {
        return [
            // Color System
            'primary' => '141 72% 42%',
            'primary-content' => '0 0% 0%',
            'secondary' => '164 73% 42%',
            'secondary-content' => '154 95% 3%',
            'accent' => '175 73% 42%',
            'accent-content' => '171 95% 3%',
            'neutral' => '161 37% 15%',
            'neutral-content' => '157 7% 82%',
            'base-100' => '0 12% 8%',
            'base-200' => '0 13% 7%',
            'base-300' => '0 14% 6%',
            'base-content' => '1 1% 79%',
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

