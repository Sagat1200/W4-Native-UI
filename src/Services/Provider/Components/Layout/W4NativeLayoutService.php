<?php

namespace W4\Native\Daisy\Services\Provider\Components\Layout;

use W4\Native\Daisy\Themes\Components\Layout\CardTheme;
use W4\Native\Daisy\Themes\Components\Layout\ContainerTheme;
use W4\Native\Daisy\Themes\Components\Layout\DividerTheme;
use W4\Native\Daisy\Themes\Components\Layout\GridTheme;
use W4\Native\Daisy\Themes\Components\Layout\PanelTheme;
use W4\Native\Daisy\Themes\Components\Layout\SectionTheme;
use W4\Native\Daisy\Themes\Components\Layout\StackTheme;

class W4NativeLayoutService
{
    /**
     * @return array<string, \W4\Native\Daisy\Contracts\ComponentThemeContract>
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