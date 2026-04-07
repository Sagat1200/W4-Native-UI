# W4-Native-UI: Decisions (ADR)

Este documento registra las **Architectural Decision Records (ADR)** del proyecto.

Cada ADR documenta una decisión importante de arquitectura, incluyendo:

* contexto
* decisión tomada
* consecuencias

Esto permite mantener trazabilidad técnica del proyecto.

---

## ADR-010

### W4-Native-UI como capa visual oficial del ecosistema W4

#### Estado

Aceptado

---

## ADR-011

### Escala de tamaños obligatoria por componente (`xs|sm|md|lg|xl`)

#### Estado

Aceptado

---

### Contexto

Durante la evolución de `v0.1.x` se identificó una inconsistencia:

* algunos resolvers soportaban `xs` y `lg`
* otros componentes solo definían `sm|md|lg`
* en ciertos casos existía soporte en resolver pero no en CSS (o viceversa)

Esto introducía comportamientos no uniformes en render y dificultaba pruebas transversales del sistema.

---

### Decisión

Se establece como regla obligatoria:

* todo componente registrado debe soportar `xs|sm|md|lg|xl`
* el soporte debe existir tanto en resolver (`sizes()`) como en CSS (`.w4-{component}-{size}`)
* las pruebas deben validar explícitamente `xs` y `lg` para todos los componentes registrados

---

### Consecuencias

Positivas:

* contrato de tamaños uniforme para todo el ecosistema
* menor riesgo de regressions visuales entre componentes
* integración más predecible con `W4-UI-Framework`

Costos:

* mayor mantenimiento inicial de CSS por componente
* necesidad de mantener pruebas de cobertura de tamaños

---

### Contexto

El ecosistema W4 incluye múltiples paquetes que requieren una interfaz de usuario consistente:

* W4-UI-Framework
* W4-PowerTable
* W4-DynamicFormBuilder
* W4-FileUploadManager

Inicialmente se consideró utilizar bibliotecas externas de UI como:

* DaisyUI
* Bootstrap
* Tailwind UI

Sin embargo, depender directamente de estas bibliotecas presenta varios problemas:

* dependencia de terceros
* cambios inesperados entre versiones
* dificultad para controlar la evolución visual del ecosistema
* limitaciones para personalización profunda
* dificultad para soportar multi-theme y multi-tenant

Además, el objetivo del ecosistema W4 es construir una arquitectura **modular, extensible y desacoplada**.

---

### Decisión

Se decide crear **W4-Native-UI** como el **sistema visual oficial del ecosistema W4**.

Este paquete proveerá:

* clases CSS semánticas
* design tokens
* presets visuales
* themes dinámicos
* assets UI

El paquete **no implementa lógica de componentes PHP**.

Su única responsabilidad es la **implementación visual de los componentes definidos por W4-UI-Framework**.

La arquitectura queda separada de la siguiente forma:

```text
W4-UI-Framework
    ↓
Component abstraction
    ↓
Theme Resolver
    ↓
W4-Native-UI
    ↓
CSS implementation
```

Esto permite que el framework UI sea completamente independiente del sistema visual.

---

### Consecuencias positivas

La decisión trae varios beneficios importantes.

#### Control total del sistema visual

El ecosistema W4 controla completamente:

* estilos
* tokens
* presets
* evolución del sistema UI

#### Eliminación de dependencias externas

Las aplicaciones Laravel que usen W4 no necesitan instalar DaisyUI u otras librerías UI externas.

#### Consistencia en el ecosistema

Todos los paquetes del ecosistema W4 pueden compartir el mismo sistema visual.

#### Soporte para multi-theme

El sistema permite cambiar temas dinámicamente mediante:

```html
data-theme="native.dark"
```

sin recompilar CSS.

#### Soporte para multi-tenant

Cada tenant puede usar un preset diferente sin modificar los componentes.

---

### Consecuencias negativas

La decisión también implica algunas responsabilidades.

#### Mayor mantenimiento interno

El equipo W4 debe mantener:

* CSS
* tokens
* presets
* evolución visual

#### Mayor esfuerzo inicial

Construir un sistema UI completo requiere más trabajo que utilizar una biblioteca existente.

---

### Alternativas consideradas

#### Usar DaisyUI directamente

Ventajas:

* rápida implementación
* amplia comunidad

Desventajas:

* dependencia externa
* control limitado del sistema visual

---

#### Usar Bootstrap

Ventajas:

* muy estable
* ampliamente usado

Desventajas:

* menor flexibilidad para design tokens
* integración limitada con el modelo de themes dinámicos

---

#### Usar Tailwind utilities únicamente

Ventajas:

* máxima flexibilidad

Desventajas:

* falta de semántica
* componentes difíciles de estandarizar

---

### Conclusión

Se adopta **W4-Native-UI** como la capa visual oficial del ecosistema W4.

Esta decisión permite:

* independencia tecnológica
* control completo del sistema visual
* integración profunda con W4-UI-Framework
* soporte para sistemas SaaS multi-tenant
* evolución consistente del ecosistema UI.

---
