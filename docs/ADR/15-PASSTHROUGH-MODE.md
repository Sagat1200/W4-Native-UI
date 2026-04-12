# Modo Passthrough: Flexibilidad y Mantenimiento de Componentes

Para evitar que el ecosistema `W4-Native-Daisy` se convierta en un cuello de botella de mantenimiento frente a las constantes actualizaciones de la biblioteca base (DaisyUI), la arquitectura de resolución de temas ha evolucionado hacia un modelo más flexible conocido como **Modo Passthrough**.

## El Problema Original (Validación Estricta)

Anteriormente, el archivo `AbstractComponentTheme.php` verificaba estrictamente cada variante y tamaño contra arreglos codificados (hardcoded) en cada clase de tema (ej. `ButtonTheme.php`).

Si DaisyUI introducía una nueva utilidad (ej. un botón `glass` o un badge `xs2`), y un desarrollador de W4 intentaba usarlo:

```php
<x-w4-button variant="glass" />
```

El `ThemeResolver` lo **bloqueaba** y lo descartaba porque `"glass"` no estaba registrado en el método `variants()` del paquete PHP. Esto obligaba a publicar una nueva versión (Release) del paquete W4-Native-Daisy por cada pequeña actualización visual de DaisyUI.

## La Solución: Modo Passthrough (Trust the Developer)

Se han modificado las reglas de resolución en `AbstractComponentTheme.php`. Ahora, si el desarrollador envía un variante o un tamaño, el sistema simplemente lo concatena con el prefijo del componente y lo inyecta en el HTML, **sin validar si existe en los arrays internos**.

### ¿Cómo funciona ahora?

```php
// En src/Tools/Themes/AbstractComponentTheme.php

$variant = (string) ($state['variant'] ?? '');
if ($variant !== '') {
    $classes[] = "w4-{$component}-{$variant}"; // Passthrough directo
}
```

Si el desarrollador hace:

```php
<x-w4-badge variant="super-nueva-variante" size="mega-grande" />
```

El resolver producirá:

```html
<div class="w4-badge w4-badge-super-nueva-variante w4-badge-mega-grande"></div>
```

### Ventajas de este enfoque

1. **Cero Mantenimiento Inmediato:** Si DaisyUI se actualiza mañana y trae 10 variantes nuevas, los desarrolladores de W4 pueden empezar a usarlas de inmediato (actualizando solo el CSS vía npm), sin requerir cambios en el código PHP del paquete.
2. **Experimentación:** Facilita la creación de prototipos rápidos donde un desarrollador puede inyectar clases inventadas y luego agregar el CSS correspondiente en su proyecto.

### ¿Para qué sirven ahora los métodos `variants()` y `sizes()`?

Las listas codificadas que persisten en las clases hijas (como `ButtonTheme::variants()`) ya no actúan como "Guardianes" (Gatekeepers) que bloquean la ejecución.

Ahora sirven exclusivamente como **Diccionarios de Metadatos (Metadata Dictionaries)** para:

1. **Documentación Autogenerada:** Permite que un script recorra todas las clases PHP y construya la matriz de soporte automáticamente.
2. **Soporte de IDE:** En el futuro, herramientas y plugins para VSCode/PhpStorm podrán leer estos arrays para ofrecer autocompletado en los atributos de Blade.

## Conclusión

El **Modo Passthrough** transfiere la responsabilidad de "usar variantes válidas" desde el paquete base (PHP) hacia el desarrollador (Usuario Final), eliminando drásticamente la carga de mantenimiento constante y haciendo que `W4-Native-Daisy` sea a prueba de futuras (future-proof) actualizaciones de su librería CSS subyacente.