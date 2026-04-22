<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Drop Down Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Drop Down</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-drop-down</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Drop Down</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Dropdown</strong> (menú desplegable) muestra una lista de acciones o enlaces
                contextuales cuando el usuario interactúa con un elemento desencadenador (como un botón o un icono).
                Ayuda a organizar y ocultar opciones secundarias para mantener una interfaz más limpia.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>Menús de perfil de usuario:</strong> Opciones como "Mi Perfil", "Configuración" y "Cerrar
                    Sesión" accesibles desde el avatar en la navegación superior.</li>
                <li><strong>Acciones en tablas o listas:</strong> Agrupar acciones secundarias (ej. editar, duplicar,
                    eliminar) en un menú de "tres puntos" para cada registro.</li>
                <li><strong>Selectores de contexto:</strong> Elegir idioma, cambiar de tema visual (claro/oscuro), o
                    seleccionar el proyecto activo en una aplicación SaaS.</li>
                <li><strong>Filtros y ordenamiento:</strong> Desplegar listas de criterios o métodos de ordenamiento en
                    vistas complejas o catálogos.</li>
            </ul>
        </section>

        <!-- EJEMPLOS BÁSICOS (MÉTODO DE APERTURA) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Ejemplos Básicos (Click vs Hover)
            </h2>
            <hr class="w4-divider w4-divider-secondary">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">Por defecto el Dropdown se abre al hacer click o enfocar
                (usando tabindex). Con la clase `.w4-dropdown-hover` se abre automáticamente al pasar el cursor por
                encima.</p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center">

                    <!-- Click/Focus (Default) -->
                    <div class="w4-dropdown">
                        <div tabindex="0" role="button" class="w4-button w4-button-primary">Click (Focus) para abrir
                        </div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Opción 1</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Opción 2</a></li>
                        </ul>
                    </div>

                    <!-- Hover -->
                    <div class="w4-dropdown w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-secondary">Hover para abrir</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Opción A</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Opción B</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- POSICIONAMIENTO -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Posicionamiento</h2>
            <hr class="w4-divider w4-divider-accent">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">Usa los modificadores `.w4-dropdown-top`,
                `.w4-dropdown-bottom` (por defecto), `.w4-dropdown-left` y `.w4-dropdown-right`. Además puedes usar
                `.w4-dropdown-end` para alinear el menú con el borde derecho del botón, o `.w4-dropdown-center` para
                centrarlo perfectamente.</p>

            <div class="w4-grid w4-grid-2 mt-18">

                <!-- Top -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-top w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Top</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Item 1</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Item 2</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-bottom w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Bottom</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Item 1</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Item 2</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Left -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-left w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Left</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Item 1</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Item 2</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Right -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-right w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Right</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Item 1</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Item 2</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Center -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-bottom w4-dropdown-center w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Bottom Center</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Centrado perfecto</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Bajo el botón</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom End -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-bottom w4-dropdown-end w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Bottom End</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Alineado a la derecha</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Muy útil en navbars</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Top End -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-top w4-dropdown-end w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Top End</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Alineado a la derecha</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Top Center -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-top w4-dropdown-center w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Top Center</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Centrado arriba</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Sobre el botón</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Left Middle -->
                <div
                    class="w4-panel w4-panel-base-200 w4-panel-md w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-left w4-dropdown-middle w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Left Center</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Izquierda</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Centro vertical</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Right Middle -->
                <div
                    class="w4-panel w4-panel-base-100 w4-panel-xl w4-stack w4-stack-vertical w4-stack-center w4-items-center">
                    <div class="w4-dropdown w4-dropdown-right w4-dropdown-middle w4-dropdown-hover">
                        <div tabindex="0" role="button" class="w4-button w4-button-outline">Right Center</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral">Derecha</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral">Centro vertical</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <!-- VARIANTES SEMÁNTICAS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Variantes Semánticas y Tamaños</h2>
            <hr class="w4-divider w4-divider-success">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">Usa `.w4-variant-*` para teñir el fondo del menú y
                `.w4-size-*` para escalar su tipografía.</p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-lg w4-stack-center">

                    <div class="w4-dropdown w4-dropdown-hover w4-dropdown-primary w4-dropdown-sm">
                        <div tabindex="0" role="button" class="w4-button w4-button-primary w4-button-sm">Size SM &
                            Primary</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-primary-content">Item 1</a></li>
                            <li><a href="#" class="w4-link w4-link-primary-content">Item 2</a></li>
                        </ul>
                    </div>

                    <div class="w4-dropdown w4-dropdown-hover w4-dropdown-secondary w4-dropdown-md">
                        <div tabindex="0" role="button" class="w4-button w4-button-secondary w4-button-md">Size MD &
                            Secondary</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-secondary-content">Item 1</a></li>
                            <li><a href="#" class="w4-link w4-link-secondary-content">Item 2</a></li>
                        </ul>
                    </div>

                    <div class="w4-dropdown w4-dropdown-hover w4-dropdown-neutral w4-dropdown-lg">
                        <div tabindex="0" role="button" class="w4-button w4-button-neutral w4-button-lg">Size LG &
                            Neutral</div>
                        <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                            <li><a href="#" class="w4-link w4-link-neutral-content">Item 1</a></li>
                            <li><a href="#" class="w4-link w4-link-neutral-content">Item 2</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS INTERACTIVOS JS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados Interactivos (JS)</h2>
            <hr class="w4-divider w4-divider-error">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-between w4-items-start">

                    <div class="w-full" style="padding-block-end: 6rem;">
                        <div class="w4-panel w4-panel-base-100 w4-panel-md">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mb-4">Dropdown Dinámico</h3>
                            <p class="w4-text w4-text-md w4-text-neutral mb-4">Modifica los atributos usando los
                                controles. Nota que `data-w4-state="open"` fuerza al menú a permanecer abierto sin
                                necesidad de hover o focus.</p>

                            <div id="jsInteractiveDropdown" class="w4-dropdown" data-w4-component="dropdown">
                                <div tabindex="0" role="button" class="w4-button w4-button-primary">Menú Controlado
                                </div>
                                <ul tabindex="0" class="w4-dropdown-content w4-dropdown-body">
                                    <li><a href="#" class="w4-link w4-link-neutral">Opción 1</a></li>
                                    <li><a href="#" class="w4-link w4-link-neutral">Opción 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300 w4-ps-4 w-72">
                        <span class="w4-text w4-text-sm w4-text-muted mb-2">data-w4-state:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w-full"
                            onclick="document.getElementById('jsInteractiveDropdown').removeAttribute('data-w4-state')">Clear
                            (Ninguno)</button>
                        <button class="w4-button w4-button-sm w4-button-info w-full"
                            onclick="document.getElementById('jsInteractiveDropdown').setAttribute('data-w4-state', 'open')">Open
                            (Forzar Apertura)</button>
                        <button class="w4-button w4-button-sm w4-button-warning w-full"
                            onclick="document.getElementById('jsInteractiveDropdown').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error w-full"
                            onclick="document.getElementById('jsInteractiveDropdown').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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