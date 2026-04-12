<?php

namespace W4\Native\Themes\Presets;

use W4\Native\Tools\Themes\AbstractPreset;

class CorporatePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.corporate';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '198 152% 32%',
            'primary-content' => '338 0% 100%',
            'secondary' => '215 19% 47%',
            'secondary-content' => '338 0% 100%',
            'accent' => '176 177% 21%',
            'accent-content' => '338 0% 100%',
            'base-100' => '338 0% 100%',
            'base-200' => '334 0% 91%',
            'base-300' => '334 0% 82%',
            'base-content' => '233 27% 13%',
            'info' => '190 167% 27%',
            'info-content' => '338 0% 100%',
            'success' => '150 174% 23%',
            'success-content' => '338 0% 100%',
            'warning' => '50 175% 36%',
            'warning-content' => '0 0% 0%',
            'error' => '359 100% 69%',
            'error-content' => '0 0% 0%',
        ];
    }
}
