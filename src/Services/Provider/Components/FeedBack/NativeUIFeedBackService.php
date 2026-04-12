<?php

namespace W4\NativeUI\Services\Provider\Components\FeedBack;

use W4\NativeUI\Themes\Components\FeedBack\AlertTheme;
use W4\NativeUI\Themes\Components\FeedBack\BadgeTheme;
use W4\NativeUI\Themes\Components\FeedBack\ProgressTheme;
use W4\NativeUI\Themes\Components\FeedBack\SkeletonTheme;
use W4\NativeUI\Themes\Components\FeedBack\ToastTheme;

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