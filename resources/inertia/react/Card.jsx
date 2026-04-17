import React from 'react'

export function W4Card({
  variant = 'base-100',
  size = 'md',
  bordered = false,
  borderedVariant = null,
  elevated = false,
  ghost = false,
  className = '',
  children,
  ...props
}) {
  const classes = [
    'w4-card',
    `w4-card-${variant}`,
    `w4-card-${size}`,
    bordered ? 'w4-card-bordered' : null,
    borderedVariant ? `w4-card-bordered-${borderedVariant}` : null,
    elevated ? 'w4-card-elevated' : null,
    ghost ? 'w4-card-ghost' : null,
    className || null,
  ]
    .filter(Boolean)
    .join(' ')

  return (
    <div className={classes} {...props}>
      <div className="w4-card-body">{children}</div>
    </div>
  )
}
