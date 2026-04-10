# Badge (W4-Native-UI)

## 1. Propósito

`Badge` se utiliza para destacar estados, contadores o pequeñas etiquetas de información asociadas a otro elemento (por ejemplo, notificaciones no leídas, estatus de un pedido, o etiquetas de categoría).

## 2. Capacidad funcional

El componente soporta:

- variantes visuales semánticas (`primary|secondary|accent`)
- escala de tamaños (`xs|sm|md|lg|xl`) para ajustar su altura y tamaño de texto.

## 3. Clases base

- `w4-badge`
- `w4-badge-{variant}`
- `w4-badge-{size}`

## 4. Variantes soportadas

Las variantes definen el color de fondo y de texto apoyándose en los tokens del theme:

```text
primary
secondary
accent
```

Ejemplo:

```html
<span class="w4-badge w4-badge-primary">
  Nuevo
</span>
```

## 5. Tamaños soportados

El tamaño modifica la altura, el `padding` horizontal y el tamaño de la fuente (`font-size`):

- `xs` (altura 0.875rem, ideal para contadores muy pequeños).
- `sm` (altura 1rem).
- `md` (altura 1.25rem - Default).
- `lg` (altura 1.5rem).
- `xl` (altura 1.75rem).

Ejemplo con tamaño pequeño en un avatar o botón:
```html
<span class="w4-badge w4-badge-accent w4-badge-xs">
  99+
</span>
```

## 6. Comportamiento en pantalla

- `w4-badge` utiliza `display: inline-flex;` y centra automáticamente su contenido (`align-items: center; justify-content: center;`).
- Tiene bordes redondeados tipo píldora, por defecto `1.9rem` o mapeados desde `--w4-radius-badge`.
- Cuenta con un texto resaltado por defecto (`font-weight: 600`).

## 7. Buenas prácticas

- Utilizar la variante `accent` para llamadas de atención fuertes (como notificaciones pendientes).
- No usar badges para textos largos; su uso debe restringirse a 1-3 palabras cortas o números.
- Los badges no son interactivos (no usar como botones); si se requiere interacción, utilizar el componente `Button` en su variante `xs` o `ghost`.