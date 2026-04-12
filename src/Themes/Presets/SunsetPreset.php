<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class SunsetPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.sunset';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '16 100% 68%',
            'primary-content' => '11 78% 5%',
            'secondary' => '341 97% 71%',
            'secondary-content' => '344 68% 5%',
            'accent' => '263 92% 75%',
            'accent-content' => '262 54% 5%',
            'neutral' => '204 23% 14%',
            'neutral-content' => '204 11% 62%',
            'base-100' => '204 31% 10%',
            'base-200' => '204 37% 9%',
            'base-300' => '204 45% 7%',
            'base-content' => '208 34% 72%',
            'info' => '187 71% 73%',
            'info-content' => '187 49% 5%',
            'success' => '120 44% 78%',
            'success-content' => '120 23% 6%',
            'warning' => '34 77% 76%',
            'warning-content' => '34 46% 5%',
            'error' => '358 100% 87%',
            'error-content' => '358 26% 7%',
        ];
    }
}
