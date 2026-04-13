<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Icon Lab</title>
    @NativeUIStyles

    <!-- Carga de FontAwesome para el testeo visual de íconos -->
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

        .preview-label {
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
                <h1 class="lab-title">W4 Native: Icon Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-icon</p>
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
            <h2 class="section-title">Variantes de Color</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-heart w4-icon-xl"></i>
                    <span class="preview-label">Default (Inherit)</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-star w4-icon-primary w4-icon-xl"></i>
                    <span class="preview-label">Primary</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-bolt w4-icon-secondary w4-icon-xl"></i>
                    <span class="preview-label">Secondary</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-droplet w4-icon-accent w4-icon-xl"></i>
                    <span class="preview-label">Accent</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-circle-info w4-icon-info w4-icon-xl"></i>
                    <span class="preview-label">Info</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-circle-check w4-icon-success w4-icon-xl"></i>
                    <span class="preview-label">Success</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-triangle-exclamation w4-icon-warning w4-icon-xl"></i>
                    <span class="preview-label">Warning</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-circle-xmark w4-icon-error w4-icon-xl"></i>
                    <span class="preview-label">Error</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-bell-slash w4-icon-muted w4-icon-xl"></i>
                    <span class="preview-label">Muted</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-user w4-icon-primary w4-icon-xs"></i>
                    <span class="preview-label">Extra Small (xs)</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-user w4-icon-primary w4-icon-sm"></i>
                    <span class="preview-label">Small (sm)</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-user w4-icon-primary w4-icon-md"></i>
                    <span class="preview-label">Medium (md)</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-user w4-icon-primary w4-icon-lg"></i>
                    <span class="preview-label">Large (lg)</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-user w4-icon-primary w4-icon-xl"></i>
                    <span class="preview-label">Extra Large (xl)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes & Atributos)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-shield w4-icon-primary w4-icon-xl"></i>
                    <span class="preview-label">Normal</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-shield w4-icon-primary w4-icon-active w4-icon-xl"></i>
                    <span class="preview-label">Active (w4-icon-active)</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-shield w4-icon-primary w4-icon-disabled w4-icon-xl"></i>
                    <span class="preview-label">Disabled</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-spinner w4-icon-primary w4-icon-spin w4-icon-xl"></i>
                    <span class="preview-label">Spin (w4-icon-spin)</span>
                </div>
                <div class="preview-item">
                    <i class="w4-icon fa-solid fa-shield w4-icon-primary w4-icon-decorative w4-icon-xl"></i>
                    <span class="preview-label">Decorative (No pointer)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start; padding: 2rem;">

                <div style="display: flex; gap: 2rem; align-items: center; inline-size: 100%;">
                    <div
                        style="background: hsl(var(--w4-base-100)); padding: 2rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-md); display: flex; justify-content: center; align-items: center; min-inline-size: 150px;">
                        <i id="jsInteractiveIcon" class="w4-icon fa-solid fa-rocket w4-icon-primary"
                            style="font-size: 3rem;" data-w4-component="icon"></i>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 1rem; inline-size: 100%;">
                        <p style="font-size: 0.875rem; color: hsl(var(--w4-base-content) / 0.7); margin: 0;">
                            Modifica el atributo <code>data-w4-state</code> en tiempo real. Observa cómo cambian las
                            propiedades visuales y las animaciones a través del motor CSS nativo:
                        </p>

                        <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <button class="w4-button w4-button-sm w4-button-outline"
                                onclick="document.getElementById('jsInteractiveIcon').removeAttribute('data-w4-state')">Clear
                                (Normal)</button>
                            <button class="w4-button w4-button-sm w4-button-info"
                                onclick="document.getElementById('jsInteractiveIcon').setAttribute('data-w4-state', 'active')">Active</button>
                            <button class="w4-button w4-button-sm w4-button-warning"
                                onclick="document.getElementById('jsInteractiveIcon').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                            <button class="w4-button w4-button-sm w4-button-secondary"
                                onclick="document.getElementById('jsInteractiveIcon').setAttribute('data-w4-state', 'loading')">Loading
                                (Spin)</button>
                            <button class="w4-button w4-button-sm w4-button-error"
                                onclick="document.getElementById('jsInteractiveIcon').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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