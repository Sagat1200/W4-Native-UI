<?php

namespace W4\Native\Daisy\Services\Provider\Components\Interactive;

use W4\Native\Daisy\Themes\Components\Interactive\TooltipTheme;

class NativeInteractiveService
{
    /**
     * @return array<string, \W4\Native\Daisy\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'tooltip' => new TooltipTheme(),
        ];
    }
}