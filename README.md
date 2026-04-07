# W4-Native-UI

Biblioteca visual oficial del ecosistema W4 para Laravel.

W4-Native-UI entrega un sistema completo de interfaz basado en:

- clases CSS semánticas
- design tokens
- themes dinámicos
- presets visuales
- compatibilidad con TailwindCSS
- integración con W4-UI-Framework

## Tabla de contenidos

- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Publicación de assets](#publicación-de-assets)
- [Uso rápido](#uso-rápido)
- [Sistema de themes](#sistema-de-themes)
- [Design tokens](#design-tokens)
- [Componentes incluidos](#componentes-incluidos)
- [Integración con W4-UI-Framework](#integración-con-w4-ui-framework)
- [Estructura del paquete](#estructura-del-paquete)
- [Testing](#testing)
- [Versionado](#versionado)
- [Soporte](#soporte)
- [Licencia](#licencia)

## Características

- Capa visual desacoplada de la lógica de componentes.
- API visual consistente para aplicaciones Laravel.
- Cambio de theme en runtime sin recompilar CSS.
- Soporte para escenarios SaaS y multi-tenant.
- Presets listos para usar en ambientes productivos.
- Base preparada para extensiones y nuevos componentes.

## Requisitos

- PHP 8.3 o superior
- Laravel 13 o superior

## Instalación

```bash
composer require w4/native-ui
```

Si tu proyecto no usa auto-discovery, registra manualmente el provider:

```php
W4\NativeUi\Providers\W4NativeUiServiceProvider::class
```

## Publicación de assets

Publica los assets del paquete:

```bash
php artisan vendor:publish
```

En una instalación estándar, los assets quedan en:

```text
public/vendor/w4-native-ui
```

## Uso rápido

Incluye los estilos del paquete en tu layout principal:

```html
<link rel="stylesheet" href="{{ asset('vendor/w4-native-ui/w4-native.css') }}">
```

Usa clases semánticas W4 directamente:

```html
<button class="w4-btn w4-btn-primary w4-btn-lg">
  Guardar
</button>
```

```html
<input class="w4-input w4-input-bordered" placeholder="Nombre">
```

## Sistema de themes

W4-Native-UI utiliza `data-theme` para resolver tokens en runtime:

```html
<html data-theme="native.dark">
```

Presets incluidos:

```text
native.default
native.dark
native.corporate
native.soft
native.night
```

## Design tokens

El sistema visual se basa en variables CSS, por ejemplo:

```css
:root {
  --w4-primary: 222 89% 55%;
  --w4-primary-content: 0 0% 100%;
  --w4-radius-button: 0.75rem;
  --w4-shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
}
```

Los componentes consumen tokens en lugar de valores directos:

```css
.w4-btn-primary {
  background: hsl(var(--w4-primary));
}
```

## Componentes incluidos

Form:

- Button
- Input
- Select
- Textarea
- Checkbox
- Radio
- Toggle

Layout:

- Card
- Divider

Feedback:

- Alert
- Badge

## Integración con W4-UI-Framework

W4-Native-UI resuelve la capa visual de los componentes abstractos del framework:

```text
W4 Component (PHP)
      ↓
Theme Resolver
      ↓
W4-Native-UI classes
      ↓
HTML final
```

Esto permite mantener separadas la lógica de negocio y la implementación visual.

## Estructura del paquete

```text
w4-native-ui
├─ src/
├─ resources/
├─ dist/
├─ config/
├─ docs/
└─ tests/
```

## Testing

Ejecuta el suite de pruebas:

```bash
composer test
```

## Versionado

El paquete sigue Semantic Versioning:

```text
MAJOR.MINOR.PATCH
```

## Soporte

Para lineamientos técnicos y decisiones de arquitectura, revisa:

- `docs/ADR-10/`
- `docs/Development/`
- `docs/System/`

## Licencia

MIT License.
