<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class DimPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.dim';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '108 66% 73%',
            'primary-content' => '109 46% 5%',
            'secondary' => '12 100% 68%',
            'secondary-content' => '8 77% 5%',
            'accent' => '277 66% 74%',
            'accent-content' => '276 43% 5%',
            'neutral' => '220 21% 14%',
            'neutral-content' => '197 31% 77%',
            'base-100' => '220 18% 20%',
            'base-200' => '220 17% 17%',
            'base-300' => '219 18% 15%',
            'base-content' => '197 31% 77%',
            'info' => '186 100% 58%',
            'info-content' => '188 95% 4%',
            'success' => '159 82% 66%',
            'success-content' => '156 72% 5%',
            'warning' => '48 83% 64%',
            'warning-content' => '46 77% 4%',
            'error' => '11 100% 80%',
            'error-content' => '11 44% 6%',
        ];
    }
}
