# W4-Native-UI: Development Guidelines

---

## 1. Introducción

Este documento define las **reglas oficiales para el desarrollo, mantenimiento y contribución al proyecto W4-Native-UI**.

El objetivo es garantizar:

* consistencia en el código
* crecimiento ordenado del sistema UI
* facilidad de mantenimiento
* integración estable con el ecosistema W4

Estas guías deben seguirse para cualquier cambio o nueva funcionalidad en el proyecto.

---

## 2. Principios de desarrollo

El desarrollo del framework se basa en los siguientes principios.

### Simplicidad

Los componentes deben ser fáciles de entender y usar.

### Consistencia

Todos los componentes deben seguir las mismas reglas de diseño y estructura.

### Desacoplamiento

El sistema visual debe permanecer independiente de la lógica del framework.

### Escalabilidad

El sistema debe permitir agregar nuevos componentes sin romper compatibilidad.

---

## 3. Flujo de desarrollo

El desarrollo de nuevas funcionalidades sigue el siguiente flujo:

```text
Idea
 ↓
Issue / Proposal
 ↓
ADR (si aplica)
 ↓
Implementación
 ↓
Pruebas
 ↓
Documentación
 ↓
Release
```

---

## 4. Creación de nuevos componentes

Para agregar un nuevo componente al sistema se deben seguir los siguientes pasos.

---

### Componentes: Paso 1 — Definir especificación

Agregar el componente a:

```text
COMPONENT_SPECIFICATIONS.md
```

Definir:

* propósito
* clases base
* variantes
* tamaños
* estados
* ejemplos

---

### Componentes: Paso 2 — Actualizar matriz de características

Actualizar:

```text
FEATURE_MATRIX.md
```

Agregar el nuevo componente en la tabla correspondiente.

---

### Componentes: Paso 3 — Crear clases CSS

Agregar las clases del componente en:

```text
resources/css/w4-components.css
```

Ejemplo:

```css
.w4-modal {
  position: fixed;
}
```

---

### Componentes: Paso 4 — Agregar tokens si es necesario

Si el componente requiere nuevos tokens:

Actualizar:

```text
DESIGN_TOKENS.md
```

Ejemplo:

```css
--w4-modal-shadow
```

---

### Componentes: Paso 5 — Crear resolver del componente

En el framework UI se debe crear el resolver correspondiente.

Ejemplo:

```text
ModalThemeResolver
```

---

### Componentes: Paso 6 — Probar integración

Verificar que el componente funcione con:

* Blade
* Livewire
* Inertia

---

## 5. Creación de nuevos themes

Para agregar un nuevo theme se deben seguir estos pasos.

---

### Themes: Paso 1 — Crear preset CSS

Crear archivo en:

```text
resources/css/presets/
```

Ejemplo:

```text
native.cyber.css
```

---

### Themes: Paso 2 — Definir tokens

Ejemplo:

```css
[data-theme="native.cyber"] {

  --w4-primary: 300 100% 60%;
  --w4-base-100: 220 20% 10%;

}
```

---

### Themes: Paso 3 — Registrar preset

Agregar preset en configuración:

```text
config/w4-native-ui.php
```

Ejemplo:

```php
'available_presets' => [
    'native.default',
    'native.dark',
    'native.cyber',
],
```

---

## 6. Convenciones de código

## Clases CSS

Prefijo obligatorio:

```text
w4-
```

Ejemplo:

```text
w4-btn
w4-input
w4-card
```

---

## Variantes

Formato:

```text
w4-{component}-{variant}
```

Ejemplo:

```text
w4-btn-primary
w4-alert-success
```

---

## Tamaños

Formato:

```text
w4-{component}-{size}
```

Ejemplo:

```text
w4-btn-sm
w4-btn-lg
```

---

## 7. Organización del código

El código debe mantenerse dentro de la estructura oficial del proyecto.

```text
src/
resources/
dist/
config/
docs/
tests/
```

No se deben agregar archivos fuera de esta estructura.

---

## 8. Pruebas

Todas las nuevas funcionalidades deben incluir pruebas cuando sea posible.

Ubicación:

```text
tests/
```

Tipos de pruebas recomendadas:

* renderizado de componentes
* resolución de clases CSS
* carga de themes
* compilación de tokens

---

## 9. Versionado

El proyecto utiliza **Semantic Versioning**.

Formato:

```text
MAJOR.MINOR.PATCH
```

Ejemplo:

```text
1.2.3
```

---

## Cambios PATCH

Correcciones de errores.

Ejemplo:

```text
1.0.1
```

---

## Cambios MINOR

Nuevas funcionalidades compatibles.

Ejemplo:

```text
1.1.0
```

---

## Cambios MAJOR

Cambios que rompen compatibilidad.

Ejemplo:

```text
2.0.0
```

---

## 10. Commits

Se recomienda seguir el estándar **Conventional Commits**.

Ejemplo:

```text
feat: add modal component
fix: correct button padding
docs: update component specifications
```

---

## 11. Releases

Cada release debe incluir:

* actualización de documentación
* actualización de matriz de características
* actualización del roadmap

Además debe actualizarse:

```text
CHANGELOG.md
```

---

## 12. Documentación

Cada nueva funcionalidad debe actualizar los documentos correspondientes.

Posibles documentos afectados:

```text
COMPONENT_SPECIFICATIONS.md
FEATURE_MATRIX.md
ROADMAP.md
DESIGN_TOKENS.md
```

---

## 13. Compatibilidad con el ecosistema W4

W4-Native-UI debe mantener compatibilidad con:

```text
W4-UI-Framework
W4-PowerTable
W4-DynamicFormBuilder
W4-FileUploadManager
```

Esto garantiza coherencia en todo el ecosistema.

---

## 14. Buenas prácticas

Para mantener la calidad del sistema se recomienda:

* reutilizar tokens existentes
* evitar duplicación de estilos
* mantener nombres consistentes
* documentar todos los cambios

---

## 15. Futuro del proyecto

En versiones futuras el sistema podrá incluir:

* Theme Builder visual
* Generador de componentes
* Integración con herramientas de diseño
* Exportación de design tokens

---

## 16. Conclusión

Las guías de desarrollo permiten que **W4-Native-UI evolucione de forma ordenada y mantenible**.

Seguir estas reglas asegura que el framework pueda crecer sin perder consistencia ni calidad.
