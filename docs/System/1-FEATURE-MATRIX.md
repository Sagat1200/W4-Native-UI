# W4-Native-UI: Feature Matrix

---

## 1. Introducción

Este documento define la **matriz de características del sistema de componentes de W4-Native-UI**.

La matriz permite visualizar rápidamente:

* qué componentes existen
* qué capacidades soportan
* qué funcionalidades están disponibles en cada versión
* qué características faltan por implementar

Esta matriz ayuda a:

* planificar releases
* mantener consistencia entre componentes
* evaluar el estado del framework

---

## 2. Convenciones de la matriz

En la tabla se utilizan los siguientes indicadores:

```text
✓  Soportado
◐  Parcial
✗  No soportado
```

Columnas principales:

| Columna    | Descripción            |
| ---------- | ---------------------- |
| Variants   | Variantes visuales     |
| Sizes      | Soporte para tamaños   |
| States     | Estados visuales       |
| Icons      | Soporte para iconos    |
| Slots      | Soporte para contenido |
| Theme      | Compatible con tokens  |
| Responsive | Soporte responsive     |

---

## 3. Componentes de Ui

| Component | Variants | Sizes | States | Icons | Slots | Theme | Responsive |
| --------- | -------- | ----- | ------ | ----- | ----- | ----- | ---------- |
| Button | ✓ | ✓ | ✓ (ARIA) | ✓ | ✓ | ✓ | ◐ |
| Divider | ✓ | ✗ | ✗ | ✗ | ✓ | ✓ | ◐ |
| Heading | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ✓ | ◐ |
| Icon | ✓ | ✓ | ✓ (ARIA) | ✓ | ✗ | ✓ | ◐ |
| IconButton| ✓ | ✓ | ✓ (ARIA) | ✓ | ✗ | ✓ | ◐ |
| Label | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ✓ | ◐ |
| Link | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ✓ | ◐ |
| Text | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ✓ | ◐ |

---

## 4. Componentes de forms

| Component | Variants | Sizes | States | Slots | Theme | Responsive |
| --------- | -------- | ----- | ------ | ----- | ----- | ---------- |
| Checkbox | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ◐ |
| FieldError| ✓ | ✓ | ✓ (ARIA) | ✓ | ✓ | ◐ |
| HelperText| ✓ | ✓ | ✓ (ARIA) | ✓ | ✓ | ◐ |
| Input | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ◐ |
| Select | ✓ | ✓ | ✓ (ARIA) | ✓ | ✓ | ◐ |
| TextArea | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ◐ |
| Toggle | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ◐ |
| Radio | ✓ | ✓ | ✓ (ARIA) | ✗ | ✓ | ◐ |

---

## 5. Componentes de layout

| Component | Variants | Sizes | States | Slots | Theme | Responsive |
| --------- | -------- | ----- | ------ | ----- | ----- | ---------- |

---

## 5. Componentes de navegación

| Component  | Variants | Sizes | States | Slots | Theme | Responsive |
| ---------- | -------- | ----- | ------ | ----- | ----- | ---------- |

---

## 6. Componentes de feedback

| Component | Variants | Sizes | States | Slots | Theme | Responsive |
| --------- | -------- | ----- | ------ | ----- | ----- | ---------- |

---

## 7. Integración con W4-UI-Framework

Todos los componentes deben poder ser renderizados mediante:

```text
W4 Component
↓
Theme Resolver
↓
W4-Native Classes
↓
HTML
```

Esto garantiza que cada componente sea compatible con:

* Blade
* Livewire
* Inertia
* Vue
* React

---

## 8. Evolución por versión

La matriz también indica qué componentes se incluyen en cada versión.

---

### v0.1

Componentes iniciales de Ui:

```text
Button
Divider
Heading
Icon
IconButton
Label
Link
Text
```

Componentes iniciales de Forms:

```text
Checkbox
FieldError
HelperText
Input
Select
TextArea
Toggle
```

Componentes iniciales de Layout:

```text
Container
Grid
Stack
Card
Panel
Section
```

Componentes iniciales de Navigation:

```text
Navbar
SideBar
Menu
Card
Panel
Section
```

Componentes iniciales de Feedback:

```text
Alert
Badge
Spinner
Loader
```

---

### v0.2

Por definir

## 9. Uso de la matriz

Esta matriz debe actualizarse cuando:

* se agregue un nuevo componente
* se agregue una nueva capacidad
* se publique una nueva versión

Esto mantiene visibilidad clara del estado del sistema UI.

---

## 10. Futuro de la matriz

En versiones futuras la matriz puede expandirse con columnas adicionales:

```text
Accessibility
Animation Support
RTL Support
ARIA Compliance
```

Esto permitirá evaluar la madurez del framework.

---

## 11. Conclusión

La matriz de características permite visualizar el estado completo del sistema UI.

Esto facilita:

* planificación de releases
* control de calidad
* evolución estructurada del framework

W4-Native-UI puede evolucionar de forma ordenada manteniendo consistencia en todos los componentes.
