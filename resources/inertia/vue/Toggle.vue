<template>
  <input
    type="checkbox"
    :name="name || undefined"
    :class="classes"
    :disabled="isDisabled"
    :readonly="readonly"
    :checked="modelValue"
    @change="$emit('update:modelValue', $event.target.checked)"
  />
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  modelValue: { type: Boolean, default: false },
  variant: { type: String, default: 'default' },
  size: { type: String, default: 'md' },
  name: { type: String, default: null },
  disabled: { type: Boolean, default: false },
  readonly: { type: Boolean, default: false },
  invalid: { type: Boolean, default: false },
  valid: { type: Boolean, default: false },
  loading: { type: Boolean, default: false },
})

defineEmits(['update:modelValue'])

const isDisabled = computed(() => props.disabled || props.loading)

const classes = computed(() => {
  const c = ['w4-toggle', `w4-toggle-${props.variant}`, `w4-toggle-${props.size}`]

  if (props.modelValue) c.push('w4-toggle-checked')
  if (props.disabled) c.push('w4-toggle-disabled')
  if (props.readonly) c.push('w4-toggle-readonly')
  if (props.invalid) c.push('w4-toggle-invalid')
  if (props.valid) c.push('w4-toggle-valid')
  if (props.loading) c.push('w4-toggle-loading')

  return c
})
</script>
