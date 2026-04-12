<?php

namespace W4\Native\Daisy\Themes\Presets;

use W4\Native\Daisy\Tools\Themes\AbstractPreset;

class LofiPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.lofi';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '338 0% 5%',
            'primary-content' => '338 0% 100%',
            'secondary' => '0 2% 10%',
            'secondary-content' => '338 0% 100%',
            'accent' => '330 0% 15%',
            'accent-content' => '338 0% 100%',
            'neutral' => '0 0% 0%',
            'neutral-content' => '338 0% 100%',
            'base-100' => '338 0% 100%',
            'base-200' => '320 0% 95%',
            'base-300' => '0 2% 90%',
            'base-content' => '0 0% 0%',
            'info' => '186 65% 62%',
            'info-content' => '187 70% 4%',
            'success' => '156 99% 70%',
            'success-content' => '154 71% 5%',
            'warning' => '38 100% 72%',
            'warning-content' => '36 72% 5%',
            'error' => '7 100% 78%',
            'error-content' => '6 60% 6%',
        ];
    }
}
