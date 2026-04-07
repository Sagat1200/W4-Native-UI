# W4-Native-UI: Native JS Hooks Contract (v0.1.x)

---

## 1. Objetivo

Este documento define el contrato público de la capa JS nativa para componentes:

* atributos `data-w4-*`
* eventos emitidos
* API global `window.W4NativeUI`
* forma del payload (`detail`)

---

## 2. Atributos normalizados

La capa JS nativa garantiza estos atributos cuando un elemento es reconocido como componente:

* `data-w4-component`
* `data-w4-state`
* `data-w4-hook`

### 2.1 `data-w4-component`

Identificador canónico del componente.

Ejemplos:

```text
button
icon-button
input
select
textarea
checkbox
radio
toggle
tooltip
```

### 2.2 `data-w4-state`

Lista de estados activos separados por espacio.

Ejemplo:

```text
readonly invalid
```

### 2.3 `data-w4-hook`

Lista de hooks activos separados por espacio.

Ejemplo:

```text
input:readonly input:invalid
```

---

## 3. Convención de hooks

La convención oficial es:

```text
{component}:{state}
```

Ejemplos:

```text
button:loading
icon-button:active
input:readonly
select:invalid
textarea:readonly
checkbox:indeterminate
radio:selected
toggle:checked
tooltip:active
```

---

## 4. Eventos emitidos

Por cada hook resuelto, el runtime emite:

* evento global: `w4:hook`
* evento específico: `{component}:{state}`

Ambos se emiten como `CustomEvent` y transportan el mismo `detail`.

---

## 5. Payload del evento (`detail`)

Forma estable del payload:

```ts
type W4HookDetail = {
  component: string
  hook: string
  states: string[]
  element: Element
}
```

Ejemplo:

```json
{
  "component": "input",
  "hook": "input:readonly",
  "states": ["readonly", "valid"],
  "element": "<input ...>"
}
```

---

## 6. API pública `window.W4NativeUI`

La API pública actual es:

* `setTheme(theme: string): void`
* `init(root?: ParentNode): void`
* `sync(element: Element): void`
* `on(eventName: string, handler: Function): () => void`
* `once(eventName: string, handler: Function): () => void`
* `off(eventName: string, handler?: Function): void`
* `emit(eventName: string, detail?: object): void`

---

## 7. Ejemplos de uso

```js
const offLoading = window.W4NativeUI.on("button:loading", function (detail) {
  console.log(detail.component, detail.states);
});

window.W4NativeUI.once("w4:hook", function (detail) {
  console.log("primer hook detectado", detail.hook);
});

window.W4NativeUI.emit("app:ready", { source: "w4-native-ui" });

offLoading();
```

---

## 8. ARIA normalizado por estado

La capa JS normaliza atributos ARIA en base al estado detectado:

* `disabled` → `aria-disabled="true"`
* `readonly` → `aria-readonly="true"`
* `invalid` → `aria-invalid="true"`
* `valid` → `aria-invalid="false"`
* `loading` → `aria-busy="true"`
* `hidden` → `aria-hidden="true"`
* `active|checked` en `button|icon-button|toggle` → `aria-pressed`

---

## 9. Compatibilidad de clases

Para transición de nomenclatura, la capa actual soporta:

* `w4-btn*` (legacy)
* `w4-button*` (canónico en documentación)

Ambas resuelven al componente `button`.

---

## 10. Estabilidad del contrato

Este contrato se considera estable para `v0.1.x`.

Cambios futuros deben:

* mantener compatibilidad hacia atrás cuando sea posible
* documentarse en ADR
* incluir pruebas de integración en runtime JS

---

## 11. Referencias

* guía rápida de uso: `12-QUICK-START-JS.md`
* flujo de render: `10-RENDERING-FLOW.md`
