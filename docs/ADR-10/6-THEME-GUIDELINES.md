# W4-Native-UI: Guías de themes

---

## 1. Introducción

Este documento define las **reglas oficiales para la creación y manejo de themes en W4-Native-UI**.

Los themes permiten modificar completamente la apariencia visual del sistema sin alterar:

* los componentes
* la lógica del framework
* el código de la aplicación

El sistema de themes está basado en **design tokens y variables CSS**, lo que permite cambiar estilos **dinámicamente en runtime**.

---

## 2. Filosofía del sistema de themes

El sistema de themes sigue cuatro principios fundamentales.

### 2.1 Tokens sobre valores directos

Todos los estilos deben depender de **design tokens**, no de valores directos.

Ejemplo correcto:

```css
background: hsl(var(--w4-primary));
```

Ejemplo incorrecto:

```css
background: #3b82f6;
```

---

### 2.2 Separación de tokens y componentes

Los componentes no deben definir colores o radios directamente.

Los valores visuales deben provenir de tokens.

```text
Component → usa tokens
Theme → define tokens
```

---

### 2.3 Cambio dinámico de theme

Los themes se cambian dinámicamente mediante el atributo:

```html
data-theme
```

Ejemplo:

```html
<html data-theme="native.dark">
```

Esto cambia el estilo completo de la aplicación.

---

### 2.4 Compatibilidad con multi-tenant

El sistema debe permitir que diferentes tenants utilicen distintos themes.

Ejemplo conceptual:

```text
Tenant A → native.default
Tenant B → native.dark
Tenant C → native.corporate
```

---

## 3. Arquitectura del sistema de themes

El sistema está compuesto por tres elementos principales.

```text
Design Tokens
      ↓
Theme Preset
      ↓
Component Styles
```

---

## 4. Design Tokens

Los **design tokens** representan valores reutilizables de diseño.

Ejemplos:

```text
color.primary
color.secondary
color.accent
color.base
color.base-content

radius.button
radius.input
radius.card

shadow.sm
shadow.md

spacing.button
spacing.input
```

Estos tokens se implementan mediante **variables CSS**.

---

## 5. Tokens CSS

Los tokens se definen como variables CSS.

Ejemplo:

```css
:root {
  --w4-primary: 222 89% 55%;
  --w4-primary-content: 0 0% 100%;
  
  --w4-secondary: 262 83% 58%;
  
  --w4-radius-button: 0.75rem;
  
  --w4-shadow-sm: 0 1px 2px rgba(0,0,0,0.05);
}
```

Los componentes utilizan estas variables.

---

## 6. Theme Presets

Los **presets** son configuraciones completas de tokens.

Cada preset redefine los tokens para cambiar el estilo visual.

Ejemplo:

```css
[data-theme="native.default"] {
  --w4-primary: 222 89% 55%;
}
```

```css
[data-theme="native.dark"] {
  --w4-primary: 217 91% 60%;
  --w4-base-100: 222 47% 11%;
}
```

---

## 7. Presets incluidos

La primera versión del sistema incluye los siguientes presets.

```text
native.default
native.dark
native.corporate
native.soft
native.night
```

Cada preset representa un estilo visual diferente.

---

## 8. Estructura de presets

Los presets se organizan en:

```text
resources/css/presets
│
├─ default.css
├─ dark.css
├─ corporate.css
├─ soft.css
└─ night.css
```

Cada archivo sobrescribe tokens base.

---

## 9. Tokens obligatorios

Todos los presets deben definir los siguientes tokens mínimos.

### Colores

```text
--w4-primary
--w4-primary-content

--w4-secondary
--w4-secondary-content

--w4-accent
--w4-accent-content

--w4-base-100
--w4-base-200
--w4-base-300

--w4-base-content
```

---

### Radios

```text
--w4-radius-button
--w4-radius-input
--w4-radius-card
```

---

### Sombras

```text
--w4-shadow-sm
--w4-shadow-md
--w4-shadow-lg
```

---

## 10. Creación de un nuevo preset

Para crear un nuevo preset se debe:

1. crear un archivo CSS
2. definir el atributo `data-theme`
3. sobrescribir tokens

Ejemplo:

```css
[data-theme="native.minimal"] {
  --w4-primary: 210 40% 50%;
  --w4-base-100: 255 255 255;
}
```

---

## 11. Sobrescritura de tokens

Las aplicaciones pueden sobrescribir tokens directamente.

Ejemplo:

```css
:root {
  --w4-primary: 10 80% 50%;
}
```

Esto permite personalización avanzada.

---

## 12. Themes por tenant

Las aplicaciones SaaS pueden asignar themes por tenant.

Ejemplo conceptual:

```php
tenant()->theme = 'native.dark';
```

El sistema puede cambiar el atributo:

```html
<html data-theme="native.dark">
```

---

## 13. Compatibilidad con Tailwind

W4-Native-UI permite combinar tokens con utilidades Tailwind.

Ejemplo:

```html
<button class="w4-btn w4-btn-primary mt-4">
```

Esto mantiene flexibilidad sin romper consistencia visual.

---

## 14. Convenciones de nombres

Los nombres de themes siguen la convención:

```text
native.{preset}
```

Ejemplo:

```text
native.default
native.dark
native.corporate
```

Esto permite distinguirlos de otros sistemas de themes.

---

## 15. Escalabilidad del sistema de themes

El sistema permite agregar fácilmente nuevos presets.

Ejemplos futuros:

```text
native.dracula
native.cyberpunk
native.minimal
native.glass
```

---

## 16. Integración con W4-UI-Framework

El framework utilizará el theme activo para resolver estilos.

Ejemplo conceptual:

```text
ButtonComponent
      ↓
ButtonThemeResolver
      ↓
w4-btn w4-btn-primary w4-btn-lg
      ↓
Theme tokens
      ↓
Render final
```

---

## 17. Buenas prácticas

Para mantener consistencia en el sistema:

### Siempre usar tokens

Nunca usar valores directos.

### Mantener contraste adecuado

Especialmente en themes oscuros.

### Evitar sobrescribir estilos de componentes

Los cambios deben realizarse mediante tokens.

---

## 18. Futuro del sistema de themes

En versiones futuras se podrá incluir:

* Theme Builder visual
* generador de presets
* exportación de design tokens
* integración con herramientas de diseño

---

## 19. Conclusión

El sistema de themes de W4-Native-UI permite:

* personalización completa
* cambio dinámico de apariencia
* soporte multi-theme
* soporte multi-tenant

Esto convierte a W4-Native-UI en una solución flexible y moderna para interfaces de aplicaciones Laravel.
