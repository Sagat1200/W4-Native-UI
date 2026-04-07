<?php

namespace W4\NativeUi\Themes\Presets;

use W4\NativeUi\Themes\Presets\AbstractPreset;

class DefaultPreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.default';
    }

    protected function overrides(): array
    {
        return [];
    }
}