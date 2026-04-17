import React from 'react'

export function W4Toggle({
  checked = false,
  onChange,
  variant = 'default',
  size = 'md',
  name = null,
  disabled = false,
  readonly = false,
  invalid = false,
  valid = false,
  loading = false,
  className = '',
  ...props
}) {
  const classes = [
    'w4-toggle',
    `w4-toggle-${variant}`,
    `w4-toggle-${size}`,
    checked ? 'w4-toggle-checked' : null,
    disabled ? 'w4-toggle-disabled' : null,
    readonly ? 'w4-toggle-readonly' : null,
    invalid ? 'w4-toggle-invalid' : null,
    valid ? 'w4-toggle-valid' : null,
    loading ? 'w4-toggle-loading' : null,
    className || null,
  ]
    .filter(Boolean)
    .join(' ')

  const isDisabled = disabled || loading

  return (
    <input
      type="checkbox"
      name={name || undefined}
      className={classes}
      checked={checked}
      disabled={isDisabled}
      readOnly={readonly}
      onChange={onChange}
      {...props}
    />
  )
}
