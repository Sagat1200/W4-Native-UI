# Section (W4-Native-UI)

## 1. Propósito

`Section` es un componente contenedor a nivel de bloque (block-level) que proporciona espaciado vertical estandarizado (padding en el eje Y) entre diferentes áreas de contenido dentro de un `Container` o a nivel global.

## 2. Capacidad funcional

El componente soporta:

- control de espaciado vertical (padding-block) mediante su escala completa de tamaños (`xs|sm|md|lg|xl`).

## 3. Clases base

- `w4-section`
- `w4-section-{size}`

## 4. Variantes soportadas

Al ser un componente de espaciado estructural, no utiliza colores semánticos (primary, secondary, etc.) ni variantes de contorno. Funciona como separador y agrupador semántico de nivel superior.

## 5. Tamaños soportados

El tamaño modifica el `padding-block` (margen interno vertical superior e inferior) de la sección:

- `xs` (padding de 0.5rem)
- `sm` (padding de 0.75rem)
- `md` (padding de 1rem - Default)
- `lg` (padding de 1.5rem)
- `xl` (padding de 2rem)

Ejemplo con espaciado amplio:

```html
<section class="w4-section w4-section-xl">
  <div class="w4-container">
    Contenido con gran respiro vertical
  </div>
</section>
```

Ejemplo con espaciado reducido (por ejemplo para bloques adyacentes estrechos):

```html
<section class="w4-section w4-section-sm">
  Bloque denso
</section>
```

## 6. Comportamiento en pantalla

- `w4-section` fuerza un `display: block;`.
- No afecta el padding ni el margin en el eje horizontal, confiando en el `w4-container` (o sus componentes internos) para centrar y restringir el contenido a lo ancho.

## 7. Buenas prácticas

- Utilizar la etiqueta `<section>` semántica de HTML para renderizar este componente si el contenido agrupa temas independientes.
- Combinarlo siempre con un `Container` en su interior si el diseño no debe abarcar el 100% de la pantalla horizontalmente.
- Ideal para definir franjas o bandas de color alternado a lo largo de toda la pantalla (ej. `bg-base-200`) aplicando la clase utility a la misma `<section>`.