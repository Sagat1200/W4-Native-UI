<?php

namespace W4\Native\Services\Provider\Components\Layout;

use W4\Native\Themes\Components\Layout\CardTheme;
use W4\Native\Themes\Components\Layout\ContainerTheme;
use W4\Native\Themes\Components\Layout\GridTheme;
use W4\Native\Themes\Components\Layout\PanelTheme;
use W4\Native\Themes\Components\Layout\SectionTheme;
use W4\Native\Themes\Components\Layout\StackTheme;

class W4NativeLayoutService
{
    /**
     * @return array<string, \W4\Native\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'card' => new CardTheme(),
            'container' => new ContainerTheme(),
            'panel' => new PanelTheme(),
            'section' => new SectionTheme(),
            'stack' => new StackTheme(),
            'grid' => new GridTheme(),
        ];
    }
}
