<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class NordPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.nord';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '213 32% 52%',
            'primary-content' => '218 57% 3%',
            'secondary' => '210 34% 63%',
            'secondary-content' => '213 41% 4%',
            'accent' => '193 43% 67%',
            'accent-content' => '194 41% 4%',
            'neutral' => '220 16% 36%',
            'neutral-content' => '219 28% 88%',
            'base-100' => '217 27% 94%',
            'base-200' => '218 27% 92%',
            'base-300' => '219 28% 88%',
            'base-content' => '220 16% 22%',
            'info' => '311 20% 63%',
            'info-content' => '312 25% 4%',
            'success' => '92 28% 65%',
            'success-content' => '94 31% 4%',
            'warning' => '40 71% 73%',
            'warning-content' => '39 48% 5%',
            'error' => '354 42% 56%',
            'error-content' => '356 62% 3%',
        ];
    }
}
