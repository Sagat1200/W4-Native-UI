<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class NightPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.night';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '233 100% 75%',
            'primary-content' => '233 100% 15%',
            'secondary' => '277 100% 68%',
            'secondary-content' => '277 100% 14%',
            'accent' => '350 100% 72%',
            'accent-content' => '350 100% 14%',
            'base-100' => '266 100% 21%',
            'base-200' => '266 100% 19%',
            'base-300' => '266 100% 18%',
            'base-content' => '266 100% 84%',
        ];
    }
}
