# Heading (W4-Native-UI)

## 1. Propósito

`Heading` define títulos semánticos con estilo consistente para secciones, bloques y jerarquía visual.

## 2. Capacidad funcional

Soporta:

- variantes (`neutral|primary|secondary|accent|muted`)
- tamaños (`xs|sm|md|lg|xl`)
- niveles (`h1|h2|h3|h4|h5|h6`)
- estados (`disabled|active|hidden`)
- hooks JS (`heading:*`)

## 3. Clases base

- `w4-heading`
- `w4-heading-{variant}`
- `w4-heading-{size}`
- `w4-heading-{level}`
- `w4-heading-{state}`

## 4. Variantes soportadas

```text
neutral
primary
secondary
accent
muted
```

Ejemplo:

```html
<h2 class="w4-heading w4-heading-primary">Título principal</h2>
```

## 5. Tamaños soportados

```text
xs | sm | md | lg | xl
```

Ejemplo:

```html
<h2 class="w4-heading w4-heading-lg">Título grande</h2>
```

## 6. Niveles soportados

El resolver acepta:

```text
h1 | h2 | h3 | h4 | h5 | h6
```

Clase generada:

```text
w4-heading-h1 ... w4-heading-h6
```

Ejemplo:

```html
<h3 class="w4-heading w4-heading-h3">Subtítulo</h3>
```

## 7. Estados soportados

- `disabled` → `w4-heading-disabled` + `heading:disable`
- `active` → `w4-heading-active` + `heading:active`
- `hidden` → `w4-heading-hidden` + `heading:hide`

## 8. Formas de renderizado

### 8.1 HTML directo

```html
<h2 class="w4-heading w4-heading-neutral w4-heading-md">Sección</h2>
```

### 8.2 HTML con `data-w4-*`

```html
<h2
  class="w4-heading w4-heading-secondary w4-heading-lg"
  data-w4-component="heading"
  data-w4-state="active"
>
  Sección activa
</h2>
```

### 8.3 Desde core (W4-UI-Framework)

```php
Heading::make()
    ->text('Panel de control')
    ->level('h1')
    ->variant('primary')
    ->size('xl')
    ->activate();
```

## 9. Integración JS

```js
window.W4NativeUI.on("heading:active", function (detail) {
  console.log(detail.hook, detail.element);
});
```

## 10. Accesibilidad

- usar nivel semántico correcto (`h1..h6`)
- no saltar jerarquía sin justificación
- evitar usar heading solo para “texto grande” sin semántica

## 11. Referencias

- `src/Themes/Components/UI/HeadingTheme.php`
- `resources/css/w4-components.css`
- `docs/System/3-JAVASCRIPT.md`
