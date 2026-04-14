<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Input Lab</title>
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
                <h1 class="lab-title">W4 Native: Input Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-input</p>
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
                    <input type="text" class="w4-input w4-input-md" placeholder="Escribe aquí..." />
                    <span class="preview-label-desc">Default (Base Content)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-primary"
                        placeholder="Enfoque principal..." />
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-secondary" placeholder="Secundario..." />
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-accent" placeholder="Dato resaltado..." />
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-info" placeholder="Info input..." />
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-success" placeholder="Dato válido..." />
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-warning" placeholder="Precaución..." />
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-error" placeholder="Error al escribir..." />
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Variantes Especiales</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-ghost" placeholder="Escribe algo aquí..." />
                    <span class="preview-label-desc">Ghost (Fondo transparente)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-xs w4-input-primary" placeholder="Tamaño Extra Small" />
                    <span class="preview-label-desc">XS (0.75rem / Height XS)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-sm w4-input-primary" placeholder="Tamaño Small" />
                    <span class="preview-label-desc">SM (0.875rem / Height SM)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-primary" placeholder="Tamaño Medium" />
                    <span class="preview-label-desc">MD (0.875rem / Height MD) Default</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-lg w4-input-primary" placeholder="Tamaño Large" />
                    <span class="preview-label-desc">LG (1.125rem / Height LG)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-xl w4-input-primary" placeholder="Tamaño Extra Large" />
                    <span class="preview-label-desc">XL (1.25rem / Height XL)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Atributos HTML</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md" placeholder="Input normal..." />
                    <span class="preview-label-desc">Normal</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-focus" placeholder="Foco simulado..." />
                    <span class="preview-label-desc">Focus (.w4-input-focus)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-disabled" placeholder="No puedes escribir"
                        disabled />
                    <span class="preview-label-desc">Disabled (Atributo o .w4-input-disabled)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-readonly" value="Solo lectura..."
                        readonly />
                    <span class="preview-label-desc">Readonly (Atributo o .w4-input-readonly)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-invalid" value="usuario@invalido" />
                    <span class="preview-label-desc">Invalid (.w4-input-invalid)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-valid" value="usuario@valido.com" />
                    <span class="preview-label-desc">Valid (.w4-input-valid)</span>
                </div>
                <div class="preview-item">
                    <input type="text" class="w4-input w4-input-md w4-input-loading" placeholder="Cargando datos..." />
                    <span class="preview-label-desc">Loading (.w4-input-loading / Opacity Pulse)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración con Label y Helper Text</h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start;">

                <!-- Caso de Uso 1: Éxito -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%; max-width: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="username" class="w4-label w4-label-md w4-label-required">Nombre de Usuario</label>
                    <input type="text" id="username" class="w4-input w4-input-md w4-input-valid" value="w4_admin_pro" />
                    <span class="w4-helper-text w4-helper-text-sm w4-helper-text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        Nombre de usuario disponible.
                    </span>
                </div>

                <!-- Caso de Uso 2: Error -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%; max-width: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="email" class="w4-label w4-label-md w4-label-error w4-label-required">Correo
                        Electrónico</label>
                    <input type="email" id="email" class="w4-input w4-input-md w4-input-invalid"
                        value="correo.invalido" />
                    <span class="w4-field-error w4-field-error-sm w4-field-error-error">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        El dominio no pertenece a la empresa.
                    </span>
                </div>

                <!-- Caso de Uso 3: Normal con helper -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%; max-width: 400px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="api_key" class="w4-label w4-label-md">Clave de API</label>
                    <input type="text" id="api_key" class="w4-input w4-input-md" placeholder="sk_live_123456789..." />
                    <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted">
                        Asegúrate de no compartir tu clave de API en repositorios públicos.
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