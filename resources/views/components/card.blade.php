@props([
    'variant' => 'base-100',
    'size' => 'md',
    'bordered' => false,
    'borderedVariant' => null,
    'elevated' => false,
    'ghost' => false,
])

@php
    $theme = app(\W4\NativeUI\Tools\Themes\NativeUITheme::class);
    $classes = $theme->resolveComponent('card', [
        'variant' => $variant,
        'size' => $size,
    ]);

    if ((bool) $bordered) {
        $classes[] = 'w4-card-bordered';
    }

    if (is_string($borderedVariant) && $borderedVariant !== '') {
        $classes[] = 'w4-card-bordered-' . $borderedVariant;
    }

    if ((bool) $elevated) {
        $classes[] = 'w4-card-elevated';
    }

    if ((bool) $ghost) {
        $classes[] = 'w4-card-ghost';
    }

    $classes = implode(' ', array_values(array_unique($classes)));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="w4-card-body">
        {{ $slot }}
    </div>
</div>
