<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class SoftPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.soft';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '307 100% 90%',
            'primary-content' => '302 100% 49%',
            'secondary' => '10 100% 89%',
            'secondary-content' => '17 100% 51%',
            'accent' => '164 100% 90%',
            'accent-content' => '166 100% 50%',
            'base-100' => '0 0% 100%',
            'base-200' => '248 100% 98%',
            'base-300' => '248 100% 92%',
            'base-content' => '0 0% 20%',
        ];
    }
}