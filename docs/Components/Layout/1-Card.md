# Card (W4-Native-UI)

## 1. Propósito

`Card` proporciona un contenedor visual agrupado para información estructurada, destacando visualmente el contenido del fondo base mediante el uso de bordes, sombras y padding.

## 2. Capacidad funcional

El componente soporta:

- variantes visuales (`elevated|bordered`)
- tamaños de relleno (`xs|sm|md|lg|xl`)
- subcomponente nativo (`w4-card-body`) para control de padding

## 3. Clases base

- `w4-card`
- `w4-card-body`
- `w4-card-{variant}`
- `w4-card-{size}`

## 4. Variantes soportadas

- `elevated`: Incrementa la sombra del contenedor a `md`.
- `bordered`: Aumenta el grosor del borde a `2px`.

Ejemplo:

```html
<div class="w4-card w4-card-elevated">
  <div class="w4-card-body">Contenido</div>
</div>
```

## 5. Tamaños soportados

La escala de tamaños altera el `padding` interno del subcomponente `w4-card-body`:

- `xs` (padding de 0.75rem)
- `sm` (padding de 1rem)
- `md` (padding de 2rem - Default)
- `lg` (padding de 2.5rem)
- `xl` (padding de 3rem)

Ejemplo:

```html
<div class="w4-card w4-card-sm">
  <div class="w4-card-body">
    Contenido más compacto
  </div>
</div>
```

## 6. Integración y Renderizado

Al ser un componente de Layout puramente estructural, no requiere inyección de estados interactivos ARIA o hooks complejos a menos que contenga interactividad propia, pero puede conectarse a `data-w4-component="card"` para seguimiento en DOM.

## 7. Buenas prácticas

- Utilizar siempre `w4-card-body` como contenedor directo de los hijos para asegurar la consistencia del padding (tamaño).
- Reservar `elevated` para tarjetas que requieren resaltar sobre otras (ej. hover, drag-and-drop o modal interno).
- Respetar los tokens nativos del sistema para que el color base del contenedor (`--w4-base-200`) funcione con el theme activo.
