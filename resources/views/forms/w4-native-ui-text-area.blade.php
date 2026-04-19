<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Text Area Lab</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="w4-navbar w4-navbar-primary">
        <div class="w4-navbar-start">
            <button class="w4-button w4-button-ghost w4-button-square">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w4-icon w4-icon-md stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <button class="w4-button w4-button-ghost">Native UI</button>
        </div>
        <div class="w4-navbar-center">
            <a href="#" class="w4-button w4-button-link w4-button-neutral">DOCUMENTACION</a>
        </div>
        <div class="w4-navbar-end">
            <div class="w4-stack w4-stack-xs mx-2">
                <select id="themeSwitcher" class="w4-select w4-select-xs w4-select-neutral">
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
        </div>
    </div>

    <main class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Text Area</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente w4-textarea
            </p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Text Area</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Text Area</strong> permite a los usuarios introducir múltiples líneas de texto. Es
                esencial para capturar información extensa, como descripciones, comentarios o mensajes largos, donde un
                input de una sola línea sería insuficiente.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
                <li><strong class="w4-text-active">Comentarios y retroalimentación:</strong> Formularios de contacto o
                    reseñas donde los
                    usuarios dejan sus opiniones detalladas.</li>
                <li><strong class="w4-text-active">Descripciones de productos/perfiles:</strong> Áreas para que los
                    usuarios escriban
                    biografías largas o detalles de artículos.</li>
                <li><strong class="w4-text-active">Mensajería:</strong> Cajas de texto para redactar correos
                    electrónicos, mensajes directos o
                    publicaciones en foros.</li>
                <li><strong class="w4-text-active">Ingreso de código o datos en bruto:</strong> Captura de
                    configuraciones JSON, fragmentos de
                    código o direcciones largas.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-neutral">Default</label>
                        <textarea class="w4-textarea w4-textarea-md" placeholder="Escribe aquí tu mensaje..."
                            rows="3"></textarea>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-primary">Primary</label>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-primary"
                            placeholder="Enfoque principal..." rows="3"></textarea>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-secondary">Secondary</label>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-secondary" placeholder="Secundario..."
                            rows="3"></textarea>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-accent">Accent</label>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-accent" placeholder="Dato resaltado..."
                            rows="3"></textarea>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-info">Info</label>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-info" placeholder="Info text area..."
                            rows="3"></textarea>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-success">Success</label>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-success" placeholder="Dato válido..."
                            rows="3"></textarea>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-warning">Warning</label>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-warning" placeholder="Precaución..."
                            rows="3"></textarea>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-error">Error</label>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-error"
                            placeholder="Error al escribir..." rows="3"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Especiales & Resize
            </h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Ghost (Fondo transparente)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-ghost"
                            placeholder="Escribe algo aquí..." rows="3"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Resize None (.w4-textarea-resize-none)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-resize-none"
                            placeholder="No se puede redimensionar" rows="3"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Resize Vertical
                            (.w4-textarea-resize-vertical)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-resize-vertical"
                            placeholder="Solo vertical..." rows="3"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">XS (Font XS, Padding reducido)</span>
                        <textarea class="w4-textarea w4-textarea-xs w4-textarea-primary"
                            placeholder="Tamaño Extra Small" rows="2"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">SM (Font SM)</span>
                        <textarea class="w4-textarea w4-textarea-sm w4-textarea-primary" placeholder="Tamaño Small"
                            rows="3"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">MD (Default)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-primary" placeholder="Tamaño Medium"
                            rows="3"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">LG (Font LG)</span>
                        <textarea class="w4-textarea w4-textarea-lg w4-textarea-primary" placeholder="Tamaño Large"
                            rows="4"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">XL (Font XL)</span>
                        <textarea class="w4-textarea w4-textarea-xl w4-textarea-primary"
                            placeholder="Tamaño Extra Large" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Atributos HTML</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Normal</span>
                        <textarea class="w4-textarea w4-textarea-md" placeholder="Text Area normal..."
                            rows="3"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Focus (.w4-textarea-focus)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-focus" placeholder="Foco simulado..."
                            rows="3"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Disabled</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-disabled"
                            placeholder="No puedes escribir" disabled rows="3"></textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Readonly</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-readonly" readonly
                            rows="3">Este texto es de solo lectura y no puede ser modificado por el usuario.</textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Invalid (.w4-textarea-invalid)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-invalid"
                            rows="3">Este mensaje contiene palabras no permitidas.</textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Valid (.w4-textarea-valid)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-valid"
                            rows="3">Mensaje validado correctamente.</textarea>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Loading (.w4-textarea-loading)</span>
                        <textarea class="w4-textarea w4-textarea-md w4-textarea-loading" placeholder="Cargando datos..."
                            rows="3"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración Completa (Form Group)</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                    <!-- Caso de Uso 1: Formulario Normal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label for="comments" class="w4-label w4-label-md w4-label-required">Comentarios
                            Adicionales</label>
                        <textarea id="comments" class="w4-textarea w4-textarea-md"
                            placeholder="Cuéntanos más sobre tu requerimiento..." rows="4"></textarea>
                        <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted">
                            Por favor, sé lo más específico posible. Máximo 500 caracteres.
                        </span>
                    </div>

                    <!-- Caso de Uso 2: Error -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
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
            </div>
        </section>

    </main>

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