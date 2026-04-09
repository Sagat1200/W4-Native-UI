<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class AquaPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.aqua';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '182 93% 49%',
            'primary-content' => '181 100% 17%',
            'secondary' => '274 31% 57%',
            'secondary-content' => '270 48% 3%',
            'accent' => '47 100% 80%',
            'accent-content' => '47 45% 6%',
            'neutral' => '205 54% 50%',
            'neutral-content' => '214 85% 3%',
            'base-100' => '219 53% 43%',
            'base-200' => '219 53% 39%',
            'base-300' => '219 54% 35%',
            'base-content' => '218 45% 88%',
            'info' => '221 83% 53%',
            'info-content' => '219 98% 91%',
            'success' => '142 76% 36%',
            'success-content' => '130 96% 2%',
            'warning' => '32 95% 44%',
            'warning-content' => '17 99% 3%',
            'error' => '5 100% 73%',
            'error-content' => '3 75% 5%',
        ];
    }
}
