# ADR-017 — W4-Native-UI como Visual Theme Engine independiente de DaisyUI

## Estado

Propuesto

---

## 1. Contexto

W4-Native-UI nació inicialmente tomando inspiración fuerte de DaisyUI y aprovechando gran parte de sus conceptos visuales, presets y ergonomía de uso. Este enfoque permitió acelerar la fase inicial del sistema visual, validar la integración con W4-UI-Framework y construir una primera base de componentes.

Sin embargo, la evolución natural del ecosistema W4 introduce una necesidad que rebasa claramente el alcance práctico de DaisyUI:

* W4-UI-Framework debe soportar más de 150 componentes.
* Una parte importante de esos componentes no existen en DaisyUI.
* Muchos componentes futuros serán empresariales o avanzados, por ejemplo:

  * DataGrid
  * TreeView
  * Kanban Board
  * Query Builder
  * Advanced Select
  * Multi-step Wizard
  * JSON Editor
  * Timeline avanzada
  * filtros complejos
  * paneles operativos y administrativos

Esto crea una limitante estructural si W4-Native-UI continúa dependiendo conceptualmente de DaisyUI como eje principal del sistema visual.

Además, el nuevo objetivo del ecosistema no es únicamente cambiar colores por tema, sino permitir que el **theme influya en la forma y personalidad visual de los componentes**.

Ejemplos deseados:

* En temas oscuros, botones e inputs pueden volverse cuadrados o más rígidos.
* En temas cálidos o pastel, botones e inputs pueden volverse ovalados o más suaves.
* En temas corporativos, los componentes pueden adoptar radios medianos, bordes discretos y menor elevación.
* En temas retro o expresivos, pueden intensificarse bordes, contraste y personalidad de superficie.

Esto implica que el theme ya no debe entenderse solo como un preset cromático, sino como un **sistema visual completo**.

---

## 2. Problema arquitectónico

Si el proyecto mantiene a DaisyUI como base principal del lenguaje visual:

* la evolución del sistema queda parcialmente subordinada al catálogo de DaisyUI
* los componentes exclusivos de W4 quedan en una zona híbrida difícil de estandarizar
* la morfología visual del componente depende de decisiones externas
* el contrato entre W4-UI-Framework y W4-Native-UI pierde estabilidad a largo plazo
* el crecimiento hacia un sistema de 150+ componentes aumenta el costo de adaptación

En otras palabras, DaisyUI puede seguir siendo una referencia, pero ya no debe ser la autoridad del sistema visual.

---

## 3. Decisión

Se decide evolucionar **W4-Native-UI** hacia un **Visual Theme Engine propio**, independiente de DaisyUI como base arquitectónica principal.

DaisyUI podrá seguir utilizándose como:

* referencia de ergonomía
* inspiración para presets
* inspiración de naming o experiencia visual
* punto de comparación para testing de consistencia visual

Pero no como dependencia conceptual del sistema.

A partir de esta decisión:

1. **W4-Native-UI definirá su propio contrato visual.**
2. **Los themes controlarán no solo colores, sino también forma, superficie e interacción.**
3. **Todos los componentes, incluidos los exclusivos de W4, deberán depender de tokens W4.**
4. **TailwindCSS será utilizado como infraestructura técnica, no como design system final.**
5. **El sistema visual se organizará sobre presets compuestos por varias capas de definición.**

---

## 4. Nueva definición del proyecto

A partir de esta ADR, W4-Native-UI se redefine como:

> El motor visual nativo de W4-UI-Framework, basado en TailwindCSS, design tokens, presets visuales y reglas morfológicas por theme, capaz de renderizar componentes estándar y componentes empresariales avanzados sin depender del catálogo de DaisyUI.

---

## 5. Principios derivados

### 5.1 Tailwind como infraestructura, no como identidad visual

Tailwind se utilizará para:

* layout
* grid/flex
* spacing utilitario
* responsive behavior
* composición rápida
* utilidades auxiliares
* `@apply` cuando sea conveniente

Pero la identidad visual oficial del sistema será responsabilidad de W4-Native-UI.

---

### 5.2 Los componentes deben depender de tokens, no de estilos hardcodeados

Ningún componente oficial debe depender de:

* colores hex hardcodeados
* radios hardcodeados
* sombras hardcodeadas
* estilos visuales acoplados a un preset específico

Todo debe depender de variables `--w4-*`.

---

### 5.3 El theme controla la gramática visual del sistema

Cada theme debe poder definir:

* color
* contraste
* forma
* superficie
* interacción
* elevación
* personalidad visual

Esto permite que el mismo componente adopte una presencia distinta sin cambiar su API lógica.

---

### 5.4 La semántica del componente permanece estable

El HTML semántico y el contrato PHP no deben cambiar por theme.

Ejemplo:

```html
<button class="w4-button w4-button-primary w4-button-md">Guardar</button>
<input class="w4-input w4-input-default w4-input-md" />
```

El cambio visual debe venir desde el theme y los tokens, no desde cambios de markup.

---

### 5.5 Los componentes exclusivos de W4 son ciudadanos de primera clase

Componentes como DataGrid, TreeView, Kanban o QueryBuilder deben recibir exactamente el mismo trato arquitectónico que Button o Input:

* mismo sistema de tokens
* mismo contrato de theme
* mismas reglas de morphología
* misma integración con estados

---

## 6. Consecuencias positivas

### Control total del sistema visual

W4 define completamente:

* tokens
* presets
* morfología
* personalidad visual
* evolución futura

### Escalabilidad real para 150+ componentes

El sistema ya no depende del catálogo de un tercero.

### Consistencia transversal

Todos los componentes del ecosistema pueden compartir una gramática visual común.

### Soporte real para themes expresivos

Un theme puede modificar:

* color
* forma
* bordes
* elevación
* comportamiento visual

### Mejor integración con W4-UI-Framework

El contrato entre la lógica PHP y la capa visual se vuelve más estable.

---

## 7. Costos y consecuencias negativas

### Mayor responsabilidad interna

El equipo W4 deberá mantener:

* tokens
* presets
* reglas visuales
* documentación
* compatibilidad entre componentes

### Mayor esfuerzo inicial de diseño sistémico

Ya no basta con adaptar estilos existentes; será necesario definir gramática visual propia.

### Necesidad de disciplina fuerte en CSS y contratos

El crecimiento del sistema requiere reglas estrictas para no fragmentar el diseño.

---

## 8. Alternativas consideradas

### A. Continuar con DaisyUI como base principal

Ventajas:

* rapidez inicial
* menor esfuerzo de diseño
* buen catálogo de presets

Desventajas:

* catálogo insuficiente
* dependencia conceptual externa
* poca soberanía arquitectónica

### B. Mantener DaisyUI solo para componentes simples y crear sistema aparte para avanzados

Ventajas:

* transición más fácil

Desventajas:

* doble lenguaje visual
* inconsistencias crecientes
* mantenimiento complejo

### C. Migrar a un Visual Theme Engine propio

Ventajas:

* máxima extensibilidad
* control total
* coherencia de largo plazo

Desventajas:

* mayor esfuerzo inicial

Se elige la opción C.

---

## 9. Conclusión

W4-Native-UI deja de plantearse como una adaptación visual basada en DaisyUI y pasa a concebirse como un **motor visual nativo del ecosistema W4**.

Con ello, el proyecto podrá sostener:

* más de 150 componentes
* themes expresivos
* branding multi-tenant
* consistencia entre paquetes
* evolución independiente y controlada

---

# MODELO DE THEMES — W4 Visual Theme Engine

## 1. Objetivo

Definir un modelo de themes que no solo cambie colores, sino que controle la gramática visual completa del sistema.

Un theme en W4-Native-UI debe ser una composición de capas visuales.

---

## 2. Definición conceptual

```text
Theme = Color System + Surface System + Morphology System + Interaction System
```

Cada theme es una combinación coherente de estas dimensiones.

---

## 3. Capas del theme

## 3.1 Color System

Responsable de:

* color principal
* secundarios
* acento
* estados semánticos
* fondos base
* color de contenido
* contraste general

Ejemplos de tokens:

```text
--w4-primary
--w4-primary-content
--w4-secondary
--w4-accent
--w4-success
--w4-warning
--w4-error
--w4-base-100
--w4-base-200
--w4-base-300
--w4-base-content
```

---

## 3.2 Surface System

Responsable de la apariencia de superficies y contenedores.

Controla:

* opacidad
* borde
* elevación
* profundidad
* tratamiento de fondos
* estilo solid / soft / muted / outline / glass

Ejemplos de tokens:

```text
--w4-surface-card-bg
--w4-surface-panel-bg
--w4-surface-control-bg
--w4-surface-border-color
--w4-surface-border-width
--w4-surface-shadow-sm
--w4-surface-shadow-md
--w4-surface-shadow-lg
```

---

## 3.3 Morphology System

Responsable de la forma física y lenguaje geométrico del sistema.

Controla:

* radios
* dureza o suavidad de esquinas
* proporciones de controles
* densidad visual
* sensación sharp / soft / rounded / pill / organic

Ejemplos de tokens:

```text
--w4-radius-button
--w4-radius-input
--w4-radius-card
--w4-radius-panel
--w4-control-height-xs
--w4-control-height-sm
--w4-control-height-md
--w4-control-height-lg
--w4-control-height-xl
```

---

## 3.4 Interaction System

Responsable de cómo reacciona visualmente el sistema.

Controla:

* hover
* active
* focus
* disabled
* loading
* pressed
* selected

Ejemplos de tokens:

```text
--w4-focus-ring-width
--w4-focus-ring-color
--w4-focus-ring-offset
--w4-hover-brightness
--w4-hover-translate-y
--w4-active-scale
--w4-disabled-opacity
--w4-loading-opacity
```

---

## 4. Perfil visual del theme

Además de tokens, cada theme puede expresar un perfil visual de alto nivel.

Ejemplos de perfiles:

* `sharp`
* `soft`
* `rounded`
* `pill`
* `organic`
* `corporate`
* `minimal`

Estos perfiles no reemplazan tokens, pero ayudan a organizar presets y reglas internas.

---

## 5. Composición de theme

Un theme puede implementarse como preset compuesto.

Ejemplo conceptual:

```php
return [
    'id' => 'w4.dark.sharp',
    'label' => 'Dark Sharp',

    'profiles' => [
        'color' => 'dark',
        'surface' => 'solid',
        'morphology' => 'sharp',
        'interaction' => 'hard-ring',
    ],

    'tokens' => [
        '--w4-primary' => '217 91% 60%',
        '--w4-base-100' => '222 47% 11%',
        '--w4-radius-button' => '0.25rem',
        '--w4-radius-input' => '0.25rem',
        '--w4-focus-ring-width' => '2px',
    ],
];
```

---

## 6. Reglas morfológicas por tema

El sistema debe permitir que el theme modifique cómo se perciben los componentes en estado normal.

### Ejemplo: Theme oscuro

* Button → esquinas cuadradas
* Input → esquinas cuadradas
* Card → radio medio bajo
* Panel → borde más definido
* Focus → ring técnico y duro

### Ejemplo: Theme pastel

* Button → forma ovalada
* Input → forma ovalada
* Card → radio alto
* Surface → fondo suave
* Focus → glow ligero y amigable

Esto no cambia la API del componente, solo sus tokens activos.

---

## 7. Regla de consistencia

La morfología debe ser sistémica, no arbitraria.

No se recomienda definir manualmente excepciones aisladas por componente si pueden resolverse mediante tokens compartidos.

Ejemplo correcto:

* todos los controles (`button`, `input`, `select`, `textarea`, `toggle`) comparten una misma familia morfológica base por theme

Ejemplo incorrecto:

* `button` cuadrado, `input` ovalado, `select` orgánico sin una razón sistémica

---

## 8. Convención de nombres sugerida

### Presets de alto nivel

```text
w4.dark
w4.pastel
w4.corporate
w4.night
w4.retro
```

### Presets compuestos opcionales

```text
w4.dark.sharp
w4.dark.soft
w4.pastel.pill
w4.corporate.balanced
```

La decisión de usar uno o dos niveles de naming puede definirse en una ADR posterior.

---

## 9. Comportamiento esperado

El HTML del componente debe permanecer estable:

```html
<button class="w4-button w4-button-primary w4-button-md">Guardar</button>
<input class="w4-input w4-input-default w4-input-md" />
```

Y el theme activo debe modificar automáticamente:

* color
* forma
* borde
* sombra
* foco
* profundidad

---

## 10. Conclusión

El modelo de themes de W4 debe evolucionar de un simple sistema de presets cromáticos hacia un **motor visual compuesto**, donde cada theme define una gramática visual completa para todo el ecosistema.

---

# ESTRUCTURA DE TOKENS MORFOLÓGICOS

## 1. Objetivo

Definir la familia de tokens responsable de la forma, densidad y lenguaje geométrico de los componentes.

Estos tokens permiten que un mismo componente adopte personalidad diferente según el theme.

---

## 2. Principios

1. La morfología debe depender de tokens, no de reglas hardcodeadas por componente.
2. Los componentes equivalentes deben compartir familias de tokens.
3. Los tokens morfológicos deben convivir con color tokens y surface tokens.
4. La API PHP del componente no debe cambiar por morfología.

---

## 3. Grupos principales de tokens morfológicos

## 3.1 Radius Tokens

Definen redondez general del sistema.

```css
--w4-radius-xs
--w4-radius-sm
--w4-radius-md
--w4-radius-lg
--w4-radius-xl
--w4-radius-2xl
--w4-radius-pill
```

### Component tokens derivados

```css
--w4-radius-button
--w4-radius-input
--w4-radius-select
--w4-radius-textarea
--w4-radius-card
--w4-radius-panel
--w4-radius-modal
--w4-radius-dropdown
--w4-radius-badge
--w4-radius-avatar
```

---

## 3.2 Control Height Tokens

Definen altura base de controles interactivos.

```css
--w4-control-height-xs
--w4-control-height-sm
--w4-control-height-md
--w4-control-height-lg
--w4-control-height-xl
```

Aplican a:

* button
* input
* select
* toggle
* radio wrappers
* checkbox wrappers

---

## 3.3 Control Padding Tokens

```css
--w4-control-padding-x-xs
--w4-control-padding-x-sm
--w4-control-padding-x-md
--w4-control-padding-x-lg
--w4-control-padding-x-xl

--w4-control-padding-y-xs
--w4-control-padding-y-sm
--w4-control-padding-y-md
--w4-control-padding-y-lg
--w4-control-padding-y-xl
```

### Tokens derivados por componente

```css
--w4-button-padding-x
--w4-button-padding-y
--w4-input-padding-x
--w4-input-padding-y
--w4-select-padding-x
--w4-textarea-padding-y
```

---

## 3.4 Border Tokens

Definen espesor y lenguaje de borde.

```css
--w4-border-width-thin
--w4-border-width-base
--w4-border-width-strong

--w4-border-width-control
--w4-border-width-card
--w4-border-width-panel
--w4-border-width-modal
```

### Tokens de contraste de borde

```css
--w4-border-contrast-soft
--w4-border-contrast-base
--w4-border-contrast-strong
```

---

## 3.5 Shadow / Elevation Tokens

Definen profundidad visual.

```css
--w4-shadow-xs
--w4-shadow-sm
--w4-shadow-md
--w4-shadow-lg
--w4-shadow-xl
```

### Derivados

```css
--w4-shadow-control
--w4-shadow-card
--w4-shadow-panel
--w4-shadow-modal
--w4-shadow-dropdown
--w4-shadow-tooltip
```

---

## 3.6 Density Tokens

Definen qué tan compacta o aireada se percibe la UI.

```css
--w4-density-compact-gap
--w4-density-normal-gap
--w4-density-comfortable-gap

--w4-density-control-inline-gap
--w4-density-card-padding
--w4-density-panel-padding
--w4-density-section-gap
```

---

## 3.7 Focus Tokens

Definen la firma visual del foco.

```css
--w4-focus-ring-width
--w4-focus-ring-offset
--w4-focus-ring-color
--w4-focus-ring-opacity
--w4-focus-outline-style
```

Esto permite perfiles como:

* focus duro
* focus suave
* glow
* outline contrastado

---

## 3.8 Motion / Interaction Tokens

```css
--w4-transition-fast
--w4-transition-normal
--w4-transition-slow

--w4-hover-brightness
--w4-hover-translate-y
--w4-hover-shadow-boost
--w4-active-scale
--w4-active-translate-y
--w4-disabled-opacity
--w4-loading-opacity
```

---

## 3.9 Shape Profile Tokens opcionales

Si se desea una capa más semántica, se pueden definir tokens orientados a perfiles.

```css
--w4-shape-family
--w4-shape-controls
--w4-shape-surfaces
--w4-shape-overlays
```

Valores conceptuales posibles:

```text
sharp
soft
rounded
pill
organic
corporate
```

Estos valores pueden servir como metadata interna del theme y no necesariamente como variables CSS operativas.

---

## 4. Ejemplos de aplicación

## 4.1 Theme dark sharp

```css
[data-theme="w4.dark"] {
  --w4-radius-button: 0.25rem;
  --w4-radius-input: 0.25rem;
  --w4-radius-card: 0.5rem;
  --w4-border-width-control: 1px;
  --w4-focus-ring-width: 2px;
  --w4-active-scale: 0.98;
}
```

## 4.2 Theme pastel pill

```css
[data-theme="w4.pastel"] {
  --w4-radius-button: 999px;
  --w4-radius-input: 999px;
  --w4-radius-card: 1.25rem;
  --w4-shadow-card: 0 10px 24px rgba(0,0,0,.08);
  --w4-focus-ring-width: 3px;
  --w4-focus-ring-opacity: .35;
}
```

---

## 5. Relación con componentes

Los componentes deben consumir estos tokens sin conocer el theme.

Ejemplo Button:

```css
.w4-button {
  border-radius: var(--w4-radius-button);
  min-height: var(--w4-control-height-md);
  padding: var(--w4-button-padding-y) var(--w4-button-padding-x);
  border-width: var(--w4-border-width-control);
  box-shadow: var(--w4-shadow-control);
  transition: all var(--w4-transition-fast);
}
```

Ejemplo Input:

```css
.w4-input {
  border-radius: var(--w4-radius-input);
  min-height: var(--w4-control-height-md);
  padding: var(--w4-input-padding-y) var(--w4-input-padding-x);
  border-width: var(--w4-border-width-control);
}
```

---

## 6. Recomendación de estructura técnica

Se recomienda separar tokens por archivos o capas:

```text
resources/css/tokens/
├─ core.tokens.css
├─ color.tokens.css
├─ surface.tokens.css
├─ morphology.tokens.css
├─ interaction.tokens.css
└─ component.tokens.css
```

Y que cada preset sobrescriba únicamente lo necesario.

---

## 7. Conclusión

Los tokens morfológicos son la base para que W4-Native-UI pueda ofrecer themes realmente expresivos.

Sin esta capa, el theme solo cambia color.
Con esta capa, el theme cambia también la forma, densidad, profundidad e identidad visual del sistema.

---

# CIERRE

Este documento establece la base conceptual para la siguiente etapa de W4-Native-UI:

* independencia visual respecto a DaisyUI
* themes compuestos
* morfología por theme
* escalabilidad real para 150+ componentes
* coherencia profunda con W4-UI-Framework

Siguiente documento recomendado:

**ARCHITECTURE EXTENSION — Visual Theme Engine Runtime & Resolver Flow**
