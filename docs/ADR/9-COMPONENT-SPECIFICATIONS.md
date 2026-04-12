# W4-Native-UI: Especificaciones de componentes

---

## 1. Introducción

Este documento define las **especificaciones oficiales de los componentes del sistema W4-Native-UI**.

Cada componente incluye:

* propósito
* estructura
* clases base
* variantes
* tamaños
* estados
* accesibilidad
* ejemplos de uso

Estas especificaciones sirven como referencia para:

* implementaciones visuales en **W4-Native-UI**
* resolvers de componentes en **W4-UI-Framework**

---

## 2. Convenciones del sistema

Todos los componentes siguen estas reglas:

### prefijo

```text
w4-
```

Ejemplo:

```text
w4-button
w4-input
w4-card
```

---

### estructura de clases

```text
w4-{component}
w4-{component}-{variant}
w4-{component}-{size}
```

Ejemplo:

```text
w4-button w4-button-primary w4-button-lg
```

---

## 3. Button

### Button: propósito

Permitir acciones del usuario dentro de la interfaz.

---

### Button: clase base

```text
w4-button
```

---

### Button: variantes

```text
w4-button-primary
w4-button-secondary
w4-button-accent
w4-button-neutral
w4-button-outline
w4-button-ghost
```

---

### Button: tamaños

```text
w4-button-xs
w4-button-sm
w4-button-md
w4-button-lg
w4-button-xl
```

---

### Button: ejemplo

```html
<button class="w4-button w4-button-primary">
Guardar
</button>
```

---

## 4. Input

### Input: propósito

Permitir entrada de texto del usuario.

---

### Input: clase base

```text
w4-input
```

---

### Input: variantes

```text
w4-input-default
w4-input-bordered
w4-input-ghost
```

---

### Input: tamaños

```text
w4-input-xs
w4-input-sm
w4-input-md
w4-input-lg
w4-input-xl
```

---

### Input: ejemplo

```html
<input class="w4-input w4-input-bordered" placeholder="Nombre">
```

---

## 5. Select

### Select: propósito

Seleccionar una opción de una lista.

---

### Select: clase base

```text
w4-select
```

---

### Select: variantes

```text
w4-select-default
w4-select-bordered
w4-select-ghost
```

---

### Select: tamaños

```text
w4-select-xs
w4-select-sm
w4-select-md
w4-select-lg
w4-select-xl
```

---

### Select: ejemplo

```html
<select class="w4-select w4-select-bordered">
  <option>Opción 1</option>
  <option>Opción 2</option>
</select>
```

---

## 6. Textarea

### Textarea: propósito

Entrada de texto multilinea.

---

### Textarea: clase base

```text
w4-textarea
```

---

### Textarea: variantes

```text
w4-textarea-default
w4-textarea-bordered
w4-textarea-ghost
```

---

### Textarea: ejemplo

```html
<textarea class="w4-textarea"></textarea>
```

---

## 7. Checkbox

### Checkbox: propósito

Permitir selección booleana.

---

### Checkbox: clase base

```text
w4-checkbox
```

---

### Checkbox: variantes

```text
w4-checkbox-primary
w4-checkbox-secondary
```

---

### Checkbox: ejemplo

```html
<input type="checkbox" class="w4-checkbox">
```

---

## 8. Radio

### Radio: propósito

Seleccionar una opción entre varias.

---

### Radio: clase base

```text
w4-radio
```

---

### Radio: variantes

```text
w4-radio-default
w4-radio-primary
w4-radio-secondary
```

---

### Radio: ejemplo

```html
<input type="radio" class="w4-radio">
```

---

## 9. Toggle

### Toggle: propósito

Representar un estado activado/desactivado.

---

### Toggle: clase base

```text
w4-toggle
```

---

### Toggle: variantes

```text
w4-toggle-default
w4-toggle-primary
w4-toggle-secondary
```

---

### Toggle: ejemplo

```html
<input type="checkbox" class="w4-toggle">
```

---

## 10. Card

### Card: propósito

Contenedor visual para contenido.

---

### Card: clase base

```text
w4-card
```

---

### Card: subcomponentes

```text
w4-card-header
w4-card-body
w4-card-footer
```

---

### Card: ejemplo

```html
<div class="w4-card">
  <div class="w4-card-body">
    Contenido
  </div>
</div>
```

---

## 11. Alert

### Alert: propósito

Mostrar mensajes al usuario.

---

### Alert: clase base

```text
w4-alert
```

---

### Alert: variantes

```text
w4-alert-info
w4-alert-success
w4-alert-warning
w4-alert-error
```

---

### Alert: ejemplo

```html
<div class="w4-alert w4-alert-success">
Guardado correctamente
</div>
```

---

## 12. Badge

### Badge: propósito

Mostrar etiquetas pequeñas o estados.

---

### Badge: clase base

```text
w4-badge
```

---

### Badge: variantes

```text
w4-badge-primary
w4-badge-secondary
w4-badge-accent
```

---

### Badge: ejemplo

```html
<span class="w4-badge w4-badge-primary">
Nuevo
</span>
```

---

## 13. Divider

### Divider: propósito

Separar visualmente secciones.

---

### Divider: clase base

```text
w4-divider
```

---

### Divider: ejemplo

```html
<div class="w4-divider">
Sección
</div>
```

---

## 14. Avatar

### Avatar: propósito

Mostrar imagen de usuario.

---

### Avatar: clase base

```text
w4-avatar
```

---

### Avatar: ejemplo

```html
<div class="w4-avatar">
  <img src="avatar.png">
</div>
```

---

## 15. Progress

### Progress: propósito

Mostrar progreso de una tarea.

---

### Progress: clase base

```text
w4-progress
```

---

### Progress: ejemplo

```html
<progress class="w4-progress" value="50" max="100"></progress>
```

---

## 16. Skeleton

### Skeleton: propósito

Representar contenido en carga.

---

### Skeleton: clase base

```text
w4-skeleton
```

---

### Skeleton: ejemplo

```html
<div class="w4-skeleton h-6 w-40"></div>
```

---

## 17. Modal

### Modal: propósito

Mostrar contenido en una ventana flotante.

---

### Modal: clase base

```text
w4-modal
```

---

### Modal: subcomponentes

```text
w4-modal-box
w4-modal-header
w4-modal-body
w4-modal-footer
```

---

### Modal: ejemplo

```html
<div class="w4-modal">
  <div class="w4-modal-box">
Contenido
  </div>
</div>
```

---

## 18. Dropdown

### Dropdown: propósito

Mostrar menú desplegable.

---

### Dropdown: clase base

```text
w4-dropdown
```

---

### Dropdown: subcomponentes

```text
w4-dropdown-content
```

---

### Dropdown: ejemplo

```html
<div class="w4-dropdown">
<button class="w4-button">Menu</button>

<ul class="w4-dropdown-content">
<li>Item</li>
</ul>
</div>
```

---

## 19. Tabs

### Tabs: propósito

Navegación entre vistas.

---

### Tabs: clases

```text
w4-tabs
w4-tab
w4-tab-active
```

---

### Tabs: ejemplo

```html
<div class="w4-tabs">
<a class="w4-tab w4-tab-active">Tab 1</a>
<a class="w4-tab">Tab 2</a>
</div>
```

---

## 20. Tooltip

### Tooltip: propósito

Mostrar información contextual.

---

### Tooltip: clase base

```text
w4-tooltip
```

---

### Tooltip: ejemplo

```html
<button class="w4-button w4-tooltip" data-tip="Guardar">
Guardar
</button>
```

---

## 21. Estado de cobertura v0.1.0

Componentes con resolver dedicado y cobertura activa en v0.1.0:

* UI: `button`, `divider`, `heading`, `icon`, `icon-button`, `label`, `link`, `text`
* Forms: `input`, `select`, `textarea`, `checkbox`, `radio`, `toggle`, `field-error`, `helper-text`
* Layout: `card`, `container`, `stack`, `grid`, `section`, `panel`
* Feedback: `alert`, `badge`, `toast`, `progress`, `skeleton`, `tooltip`

Componentes como `modal`, `dropdown`, `tabs`, `avatar` permanecen como especificación objetivo para versiones posteriores.

---

## 22. Accesibilidad y Motor JavaScript (ARIA + data-hooks)

El sistema ahora cuenta con una capa JS nativa madura y completamente integrada que no se acopla directamente a las clases CSS:

* cada componente publica atributos según su estado mediante el Enum del core inyectado en `data-w4-state` (`disabled`, `readonly`, `invalid`, `loading`, `hidden`, `active`, etc.)
* el motor `w4-native.js` expone dinámicamente `data-w4-component` y `data-w4-hook` al detectar cambios.
* los atributos ARIA (`aria-disabled`, `aria-hidden`, etc.) son inyectados y mantenidos por el Observer de JavaScript, asegurando total accesibilidad (a11y) sin ensuciar la capa PHP con lógica HTML.

---

## 23. Conclusión

Las especificaciones de componentes definen el contrato entre:

```text
W4-UI-Framework
↓
Theme Resolvers
↓
W4-Native-UI
```

Esto permite que el framework genere componentes visuales consistentes sin depender de librerías externas.

Este documento servirá como referencia oficial para el desarrollo y evolución del sistema UI.
