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
            'primary' => '217 91% 60%',
            'secondary' => '262 83% 68%',
            'accent' => '174 72% 53%',
            'base-100' => '222 47% 11%',
            'base-200' => '223 39% 14%',
            'base-300' => '224 31% 18%',
            'base-content' => '210 40% 98%',
            'shadow-sm' => '0 1px 2px rgba(0, 0, 0, 0.35)',
            'shadow-md' => '0 4px 12px rgba(0, 0, 0, 0.45)',
        ];
    }
}