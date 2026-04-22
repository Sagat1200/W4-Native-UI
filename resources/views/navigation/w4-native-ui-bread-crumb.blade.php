<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Breadcrumb Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Breadcrumb</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-breadcrumb</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Breadcrumb</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Breadcrumb</strong> (migas de pan) es un elemento de navegación secundario que
                revela la ubicación del usuario dentro de la jerarquía de un sitio web o aplicación. Permite volver
                fácilmente a páginas de nivel superior.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>E-commerce y catálogos:</strong> Mostrar la ruta desde la página de inicio, pasando por las
                    categorías, hasta llegar al producto actual (ej. Inicio > Ropa > Zapatos > Zapatillas Deportivas).
                </li>
                <li><strong>Paneles de administración:</strong> Ubicar al usuario dentro de configuraciones anidadas
                    (ej. Dashboard > Ajustes > Perfil > Seguridad).</li>
                <li><strong>Sistemas de archivos o documentos:</strong> Mostrar la estructura de carpetas actual (ej.
                    Documentos > 2023 > Reportes Financieros).</li>
                <li><strong>Portales de ayuda y documentación:</strong> Indicar la sección del manual que se está
                    consultando.</li>
            </ul>
        </section>

        <!-- EJEMPLOS BÁSICOS E ICONOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Ejemplos Básicos e Iconos</h2>
            <hr class="w4-divider w4-divider-secondary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Basic -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <h3 class="w4-heading w4-heading-h4 mb-4">Breadcrumb Simple</h3>
                        <nav class="w4-breadcrumb w4-size-md">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Documents</a></li>
                                <li><span class="w4-text-muted">Report.pdf</span></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- With Icons -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <h3 class="w4-heading w4-heading-h4 mb-4">Con Iconos (SVG)</h3>
                        <nav class="w4-breadcrumb w4-size-md">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="w4-icon w4-icon-sm stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                            </path>
                                        </svg>
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="w4-icon w4-icon-sm stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z">
                                            </path>
                                        </svg>
                                        Archivos
                                    </a>
                                </li>
                                <li>
                                    <span class="w4-text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="w4-icon w4-icon-sm stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                        Factura_2023.pdf
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESCALAS DE TAMAÑO -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Escalas de Tamaño</h2>
            <hr class="w4-divider w4-divider-accent">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">El componente soporta los 5 tamaños estándar del sistema
                tipográfico (xs a xl).</p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-md w4-items-start">

                    <nav class="w4-breadcrumb w4-breadcrumb-size-xs w4-panel w4-panel-base-100 w4-panel-sm w-full">
                        <ul>
                            <li><a href="#">UI</a></li>
                            <li><a href="#">Core</a></li>
                            <li><span>xs</span></li>
                        </ul>
                    </nav>

                    <nav class="w4-breadcrumb w4-breadcrumb-size-sm w4-panel w4-panel-base-100 w4-panel-sm w-full">
                        <ul>
                            <li><a href="#">UI</a></li>
                            <li><a href="#">Core</a></li>
                            <li><span>sm</span></li>
                        </ul>
                    </nav>

                    <nav class="w4-breadcrumb w4-breadcrumb-size-md w4-panel w4-panel-base-100 w4-panel-sm w-full">
                        <ul>
                            <li><a href="#">UI</a></li>
                            <li><a href="#">Core</a></li>
                            <li><span>md (default)</span></li>
                        </ul>
                    </nav>

                    <nav class="w4-breadcrumb w4-breadcrumb-size-lg w4-panel w4-panel-base-100 w4-panel-sm w-full">
                        <ul>
                            <li><a href="#">UI</a></li>
                            <li><a href="#">Core</a></li>
                            <li><span>lg</span></li>
                        </ul>
                    </nav>

                    <nav class="w4-breadcrumb w4-breadcrumb-size-xl w4-panel w4-panel-base-100 w4-panel-sm w-full">
                        <ul>
                            <li><a href="#">UI</a></li>
                            <li><a href="#">Core</a></li>
                            <li><span>xl</span></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </section>

        <!-- VARIANTES SEMÁNTICAS (COLORS) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Variantes Semánticas</h2>
            <hr class="w4-divider w4-divider-info">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-sm">

                    <nav class="w4-breadcrumb w4-breadcrumb-size-md w4-breadcrumb-primary">
                        <ul>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><span>Primary</span></li>
                        </ul>
                    </nav>

                    <nav class="w4-breadcrumb w4-breadcrumb-size-md w4-breadcrumb-secondary">
                        <ul>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><span>Secondary</span></li>
                        </ul>
                    </nav>

                    <nav class="w4-breadcrumb w4-breadcrumb-size-md w4-breadcrumb-accent">
                        <ul>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><span>Accent</span></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </section>

        <!-- ESTADOS ESTÁTICOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-warning w4-heading-start">Estados Estáticos (CSS)</h2>
            <hr class="w4-divider w4-divider-warning">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Collapsed -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <h3 class="w4-heading w4-heading-h4 mb-2">.w4-breadcrumb-collapsed</h3>
                        <p class="w4-text w4-text-sm w4-text-neutral mb-4">Acorta rutas largas mostrando solo el inicio,
                            un elipsis y el final. Ideal para móviles.</p>
                        <nav class="w4-breadcrumb w4-size-md w4-breadcrumb-collapsed">
                            <ul>
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Security</a></li>
                                <li><span class="w4-text-muted">2FA Setup</span></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Active -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <h3 class="w4-heading w4-heading-h4 mb-2">.w4-breadcrumb-active</h3>
                        <p class="w4-text w4-text-sm w4-text-neutral mb-4">Aplica un fondo de resalte para enfocar la
                            atención en la ruta completa.</p>
                        <nav class="w4-breadcrumb w4-size-md w4-breadcrumb-active">
                            <ul>
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Users</a></li>
                                <li><span class="w4-text-muted">Edit</span></li>
                            </ul>
                        </nav>
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

                    <div class="w-full">
                        <div class="w4-panel w4-panel-base-100 w4-panel-md">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mb-4">Breadcrumb Dinámico</h3>
                            <p class="w4-text w4-text-md w4-text-neutral mb-4">Aplica estados al contenedor usando los
                                botones de la derecha.</p>

                            <nav id="jsInteractiveBreadcrumb"
                                class="w4-breadcrumb w4-breadcrumb-size-md w4-breadcrumb-primary"
                                data-w4-component="breadcrumb">
                                <ul>
                                    <li><a href="#">Root</a></li>
                                    <li><a href="#">Level 1</a></li>
                                    <li><a href="#">Level 2</a></li>
                                    <li><a href="#">Level 3</a></li>
                                    <li><span class="w4-text-muted">Current</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300 w4-ps-4 w-72">
                        <span class="w4-text w4-text-sm w4-text-muted mb-2">data-w4-state:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w-full"
                            onclick="document.getElementById('jsInteractiveBreadcrumb').removeAttribute('data-w4-state')">Clear
                            (Ninguno)</button>
                        <button class="w4-button w4-button-sm w4-button-info w-full"
                            onclick="document.getElementById('jsInteractiveBreadcrumb').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-secondary w-full"
                            onclick="document.getElementById('jsInteractiveBreadcrumb').setAttribute('data-w4-state', 'collapsed')">Collapsed
                            (Truncar)</button>
                        <button class="w4-button w4-button-sm w4-button-warning w-full"
                            onclick="document.getElementById('jsInteractiveBreadcrumb').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error w-full"
                            onclick="document.getElementById('jsInteractiveBreadcrumb').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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