# Estrategia para Componentes Exclusivos (W4 Custom Components)

El framework visual W4-Native-Daisy está inspirado y construido sobre la base técnica de **DaisyUI**. Sin embargo, la visión a largo plazo del ecosistema **W4-UI-Framework** contempla el desarrollo de más de 150 componentes empresariales.

Esto significa que el catálogo de W4 superará ampliamente el conjunto de componentes estándar que ofrece DaisyUI. Muchos de estos componentes (ej. DataGrids complejos, TreeViews, Kanban Boards, Advanced Selects, Multi-step Wizards, etc.) **no existirán** en DaisyUI.

Para manejar esta brecha (Gap) sin romper la arquitectura, la consistencia visual, ni el sistema de temas (Theming), se ha establecido la siguiente estrategia arquitectónica.

## 1. Separación de Espacios de Nombres en Assets (Namespace Separation)

Los recursos CSS y JS dentro de `resources/` deben separar claramente lo que es un componente oficial de DaisyUI "adaptado" (Wrapper), de lo que es un componente 100% creado por W4.

### Estructura de Directorios Recomendada

```text
resources/
├─ css/
│  ├─ daisyui/         <-- Componentes nativos de DaisyUI adaptados a W4
│  │   ├─ components/
│  │   └─ presets/
│  └─ w4-exclusive/    <-- Componentes 100% creados por el equipo W4
│      ├─ datagrid.css
│      ├─ treeview.css
│      └─ wizard.css
```

Esta separación garantiza que cuando se realice un comando de sincronización o actualización de DaisyUI (para traer las últimas novedades del paquete oficial de NPM), los componentes exclusivos de W4 permanezcan intactos y no sean sobrescritos.

## 2. Consumo de Design Tokens

El "secreto" para que un componente exclusivo de W4 se vea exactamente igual que uno nativo de DaisyUI, es que **debe construirse utilizando estrictamente los Design Tokens (Variables CSS) del sistema de temas**.

Cuando se desarrolle el CSS de un componente W4 exclusivo, **jamás se deben usar colores hexadecimales o hsl hardcodeados**. Todo debe mapearse a las variables `--w4-*`.

### Ejemplo: Construyendo un W4 DataGrid Exclusivo

```css
/* resources/css/w4-exclusive/datagrid.css */
.w4-datagrid {
  background-color: hsl(var(--w4-b1)); /* Background base 1 */
  color: hsl(var(--w4-bc));            /* Base content */
  border-radius: var(--w4-rounded-box);
  border: 1px solid hsl(var(--w4-b3));
}

.w4-datagrid-header {
  background-color: hsl(var(--w4-b2));
  font-weight: 600;
}

.w4-datagrid-row:hover {
  background-color: hsl(var(--w4-base-200));
}

.w4-datagrid-selected {
  background-color: hsl(var(--w4-primary) / 0.1);
  border-left: 4px solid hsl(var(--w4-primary));
}
```

Al usar estas variables, el `DataGrid` cambiará automáticamente a modo oscuro (o a cualquier preset como *Corporate*, *Synthwave*, etc.) junto con el resto de la aplicación, porque los tokens `--w4-b1`, `--w4-primary`, etc., son resueltos en tiempo de ejecución por el `ThemeRegistry`.

## 3. Composición sobre Clases Utilitarias (Composition over Utilities)

Para acelerar el desarrollo de estos componentes exclusivos, los desarrolladores de W4 pueden usar la directiva `@apply` de TailwindCSS en el código fuente, referenciando las utilidades estándar, o simplemente componer usando clases de DaisyUI existentes si aplican.

```css
.w4-treeview-item {
  @apply flex items-center px-4 py-2 cursor-pointer transition-colors duration-200;
  border-radius: var(--w4-rounded-btn);
}
```

## 4. Resolución en PHP (AbstractComponentTheme)

A nivel de PHP, no hay diferencia entre un componente de DaisyUI y uno exclusivo de W4. Ambos deben extender de `AbstractComponentTheme` e implementar su contrato.

```php
// src/Themes/Components/Advanced/DataGridTheme.php

namespace W4\Native\Daisy\Themes\Components\Advanced;

use W4\Native\Daisy\Tools\Themes\AbstractComponentTheme;

class DataGridTheme extends AbstractComponentTheme
{
    public function component(): string
    {
        return 'datagrid';
    }

    protected function variants(): array
    {
        return ['striped', 'bordered', 'compact'];
    }
    
    // ...
}
```

El `ThemeResolver` tratará a `DataGridTheme` exactamente igual que a `ButtonTheme`. Generará las clases `w4-datagrid w4-datagrid-bordered`, las cuales serán estilizadas por el archivo `datagrid.css` exclusivo de W4.

## 5. Resumen del Flujo de Trabajo para Componentes Nuevos

1. **Crear CSS:** En `resources/css/w4-exclusive/mi-componente.css` usando variables `--w4-*`.
2. **Crear JS (Si aplica):** En `resources/js/w4-exclusive/mi-componente.js` manejando los hooks y el estado.
3. **Crear Resolver PHP:** En `src/Themes/Components/MiCategoria/MiComponenteTheme.php`.
4. **Registrar en el Provider:** Añadir el resolver en el Service Provider correspondiente (ej. `W4NativeAdvancedService`).
5. **Compilar:** Ejecutar la compilación para que Vite empaquete el nuevo CSS junto con el core de DaisyUI en `dist/w4-native.css`.

Esta arquitectura híbrida asegura que W4-Native-Daisy aproveche el 100% del trabajo fundacional de DaisyUI, pero mantenga total soberanía para escalar hasta el infinito con componentes empresariales propios, bajo el mismo paraguas visual y temático.