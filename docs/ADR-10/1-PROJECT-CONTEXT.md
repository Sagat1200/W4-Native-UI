# W4-Native-UI: Contexto del proyecto

---

## 1. Introducción

**W4-Native-UI** es la biblioteca visual oficial del ecosistema **W4**, diseñada para proporcionar un sistema de estilos y componentes UI consistente, extensible y desacoplado de frameworks externos.

El objetivo principal del paquete es ofrecer una **implementación visual nativa** para **W4-UI-Framework**, evitando depender directamente de bibliotecas externas como DaisyUI, Bootstrap o frameworks de componentes similares.

Inspirado en la ergonomía y simplicidad de herramientas modernas como DaisyUI, W4-Native-UI proporciona:

* Componentes semánticos basados en clases CSS
* Sistema de **design tokens**
* **Themes dinámicos**
* **Presets visuales**
* Compatibilidad total con **TailwindCSS**
* Integración directa con **Laravel**

Este paquete forma parte del **ecosistema W4**, que busca construir una arquitectura modular para aplicaciones Laravel modernas.

---

## 2. Problema que resuelve

Los frameworks UI tradicionales presentan varios problemas cuando se utilizan dentro de frameworks PHP modernos:

### Dependencias externas

Muchos frameworks dependen completamente de librerías como:

* DaisyUI
* Bootstrap
* Material UI
* Tailwind UI

Esto genera:

* Dependencias difíciles de controlar
* Cambios inesperados entre versiones
* Limitaciones para personalización profunda

### Acoplamiento visual

La mayoría de frameworks UI mezclan:

* lógica
* estilos
* comportamiento

Esto dificulta:

* cambiar de sistema visual
* soportar múltiples themes
* soportar múltiples frameworks frontend

### Falta de control en ecosistemas SaaS

En sistemas **multi-tenant** o plataformas SaaS:

* diferentes clientes pueden requerir diferentes temas
* diferentes estilos corporativos
* branding personalizado

Los frameworks tradicionales no están diseñados para este nivel de flexibilidad.

---

## 3. Objetivo del proyecto

El objetivo de **W4-Native-UI** es proporcionar:

### 1. Sistema visual nativo para W4

Una biblioteca UI que funcione como la **implementación oficial visual** de **W4-UI-Framework**.

### 2. Eliminación de dependencias externas

Evitar que proyectos Laravel tengan que instalar librerías externas como DaisyUI para usar componentes UI.

### 3. Sistema de design tokens

Centralizar:

* colores
* radios
* espaciados
* sombras
* tipografía

mediante **variables CSS y tokens reutilizables**.

### 4. Themes dinámicos

Permitir cambiar el tema de una aplicación **sin recompilar CSS** mediante:

```html
<html data-theme="dark">
```

### 5. Soporte para multi-tenant

Permitir que cada tenant pueda usar:

* diferentes themes
* diferentes presets
* diferentes tokens visuales

---

## 4. Alcance del proyecto

W4-Native-UI provee:

### Sistema de tokens visuales

Tokens globales como:

* color.primary
* color.secondary
* color.accent
* color.base
* radius.button
* radius.input
* shadow.sm
* spacing.button

Estos tokens se traducen a **variables CSS**.

---

### Presets visuales

El paquete incluirá presets iniciales como:

* native.light
* native.dark
* native.corporate
* native.soft
* native.night
* native.w4-default

Los presets modifican los tokens para cambiar la apariencia completa de la interfaz.

---

### Componentes UI base

La versión v0.1.0 incluye componentes fundamentales:

#### UI Components

* Button
* Divider
* Heading
* Icon
* IconButton
* Label
* Link
* Text

#### Form Components

* Input
* Select
* Textarea
* Checkbox
* Radio
* Toggle
* FieldError
* HelperText

#### Layout Components

* Card
* Container
* Stack
* Grid
* Section
* Panel

#### Feedback Components

* Alert
* Badge
* Toast
* Progress
* Skeleton
* Tooltip

Cada componente estará diseñado para integrarse con el **Theme Resolver Engine** de W4-UI-Framework.

---

## 5. Relación con W4-UI-Framework

**W4-Native-UI no es un framework de componentes PHP.**

La responsabilidad del paquete es **únicamente visual**.

La arquitectura del ecosistema se divide en dos capas:

### W4-UI-Framework

Responsable de:

* Componentes PHP
* Estados de componentes
* Theme Engine
* Renderer Engine
* Integración con Blade / Livewire / Inertia

### W4-Native-UI

Responsable de:

* Clases CSS
* Design tokens
* Presets
* Assets visuales

Relación:

```text
W4 UI Component
        ↓
Theme Resolver
        ↓
W4-Native-UI classes
        ↓
CSS variables
        ↓
HTML final
```

---

## 6. Filosofía de diseño

W4-Native-UI sigue cuatro principios fundamentales.

### 1. Semántica sobre utilidades

Los componentes utilizan clases semánticas:

```text
w4-button
w4-input
w4-card
w4-alert
```

en lugar de depender exclusivamente de utilidades Tailwind.

---

### 2. Desacoplamiento de lógica

Los componentes PHP **no conocen el CSS**.

El CSS se resuelve mediante:

```text
Theme Resolver
```

---

### 3. Tokens sobre valores directos

Los estilos utilizan tokens:

```css
--w4-primary
--w4-radius-btn
--w4-shadow-sm
```

Esto permite cambiar el diseño completo modificando solo los tokens.

---

### 4. Runtime themes

Los themes se cambian dinámicamente usando:

```html
data-theme="dark"
```

sin recompilar estilos.

---

## 7. Inspiración tecnológica

W4-Native-UI toma inspiración de varias tecnologías modernas:

* DaisyUI (sistema de themes)
* TailwindCSS (base utility-first)
* Chakra UI (design tokens)
* Shadcn UI (component ergonomics)
* Radix UI (separación de lógica y estilo)

Sin embargo, el objetivo **no es copiar estas librerías**, sino adaptar sus mejores ideas a la arquitectura del ecosistema W4.

---

## 8. Integración con Laravel

W4-Native-UI se distribuirá como un **paquete Composer** compatible con Laravel.

El paquete proveerá:

* Service Provider
* publicación de assets
* configuración opcional
* presets

Los assets se publicarán mediante:

```bash
php artisan vendor:publish
```

---

## 9. Roadmap inicial

### v0.1

* Design tokens base
* Preset `native.default`
* Preset `native.dark`
* Componentes:

  * Button
  * Input
  * Card
  * Alert
  * Badge

### v0.2

* Select
* Textarea
* Checkbox
* Radio
* Toggle
* Divider

### v0.3

* Dropdown
* Tabs
* Navbar
* Sidebar
* Modal
* Drawer

---

## 10. Beneficios para el ecosistema W4

La introducción de W4-Native-UI permitirá:

* estabilidad visual del ecosistema
* independencia de frameworks externos
* soporte real para multi-theme
* soporte real para multi-tenant UI
* consistencia entre paquetes

Paquetes que podrán beneficiarse directamente:

* W4-UI-Framework
* W4-PowerTable
* W4-DynamicFormBuilder
* W4-FileUploadManager
* W4-NeuronTenant

---

## 11. Futuro del proyecto

En fases futuras, W4-Native-UI podrá incluir:

* Theme Builder visual
* generador de presets
* soporte de diseño corporativo
* exportación de design tokens
* integración con herramientas de diseño

El objetivo a largo plazo es que **W4-Native-UI se convierta en el sistema visual estándar del ecosistema W4 para aplicaciones Laravel modernas.**

---

## 12. Conclusión

W4-Native-UI representa la capa visual del ecosistema W4.

Al separar la lógica de los componentes del sistema visual, el ecosistema puede ofrecer:

* máxima flexibilidad
* arquitectura limpia
* independencia tecnológica

Este enfoque permitirá construir aplicaciones Laravel con interfaces modernas, personalizables y preparadas para sistemas multi-tenant complejos.
