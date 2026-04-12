<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class AutumnPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.autumn';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '344 96% 28%',
            'primary-content' => '360 44% 87%',
            'secondary' => '0 63% 58%',
            'secondary-content' => '0 77% 4%',
            'accent' => '27 56% 63%',
            'accent-content' => '23 62% 4%',
            'neutral' => '22 17% 44%',
            'neutral-content' => '22 14% 88%',
            'base-100' => '340 0% 95%',
            'base-200' => '338 0% 86%',
            'base-300' => '330 0% 77%',
            'base-content' => '324 0% 8%',
            'info' => '187 48% 50%',
            'info-content' => '190 80% 3%',
            'success' => '165 34% 43%',
            'success-content' => '160 63% 2%',
            'warning' => '30 84% 50%',
            'warning-content' => '17 98% 4%',
            'error' => '346 100% 34%',
            'error-content' => '5 99% 91%',
        ];
    }
}
