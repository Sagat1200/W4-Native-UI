<?php

namespace W4\NativeUI\Services\Provider\Components\Layout;

use W4\NativeUI\Themes\Components\Layout\Card\CardTheme;
use W4\NativeUI\Themes\Components\Layout\Container\ContainerTheme;
use W4\NativeUI\Themes\Components\Layout\Divider\DividerTheme;
use W4\NativeUI\Themes\Components\Layout\Grid\GridTheme;
use W4\NativeUI\Themes\Components\Layout\Panel\PanelTheme;
use W4\NativeUI\Themes\Components\Layout\Section\SectionTheme;
use W4\NativeUI\Themes\Components\Layout\Stack\StackTheme;

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
