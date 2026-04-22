<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Loading Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div id="navbar-loading" class="w4-navbar w4-navbar-primary">
        <div class="w4-navbar-start">
            <button class="w4-button w4-button-ghost w4-button-square mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block h-5 w-5 stroke-current">
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

    <main id="main-loading" class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Loading</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales</p>
        </div>

        <div id="description-loading" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Loading</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Loading (o Spinner) proporciona retroalimentación visual sobre operaciones asíncronas en
                curso. Es ligero, renderizado completamente en CSS (sin SVGs o GIFs pesados) y se adapta a cualquier
                contexto de tamaño o color del sistema de diseño.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-2">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2">
                <li><strong class="w4-text-active">Carga de página/sección:</strong> Centrado en un contenedor vacío
                    mientras se obtienen los datos de una API (usando <code>w4-loading-lg</code> o <code>xl</code>).
                </li>
                <li><strong class="w4-text-active">Acciones en botones:</strong> Reemplazar el ícono de un botón por el
                    spinner de carga al enviar un formulario (tamaños <code>xs</code> o <code>sm</code>).</li>
                <li><strong class="w4-text-active">Carga infinita (Infinite Scroll):</strong> Mostrar en la parte
                    inferior de una lista mientras se cargan más resultados.</li>
                <li><strong class="w4-text-active">Sincronización:</strong> Indicar procesos de guardado automático en
                    segundo plano usando la variante Dots (<code>w4-loading-dots</code>).</li>
            </ul>
        </div>

        <section id="example-loading-variant" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md"></span>
                        <label class="w4-label w4-label-sm w4-label-neutral">Neutral</label>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md w4-loading-primary"></span>
                        <label class="w4-label w4-label-sm w4-label-primary">Primary</label>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md w4-loading-secondary"></span>
                        <label class="w4-label w4-label-sm w4-label-secondary">Secondary</label>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md w4-loading-accent"></span>
                        <label class="w4-label w4-label-sm w4-label-accent">Accent</label>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md w4-loading-info"></span>
                        <label class="w4-label w4-label-sm w4-label-info">Info</label>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md w4-loading-success"></span>
                        <label class="w4-label w4-label-sm w4-label-success">Success</label>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md w4-loading-warning"></span>
                        <label class="w4-label w4-label-sm w4-label-warning">Warning</label>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-md w4-loading-error"></span>
                        <label class="w4-label w4-label-sm w4-label-error">Error</label>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-loading-shapes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Formas (Shape Variants)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-spinner"></span>
                        <span class="w4-label w4-label-xs">Spinner (Default)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-dots"></span>
                        <span class="w4-label w4-label-xs">Dots</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-ring"></span>
                        <span class="w4-label w4-label-xs">Ring</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-bars"></span>
                        <span class="w4-label w4-label-xs">Bars</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-infinity"></span>
                        <span class="w4-label w4-label-xs">Infinity</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-loading-shapes-corporate" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Empresariales
                (Corporate Shapes)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1.5rem;">
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-pulse"></span>
                        <span class="w4-label w4-label-xs">Pulse</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-eclipse"></span>
                        <span class="w4-label w4-label-xs">Eclipse</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-radar"></span>
                        <span class="w4-label w4-label-xs">Radar</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-square"></span>
                        <span class="w4-label w4-label-xs">Square</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-diamond"></span>
                        <span class="w4-label w4-label-xs">Diamond</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-wave"></span>
                        <span class="w4-label w4-label-xs">Wave</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-clock"></span>
                        <span class="w4-label w4-label-xs">Clock</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-hex"></span>
                        <span class="w4-label w4-label-xs">Hexagon</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-dual-ring"></span>
                        <span class="w4-label w4-label-xs">Dual Ring</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-orbit"></span>
                        <span class="w4-label w4-label-xs">Orbit</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-crescent"></span>
                        <span class="w4-label w4-label-xs">Crescent</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-steps"></span>
                        <span class="w4-label w4-label-xs">Steps</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-scan"></span>
                        <span class="w4-label w4-label-xs">Scan</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-cross"></span>
                        <span class="w4-label w4-label-xs">Cross</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-corner"></span>
                        <span class="w4-label w4-label-xs">Corner</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-loading-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xs"></span>
                        <span class="w4-label w4-label-xs">XS (1rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-sm"></span>
                        <span class="w4-label w4-label-xs">SM (1.25rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-md"></span>
                        <span class="w4-label w4-label-xs">MD (1.5rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-lg"></span>
                        <span class="w4-label w4-label-xs">LG (2rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xl"></span>
                        <span class="w4-label w4-label-xs">XL (2.5rem)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-loading-complex" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Ejemplos de Integración
                (Composición)</h2>
            <hr class="w4-divider w4-divider-success">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-3">

                    <div class="w4-stack w4-stack-xs">
                        <span class="w4-label w4-label-sm">Dentro de un botón</span>
                        <button class="w4-button w4-button-primary">
                            <span class="w4-loading w4-loading-sm"></span>
                            Guardando...
                        </button>
                    </div>

                    <div class="w4-stack w4-stack-xs">
                        <span class="w4-label w4-label-sm">Botón de icono</span>
                        <button class="w4-button w4-button-square w4-button-outline w4-button-secondary">
                            <span class="w4-loading w4-loading-md"></span>
                        </button>
                    </div>

                    <div class="w4-stack w4-stack-xs">
                        <span class="w4-label w4-label-sm">Junto a texto (Notificación)</span>
                        <div class="w4-panel w4-panel-base-100 w4-panel-sm" style="box-shadow: var(--w4-shadow-sm);">
                            <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center">
                                <span class="w4-loading w4-loading-accent w4-loading-sm"></span>
                                <span class="w4-text w4-text-sm">Sincronizando...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <section id="example-loading-states-css" class="w4-container w4-container-xl w4-section w4-section-xl"
        style="padding-block-end: 0;">
        <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados (CSS Classes & Atributos)</h2>
        <hr class="w4-divider w4-divider-error">
        <div class="w4-panel w4-panel-base-200 w4-panel-md">
            <div class="w4-stack w4-stack-horizontal w4-stack-md" style="flex-wrap: wrap; align-items: center;">
                <div class="w4-stack w4-stack-xs w4-stack-center">
                    <span class="w4-loading w4-loading-primary w4-loading-xl"></span>
                    <span class="w4-label w4-label-xs">Normal</span>
                </div>
                <div class="w4-stack w4-stack-xs w4-stack-center">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-active"></span>
                    <span class="w4-label w4-label-xs">Active (Glow Effect)</span>
                </div>
                <div class="w4-stack w4-stack-xs w4-stack-center">
                    <span class="w4-loading w4-loading-primary w4-loading-xl w4-loading-disabled"></span>
                    <span class="w4-label w4-label-xs">Disabled (Opacity 0.5)</span>
                </div>
            </div>
        </div>
    </section>

    <section id="example-loading-states-js" class="w4-container w4-container-xl w4-section w4-section-xl">
        <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Estados JS Soportados (data-w4-state)
        </h2>
        <hr class="w4-divider w4-divider-success">
        <div class="w4-panel w4-panel-base-200 w4-panel-md">

            <div class="w4-stack w4-stack-md" style="flex-direction: column; align-items: flex-start;">

                <!-- Shape Switcher -->
                <div class="w4-stack w4-stack-horizontal w4-stack-xs" style="flex-wrap: wrap; margin-block-end: 1rem;">
                    <span class="w4-text w4-text-sm w4-text-neutral"
                        style="opacity: 0.7; margin-inline-end: 0.5rem; align-self: center;">Change Shape:</span>
                    <button class="w4-button w4-button-xs w4-button-outline"
                        onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl'">Spinner</button>
                    <button class="w4-button w4-button-xs w4-button-outline"
                        onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-dots'">Dots</button>
                    <button class="w4-button w4-button-xs w4-button-outline"
                        onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-ring'">Ring</button>
                    <button class="w4-button w4-button-xs w4-button-outline"
                        onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-bars'">Bars</button>
                    <button class="w4-button w4-button-xs w4-button-outline"
                        onclick="document.getElementById('jsInteractiveLoading').className = 'w4-loading w4-loading-primary w4-loading-xl w4-loading-infinity'">Infinity</button>
                </div>

                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="inline-size: 100%;">

                    <!-- Dynamic Component -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md"
                        style="box-shadow: var(--w4-shadow-md); min-inline-size: 200px;">
                        <div class="w4-stack w4-stack-xs w4-stack-center">
                            <span id="jsInteractiveLoading" class="w4-loading w4-loading-primary w4-loading-xl"
                                data-w4-component="loading"></span>
                            <span class="w4-text w4-text-sm w4-text-neutral" style="opacity: 0.7;">Conectando...</span>
                        </div>
                    </div>

                    <!-- State Actions -->
                    <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center"
                        style="flex-wrap: wrap; margin-inline-start: auto; border-inline-start: 1px solid hsl(var(--w4-base-300)); padding-inline-start: 1rem;">
                        <span class="w4-text w4-text-sm w4-text-neutral"
                            style="opacity: 0.7; margin-inline-end: 0.5rem;">Set State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLoading').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveLoading').setAttribute('data-w4-state', 'active')">Active
                            (Glow)</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveLoading').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-neutral"
                            onclick="document.getElementById('jsInteractiveLoading').setAttribute('data-w4-state', 'hidden')">Hidden</button>
                    </div>

                </div>
            </div>

        </div>
    </section>

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