# W4-Native-UI: Instrucciones de instalación, requerimientos y operación

## 1. Alcance

Este documento describe cómo:

- instalar el paquete en un proyecto Laravel
- publicar y compilar assets
- operar el paquete en runtime (CSS, JS, themes y hooks)
- validar que la integración quedó correcta

## 2. Requerimientos

Requerimientos mínimos del paquete:

- PHP `^8.3`
- Laravel `^13.0`

Dependencias relevantes:

- `laravel/framework`
- `composer/installers`

## 3. Instalación

Instala el paquete en tu proyecto host:

```bash
composer require w4/native-ui
```

Si tu proyecto no usa auto-discovery de Laravel, registra el provider manualmente:

```php
W4\NativeUi\Providers\W4NativeUiServiceProvider::class
```

## 4. Publicación y compilación de assets

### 4.1 Instalación recomendada (automática)

```bash
php artisan w4-native:install --build
```

Esto:

- compila assets del paquete
- publica configuración
- publica carpeta `dist` en `public/vendor/w4-native-ui`

### 4.2 Comandos individuales

Compilar assets:

```bash
php artisan w4-native:build-assets
```

Publicar configuración:

```bash
php artisan vendor:publish --tag=w4-native-ui-config
```

Publicar assets compilados:

```bash
php artisan vendor:publish --tag=w4-native-ui-dist
```

## 5. Archivos esperados

Después de compilar/publicar deben existir:

```text
dist/w4-native.css
dist/w4-native.js
public/vendor/w4-native-ui/w4-native.css
public/vendor/w4-native-ui/w4-native.js
```

## 6. Uso en layout Blade

Carga CSS y JS en tu layout base:

```blade
<link rel="stylesheet" href="{{ asset('vendor/w4-native-ui/w4-native.css') }}">
<script src="{{ asset('vendor/w4-native-ui/w4-native.js') }}"></script>
```

También puedes usar directivas Blade del paquete:

```blade
@W4NativeStyles
@W4NativeScripts
@W4NativeInit
```

Inicializa runtime JS:

```html
<script>
document.addEventListener("DOMContentLoaded", function () {
  window.W4NativeUI.init(document);
});
</script>
```

## 7. Operación del paquete

### 7.1 Capa CSS

Los componentes usan clases semánticas `w4-*`, por ejemplo:

```html
<button class="w4-button w4-button-primary w4-button-lg">Guardar</button>
<input class="w4-input w4-input-default w4-input-sm" />
```

### 7.2 Capa de themes

Los presets se activan por `data-theme`:

```html
<html data-theme="native.dark">
```

Presets disponibles:

- `native.default`
- `native.dark`
- `native.corporate`
- `native.soft`
- `native.night`

### 7.3 Capa JS nativa

El runtime normaliza:

- `data-w4-component`
- `data-w4-state`
- `data-w4-hook`
- atributos ARIA por estado

API pública disponible:

- `window.W4NativeUI.setTheme(theme)`
- `window.W4NativeUI.init(root?)`
- `window.W4NativeUI.sync(element)`
- `window.W4NativeUI.on(eventName, handler)`
- `window.W4NativeUI.once(eventName, handler)`
- `window.W4NativeUI.off(eventName, handler?)`
- `window.W4NativeUI.emit(eventName, detail?)`

## 8. Operación con Livewire

Reinicializa runtime después de navegación/render:

```html
<script>
document.addEventListener("livewire:navigated", function () {
  window.W4NativeUI.init(document);
});
</script>
```

## 9. Validación de integración

Checklist rápido:

- carga correcta de `w4-native.css`
- carga correcta de `w4-native.js`
- componentes renderizan clases `w4-*`
- runtime añade `data-w4-*`
- cambio de theme funciona con `setTheme(...)`
- hooks JS se reciben con `on(...)`

## 10. Operación para desarrollo del paquete

En el repositorio del paquete:

```bash
composer test
php vendor/bin/testbench w4-native:build-assets
```

Validación de sintaxis PHP:

```bash
Get-ChildItem src -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
```

## 11. Referencias internas

- `docs/ADR-10/10-RENDERING-FLOW.md`
- `docs/ADR-10/11-NATIVE-JS-HOOKS-CONTRACT.md`
- `docs/ADR-10/12-QUICK-START-JS.md`
