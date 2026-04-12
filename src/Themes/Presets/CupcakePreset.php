<?php

namespace W4\Native\Themes\Presets;

use W4\Native\Tools\Themes\AbstractPreset;

class CupcakePreset extends AbstractPreset
{
    public function name(): string
    {
        return 'native.cupcake';
    }

    protected function overrides(): array
    {
        return [
            'primary' => '171 81% 59%',
            'primary-content' => '177 126% 16%',
            'secondary' => '326 79% 89%',
            'secondary-content' => '330 114% 29%',
            'accent' => '32 99% 83%',
            'accent-content' => '17 101% 31%',
            'base-100' => '24 32% 97%',
            'base-200' => '27 20% 92%',
            'base-300' => '22 13% 89%',
            'base-content' => '280 46% 14%',
            'info' => '196 156% 37%',
            'info-content' => '204 89% 15%',
            'success' => '164 187% 25%',
            'success-content' => '166 104% 8%',
            'warning' => '47 168% 35%',
            'warning-content' => '26 91% 13%',
            'error' => '345 99% 55%',
            'error-content' => '342 95% 15%',
        ];
    }
}
