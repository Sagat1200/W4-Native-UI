<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Select Lab</title>
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
            justify-content: flex-start;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 0.75rem;
            background-color: hsl(var(--w4-base-100));
            padding: 1.5rem;
            border-radius: var(--w4-radius-card);
            box-shadow: var(--w4-shadow-sm);
            width: 100%;
            max-width: 320px;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
            margin-top: auto;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Select Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-select</p>
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
                    <select class="w4-select w4-select-md">
                        <option disabled selected>Selecciona una opción</option>
                        <option>Homer Simpson</option>
                        <option>Marge Simpson</option>
                    </select>
                    <span class="preview-label-desc">Default</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-primary">
                        <option disabled selected>Opción Principal</option>
                        <option>Iron Man</option>
                        <option>Spider-Man</option>
                    </select>
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-secondary">
                        <option disabled selected>Opción Secundaria</option>
                        <option>Batman</option>
                        <option>Superman</option>
                    </select>
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-accent">
                        <option disabled selected>Dato Resaltado</option>
                        <option>Flash</option>
                        <option>Aquaman</option>
                    </select>
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-info">
                        <option disabled selected>Información</option>
                        <option>Documento PDF</option>
                        <option>Hoja de Cálculo</option>
                    </select>
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-success">
                        <option disabled selected>Acción Exitosa</option>
                        <option>Guardar y Continuar</option>
                        <option>Solo Guardar</option>
                    </select>
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-warning">
                        <option disabled selected>Precaución</option>
                        <option>Sobrescribir</option>
                        <option>Ignorar</option>
                    </select>
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-error">
                        <option disabled selected>Selección de Error</option>
                        <option>Forzar Borrado</option>
                        <option>Eliminar Todo</option>
                    </select>
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Variantes Especiales</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-ghost">
                        <option disabled selected>Select Ghost...</option>
                        <option>Opción 1</option>
                        <option>Opción 2</option>
                    </select>
                    <span class="preview-label-desc">Ghost (Fondo transparente)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <select class="w4-select w4-select-primary w4-select-xs">
                        <option disabled selected>Tamaño XS</option>
                        <option>Pequeño 1</option>
                    </select>
                    <span class="preview-label-desc">XS (0.75rem / Height XS)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-primary w4-select-sm">
                        <option disabled selected>Tamaño SM</option>
                        <option>Pequeño 2</option>
                    </select>
                    <span class="preview-label-desc">SM (0.875rem / Height SM)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-primary w4-select-md">
                        <option disabled selected>Tamaño MD (Default)</option>
                        <option>Normal</option>
                    </select>
                    <span class="preview-label-desc">MD (0.875rem / Height MD)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-primary w4-select-lg">
                        <option disabled selected>Tamaño LG</option>
                        <option>Grande</option>
                    </select>
                    <span class="preview-label-desc">LG (1.125rem / Height LG)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-primary w4-select-xl">
                        <option disabled selected>Tamaño XL</option>
                        <option>Muy Grande</option>
                    </select>
                    <span class="preview-label-desc">XL (1.25rem / Height XL)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Atributos HTML</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <select class="w4-select w4-select-md">
                        <option disabled selected>Select normal...</option>
                        <option>A</option>
                    </select>
                    <span class="preview-label-desc">Normal</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-focus">
                        <option disabled selected>Foco simulado...</option>
                        <option>B</option>
                    </select>
                    <span class="preview-label-desc">Focus (.w4-select-focus)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-disabled" disabled>
                        <option disabled selected>No puedes elegir</option>
                    </select>
                    <span class="preview-label-desc">Disabled (Atributo o .w4-select-disabled)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-readonly" readonly>
                        <option disabled selected>Solo lectura...</option>
                    </select>
                    <span class="preview-label-desc">Readonly (Atributo o .w4-select-readonly)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-invalid">
                        <option disabled selected>Selección inválida</option>
                    </select>
                    <span class="preview-label-desc">Invalid (.w4-select-invalid)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-valid">
                        <option disabled selected>Selección válida</option>
                    </select>
                    <span class="preview-label-desc">Valid (.w4-select-valid)</span>
                </div>
                <div class="preview-item">
                    <select class="w4-select w4-select-md w4-select-loading">
                        <option disabled selected>Cargando opciones...</option>
                    </select>
                    <span class="preview-label-desc">Loading (.w4-select-loading)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración con Label y Helper Text</h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start;">

                <!-- Caso de Uso 1: Éxito -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%; max-width: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="country" class="w4-label w4-label-md w4-label-required">País de Residencia</label>
                    <select id="country" class="w4-select w4-select-md w4-select-valid">
                        <option disabled>Selecciona tu país</option>
                        <option selected>México</option>
                        <option>Colombia</option>
                        <option>España</option>
                        <option>Argentina</option>
                    </select>
                    <span class="w4-helper-text w4-helper-text-sm w4-helper-text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        País verificado.
                    </span>
                </div>

                <!-- Caso de Uso 2: Error -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%; max-width: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="role" class="w4-label w4-label-md w4-label-error w4-label-required">Rol de
                        Usuario</label>
                    <select id="role" class="w4-select w4-select-md w4-select-invalid">
                        <option disabled selected>Selecciona un rol</option>
                        <option>Administrador</option>
                        <option>Editor</option>
                        <option>Lector</option>
                    </select>
                    <span class="w4-field-error w4-field-error-sm w4-field-error-error">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Debes seleccionar un rol válido.
                    </span>
                </div>

                <!-- Caso de Uso 3: Normal con helper -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%; max-width: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="secondaryThemeSwitcher" class="w4-label w4-label-md">Preferencia de Tema</label>
                    <select id="secondaryThemeSwitcher" class="w4-select w4-select-md">
                        <option disabled selected>Por defecto del sistema</option>
                        <option value="native-ui.light">Light</option>
                        <option value="native-ui.dark">Dark</option>
                        <option value="native-ui.corporate">Corporate</option>
                    </select>
                    <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted">
                        Esta configuración solo afectará a tu cuenta en este dispositivo.
                    </span>
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
            var mainSwitcher = document.getElementById("themeSwitcher");
            var secondarySwitcher = document.getElementById("secondaryThemeSwitcher");

            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";
            document.documentElement.setAttribute("data-theme", currentTheme);

            function updateTheme(theme) {
                document.documentElement.setAttribute("data-theme", theme);
                localStorage.setItem(storageKey, theme);

                // Sync both selects if they exist
                if (mainSwitcher) mainSwitcher.value = theme;
                if (secondarySwitcher) secondarySwitcher.value = theme;
            }

            if (mainSwitcher) {
                mainSwitcher.value = currentTheme;
                mainSwitcher.addEventListener("change", function (event) {
                    updateTheme(event.target.value);
                });
            }

            if (secondarySwitcher) {
                secondarySwitcher.value = currentTheme;
                secondarySwitcher.addEventListener("change", function (event) {
                    updateTheme(event.target.value);
                });
            }
        });
    </script>
</body>

</html>