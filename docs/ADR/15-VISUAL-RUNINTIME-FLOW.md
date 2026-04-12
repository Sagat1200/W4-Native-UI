# W4-Native-UI: Architecture Extension — Visual Theme Engine Runtime & Resolver Flow

---

## 1. Introducción

Este documento extiende la arquitectura base de **W4-Native-UI** para formalizar su evolución como **Visual Theme Engine** independiente de DaisyUI.

El objetivo es definir con precisión cómo interactúan:

* **W4-UI-Framework**
* **Theme Resolver Pipeline**
* **W4-Native-UI**
* **Design Tokens**
* **Theme Presets**
* **Morphology Rules**
* **Native JS Runtime**
* **HTML final renderizado**

Este documento no sustituye la arquitectura general ya existente; la amplía para soportar el nuevo modelo donde el theme controla no solo color, sino también forma, superficie e interacción.

---

## 2. Objetivo arquitectónico

La extensión arquitectónica busca garantizar cinco capacidades principales:

### 2.1 Desacoplamiento total

La lógica PHP del componente no debe conocer:

* CSS específico
* presets concretos
* forma visual final
* decisiones morfológicas del theme

---

### 2.2 Estabilidad del contrato

La API del componente debe mantenerse estable aunque cambie:

* el theme
* la morfología
* el estilo visual global
* la estrategia de superficies

---

### 2.3 Themes expresivos

El sistema debe permitir que un theme modifique:

* color
* radios
* sombras
* bordes
* densidad
* focus
* hover
* personalidad visual

---

### 2.4 Escalabilidad para 150+ componentes

La arquitectura debe soportar tanto:

* componentes básicos (`button`, `input`, `card`)
* componentes complejos (`datagrid`, `treeview`, `kanban`, `query-builder`)

sin cambiar el contrato general del sistema.

---

### 2.5 Consistencia transversal

Todos los componentes deben participar del mismo sistema visual aunque pertenezcan a diferentes dominios del ecosistema W4.

---

## 3. Principio rector

La regla principal de esta arquitectura es:

> **W4-UI-Framework decide qué componente es. W4-Native-UI decide cómo se ve bajo el theme activo.**

Esto implica una separación estricta:

### W4-UI-Framework

Responsable de:

* abstracción PHP del componente
* estado lógico
* metadata
* variant
* size
* atributos HTML
* accesibilidad declarativa inicial
* integración con Blade / Livewire / Inertia

### W4-Native-UI

Responsable de:

* implementación visual semántica
* tokens
* theme presets
* morphology rules
* surface rules
* runtime de hidratación visual
* sincronización ARIA y hooks reactivos en cliente

---

## 4. Flujo arquitectónico extendido

El flujo completo del sistema queda así:

```text
Application Code
    ↓
W4 Component (PHP)
    ↓
ComponentFactory
    ↓
RuntimeRenderer
    ↓
ThemeResolverPipeline
    ↓
ComponentThemeResolver
    ↓
Component Visual Contract
    ↓
Blade Wrapper / Renderer Output
    ↓
Final HTML semántico + data-w4-state
    ↓
W4-Native-UI CSS Tokens + Theme Preset activo
    ↓
W4-Native-UI Native JS Runtime
    ↓
Hydrated HTML final + ARIA + Hooks
```

---

## 5. Etapas del flujo

## 5.1 Etapa 1 — Código de aplicación

El desarrollador declara un componente mediante la API de W4-UI-Framework.

Ejemplo:

```php
Button::make('Guardar')
    ->variant('primary')
    ->size('md')
    ->state(ButtonComponentState::ENABLED);
```

En este nivel todavía no existe conocimiento del theme visual concreto.

---

## 5.2 Etapa 2 — Construcción del componente

`ComponentFactory` crea la instancia del componente y aplica:

* defaults
* metadata
* atributos
* label
* variant
* size
* estado

Aquí el componente sigue siendo una abstracción semántica.

---

## 5.3 Etapa 3 — RuntimeRenderer

El `RuntimeRenderer` toma el componente y prepara el contexto de renderizado.

Responsabilidades:

* invocar el pipeline de resolución
* detectar el theme activo
* preparar el contexto de atributos
* solicitar la traducción visual del componente

---

## 5.4 Etapa 4 — ThemeResolverPipeline

El `ThemeResolverPipeline` decide qué implementación visual se utilizará.

Ejemplo conceptual:

```text
ButtonComponent
    ↓
NativeTheme
    ↓
ButtonThemeResolver
```

Aquí el sistema selecciona el resolver del componente dentro del theme visual activo.

---

## 5.5 Etapa 5 — ComponentThemeResolver

Cada componente tiene un resolver específico.

Ejemplo:

* `ButtonThemeResolver`
* `InputThemeResolver`
* `CardThemeResolver`
* `DataGridThemeResolver`

Su responsabilidad no es pintar estilos finales, sino generar un **contrato visual intermedio y estable**.

---

## 6. Component Visual Contract

La arquitectura extendida introduce formalmente el concepto de:

> **Component Visual Contract**

Este contrato representa la salida estable entre el core PHP y la capa visual nativa.

Debe contener como mínimo:

* nombre del componente
* clases semánticas base
* clases de variant
* clases de size
* estados declarados
* atributos `data-w4-*`
* metadata visual adicional si aplica

Ejemplo conceptual:

```php
[
    'component' => 'button',
    'classes' => [
        'w4-button',
        'w4-button-primary',
        'w4-button-md',
    ],
    'attributes' => [
        'data-w4-component' => 'button',
        'data-w4-state' => 'enabled',
    ],
]
```

Importante:

* el contrato **no debe contener colores hardcodeados**
* el contrato **no debe contener decisiones concretas de morphología**
* el contrato **debe permanecer estable entre themes**

---

## 7. HTML semántico estable

El resultado del resolver debe producir HTML semántico constante.

Ejemplo:

```html
<button
  class="w4-button w4-button-primary w4-button-md"
  data-w4-component="button"
  data-w4-state="enabled"
>
  Guardar
</button>
```

El mismo HTML debe funcionar igual bajo distintos themes:

* `w4.dark`
* `w4.pastel`
* `w4.corporate`
* `w4.night`

Lo único que cambia es el preset activo y sus tokens.

---

## 8. Runtime del theme visual

Una vez renderizado el HTML, el aspecto final depende de dos subsistemas visuales.

### 8.1 CSS Runtime

Responsable de:

* exponer tokens base
* aplicar overrides del preset activo
* resolver color, superficie, forma e interacción
* estilizar las clases semánticas del componente

### 8.2 JS Runtime

Responsable de:

* detectar estados reactivos
* sincronizar `data-w4-hook`
* normalizar atributos ARIA
* emitir eventos para integraciones reactivas
* actualizar componentes cuando cambie el DOM

---

## 9. Resolución del theme activo

El theme activo debe poder determinarse desde una o varias fuentes.

Fuentes posibles:

* configuración global de aplicación
* configuración por usuario
* configuración por tenant
* selección dinámica en runtime
* cambio manual vía `window.W4NativeUI.setTheme()`

Ejemplo HTML:

```html
<html data-theme="w4.dark">
```

El theme activo es la llave principal para activar el preset correcto.

---

## 10. Preset Runtime

Cada preset es una composición de capas.

```text
Preset Runtime
    ├─ Color Tokens
    ├─ Surface Tokens
    ├─ Morphology Tokens
    └─ Interaction Tokens
```

Cuando el atributo `data-theme` cambia, cambia toda la gramática visual activa.

---

## 11. Tokens en runtime

La arquitectura recomienda organizar los tokens en capas.

```text
:root
    ↓
Core Tokens
    ↓
Theme Preset Tokens
    ↓
Component Tokens derivados
    ↓
Rendered Component Styles
```

### 11.1 Core Tokens

Definen escalas generales y defaults del sistema.

Ejemplos:

* radios globales
* spacing base
* tipografía
* sombras base
* tiempos de transición

### 11.2 Theme Preset Tokens

Sobrescriben los valores del sistema según el theme.

Ejemplos:

* `--w4-primary`
* `--w4-base-100`
* `--w4-radius-button`
* `--w4-shadow-card`
* `--w4-focus-ring-width`

### 11.3 Component Tokens derivados

Son valores específicos ya listos para consumo por componente.

Ejemplos:

* `--w4-button-padding-x`
* `--w4-input-padding-y`
* `--w4-card-radius`
* `--w4-panel-shadow`

---

## 12. Morphology Runtime

El sistema morfológico actúa en runtime a través de tokens, no mediante ramificaciones de markup.

Ejemplo:

### Theme dark

```css
[data-theme="w4.dark"] {
  --w4-radius-button: 0.25rem;
  --w4-radius-input: 0.25rem;
  --w4-radius-card: 0.5rem;
}
```

### Theme pastel

```css
[data-theme="w4.pastel"] {
  --w4-radius-button: 999px;
  --w4-radius-input: 999px;
  --w4-radius-card: 1.25rem;
}
```

El HTML no cambia. La percepción visual sí cambia.

---

## 13. Surface Runtime

La capa de superficies controla cómo se perciben fondos, bordes y elevación.

Aspectos típicos:

* solid
* soft
* muted
* outline
* elevated
* glass

Esto permite que un mismo `card` o `panel` adopte personalidades distintas sin cambiar su contrato estructural.

---

## 14. Interaction Runtime

La capa de interacción controla firmas visuales como:

* hover lift
* focus ring
* active scale
* disabled opacity
* loading opacity
* selected treatment

Ejemplo:

```css
.w4-button:focus-visible {
  outline: var(--w4-focus-ring-width) solid hsl(var(--w4-focus-ring-color));
  outline-offset: var(--w4-focus-ring-offset);
}
```

---

## 15. Native JS Runtime

El runtime JS es la capa que conecta estado lógico con comportamiento visual reactivo.

Responsabilidades oficiales:

* detectar componentes en el DOM
* inferir o respetar `data-w4-component`
* leer `data-w4-state`
* generar `data-w4-hook`
* emitir eventos `w4:hook` y `{component}:{state}`
* normalizar atributos ARIA
* sincronizar elementos tras cambios dinámicos en Blade / Livewire / Inertia

---

## 16. data-w4-state como puente oficial

`data-w4-state` es el puente entre el backend y la capa visual reactiva.

Ejemplo:

```html
<input
  class="w4-input w4-input-default w4-input-md"
  data-w4-component="input"
  data-w4-state="readonly invalid"
>
```

El runtime JS debe interpretar este valor para:

* ajustar ARIA
* emitir hooks
* reflejar estados visuales derivados si aplica

---

## 17. Hooks como contrato público de integración

El runtime publica eventos para integraciones de frontend.

Ejemplos:

* `button:loading`
* `input:invalid`
* `toggle:checked`
* `w4:hook`

Esto permite a otros paquetes del ecosistema engancharse sin acoplarse al CSS.

---

## 18. Cambio dinámico de theme

El sistema debe soportar cambio de theme en runtime.

Ejemplo:

```js
window.W4NativeUI.setTheme("w4.pastel");
```

Efectos esperados:

1. actualización de `data-theme` en `documentElement`
2. reactivación de tokens del preset
3. transformación visual inmediata de componentes
4. persistencia opcional a nivel de app o usuario

---

## 19. Flujo de ejemplo completo

## 19.1 Código PHP

```php
Input::make('Correo')
    ->variant('default')
    ->size('md')
    ->state(InputComponentState::INVALID);
```

## 19.2 Contrato visual

```php
[
    'component' => 'input',
    'classes' => [
        'w4-input',
        'w4-input-default',
        'w4-input-md',
    ],
    'attributes' => [
        'data-w4-component' => 'input',
        'data-w4-state' => 'invalid',
    ],
]
```

## 19.3 HTML renderizado

```html
<input
  class="w4-input w4-input-default w4-input-md"
  data-w4-component="input"
  data-w4-state="invalid"
>
```

## 19.4 Bajo `w4.dark`

* input más cuadrado
* borde más técnico
* focus más rígido
* contraste más alto

## 19.5 Bajo `w4.pastel`

* input ovalado
* borde suave
* sombra ligera
* foco amistoso y difuso

La abstracción PHP permanece igual en ambos casos.

---

## 20. Compatibilidad con micro-ajustes

La arquitectura extendida sigue permitiendo micro-ajustes por parte del desarrollador.

Estrategias válidas:

* merge inteligente de clases (`Tailwind Merge`)
* atributos específicos por zona (`header-class`, `body-class`, etc.)
* inline token overrides cuando sea estrictamente necesario

Ejemplo:

```html
<button
  class="w4-button w4-button-primary"
  style="--w4-radius-button: 999px;"
>
  Guardar
</button>
```

Pero estos ajustes son complementarios y no reemplazan el contrato del theme.

---

## 21. Compatibilidad con componentes exclusivos

La arquitectura debe tratar igual a un componente simple y a uno empresarial.

Ejemplo `DataGrid`:

```text
DataGridComponent
    ↓
DataGridThemeResolver
    ↓
Visual Contract
    ↓
HTML semántico
    ↓
Tokens de color + surface + morphology + interaction
    ↓
Resultado final
```

Esto garantiza que `DataGrid` pueda verse tan nativo como `Button` o `Card`.

---

## 22. Estructura técnica recomendada

```text
src/
├─ Themes/
│  ├─ NativeTheme.php
│  ├─ Presets/
│  ├─ Profiles/
│  └─ Components/
│
├─ Support/
│  ├─ ThemeRegistry.php
│  ├─ TokenCompiler.php
│  ├─ ThemeManifest.php
│  ├─ PresetResolver.php
│  └─ VisualContractFactory.php
│
resources/
├─ css/
│  ├─ tokens/
│  │  ├─ core.tokens.css
│  │  ├─ color.tokens.css
│  │  ├─ surface.tokens.css
│  │  ├─ morphology.tokens.css
│  │  ├─ interaction.tokens.css
│  │  └─ component.tokens.css
│  │
│  ├─ components/
│  ├─ presets/
│  └─ runtime/
│
└─ js/
   └─ w4-native-ui.js
```

---

## 23. Recomendación de responsabilidades por clase

### NativeTheme

* exponer el theme base
* registrar componentes
* resolver clases semánticas por componente

### PresetResolver

* seleccionar preset activo
* combinar capas del preset
* exponer tokens finales

### VisualContractFactory

* construir el contrato visual final por componente
* normalizar atributos y clases

### ThemeRegistry

* registrar themes y presets
* permitir extensibilidad del ecosistema

### TokenCompiler

* compilar tokens y generar assets optimizados

---

## 24. Riesgos a evitar

### 24.1 Mezclar lógica PHP con decisiones CSS

El componente PHP no debe decidir si un botón es cuadrado u ovalado.

### 24.2 Resolver morfología mediante clases arbitrarias por componente

La forma debe venir de tokens sistémicos.

### 24.3 Crear presets demasiado ad-hoc

Los themes deben responder a gramáticas visuales coherentes.

### 24.4 Duplicar contratos entre componentes simples y complejos

Debe existir un único patrón de integración visual.

---

## 25. Beneficios de esta extensión

Esta extensión permite:

* independencia total respecto a DaisyUI
* themes realmente expresivos
* coherencia visual entre componentes simples y avanzados
* estabilidad del contrato entre core y visual layer
* soporte real para branding por tenant
* crecimiento ordenado del ecosistema W4

---

## 26. Conclusión

La arquitectura extendida formaliza la siguiente idea central:

> **El componente define intención. El theme define presencia. El runtime conecta ambos mundos.**

Con este modelo, W4-Native-UI puede evolucionar desde una librería visual inspirada en DaisyUI hacia un verdadero **Visual Theme Engine** del ecosistema W4.

---

## 27. Siguiente documento recomendado

El siguiente documento más útil para consolidar esta arquitectura es:

**COMPONENT MODEL EXTENSION — Visual Contract, Morphology Consumption & Theme-Aware Components**

Ese documento debería aterrizar:

* el contrato visual por componente
* cómo consumen tokens los componentes
* cómo mapear variant + size + state sin acoplar CSS
* guía para componentes simples y avanzados
