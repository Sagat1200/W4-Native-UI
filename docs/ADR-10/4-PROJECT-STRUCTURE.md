# W4-Native-UI: Estructura del proyecto

---

## 1. Introducción

Este documento define la **estructura oficial del proyecto W4-Native-UI**.

El objetivo de esta estructura es:

* mantener consistencia en el código
* separar responsabilidades claramente
* facilitar el mantenimiento del paquete
* permitir escalabilidad del sistema UI

W4-Native-UI está diseñado como un **paquete Composer para Laravel** que provee la capa visual del ecosistema W4.

---

## 2. Estructura general del repositorio

La estructura principal del repositorio es la siguiente:

```text
w4-native-ui
│
├─ src
├─ resources
├─ dist
├─ config
├─ stubs
├─ docs
├─ tests
│
├─ composer.json
├─ package.json
├─ README.md
└─ LICENSE
```

Cada carpeta cumple una responsabilidad específica.

---

## 3. Carpeta `src`

La carpeta **src** contiene el código PHP del paquete.

```text
src
│
├─ NativeUiServiceProvider.php
│
├─ Themes
│
├─ Contracts
│
├─ Support
│
└─ Console
```

---

## 4. Service Provider

```text
src/NativeUiServiceProvider.php
```

Este archivo registra el paquete dentro de Laravel.

Responsabilidades:

* registrar configuración
* publicar assets
* registrar presets
* registrar themes
* registrar assets CSS

---

## 5. Carpeta `Themes`

Esta carpeta contiene las implementaciones de themes del sistema visual.

```text
src/Themes
│
├─ NativeTheme.php
│
├─ Presets
│
└─ Components
```

---

### 5.1 NativeTheme

```text
src/Themes/NativeTheme.php
```

Representa el theme base de W4-Native-UI.

Responsabilidades:

* exponer design tokens
* resolver componentes
* registrar presets

---

### 5.2 Carpeta `Presets`

Contiene presets visuales del sistema.

```text
src/Themes/Presets
│
├─ DefaultPreset.php
├─ DarkPreset.php
├─ CorporatePreset.php
├─ SoftPreset.php
└─ NightPreset.php
```

Cada preset define valores específicos para los design tokens.

Ejemplo:

* colores
* radios
* sombras
* espaciados

---

### 5.3 Carpeta `Components`

Define la implementación visual de cada componente.

```text
src/Themes/Components
│
├─ ButtonTheme.php
├─ InputTheme.php
├─ CardTheme.php
├─ AlertTheme.php
├─ BadgeTheme.php
│
├─ SelectTheme.php
├─ TextareaTheme.php
├─ CheckboxTheme.php
├─ RadioTheme.php
└─ ToggleTheme.php
```

Cada archivo define cómo traducir un componente abstracto a **clases CSS semánticas**.

Ejemplo:

```text
Button → w4-btn w4-btn-primary w4-btn-lg
```

---

## 6. Carpeta `Contracts`

Contiene contratos utilizados por el sistema de themes.

```text
src/Contracts
│
├─ ThemeContract.php
├─ PresetContract.php
└─ ComponentThemeContract.php
```

Estos contratos garantizan consistencia entre implementaciones de themes.

---

## 7. Carpeta `Support`

Contiene utilidades internas del sistema.

```text
src/Support
│
├─ TokenCompiler.php
├─ ThemeManifest.php
└─ ThemeRegistry.php
```

### TokenCompiler

Responsable de compilar design tokens a variables CSS.

### ThemeManifest

Define los presets disponibles.

### ThemeRegistry

Permite registrar dinámicamente presets o themes.

---

## 8. Carpeta `Console`

Contiene comandos Artisan del paquete.

```text
src/Console
│
└─ Commands
    ├─ InstallNativeUiCommand.php
    └─ PublishThemesCommand.php
```

Ejemplos de comandos:

```bash
php artisan w4-native:install
php artisan w4-native:publish
```

---

## 9. Carpeta `resources`

Contiene los assets fuente del sistema UI.

```text
resources
│
├─ css
│
└─ js
```

---

### 9.1 CSS

```text
resources/css
│
├─ w4-theme.css
├─ w4-components.css
│
└─ presets
    ├─ default.css
    ├─ dark.css
    ├─ corporate.css
    ├─ soft.css
    └─ night.css
```

### w4-theme.css

Define los design tokens base.

### w4-components.css

Define las clases CSS semánticas de los componentes.

### presets

Define sobrescrituras de tokens por preset.

---

### 9.2 JavaScript (opcional)

```text
resources/js
│
└─ theme-switcher.js
```

Este archivo puede proporcionar utilidades como:

* cambio de theme
* persistencia de preferencia de usuario

---

## 10. Carpeta `dist`

Contiene los assets compilados listos para producción.

```text
dist
│
├─ w4-native.css
└─ w4-native.js
```

Estos archivos se publican en aplicaciones Laravel.

---

## 11. Carpeta `config`

Contiene configuración del paquete.

```text
config
│
└─ w4-native-ui.php
```

Ejemplo de configuración:

```php
return [

    'default_preset' => 'native.default',

    'available_presets' => [
        'native.default',
        'native.dark',
        'native.corporate',
        'native.soft',
        'native.night',
    ],

];
```

---

## 12. Carpeta `stubs`

Contiene plantillas para generación de archivos.

```text
stubs
│
├─ component-theme.stub
├─ preset.stub
└─ token-set.stub
```

Estos stubs pueden utilizarse para generar nuevos componentes o presets.

---

## 13. Carpeta `docs`

Contiene la documentación técnica del proyecto.

```text
docs
│
├─ PROJECT_CONTEXT.md
├─ ARCHITECTURE.md
├─ DECISIONS.md
├─ PROJECT_STRUCTURE.md
│
├─ COMPONENT_GUIDELINES.md
├─ THEME_GUIDELINES.md
└─ ROADMAP.md
```

---

## 14. Carpeta `tests`

Contiene pruebas automatizadas del paquete.

```text
tests
│
├─ Feature
└─ Unit
```

Pruebas recomendadas:

* resolución de clases de componentes
* carga de presets
* compilación de tokens
* integración con Laravel

---

## 15. Integración con Laravel

Los assets se publican mediante:

```bash
php artisan vendor:publish
```

Esto copiará los archivos a:

```text
public/vendor/w4-native-ui
```

---

## 16. Convenciones de nombres

Para mantener consistencia se utilizan las siguientes convenciones.

### Clases CSS

```text
w4-btn
w4-input
w4-card
w4-alert
w4-badge
```

### Variantes

```text
w4-btn-primary
w4-btn-secondary
w4-btn-outline
```

### Tamaños

```text
w4-btn-sm
w4-btn-md
w4-btn-lg
```

---

## 17. Escalabilidad

La estructura del proyecto permite agregar fácilmente:

### nuevos componentes

```text
Modal
Dropdown
Tabs
Navbar
Sidebar
Drawer
```

### nuevos presets

```text
native.dracula
native.cyber
native.minimal
```

### tokens personalizados

Aplicaciones pueden extender tokens mediante CSS.

---

## 18. Conclusión

La estructura definida en este documento proporciona una base clara y escalable para el desarrollo de **W4-Native-UI**.

La organización del proyecto facilita:

* mantenimiento del código
* crecimiento del sistema UI
* integración con el ecosistema W4
* adopción en aplicaciones Laravel modernas.
