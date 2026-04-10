# W4-Native-UI: Roadmap

---

## 1. Introducción

Este documento define el **plan de evolución del proyecto W4-Native-UI**.

El objetivo del roadmap es:

* mantener crecimiento ordenado del sistema UI
* evitar expansión descontrolada de componentes
* priorizar estabilidad antes de complejidad
* permitir evolución gradual del ecosistema W4

Las versiones están organizadas por **capacidad funcional del sistema UI**.

---

## 2. Principios del roadmap

El desarrollo del sistema seguirá estos principios:

### 1️⃣ estabilidad antes que cantidad

Primero se desarrollan componentes esenciales bien diseñados.

### 2️⃣ compatibilidad con W4-UI-Framework

Cada versión debe integrarse correctamente con el sistema de componentes PHP.

### 3️⃣ escalabilidad del sistema visual

Los componentes deben diseñarse para soportar:

* themes
* presets
* multi-tenant
* extensibilidad

### 4️⃣ modularidad

Nuevos componentes deben poder agregarse sin romper el sistema existente.

---

## 3. Versiones del proyecto

El desarrollo del sistema está dividido en varias etapas.

---

### v0.1.0 — Core UI System

Primera versión funcional del sistema visual.

Objetivo principal:

> establecer la base del sistema UI y la integración real con resolvers por componente.

Estado actual:

> completado y estabilizado con mapeo `state -> class -> js hook` en componentes principales.

Incluye:

#### Design Tokens

* colores
* radios
* sombras
* tipografía base

#### Sistema de themes

* soporte `data-theme`
* presets iniciales
* resolución por componente vía `NativeTheme`

#### Presets incluidos

```text
native.default
native.dark
native.corporate
native.soft
native.night
```

#### Componentes implementados en v0.1.0

UI:

* Button
* Divider
* Heading
* Icon
* IconButton
* Label
* Link
* Text

Forms:

* Input
* Select
* Textarea
* Checkbox
* Radio
* Toggle
* FieldError
* HelperText

Layout:

* Card
* Container
* Stack
* Grid
* Section
* Panel

Feedback:

* Alert
* Badge
* Toast
* Progress
* Skeleton
* Tooltip

#### Entregables

```text
resources/css/w4-theme.css
resources/css/w4-components.css
resources/css/presets/*
dist/w4-native.css
dist/w4-native.js
```

#### Funcionalidades base completadas (v0.1.x)

* Motor de Javascript `w4-native.js` integrado.
* Normalización de atributos ARIA por componente mediante `data-w4-state` y MutationObserver.
* Sincronización de Enums PHP del framework con clases CSS de forma reactiva.
* Consolidación de `data-w4-*` hooks como contrato público de la capa JS nativa.

---

### v0.2 — Layout System

Segunda etapa del sistema UI.

Objetivo:

> permitir construir layouts completos.

Componentes nuevos:

Layout:

* Container
* Stack
* Grid
* Section
* Panel

Navegación básica:

* Navbar
* Breadcrumb
* Pagination

Utilidades visuales:

* Divider avanzado
* Avatar

---

### v0.3 — Interactive Components

Objetivo:

> soportar interfaces dinámicas modernas.

Componentes:

* Modal
* Dropdown
* Tabs
* Accordion
* Drawer
* Tooltip

Componentes de overlay:

* Popover
* Context Menu

---

### v0.4 — Form System avanzado

Mejoras al sistema de formularios.

Componentes nuevos:

* DatePicker
* TimePicker
* File Input
* Range Slider
* Switch avanzado

Componentes compuestos:

* InputGroup
* Fieldset
* FormSection

---

### v0.5 — Data Components

Objetivo:

> soportar visualización de datos.

Componentes:

* Table
* DataList
* Timeline
* Progress
* Skeleton Loader

Integración futura con:

```text
W4-PowerTable
```

---

### v1.0 — Stable UI System

Primera versión estable del sistema.

Incluye:

* sistema de componentes completo
* themes estables
* documentación completa
* compatibilidad total con W4-UI-Framework

También incluye:

#### Theme Builder

Herramienta para generar presets.

#### Tokens exportables

Compatibilidad con herramientas de diseño.

---

### v1.5 — Ecosystem Integration

Expansión del sistema UI dentro del ecosistema W4.

Integraciones directas con:

```text
W4-UI-Framework
W4-PowerTable
W4-DynamicFormBuilder
W4-FileUploadManager
```

Esto permite que todos los paquetes compartan el mismo sistema visual.

---

### v2.0 — Advanced UI System

Versión avanzada del sistema.

Incluye:

#### Sistema de animaciones

* transitions
* motion tokens

#### Temas dinámicos avanzados

* auto dark mode
* preferencias de usuario

#### Soporte para design systems externos

* importación de tokens

#### Generador visual de componentes

Herramienta para crear nuevos componentes UI.

---

## 4. Componentes planeados

Lista completa de componentes del sistema.

---

### Form

```text
Button
Input
Select
Textarea
Checkbox
Radio
Toggle
DatePicker
TimePicker
Range
FileInput
```

---

### Layout

```text
Container
Stack
Grid
Section
Panel
Card
Divider
```

---

### Navigation

```text
Navbar
Breadcrumb
Pagination
Tabs
Dropdown
Drawer
```

---

### Feedback

```text
Alert
Badge
Toast
Progress
Skeleton
Tooltip
```

---

### Overlay

```text
Modal
Popover
ContextMenu
```

---

### Data

```text
Table
DataList
Timeline
Stat
Chart (future)
```

---

## 5. Futuro del proyecto

El sistema W4-Native-UI evolucionará hacia un **design system completo** que pueda ser utilizado por:

* aplicaciones Laravel
* sistemas SaaS
* plataformas multi-tenant
* productos del ecosistema W4

El objetivo final es que W4-Native-UI se convierta en:

> un sistema visual modular, escalable y controlado completamente por el ecosistema W4.

---

## 6. Conclusión

El roadmap establece una evolución clara para el sistema UI.

Esto permite:

* desarrollo organizado
* crecimiento sostenible
* integración progresiva con el ecosistema W4
* estabilidad para aplicaciones en producción.
