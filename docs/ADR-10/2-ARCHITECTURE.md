# W4-Native-UI: Arquitectura

---

## 1. Introducción

Este documento describe la **arquitectura técnica de W4-Native-UI**, la biblioteca visual nativa del ecosistema **W4**.

W4-Native-UI proporciona la **capa visual** para los componentes definidos en **W4-UI-Framework**, permitiendo desacoplar completamente:

* lógica de componentes
* resolución de themes
* implementación visual

La arquitectura está diseñada para soportar:

* themes dinámicos
* design tokens
* presets visuales
* aplicaciones multi-tenant
* integración con múltiples renderers

---

## 2. Rol dentro del ecosistema W4

El ecosistema W4 separa claramente responsabilidades entre paquetes.

### W4-UI-Framework

Responsable de:

* componentes PHP
* estados de componentes
* Theme Resolver Engine
* Renderer Engine
* integración con Blade / Livewire / Inertia

### W4-Native-UI

Responsable de:

* implementación visual de componentes
* clases CSS semánticas
* design tokens
* presets visuales
* assets del sistema UI

---

## 3. Flujo general de renderizado

El flujo de renderizado dentro del ecosistema es el siguiente:

```text
Application
    ↓
W4 UI Component (PHP Enums)
    ↓
Theme Resolver Pipeline (Atributos HTML / data-w4-state)
    ↓
W4-Native-UI JS Engine (Mapeo de estados y ARIA)
    ↓
W4-Native-UI CSS classes
    ↓
CSS variables
    ↓
HTML final
```

W4-Native-UI solo participa en la **última capa visual**.

---

## 4. Capas de la arquitectura

La arquitectura del paquete se divide en cuatro capas principales.

### 4.1 Design Tokens

Los **design tokens** son la base del sistema visual.

Representan valores reutilizables para:

* colores
* radios
* sombras
* espaciados
* tipografía

Ejemplo conceptual:

```text
color.primary
color.secondary
color.accent
radius.button
radius.input
shadow.sm
spacing.button.md
```

Los tokens se implementan mediante **variables CSS**.

Ejemplo:

```css
--w4-color-primary
--w4-radius-button
--w4-shadow-sm
```

---

### 4.2 Theme Presets

Los **presets** son conjuntos de tokens que definen una apariencia completa.

Ejemplo de presets iniciales:

```text
native.default
native.dark
native.corporate
native.soft
native.night
```

Cada preset redefine los valores de los tokens.

Ejemplo:

```html
<html data-theme="native.dark">
```

---

### 4.3 Component Classes

Los componentes visuales se implementan mediante **clases CSS semánticas**.

Ejemplos:

```text
w4-button
w4-input
w4-card
w4-alert
w4-badge
```

Estas clases utilizan los tokens para generar estilos dinámicos.

Ejemplo simplificado:

```css
.w4-button {
  border-radius: var(--w4-radius-button);
  background: hsl(var(--w4-color-primary));
}
```

---

### 4.4 Assets del sistema UI

El paquete distribuye assets compilados:

```text
dist/w4-native.css
dist/w4-native.js (opcional)
```

Estos assets incluyen:

* tokens
* presets
* estilos de componentes

---

## 5. Arquitectura de componentes visuales

Cada componente visual sigue una estructura consistente.

Ejemplo conceptual para Button:

```text
w4-button
w4-button-primary
w4-button-secondary
w4-button-outline
w4-button-sm
w4-button-md
w4-button-lg
```

Las clases se combinan para formar variaciones.

Ejemplo:

```html
<button class="w4-button w4-button-primary w4-button-lg">
```

---

## 6. Sistema de tokens CSS

Los tokens se definen en un archivo base:

```text
resources/css/w4-theme.css
```

Ejemplo:

```css
:root {
  --w4-primary: 222 89% 55%;
  --w4-secondary: 262 83% 58%;
  --w4-accent: 174 72% 43%;
  --w4-radius-button: 0.75rem;
}
```

Los presets sobrescriben estos valores.

---

## 7. Presets visuales

Los presets se definen utilizando el atributo:

```text
data-theme
```

Ejemplo:

```html
<html data-theme="native.dark">
```

Internamente:

```css
[data-theme="native.dark"] {
  --w4-primary: 217 91% 60%;
  --w4-base-100: 222 47% 11%;
}
```

Esto permite cambiar la apariencia completa sin recompilar CSS.

---

## 8. Integración con W4-UI-Framework

W4-Native-UI se integra mediante el sistema de **Theme Implementations**.

Ejemplo conceptual:

```text
NativeTheme
    ↓
ButtonTheme
InputTheme
CardTheme
AlertTheme
BadgeTheme
```

Cada Theme Implementation define cómo un componente abstracto se traduce a clases CSS.

Ejemplo:

```php
Button::make('Guardar')
    ->variant('primary')
    ->size('lg');
```

Resultado:

```text
w4-button w4-button-primary w4-button-lg
```

---

## 9. Arquitectura del paquete

La estructura general del paquete es:

```text
w4-native-ui
│
├─ src
│  ├─ NativeUiServiceProvider.php
│  │
│  ├─ Themes
│  │   ├─ NativeTheme.php
│  │   ├─ Presets
│  │   └─ Components
│  │
│  ├─ Support
│  │   ├─ TokenCompiler.php
│  │   └─ ThemeManifest.php
│  │
│  └─ Contracts
│
├─ resources
│  ├─ css
│  │   ├─ w4-theme.css
│  │   ├─ w4-components.css
│  │   └─ presets
│  │
│  └─ js
│
├─ dist
│
├─ config
│
└─ composer.json
```

---

## 10. Publicación de assets

Los assets se publican en aplicaciones Laravel mediante:

```bash
php artisan vendor:publish
```

Esto permite copiar los assets a:

```text
public/vendor/w4-native-ui
```

---

## 11. Compatibilidad con Tailwind

W4-Native-UI está diseñado para ser **compatible con TailwindCSS**, pero no depender completamente de él.

Esto significa que los desarrolladores pueden combinar:

* clases semánticas W4
* utilidades Tailwind

Ejemplo:

```html
<button class="w4-button w4-button-primary mt-4">
```

---

## 12. Escalabilidad del sistema visual

La arquitectura permite extender fácilmente:

### Nuevos componentes

```text
Dropdown
Tabs
Navbar
Sidebar
Modal
Drawer
```

### Nuevos presets

```text
native.dracula
native.cyber
native.minimal
```

### Tokens personalizados

Aplicaciones pueden sobrescribir tokens mediante CSS.

---

## 13. Compatibilidad con multi-tenant

El sistema soporta aplicaciones SaaS donde cada tenant puede usar un theme diferente.

Ejemplo conceptual:

```text
Tenant A → native.default
Tenant B → native.dark
Tenant C → native.corporate
```

Esto puede configurarse dinámicamente en la aplicación.

---

## 14. Integración con paquetes del ecosistema

W4-Native-UI está diseñado para integrarse con otros paquetes del ecosistema W4.

Entre ellos:

* W4-UI-Framework
* W4-PowerTable
* W4-DynamicFormBuilder
* W4-FileUploadManager

Esto garantiza consistencia visual en todo el ecosistema.

---

## 15. Evolución futura

En versiones futuras, el sistema podrá incluir:

* Theme Builder visual
* exportación de design tokens
* integración con herramientas de diseño
* sistema de iconografía
* animaciones UI

---

## 16. Conclusión

La arquitectura de W4-Native-UI establece una base sólida para la capa visual del ecosistema W4.

Al separar completamente:

* lógica de componentes
* resolución de themes
* implementación visual

se logra una arquitectura flexible, extensible y preparada para aplicaciones modernas Laravel.

W4-Native-UI se convierte así en el **sistema visual nativo del ecosistema W4**.
