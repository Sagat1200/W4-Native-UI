# Container (W4-Native-UI)

## 1. Propósito

`Container` es el componente de Layout primario que centra y delimita el ancho máximo del contenido dentro del documento, respetando un margen interior (padding) de seguridad en dispositivos pequeños.

## 2. Capacidad funcional

El componente soporta:

- restricciones máximas de ancho a través de su escala completa de tamaños (`xs|sm|md|lg|xl`)
- uso responsivo adaptando su `inline-size` automáticamente al `100%` con un tope predefinido.

## 3. Clases base

- `w4-container`
- `w4-container-{size}`

## 4. Variantes soportadas

Al ser un componente de contención estructural, no cuenta con variantes visuales de estilo como "outline" o "ghost". Usa los colores de fondo base (`--w4-base-200`) del theme activo.

## 5. Tamaños soportados

El tamaño delimita el `max-inline-size` (ancho máximo) que alcanzará el contenedor:

- `xs` (max: 420px)
- `sm` (max: 640px)
- `md` (max: 840px)
- `lg` (max: 1080px)
- `xl` (max: 1280px)

Ejemplo de uso base (default 1200px):

```html
<div class="w4-container">
  Contenido centrado con padding horizontal
</div>
```

Ejemplo con tamaño pequeño (ideal para formularios de login o textos cortos):

```html
<div class="w4-container w4-container-sm">
  Contenido de lectura óptima o login form
</div>
```

## 6. Comportamiento en pantalla

- Automáticamente establece `margin-inline: auto` para centrar.
- Define `padding-inline: 1rem` para que en móviles el texto no toque los bordes del dispositivo.

## 7. Buenas prácticas

- Usar `w4-container` como el primer envoltorio después del `body` o `header` de la página.
- Elegir la escala adecuada para el contenido: `xs` o `sm` para formularios sencillos, `lg` o `xl` para dashboards o tablas de datos complejos.
- No anidar contenedores. Si se requiere agrupar contenido dentro de un `Container`, usar `Section`, `Card`, o `Panel`.
