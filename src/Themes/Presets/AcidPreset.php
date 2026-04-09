<?php

namespace W4\Native\Themes\Presets;

use W4\Native\Tools\Themes\AbstractPreset;

class AcidPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.acid';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '302 100% 43%',
            'primary-content' => '304 100% 5%',
            'secondary' => '30 100% 44%',
            'secondary-content' => '12 100% 5%',
            'accent' => '70 100% 34%',
            'accent-content' => '79 100% 4%',
            'neutral' => '254 97% 16%',
            'neutral-content' => '232 23% 82%',
            'base-100' => '336 0% 98%',
            'base-200' => '330 0% 89%',
            'base-300' => '334 0% 80%',
            'base-content' => '340 0% 8%',
            'info' => '205 100% 40%',
            'info-content' => '223 100% 4%',
            'success' => '161 100% 26%',
            'success-content' => '146 100% 3%',
            'warning' => '54 100% 37%',
            'warning-content' => '49 100% 4%',
            'error' => '357 100% 44%',
            'error-content' => '359 100% 5%',
        ];
    }
}
