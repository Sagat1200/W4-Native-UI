<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class DarkPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.dark';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '277 100% 58%',
            'primary-content' => '272 100% 96%',
            'secondary' => '354 100% 65%',
            'secondary-content' => '342 100% 94%',
            'accent' => '182 100% 77%',
            'accent-content' => '188 100% 38%',
            'base-100' => '252 100% 25%',
            'base-200' => '253 100% 23%',
            'base-300' => '254 100% 21%',
            'base-content' => '257 100% 98%',
        ];
    }
}
