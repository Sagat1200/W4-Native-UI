import React from 'react'

export function W4Alert({
  variant = 'default',
  size = 'md',
  disabled = false,
  active = false,
  hidden = false,
  dismissed = false,
  className = '',
  children,
  ...props
}) {
  const classes = [
    'w4-alert',
    `w4-alert-${variant}`,
    `w4-alert-${size}`,
    disabled ? 'w4-alert-disabled' : null,
    active ? 'w4-alert-active' : null,
    hidden ? 'w4-alert-hidden' : null,
    dismissed ? 'w4-alert-dismissed' : null,
    className || null,
  ]
    .filter(Boolean)
    .join(' ')

  return (
    <div role="alert" className={classes} {...props}>
      {children}
    </div>
  )
}
