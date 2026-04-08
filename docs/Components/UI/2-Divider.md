# Divider (W4-Native-UI)

## 1. Propósito

`Divider` separa visualmente bloques de contenido para mejorar jerarquía y lectura.

Se usa para:

- separar secciones de formularios
- dividir áreas en cards/panels
- marcar transición visual entre grupos de UI

## 2. Capacidad funcional

El componente soporta:

- variantes semánticas (`neutral|primary|secondary|accent|muted`)
- escala completa de tamaños (`xs|sm|md|lg|xl`)
- orientación (`horizontal|vertical`)
- estados del core (`disabled|active|hidden`)
- contrato JS por estado (`divider:*`)

## 3. Clases base

Clase base:

- `w4-divider`

Clases complementarias:

- tamaño: `w4-divider-{size}`
- orientación: `w4-divider-horizontal|w4-divider-vertical`
- estado: `w4-divider-disabled|w4-divider-active|w4-divider-hidden`

## 4. Variantes soportadas

En resolver (`DividerTheme`) se aceptan:

- `neutral`
- `primary`
- `secondary`
- `accent`
- `muted`

Clase resultante:

```text
w4-divider-{variant}
```

Nota importante:

- el resolver sí emite variantes
- el CSS del paquete incluye variantes reactivas al theme para contraste: `neutral|primary|secondary|accent|muted`
- al cambiar `data-theme`, los colores de borde cambian según tokens del preset activo

## 5. Tamaños soportados

Escala:

- `xs`
- `sm`
- `md`
- `lg`
- `xl`

Clase resultante:

```text
w4-divider-{size}
```

En CSS actual los tamaños ajustan principalmente márgenes verticales.

## 6. Orientación

Valores soportados:

- `horizontal` (default)
- `vertical`

Clase resultante:

```text
w4-divider-horizontal
w4-divider-vertical
```

## 7. Estados soportados

Estados:

- `disabled`
- `active`
- `hidden`

Mapeo a clase + hook:

- `disabled` → `w4-divider-disabled` + `divider:disable`
- `active` → `w4-divider-active` + `divider:active`
- `hidden` → `w4-divider-hidden` + `divider:hide`

## 8. Formas de renderizado

### 8.1 HTML base (horizontal)

```html
<hr class="w4-divider w4-divider-md w4-divider-horizontal">
```

### 8.2 Vertical

```html
<div class="w4-divider w4-divider-md w4-divider-vertical" aria-hidden="true"></div>
```

### 8.3 Por estado (active)

```html
<hr
  class="w4-divider w4-divider-md w4-divider-active"
  data-w4-component="divider"
  data-w4-state="active"
>
```

### 8.4 Por estado (disabled)

```html
<hr
  class="w4-divider w4-divider-md w4-divider-disabled"
  data-w4-component="divider"
  data-w4-state="disabled"
>
```

### 8.5 Por estado (hidden)

```html
<hr
  class="w4-divider w4-divider-md w4-divider-hidden"
  data-w4-component="divider"
  data-w4-state="hidden"
>
```

### 8.6 Con runtime JS (`data-w4-*`)

```html
<hr
  class="w4-divider w4-divider-lg w4-divider-horizontal"
  data-w4-component="divider"
  data-w4-state="active"
>
```

Con `window.W4NativeUI.init(document)`:

- normaliza `data-w4-component|state|hook`
- emite hooks de estado (`divider:*`)

### 8.7 Desde core (`W4-UI-Framework`)

```php
Divider::make()
    ->variant('neutral')
    ->size('lg')
    ->orientation('vertical')
    ->activate();
```

Contexto esperado:

```text
component=divider
variant=neutral
size=lg
orientation=vertical
state=active
```

### 8.8 Ejemplos de contraste por variante/theme

```html
<hr class="w4-divider w4-divider-md w4-divider-neutral">
<hr class="w4-divider w4-divider-md w4-divider-primary">
<hr class="w4-divider w4-divider-md w4-divider-secondary">
<hr class="w4-divider w4-divider-md w4-divider-accent">
<hr class="w4-divider w4-divider-md w4-divider-muted">
```

Si el theme cambia, cada variante usa nuevos tokens:

- `w4-divider-primary` → `--w4-primary`
- `w4-divider-secondary` → `--w4-secondary`
- `w4-divider-accent` → `--w4-accent`
- `w4-divider-neutral` → `--w4-base-300`
- `w4-divider-muted` → `--w4-base-200`

## 9. Integración JS recomendada

```js
window.W4NativeUI.on("divider:active", function (detail) {
  console.log(detail.component, detail.hook);
});
```

Global:

```js
window.W4NativeUI.on("w4:hook", function (detail) {
  if (detail.component === "divider") {
    console.log(detail.states);
  }
});
```

## 10. Accesibilidad

Recomendaciones:

- para separación visual pura usa `aria-hidden="true"`
- evita usar divider como único medio de comunicar estructura
- combina con headings y spacing semántico en contenido complejo

## 11. Buenas prácticas

- usar `horizontal` como base y `vertical` solo cuando el layout lo requiere
- no sobrecargar la vista con demasiados divisores consecutivos
- preferir `md` como tamaño por defecto del sistema
- usar `active` con moderación para destacar separación contextual

## 12. Problemas comunes

- si no se carga `w4-native.css`, no hay estilo visual de divider
- si no se carga `w4-native.js`, no hay hooks `divider:*`
- si no ejecutas `W4NativeUI.init(...)`, `data-w4-*` no se normaliza
- variantes emitidas por resolver sin estilo CSS dedicado pueden verse como estilo base

## 13. Referencias

- `src/Themes/Components/UI/DividerTheme.php`
- `resources/css/w4-components.css`
- `docs/System/3-JAVASCRIPT.md`
- `docs/ADR-10/11-NATIVE-JS-HOOKS-CONTRACT.md`
