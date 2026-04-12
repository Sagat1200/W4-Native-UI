<?php

namespace W4\NativeUI\Services\Provider\Components\Interactive;

use W4\NativeUI\Themes\Components\Interactive\TooltipTheme;

class NativeUIInteractiveService
{
    /**
     * @return array<string, \W4\NativeUI\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'tooltip' => new TooltipTheme(),
        ];
    }
}