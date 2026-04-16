<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Tooltip Lab</title>
    @NativeUIStyles
    <style>
        body {
            background-color: hsl(var(--w4-base-200));
            color: hsl(var(--w4-base-content));
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
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
            gap: 2rem;
        }

        .lab-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            border-block-end: 1px solid hsl(var(--w4-base-300));
            padding-block-end: 1.25rem;
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
            min-inline-size: 180px;
        }

        .section-title {
            margin: 0 0 1rem 0;
            font-size: 1.25rem;
            font-weight: 600;
            border-inline-start: 4px solid hsl(var(--w4-primary));
            padding-inline-start: 0.75rem;
        }

        .preview-group {
            display: flex;
            flex-wrap: wrap;
            gap: 0.875rem;
            padding: 1.25rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            align-items: center;
        }

        .preview-note {
            margin: 0;
            font-size: 0.875rem;
            color: hsl(var(--w4-base-content) / 0.75);
        }
    </style>
</head>

<body>
    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Tooltip Lab</h1>
                <p class="lab-subtitle">Hover o focus para previsualizar variantes, posiciones, tamanos y estados.</p>
            </div>
            <div class="theme-selector-wrapper">
                <label for="themeSwitcher" style="font-weight: 600; font-size: 0.875rem;">Cambiar tema:</label>
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

        <section style="margin-block-end: 2rem; margin-block-start: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Tooltip</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Tooltip</strong> (información sobre herramientas) proporciona texto explicativo o
                contexto adicional cuando un usuario pasa el cursor (hover) o enfoca un elemento. Ayuda a mantener la
                interfaz limpia ocultando detalles secundarios hasta que son necesarios.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Botones con solo íconos:</strong> Explicar la acción de un botón que no tiene texto visible
                    (ej. ícono de papelera &rarr; "Eliminar").</li>
                <li><strong>Aclaración de términos:</strong> Proporcionar definiciones de términos técnicos o acrónimos
                    sin saturar el texto principal.</li>
                <li><strong>Información de estado:</strong> Mostrar el motivo por el cual un botón o campo está
                    deshabilitado.</li>
                <li><strong>Fechas relativas:</strong> Mostrar la fecha y hora exacta al pasar el cursor sobre una fecha
                    relativa como "hace 2 horas".</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Posiciones</h2>
            <div class="preview-group">
                <button class="w4-button w4-button-md w4-tooltip w4-tooltip-top" data-w4-tip="Tooltip Top">
                    Top
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-tooltip-bottom" data-w4-tip="Tooltip Bottom">
                    Bottom
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-tooltip-left" data-w4-tip="Tooltip Left">
                    Left
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-tooltip-right" data-w4-tip="Tooltip Right">
                    Right
                </button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Tamanos</h2>
            <div class="preview-group">
                <button class="w4-button w4-button-sm w4-tooltip w4-size-xs" data-w4-tip="Size XS">XS</button>
                <button class="w4-button w4-button-sm w4-tooltip w4-size-sm" data-w4-tip="Size SM">SM</button>
                <button class="w4-button w4-button-sm w4-tooltip w4-size-md" data-w4-tip="Size MD">MD</button>
                <button class="w4-button w4-button-sm w4-tooltip w4-size-lg" data-w4-tip="Size LG">LG</button>
                <button class="w4-button w4-button-sm w4-tooltip w4-size-xl" data-w4-tip="Size XL">XL</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">Variantes</h2>
            <div class="preview-group">
                <button class="w4-button w4-button-md w4-tooltip w4-variant-primary" data-w4-tip="Primary">
                    Primary
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-variant-secondary" data-w4-tip="Secondary">
                    Secondary
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-variant-accent" data-w4-tip="Accent">
                    Accent
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-variant-info" data-w4-tip="Info">
                    Info
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-variant-success" data-w4-tip="Success">
                    Success
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-variant-warning" data-w4-tip="Warning">
                    Warning
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-variant-error" data-w4-tip="Error">
                    Error
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-variant-neutral" data-w4-tip="Neutral">
                    Neutral
                </button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info));">Estados</h2>
            <div class="preview-group">
                <button class="w4-button w4-button-md w4-tooltip" data-w4-tip="Normal tooltip">
                    Normal
                </button>
                <button class="w4-button w4-button-md w4-tooltip" data-w4-tip="Visible por estado open"
                    data-w4-state="open">
                    Forzado Open
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-tooltip-disabled" data-w4-tip="No debe mostrarse">
                    Disabled Tooltip
                </button>
                <button class="w4-button w4-button-md w4-tooltip w4-tooltip-hidden" data-w4-tip="Este no se ve">
                    Hidden Tooltip
                </button>
            </div>
            <p class="preview-note">
                Nota: en mobile, el script actual usa la clase <code>w4-tooltip-active</code>; en desktop la apertura se
                basa en hover/focus y en <code>data-w4-state="open"</code>.
            </p>
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