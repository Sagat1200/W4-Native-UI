<?php

namespace W4\Native\Daisy\Services\Provider\Components\FeedBack;

use W4\Native\Daisy\Themes\Components\FeedBack\AlertTheme;
use W4\Native\Daisy\Themes\Components\FeedBack\BadgeTheme;
use W4\Native\Daisy\Themes\Components\FeedBack\ProgressTheme;
use W4\Native\Daisy\Themes\Components\FeedBack\SkeletonTheme;
use W4\Native\Daisy\Themes\Components\FeedBack\ToastTheme;

class NativeFeedBackService
{
    /**
     * @return array<string, \W4\Native\Daisy\Contracts\ComponentThemeContract>
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