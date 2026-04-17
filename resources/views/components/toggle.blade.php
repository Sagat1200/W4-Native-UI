@props([
    'variant' => 'default',
    'size' => 'md',
    'name' => null,
    'checked' => false,
    'disabled' => false,
    'readonly' => false,
    'invalid' => false,
    'valid' => false,
    'loading' => false,
])

@php
    $theme = app(\W4\NativeUI\Tools\Themes\NativeUITheme::class);
    $classes = implode(' ', $theme->resolveComponent('toggle', [
        'variant' => $variant,
        'size' => $size,
        'checked' => (bool) $checked,
        'disabled' => (bool) $disabled,
        'readonly' => (bool) $readonly,
        'invalid' => (bool) $invalid,
        'valid' => (bool) $valid,
        'loading' => (bool) $loading,
    ]));

    $isDisabled = (bool) $disabled || (bool) $loading;
@endphp

<input
    type="checkbox"
    name="{{ $name }}"
    {{ $attributes->merge(['class' => $classes, 'disabled' => $isDisabled, 'readonly' => (bool) $readonly, 'checked' => (bool) $checked]) }}
/>
