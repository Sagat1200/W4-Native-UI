<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class ValentinePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.valentine';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '353 74% 67%',
            'primary-content' => '355 65% 5%',
            'secondary' => '254 86% 77%',
            'secondary-content' => '253 47% 6%',
            'accent' => '182 34% 55%',
            'accent-content' => '182 54% 3%',
            'neutral' => '336 43% 48%',
            'neutral-content' => '318 46% 89%',
            'base-100' => '319 66% 94%',
            'base-200' => '319 24% 86%',
            'base-300' => '319 14% 77%',
            'base-content' => '344 38% 28%',
            'info' => '221 83% 53%',
            'info-content' => '219 98% 91%',
            'success' => '142 76% 36%',
            'success-content' => '130 96% 2%',
            'warning' => '32 95% 44%',
            'warning-content' => '17 99% 3%',
            'error' => '4 125% 71%',
            'error-content' => '2 80% 5%',
        ];
    }
}