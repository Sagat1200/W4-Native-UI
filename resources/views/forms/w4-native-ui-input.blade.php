<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Input Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Input</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente w4-input
            </p>
        </div>

        <div class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Input</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Input</strong> es el elemento principal para la entrada de texto libre por parte
                del usuario. Permite capturar datos como nombres, correos electrónicos, contraseñas o números, y es
                fundamental para cualquier formulario interactivo.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong class="w4-text-active">Captura de datos personales:</strong> Para solicitar información como
                    nombre, apellido o
                    dirección.</li>
                <li><strong class="w4-text-active">Credenciales de acceso:</strong> Campos de correo electrónico y
                    contraseña en formularios de
                    inicio de sesión o registro.</li>
                <li><strong class="w4-text-active">Búsqueda y filtrado:</strong> Barras de búsqueda para encontrar
                    contenido específico dentro
                    de la aplicación.</li>
                <li><strong class="w4-text-active">Entrada de texto general:</strong> Captura de cantidades numéricas,
                    códigos postales o
                    identificadores cortos.</li>
            </ul>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-neutral">Default (Base Content)</span>
                        <input type="text" class="w4-input w4-input-md" placeholder="Escribe aquí..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-primary">Primary</span>
                        <input type="text" class="w4-input w4-input-md w4-input-primary"
                            placeholder="Enfoque principal..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-secondary">Secondary</span>
                        <input type="text" class="w4-input w4-input-md w4-input-secondary"
                            placeholder="Secundario..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-accent">Accent</span>
                        <input type="text" class="w4-input w4-input-md w4-input-accent"
                            placeholder="Dato resaltado..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-info">Info</span>
                        <input type="text" class="w4-input w4-input-md w4-input-info" placeholder="Info input..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-success">Success</span>
                        <input type="text" class="w4-input w4-input-md w4-input-success" placeholder="Dato válido..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-warning">Warning</span>
                        <input type="text" class="w4-input w4-input-md w4-input-warning" placeholder="Precaución..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs w4-label-error">Error</span>
                        <input type="text" class="w4-input w4-input-md w4-input-error"
                            placeholder="Error al escribir..." />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Especiales</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Ghost (Fondo transparente)</span>
                        <input type="text" class="w4-input w4-input-md w4-input-ghost"
                            placeholder="Escribe algo aquí..." />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">XS (0.75rem / Height XS)</span>
                        <input type="text" class="w4-input w4-input-xs w4-input-primary"
                            placeholder="Tamaño Extra Small" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">SM (0.875rem / Height SM)</span>
                        <input type="text" class="w4-input w4-input-sm w4-input-primary" placeholder="Tamaño Small" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">MD (0.875rem / Height MD) Default</span>
                        <input type="text" class="w4-input w4-input-md w4-input-primary" placeholder="Tamaño Medium" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">LG (1.125rem / Height LG)</span>
                        <input type="text" class="w4-input w4-input-lg w4-input-primary" placeholder="Tamaño Large" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">XL (1.25rem / Height XL)</span>
                        <input type="text" class="w4-input w4-input-xl w4-input-primary"
                            placeholder="Tamaño Extra Large" />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Atributos HTML</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Normal</span>
                        <input type="text" class="w4-input w4-input-md" placeholder="Input normal..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Focus (.w4-input-focus)</span>
                        <input type="text" class="w4-input w4-input-md w4-input-focus" placeholder="Foco simulado..." />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Disabled (Atributo o .w4-input-disabled)</span>
                        <input type="text" class="w4-input w4-input-md w4-input-disabled"
                            placeholder="No puedes escribir" disabled />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Readonly (Atributo o .w4-input-readonly)</span>
                        <input type="text" class="w4-input w4-input-md w4-input-readonly" value="Solo lectura..."
                            readonly />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Invalid (.w4-input-invalid)</span>
                        <input type="text" class="w4-input w4-input-md w4-input-invalid" value="usuario@invalido" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Valid (.w4-input-valid)</span>
                        <input type="text" class="w4-input w4-input-md w4-input-valid" value="usuario@valido.com" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-label w4-label-xs">Loading (.w4-input-loading / Opacity Pulse)</span>
                        <input type="text" class="w4-input w4-input-md w4-input-loading"
                            placeholder="Cargando datos..." />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración con Label y Helper Text
            </h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">

                    <!-- Caso de Uso 1: Éxito -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label for="username" class="w4-label w4-label-md w4-label-required">Nombre de Usuario</label>
                        <input type="text" id="username" class="w4-input w4-input-md w4-input-valid w4-input-bordered"
                            value="w4_admin_pro" />
                        <span
                            class="w4-helper-text w4-helper-text-sm w4-helper-text-success w4-stack w4-stack-horizontal w4-stack-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w4-icon w4-icon-sm">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Nombre de usuario disponible.
                        </span>
                    </div>

                    <!-- Caso de Uso 2: Error -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label for="email" class="w4-label w4-label-md w4-label-error w4-label-required">Correo
                            Electrónico</label>
                        <input type="email" id="email" class="w4-input w4-input-md w4-input-invalid w4-input-bordered"
                            value="correo.invalido" />
                        <span
                            class="w4-field-error w4-field-error-sm w4-field-error-error w4-stack w4-stack-horizontal w4-stack-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w4-icon w4-icon-sm">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            El dominio no pertenece a la empresa.
                        </span>
                    </div>

                    <!-- Caso de Uso 3: Normal con helper -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label for="api_key" class="w4-label w4-label-md">Clave de API</label>
                        <input type="text" id="api_key" class="w4-input w4-input-md w4-input-bordered"
                            placeholder="sk_live_123456789..." />
                        <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted">
                            Asegúrate de no compartir tu clave de API en repositorios públicos.
                        </span>
                    </div>

                </div>
            </div>
        </section>
    </main>

    @NativeUIScripts
    @NativeUIInit

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