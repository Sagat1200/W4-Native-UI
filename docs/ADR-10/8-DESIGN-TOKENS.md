# W4-Native-UI: Design Tokens

---

## 1. Introducción

Este documento define el **sistema oficial de Design Tokens de W4-Native-UI**.

Los design tokens representan los **valores fundamentales del sistema visual**, permitiendo construir una interfaz consistente y fácilmente personalizable.

El objetivo de los tokens es:

* centralizar valores visuales
* permitir themes dinámicos
* soportar multi-tenant
* facilitar mantenimiento del sistema UI

Todos los componentes del sistema deben depender de **tokens**, no de valores directos.

---

## 2. Qué son los Design Tokens

Los **Design Tokens** son variables reutilizables que representan decisiones de diseño.

Ejemplos:

```text
color.primary
color.secondary
radius.button
shadow.md
spacing.sm
font.size.md
```

En W4-Native-UI los tokens se implementan mediante **variables CSS**.

---

## 3. Arquitectura de tokens

El sistema de tokens se organiza en tres niveles.

```text
Core Tokens
      ↓
Semantic Tokens
      ↓
Component Tokens
```

---

## 4. Core Tokens

Los **core tokens** representan valores básicos del sistema.

Ejemplos:

* escalas de colores
* radios
* sombras
* spacing
* tipografía

Estos tokens normalmente **no cambian entre themes**.

---

## 5. Semantic Tokens

Los **semantic tokens** representan significado visual.

Ejemplos:

```text
primary
secondary
accent
success
warning
error
```

Estos tokens **sí cambian entre themes**.

---

## 6. Component Tokens

Los **component tokens** son valores específicos de componentes.

Ejemplo:

```text
button.radius
input.padding
card.shadow
```

Estos tokens dependen de los semantic tokens.

---

## 7. Implementación en CSS

Los tokens se implementan mediante **variables CSS**.

Ejemplo base:

```css
:root {

  --w4-primary: 222 89% 55%;
  --w4-primary-content: 0 0% 100%;

  --w4-secondary: 262 83% 58%;
  --w4-secondary-content: 0 0% 100%;

}
```

Los valores se expresan en **HSL** para facilitar manipulación.

---

## 8. Tokens de color

El sistema utiliza un conjunto estándar de colores.

### Tokens principales

```css
--w4-primary
--w4-primary-content

--w4-secondary
--w4-secondary-content

--w4-accent
--w4-accent-content

--w4-neutral
--w4-neutral-content
```

---

### Tokens de estado

```css
--w4-success
--w4-success-content

--w4-warning
--w4-warning-content

--w4-error
--w4-error-content

--w4-info
--w4-info-content
```

---

### Tokens de base

Estos tokens definen el fondo del sistema.

```css
--w4-base-100
--w4-base-200
--w4-base-300

--w4-base-content
```

---

## 9. Tokens de radio (border radius)

Estos tokens controlan la redondez de los elementos.

```css
--w4-radius-xs
--w4-radius-sm
--w4-radius-md
--w4-radius-lg
--w4-radius-xl
```

Component tokens derivados:

```css
--w4-radius-button
--w4-radius-input
--w4-radius-card
```

---

## 10. Tokens de sombra

Sombras utilizadas en el sistema.

```css
--w4-shadow-xs
--w4-shadow-sm
--w4-shadow-md
--w4-shadow-lg
--w4-shadow-xl
```

Ejemplo:

```css
--w4-shadow-sm: 0 1px 2px rgba(0,0,0,0.05);
--w4-shadow-md: 0 4px 6px rgba(0,0,0,0.1);
```

---

## 11. Tokens de spacing

Escala de espaciado.

```css
--w4-space-xs
--w4-space-sm
--w4-space-md
--w4-space-lg
--w4-space-xl
```

Valores sugeridos:

```text
xs = 0.25rem
sm = 0.5rem
md = 1rem
lg = 1.5rem
xl = 2rem
```

---

## 12. Tokens de tipografía

### Familias de fuente

```css
--w4-font-sans
--w4-font-mono
```

Ejemplo:

```css
--w4-font-sans: ui-sans-serif, system-ui;
--w4-font-mono: ui-monospace, monospace;
```

---

### Tamaños de fuente

```css
--w4-text-xs
--w4-text-sm
--w4-text-md
--w4-text-lg
--w4-text-xl
--w4-text-2xl
```

---

## 13. Tokens de transición

Animaciones básicas.

```css
--w4-transition-fast
--w4-transition-normal
--w4-transition-slow
```

Ejemplo:

```css
--w4-transition-fast: 150ms;
--w4-transition-normal: 250ms;
--w4-transition-slow: 400ms;
```

---

## 14. Tokens de z-index

Control de capas.

```css
--w4-z-dropdown
--w4-z-modal
--w4-z-popover
--w4-z-tooltip
```

---

## 15. Tokens de componente

Componentes pueden tener tokens propios.

Ejemplo:

### Button

```css
--w4-button-padding-x
--w4-button-padding-y
```

### Input

```css
--w4-input-padding-x
--w4-input-padding-y
```

### Card

```css
--w4-card-padding
```

---

## 16. Uso de tokens en componentes

Ejemplo de botón:

```css
.w4-btn {

  border-radius: var(--w4-radius-button);

  padding:
    var(--w4-button-padding-y)
    var(--w4-button-padding-x);

  transition: all var(--w4-transition-fast);
}
```

---

## 17. Tokens y themes

Los themes modifican los valores de los tokens.

Ejemplo:

```css
[data-theme="native.dark"] {

  --w4-base-100: 222 47% 11%;
  --w4-base-content: 210 40% 98%;

  --w4-primary: 217 91% 60%;
}
```

Esto cambia toda la interfaz automáticamente.

---

## 18. Personalización por aplicación

Las aplicaciones pueden sobrescribir tokens.

Ejemplo:

```css
:root {

  --w4-primary: 10 90% 50%;

}
```

Esto permite personalizar la marca.

---

## 19. Personalización por tenant

En sistemas SaaS cada tenant puede usar tokens distintos.

Ejemplo conceptual:

```text
Tenant A → theme blue
Tenant B → theme green
Tenant C → theme dark
```

Esto permite **branding por cliente**.

---

## 20. Escalabilidad del sistema

El sistema de tokens permite agregar fácilmente nuevos valores.

Ejemplos futuros:

```text
motion tokens
elevation tokens
blur tokens
gradient tokens
```

---

## 21. Exportación de tokens

En el futuro los tokens podrán exportarse a:

* JSON
* Figma
* Design systems externos

Esto facilita integración con diseño.

---

## 22. Conclusión

Los design tokens son el **fundamento del sistema visual W4-Native-UI**.

Permiten:

* consistencia visual
* themes dinámicos
* multi-tenant branding
* escalabilidad del design system

Todos los componentes deben depender exclusivamente de tokens.
