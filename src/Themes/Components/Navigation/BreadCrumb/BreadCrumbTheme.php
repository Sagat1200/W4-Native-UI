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
        return ['enabled', 'disabled', 'active', 'hidden', 'collapsed'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'breadcrumb:enabled',
            ],
            'disabled' => [
                'class' => 'w4-breadcrumb-disabled',
                'js' => 'breadcrumb:disabled',
            ],
            'active' => [
                'class' => 'w4-breadcrumb-active',
                'js' => 'breadcrumb:active',
            ],
            'hidden' => [
                'class' => 'w4-breadcrumb-hidden',
                'js' => 'breadcrumb:hidden',
            ],
            'collapsed' => [
                'class' => 'w4-breadcrumb-collapsed',
                'js' => 'breadcrumb:collapsed',
            ],
        ];
    }
}