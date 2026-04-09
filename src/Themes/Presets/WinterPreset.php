<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class WinterPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.winter';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '211 100% 43%',
            'primary-content' => '215 100% 92%',
            'secondary' => '247 47% 43%',
            'secondary-content' => '236 43% 89%',
            'accent' => '310 49% 52%',
            'accent-content' => '314 78% 3%',
            'neutral' => '217 92% 10%',
            'neutral-content' => '216 13% 80%',
            'base-100' => '338 0% 100%',
            'base-200' => '217 100% 97%',
            'base-300' => '219 44% 92%',
            'base-content' => '214 30% 32%',
            'info' => '192 93% 78%',
            'info-content' => '192 47% 6%',
            'success' => '181 47% 66%',
            'success-content' => '182 46% 4%',
            'warning' => '32 62% 84%',
            'warning-content' => '32 21% 6%',
            'error' => '0 63% 72%',
            'error-content' => '0 46% 5%',
        ];
    }
}
