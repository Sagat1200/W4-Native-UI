<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Badge Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: hsl(var(--w4-base-200));
            color: hsl(var(--w4-base-content));
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin: 0;
            padding: 2rem;
            min-block-size: 100vh;
        }

        .lab-container {
            max-inline-size: 1200px;
            margin: 0 auto;
            background-color: hsl(var(--w4-base-100));
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .lab-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-block-end: 1px solid hsl(var(--w4-base-300));
            padding-block-end: 1.5rem;
        }

        .lab-title {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }

        .lab-subtitle {
            margin: 0.5rem 0 0 0;
            color: hsl(var(--w4-base-content) / 0.7);
        }

        .theme-selector-wrapper {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .theme-selector {
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 1px solid hsl(var(--w4-base-300));
            background-color: hsl(var(--w4-base-100));
            color: hsl(var(--w4-base-content));
            font-size: 1rem;
            min-inline-size: 200px;
        }

        .section-title {
            margin: 0 0 1rem 0;
            font-size: 1.5rem;
            font-weight: 600;
            border-inline-start: 4px solid hsl(var(--w4-primary));
            padding-inline-start: 0.75rem;
        }

        .preview-group {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 2rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            align-items: center;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            background-color: hsl(var(--w4-base-100));
            padding: 1.5rem;
            border-radius: var(--w4-radius-card);
            box-shadow: var(--w4-shadow-sm);
            min-inline-size: 120px;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
            text-align: center;
        }

        /* Contenedor de simulación para badges anidados */
        .mock-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.25rem;
            background-color: hsl(var(--w4-base-300));
            color: hsl(var(--w4-base-content));
            border-radius: var(--w4-radius-button);
            font-weight: 600;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Badge Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente de feedback w4-badge</p>
            </div>

            <div class="theme-selector-wrapper">
                <label for="themeSwitcher" style="font-weight: 600; font-size: 0.875rem;">Cambiar Tema:</label>
                <select id="themeSwitcher" class="theme-selector">
                    <option value="native-ui.light">Light</option>
                    <option value="native-ui.dark">Dark</option>
                    <option value="native-ui.corporate">Corporate</option>
                    <option value="native-ui.night">Night</option>
                    <option value="native-ui.synthwave">Synthwave</option>
                    <option value="native-ui.cupcake">Cupcake</option>
                    <option value="native-ui.bumblebee">Bumblebee</option>
                    <option value="native-ui.emerald">Emerald</option>
                    <option value="native-ui.retro">Retro</option>
                    <option value="native-ui.cyberpunk">Cyberpunk</option>
                    <option value="native-ui.valentine">Valentine</option>
                    <option value="native-ui.halloween">Halloween</option>
                    <option value="native-ui.garden">Garden</option>
                    <option value="native-ui.forest">Forest</option>
                    <option value="native-ui.aqua">Aqua</option>
                    <option value="native-ui.lofi">Lofi</option>
                    <option value="native-ui.pastel">Pastel</option>
                    <option value="native-ui.fantasy">Fantasy</option>
                    <option value="native-ui.wireframe">Wireframe</option>
                    <option value="native-ui.black">Black</option>
                    <option value="native-ui.luxury">Luxury</option>
                    <option value="native-ui.dracula">Dracula</option>
                    <option value="native-ui.cmyk">Cmyk</option>
                    <option value="native-ui.autumn">Autumn</option>
                    <option value="native-ui.business">Business</option>
                    <option value="native-ui.acid">Acid</option>
                    <option value="native-ui.lemonade">Lemonade</option>
                    <option value="native-ui.coffee">Coffee</option>
                    <option value="native-ui.winter">Winter</option>
                    <option value="native-ui.dim">Dim</option>
                    <option value="native-ui.nord">Nord</option>
                    <option value="native-ui.sunset">Sunset</option>
                </select>
            </div>
        </header>

        <section style="margin-block-end: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Badge</h1>
            <p class="w4-text w4-text-lg w4-text-neutral" style="margin-block-start: 1rem;">
                El componente Badge es un pequeño indicador visual utilizado para resaltar metadatos, contadores,
                etiquetas de estado o atributos clave. Es altamente flexible y está diseñado para ser anidado dentro de
                otros componentes más grandes como botones, tarjetas o elementos de navegación.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary"
                style="margin-block-start: 2rem; margin-block-end: 1rem;">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <li><strong class="w4-text-active">Contadores de notificaciones:</strong> Mostrar el número de mensajes
                    sin leer (ej. "+99") anidado en un icono de campana o avatar.</li>
                <li><strong class="w4-text-active">Etiquetas de estado:</strong> Indicar el ciclo de vida de un registro
                    en una tabla (ej. "Pendiente" en Warning, "Completado" en Success).</li>
                <li><strong class="w4-text-active">Categorización:</strong> Listar tags o categorías de un artículo
                    usando la variante Outline o Soft para no sobrecargar la vista.</li>
                <li><strong class="w4-text-active">Llamadas de atención:</strong> Usar la variante
                    <code>w4-badge-highlighted</code> (animación de pulso) para atraer la mirada a una nueva
                    funcionalidad (ej. etiqueta "Nuevo").
                </li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <div class="w4-badge">Default</div>
                    <span class="preview-label-desc">Neutral</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-primary">Nuevo</div>
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-secondary">Destacado</div>
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-accent">Popular</div>
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-info">12 Avisos</div>
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-success">Completado</div>
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-warning">Pendiente</div>
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-error">99+</div>
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Modificadores Estilísticos</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <div class="w4-badge w4-badge-outline w4-badge-primary">Outline</div>
                    <span class="preview-label-desc">Outline (Borde)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-soft w4-badge-primary">Soft Badge</div>
                    <span class="preview-label-desc">Soft (Fondo 15%)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-soft w4-badge-success">
                        <i class="fa-solid fa-check" style="margin-inline-end: 4px;"></i> Verificado
                    </div>
                    <span class="preview-label-desc">Soft + Icono</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group" style="align-items: flex-end;">
                <div class="preview-item">
                    <div class="w4-badge w4-badge-primary w4-badge-xs">xs</div>
                    <span class="preview-label-desc">XS (0.625rem)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-primary w4-badge-sm">sm</div>
                    <span class="preview-label-desc">SM (0.7rem)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-primary w4-badge-md">md</div>
                    <span class="preview-label-desc">MD (Default)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-primary w4-badge-lg">lg</div>
                    <span class="preview-label-desc">LG (0.875rem)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-primary w4-badge-xl">xl</div>
                    <span class="preview-label-desc">XL (1rem)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes & Atributos)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <div class="w4-badge w4-badge-info">Normal</div>
                    <span class="preview-label-desc">Estado Base</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-info w4-badge-active">Active</div>
                    <span class="preview-label-desc">Active (Scale + Bold)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-info w4-badge-disabled">Disabled</div>
                    <span class="preview-label-desc">Disabled (Opacity + Grayscale)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-badge w4-badge-primary w4-badge-highlighted">Destacado</div>
                    <span class="preview-label-desc">Highlighted (Pulse Animation)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Ejemplos de Integración (Composición)
            </h2>
            <div class="preview-group">
                <div class="preview-item" style="flex-direction: row; gap: 2rem; min-inline-size: auto;">
                    <div class="mock-button">
                        Notificaciones
                        <div class="w4-badge w4-badge-secondary w4-badge-sm">+99</div>
                    </div>

                    <div class="mock-button">
                        Inbox
                        <div class="w4-badge w4-badge-accent w4-badge-sm w4-badge-highlighted">1</div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <span class="w4-text w4-text-lg">Versión del Sistema</span>
                        <div class="w4-badge w4-badge-outline w4-badge-info">v2.4.0</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-warning))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="preview-group" style="padding: 2rem;">
                <div style="display: flex; flex-direction: column; gap: 1.5rem; inline-size: 100%;">

                    <div
                        style="min-inline-size: 80px; display: flex; align-items: center; justify-content: center; background: hsl(var(--w4-base-100)); padding: 2rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-md);">
                        <div class="mock-button" style="position: relative;">
                            Mensajes
                            <!-- El badge interactivo JS -->
                            <div id="jsInteractiveBadge" class="w4-badge w4-badge-primary w4-badge-sm"
                                data-w4-component="badge">
                                4 Nuevos
                            </div>
                        </div>
                    </div>

                    <div style="border-inline-end: 1px solid hsl(var(--w4-base-300)); padding-inline-end: 1.5rem;">
                        <p
                            style="font-size: 0.875rem; color: hsl(var(--w4-base-content) / 0.7); margin-block-end: 1rem; margin-block-start: 0;">
                            Modifica el atributo <code>data-w4-state</code> en el Badge usando estos botones:
                        </p>

                        <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <button class="w4-button w4-button-sm w4-button-outline"
                                onclick="document.getElementById('jsInteractiveBadge').removeAttribute('data-w4-state')">Clear
                                (Normal)</button>
                            <button class="w4-button w4-button-sm w4-button-info"
                                onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'active')">Set
                                Active</button>
                            <button class="w4-button w4-button-sm w4-button-warning"
                                onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'disabled')">Set
                                Disabled</button>
                            <button class="w4-button w4-button-sm w4-button-primary"
                                onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'highlighted')">Set
                                Highlighted (Pulse)</button>
                            <button class="w4-button w4-button-sm w4-button-error"
                                onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'hidden')">Set
                                Hidden</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @NativeUIScripts
    @NativeUIInit
    @NativeUILivewire

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var storageKey = "w4-native-ui-theme";
            var switcher = document.getElementById("themeSwitcher");

            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";
            document.documentElement.setAttribute("data-theme", currentTheme);

            if (switcher) {
                switcher.value = currentTheme;

                switcher.addEventListener("change", function (event) {
                    var theme = event.target.value;
                    document.documentElement.setAttribute("data-theme", theme);
                    localStorage.setItem(storageKey, theme);
                });
            }
        });
    </script>
</body>

</html>