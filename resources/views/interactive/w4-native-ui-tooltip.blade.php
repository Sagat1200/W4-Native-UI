<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Tooltip Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Tooltip</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente de estado
                w4-tooltip</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Tooltip</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Tooltip</strong> (información sobre herramientas) proporciona texto explicativo o
                contexto adicional cuando un usuario pasa el cursor (hover) o enfoca un elemento. Ayuda a mantener la
                interfaz limpia ocultando detalles secundarios hasta que son necesarios.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
                <li><strong>Botones con solo íconos:</strong> Explicar la acción de un botón que no tiene texto visible
                    (ej. ícono de papelera &rarr; "Eliminar").</li>
                <li><strong>Aclaración de términos:</strong> Proporcionar definiciones de términos técnicos o acrónimos
                    sin saturar el texto principal.</li>
                <li><strong>Información de estado:</strong> Mostrar el motivo por el cual un botón o campo está
                    deshabilitado.</li>
                <li><strong>Fechas relativas:</strong> Mostrar la fecha y hora exacta al pasar el cursor sobre una fecha
                    relativa como "hace 2 horas".</li>
            </ul>
        </section>

        <!-- POSICIONAMIENTO -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Alineación y Posicionamiento</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-4">

                    <!-- Top (Default) -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Top (.w4-tooltip-top)</span>
                        <div class="w4-tooltip w4-tooltip-top mt-6" data-w4-tip="Tooltip en la parte superior">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Top</button>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Right (.w4-tooltip-right)</span>
                        <div class="w4-tooltip w4-tooltip-right mt-6" data-w4-tip="Tooltip a la derecha">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Right</button>
                        </div>
                    </div>

                    <!-- Bottom -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Bottom (.w4-tooltip-bottom)</span>
                        <div class="w4-tooltip w4-tooltip-bottom mt-6" data-w4-tip="Tooltip en la parte inferior">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Bottom</button>
                        </div>
                    </div>

                    <!-- Left -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Left (.w4-tooltip-left)</span>
                        <div class="w4-tooltip w4-tooltip-left mt-6" data-w4-tip="Tooltip a la izquierda">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Left</button>
                        </div>
                    </div>

                    <!-- Top Left -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Top Left (.w4-tooltip-top-left)</span>
                        <div class="w4-tooltip w4-tooltip-top-left mt-6" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Top Left</button>
                        </div>
                    </div>

                    <!-- Top Right -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Top Right
                            (.w4-tooltip-top-right)</span>
                        <div class="w4-tooltip w4-tooltip-top-right mt-6" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Top Right</button>
                        </div>
                    </div>

                    <!-- Bottom Left -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Bottom Left
                            (.w4-tooltip-bottom-left)</span>
                        <div class="w4-tooltip w4-tooltip-bottom-left mt-6" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Bottom Left</button>
                        </div>
                    </div>

                    <!-- Bottom Right -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Bottom Right
                            (.w4-tooltip-bottom-right)</span>
                        <div class="w4-tooltip w4-tooltip-bottom-right mt-6" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-neutral w4-button-md">Hover Bottom Right</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- VARIANTES SEMÁNTICAS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Semánticas (Colores)
            </h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-4">

                    <!-- Neutral -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-neutral</span>
                        <div class="w4-tooltip w4-tooltip-neutral" data-w4-tip="Neutro por defecto">
                            <button class="w4-button w4-button-neutral w4-button-md w4-button-outline">Neutral</button>
                        </div>
                    </div>

                    <!-- Primary -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-primary</span>
                        <div class="w4-tooltip w4-tooltip-primary w4-tooltip-right" data-w4-tip="Mensaje principal">
                            <button class="w4-button w4-button-primary w4-button-md w4-button-outline">Primary</button>
                        </div>
                    </div>

                    <!-- Secondary -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-secondary</span>
                        <div class="w4-tooltip w4-tooltip-secondary" data-w4-tip="Información secundaria">
                            <button
                                class="w4-button w4-button-secondary w4-button-md w4-button-outline">Secondary</button>
                        </div>
                    </div>

                    <!-- Accent -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-accent</span>
                        <div class="w4-tooltip w4-tooltip-accent w4-tooltip-bottom" data-w4-tip="Destacado / Acento">
                            <button class="w4-button w4-button-accent w4-button-md w4-button-outline">Accent</button>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-info</span>
                        <div class="w4-tooltip w4-tooltip-info" data-w4-tip="Información general">
                            <button class="w4-button w4-button-info w4-button-md w4-button-outline">Info</button>
                        </div>
                    </div>

                    <!-- Success -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-success</span>
                        <div class="w4-tooltip w4-tooltip-success" data-w4-tip="¡Operación completada!">
                            <button class="w4-button w4-button-success w4-button-md w4-button-outline">Success</button>
                        </div>
                    </div>

                    <!-- Warning -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-warning</span>
                        <div class="w4-tooltip w4-tooltip-warning" data-w4-tip="Advertencia: revisa esto">
                            <button class="w4-button w4-button-warning w4-button-md w4-button-outline">Warning</button>
                        </div>
                    </div>

                    <!-- Error -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">.w4-tooltip-error</span>
                        <div class="w4-tooltip w4-tooltip-error" data-w4-tip="Ocurrió un error crítico">
                            <button class="w4-button w4-button-error w4-button-md w4-button-outline">Error</button>
                        </div>
                    </div>

                    <!-- Primary Top Left -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Primary (Top Left)</span>
                        <div class="w4-tooltip w4-tooltip-primary w4-tooltip-top-left" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-primary w4-button-md w4-button-outline">Hover Top
                                Left</button>
                        </div>
                    </div>

                    <!-- Primary Top Right -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Primary (Top Right)</span>
                        <div class="w4-tooltip w4-tooltip-primary w4-tooltip-top-right" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-primary w4-button-md w4-button-outline">Hover Top
                                Right</button>
                        </div>
                    </div>

                    <!-- Primary Bottom Left -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Primary (Bottom Left)</span>
                        <div class="w4-tooltip w4-tooltip-primary w4-tooltip-bottom-left" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-primary w4-button-md w4-button-outline">Hover Bottom
                                Left</button>
                        </div>
                    </div>

                    <!-- Primary Bottom Right -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted w4-mb-4">Primary (Bottom Right)</span>
                        <div class="w4-tooltip w4-tooltip-primary w4-tooltip-bottom-right" data-w4-tip="Native-UI">
                            <button class="w4-button w4-button-primary w4-button-md w4-button-outline">Hover Bottom
                                Right</button>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- ESTADOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS (Clases Estáticas)</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">

                <h3 class="w4-heading w4-heading-h4 w4-heading-error w4-mb-4">Modificadores de Estado (.w4-tooltip-*)
                </h3>
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-wrap mt-10">

                    <!-- Open Force (CSS) -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <div class="w4-tooltip w4-tooltip-open" data-w4-tip="Siempre visible">
                            <button class="w4-button w4-button-neutral w4-button-sm">Forzado Abierto
                                (.w4-tooltip-open)</button>
                        </div>
                    </div>

                    <!-- Hidden (CSS) -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <div class="w4-tooltip w4-tooltip-hidden" data-w4-tip="Nunca verás esto">
                            <button class="w4-button w4-button-neutral w4-button-sm">Oculto
                                (.w4-tooltip-hidden)</button>
                        </div>
                    </div>

                    <!-- Disabled (CSS) -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <div class="w4-tooltip w4-tooltip-disabled" data-w4-tip="No se muestra y está gris">
                            <button class="w4-button w4-button-neutral w4-button-sm">Deshabilitado
                                (.w4-tooltip-disabled)</button>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ESTADOS DINÁMICOS JS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Estados Dinámicos JS (w4-state)
            </h2>
            <hr class="w4-divider w4-divider-success">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">

                <h3 class="w4-heading w4-heading-h4 w4-heading-success w4-mb-4">Inyección por API (data-w4-state)</h3>
                <div class="w4-stack w4-stack-horizontal w4-stack-between w4-stack-center w-full mt-6">

                    <!-- Elemento Tooltip Interactivo -->
                    <div id="jsInteractiveTooltip" class="w4-tooltip w4-tooltip-primary" data-w4-tip="¡Soy interactivo!"
                        data-w4-component="tooltip">
                        <button class="w4-button w4-button-primary">
                            Hover sobre mí
                        </button>
                    </div>

                    <!-- Botonera de inyección de estados JS -->
                    <div
                        class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center w4-stack-wrap w4-border-s w4-border-base-300 w4-ps-4">
                        <span class="w4-text w4-text-sm w4-text-muted w4-me-2">Set State:</span>

                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveTooltip').removeAttribute('data-w4-state')">Clear</button>

                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveTooltip').setAttribute('data-w4-state', 'open')">Open</button>

                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveTooltip').setAttribute('data-w4-state', 'disabled')">Disabled</button>

                        <button class="w4-button w4-button-sm w4-button-secondary"
                            onclick="document.getElementById('jsInteractiveTooltip').setAttribute('data-w4-state', 'active')">Active</button>

                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveTooltip').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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