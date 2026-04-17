@props([
    'variant' => 'default',
    'size' => 'md',
    'outline' => false,
    'soft' => false,
])

@php
    $theme = app(\W4\NativeUI\Tools\Themes\NativeUITheme::class);
    $classes = $theme->resolveComponent('badge', [
        'variant' => $variant,
        'size' => $size,
    ]);

    if ((bool) $outline) {
        $classes[] = 'w4-badge-outline';
    }

    if ((bool) $soft) {
        $classes[] = 'w4-badge-soft';
    }

    $classes = implode(' ', array_values(array_unique($classes)));
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
