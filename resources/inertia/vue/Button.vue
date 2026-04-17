<template>
  <component
    :is="href ? 'a' : 'button'"
    :href="href || undefined"
    :type="href ? undefined : type"
    :disabled="href ? undefined : isDisabled"
    :aria-disabled="href ? (isDisabled ? 'true' : undefined) : undefined"
    :class="classes"
  >
    <slot />
  </component>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  variant: { type: String, default: 'primary' },
  size: { type: String, default: 'md' },
  href: { type: String, default: null },
  type: { type: String, default: 'button' },
  disabled: { type: Boolean, default: false },
  loading: { type: Boolean, default: false },
  active: { type: Boolean, default: false },
  readonly: { type: Boolean, default: false },
  square: { type: Boolean, default: false },
  circle: { type: Boolean, default: false },
  wide: { type: Boolean, default: false },
  block: { type: Boolean, default: false },
})

const isDisabled = computed(() => props.disabled || props.loading)

const classes = computed(() => {
  const c = ['w4-button', `w4-button-${props.variant}`, `w4-button-${props.size}`]

  if (props.disabled) c.push('w4-button-disabled')
  if (props.loading) c.push('w4-button-loading')
  if (props.active) c.push('w4-button-active')
  if (props.readonly) c.push('w4-button-readonly')
  if (props.square) c.push('w4-button-square')
  if (props.circle) c.push('w4-button-circle')
  if (props.wide) c.push('w4-button-wide')
  if (props.block) c.push('w4-button-block')

  return c
})
</script>
