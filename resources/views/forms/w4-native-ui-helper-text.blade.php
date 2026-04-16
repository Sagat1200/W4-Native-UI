<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Helper Text Lab</title>
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

        /* Example icons */
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
                <h1 class="lab-title">W4 Native: Helper Text Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para textos de ayuda (w4-helper-text)</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Helper Text</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Helper Text</strong> proporciona contexto adicional o instrucciones breves debajo
                de los elementos de formulario. Ayuda a guiar al usuario indicando el formato esperado, restricciones o
                aclarando el propósito de un campo antes de que interactúen con él.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Requisitos de formato:</strong> Indicar cómo debe ingresarse un dato (ej. "Usa formato
                    DD/MM/AAAA").</li>
                <li><strong>Explicación de propósito:</strong> Aclarar para qué se usará la información (ej. "Tu correo
                    no será compartido").</li>
                <li><strong>Límites y restricciones:</strong> Informar sobre límites de caracteres o tamaños de archivo
                    máximos.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-helper-text">Escribe tu nombre completo.</span>
                    <span class="preview-label-desc">Default (Base Content + Opacity)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-primary">Texto de ayuda primario.</span>
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-secondary">Información adicional.</span>
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-accent">Dato importante a considerar.</span>
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-info">La contraseña debe ser alfanumérica.</span>
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-success">Usuario disponible.</span>
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-warning">Este campo es sensible.</span>
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-error">No compartas esta clave.</span>
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-xs">Ayuda tamaño XS (0.75rem)</span>
                    <span class="preview-label-desc">XS</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-sm">Ayuda tamaño SM (0.875rem)</span>
                    <span class="preview-label-desc">SM (Default)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-md">Ayuda tamaño MD (1rem)</span>
                    <span class="preview-label-desc">MD</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-lg">Ayuda tamaño LG (1.125rem)</span>
                    <span class="preview-label-desc">LG</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-xl">Ayuda tamaño XL (1.25rem)</span>
                    <span class="preview-label-desc">XL</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Estados CSS / Opacidad</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="w4-helper-text">Texto de ayuda normal (80% opacidad).</span>
                    <span class="preview-label-desc">Normal (Default)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-muted">Texto de ayuda atenuado (65% opacidad).</span>
                    <span class="preview-label-desc">Muted (.w4-helper-text-muted)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-active">Texto de ayuda resaltado (100% opacidad).</span>
                    <span class="preview-label-desc">Active (.w4-helper-text-active)</span>
                </div>
                <div class="preview-item">
                    <span class="w4-helper-text w4-helper-text-disabled">Texto de ayuda deshabilitado (45%
                        opacidad).</span>
                    <span class="preview-label-desc">Disabled (.w4-helper-text-disabled)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Con Íconos (Inline Flex Gap)</h2>
            <div class="preview-group">
                <div class="preview-item" style="inline-size: 100%;">
                    <span class="w4-helper-text w4-helper-text-info">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Asegúrate de usar letras mayúsculas y minúsculas.
                    </span>
                    <span class="preview-label-desc">Info with SVG Icon</span>
                </div>
                <div class="preview-item" style="inline-size: 100%;">
                    <span class="w4-helper-text w4-helper-text-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        La visibilidad de tu perfil cambiará a pública.
                    </span>
                    <span class="preview-label-desc">Warning with SVG Icon</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración con Input de Formulario</h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start;">

                <!-- Field Group Example -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; inline-size: 100%; max-inline-size: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label style="font-weight: 500; font-size: 0.875rem;">Nombre de Usuario</label>
                    <input type="text" placeholder="ej. w4_admin"
                        style="padding: 0.75rem; border-radius: var(--w4-radius-button); border: 1px solid hsl(var(--w4-base-300)); background: hsl(var(--w4-base-200)); color: hsl(var(--w4-base-content)); outline: none;" />
                    <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted"
                        style="margin-block-start: 0.25rem;">
                        Este será el nombre visible públicamente en tu perfil. No utilices caracteres especiales.
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