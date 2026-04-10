# Alert (W4-Native-UI)

## 1. Propósito

`Alert` muestra un mensaje importante o contextual al usuario, destacándose del resto del contenido para indicar confirmaciones, información, advertencias o errores.

## 2. Capacidad funcional

El componente soporta:

- variantes semánticas de estado (`success|info|warning|error`)
- tamaños (`xs|sm|md|lg|xl`) para ajustar el padding y el tamaño de la fuente.

## 3. Clases base

- `w4-alert`
- `w4-alert-{variant}`
- `w4-alert-{size}`

## 4. Variantes soportadas

```text
success
info
warning
error
```

Ejemplo:

```html
<div class="w4-alert w4-alert-success w4-alert-md">
  Operación completada exitosamente.
</div>
```

Las variantes ya definen de forma interna un contraste óptimo entre su fondo suave y su texto oscuro.

## 5. Tamaños soportados

La escala modifica tanto el tamaño de fuente como el padding interno:

- `xs`
- `sm`
- `md` (Default)
- `lg`
- `xl`

## 6. Buenas prácticas

- Usar `w4-alert-error` solo para bloqueos críticos o fallos en el sistema.
- Usar `w4-alert-success` como confirmación tras enviar un formulario o finalizar una acción.
- Para alertas globales o notificaciones efímeras, considerar el uso combinado con el componente `Toast`.
- Las alertas pueden contener texto, pero para una mejor experiencia visual es ideal acompañarlas de un componente `Icon` que coincida con la variante del Alert.