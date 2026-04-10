# Text (W4-Native-UI)

## 1. Propósito

`Text` estandariza contenido tipográfico de párrafos, descripciones y apoyo contextual.

## 2. Capacidad funcional

Soporta:

- variantes (`neutral|primary|secondary|accent|muted|lead`)
- tamaños (`xs|sm|md|lg|xl`)
- estados (`disabled|active|hidden`)
- hooks JS (`text:*`)

## 3. Clases base

- `w4-text`
- `w4-text-{variant}`
- `w4-text-{size}`
- `w4-text-{state}`

## 4. Variantes soportadas

```text
neutral
primary
secondary
accent
muted
lead
```

Nota:

- `lead` aumenta peso y altura de línea para texto introductorio

## 5. Tamaños soportados

```text
xs | sm | md | lg | xl
```

## 6. Estados soportados

- `disabled` → `w4-text-disabled` + `text:disable`
- `active` → `w4-text-active` + `text:active`
- `hidden` → `w4-text-hidden` + `text:hide`

## 7. Formas de renderizado

### 7.1 HTML directo

```html
<p class="w4-text w4-text-md">
  Este es un texto base del sistema.
</p>
```

### 7.2 Variante lead

```html
<p class="w4-text w4-text-lead w4-text-lg">
  Texto introductorio con mayor presencia visual.
</p>
```

### 7.3 Con estado runtime

```html
<p
  class="w4-text w4-text-secondary w4-text-md"
  data-w4-component="text"
  data-w4-state="active"
>
  Texto resaltado por estado activo.
</p>
```

### 7.4 Hidden

```html
<p class="w4-text w4-text-md w4-text-hidden" data-w4-component="text" data-w4-state="hidden">
  Este texto no debe verse.
</p>
```

### 7.5 Desde core (W4-UI-Framework)

```php
Text::make()
    ->text('Texto de ayuda')
    ->variant('muted')
    ->size('sm');
```

## 8. Integración JS

```js
window.W4NativeUI.on("text:active", function (detail) {
  console.log(detail.states);
});
```

## 9. Buenas prácticas

- usar `lead` para introducciones, no para párrafos extensos
- usar `muted` para soporte visual secundario
- mantener contraste suficiente con theme activo

## 10. Referencias

- `src/Themes/Components/UI/TextTheme.php`
- `resources/css/w4-components.css`
- `docs/System/3-JAVASCRIPT.md`
