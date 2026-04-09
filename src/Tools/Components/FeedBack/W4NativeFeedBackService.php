<?php

namespace W4\Native\Tools\Components\FeedBack;

use W4\Native\Themes\Components\FeedBack\AlertTheme;
use W4\Native\Themes\Components\FeedBack\BadgeTheme;
use W4\Native\Themes\Components\FeedBack\ProgressTheme;
use W4\Native\Themes\Components\FeedBack\SkeletonTheme;
use W4\Native\Themes\Components\FeedBack\ToastTheme;

class W4NativeFeedBackService
{
    /**
     * @return array<string, \W4\Native\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            //FeedBack
            'alert' => new AlertTheme(),
            'badge' => new BadgeTheme(),
            'toast' => new ToastTheme(),
            'progress' => new ProgressTheme(),
            'skeleton' => new SkeletonTheme(),
        ];
    }
}