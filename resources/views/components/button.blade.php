@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
    'disabled' => false,
    'loading' => false,
    'active' => false,
    'readonly' => false,
    'square' => false,
    'circle' => false,
    'wide' => false,
    'block' => false,
])

@php
    $theme = app(\W4\NativeUI\Tools\Themes\NativeUITheme::class);
    $classes = implode(' ', $theme->resolveComponent('button', [
        'variant' => $variant,
        'size' => $size,
        'disabled' => (bool) $disabled,
        'loading' => (bool) $loading,
        'active' => (bool) $active,
        'readonly' => (bool) $readonly,
        'square' => (bool) $square,
        'circle' => (bool) $circle,
        'wide' => (bool) $wide,
        'block' => (bool) $block,
    ]));

    $isDisabled = (bool) $disabled || (bool) $loading;
@endphp

@if (is_string($href) && $href !== '')
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $classes, 'aria-disabled' => $isDisabled ? 'true' : null]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $classes, 'disabled' => $isDisabled]) }}
    >
        {{ $slot }}
    </button>
@endif
