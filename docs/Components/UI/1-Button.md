# Button (W4-Native-UI)

## 1. Propósito

`Button` es el componente base de acción del sistema UI.

Se usa para:

- acciones primarias y secundarias
- confirmaciones
- disparo de eventos en formularios o flujos interactivos

## 2. Capacidad funcional

El componente soporta:

- variantes visuales
- escala completa de tamaños (`xs|sm|md|lg|xl`)
- estados de componente del core (`disabled|loading|active|readonly`)
- contrato JS por estado (`button:*`)
- integración con runtime JS (`data-w4-*`, ARIA)

## 3. Clases base y compatibilidad

Clase canónica:

- `w4-button`

Compatibilidad legacy activa:

- `w4-btn`

Ambas nomenclaturas renderizan el mismo bloque visual base.

## 4. Variantes soportadas

En resolver (`ButtonTheme`) se aceptan:

- `primary`
- `secondary`
- `accent`
- `neutral`
- `outline`
- `ghost`

Clase resultante:

```text
w4-button-{variant}
```

Ejemplo:

```html
<button class="w4-button w4-button-primary">Guardar</button>
```

## 5. Tamaños soportados

Escala soportada:

- `xs`
- `sm`
- `md`
- `lg`
- `xl`

Clase resultante:

```text
w4-button-{size}
```

Ejemplo:

```html
<button class="w4-button w4-button-primary w4-button-lg">Guardar</button>
```

## 6. Estados soportados

Estados de componente:

- `disabled`
- `loading`
- `active`
- `readonly`

Mapeo de estado a clase y hook JS:

- `disabled` → `w4-button-disabled` + `button:disabled` (inyecta `aria-disabled="true"`)
- `loading` → `w4-button-loading` + `button:loading` (inyecta `aria-busy="true"`)
- `active` → `w4-button-active` + `button:active` (inyecta `aria-pressed="true"`)
- `readonly` → `w4-button-readonly` + `button:readonly` (inyecta `aria-readonly="true"`)

## 7. Formas de renderizado

### 7.1 HTML directo

```html
<button class="w4-button w4-button-secondary w4-button-sm">
  Cancelar
</button>
```

### 7.2 HTML con estado por clase

```html
<button class="w4-button w4-button-primary w4-button-md w4-button-loading">
  Guardando...
</button>
```

### 7.3 HTML con runtime JS (`data-w4-*`)

```html
<button
  class="w4-button w4-button-primary w4-button-md"
  data-w4-component="button"
  data-w4-state="loading"
>
  Guardando...
</button>
```

Con `window.W4NativeUI.init(document)` se normalizan:

- `data-w4-component`
- `data-w4-state`
- `data-w4-hook`
- ARIA según estado

### 7.4 Render desde core (W4-UI-Framework)

```php
Button::make('Guardar')
    ->variant('primary')
    ->size('lg')
    ->startLoading();
```

Contexto esperado en resolver:

```text
component=button
variant=primary
size=lg
state=loading
```

### 7.5 Contrato de integración (theme contract)

`NativeTheme::resolveComponentContract('button', [...])` expone:

- `classes`
- `state_map`
- `js_hooks`

Esto es la base para integraciones JS desacopladas de CSS.

### 7.6 Ejemplos de renderizado por estado

#### Estado: default (sin estado explícito)

```html
<button class="w4-button w4-button-primary w4-button-md">
  Guardar
</button>
```

#### Estado: disabled (HTML nativo + semántica W4)

```html
<button
  class="w4-button w4-button-primary w4-button-md"
  data-w4-component="button"
  data-w4-state="disabled"
  disabled
>
  Guardando...
</button>
```

#### Estado: loading (runtime JS)

```html
<button
  class="w4-button w4-button-primary w4-button-md"
  data-w4-component="button"
  data-w4-state="loading"
>
  Guardando...
</button>
```

#### Estado: active (visual/pressed persistente)

```html
<button
  class="w4-button w4-button-primary w4-button-md w4-button-active"
  data-w4-component="button"
  data-w4-state="active"
>
  Activo
</button>
```

#### Estado: readonly (semántica de bloqueo no destructivo)

```html
<button
  class="w4-button w4-button-secondary w4-button-md"
  data-w4-component="button"
  data-w4-state="readonly"
>
  Solo lectura
</button>
```

#### Estado combinado: loading + readonly

```html
<button
  class="w4-button w4-button-secondary w4-button-md"
  data-w4-component="button"
  data-w4-state="loading readonly"
>
  Procesando...
</button>
```

#### Estado dinámico con JavaScript (de normal a loading y regreso)

```html
<button id="btnGuardar" class="w4-button w4-button-primary w4-button-md">
  Guardar
</button>

<script>
document.addEventListener("DOMContentLoaded", function () {
  window.W4NativeUI.init(document);

  var btn = document.getElementById("btnGuardar");
  var originalText = btn.textContent;

  btn.addEventListener("click", async function () {
    btn.setAttribute("data-w4-state", "loading");
    btn.textContent = "Guardando...";
    window.W4NativeUI.sync(btn);

    try {
      await new Promise(function (resolve) { setTimeout(resolve, 1000); });
    } finally {
      btn.setAttribute("data-w4-state", "");
      btn.textContent = originalText;
      window.W4NativeUI.sync(btn);
    }
  });
});
</script>
```

### 7.7 Ejemplos de renderizado por variante

#### Primary

```html
<button class="w4-button w4-button-primary w4-button-md">Primary</button>
```

#### Secondary

```html
<button class="w4-button w4-button-secondary w4-button-md">Secondary</button>
```

#### Accent

```html
<button class="w4-button w4-button-accent w4-button-md">Accent</button>
```

#### Neutral

```html
<button class="w4-button w4-button-neutral w4-button-md">Neutral</button>
```

#### Outline

```html
<button class="w4-button w4-button-outline w4-button-md">Outline</button>
```

#### Ghost

```html
<button class="w4-button w4-button-ghost w4-button-md">Ghost</button>
```

Resumen rápido de intención visual:

- `primary`: acción principal de la vista.
- `secondary`: acción alternativa de segundo nivel.
- `accent`: acción destacada temática.
- `neutral`: acción neutra con bajo énfasis.
- `outline`: acción secundaria con borde y fondo transparente.
- `ghost`: acción mínima, muy baja carga visual.

## 8. Integración JS recomendada

```js
window.W4NativeUI.on("button:loading", function (detail) {
  console.log(detail.component, detail.states);
});
```

Evento global:

```js
window.W4NativeUI.on("w4:hook", function (detail) {
  if (detail.component === "button") {
    console.log(detail.hook);
  }
});
```

## 9. Accesibilidad

En runtime JS, estados de `button` pueden reflejar:

- `disabled` → `aria-disabled="true"`
- `readonly` → `aria-readonly="true"`
- `loading` → `aria-busy="true"`
- `active` o `checked` lógico → `aria-pressed`

Además:

- usar texto de acción claro (`Guardar`, `Eliminar`, `Continuar`)
- no depender solo de color para comunicar estado

## 10. Buenas prácticas

- usar `w4-button` como convención principal nueva
- reservar `primary` para acción principal de pantalla
- usar `loading` para evitar doble submit
- combinar estado visual + estado funcional del backend
- preferir hooks JS (`button:*`) sobre selectores CSS rígidos

## 11. Problemas comunes

- Variantes sin estilo explícito en CSS pueden verse como base.
- Si no se carga `w4-native.js`, no hay normalización `data-w4-*` ni hooks runtime.
- Si no se ejecuta `W4NativeUI.init(...)`, los elementos dinámicos no se sincronizan.

## 12. Referencias

- `src/Themes/Components/UI/ButtonTheme.php`
- `resources/css/w4-components.css`
- `docs/ADR-10/11-NATIVE-JS-HOOKS-CONTRACT.md`
- `docs/ADR-10/12-QUICK-START-JS.md`
