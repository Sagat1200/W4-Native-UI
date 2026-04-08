# W4-Native-UI: Blade Directives

## 1. Objetivo

Este documento define las directivas Blade del paquete para cargar e inicializar W4-Native-UI de forma limpia en layouts.

Directivas disponibles:

- `@W4NativeStyles`
- `@W4NativeScripts`
- `@W4NativeInit`
- `@W4NativeLivewire`

## 2. Qué imprime cada directiva

### 2.1 `@W4NativeStyles`

Imprime:

```html
<link rel="stylesheet" href="{{ asset('vendor/w4-native-ui/w4-native.css') }}">
```

Uso recomendado:

- dentro de `<head>`
- una sola vez por layout base

### 2.2 `@W4NativeScripts`

Imprime:

```html
<script src="{{ asset('vendor/w4-native-ui/w4-native.js') }}"></script>
```

Uso recomendado:

- antes de cerrar `</body>`
- una sola vez por layout base

### 2.3 `@W4NativeInit`

Imprime un bloque inline de inicialización:

```html
<script>
document.addEventListener("DOMContentLoaded", function () {
  window.W4NativeUI.init(document);
});
</script>
```

Uso recomendado:

- después de `@W4NativeScripts`
- una sola vez en layout global

### 2.4 `@W4NativeLivewire`

Imprime un bloque inline para reinicializar en navegación Livewire:

```html
<script>
document.addEventListener("livewire:navigated", function () {
  window.W4NativeUI.init(document);
});
</script>
```

Uso recomendado:

- cuando el proyecto usa Livewire con navegación/render dinámico
- colocarla junto a `@W4NativeInit` en layout global

## 3. Orden recomendado

```blade
@W4NativeStyles
...
@W4NativeScripts
@W4NativeInit
@W4NativeLivewire
```

## 4. Ejemplo completo (layout base)

```blade
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="native.default">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @W4NativeStyles
</head>
<body>
    {{ $slot ?? '' }}

    @W4NativeScripts
    @W4NativeInit
    @W4NativeLivewire
</body>
</html>
```

## 5. Escenarios de uso

### 5.1 Solo estilos

Si solo quieres apariencia visual:

```blade
@W4NativeStyles
```

No habrá hooks JS, `data-w4-*` ni normalización ARIA dinámica.

### 5.2 Estilos + runtime JS completo

```blade
@W4NativeStyles
@W4NativeScripts
@W4NativeInit
@W4NativeLivewire
```

Obtienes:

- runtime de hooks (`w4:hook`, `component:state`)
- normalización de `data-w4-component|state|hook`
- ARIA por estado
- interacción nativa de presión en `button` e `icon-button` al hacer click/touch

## 6. Livewire

`@W4NativeInit` cubre el primer render (`DOMContentLoaded`).

Para navegación/render dinámico, puedes usar:

```blade
@W4NativeLivewire
```

Equivale a:

```html
<script>
document.addEventListener("livewire:navigated", function () {
  window.W4NativeUI.init(document);
});
</script>
```

## 7. Buenas prácticas

- no repetir directivas en sub-vistas parciales
- centralizar en un único layout raíz
- mantener `@W4NativeScripts` antes de `@W4NativeInit`
- usar hooks JS con `window.W4NativeUI.on(...)` para lógica de app

## 8. Solución de problemas

- Si no se aplican estilos: valida publicación de `dist` y ruta `asset(...)`.
- Si no hay comportamiento JS: verifica que `@W4NativeScripts` esté presente.
- Si no se inicializa runtime: verifica `@W4NativeInit` o inicialización manual.
- Si elementos dinámicos no responden: invoca `window.W4NativeUI.init(document)` tras render.

## 9. Referencias

- `src/Providers/W4NativeUiServiceProvider.php`
- `docs/System/2-INSTRUCCION.md`
- `docs/System/3-JAVASCRIPT.md`
- `docs/ADR-10/11-NATIVE-JS-HOOKS-CONTRACT.md`
