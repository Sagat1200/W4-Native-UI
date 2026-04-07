# W4 Ecosystem: Rendering Flow

---

## 1. Introducción

Este documento describe **cómo se renderiza un componente dentro del ecosistema W4**, desde la capa PHP hasta el resultado visual final.

El proceso conecta:

* **W4-UI-Framework** (abstracción de componentes)
* **Theme Resolver**
* **W4-Native-UI** (implementación visual)
* **HTML final**

Este flujo permite que el framework UI sea **completamente independiente del sistema visual**.

---

## 2. Objetivo del sistema de renderizado

El objetivo principal es separar claramente:

```text
Component Logic
↓
Theme Resolution
↓
Visual Implementation
```

Esto permite cambiar el sistema visual sin modificar:

* componentes PHP
* lógica de la aplicación
* comportamiento del framework

---

## 3. Flujo completo de renderizado

El flujo de renderizado sigue los siguientes pasos:

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
W4-Native-UI Classes
      ↓
Blade Wrapper
      ↓
Final HTML
```

---

## 4. Paso 1 — Código de la aplicación

El desarrollador utiliza un componente del framework.

Ejemplo:

```php
Button::make('Guardar')
    ->variant('primary')
    ->size('lg')
```

Este componente pertenece a **W4-UI-Framework**.

---

## 5. Paso 2 — Creación del componente

El componente se instancia mediante:

```text
ComponentFactory
```

Responsabilidades:

* crear instancia del componente
* asignar configuración inicial
* aplicar metadata

Ejemplo conceptual:

```php
$button = ComponentFactory::make(ButtonComponent::class);
```

---

## 6. Paso 3 — Runtime Renderer

El componente es enviado al **RuntimeRenderer**.

```text
RuntimeRenderer
```

Responsabilidades:

* recibir el componente
* iniciar pipeline de renderizado
* preparar contexto de theme

Ejemplo conceptual:

```php
RuntimeRenderer::render($component);
```

---

## 7. Paso 4 — Theme Resolver Pipeline

El **ThemeResolverPipeline** determina cómo resolver el componente.

```text
ThemeResolverPipeline
```

Responsabilidades:

* detectar theme activo
* seleccionar resolver adecuado
* transformar estado del componente

Ejemplo conceptual:

```text
ButtonComponent
↓
ButtonThemeResolver
```

---

## 8. Paso 5 — Component Theme Resolver

Cada componente tiene un resolver específico.

Ejemplo:

```text
ButtonThemeResolver
```

Responsabilidades:

* traducir estado del componente
* generar clases CSS

---

### Ejemplo de traducción

Entrada:

```text
variant = primary
size = lg
```

Salida:

```text
w4-button
w4-button-primary
w4-button-lg
```

---

## 9. Paso 6 — Resolución de tokens

Las clases generadas dependen de **design tokens**.

Ejemplo:

```css
.w4-button-primary {
  background: hsl(var(--w4-primary));
}
```

Los tokens dependen del **theme activo**.

---

## 10. Paso 7 — Blade Wrapper

El sistema utiliza un wrapper Blade para renderizar el componente.

Ejemplo:

```blade
<x-w4-render :component="$component" />
```

El wrapper recibe:

* clases generadas
* atributos
* contenido

---

## 11. Paso 8 — Render HTML final

Resultado final:

```html
<button class="w4-button w4-button-primary w4-button-lg">
Guardar
</button>
```

Este HTML es compatible con el sistema CSS de **W4-Native-UI**.

---

## 12. Flujo visual completo

Diagrama simplificado:

```text
Developer
   ↓
Button::make()
   ↓
ComponentFactory
   ↓
RuntimeRenderer
   ↓
ThemeResolverPipeline
   ↓
ButtonThemeResolver
   ↓
W4-Native Classes
   ↓
Blade Wrapper
   ↓
HTML Render
```

---

## 13. Ejemplo completo

Código de aplicación:

```php
Button::make('Guardar')
    ->variant('primary')
    ->size('lg');
```

Resolución interna:

```text
ButtonComponent
variant = primary
size = lg
```

Resolver:

```text
w4-button
w4-button-primary
w4-button-lg
```

Render final:

```html
<button class="w4-button w4-button-primary w4-button-lg">
Guardar
</button>
```

---

## 14. Cambio de theme

Cuando el theme cambia:

```html
<html data-theme="native.dark">
```

Los tokens cambian:

```css
[data-theme="native.dark"] {
  --w4-primary: 217 91% 60%;
}
```

El HTML permanece igual.

---

## 15. Ventajas de esta arquitectura

Este sistema ofrece varias ventajas.

### Desacoplamiento

El framework no depende de DaisyUI, Bootstrap u otras librerías.

### Flexibilidad

Se puede cambiar el sistema visual sin modificar componentes.

### Soporte multi-theme

Themes se aplican dinámicamente.

### Soporte multi-tenant

Cada tenant puede usar su propio theme.

---

## 16. Compatibilidad con diferentes renderers

El sistema puede renderizar componentes mediante:

```text
Blade
Livewire
Inertia
Vue
React
```

El flujo de resolución visual permanece igual.

---

## 17. Extensión del sistema

Los desarrolladores pueden agregar nuevos resolvers.

Ejemplo:

```text
ModalThemeResolver
DropdownThemeResolver
TabsThemeResolver
```

Cada resolver implementa la lógica visual.

---

## 18. Estado v0.1.0

Cobertura actual de v0.1.0:

* resolvers dedicados por componente en `src/Themes/Components/*`
* contrato de estados por componente mediante `stateMap()`
* salida de contrato de integración desde `NativeTheme::resolveComponentContract()`
* mapeo activo `state -> class -> js hook`

Esto ya permite que la capa visual y el core compartan semántica sin acoplarse a frameworks CSS externos.

---

## 19. Próximos pasos: ARIA y data-hooks

Para la próxima iteración del runtime visual se definieron estos pasos:

* mapear estados del core a atributos ARIA (`aria-disabled`, `aria-invalid`, `aria-busy`, `aria-pressed`, etc.)
* publicar `data-w4-component`, `data-w4-state` y `data-w4-hook` por componente
* habilitar que la capa JS nativa use esos hooks sin depender de nombres CSS
* agregar pruebas de integración sobre HTML final para validar ARIA y `data-*`

---

## 20. Futuro del sistema

En versiones futuras el sistema podría incluir:

* renderización optimizada
* caching de clases
* compilación de tokens
* generación automática de resolvers

---

## 21. Conclusión

El flujo de renderizado conecta:

```text
W4-UI-Framework
↓
Theme Resolvers
↓
W4-Native-UI
↓
HTML final
```

Este diseño permite construir un sistema UI completamente desacoplado, escalable y adaptable a diferentes entornos de frontend.
