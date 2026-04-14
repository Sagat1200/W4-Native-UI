<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Checkbox Lab</title>
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

        .label-text {
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Checkbox Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente de estado w4-checkbox</p>
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
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md" checked />
                    <span class="preview-label-desc">Default</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-primary" checked />
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-secondary" checked />
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-accent" checked />
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-info" checked />
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-success" checked />
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-warning" checked />
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-error" checked />
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-xs" checked />
                    <span class="preview-label-desc">XS (1rem)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-sm" checked />
                    <span class="preview-label-desc">SM (1.25rem)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" checked />
                    <span class="preview-label-desc">MD (1.5rem)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-lg" checked />
                    <span class="preview-label-desc">LG (2rem)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-xl" checked />
                    <span class="preview-label-desc">XL (2.5rem)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Estados Pseudo-Classes</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" />
                    <span class="preview-label-desc">Unchecked</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" checked />
                    <span class="preview-label-desc">Checked</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" id="indetCheck" />
                    <span class="preview-label-desc">Indeterminate</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Data-States / Validation
            </h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-disabled"
                        checked />
                    <span class="preview-label-desc">Disabled (.w4-checkbox-disabled)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-readonly"
                        checked />
                    <span class="preview-label-desc">Readonly (.w4-checkbox-readonly)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-invalid" />
                    <span class="preview-label-desc">Invalid (Border Error)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-valid" />
                    <span class="preview-label-desc">Valid (Border Success)</span>
                </div>
                <div class="preview-item">
                    <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-loading"
                        checked />
                    <span class="preview-label-desc">Loading (.w4-checkbox-loading)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración con Labels</h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start;">

                <!-- Label Right -->
                <div
                    style="display: flex; gap: 0.75rem; align-items: center; background: hsl(var(--w4-base-100)); padding: 1rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm); width: 300px;">
                    <input type="checkbox" id="chk1" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" />
                    <label for="chk1" class="w4-label w4-label-primary w4-label-md" style="cursor: pointer;">Aceptar
                        términos y
                        condiciones</label>
                </div>

                <!-- Label Left -->
                <div
                    style="display: flex; gap: 0.75rem; align-items: center; justify-content: space-between; background: hsl(var(--w4-base-100)); padding: 1rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm); width: 300px;">
                    <label for="chk2" class="w4-label w4-label-secondary w4-label-md" style="cursor: pointer;">Recibir
                        notificaciones</label>
                    <input type="checkbox" id="chk2" class="w4-checkbox w4-checkbox-secondary w4-checkbox-md" checked />
                </div>

                <!-- Label Required and Error -->
                <div
                    style="display: flex; gap: 0.75rem; align-items: center; background: hsl(var(--w4-base-100)); padding: 1rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm); width: 300px; border: 1px solid hsl(var(--w4-error));">
                    <input type="checkbox" id="chk3"
                        class="w4-checkbox w4-checkbox-error w4-checkbox-md w4-checkbox-invalid" />
                    <label for="chk3" class="w4-label w4-label-md w4-label-error w4-label-required"
                        style="cursor: pointer;">Acepto la política de privacidad</label>
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

            // Set indeterminate state for the specific checkbox
            document.getElementById("indetCheck").indeterminate = true;
        });
    </script>
</body>

</html>