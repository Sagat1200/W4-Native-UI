<x-w4-native::card
    :variant="$variant"
    :size="$size"
    :bordered="$bordered"
    :bordered-variant="$borderedVariant"
    :elevated="$elevated"
    :ghost="$ghost"
>
    @if (is_string($title) && $title !== '')
        <div style="font-weight: 600; margin-bottom: 0.5rem;">{{ $title }}</div>
    @endif

    @if (is_string($body) && $body !== '')
        <div>{{ $body }}</div>
    @endif
</x-w4-native::card>
