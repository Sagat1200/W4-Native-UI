<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class CoffeePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.coffee';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '30 67% 58%',
            'primary-content' => '22 80% 4%',
            'secondary' => '182 25% 20%',
            'secondary-content' => '182 6% 83%',
            'accent' => '194 74% 25%',
            'accent-content' => '198 22% 85%',
            'neutral' => '300 20% 6%',
            'neutral-content' => '301 2% 79%',
            'base-100' => '306 19% 11%',
            'base-200' => '306 19% 9%',
            'base-300' => '306 21% 8%',
            'base-content' => '37 47% 57%',
            'info' => '171 37% 67%',
            'info-content' => '171 36% 4%',
            'success' => '92 25% 62%',
            'success-content' => '95 32% 4%',
            'warning' => '43 100% 69%',
            'warning-content' => '41 76% 5%',
            'error' => '10 95% 75%',
            'error-content' => '8 58% 5%',
        ];
    }
}
