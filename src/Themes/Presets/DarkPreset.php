<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class DarkPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.dark';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '241 100% 68%',
            'primary-content' => '226 93% 96%',
            'secondary' => '328 90% 57%',
            'secondary-content' => '326 66% 94%',
            'accent' => '175 177% 30%',
            'accent-content' => '176 82% 17%',
            'base-100' => '212 18% 14%',
            'base-200' => '213 18% 12%',
            'base-300' => '213 18% 10%',
            'base-content' => '215 506% 99%',
            'info' => '194 134% 43%',
            'info-content' => '204 89% 15%',
            'success' => '165 164% 31%',
            'success-content' => '166 117% 14%',
            'warning' => '47 163% 38%',
            'warning-content' => '23 93% 25%',
            'error' => '350 104% 70%',
            'error-content' => '342 95% 15%',
        ];
    }
}
