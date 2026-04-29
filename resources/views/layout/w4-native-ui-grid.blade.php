<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Grid Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Grid</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-grid</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Grid</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Grid</strong> (cuadrícula) proporciona un sistema bidimensional para crear layouts
                estructurados. Facilita la alineación y distribución del contenido en columnas y filas, permitiendo
                diseños responsivos que se adaptan a diferentes tamaños de pantalla.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>Galerías y catálogos:</strong> Mostrar múltiples elementos (como tarjetas de productos o
                    imágenes) en una cuadrícula uniforme.</li>
                <li><strong>Formularios complejos:</strong> Organizar campos de entrada en múltiples columnas para
                    aprovechar mejor el espacio horizontal.</li>
                <li><strong>Estructura de la página:</strong> Definir el layout principal dividiendo la pantalla en
                    secciones (ej. contenido principal y barra lateral).</li>
                <li><strong>Paneles de estadísticas:</strong> Alinear widgets e indicadores en un dashboard de manera
                    simétrica.</li>
            </ul>
        </section>


        <!-- EJEMPLOS BÁSICOS Y COLUMNAS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Ejemplos Básicos y Columnas</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">
                El grid permite distribuir el contenido en columnas iguales. Usa las clases <code>.w4-grid-1</code>
                hasta <code>.w4-grid-6</code> y <code>.w4-grid-12</code> para definir el número de columnas.
            </p>

            <div class="w4-stack w4-stack-vertical w4-stack-xl">

                <!-- 2 Columnas -->
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted mb-4">2 Columnas (.w4-grid-2)</h3>
                    <div class="w4-grid w4-grid-2">
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Columna 1</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Columna 2</div>
                    </div>
                </div>

                <!-- 3 Columnas -->
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-4">3 Columnas (.w4-grid-3)</h3>
                    <div class="w4-grid w4-grid-3">
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 1</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 2</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 3</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 4 (Pasa a la siguiente fila)
                        </div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 5</div>
                    </div>
                </div>

                <!-- 4 Columnas -->
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-4">4 Columnas (.w4-grid-4)</h3>
                    <div class="w4-grid w4-grid-4">
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 1</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 2</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 3</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">Col 4</div>
                    </div>
                </div>

                <!-- 6 Columnas -->
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-4">6 Columnas (.w4-grid-6)</h3>
                    <div class="w4-grid w4-grid-6">
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">1</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">2</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">3</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">4</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">5</div>
                        <div class="w4-panel w4-panel-base-100 p-4 w4-text-center">6</div>
                    </div>
                </div>

            </div>
        </section>

        <!-- VARIANTES SEMÁNTICAS (BORDES) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Semánticas (Bordes)
            </h2>
            <hr class="w4-divider w4-divider-secondary">
            <p class="w4-text w4-text-md w4-text-neutral w4-mb-6">
                Puedes aplicar bordes semánticos a los elementos hijos directos del grid usando las clases
                <code>.w4-grid-bordered-*</code>.
            </p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-3">

                    <!-- Primary Bordered -->
                    <div>
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">.w4-grid-bordered-primary</h3>
                        <div class="w4-grid w4-grid-2 w4-grid-bordered-primary">
                            <div class="p-4 w4-text-center">Item A</div>
                            <div class="p-4 w4-text-center">Item B</div>
                            <div class="p-4 w4-text-center">Item C</div>
                            <div class="p-4 w4-text-center">Item D</div>
                        </div>
                    </div>

                    <!-- Secondary Bordered -->
                    <div>
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">.w4-grid-bordered-secondary</h3>
                        <div class="w4-grid w4-grid-2 w4-grid-bordered-secondary">
                            <div class="p-4 w4-text-center">Item A</div>
                            <div class="p-4 w4-text-center">Item B</div>
                            <div class="p-4 w4-text-center">Item C</div>
                            <div class="p-4 w4-text-center">Item D</div>
                        </div>
                    </div>

                    <!-- Accent Bordered -->
                    <div>
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">.w4-grid-bordered-accent</h3>
                        <div class="w4-grid w4-grid-2 w4-grid-bordered-accent">
                            <div class="p-4 w4-text-center">Item A</div>
                            <div class="p-4 w4-text-center">Item B</div>
                            <div class="p-4 w4-text-center">Item C</div>
                            <div class="p-4 w4-text-center">Item D</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESPACIADO (GAP) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Escalas de Tamaño (Gap)</h2>
            <hr class="w4-divider w4-divider-accent">
            <p class="w4-text w4-text-md w4-text-neutral w4-mb-6">
                Modifica el espacio (gap) entre las columnas y filas del grid.
            </p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-xl">

                    <!-- Gap XS -->
                    <div>
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">.w4-grid-xs</h3>
                        <div class="w4-grid w4-grid-3 w4-grid-xs w4-grid-bordered-neutral">
                            <div class="p-4 w4-text-center">Caja</div>
                            <div class="p-4 w4-text-center">Caja</div>
                            <div class="p-4 w4-text-center">Caja</div>
                        </div>
                    </div>

                    <!-- Gap MD (Default) -->
                    <div>
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">.w4-grid-md (Por defecto)</h3>
                        <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-neutral">
                            <div class="p-4 w4-text-center">Caja</div>
                            <div class="p-4 w4-text-center">Caja</div>
                            <div class="p-4 w4-text-center">Caja</div>
                        </div>
                    </div>

                    <!-- Gap XL -->
                    <div>
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">.w4-grid-xl</h3>
                        <div class="w4-grid w4-grid-3 w4-grid-xl w4-grid-bordered-neutral">
                            <div class="p-4 w4-text-center">Caja</div>
                            <div class="p-4 w4-text-center">Caja</div>
                            <div class="p-4 w4-text-center">Caja</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS CSS Y JS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Estados (CSS y JS)</h2>
            <hr class="w4-divider w4-divider-info">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Estados Estáticos -->
                    <div class="w4-stack w4-stack-vertical w4-stack-md">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted">Estados CSS</h3>

                        <div class="w4-grid w4-grid-2 w4-grid-active p-2">
                            <div class="w4-panel w4-panel-base-100 p-2 w4-text-center">.w4-grid-active</div>
                            <div class="w4-panel w4-panel-base-100 p-2 w4-text-center">Resalta borde</div>
                        </div>

                        <div class="w4-grid w4-grid-2 w4-grid-disabled p-2">
                            <div class="w4-panel w4-panel-base-100 p-2 w4-text-center">.w4-grid-disabled</div>
                            <div class="w4-panel w4-panel-base-100 p-2 w4-text-center">Opacidad y Grises</div>
                        </div>
                    </div>

                    <!-- Estados Dinámicos JS -->
                    <div class="w4-stack w4-stack-vertical w4-stack-md">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted">Estados Dinámicos JS</h3>

                        <div id="jsInteractiveGrid" class="w4-grid w4-grid-2 w4-grid-bordered-info w4-p-2"
                            data-w4-component="grid">
                            <div class="w4-p-4 w4-text-center">Interactúa conmigo</div>
                            <div class="w4-p-4 w4-text-center">Usa los botones</div>
                        </div>

                        <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-wrap">
                            <button class="w4-button w4-button-sm w4-button-outline"
                                onclick="document.getElementById('jsInteractiveGrid').removeAttribute('data-w4-state')">Clear</button>
                            <button class="w4-button w4-button-sm w4-button-info"
                                onclick="document.getElementById('jsInteractiveGrid').setAttribute('data-w4-state', 'active')">Active</button>
                            <button class="w4-button w4-button-sm w4-button-warning"
                                onclick="document.getElementById('jsInteractiveGrid').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                            <button class="w4-button w4-button-sm w4-button-error"
                                onclick="document.getElementById('jsInteractiveGrid').setAttribute('data-w4-state', 'hidden')">Hidden</button>
                        </div>
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