<?php

namespace W4\NativeUI\Services\Provider\Components\UI;

use W4\NativeUI\Themes\Components\UI\ButtonTheme;
use W4\NativeUI\Themes\Components\UI\HeadingTheme;
use W4\NativeUI\Themes\Components\UI\IconButtonTheme;
use W4\NativeUI\Themes\Components\UI\IconTheme;
use W4\NativeUI\Themes\Components\UI\LabelTheme;
use W4\NativeUI\Themes\Components\UI\LinkTheme;
use W4\NativeUI\Themes\Components\UI\TextTheme;

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