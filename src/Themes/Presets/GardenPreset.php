<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class GardenPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.garden';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '327 100% 41%',
            'primary-content' => '338 0% 100%',
            'secondary' => '334 37% 41%',
            'secondary-content' => '340 31% 88%',
            'accent' => '139 16% 43%',
            'accent-content' => '136 33% 2%',
            'neutral' => '44 100% 8%',
            'neutral-content' => '0 4% 91%',
            'base-100' => '0 4% 91%',
            'base-200' => '0 2% 83%',
            'base-300' => '0 1% 74%',
            'base-content' => '0 3% 6%',
            'info' => '194 100% 34%',
            'info-content' => '0 0% 0%',
            'success' => '161 100% 30%',
            'success-content' => '0 0% 0%',
            'warning' => '46 100% 39%',
            'warning-content' => '0 0% 0%',
            'error' => '357 100% 71%',
            'error-content' => '0 0% 0%',
        ];
    }
}
