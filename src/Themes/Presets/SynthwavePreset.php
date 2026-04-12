<?php

namespace W4\Native\Themes\Presets;

use W4\Native\Tools\Themes\AbstractPreset;

class SynthwavePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.synthwave';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '327 92% 68%',
            'primary-content' => '335 94% 16%',
            'secondary' => '199 99% 72%',
            'secondary-content' => '204 89% 15%',
            'accent' => '31 103% 51%',
            'accent-content' => '13 88% 14%',
            'base-100' => '252 100% 9%',
            'base-200' => '249 70% 14%',
            'base-300' => '245 51% 19%',
            'base-content' => '230 104% 82%',
            'info' => '194 134% 43%',
            'info-content' => '204 89% 15%',
            'success' => '175 177% 30%',
            'success-content' => '179 98% 9%',
            'warning' => '51 99% 55%',
            'warning-content' => '30 84% 24%',
            'error' => '10 75% 70%',
            'error-content' => '257 63% 17%',
        ];
    }
}
