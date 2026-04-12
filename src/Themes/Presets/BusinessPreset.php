<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class BusinessPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.business';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '210 64% 31%',
            'primary-content' => '212 30% 86%',
            'secondary' => '200 13% 55%',
            'secondary-content' => '202 23% 3%',
            'accent' => '13 80% 60%',
            'accent-content' => '7 84% 4%',
            'neutral' => '213 14% 16%',
            'neutral-content' => '213 3% 81%',
            'base-100' => '340 0% 13%',
            'base-200' => '330 0% 11%',
            'base-300' => '336 0% 9%',
            'base-content' => '340 0% 80%',
            'info' => '199 100% 42%',
            'info-content' => '213 100% 3%',
            'success' => '144 31% 56%',
            'success-content' => '140 50% 3%',
            'warning' => '39 64% 60%',
            'warning-content' => '35 73% 4%',
            'error' => '6 56% 43%',
            'error-content' => '9 54% 89%',
        ];
    }
}
