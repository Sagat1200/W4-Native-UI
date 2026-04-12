<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class WireframePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.wireframe';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '342 0% 72%',
            'primary-content' => '334 0% 5%',
            'secondary' => '342 0% 72%',
            'secondary-content' => '334 0% 5%',
            'accent' => '342 0% 72%',
            'accent-content' => '334 0% 5%',
            'neutral' => '338 0% 92%',
            'neutral-content' => '340 0% 8%',
            'base-100' => '338 0% 100%',
            'base-200' => '340 0% 93%',
            'base-300' => '351 0% 87%',
            'base-content' => '340 0% 9%',
            'info' => '240 100% 50%',
            'info-content' => '220 100% 90%',
            'success' => '120 100% 25%',
            'success-content' => '114 30% 86%',
            'warning' => '60 30% 50%',
            'warning-content' => '60 58% 2%',
            'error' => '0 100% 50%',
            'error-content' => '360 100% 4%',
        ];
    }
}