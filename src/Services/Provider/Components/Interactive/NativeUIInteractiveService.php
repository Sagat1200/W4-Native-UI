<?php

namespace W4\NativeUI\Services\Provider\Components\Interactive;

use W4\NativeUI\Themes\Components\Interactive\Modal\ModalTheme;
use W4\NativeUI\Themes\Components\Interactive\Tooltip\TooltipTheme;

class NativeUIInteractiveService
{
    /**
     * @return array<string, \W4\NativeUI\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'tooltip' => new TooltipTheme(),
            'modal' => new ModalTheme(),
        ];
    }
}
