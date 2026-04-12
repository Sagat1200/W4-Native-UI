<?php

namespace W4\NativeUI\Services\Provider\Components\Layout;

use W4\NativeUI\Themes\Components\Layout\CardTheme;
use W4\NativeUI\Themes\Components\Layout\ContainerTheme;
use W4\NativeUI\Themes\Components\Layout\DividerTheme;
use W4\NativeUI\Themes\Components\Layout\GridTheme;
use W4\NativeUI\Themes\Components\Layout\PanelTheme;
use W4\NativeUI\Themes\Components\Layout\SectionTheme;
use W4\NativeUI\Themes\Components\Layout\StackTheme;

class NativeUILayoutService
{
    /**
     * @return array<string, \W4\NativeUI\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'divider' => new DividerTheme(),
            'card' => new CardTheme(),
            'container' => new ContainerTheme(),
            'panel' => new PanelTheme(),
            'section' => new SectionTheme(),
            'stack' => new StackTheme(),
            'grid' => new GridTheme(),
        ];
    }
}