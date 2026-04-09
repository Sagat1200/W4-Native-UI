<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class DraculaPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.dracula';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '326 100% 74%',
            'primary-content' => '327 63% 5%',
            'secondary' => '265 89% 78%',
            'secondary-content' => '264 47% 6%',
            'accent' => '31 100% 71%',
            'accent-content' => '28 69% 5%',
            'neutral' => '230 15% 30%',
            'neutral-content' => '229 8% 85%',
            'base-100' => '231 15% 18%',
            'base-200' => '231 15% 16%',
            'base-300' => '231 16% 14%',
            'base-content' => '60 30% 96%',
            'info' => '191 97% 77%',
            'info-content' => '191 52% 6%',
            'success' => '135 94% 65%',
            'success-content' => '130 82% 5%',
            'warning' => '65 92% 76%',
            'warning-content' => '65 51% 6%',
            'error' => '0 100% 67%',
            'error-content' => '360 80% 5%',
        ];
    }
}
