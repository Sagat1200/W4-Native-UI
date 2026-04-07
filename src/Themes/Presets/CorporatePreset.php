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
            'primary' => '214 84% 44%',
            'secondary' => '243 75% 59%',
            'accent' => '174 62% 38%',
            'base-100' => '0 0% 100%',
            'base-200' => '210 17% 97%',
            'base-300' => '214 16% 92%',
            'base-content' => '222 47% 16%',
            'radius-button' => '0.5rem',
            'radius-input' => '0.5rem',
            'radius-card' => '0.75rem',
        ];
    }
}