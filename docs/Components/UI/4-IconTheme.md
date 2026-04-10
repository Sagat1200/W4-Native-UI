# Icon (W4-Native-UI)

## 1. Propósito

`Icon` representa símbolos visuales reutilizables dentro de botones, etiquetas y bloques de información.

## 2. Capacidad funcional

Soporta:

- variantes (`neutral|primary|secondary|accent|muted`)
- tamaños (`xs|sm|md|lg|xl`)
- estados (`disabled|active|hidden`)
- flags extra: `spin` y `decorative`
- hooks JS (`icon:*`)

## 3. Clases base

- `w4-icon`
- `w4-icon-{variant}`
- `w4-icon-{size}`
- `w4-icon-{state}`
- `w4-icon-spin`
- `w4-icon-decorative`

## 4. Variantes soportadas

```text
neutral
primary
secondary
accent
muted
```

## 5. Tamaños soportados

```text
xs | sm | md | lg | xl
```

## 6. Estados soportados

- `disabled` → `w4-icon-disabled` + `icon:disable`
- `active` → `w4-icon-active` + `icon:active`
- `hidden` → `w4-icon-hidden` + `icon:hide`

## 7. Flags adicionales del resolver

- `spin=true` agrega `w4-icon-spin`
- `decorative=true` agrega `w4-icon-decorative`

## 8. Formas de renderizado

### 8.1 HTML directo

```html
<span class="w4-icon w4-icon-primary w4-icon-md" aria-hidden="true">★</span>
```

### 8.2 Spin

```html
<span class="w4-icon w4-icon-accent w4-icon-md w4-icon-spin" aria-hidden="true">⟳</span>
```

### 8.3 Hidden por estado

```html
<span
  class="w4-icon w4-icon-muted w4-icon-sm"
  data-w4-component="icon"
  data-w4-state="hidden"
  aria-hidden="true"
>
  ⚑
</span>
```

### 8.4 Desde core (W4-UI-Framework)

```php
Icon::make()
    ->icon('refresh')
    ->variant('accent')
    ->size('md')
    ->spin(true)
    ->decorative(true);
```

## 9. Integración JS

```js
window.W4NativeUI.on("icon:active", function (detail) {
  console.log(detail.hook);
});
```

## 10. Accesibilidad

- si el icono es solo decorativo: `aria-hidden="true"` o `decorative=true`
- si comunica información relevante, acompañarlo con texto visible o `aria-label` en el contenedor

## 11. Referencias

- `src/Themes/Components/UI/IconTheme.php`
- `resources/css/w4-components.css`
- `docs/System/3-JAVASCRIPT.md`
