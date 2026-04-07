<?php

namespace W4\NativeUi\Themes\Presets;

class NightPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.night';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '268 84% 68%',
            'secondary' => '217 91% 60%',
            'accent' => '197 93% 60%',
            'base-100' => '230 35% 7%',
            'base-200' => '230 30% 10%',
            'base-300' => '230 24% 14%',
            'base-content' => '210 40% 96%',
            'radius-button' => '0.875rem',
            'radius-input' => '0.75rem',
            'radius-card' => '1rem',
        ];
    }
}
