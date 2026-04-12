<?php

namespace W4\Native\Themes\Presets;

use W4\Native\Tools\Themes\AbstractPreset;

class ForestPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.forest';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '141 72% 42%',
            'primary-content' => '0 0% 0%',
            'secondary' => '164 73% 42%',
            'secondary-content' => '154 95% 3%',
            'accent' => '175 73% 42%',
            'accent-content' => '171 95% 3%',
            'neutral' => '161 37% 15%',
            'neutral-content' => '157 7% 82%',
            'base-100' => '0 12% 8%',
            'base-200' => '0 13% 7%',
            'base-300' => '0 14% 6%',
            'base-content' => '1 1% 79%',
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
