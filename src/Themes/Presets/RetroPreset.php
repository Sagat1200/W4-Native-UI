<?php

namespace W4\Native\Themes\Presets;

use W4\Native\Tools\Themes\AbstractPreset;

class RetroPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.retro';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '360 99% 81%',
            'primary-content' => '358 72% 29%',
            'secondary' => '141 78% 84%',
            'secondary-content' => '149 107% 19%',
            'accent' => '43 157% 32%',
            'accent-content' => '23 93% 25%',
            'base-100' => '44 47% 86%',
            'base-200' => '45 47% 80%',
            'base-300' => '44 47% 73%',
            'base-content' => '23 93% 25%',
            'info' => '198 152% 32%',
            'info-content' => '48 95% 88%',
            'success' => '176 151% 19%',
            'success-content' => '48 95% 88%',
            'warning' => '24 140% 40%',
            'warning-content' => '48 95% 88%',
            'error' => '359 100% 69%',
            'error-content' => '16 87% 26%',
        ];
    }
}
