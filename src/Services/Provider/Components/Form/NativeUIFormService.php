<?php

namespace W4\NativeUI\Services\Provider\Components\Form;

use W4\NativeUI\Themes\Components\Forms\CheckBox\CheckboxTheme;
use W4\NativeUI\Themes\Components\Forms\FieldError\FieldErrorTheme;
use W4\NativeUI\Themes\Components\Forms\HelperText\HelperTextTheme;
use W4\NativeUI\Themes\Components\Forms\Input\InputTheme;
use W4\NativeUI\Themes\Components\Forms\Radio\RadioTheme;
use W4\NativeUI\Themes\Components\Forms\Select\SelectTheme;
use W4\NativeUI\Themes\Components\Forms\TextArea\TextareaTheme;
use W4\NativeUI\Themes\Components\Forms\Toggle\ToggleTheme;

class NativeUIFormService
{
    /**
     * @return array<string, \W4\NativeUI\Contracts\ComponentThemeContract>
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
