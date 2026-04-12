<?php

namespace W4\Native\Themes\Presets;

use W4\Native\Tools\Themes\AbstractPreset;

class LuxuryPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.luxury';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '338 0% 100%',
            'primary-content' => '340 0% 9%',
            'secondary' => '218 54% 18%',
            'secondary-content' => '218 15% 82%',
            'accent' => '319 22% 26%',
            'accent-content' => '322 9% 84%',
            'neutral' => '28 100% 10%',
            'neutral-content' => '44 100% 82%',
            'base-100' => '240 10% 4%',
            'base-200' => '270 4% 9%',
            'base-300' => '270 2% 18%',
            'base-content' => '37 67% 58%',
            'info' => '202 100% 70%',
            'info-content' => '205 72% 5%',
            'success' => '89 62% 52%',
            'success-content' => '98 87% 3%',
            'warning' => '54 69% 64%',
            'warning-content' => '53 70% 4%',
            'error' => '0 100% 72%',
            'error-content' => '0 68% 5%',
        ];
    }
}
