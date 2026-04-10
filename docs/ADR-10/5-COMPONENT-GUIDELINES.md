# W4-Native-UI: Guías de componentes

---

## 1. Introducción

Este documento define las **reglas oficiales para diseñar e implementar componentes UI en W4-Native-UI**.

El objetivo es garantizar:

* consistencia visual
* consistencia técnica
* escalabilidad del sistema UI
* integración correcta con W4-Ui-Framework

Todos los componentes visuales del sistema deben seguir estas guías.

---

## 2. Filosofía de componentes

Los componentes de W4-Native-UI siguen tres principios fundamentales.

### 2.1 Semántica sobre utilidades

Los componentes deben utilizar **clases semánticas** en lugar de depender exclusivamente de utilidades.

Ejemplo correcto:

```text
w4-button
w4-input
w4-card
```

Ejemplo incorrecto:

```text
px-4 py-2 bg-blue-500 text-white
```

Las utilidades Tailwind pueden usarse, pero no deben reemplazar la semántica del componente.

---

### 2.2 Basado en design tokens

Los estilos de los componentes deben depender exclusivamente de **design tokens**.

Ejemplo correcto:

```css
background: hsl(var(--w4-primary));
border-radius: var(--w4-radius-button);
```

Ejemplo incorrecto:

```css
background: #3b82f6;
border-radius: 6px;
```

Esto permite que los themes modifiquen la apariencia global.

---

### 2.3 Componentes desacoplados

Los componentes visuales no deben contener lógica de negocio.

Responsabilidades del componente visual:

* estilos
* layout
* estados visuales

Responsabilidades del framework:

* lógica
* comportamiento
* estado del componente

---

## 3. Estructura de un componente

Cada componente visual se implementa mediante:

1. clase base
2. variantes
3. tamaños
4. estados

Ejemplo:

```text
w4-button
w4-button-primary
w4-button-secondary
w4-button-outline
w4-button-sm
w4-button-md
w4-button-lg
```

---

## 4. Clase base

Cada componente debe tener una **clase base obligatoria**.

Ejemplo:

```text
Button → w4-button
Input → w4-input
Card → w4-card
Alert → w4-alert
Badge → w4-badge
```

La clase base define:

* layout
* spacing
* tipografía
* transición

---

## 5. Variantes

Las variantes modifican el estilo visual principal.

Convención:

```text
w4-{component}-{variant}
```

Ejemplo para botones:

```text
w4-button-primary
w4-button-secondary
w4-button-accent
w4-button-outline
w4-button-ghost
```

Variantes recomendadas:

```text
primary
secondary
accent
neutral
outline
ghost
```

---

## 6. Tamaños

Los tamaños siguen la convención:

```text
w4-{component}-{size}
```

Ejemplo:

```text
w4-button-xs
w4-button-sm
w4-button-md
w4-button-lg
w4-button-xl
```

Tamaños estándar del sistema:

```text
xs
sm
md
lg
xl
```

Regla obligatoria del sistema:

* todo componente nuevo debe soportar la escala completa `xs|sm|md|lg|xl` en resolver y CSS
* no se aceptan componentes con escala parcial de tamaños

---

## 7. Estados visuales

Los componentes deben soportar estados visuales.

Ejemplos:

```text
disabled
active
loading
focus
hover
```

Ejemplo:

```text
w4-button-disabled
```

Los estados también pueden implementarse mediante pseudo clases:

```css
.w4-button:hover
.w4-button:focus
```

---

## 8. Estados de interacción

Los estados de interacción se manejan mediante:

* hover
* focus
* active

Ejemplo:

```css
.w4-button:hover
```

Estos estados no requieren clases adicionales.

---

## 9. Convenciones de nombres

Todas las clases del sistema utilizan el prefijo:

```text
w4-
```

Ejemplos:

```text
w4-button
w4-input
w4-card
w4-alert
```

Esto evita conflictos con otras librerías.

---

## 10. Uso de tokens

Los componentes deben utilizar tokens para:

### colores

```css
--w4-primary
--w4-secondary
```

### radios

```css
--w4-radius-button
--w4-radius-input
```

### sombras

```css
--w4-shadow-sm
--w4-shadow-md
```

---

## 11. Ejemplo completo de componente

Ejemplo simplificado de botón.

```css
.w4-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: var(--w4-radius-button);
  padding: 0.5rem 1rem;
  font-weight: 600;
  transition: all .2s ease;
}

.w4-button-primary {
  background: hsl(var(--w4-primary));
  color: hsl(var(--w4-primary-content));
}

.w4-button-secondary {
  background: hsl(var(--w4-secondary));
}
```

---

## 12. Composición de clases

Las clases se combinan para formar un componente final.

Ejemplo:

```html
<button class="w4-button w4-button-primary w4-button-lg">
Guardar
</button>
```

---

## 13. Accesibilidad

Los componentes deben considerar accesibilidad.

Ejemplos:

* focus visible
* contraste adecuado
* soporte ARIA cuando aplique

Ejemplo:

```css
.w4-button:focus-visible {
  outline: 2px solid hsl(var(--w4-primary));
}
```

---

## 14. Integración con W4-UI-Framework

Los componentes visuales deben mapear correctamente a los resolvers del framework.

Ejemplo:

```text
ButtonComponent
     ↓
ButtonThemeResolver
     ↓
w4-button w4-button-primary w4-button-lg
```

---

## 15. Componentes v0.1.0 del sistema

La versión v0.1.0 incluye:

### UI

* Button
* Divider
* Heading
* Icon
* IconButton
* Label
* Link
* Text

### Forms

* Input
* Select
* Textarea
* Checkbox
* Radio
* Toggle
* FieldError
* HelperText

### Layout

* Card
* Container
* Stack
* Grid
* Section
* Panel

### Feedback

* Alert
* Badge
* Toast
* Progress
* Skeleton
* Tooltip

---

## 16. Escalabilidad

Nuevos componentes deben seguir exactamente estas reglas.

Ejemplos futuros:

```text
Modal
Dropdown
Tabs
Navbar
Sidebar
Drawer
```

---

## 17. Accesibilidad y Manejo de Estados (ARIA + data-hooks)

El sistema ya implementa un motor JavaScript (`w4-native.js`) que garantiza la accesibilidad y reactividad:

* Los componentes reciben estados a través del atributo `data-w4-state` (inyectado por los Enums de W4-UI-Framework).
* El motor JS sincroniza automáticamente atributos ARIA por estado (`aria-disabled`, `aria-invalid`, `aria-busy`, `aria-pressed`, `aria-hidden`).
* Generación de atributos `data-w4-component` y `data-w4-hook`.
* Emisión de eventos personalizados JS (`w4:hook`) para integraciones con frameworks frontend.

Todos los nuevos componentes deben registrarse en `w4-native.js` (`COMPONENT_SELECTORS`, `COMPONENT_CLASS_MAP`, `COMPONENT_STATES`) para asegurar esta funcionalidad.

---

## 18. Conclusión

Las guías de componentes aseguran que todo el sistema UI de W4-Native-UI sea:

* consistente
* escalable
* mantenible

Seguir estas reglas es obligatorio para cualquier nuevo componente del sistema.
