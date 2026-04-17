<?php

namespace W4\NativeUI\Services\Provider\Components\UI;

use W4\NativeUI\Themes\Components\UI\Button\ButtonTheme;
use W4\NativeUI\Themes\Components\UI\Heading\HeadingTheme;
use W4\NativeUI\Themes\Components\UI\Icon\IconTheme;
use W4\NativeUI\Themes\Components\UI\IconButton\IconButtonTheme;
use W4\NativeUI\Themes\Components\UI\Label\LabelTheme;
use W4\NativeUI\Themes\Components\UI\Link\LinkTheme;
use W4\NativeUI\Themes\Components\UI\Text\TextTheme;

class NativeUIUIService
{
    /**
     * @return array<string, \W4\NativeUI\Contracts\ComponentThemeContract>
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