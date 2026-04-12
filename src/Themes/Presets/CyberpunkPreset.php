<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class CyberpunkPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.cyberpunk';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '343 128% 74%',
            'primary-content' => '347 74% 5%',
            'secondary' => '184 249% 29%',
            'secondary-content' => '187 140% 4%',
            'accent' => '277 111% 74%',
            'accent-content' => '275 66% 5%',
            'base-100' => '55 102% 65%',
            'base-200' => '55 92% 60%',
            'base-300' => '56 88% 47%',
            'base-content' => '0 0% 0%',
            'info' => '194 201% 34%',
            'info-content' => '0 0% 0%',
            'success' => '161 124% 30%',
            'success-content' => '0 0% 0%',
            'warning' => '46 169% 39%',
            'warning-content' => '0 0% 0%',
            'error' => '357 126% 71%',
            'error-content' => '0 0% 0%',
        ];
    }
}
