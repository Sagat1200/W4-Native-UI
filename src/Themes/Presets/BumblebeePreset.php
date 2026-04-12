<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class BumblebeePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.bumblebee';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '50 175% 36%',
            'primary-content' => '30 84% 24%',
            'secondary' => '31 103% 51%',
            'secondary-content' => '16 87% 26%',
            'accent' => '0 0% 0%',
            'accent-content' => '338 0% 100%',
            'base-100' => '338 0% 100%',
            'base-200' => '336 0% 96%',
            'base-300' => '353 0% 90%',
            'base-content' => '340 0% 9%',
            'info' => '194 134% 43%',
            'info-content' => '201 98% 22%',
            'success' => '165 164% 31%',
            'success-content' => '166 117% 14%',
            'warning' => '47 163% 38%',
            'warning-content' => '23 93% 25%',
            'error' => '359 100% 69%',
            'error-content' => '358 72% 29%',
        ];
    }
}
