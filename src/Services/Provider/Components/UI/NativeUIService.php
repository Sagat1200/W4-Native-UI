<?php

namespace W4\Native\Services\Provider\Components\UI;

use W4\Native\Themes\Components\UI\ButtonTheme;
use W4\Native\Themes\Components\UI\HeadingTheme;
use W4\Native\Themes\Components\UI\IconButtonTheme;
use W4\Native\Themes\Components\UI\IconTheme;
use W4\Native\Themes\Components\UI\LabelTheme;
use W4\Native\Themes\Components\UI\LinkTheme;
use W4\Native\Themes\Components\UI\TextTheme;

class NativeUIService
{
    /**
     * @return array<string, \W4\Native\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'button' => new ButtonTheme(),
            'heading' => new HeadingTheme(),
            'icon-button' => new IconButtonTheme(),
            'icon' => new IconTheme(),
            'label' => new LabelTheme(),
            'link' => new LinkTheme(),
            'text' => new TextTheme(),
        ];
    }
}
