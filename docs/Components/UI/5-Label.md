# Label (W4-Native-UI)

## 1. Propósito

`Label` identifica y describe campos o bloques de información en UI.

## 2. Capacidad funcional

Soporta:

- variantes (`neutral|primary|secondary|accent|muted|required`)
- tamaños (`xs|sm|md|lg|xl`)
- estados (`disabled|active|hidden`)
- hooks JS (`label:*`)

## 3. Clases base

- `w4-label`
- `w4-label-{variant}`
- `w4-label-{size}`
- `w4-label-{state}`

Nota:

- `w4-label-required` agrega asterisco visual (`::after`)

## 4. Variantes soportadas

```text
neutral
primary
secondary
accent
muted
required
```

## 5. Tamaños soportados

```text
xs | sm | md | lg | xl
```

## 6. Estados soportados

- `disabled` → `w4-label-disabled` + `label:disable`
- `active` → `w4-label-active` + `label:active`
- `hidden` → `w4-label-hidden` + `label:hide`

## 7. Formas de renderizado

### 7.1 HTML directo

```html
<label class="w4-label w4-label-md" for="email">Correo</label>
```

### 7.2 Required

```html
<label class="w4-label w4-label-required w4-label-sm" for="password">Contraseña</label>
```

### 7.3 Con estado runtime

```html
<label
  class="w4-label w4-label-primary w4-label-md"
  data-w4-component="label"
  data-w4-state="active"
  for="name"
>
  Nombre
</label>
```

### 7.4 Desde core (W4-UI-Framework)

```php
Label::make()
    ->text('Correo')
    ->for('email')
    ->variant('required')
    ->size('sm');
```

## 8. Integración JS

```js
window.W4NativeUI.on("label:active", function (detail) {
  console.log(detail.element);
});
```

## 9. Accesibilidad

- usar `for` apuntando al `id` del input asociado
- no reemplazar semántica de `<label>` por `<div>` cuando es etiqueta de campo

## 10. Referencias

- `src/Themes/Components/UI/LabelTheme.php`
- `resources/css/w4-components.css`
- `docs/System/3-JAVASCRIPT.md`
