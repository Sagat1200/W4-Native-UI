<template>
  <div role="alert" :class="classes">
    <slot />
  </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  variant: { type: String, default: 'default' },
  size: { type: String, default: 'md' },
  disabled: { type: Boolean, default: false },
  active: { type: Boolean, default: false },
  hidden: { type: Boolean, default: false },
  dismissed: { type: Boolean, default: false },
})

const classes = computed(() => {
  const c = ['w4-alert', `w4-alert-${props.variant}`, `w4-alert-${props.size}`]

  if (props.disabled) c.push('w4-alert-disabled')
  if (props.active) c.push('w4-alert-active')
  if (props.hidden) c.push('w4-alert-hidden')
  if (props.dismissed) c.push('w4-alert-dismissed')

  return c
})
</script>
