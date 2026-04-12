<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class EmeraldPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.emerald';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '141 50% 60%',
            'primary-content' => '151 28% 19%',
            'secondary' => '219 96% 60%',
            'secondary-content' => '338 0% 100%',
            'accent' => '10 88% 68%',
            'accent-content' => '0 0% 0%',
            'base-100' => '338 0% 100%',
            'base-200' => '334 0% 91%',
            'base-300' => '334 0% 82%',
            'base-content' => '219 20% 25%',
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
