<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Radio Lab</title>
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
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Radio Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente de estado w4-radio</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Radio</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Radio</strong> (botón de opción) permite a los usuarios seleccionar una única
                opción de un conjunto mutuamente excluyente. A diferencia de los checkboxes, cuando se selecciona un
                radio button, cualquier otro botón previamente seleccionado en el mismo grupo se deselecciona
                automáticamente.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Selección de planes:</strong> Elegir un nivel de suscripción (Básico, Pro, Enterprise).</li>
                <li><strong>Métodos de pago:</strong> Seleccionar una única forma de pago (Tarjeta de crédito, PayPal,
                    Transferencia).</li>
                <li><strong>Preferencias únicas:</strong> Configurar opciones donde solo es válida una respuesta, como
                    el género, rango de edad o idioma principal.</li>
                <li><strong>Encuestas o exámenes:</strong> Preguntas de opción múltiple donde solo se admite una
                    respuesta correcta.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md" checked />
                    <span class="preview-label-desc">Default</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-primary" checked />
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-secondary" checked />
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-accent" checked />
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-info" checked />
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-success" checked />
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-warning" checked />
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-error" checked />
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-xs" checked />
                    <span class="preview-label-desc">XS (1rem)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-sm" checked />
                    <span class="preview-label-desc">SM (1.25rem)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-md" checked />
                    <span class="preview-label-desc">MD (1.5rem)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-lg" checked />
                    <span class="preview-label-desc">LG (2rem)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-xl" checked />
                    <span class="preview-label-desc">XL (2.5rem)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Estados Pseudo-Classes</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="radio" name="states" class="w4-radio w4-radio-primary w4-radio-md" />
                    <span class="preview-label-desc">Unchecked</span>
                </div>
                <div class="preview-item">
                    <input type="radio" name="states" class="w4-radio w4-radio-primary w4-radio-md" checked />
                    <span class="preview-label-desc">Checked</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Data-States / Validation
            </h2>
            <div class="preview-group">
                <div class="preview-item">
                    <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-disabled" checked />
                    <span class="preview-label-desc">Disabled (.w4-radio-disabled)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-readonly" checked />
                    <span class="preview-label-desc">Readonly (.w4-radio-readonly)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-invalid" />
                    <span class="preview-label-desc">Invalid (Border Error)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-valid" />
                    <span class="preview-label-desc">Valid (Border Success)</span>
                </div>
                <div class="preview-item">
                    <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-loading" checked />
                    <span class="preview-label-desc">Loading (.w4-radio-loading)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración con Labels</h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start;">

                <!-- Radio Group Example -->
                <div
                    style="display: flex; flex-direction: column; gap: 1rem; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm); inline-size: 300px;">
                    <span class="w4-label w4-label-md" style="font-weight: 700;">Selecciona un plan:</span>

                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        <input type="radio" id="rad_basic" name="plan" class="w4-radio w4-radio-primary w4-radio-md" />
                        <label for="rad_basic" class="w4-label w4-label-md" style="cursor: pointer;">Plan Básico</label>
                    </div>

                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        <input type="radio" id="rad_pro" name="plan" class="w4-radio w4-radio-primary w4-radio-md"
                            checked />
                        <label for="rad_pro" class="w4-label w4-label-primary w4-label-md"
                            style="cursor: pointer; font-weight: 600;">Plan Profesional</label>
                    </div>

                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        <input type="radio" id="rad_ent" name="plan"
                            class="w4-radio w4-radio-primary w4-radio-md w4-radio-disabled" disabled />
                        <label for="rad_ent" class="w4-label w4-label-md w4-label-disabled"
                            style="cursor: pointer;">Plan Enterprise (Próximamente)</label>
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