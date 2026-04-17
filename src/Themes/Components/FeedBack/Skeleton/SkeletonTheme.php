<?php

namespace W4\NativeUI\Themes\Components\FeedBack\Skeleton;

use W4\NativeUI\Tools\Themes\AbstractComponentTheme;

class SkeletonTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'skeleton';
    }

    protected function variants(): array
    {
        return ['line', 'block', 'circle'];
    }

    protected function sizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }

    protected function states(): array
    {
        return ['enabled', 'disabled', 'active', 'hidden', 'loading'];
    }

    public function stateMap(): array
    {
        return [
            'enabled' => [
                'class' => '',
                'js' => 'skeleton:enabled',
            ],
            'disabled' => [
                'class' => 'w4-skeleton-disabled',
                'js' => 'skeleton:disabled',
            ],
            'active' => [
                'class' => 'w4-skeleton-active',
                'js' => 'skeleton:active',
            ],
            'hidden' => [
                'class' => 'w4-skeleton-hidden',
                'js' => 'skeleton:hidden',
            ],
            'loading' => [
                'class' => 'w4-skeleton-loading',
                'js' => 'skeleton:loading',
            ],
        ];
    }
}
