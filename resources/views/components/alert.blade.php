@props([
    'variant' => 'default',
    'size' => 'md',
    'disabled' => false,
    'active' => false,
    'hidden' => false,
    'dismissed' => false,
])

@php
    $theme = app(\W4\NativeUI\Tools\Themes\NativeUITheme::class);
    $classes = implode(' ', $theme->resolveComponent('alert', [
        'variant' => $variant,
        'size' => $size,
        'disabled' => (bool) $disabled,
        'active' => (bool) $active,
        'hidden' => (bool) $hidden,
        'dismissed' => (bool) $dismissed,
    ]));
@endphp

<div role="alert" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
