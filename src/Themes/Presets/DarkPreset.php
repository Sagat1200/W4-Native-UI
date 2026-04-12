<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class DarkPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.dark';
    }

    protected function overrides(): array
    {
        return [
            // Color System (Dark)
            'primary' => '241 100% 68%',
            'primary-content' => '226 93% 96%',
            'base-100' => '212 18% 14%',
            'base-200' => '213 18% 12%',
            'base-300' => '213 18% 10%',
            'base-content' => '215 100% 99%',
            
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