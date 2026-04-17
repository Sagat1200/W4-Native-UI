<template>
  <span :class="classes">
    <slot />
  </span>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  variant: { type: String, default: 'default' },
  size: { type: String, default: 'md' },
  outline: { type: Boolean, default: false },
  soft: { type: Boolean, default: false },
})

const classes = computed(() => {
  const c = ['w4-badge', `w4-badge-${props.variant}`, `w4-badge-${props.size}`]

  if (props.outline) c.push('w4-badge-outline')
  if (props.soft) c.push('w4-badge-soft')

  return c
})
</script>
