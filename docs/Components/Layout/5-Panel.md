# Panel (W4-Native-UI)

## 1. Propósito

`Panel` es un componente de contención que funciona de manera similar a `Card` pero está pensado para subsecciones o contenedores con menor prominencia visual, usualmente utilizado para enmarcar contenido secundario, alertas informativas o bloques de datos anidados.

## 2. Capacidad funcional

El componente soporta:

- variantes visuales (`elevated`)
- tamaños de relleno interno (`xs|sm|md|lg|xl`)

## 3. Clases base

- `w4-panel`
- `w4-panel-{variant}`
- `w4-panel-{size}`

## 4. Variantes soportadas

Al igual que las tarjetas, puede aumentar su prominencia con la variante de sombra:

- `elevated`: Incrementa la sombra del contenedor a `md`.

Ejemplo:

```html
<div class="w4-panel w4-panel-elevated">
  Contenido destacado del panel
</div>
```

## 5. Tamaños soportados

El tamaño modifica el `padding` interno del contenedor, sin necesidad de un subcomponente extra (como ocurre en `Card` con `w4-card-body`):

- `xs` (padding de 0.5rem)
- `sm` (padding de 0.75rem)
- `md` (padding de 1rem - Default)
- `lg` (padding de 1.25rem)
- `xl` (padding de 1.5rem)

Ejemplo:

```html
<div class="w4-panel w4-panel-sm">
  Contenido compacto
</div>
```

## 6. Comportamiento en pantalla

- `w4-panel` por defecto incluye un borde muy sutil (`--w4-base-300`), y el fondo base de nivel 2 (`--w4-base-200`).
- Hereda el mismo borde redondeado que las tarjetas (`--w4-radius-card`).

## 7. Buenas prácticas

- Utilizar `w4-panel` para enmarcar información secundaria sin recargar visualmente el diseño general, como notas, fragmentos de código, detalles extra o metadatos.
- Si se necesita una jerarquía de primer nivel que pueda contener a su vez un header y un footer, utilizar `Card` en su lugar.