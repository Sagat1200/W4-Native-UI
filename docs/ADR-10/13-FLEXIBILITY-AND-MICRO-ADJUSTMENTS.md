# Flexibilidad y Micro-Ajustes (Micro-adjustments)

Al utilizar el ecosistema `W4-Native-Daisy` para la resolución visual, ganamos consistencia pero podríamos sentir que perdemos flexibilidad para casos aislados donde se requieren ajustes milimétricos (ej. cambiar el padding de un botón específico en una vista).

Para resolver esto, el paquete ahora implementa internamente la utilidad **Tailwind Merge** y provee estrategias recomendadas para sub-targeting.

## 1. Resolución Inteligente de Clases (Tailwind Merge)

El contrato del tema (`ThemeContract`) ahora expone el método `mergeClasses`.

Este método permite a los componentes lógicos de `W4-UI-Framework` aceptar clases adicionales (`class="..."`) provistas por el desarrollador en las vistas de Blade y fusionarlas de manera inteligente con las clases base de DaisyUI que resuelve el paquete.

### Ejemplo de uso en el componente PHP (W4-UI-Framework)

```php
public function render()
{
    // 1. Obtener las clases base desde W4-Native-Daisy
    $baseClasses = $this->theme->resolveComponent('button', [
        'variant' => 'primary',
        'size' => 'lg'
    ]); // Retorna: ['w4-button', 'w4-button-primary', 'w4-button-lg', 'px-4']

    // 2. Obtener las clases que el desarrollador escribió en Blade
    $userClasses = $this->attributes->get('class', ''); // Ej: 'px-8 mt-4'

    // 3. Fusionar inteligentemente (Tailwind Merge eliminará 'px-4' en favor de 'px-8')
    $finalClasses = $this->theme->mergeClasses($baseClasses, $userClasses);

    return view('w4-native::components.button', [
        'classes' => $finalClasses
    ]);
}
```

## 2. Atributos Específicos (Sub-targeting)

Para componentes complejos con múltiples zonas (ej. una `Card` con `header`, `body` y `footer`), no basta con una sola variable `$classes`.
Se recomienda exponer propiedades de clase específicas en los componentes de Blade.

### Ejemplo de Sub-targeting en Card

```blade
<!-- Uso en la vista del desarrollador -->
<x-w4-card 
    class="mt-10" 
    header-class="bg-base-200 border-b-2 border-primary" 
    body-class="p-0 overflow-hidden"
>
    <!-- Contenido -->
</x-w4-card>
```

El componente Blade de `W4-UI-Framework` debería procesar estos atributos y usar `mergeClasses` individualmente para cada sección si tienen estilos predeterminados.

## 3. Inline Design Tokens

Si el desarrollador necesita ajustar un token sin crear clases en el CSS global, puede hacerlo directamente por estilo en línea:

```html
<button class="w4-button w4-button-primary" style="--w4-radius-button: 999px;">
    Botón Completamente Redondo
</button>
```

Esta estrategia respeta la arquitectura y garantiza que los micro-ajustes sean predecibles, limitados a su contexto, y no rompan el ecosistema global.
