import React from 'react'

export function W4Button({
  variant = 'primary',
  size = 'md',
  href = null,
  type = 'button',
  disabled = false,
  loading = false,
  active = false,
  readonly = false,
  square = false,
  circle = false,
  wide = false,
  block = false,
  className = '',
  children,
  ...props
}) {
  const classes = [
    'w4-button',
    `w4-button-${variant}`,
    `w4-button-${size}`,
    disabled ? 'w4-button-disabled' : null,
    loading ? 'w4-button-loading' : null,
    active ? 'w4-button-active' : null,
    readonly ? 'w4-button-readonly' : null,
    square ? 'w4-button-square' : null,
    circle ? 'w4-button-circle' : null,
    wide ? 'w4-button-wide' : null,
    block ? 'w4-button-block' : null,
    className || null,
  ]
    .filter(Boolean)
    .join(' ')

  const isDisabled = disabled || loading

  if (href) {
    return (
      <a href={href} className={classes} aria-disabled={isDisabled ? 'true' : undefined} {...props}>
        {children}
      </a>
    )
  }

  return (
    <button type={type} className={classes} disabled={isDisabled} {...props}>
      {children}
    </button>
  )
}
