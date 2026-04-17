<?php

namespace W4\NativeUI\Services\Provider\Components\Navigation;

use W4\NativeUI\Themes\Components\Navigation\BreadCrumb\BreadCrumbTheme;
use W4\NativeUI\Themes\Components\Navigation\DropDown\DropDownTheme;
use W4\NativeUI\Themes\Components\Navigation\Menu\MenuTheme;
use W4\NativeUI\Themes\Components\Navigation\NavBar\NavBarTheme;
use W4\NativeUI\Themes\Components\Navigation\SideBar\SideBarTheme;
use W4\NativeUI\Themes\Components\Navigation\Tab\TabTheme;

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
