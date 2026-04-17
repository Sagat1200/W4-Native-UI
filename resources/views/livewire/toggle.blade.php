<label style="display: inline-flex; align-items: center; gap: 0.5rem;">
    <x-w4-native::toggle
        wire:model="checked"
        :variant="$variant"
        :size="$size"
        :name="$name"
        :checked="$checked"
        :disabled="$disabled"
        :readonly="$readonly"
        :invalid="$invalid"
        :valid="$valid"
        :loading="$loading"
    />
    @if (is_string($label) && $label !== '')
        <span>{{ $label }}</span>
    @endif
</label>
