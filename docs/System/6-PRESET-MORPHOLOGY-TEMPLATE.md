# Preset Morphology Template

Este archivo define una plantilla de morfologia para pegar en cada archivo de:

- `resources/css/presets/*.css`

La idea es estandarizar tokens de forma y densidad por tema.

## Uso rapido

1. Abre el preset (ejemplo: `light.css`).
2. Dentro de su bloque `[data-theme="native-ui.xxx"]`, pega el bloque **Nivel Minimo**.
3. Si el tema requiere mayor control visual, agrega tambien **Nivel Extendido**.
4. Solo si el tema cambia densidad, agrega **Densidad Global**.

## Nivel Minimo (obligatorio)

```css
/* --- Morphology Contract: Minimum --- */
--w4-radius-button: 0.25rem;
--w4-radius-input: 0.25rem;
--w4-radius-card: 0.5rem;
--w4-radius-badge: 9999px;
```

## Nivel Extendido (recomendado)

```css
/* --- Morphology Contract: Extended --- */
--w4-radius-panel: var(--w4-radius-card);
--w4-radius-select: var(--w4-radius-input);
--w4-radius-alert: var(--w4-radius-input);
--w4-radius-progress: 9999px;
--w4-radius-skeleton: var(--w4-radius-input);
--w4-radius-toast: var(--w4-radius-input);
--w4-radius-checkbox: 0.125rem;
--w4-radius-radio: 9999px;
--w4-radius-toggle: 9999px;
--w4-radius-modal: var(--w4-radius-card);
--w4-radius-menu: var(--w4-radius-input);
--w4-radius-dropdown: var(--w4-radius-input);
```

## Densidad Global (opcional avanzado)

```css
/* --- Morphology Contract: Density --- */
--w4-control-height-xs: 1.5rem;
--w4-control-height-sm: 2rem;
--w4-control-height-md: 3rem;
--w4-control-height-lg: 4rem;
--w4-control-height-xl: 5rem;

--w4-control-padding-x-xs: 0.5rem;
--w4-control-padding-x-sm: 0.75rem;
--w4-control-padding-x-md: 1rem;
--w4-control-padding-x-lg: 1.5rem;
--w4-control-padding-x-xl: 2rem;

--w4-button-padding-x: var(--w4-control-padding-x-md);
--w4-input-padding-x: var(--w4-control-padding-x-md);
```

## Snippet listo para copiar/pegar

```css
/* --- Morphology Contract: Minimum --- */
--w4-radius-button: 0.25rem;
--w4-radius-input: 0.25rem;
--w4-radius-card: 0.5rem;
--w4-radius-badge: 9999px;

/* --- Morphology Contract: Extended --- */
--w4-radius-panel: var(--w4-radius-card);
--w4-radius-select: var(--w4-radius-input);
--w4-radius-alert: var(--w4-radius-input);
--w4-radius-progress: 9999px;
--w4-radius-skeleton: var(--w4-radius-input);
--w4-radius-toast: var(--w4-radius-input);
--w4-radius-checkbox: 0.125rem;
--w4-radius-radio: 9999px;
--w4-radius-toggle: 9999px;
--w4-radius-modal: var(--w4-radius-card);
--w4-radius-menu: var(--w4-radius-input);
--w4-radius-dropdown: var(--w4-radius-input);

/* --- Morphology Contract: Density (optional) --- */
--w4-control-height-xs: 1.5rem;
--w4-control-height-sm: 2rem;
--w4-control-height-md: 3rem;
--w4-control-height-lg: 4rem;
--w4-control-height-xl: 5rem;

--w4-control-padding-x-xs: 0.5rem;
--w4-control-padding-x-sm: 0.75rem;
--w4-control-padding-x-md: 1rem;
--w4-control-padding-x-lg: 1.5rem;
--w4-control-padding-x-xl: 2rem;

--w4-button-padding-x: var(--w4-control-padding-x-md);
--w4-input-padding-x: var(--w4-control-padding-x-md);
```

## Nota de compatibilidad

Si un preset no declara un token, el sistema usa fallback de `resources/css/tokens/morphology.tokens.css`.
Esta plantilla no rompe presets existentes; solo explicita y estandariza el contrato.
