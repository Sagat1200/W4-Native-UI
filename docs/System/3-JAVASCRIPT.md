# W4-Native-UI: Documentación JavaScript

## 1. Objetivo

Este documento describe la capa JavaScript nativa de W4-Native-UI:

- qué hace
- dónde usarla
- cuándo usarla
- cómo integrarla correctamente

## 2. Qué incluye `w4-native.js`

El runtime JS de W4-Native-UI:

- detecta componentes en el DOM por clases `w4-*` y por atributos `data-w4-*`
- normaliza atributos de integración:
  - `data-w4-component`
  - `data-w4-state`
  - `data-w4-hook`
- aplica atributos ARIA según estado (`disabled`, `readonly`, `invalid`, `loading`, etc.)
- emite hooks de eventos:
  - global: `w4:hook`
  - específico: `{component}:{state}`
- observa nodos nuevos con `MutationObserver` para sincronizar contenido dinámico
- expone API global en `window.W4NativeUI`

## 3. Componentes que detecta por defecto

Selectores base del runtime:

- `.w4-btn` y `.w4-button`
- `.w4-icon-button`
- `.w4-input`
- `.w4-select`
- `.w4-textarea`
- `.w4-checkbox`
- `.w4-radio`
- `.w4-toggle`
- `.w4-tooltip`
- `[data-w4-component]`
- `[data-w4-state]`
- `[data-w4-hook]`

## 4. Cuándo usar JavaScript de W4

### 4.1 Solo estilos (sin JS)

Si únicamente necesitas apariencia visual, carga solo CSS:

```blade
@W4NativeStyles
```

Esto NO incluye runtime de hooks ni ARIA dinámico.

### 4.2 Estilos + comportamiento runtime

Si necesitas estados dinámicos, hooks y normalización ARIA:

```blade
@W4NativeStyles
@W4NativeScripts
```

Y debes inicializar:

```html
<script>
document.addEventListener("DOMContentLoaded", function () {
  window.W4NativeUI.init(document);
});
</script>
```

## 5. Dónde usarlo

Ubicación recomendada:

- layout global (`app.blade.php` o layout base)

Motivo:

- se inicializa una sola vez
- evita duplicación de scripts por componente
- cubre todas las vistas hijas

## 6. Cómo integrarlo en Blade

### 6.1 Assets con directivas Blade

Directivas disponibles:

- `@W4NativeStyles`
- `@W4NativeScripts`
- `@W4NativeInit`
- `@W4NativeLivewire`

Ejemplo:

```blade
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="native.default">
<head>
    @W4NativeStyles
</head>
<body>
    {{ $slot ?? '' }}

    @W4NativeScripts
    @W4NativeInit
</body>
</html>
```

### 6.2 Assets manuales

```blade
<link rel="stylesheet" href="{{ asset('vendor/w4-native-ui/w4-native.css') }}">
<script src="{{ asset('vendor/w4-native-ui/w4-native.js') }}"></script>
```

## 7. API pública `window.W4NativeUI`

### 7.1 `setTheme(theme)`

Cambia el `data-theme` del documento.

```js
window.W4NativeUI.setTheme("native.dark");
```

### 7.2 `init(root?)`

Sincroniza todos los componentes dentro del root (o documento completo).

```js
window.W4NativeUI.init(document);
```

### 7.3 `sync(element)`

Re-sincroniza un solo elemento tras cambiar estado o atributos.

```js
button.setAttribute("data-w4-state", "loading");
window.W4NativeUI.sync(button);
```

### 7.4 `on(eventName, handler)`

Suscribe listener a hook; retorna función de unsubscribe.

```js
const off = window.W4NativeUI.on("button:loading", function (detail) {
  console.log(detail.component, detail.states);
});
```

### 7.5 `once(eventName, handler)`

Ejecuta el handler una sola vez.

```js
window.W4NativeUI.once("w4:hook", function (detail) {
  console.log(detail.hook);
});
```

### 7.6 `off(eventName, handler?)`

Elimina listener específico o todos de un evento.

```js
window.W4NativeUI.off("button:loading");
```

### 7.7 `emit(eventName, detail?)`

Emite un evento custom usando bus interno + DOM.

```js
window.W4NativeUI.emit("app:ready", { source: "layout" });
```

## 8. Estructura del payload de hooks

`detail` emitido en hooks:

```ts
type W4HookDetail = {
  component: string
  hook: string
  states: string[]
  element: Element
}
```

## 9. Ejemplos de uso real

### 9.1 Botón que entra en loading al hacer click

```html
<button id="btnGuardar" class="w4-button w4-button-primary w4-button-md">Guardar</button>
```

```js
document.addEventListener("DOMContentLoaded", function () {
  window.W4NativeUI.init(document);

  const btn = document.getElementById("btnGuardar");
  const texto = btn.textContent;

  btn.addEventListener("click", async function () {
    btn.setAttribute("data-w4-state", "loading");
    btn.textContent = "Guardando...";
    window.W4NativeUI.sync(btn);

    try {
      await new Promise(function (resolve) { setTimeout(resolve, 1200); });
    } finally {
      btn.setAttribute("data-w4-state", "");
      btn.textContent = texto;
      window.W4NativeUI.sync(btn);
    }
  });
});
```

### 9.2 Hook global de monitoreo

```js
window.W4NativeUI.on("w4:hook", function (detail) {
  console.log("[W4Hook]", detail.hook, detail.states);
});
```

## 10. Integración con Livewire

Reinicializa tras navegación:

```js
document.addEventListener("livewire:navigated", function () {
  window.W4NativeUI.init(document);
});
```

Para otros ciclos dinámicos, llama `init()` o `sync()` al finalizar render.

Si usas Blade directives, puedes reemplazar el bloque manual por:

```blade
@W4NativeLivewire
```

## 11. Reglas de operación recomendadas

- inicializa en layout global, no por componente
- no inyectes script inline por cada botón/input
- usa `data-w4-state` + `sync(element)` para cambios dinámicos
- usa hooks (`component:state`) para lógica desacoplada
- conserva la semántica de clases `w4-*`

## 12. Problemas comunes

- **No se aplican hooks:** falta `@W4NativeScripts` o `init(document)`.
- **No se sincroniza contenido dinámico:** faltó `init()` después de render.
- **No cambia ARIA/estado visual:** faltó `sync(element)` tras actualizar `data-w4-state`.
- **Eventos duplicados:** se está inicializando múltiples veces sin control de flujo.

## 13. Referencias

- `resources/js/w4-native.js`
- `src/Providers/W4NativeUiServiceProvider.php`
- `docs/ADR-10/11-NATIVE-JS-HOOKS-CONTRACT.md`
- `docs/ADR-10/12-QUICK-START-JS.md`
- `docs/System/2-INSTRUCCION.md`
