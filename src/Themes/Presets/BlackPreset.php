<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class BlackPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.black';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '330 0% 22%',
            'primary-content' => '343 0% 83%',
            'secondary' => '330 0% 22%',
            'secondary-content' => '343 0% 83%',
            'accent' => '330 0% 22%',
            'accent-content' => '343 0% 83%',
            'neutral' => '330 0% 22%',
            'neutral-content' => '343 0% 83%',
            'base-100' => '0 0% 0%',
            'base-200' => '330 0% 8%',
            'base-300' => '330 0% 15%',
            'base-content' => '342 0% 84%',
            'info' => '240 100% 50%',
            'info-content' => '220 100% 90%',
            'success' => '120 100% 25%',
            'success-content' => '114 30% 86%',
            'warning' => '60 100% 50%',
            'warning-content' => '60 100% 4%',
            'error' => '0 100% 50%',
            'error-content' => '360 100% 4%',
        ];
    }
}