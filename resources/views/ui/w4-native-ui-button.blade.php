<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Button Lab</title>
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
            <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-neutral-content w4-menu-md">
                <li class="w4-text w4-text-primary-content"><a href="">Home</a></li>
                <li class="w4-text w4-text-primary-content"><a href="">Documentacion</a></li>
                <li class="w4-text w4-text-primary-content"><a href="">Productos</a></li>
                <li class="w4-text w4-text-primary-content"><a href="">Contacto</a></li>
            </ul>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Button</h1>
            <p class="w4-text w4-text-primary w4-text-center">Entorno de pruebas visuales para el componente
                w4-button</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Button</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Button</strong> es un elemento de interfaz fundamental utilizado para desencadenar
                acciones.
                Soporta múltiples variantes semánticas, tamaños, formas y estados de interacción.
            </p>
            <h2 class="w4-heading w4-heading-h3 w4-heading-primary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Formularios:</strong> Enviar, guardar o cancelar datos (usando
                    Primary, Secondary o Ghost).</li>
                <li><strong class="w4-text-active">Acciones destructivas:</strong> Eliminar registros (usando variante
                    Error).</li>
                <li><strong class="w4-text-active">Navegación:</strong> Simular enlaces con la variante Link o
                    integrarlos en Sidebars.</li>
                <li><strong class="w4-text-active">Procesamiento:</strong> Mostrar retroalimentación asíncrona con el
                    estado <code>data-w4-state="loading"</code>.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Variantes de colores semánticos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Botones con colores del sistema semántico.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                    <button class="w4-button w4-button-neutral">Neutral</button>
                    <button class="w4-button w4-button-primary">Primary</button>
                    <button class="w4-button w4-button-secondary">Secondary</button>
                    <button class="w4-button w4-button-accent">Accent</button>
                    <button class="w4-button w4-button-info">Info</button>
                    <button class="w4-button w4-button-success">Success</button>
                    <button class="w4-button w4-button-warning">Warning</button>
                    <button class="w4-button w4-button-error">Error</button>
                    <button class="w4-button w4-button-ghost">Ghost</button>
                    <button class="w4-button w4-button-link">Link</button>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Botones con semantica de contorno</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estilos visuales alternativos para priorizar o suavizar acciones.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                <button class="w4-button w4-button-outline w4-button-neutral">Neutral</button>
                <button class="w4-button w4-button-outline w4-button-primary">Primary</button>
                <button class="w4-button w4-button-outline w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-outline w4-button-accent">Accent</button>
                <button class="w4-button w4-button-outline w4-button-info">Info</button>
                <button class="w4-button w4-button-outline w4-button-success">Success</button>
                <button class="w4-button w4-button-outline w4-button-warning">Warning</button>
                <button class="w4-button w4-button-outline w4-button-error">Error</button>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Botones con semantica de fondo suave</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estilos visuales alternativos para mostrar acciones con fondo suave.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                <button class="w4-button w4-button-soft">Neutral</button>
                <button class="w4-button w4-button-soft w4-button-primary">Primary</button>
                <button class="w4-button w4-button-soft w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-soft w4-button-accent">Accent</button>
                <button class="w4-button w4-button-soft w4-button-info">Info</button>
                <button class="w4-button w4-button-soft w4-button-success">Success</button>
                <button class="w4-button w4-button-soft w4-button-warning">Warning</button>
                <button class="w4-button w4-button-soft w4-button-error">Error</button>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Botones con semantica de contorno discontinuo</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estilos visuales alternativos para mostrar acciones con contorno discontinuo.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                <button class="w4-button w4-button-dash w4-button-neutral">Neutral</button>
                <button class="w4-button w4-button-dash w4-button-primary">Primary</button>
                <button class="w4-button w4-button-dash w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-dash w4-button-accent">Accent</button>
                <button class="w4-button w4-button-dash w4-button-info">Info</button>
                <button class="w4-button w4-button-dash w4-button-success">Success</button>
                <button class="w4-button w4-button-dash w4-button-warning">Warning</button>
                <button class="w4-button w4-button-dash w4-button-error">Error</button>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Escalas morfológicas del botón.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                    <button class="w4-button w4-button-primary w4-button-xs">XSmall</button>
                    <button class="w4-button w4-button-primary w4-button-sm">Small</button>
                    <button class="w4-button w4-button-primary w4-button-md">Medium</button>
                    <button class="w4-button w4-button-primary w4-button-lg">Large</button>
                    <button class="w4-button w4-button-primary w4-button-xl">XLarge</button>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Formas y Layout</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Modificadores de forma y distribución.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Square / Circle</h3>
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                        <button class="w4-button w4-button-secondary w4-button-square" aria-label="Square">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="w4-icon w4-icon-md stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                        </button>
                        <button class="w4-button w4-button-accent w4-button-circle" aria-label="Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="w4-icon w4-icon-md stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v12m6-6H6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Block</h3>
                    <div class="w4-stack w4-stack-sm">
                        <button class="w4-button w4-button-primary w4-button-block">Acción Principal</button>
                        <button class="w4-button w4-button-outline w4-button-secondary w4-button-block">Acción
                            Secundaria</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estados soportados por clases y atributos.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Por Clase</h3>
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                        <button class="w4-button w4-button-primary w4-button-active">Active</button>
                        <button class="w4-button w4-button-secondary w4-button-disabled">Disabled</button>
                        <button class="w4-button w4-button-info w4-button-loading">Loading</button>
                        <button class="w4-button w4-button-warning w4-button-readonly">Readonly</button>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                        <button class="w4-button w4-button-primary"
                            data-w4-state="active">data-w4-state="active"</button>
                        <button class="w4-button w4-button-secondary" disabled>disabled</button>
                        <button class="w4-button w4-button-info"
                            data-w4-state="loading">data-w4-state="loading"</button>
                        <button class="w4-button w4-button-warning" readonly>readonly</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Estados JS Soportados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Controles para probar transiciones del componente usando <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                        <button id="labButtonTarget" class="w4-button w4-button-primary w4-button-md">Botón de
                            Prueba</button>
                    </div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                        <button class="w4-button w4-button-sm w4-button-neutral"
                            onclick="setButtonState('enabled')">Enabled</button>
                        <button class="w4-button w4-button-sm w4-button-secondary"
                            onclick="setButtonState('active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="setButtonState('loading')">Loading</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="setButtonState('readonly')">Readonly</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="setButtonState('disabled')">Disabled</button>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral-content">
                        El estado se aplica al botón de prueba y refleja los hooks visuales del componente.
                    </p>
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

            // Intenta obtener el tema de localStorage, si no, usa el data-theme actual o light por defecto
            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";

            // Aplica el tema al documento
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

        function setButtonState(state) {
            var target = document.getElementById("labButtonTarget");
            if (!target) return;

            target.classList.remove("w4-button-active", "w4-button-loading", "w4-button-disabled", "w4-button-readonly");
            target.removeAttribute("disabled");
            target.removeAttribute("readonly");
            target.removeAttribute("aria-disabled");
            target.removeAttribute("aria-busy");
            target.removeAttribute("aria-pressed");
            target.removeAttribute("data-w4-state");

            if (state === "enabled") return;

            if (state === "active") {
                target.classList.add("w4-button-active");
                target.setAttribute("aria-pressed", "true");
                target.setAttribute("data-w4-state", "active");
                return;
            }

            if (state === "loading") {
                target.classList.add("w4-button-loading");
                target.setAttribute("aria-busy", "true");
                target.setAttribute("disabled", "true");
                target.setAttribute("data-w4-state", "loading");
                return;
            }

            if (state === "readonly") {
                target.classList.add("w4-button-readonly");
                target.setAttribute("readonly", "true");
                target.setAttribute("disabled", "true");
                target.setAttribute("data-w4-state", "readonly");
                return;
            }

            if (state === "disabled") {
                target.classList.add("w4-button-disabled");
                target.setAttribute("disabled", "true");
                target.setAttribute("aria-disabled", "true");
                target.setAttribute("data-w4-state", "disabled");
            }
        }
    </script>
</body>

</html>