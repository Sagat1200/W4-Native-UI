<?php

namespace W4\NativeUi\Themes\Presets;

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
