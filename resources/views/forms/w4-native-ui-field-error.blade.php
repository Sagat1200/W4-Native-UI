<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Field Error Lab</title>
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
            min-inline-size: 180px;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
            margin-block-start: auto;
        }

        /* Example icons for field errors */
        .icon-sm {
            inline-size: 16px;
            block-size: 16px;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Field Error Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para mensajes de validación (w4-field-error)</p>
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

        <section style="margin-block-end: 2rem; margin-block-start: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Field Error</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Field Error</strong> se utiliza para mostrar mensajes de validación o
                retroalimentación contextual asociados directamente a un campo de formulario específico. Ayuda a los
                usuarios a identificar y corregir errores de entrada de datos de forma clara y accesible.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Validación de formularios:</strong> Mostrar errores cuando un campo requerido está vacío o
                    tiene un formato incorrecto.</li>
                <li><strong>Retroalimentación de éxito:</strong> Indicar visualmente que un campo (como un nombre de
                    usuario) es válido o está disponible.</li>
                <li><strong>Reglas y sugerencias:</strong> Mostrar advertencias o reglas de formato (ej. "La contraseña
                    debe tener al menos 8 caracteres") debajo del input.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-field-error">Este campo es requerido.</span>
                    <span class="preview-label-desc">Default (Inherit Error)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-primary">Información principal necesaria.</span>
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-secondary">Sugerencia secundaria.</span>
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-accent">Atención requerida.</span>
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-info">La contraseña debe tener 8 caracteres.</span>
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-success">¡Nombre de usuario disponible!</span>
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-warning">El correo parece no ser corporativo.</span>
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-error">El formato de email es inválido.</span>
                    <span class="preview-label-desc">Error (Explicit)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-xs">Error tamaño XS (0.75rem)</span>
                    <span class="preview-label-desc">XS</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-sm">Error tamaño SM (0.875rem)</span>
                    <span class="preview-label-desc">SM (Default general)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-md">Error tamaño MD (1rem)</span>
                    <span class="preview-label-desc">MD</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-lg">Error tamaño LG (1.125rem)</span>
                    <span class="preview-label-desc">LG</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-xl">Error tamaño XL (1.25rem)</span>
                    <span class="preview-label-desc">XL</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Con Íconos (Inline Flex Gap)</h2>
            <div class="preview-group">
                <div class="preview-item" style="inline-size: 100%;">
                    <span class="w4-field-error w4-field-error-error">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        La contraseña ingresada no coincide con nuestros registros.
                    </span>
                    <span class="preview-label-desc">Error with SVG Icon</span>
                </div>
                <div class="preview-item" style="inline-size: 100%;">
                    <span class="w4-field-error w4-field-error-success">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        Cambios guardados correctamente.
                    </span>
                    <span class="preview-label-desc">Success with SVG Icon</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Data-States</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-field-error">Estado normal del mensaje.</span>
                    <span class="preview-label-desc">Normal</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-active">Estado activo (Más negrita).</span>
                    <span class="preview-label-desc">Active (.w4-field-error-active)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-field-error w4-field-error-disabled">Mensaje deshabilitado (Opaco).</span>
                    <span class="preview-label-desc">Disabled (.w4-field-error-disabled)</span>
                </div>
                <div class="preview-item">
                    <p style="margin: 0; color: hsl(var(--w4-base-content));">
                        Texto antes del error... <span class="w4-field-error w4-field-error-inline">Error en
                            línea</span> ...texto después.
                    </p>
                    <span class="preview-label-desc">Inline (.w4-field-error-inline)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración con Input de Formulario</h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start;">

                <!-- Field Group Example -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; inline-size: 100%; max-inline-size: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label style="font-weight: 500; font-size: 0.875rem;">Correo Electrónico</label>
                    <input type="text" value="usuario@invalido"
                        style="padding: 0.75rem; border-radius: var(--w4-radius-button); border: 1px solid hsl(var(--w4-error)); background: hsl(var(--w4-base-200)); color: hsl(var(--w4-base-content)); outline: none;" />
                    <span class="w4-field-error w4-field-error-sm w4-field-error-error"
                        style="margin-block-start: 0.25rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        El dominio del correo no está permitido.
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