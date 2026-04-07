# W4-Native-UI: Quick Start JS (v0.1.x)

---

## 1. Objetivo

Esta guía muestra cómo usar rápidamente la capa JS nativa de componentes en:

* Blade
* Livewire
* cualquier frontend que renderice HTML dinámico

---

## 2. Cargar el runtime

Publica assets del paquete y carga el JS compilado:

```html
<script src="/vendor/w4-native-ui/w4-native.js"></script>
```

Opcionalmente carga también CSS:

```html
<link rel="stylesheet" href="/vendor/w4-native-ui/w4-native.css">
```

---

## 3. Marcar componentes

Puedes dejar que el runtime infiera por clase CSS o declarar explícitamente:

```html
<button
  class="w4-button w4-button-primary"
  data-w4-component="button"
  data-w4-state="loading"
>
  Guardar
</button>
```

El runtime sincroniza:

* `data-w4-component`
* `data-w4-state`
* `data-w4-hook`
* ARIA por estado

---

## 4. Escuchar hooks

### 4.1 API directa

```js
const off = window.W4NativeUI.on("button:loading", function (detail) {
  console.log(detail.component, detail.states);
});

window.W4NativeUI.once("w4:hook", function (detail) {
  console.log("primer hook", detail.hook);
});

off();
```

### 4.2 Eventos DOM

```js
document.addEventListener("w4:hook", function (event) {
  console.log(event.detail.hook);
});
```

---

## 5. Forzar sincronización

Si agregas elementos manualmente:

```js
window.W4NativeUI.init(document);
```

Si cambias estado de un nodo específico:

```js
const input = document.querySelector("#email");
input.setAttribute("data-w4-state", "readonly invalid");
window.W4NativeUI.sync(input);
```

---

## 6. Livewire

Después de renderizados dinámicos puedes reinicializar:

```js
document.addEventListener("livewire:navigated", function () {
  window.W4NativeUI.init(document);
});
```

Si usas eventos de actualización del DOM, llama `init()` al final del ciclo.

---

## 7. Cambio de theme

```js
window.W4NativeUI.setTheme("native.dark");
```

Esto actualiza `data-theme` en `documentElement`.

---

## 8. Recomendaciones

* usar `data-w4-component` en componentes personalizados
* usar `on/once/off` para lógica de app
* evitar acoplar lógica a selectores CSS concretos
* basar integraciones en hooks `{component}:{state}`

---

## 9. Referencias

* contrato completo: `11-NATIVE-JS-HOOKS-CONTRACT.md`
* flujo de render: `10-RENDERING-FLOW.md`

---

## 10. Snippet recomendado para Blade base

Ejemplo para `resources/views/layouts/app.blade.php`:

```blade
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="native.default">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('vendor/w4-native-ui/w4-native.css') }}">
</head>
<body>
    {{ $slot ?? '' }}

    <script src="{{ asset('vendor/w4-native-ui/w4-native.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            window.W4NativeUI.init(document);

            window.W4NativeUI.on("w4:hook", function (detail) {
                if (detail.hook === "input:invalid") {
                    console.log("input inválido detectado", detail.element);
                }
            });
        });

        document.addEventListener("livewire:navigated", function () {
            window.W4NativeUI.init(document);
        });
    </script>
</body>
</html>
```

---

## 11. Variantes con Vite

### 11.1 Vite usando runtime local en `resources/js`

Caso recomendado si quieres versionar el runtime junto a tu app host.

1) Copia `w4-native.js` al proyecto host, por ejemplo:

```text
resources/js/vendor/w4-native-ui/w4-native.js
```

2) Carga Vite en tu layout:

```blade
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

3) Inicializa desde `resources/js/app.js`:

```js
import "./vendor/w4-native-ui/w4-native.js";

document.addEventListener("DOMContentLoaded", function () {
  window.W4NativeUI.init(document);
});

document.addEventListener("livewire:navigated", function () {
  window.W4NativeUI.init(document);
});
```

### 11.2 Vite + runtime publicado en `public/vendor`

Caso recomendado si prefieres mantener el runtime administrado por el paquete.

1) Publica assets:

```bash
php artisan vendor:publish --tag=w4-native-ui-dist
```

2) Mantén `@vite(...)` para tu app y carga runtime por `<script>`:

```blade
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="native.default">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{ $slot ?? '' }}

    <script src="{{ asset('vendor/w4-native-ui/w4-native.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            window.W4NativeUI.init(document);
        });

        document.addEventListener("livewire:navigated", function () {
            window.W4NativeUI.init(document);
        });
    </script>
</body>
</html>
```
