<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Label Lab</title>
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
            flex-direction: column;
            gap: 1.5rem;
            padding: 1.5rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            background-color: hsl(var(--w4-base-100));
            padding: 1rem;
            border-radius: var(--w4-radius-card);
            box-shadow: var(--w4-shadow-sm);
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.5);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Label Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-label</p>
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
            <div class="preview-group grid-container">
                <div class="preview-item">
                    <span class="preview-label-desc">Neutral (Default)</span>
                    <label class="w4-label w4-label-neutral">Dirección de Envío</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Primary</span>
                    <label class="w4-label w4-label-primary">Nombre de Usuario</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Secondary</span>
                    <label class="w4-label w4-label-secondary">Correo Electrónico</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Accent</span>
                    <label class="w4-label w4-label-accent">Contraseña Fuerte</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Info</span>
                    <label class="w4-label w4-label-info">Nota Informativa</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Success</span>
                    <label class="w4-label w4-label-success">Código Verificado</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Warning</span>
                    <label class="w4-label w4-label-warning">Alerta de Seguridad</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Error</span>
                    <label class="w4-label w4-label-error">Mensaje de Error</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Muted</span>
                    <label class="w4-label w4-label-muted">Texto Secundario</label>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">w4-label-xs</span>
                    <label class="w4-label w4-label-xs">Etiqueta Extra Pequeña</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-label-sm</span>
                    <label class="w4-label w4-label-sm">Etiqueta Pequeña</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-label-md (Default)</span>
                    <label class="w4-label w4-label-md">Etiqueta Mediana</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-label-lg</span>
                    <label class="w4-label w4-label-lg">Etiqueta Grande</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-label-xl</span>
                    <label class="w4-label w4-label-xl">Etiqueta Extra Grande</label>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes & Atributos)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">Normal</span>
                    <label class="w4-label">Etiqueta Normal</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Required (Agrega asterisco)</span>
                    <label class="w4-label w4-label-required">Campo Obligatorio</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Active (w4-label-active)</span>
                    <label class="w4-label w4-label-active">Etiqueta Activa</label>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Disabled (w4-label-disabled)</span>
                    <label class="w4-label w4-label-disabled">Etiqueta Deshabilitada</label>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="preview-group">
                <div class="preview-item" style="padding: 2rem;">
                    <div style="margin-block-end: 1.5rem;">
                        <label id="jsInteractiveLabel" class="w4-label w4-label-lg w4-label-primary"
                            data-w4-component="label">
                            Etiqueta Interactiva JS
                        </label>
                    </div>

                    <p
                        style="font-size: 0.875rem; color: hsl(var(--w4-base-content) / 0.7); margin-block-end: 0.5rem; margin-block-start: 0;">
                        Modifica el atributo <code>data-w4-state</code> en tiempo real usando estos botones:
                    </p>

                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLabel').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveLabel').setAttribute('data-w4-state', 'active')">Set
                            Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveLabel').setAttribute('data-w4-state', 'disabled')">Set
                            Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveLabel').setAttribute('data-w4-state', 'required')">Set
                            Required</button>
                        <button class="w4-button w4-button-sm w4-button-neutral"
                            onclick="document.getElementById('jsInteractiveLabel').setAttribute('data-w4-state', 'hidden')">Set
                            Hidden</button>
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