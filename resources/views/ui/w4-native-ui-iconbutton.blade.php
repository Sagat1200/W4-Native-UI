<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native IconButton Lab</title>
    @NativeUIStyles
    {{--
    <link rel="stylesheet" href="../../../dist/w4-native-ui.css"> --}}
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

        .button-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding: 2rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            align-items: center;
        }

        .preview-label {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
            text-align: center;
            margin-block-start: 0.5rem;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: IconButton Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-icon-button</p>
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
            <div class="button-group">
                <div class="preview-item">
                    <button class="w4-icon-button"><i class="fa-solid fa-house"></i></button>
                    <span class="preview-label">Default</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary"><i class="fa-solid fa-heart"></i></button>
                    <span class="preview-label">Primary</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-secondary"><i class="fa-solid fa-star"></i></button>
                    <span class="preview-label">Secondary</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-accent"><i class="fa-solid fa-bell"></i></button>
                    <span class="preview-label">Accent</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-info"><i class="fa-solid fa-circle-info"></i></button>
                    <span class="preview-label">Info</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-success"><i class="fa-solid fa-check"></i></button>
                    <span class="preview-label">Success</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-warning"><i
                            class="fa-solid fa-triangle-exclamation"></i></button>
                    <span class="preview-label">Warning</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-error"><i class="fa-solid fa-trash"></i></button>
                    <span class="preview-label">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Modificador: Outline</h2>
            <div class="button-group">
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline"><i class="fa-solid fa-house"></i></button>
                    <span class="preview-label">Default</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-primary"><i
                            class="fa-solid fa-heart"></i></button>
                    <span class="preview-label">Primary</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-secondary"><i
                            class="fa-solid fa-star"></i></button>
                    <span class="preview-label">Secondary</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-accent"><i
                            class="fa-solid fa-bell"></i></button>
                    <span class="preview-label">Accent</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-info"><i
                            class="fa-solid fa-circle-info"></i></button>
                    <span class="preview-label">Info</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-success"><i
                            class="fa-solid fa-check"></i></button>
                    <span class="preview-label">Success</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-warning"><i
                            class="fa-solid fa-triangle-exclamation"></i></button>
                    <span class="preview-label">Warning</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-outline w4-icon-button-error"><i
                            class="fa-solid fa-trash"></i></button>
                    <span class="preview-label">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Modificador: Ghost</h2>
            <div class="button-group">
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-ghost"><i class="fa-solid fa-house"></i></button>
                    <span class="preview-label">Ghost Base</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-ghost" style="color: hsl(var(--w4-primary))"><i
                            class="fa-solid fa-heart"></i></button>
                    <span class="preview-label">Ghost Primary</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-ghost" style="color: hsl(var(--w4-error))"><i
                            class="fa-solid fa-trash"></i></button>
                    <span class="preview-label">Ghost Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Tamaños</h2>
            <div class="button-group" style="align-items: flex-end;">
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary w4-icon-button-xs"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <span class="preview-label">XS</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary w4-icon-button-sm"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <span class="preview-label">SM</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary w4-icon-button-md"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <span class="preview-label">MD</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary w4-icon-button-lg"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <span class="preview-label">LG</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary w4-icon-button-xl"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <span class="preview-label">XL</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-warning))">Formas (Morfológicas)</h2>
            <div class="button-group">
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary"><i class="fa-solid fa-download"></i></button>
                    <span class="preview-label">Square (Default)</span>
                </div>
                <div class="preview-item">
                    <!-- Redondeado manual imitando un modificador de forma (ej. rounded-full) -->
                    <button class="w4-icon-button w4-icon-button-secondary" style="border-radius: 9999px;"><i
                            class="fa-solid fa-plus"></i></button>
                    <span class="preview-label">Circle</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes & Atributos)</h2>
            <div class="button-group">
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary"><i
                            class="fa-solid fa-paper-plane"></i></button>
                    <span class="preview-label">Normal</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary w4-icon-button-active"><i
                            class="fa-solid fa-paper-plane"></i></button>
                    <span class="preview-label">Active</span>
                </div>
                <div class="preview-item">
                    <button class="w4-icon-button w4-icon-button-primary" disabled><i
                            class="fa-solid fa-paper-plane"></i></button>
                    <span class="preview-label">Disabled</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="button-group" style="flex-direction: column; align-items: flex-start; gap: 1.5rem;">

                <div style="display: flex; gap: 2rem; align-items: center; inline-size: 100%;">
                    <button id="jsInteractiveIconButton" class="w4-icon-button w4-icon-button-primary w4-icon-button-lg"
                        data-w4-component="icon-button">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>

                    <div
                        style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-inline-start: auto; border-inline-start: 1px solid hsl(var(--w4-base-300)); padding-inline-start: 1rem;">
                        <span
                            style="font-size: 0.875rem; color: hsl(var(--w4-base-content)/0.7); display: flex; align-items: center; margin-inline-end: 0.5rem;">Set
                            State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveIconButton').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveIconButton').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveIconButton').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-secondary"
                            onclick="document.getElementById('jsInteractiveIconButton').setAttribute('data-w4-state', 'loading')">Loading</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveIconButton').setAttribute('data-w4-state', 'readonly')">Readonly</button>
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