<?php

namespace W4\NativeUI\Themes\Components\Navigation\BreadCrumb;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class BreadCrumbTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'breadcrumb';
    }

    protected function variants(): array
    {
        // Breadcrumbs typically don't have complex color variants, but we can allow base structural colors
        return ['primary', 'secondary', 'accent', 'neutral', 'base-100', 'base-200', 'base-300'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        // Breadcrumbs don't usually have component-level states, the states apply to the inner links
        return [];
    }

    public function stateMap(): array
    {
        return [];
    }
}
