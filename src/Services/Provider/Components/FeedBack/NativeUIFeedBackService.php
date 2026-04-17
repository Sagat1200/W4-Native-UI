<?php

namespace W4\NativeUI\Services\Provider\Components\FeedBack;

use W4\NativeUI\Themes\Components\FeedBack\Alert\AlertTheme;
use W4\NativeUI\Themes\Components\FeedBack\Badge\BadgeTheme;
use W4\NativeUI\Themes\Components\FeedBack\Progress\ProgressTheme;
use W4\NativeUI\Themes\Components\FeedBack\Skeleton\SkeletonTheme;
use W4\NativeUI\Themes\Components\FeedBack\Toast\ToastTheme;

class NativeUIFeedBackService
{
    /**
     * @return array<string, \W4\NativeUI\Contracts\ComponentThemeContract>
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
