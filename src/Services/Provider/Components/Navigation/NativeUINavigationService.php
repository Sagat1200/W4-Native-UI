<?php

namespace W4\NativeUI\Services\Provider\Components\Navigation;

use W4\NativeUI\Themes\Components\Navigation\BreadCrumbTheme;
use W4\NativeUI\Themes\Components\Navigation\DropDownTheme;
use W4\NativeUI\Themes\Components\Navigation\MenuTheme;
use W4\NativeUI\Themes\Components\Navigation\NavBarTheme;
use W4\NativeUI\Themes\Components\Navigation\SideBarTheme;
use W4\NativeUI\Themes\Components\Navigation\TabTheme;

class NativeUINavigationService
{
    /**
     * @return array<string, \W4\NativeUI\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'breadcrumb' => new BreadCrumbTheme(),
            'dropdown' => new DropDownTheme(),
            'menu' => new MenuTheme(),
            'navbar' => new NavBarTheme(),
            'sidebar' => new SideBarTheme(),
            'tab' => new TabTheme(),
        ];
    }
}
