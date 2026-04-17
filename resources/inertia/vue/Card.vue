<template>
  <div :class="classes">
    <div class="w4-card-body">
      <slot />
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  variant: { type: String, default: 'base-100' },
  size: { type: String, default: 'md' },
  bordered: { type: Boolean, default: false },
  borderedVariant: { type: String, default: null },
  elevated: { type: Boolean, default: false },
  ghost: { type: Boolean, default: false },
})

const classes = computed(() => {
  const c = ['w4-card', `w4-card-${props.variant}`, `w4-card-${props.size}`]

  if (props.bordered) c.push('w4-card-bordered')
  if (props.borderedVariant) c.push(`w4-card-bordered-${props.borderedVariant}`)
  if (props.elevated) c.push('w4-card-elevated')
  if (props.ghost) c.push('w4-card-ghost')

  return c
})
</script>
