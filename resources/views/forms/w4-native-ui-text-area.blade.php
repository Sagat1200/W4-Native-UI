<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Text Area Lab</title>
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
            inline-size: 100%;
            max-inline-size: 320px;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
            margin-block-start: auto;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Text Area Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-textarea</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Text Area</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Text Area</strong> permite a los usuarios introducir múltiples líneas de texto. Es
                esencial para capturar información extensa, como descripciones, comentarios o mensajes largos, donde un
                input de una sola línea sería insuficiente.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Comentarios y retroalimentación:</strong> Formularios de contacto o reseñas donde los
                    usuarios dejan sus opiniones detalladas.</li>
                <li><strong>Descripciones de productos/perfiles:</strong> Áreas para que los usuarios escriban
                    biografías largas o detalles de artículos.</li>
                <li><strong>Mensajería:</strong> Cajas de texto para redactar correos electrónicos, mensajes directos o
                    publicaciones en foros.</li>
                <li><strong>Ingreso de código o datos en bruto:</strong> Captura de configuraciones JSON, fragmentos de
                    código o direcciones largas.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md" placeholder="Escribe aquí tu mensaje..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Default (Base Content)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-primary" placeholder="Enfoque principal..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Primary</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-secondary" placeholder="Secundario..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Secondary</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-accent" placeholder="Dato resaltado..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Accent</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-info" placeholder="Info text area..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Info</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-success" placeholder="Dato válido..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Success</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-warning" placeholder="Precaución..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Warning</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-error" placeholder="Error al escribir..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Error</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Variantes Especiales & Resize</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-ghost" placeholder="Escribe algo aquí..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Ghost (Fondo transparente)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-resize-none"
                        placeholder="No se puede redimensionar" rows="3"></textarea>
                    <span class="preview-label-desc">Resize None (.w4-textarea-resize-none)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-resize-vertical"
                        placeholder="Solo vertical..." rows="3"></textarea>
                    <span class="preview-label-desc">Resize Vertical (.w4-textarea-resize-vertical)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-xs w4-textarea-primary" placeholder="Tamaño Extra Small"
                        rows="2"></textarea>
                    <span class="preview-label-desc">XS (Font XS, Padding reducido)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-sm w4-textarea-primary" placeholder="Tamaño Small"
                        rows="3"></textarea>
                    <span class="preview-label-desc">SM (Font SM)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-primary" placeholder="Tamaño Medium"
                        rows="3"></textarea>
                    <span class="preview-label-desc">MD (Default)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-lg w4-textarea-primary" placeholder="Tamaño Large"
                        rows="4"></textarea>
                    <span class="preview-label-desc">LG (Font LG)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-xl w4-textarea-primary" placeholder="Tamaño Extra Large"
                        rows="5"></textarea>
                    <span class="preview-label-desc">XL (Font XL)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Atributos HTML</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md" placeholder="Text Area normal..." rows="3"></textarea>
                    <span class="preview-label-desc">Normal</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-focus" placeholder="Foco simulado..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Focus (.w4-textarea-focus)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-disabled" placeholder="No puedes escribir"
                        disabled rows="3"></textarea>
                    <span class="preview-label-desc">Disabled (Atributo o .w4-textarea-disabled)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-readonly" readonly
                        rows="3">Este texto es de solo lectura y no puede ser modificado por el usuario.</textarea>
                    <span class="preview-label-desc">Readonly (Atributo o .w4-textarea-readonly)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-invalid"
                        rows="3">Este mensaje contiene palabras no permitidas.</textarea>
                    <span class="preview-label-desc">Invalid (.w4-textarea-invalid)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-valid"
                        rows="3">Mensaje validado correctamente.</textarea>
                    <span class="preview-label-desc">Valid (.w4-textarea-valid)</span>
                </div>
                <div class="preview-item">
                    <textarea class="w4-textarea w4-textarea-md w4-textarea-loading" placeholder="Cargando datos..."
                        rows="3"></textarea>
                    <span class="preview-label-desc">Loading (.w4-textarea-loading / Opacity Pulse)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración Completa (Form Group)</h2>
            <div class="preview-group" style="flex-direction: column; align-items: flex-start;">

                <!-- Caso de Uso 1: Formulario Normal -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; inline-size: 100%; max-inline-size: 500px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="comments" class="w4-label w4-label-md w4-label-required">Comentarios Adicionales</label>
                    <textarea id="comments" class="w4-textarea w4-textarea-md"
                        placeholder="Cuéntanos más sobre tu requerimiento..." rows="4"></textarea>
                    <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted">
                        Por favor, sé lo más específico posible. Máximo 500 caracteres.
                    </span>
                </div>

                <!-- Caso de Uso 2: Error -->
                <div
                    style="display: flex; flex-direction: column; gap: 0.5rem; inline-size: 100%; max-inline-size: 500px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-sm);">
                    <label for="bio" class="w4-label w4-label-md w4-label-error">Biografía</label>
                    <textarea id="bio" class="w4-textarea w4-textarea-md w4-textarea-invalid"
                        rows="4">Me llamo Juan y me gusta el #spam y los links extraños http://spam.com</textarea>
                    <span class="w4-field-error w4-field-error-sm w4-field-error-error">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Tu biografía contiene enlaces no permitidos.
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