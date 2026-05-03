# EXTENSIÓN DEL MODELO DE COMPONENTES — Contrato Visual, Consumo de Morfología y Componentes Conscientes del Tema

## 1. Propósito

Este documento extiende la arquitectura de componentes del ecosistema W4 definiendo cómo los componentes visuales interactúan con:

- W4-UI-Framework
- Motor de Resolución de Temas (Theme Resolver Engine)
- W4-Native-UI
- Tokens de Diseño (Design Tokens)
- Presets de Morfología

El objetivo es estandarizar el **Contrato Visual** entre la lógica del componente (PHP) y la capa visual (CSS + tiempo de ejecución).

Esto garantiza que:

- los componentes sigan siendo independientes del framework
- los temas puedan transformar la apariencia de la UI dinámicamente
- la morfología pueda variar entre temas
- los sistemas visuales escalen a más de 150 componentes

---

# 2. Contrato Visual

El **Contrato Visual** define la interfaz estable entre la abstracción del componente y el motor visual.

Un componente debe exponer las siguientes dimensiones visuales:

- nombre del componente
- variante (variant)
- tamaño (size)
- estado (state)
- atributos

Ejemplo conceptual del objeto de estado:

```json
{
  "component": "button",
  "variant": "primary",
  "size": "lg",
  "states": ["loading"]
}
```

Este objeto es transformado por el Theme Resolver en clases CSS.

---

# 3. Pipeline de Resolución Visual

El renderizado de componentes sigue este pipeline:

```text
Componente (PHP)
        ↓
ComponentFactory
        ↓
RuntimeRenderer
        ↓
ThemeResolverPipeline
        ↓
ComponentThemeResolver
        ↓
Clases CSS de W4-Native
        ↓
Tokens
        ↓
HTML Renderizado
```

El componente **nunca conoce la implementación CSS**.

---

# 4. Dimensiones Visuales de un Componente

Todo componente debe soportar cuatro dimensiones visuales.

## 4.1 Variante (Variant)

Las variantes representan el propósito semántico del componente.

Ejemplos:

```text
primary
secondary
accent
neutral
outline
ghost
```

Salida de ejemplo:

```css
w4-button-primary
```

---

## 4.2 Tamaño (Size)

Todo componente debe soportar la escala estándar:

```text
xs
sm
md
lg
xl
```

Ejemplo:

```css
w4-button-lg
```

---

## 4.3 Estado (State)

Los estados representan condiciones de interacción en tiempo de ejecución (runtime).

Ejemplos:

```text
disabled
loading
invalid
readonly
active
```

Estos se inyectan como:

```html
data-w4-state="loading"
```

El JS en runtime los traduce a:

```html
class="w4-button-loading" aria-busy="true"
```

---

## 4.4 Morfología

La morfología define el **lenguaje de formas** de la interfaz.

A diferencia de las variantes, la morfología está **controlada por el tema**, no por el componente.

Ejemplos:

```text
rounded
sharp
pill
soft
```

Estos modifican tokens como:

```css
--w4-radius-button
--w4-radius-input
```

Ejemplo:

Tema oscuro (Dark):

```css
--w4-radius-button: 4px;
```

Tema pastel:

```css
--w4-radius-button: 999px;
```

---

# 5. Sistema de Morfología

La morfología se implementa a través de **grupos de tokens**.

Ejemplo de grupos de tokens:

```css
--w4-radius-button
--w4-radius-input
--w4-radius-card
```

Los temas redefinen estos valores.

Ejemplo:

```css
[data-theme="native.dark"] {
  --w4-radius-button: 4px;
}
```

```css
[data-theme="native.pastel"] {
  --w4-radius-button: 999px;
}
```

Esto cambia la forma de toda la UI sin modificar los componentes.

---

# 6. Componentes Conscientes del Tema (Theme-Aware Components)

Los componentes deben estar diseñados para reaccionar a los tokens del tema.

Ejemplo de CSS de un botón:

```css
.w4-button {
  border-radius: var(--w4-radius-button);
  background: hsl(var(--w4-primary));
}
```

El componente se vuelve automáticamente consciente del tema.

---

# 7. Consumo de Tokens en Componentes

Los componentes consumen tokens desde tres niveles.

```text
Tokens Core
        ↓
Tokens Semánticos
        ↓
Tokens de Componente
```

Ejemplo para Botón (Button):

```css
--w4-primary
--w4-radius-button
--w4-shadow-sm
```

---

# 8. Ejemplo: Modelo del Componente Botón

Definición del componente:

```php
Button::make('Guardar')
    ->variant('primary')
    ->size('lg');
```

Salida del Resolver:

```text
w4-button
w4-button-primary
w4-button-lg
```

HTML Renderizado:

```html
<button class="w4-button w4-button-primary w4-button-lg">Guardar</button>
```

Implementación CSS:

```css
.w4-button {
  border-radius: var(--w4-radius-button);
  padding: var(--w4-button-padding);
}
```

---

# 9. Componentes Avanzados

Los componentes complejos siguen el mismo contrato.

Ejemplo de DataGrid:

Clases:

```css
w4-datagrid
w4-datagrid-striped
w4-datagrid-compact
```

Sub-zonas:

```css
w4-datagrid-header
w4-datagrid-body
w4-datagrid-row
```

Estas aún consumen tokens.

---

# 10. Conciencia del Tema a Escala

Todos los componentes deben reaccionar automáticamente a:

- cambios de tema
- cambios de preset
- sobrescritura de tokens

Ejemplo de cambio de tema en runtime:

```html
<html data-theme="native.dark"></html>
```

El HTML permanece idéntico.

Solo cambian los tokens.

---

# 11. Control de Tema Multi-Tenant (Multi-Inquilino)

El sistema soporta tematización a nivel de tenant.

Flujo conceptual de ejemplo:

```php
tenant()->theme = "native.corporate";
```

Actualizaciones en la aplicación:

```html
data-theme="native.corporate"
```

Todos los componentes se actualizan automáticamente.

---

# 12. Reglas de Estabilidad Visual

Para mantener la consistencia en todo el ecosistema:

1. Los componentes no deben tener valores hardcodeados (fijos).
2. Los componentes deben consumir tokens.
3. La morfología debe ser controlada por el tema.
4. Las variantes deben ser semánticas.
5. Los tamaños deben seguir la escala estándar.

---

# 13. Arquitectura Resultante

La arquitectura final se convierte en:

```text
Lógica del Componente (PHP)
        ↓
Contrato Visual
        ↓
Theme Resolver
        ↓
W4-Native-UI
        ↓
Tokens
        ↓
CSS
        ↓
HTML
```

---

# 14. Beneficios

Este modelo proporciona:

- flexibilidad total de temas
- cambio de tema en tiempo de ejecución (runtime)
- morfología consistente
- biblioteca de componentes escalable
- compatibilidad con más de 150 componentes

---

# 15. Extensiones Futuras

Las mejoras futuras pueden incluir:

- tokens visuales de morfología
- tokens de movimiento (motion tokens)
- tokens de elevación (elevation tokens)
- composición de temas
- constructor visual de temas (visual theme builder)

---

# 16. Conclusión

El **Contrato Visual** asegura que los componentes permanezcan estables mientras los temas controlan el lenguaje visual de la interfaz.

Esta separación permite que el ecosistema W4 evolucione hacia un sistema de diseño completamente escalable capaz de soportar aplicaciones complejas y plataformas SaaS.

---

# 17. Contrato Operativo de Morfología para Presets

Esta sección define un contrato práctico para estandarizar todos los archivos de `resources/css/presets`.

## 17.1 Nivel Mínimo (obligatorio en cada preset)

Cada tema debe declarar como mínimo:

```css
--w4-radius-button
--w4-radius-input
--w4-radius-card
--w4-radius-badge
```

Estos cuatro tokens son los que hoy más impactan los componentes UI (`button`, `iconbutton`, `forms`, `layout`).

## 17.2 Nivel Extendido (recomendado para homogeneidad total)

Para una morfología completamente consistente entre dominios, cada preset debería incluir además:

```css
--w4-radius-panel
--w4-radius-select
--w4-radius-alert
--w4-radius-progress
--w4-radius-skeleton
--w4-radius-toast
--w4-radius-checkbox
--w4-radius-radio
--w4-radius-toggle
--w4-radius-modal
--w4-radius-menu
--w4-radius-dropdown
```

## 17.3 Densidad Global (opcional avanzado)

Solo si el preset busca una identidad de densidad propia (compacta, comfy, spacious):

```css
--w4-control-height-xs
--w4-control-height-sm
--w4-control-height-md
--w4-control-height-lg
--w4-control-height-xl

--w4-control-padding-x-xs
--w4-control-padding-x-sm
--w4-control-padding-x-md
--w4-control-padding-x-lg
--w4-control-padding-x-xl

--w4-button-padding-x
--w4-input-padding-x
```

## 17.4 Estado Actual del Proyecto

Resumen del análisis actual:

1. Todos los presets ya cumplen el **Nivel Mínimo**.
2. Solo algunos presets sobrescriben `--w4-radius-checkbox`.
3. Ningún preset sobrescribe hoy el bloque extendido completo (`panel`, `select`, `modal`, `menu`, etc.).
4. Ningún preset redefine aún densidad global (`control-height` y `control-padding`).

## 17.5 Plan de Adopción Recomendado

Fase 1 (segura y rápida):

1. Mantener los 4 tokens mínimos actuales por tema.
2. Agregar explícitamente el bloque extendido con valores heredados de la personalidad del tema.

Fase 2 (curación visual):

1. Revisar contraste y forma en `forms`, `navigation`, `feedback`, `interactive`.
2. Ajustar `checkbox/radio/toggle/menu/dropdown/modal` por tema.

Fase 3 (densidad):

1. Definir 2 o 3 perfiles de densidad base (compacto, estándar, amplio).
2. Aplicarlos solo a presets que realmente lo requieran.

## 17.6 Checklist de Validación por Preset

Antes de cerrar un tema:

1. Botón e IconButton respetan `radius + size`.
2. Input/Select/Checkbox/Radio/Toggle respetan radios de forms.
3. Card/Panel/Modal/Dropdown/Menu respetan radios del dominio.
4. No hay valores hardcodeados cuando existe token equivalente.
5. El cambio de `data-theme` no rompe consistencia morfológica.
