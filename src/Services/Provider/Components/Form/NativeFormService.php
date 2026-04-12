<?php

namespace W4\Native\Daisy\Services\Provider\Components\Form;

use W4\Native\Daisy\Themes\Components\Forms\CheckboxTheme;
use W4\Native\Daisy\Themes\Components\Forms\FieldErrorTheme;
use W4\Native\Daisy\Themes\Components\Forms\HelperTextTheme;
use W4\Native\Daisy\Themes\Components\Forms\InputTheme;
use W4\Native\Daisy\Themes\Components\Forms\RadioTheme;
use W4\Native\Daisy\Themes\Components\Forms\SelectTheme;
use W4\Native\Daisy\Themes\Components\Forms\TextareaTheme;
use W4\Native\Daisy\Themes\Components\Forms\ToggleTheme;

class NativeFormService
{
    /**
     * @return array<string, \W4\Native\Daisy\Contracts\ComponentThemeContract>
     */
    public static function getComponents(): array
    {
        return [
            'input' => new InputTheme(),
            'field-error' => new FieldErrorTheme(),
            'helper-text' => new HelperTextTheme(),
            'select' => new SelectTheme(),
            'textarea' => new TextareaTheme(),
            'checkbox' => new CheckboxTheme(),
            'radio' => new RadioTheme(),
            'toggle' => new ToggleTheme(),
        ];
    }
}