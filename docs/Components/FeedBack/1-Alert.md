# Alert (W4-Native-UI)

## 1. Propósito

`Alert` muestra un mensaje importante o contextual al usuario, destacándose del resto del contenido para indicar confirmaciones, información, advertencias o errores.

## 2. Capacidad funcional

El componente soporta:

- variantes semánticas de estado (`primary|secondary|accent|success|info|warning|error`)
- variantes estilísticas (`solid|outline`)
- tamaños (`xs|sm|md|lg|xl`) para ajustar el padding y el tamaño de la fuente.
- estados de componente (`enabled|disabled|active|hidden|dismissed`) alineados con el backend.

## 3. Clases base

- `w4-alert`
- `w4-alert-{variant}`
- `w4-alert-{style}`
- `w4-alert-{size}`
- `w4-alert-{state}`

## 4. Variantes soportadas

### Semánticas (Color System)

```text
primary
secondary
accent
success
info
warning
error
```

### Estilísticas (Surface System)

```text
solid
outline
```

Ejemplo básico:

```html
<div class="w4-alert w4-alert-success w4-alert-md">
  Operación completada exitosamente.
</div>
```

Ejemplo estilizado (Solid):

```html
<div class="w4-alert w4-alert-error w4-alert-solid w4-alert-lg">
  Error crítico del sistema.
</div>
```

Las variantes base ya definen de forma interna un contraste óptimo entre su fondo suave y su texto coloreado. La variante `solid` invierte el color de fondo con el del texto para mayor impacto, y `outline` elimina el fondo dejando solo el borde.

## 5. Tamaños soportados

La escala modifica tanto el tamaño de fuente como el padding interno:

- `xs`
- `sm`
- `md` (Default)
- `lg`
- `xl`

## 6. Estados soportados (AlertComponentState)

El componente está completamente sincronizado con la enumeración `AlertComponentState` de PHP. Puedes aplicar los estados tanto usando clases (`.w4-alert-hidden`) como el atributo nativo (`data-w4-state="hidden"`):

- `enabled` (Por defecto): Visible e interactivo.
- `disabled`: Opacidad reducida al 50%, escala de grises y desactiva interacciones internas (`pointer-events: none`).
- `active`: Aplica un ligero escalado (`scale(1.01)`), sombra (`var(--w4-shadow-md)`) y eleva el `z-index` para destacarlo sobre el resto.
- `hidden`: Oculta el componente visualmente (`display: none !important`).
- `dismissed`: Comportamiento idéntico a `hidden` (`display: none !important`), utilizado semánticamente cuando el usuario cierra la alerta.

Ejemplo de uso dinámico de estados:

```html
<!-- Alerta deshabilitada y en escala de grises -->
<div class="w4-alert w4-alert-warning" data-w4-state="disabled">
  Atención: Función temporalmente no disponible.
</div>

<!-- Alerta destacada activa -->
<div class="w4-alert w4-alert-info w4-alert-active">
  Nueva actualización de software lista para instalar.
</div>
```

## 7. Renderizado desde W4-UI-Framework (Core)

El componente puede ser renderizado dinámicamente desde el backend usando las clases proporcionadas por el framework, lo que garantiza la correcta inyección de las clases de DaisyUI/Native y los estados.

### Renderizado con Blade Component

Puedes usar el componente de Blade directamente en tus vistas:

```blade
<x-w4-alert variant="success" size="lg">
    Operación completada con éxito.
</x-w4-alert>

<!-- Con icono y estado activo -->
<x-w4-alert variant="warning" state="active">
    <x-w4-icon name="exclamation-triangle" class="w-6 h-6 shrink-0" />
    <span>Por favor, verifica tu conexión a internet.</span>
</x-w4-alert>
```

### Renderizado Fluent / Builder (PHP)

También puedes construir la alerta desde tus controladores o Livewire usando la API fluida del framework:

```php
use W4\UI\Framework\Components\FeedBack\Alert\AlertComponent;
use W4\UI\Framework\Components\FeedBack\Alert\AlertComponentState;

echo AlertComponent::make('Los datos han sido guardados.')
    ->success() // Define la variante semántica
    ->lg()      // Define el tamaño
    ->solid()   // Aplica la variante estilística solid
    ->state(AlertComponentState::ACTIVE)
    ->render();
```

## 8. Buenas prácticas

- Usar `w4-alert-error` solo para bloqueos críticos o fallos en el sistema.
- Usar `w4-alert-success` como confirmación tras enviar un formulario o finalizar una acción.
- Para alertas globales o notificaciones efímeras, considerar el uso combinado con el componente `Toast`.
- Las alertas pueden contener texto, pero para una mejor experiencia visual es ideal acompañarlas de un componente `Icon` que coincida con la variante del Alert.
- En modales o ventanas con alto "Z-Index", usar la variante `solid` puede ayudar a destacar más la alerta frente al contenido de fondo.
