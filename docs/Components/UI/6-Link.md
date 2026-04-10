# Link (W4-Native-UI)

## 1. Propósito

`Link` modela navegación o acciones de enlace con semántica y estilo consistentes.

## 2. Capacidad funcional

Soporta:

- variantes (`neutral|primary|secondary|accent|muted`)
- tamaños (`xs|sm|md|lg|xl`)
- estados (`disabled|active|hidden`)
- hooks JS (`link:*`)

## 3. Clases base

- `w4-link`
- `w4-link-{variant}`
- `w4-link-{size}`
- `w4-link-{state}`

## 4. Variantes soportadas

```text
neutral
primary
secondary
accent
muted
```

## 5. Tamaños soportados

```text
xs | sm | md | lg | xl
```

## 6. Estados soportados

- `disabled` → `w4-link-disabled` + `link:disabled` (inyecta `aria-disabled="true"`)
- `active` → `w4-link-active` + `link:active`
- `hidden` → `w4-link-hidden` + `link:hidden` (inyecta `aria-hidden="true"`)

## 7. Formas de renderizado

### 7.1 HTML directo

```html
<a class="w4-link w4-link-primary w4-link-md" href="/dashboard">Ir al dashboard</a>
```

### 7.2 Link muted

```html
<a class="w4-link w4-link-muted w4-link-sm" href="/legal">Términos y condiciones</a>
```

### 7.3 Con estado runtime

```html
<a
  class="w4-link w4-link-secondary w4-link-md"
  href="/profile"
  data-w4-component="link"
  data-w4-state="active"
>
  Perfil
</a>
```

### 7.4 Link deshabilitado

```html
<a
  class="w4-link w4-link-primary w4-link-md w4-link-disabled"
  href="#"
  data-w4-component="link"
  data-w4-state="disabled"
  aria-disabled="true"
>
  No disponible
</a>
```

### 7.5 Desde core (W4-UI-Framework)

```php
Link::make()
    ->text('Documentación')
    ->href('/docs')
    ->target('_blank')
    ->rel('noopener')
    ->variant('accent')
    ->size('md');
```

## 8. Integración JS

```js
window.W4NativeUI.on("link:active", function (detail) {
  console.log(detail.hook);
});
```

## 9. Accesibilidad

- para enlaces externos usar `rel="noopener noreferrer"` cuando aplica
- evitar `href="#"` salvo casos controlados por JS
- si está deshabilitado, reflejar `aria-disabled="true"`

## 10. Referencias

- `src/Themes/Components/UI/LinkTheme.php`
- `resources/css/w4-components.css`
- `docs/System/3-JAVASCRIPT.md`
