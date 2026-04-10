# Grid (W4-Native-UI)

## 1. Propósito

`Grid` es un componente de layout que alinea elementos en una cuadrícula CSS (Grid Layout), permitiendo organizar componentes hijos de manera bidimensional y controlar fácilmente el espacio (`gap`) entre ellos.

## 2. Capacidad funcional

El componente soporta:

- control de columnas (ej. `2` o `3` columnas iguales).
- control del espacio entre elementos (`gap`) mediante su escala completa de tamaños (`xs|sm|md|lg|xl`).

## 3. Clases base

- `w4-grid`
- `w4-grid-{columns}`
- `w4-grid-{size}`

## 4. Variantes soportadas

Al ser un componente estructural, no utiliza colores semánticos (primary, secondary, etc.). Se apoya en clases accesorias para modificar su comportamiento de cuadrícula.

Las variantes de columnas disponibles son:

- `2` → `w4-grid-2` (2 columnas iguales usando `minmax(0, 1fr)`)
- `3` → `w4-grid-3` (3 columnas iguales usando `minmax(0, 1fr)`)

Ejemplo de cuadrícula de 2 columnas:

```html
<div class="w4-grid w4-grid-2">
  <div>Elemento 1</div>
  <div>Elemento 2</div>
</div>
```

## 5. Tamaños soportados

El tamaño delimita el espacio (`gap`) entre los elementos de la cuadrícula:

- `xs` (0.5rem de espacio)
- `sm` (0.75rem de espacio)
- `md` (1rem de espacio - Default)
- `lg` (1.5rem de espacio)
- `xl` (2rem de espacio)

Ejemplo con espacio reducido:

```html
<div class="w4-grid w4-grid-3 w4-grid-xs">
  <div>Col 1</div>
  <div>Col 2</div>
  <div>Col 3</div>
</div>
```

## 6. Buenas prácticas

- Utilizar `w4-grid` para organizar elementos que deben compartir el mismo ancho relativo en la misma fila (como tarjetas de productos, estadísticas, etc.).
- Para alinear elementos unidireccionalmente (solo vertical o solo horizontal), considerar el uso de `Stack`.

- La cuadrícula tiene una distribución automática equitativa (`1fr`); no usar cuando se necesiten columnas de anchos personalizados (en esos casos, usar las utilidades de Tailwind si están disponibles o CSS nativo).