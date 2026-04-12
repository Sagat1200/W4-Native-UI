<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class NightPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.night';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '199 93% 60%',
            'primary-content' => '204 88% 4%',
            'secondary' => '234 89% 74%',
            'secondary-content' => '235 56% 5%',
            'accent' => '329 86% 70%',
            'accent-content' => '331 65% 5%',
            'base-100' => '222 47% 11%',
            'base-200' => '222 50% 10%',
            'base-300' => '222 52% 8%',
            'base-content' => '221 7% 80%',
            'info' => '198 90% 48%',
            'info-content' => '0 0% 0%',
            'success' => '172 66% 51%',
            'success-content' => '169 89% 3%',
            'warning' => '41 88% 64%',
            'warning-content' => '37 79% 4%',
            'error' => '351 94% 71%',
            'error-content' => '353 67% 5%',
        ];
    }
}