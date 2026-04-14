<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Loading Lab</title>
    @NativeUIStyles
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
            justify-content: center;
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
            text-align: center;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Loading Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente de estado w4-loading</p>
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

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md"></span>
                    <span class="preview-label-desc">Default (Inherit)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md w4-loading-primary"></span>
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md w4-loading-secondary"></span>
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md w4-loading-accent"></span>
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md w4-loading-info"></span>
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md w4-loading-success"></span>
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md w4-loading-warning"></span>
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-md w4-loading-error"></span>
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title">Formas (Shape Variants)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-spinner"></span>
                    <span class="preview-label-desc">Spinner (Default)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-dots"></span>
                    <span class="preview-label-desc">Dots</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-ring"></span>
                    <span class="preview-label-desc">Ring</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-bars"></span>
                    <span class="preview-label-desc">Bars</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-infinity"></span>
                    <span class="preview-label-desc">Infinity</span>
                </div>
            </div>

            <!-- Variantes Empresariales (Corporate Shapes) -->
            <h3 class="section-title"
                style="border-color: hsl(var(--w4-primary)); font-size: 1.25rem; margin-block-start: 2rem;">Variantes
                Empresariales</h3>
            <div class="preview-group"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1.5rem; justify-items: center;">
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-pulse"></span>
                    <span class="preview-label-desc">Pulse</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-eclipse"></span>
                    <span class="preview-label-desc">Eclipse</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-radar"></span>
                    <span class="preview-label-desc">Radar</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-square"></span>
                    <span class="preview-label-desc">Square</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-diamond"></span>
                    <span class="preview-label-desc">Diamond</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-wave"></span>
                    <span class="preview-label-desc">Wave</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-clock"></span>
                    <span class="preview-label-desc">Clock</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-hex"></span>
                    <span class="preview-label-desc">Hexagon</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-dual-ring"></span>
                    <span class="preview-label-desc">Dual Ring</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-orbit"></span>
                    <span class="preview-label-desc">Orbit</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-crescent"></span>
                    <span class="preview-label-desc">Crescent</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-steps"></span>
                    <span class="preview-label-desc">Steps</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-scan"></span>
                    <span class="preview-label-desc">Scan</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-cross"></span>
                    <span class="preview-label-desc">Cross</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-corner"></span>
                    <span class="preview-label-desc">Corner</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xs"></span>
                    <span class="preview-label-desc">XS (1rem)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-sm"></span>
                    <span class="preview-label-desc">SM (1.25rem)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-md"></span>
                    <span class="preview-label-desc">MD (1.5rem)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-lg"></span>
                    <span class="preview-label-desc">LG (2rem)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl"></span>
                    <span class="preview-label-desc">XL (2.5rem)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl"></span>
                    <span class="preview-label-desc">Normal</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-active"></span>
                    <span class="preview-label-desc">Active (Glow Effect)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-disabled"></span>
                    <span class="preview-label-desc">Disabled (Opacity 0.5)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Ejemplos de Integración (Composición)
            </h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start; gap: 1.5rem;">

                <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
                    <!-- Dentro de un botón -->
                    <button class="w4-button w4-button-primary">
                        <span class="w4-loading w4-loading-sm"></span>
                        Guardando...
                    </button>

                    <!-- Botón de icono -->
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-secondary">
                        <span class="w4-loading w4-loading-md"></span>
                    </button>

                    <!-- Junto a texto -->
                    <div
                        style="display: flex; align-items: center; gap: 0.75rem; background: hsl(var(--w4-base-100)); padding: 0.5rem 1rem; border-radius: var(--w4-radius-button); box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-loading w4-loading-accent w4-loading-sm"></span>
                        <span class="w4-text w4-text-sm">Sincronizando datos en segundo plano</span>
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
                        style="min-inline-size: 120px; display: flex; align-items: center; justify-content: center; background: hsl(var(--w4-base-100)); padding: 2rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-md);">

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 1rem;">
                            <!-- El loading interactivo JS -->
                            <span id="jsInteractiveLoading" class="w4-loading w4-loading-primary w4-loading-xl"
                                data-w4-component="loading"></span>
                            <span class="w4-text w4-text-sm w4-text-muted">Conectando al servidor...</span>
                        </div>

                    </div>

                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl'">Spinner</button>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-dots'">Dots</button>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-ring'">Ring</button>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-bars'">Bars</button>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-infinity'">Infinity</button>
                    </div>
                </div>

                <div style="border-block-start: 1px solid hsl(var(--w4-base-300)); padding-block-start: 1.5rem;">
                    <p
                        style="font-size: 0.875rem; color: hsl(var(--w4-base-content) / 0.7); margin-block-end: 1rem; margin-block-start: 0;">
                        Modifica el atributo <code>data-w4-state</code> del componente Loading usando estos botones:
                    </p>

                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLoading').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveLoading').setAttribute('data-w4-state', 'active')">Set
                            Active (Glow)</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveLoading').setAttribute('data-w4-state', 'disabled')">Set
                            Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveLoading').setAttribute('data-w4-state', 'hidden')">Set
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