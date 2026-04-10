# Stack (W4-Native-UI)

## 1. Propósito

`Stack` organiza elementos hijos a lo largo de un solo eje (vertical u horizontal) utilizando CSS Flexbox, simplificando el control del espacio (`gap`) entre los elementos y su dirección.

## 2. Capacidad funcional

El componente soporta:

- control de la dirección del flujo (`vertical|horizontal`).
- control del espacio entre elementos (`gap`) mediante su escala completa de tamaños (`xs|sm|md|lg|xl`).

## 3. Clases base

- `w4-stack`
- `w4-stack-{orientation}`
- `w4-stack-{size}`

## 4. Variantes soportadas

Las variantes en el `Stack` definen la orientación del flujo de los elementos. Por defecto, un `w4-stack` asume la orientación vertical (`flex-direction: column;`).

Las variantes de orientación disponibles son:

- `horizontal` → `w4-stack-horizontal` (cambia el flujo a `flex-direction: row;`)
- Vertical es el comportamiento por defecto y no requiere clase extra, pero si el resolver lo emite, simplemente aplica el flujo `column`.

Ejemplo de flujo horizontal:

```html
<div class="w4-stack w4-stack-horizontal">
  <button>Botón 1</button>
  <button>Botón 2</button>
</div>
```

## 5. Tamaños soportados

El tamaño determina el espacio (`gap`) entre los elementos apilados:

- `xs` (0.375rem de espacio)
- `sm` (0.625rem de espacio)
- `md` (1rem de espacio - Default)
- `lg` (1.5rem de espacio)
- `xl` (2rem de espacio)

Ejemplo con apilamiento vertical y espacio reducido:

```html
<div class="w4-stack w4-stack-sm">
  <p>Párrafo 1</p>
  <p>Párrafo 2</p>
</div>
```

## 6. Comportamiento en pantalla

- `w4-stack` inicializa un contenedor `display: flex;` con dirección de columna.
- Los elementos hijos no heredan anchos fijos y dependerán de la alineación y justificación nativa de Flexbox.

## 7. Buenas prácticas

- Utilizar `w4-stack` siempre que se requiera listar un conjunto de elementos consecutivos de la misma categoría (ej. botones de acción, una lista de inputs, etc.).
- Para alineaciones de diseño más complejas o bidimensionales, usar `Grid`.
- El espacio `gap` es consistente y elimina la necesidad de gestionar los márgenes individuales (`margin-top`, `margin-bottom`) de los hijos, lo cual es altamente recomendado para mantener la limpieza del CSS.