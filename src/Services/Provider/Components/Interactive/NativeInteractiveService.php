<?php

namespace W4\Native\Services\Provider\Components\Interactive;

use W4\Native\Themes\Components\Interactive\TooltipTheme;

class NativeInteractiveService
{
    /**
     * @return array<string, \W4\Native\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'tooltip' => new TooltipTheme(),
        ];
    }
}
