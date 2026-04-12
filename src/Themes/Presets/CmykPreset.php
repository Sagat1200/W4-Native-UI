<?php

namespace W4\NativeUI\Themes\Presets;

use W4\NativeUI\Tools\Themes\AbstractPreset;

class CmykPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native-ui.cmyk';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '203 83% 60%',
            'primary-content' => '208 85% 4%',
            'secondary' => '335 78% 60%',
            'secondary-content' => '343 83% 4%',
            'accent' => '56 100% 60%',
            'accent-content' => '55 93% 4%',
            'neutral' => '330 0% 10%',
            'neutral-content' => '330 0% 80%',
            'base-100' => '338 0% 100%',
            'base-200' => '334 0% 91%',
            'base-300' => '334 0% 82%',
            'base-content' => '340 0% 9%',
            'info' => '192 48% 52%',
            'info-content' => '196 76% 3%',
            'success' => '291 48% 38%',
            'success-content' => '291 31% 88%',
            'warning' => '25 85% 57%',
            'warning-content' => '16 92% 4%',
            'error' => '4 81% 56%',
            'error-content' => '1 91% 4%',
        ];
    }
}