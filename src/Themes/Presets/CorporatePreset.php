<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class CorporatePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.corporate';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '242 100% 58%',
            'primary-content' => '0 0% 100%',
            'secondary' => '257 100% 55%',
            'secondary-content' => '0 0% 100%',
            'accent' => '185 100% 60%',
            'accent-content' => '0 0% 100%',
            'base-100' => '0 0% 100%',
            'base-200' => '0 0% 93%',
            'base-300' => '0 0% 86%',
            'base-content' => '278 100% 22%',
        ];
    }
}