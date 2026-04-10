# IconButton (W4-Native-UI)

## 1. Propósito

`IconButton` representa acciones compactas centradas en un ícono.

Se usa para:

- acciones rápidas en toolbar
- acciones secundarias en cards/listas
- toggles de UI con poca carga visual

## 2. Capacidad funcional

Soporta:

- variantes (`primary|secondary|accent|neutral|ghost`)
- tamaños (`xs|sm|md|lg|xl`)
- estados (`disabled|loading|readonly|active`)
- hooks JS (`icon-button:*`)

## 3. Clases base

- `w4-icon-button`
- `w4-icon-button-{variant}`
- `w4-icon-button-{size}`
- `w4-icon-button-{state}`

## 4. Variantes soportadas

```text
primary
secondary
accent
neutral
ghost
```

Ejemplo:

```html
<button class="w4-icon-button w4-icon-button-accent w4-icon-button-md" aria-label="Editar">
  ✎
</button>
```

## 5. Tamaños soportados

```text
xs | sm | md | lg | xl
```

## 6. Estados soportados

- `disabled` → `w4-icon-button-disabled` + `icon-button:disabled` (inyecta `aria-disabled="true"`)
- `loading` → `w4-icon-button-loading` + `icon-button:loading` (inyecta `aria-busy="true"`)
- `readonly` → `w4-icon-button-readonly` + `icon-button:readonly` (inyecta `aria-readonly="true"`)
- `active` → `w4-icon-button-active` + `icon-button:active` (inyecta `aria-pressed="true"`)

## 7. Formas de renderizado

### 7.1 HTML directo

```html
<button class="w4-icon-button w4-icon-button-primary w4-icon-button-md" aria-label="Buscar">
  🔍
</button>
```

### 7.2 HTML con estado runtime

```html
<button
  class="w4-icon-button w4-icon-button-secondary w4-icon-button-md"
  data-w4-component="icon-button"
  data-w4-state="loading"
  aria-label="Guardando"
>
  ⏳
</button>
```

### 7.3 Desde core (W4-UI-Framework)

```php
IconButton::make()
    ->icon('search')
    ->variant('primary')
    ->size('md')
    ->startLoading();
```

## 8. Interacción nativa

Con directivas JS activas (`@W4NativeScripts` + `@W4NativeInit`), tiene feedback de presión:

- agrega `w4-icon-button-pressing` en click/touch
- vuelve al estado normal al soltar/salir

## 9. Integración JS

```js
window.W4NativeUI.on("icon-button:loading", function (detail) {
  console.log(detail.states);
});
```

## 10. Accesibilidad

- siempre definir `aria-label` cuando el botón no tiene texto visible
- usar `disabled` nativo cuando deba bloquear interacción real

## 11. Referencias

- `src/Themes/Components/UI/IconButtonTheme.php`
- `resources/css/w4-components.css`
- `docs/System/3-JAVASCRIPT.md`
