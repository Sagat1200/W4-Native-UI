import React from 'react'

export function W4Badge({ variant = 'default', size = 'md', outline = false, soft = false, className = '', children, ...props }) {
  const classes = [
    'w4-badge',
    `w4-badge-${variant}`,
    `w4-badge-${size}`,
    outline ? 'w4-badge-outline' : null,
    soft ? 'w4-badge-soft' : null,
    className || null,
  ]
    .filter(Boolean)
    .join(' ')

  return (
    <span className={classes} {...props}>
      {children}
    </span>
  )
}
