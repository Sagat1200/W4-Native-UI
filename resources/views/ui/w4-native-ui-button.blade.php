<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Button Lab</title>
    @NativeUIStyles

    {{--
    <link rel="stylesheet" href="../../../dist/w4-native-ui.css"> --}}
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
            gap: 1rem;
            padding: 1.5rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Button Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-button</p>
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
            <h2 class="section-title">Mezcla con clases utilitarias de Tailwind (@w4Merge)</h2>
            <div class="button-group">
                <!-- Usando la directiva @w4Merge recién creada -->
                <button class="@w4Merge('w4-button w4-button-primary', 'w-full lg:w-64 bg-purple-600 hover:bg-purple-700 text-yellow-300 shadow-xl rounded-full')">
                    Botón Personalizado
                </button>
                <button class="@w4Merge('w4-button w4-button-outline w4-button-secondary', 'border-dashed border-4 p-8 text-2xl')">
                    Botón Gigante Dashed
                </button>
            </div>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color</h2>
            <div class="button-group">
                <button class="w4-button">Default</button>
                <button class="w4-button w4-button-neutral">Neutral</button>
                <button class="w4-button w4-button-primary">Primary</button>
                <button class="w4-button w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-accent">Accent</button>
                <button class="w4-button w4-button-info">Info</button>
                <button class="w4-button w4-button-success">Success</button>
                <button class="w4-button w4-button-warning">Warning</button>
                <button class="w4-button w4-button-error">Error</button>
                <button class="w4-button w4-button-ghost">Ghost</button>
                <button class="w4-button w4-button-link">Link</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Modificador: Outline</h2>
            <div class="button-group">
                <button class="w4-button w4-button-outline">Default Outline</button>
                <button class="w4-button w4-button-outline w4-button-primary">Primary</button>
                <button class="w4-button w4-button-outline w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-outline w4-button-accent">Accent</button>
                <button class="w4-button w4-button-outline w4-button-info">Info</button>
                <button class="w4-button w4-button-outline w4-button-success">Success</button>
                <button class="w4-button w4-button-outline w4-button-warning">Warning</button>
                <button class="w4-button w4-button-outline w4-button-error">Error</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Modificador: Soft</h2>
            <div class="button-group">
                <button class="w4-button w4-button-soft">Default Soft</button>
                <button class="w4-button w4-button-soft w4-button-primary">Primary Soft</button>
                <button class="w4-button w4-button-soft w4-button-secondary">Secondary Soft</button>
                <button class="w4-button w4-button-soft w4-button-accent">Accent Soft</button>
                <button class="w4-button w4-button-soft w4-button-info">Info Soft</button>
                <button class="w4-button w4-button-soft w4-button-success">Success Soft</button>
                <button class="w4-button w4-button-soft w4-button-warning">Warning Soft</button>
                <button class="w4-button w4-button-soft w4-button-error">Error Soft</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Modificador: Dash</h2>
            <div class="button-group">
                <button class="w4-button w4-button-dash">Default Dash</button>
                <button class="w4-button w4-button-dash w4-button-primary">Primary Dash</button>
                <button class="w4-button w4-button-dash w4-button-secondary">Secondary Dash</button>
                <button class="w4-button w4-button-dash w4-button-accent">Accent Dash</button>
                <button class="w4-button w4-button-dash w4-button-info">Info Dash</button>
                <button class="w4-button w4-button-dash w4-button-success">Success Dash</button>
                <button class="w4-button w4-button-dash w4-button-warning">Warning Dash</button>
                <button class="w4-button w4-button-dash w4-button-error">Error Dash</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Tamaños</h2>
            <div class="button-group">
                <button class="w4-button w4-button-primary w4-button-xs">Extra Small (xs)</button>
                <button class="w4-button w4-button-primary w4-button-sm">Small (sm)</button>
                <button class="w4-button w4-button-primary w4-button-md">Medium (md)</button>
                <button class="w4-button w4-button-primary w4-button-lg">Large (lg)</button>
                <button class="w4-button w4-button-primary w4-button-xl">Extra Large (xl)</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-warning))">Formas</h2>
            <div class="button-group">
                <button class="w4-button w4-button-primary w4-button-square">Sq</button>
                <button class="w4-button w4-button-secondary w4-button-circle">Ci</button>
                <button class="w4-button w4-button-accent w4-button-wide">Wide Button</button>
            </div>
            <div class="button-group" style="margin-block-start: 1rem;">
                <button class="w4-button w4-button-neutral w4-button-block">Block Button (Ocupa 100% del ancho)</button>
            </div>


        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes & Atributos)</h2>
            <div class="button-group">
                <button class="w4-button w4-button-primary">Normal</button>
                <button class="w4-button w4-button-primary w4-button-active">Active</button>
                <button class="w4-button w4-button-primary" disabled>Disabled (Attr)</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="button-group" style="flex-direction: column; align-items: flex-start; gap: 1.5rem;">

                <div style="display: flex; gap: 1rem; align-items: center; inline-size: 100%;">
                    <button id="jsInteractiveButton" class="w4-button w4-button-primary" data-w4-component="button">
                        Dynamic JS Button
                    </button>

                    <div
                        style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-inline-start: auto; border-inline-start: 1px solid hsl(var(--w4-base-300)); padding-inline-start: 1rem;">
                        <span
                            style="font-size: 0.875rem; color: hsl(var(--w4-base-content)/0.7); display: flex; align-items: center; margin-inline-end: 0.5rem;">Set
                            State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveButton').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveButton').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveButton').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-secondary"
                            onclick="document.getElementById('jsInteractiveButton').setAttribute('data-w4-state', 'loading')">Loading</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveButton').setAttribute('data-w4-state', 'readonly')">Readonly</button>
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

            // Intenta obtener el tema de localStorage, si no, usa el data-theme actual o light por defecto
            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";

            // Aplica el tema al documento
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