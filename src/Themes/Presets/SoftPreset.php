<?php

namespace W4\NativeUi\Themes\Presets;

class SoftPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.soft';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '221 83% 62%',
            'secondary' => '262 73% 68%',
            'accent' => '174 62% 50%',
            'base-100' => '210 20% 99%',
            'base-200' => '210 18% 96%',
            'base-300' => '214 18% 91%',
            'radius-button' => '1rem',
            'radius-input' => '0.875rem',
            'radius-card' => '1.25rem',
        ];
    }
}
