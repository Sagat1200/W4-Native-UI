<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Divider Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Divider</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-divider</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Divider</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Divider</strong> (separador) es un elemento visual delgado utilizado para separar
                contenido o agrupar secciones relacionadas dentro de un diseño. Ayuda a mejorar la jerarquía visual y la
                legibilidad de la interfaz estableciendo pausas claras.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
                <li><strong>Separación de listas:</strong> Diferenciar elementos dentro de una lista o menú desplegable.
                </li>
                <li><strong>Secciones de formulario:</strong> Dividir grupos de campos lógicos (ej. "Información
                    personal" vs "Datos de facturación").</li>
                <li><strong>Estructura de artículo:</strong> Separar el título, el autor, el cuerpo y la sección de
                    comentarios de un post.</li>
                <li><strong>División con texto:</strong> Usar un divisor con texto centrado (ej. "O iniciar sesión con")
                    en páginas de autenticación.</li>
            </ul>
        </section>

        <!-- EJEMPLOS BÁSICOS Y ORIENTACIÓN -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Ejemplos Básicos y Orientación</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Divisor Horizontal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted">Divisor Horizontal</h3>
                        <p class="w4-text w4-text-md w4-text-neutral">Contenido superior.</p>
                        <hr class="w4-divider">
                        <p class="w4-text w4-text-md w4-text-neutral">Contenido inferior separado por un
                            <code>.w4-divider</code> estándar.
                        </p>
                    </div>

                    <!-- Divisor Vertical -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-4">Divisor Vertical</h3>
                        <div class="w4-stack w4-stack-horizontal w4-stack-center h-24">
                            <p class="w4-text w4-text-md w4-text-neutral">Izquierda</p>
                            <div class="w4-divider w4-divider-vertical"></div>
                            <p class="w4-text w4-text-md w4-text-neutral">Derecha</p>
                        </div>
                    </div>

                </div>
        </section>

        <!-- DIVISORES CON TEXTO Y ALINEACIÓN -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Divisores con Texto (Alineación)
            </h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Horizontales -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-lg">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted">Alineación Horizontal</h3>

                        <div class="w4-divider w4-divider-start">Inicio</div>
                        <div class="w4-divider w4-divider-center">Centro</div>
                        <div class="w4-divider w4-divider-end">Fin</div>
                    </div>

                    <!-- Verticales -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-lg">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-4">Alineación Vertical</h3>

                        <div class="w4-stack w4-stack-horizontal w4-stack-center w4-stack-between h-60">
                            <div class="w4-divider w4-divider-vertical w4-divider-start">Inicio</div>
                            <div class="w4-divider w4-divider-vertical w4-divider-center">Centro</div>
                            <div class="w4-divider w4-divider-vertical w4-divider-end">Fin</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- VARIANTES SEMÁNTICAS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes Semánticas (Colores)</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Colores Básicos -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-md">
                        <div class="w4-divider w4-divider-primary w4-divider-center">Primary</div>
                        <div class="w4-divider w4-divider-secondary w4-divider-center">Secondary</div>
                        <div class="w4-divider w4-divider-accent w4-divider-center">Accent</div>
                        <div class="w4-divider w4-divider-neutral w4-divider-center">Neutral</div>
                    </div>

                    <!-- Colores de Estado -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-md">
                        <div class="w4-divider w4-divider-info w4-divider-center">Info</div>
                        <div class="w4-divider w4-divider-success w4-divider-center">Success</div>
                        <div class="w4-divider w4-divider-warning w4-divider-center">Warning</div>
                        <div class="w4-divider w4-divider-error w4-divider-center">Error</div>
                    </div>

                </div>
            </div>
        </section>

        <!-- EJEMPLOS DIVIDER ESPACIOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Escalas de Espaciado (Márgenes)
            </h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral w4-mb-6">
                Los divisores tienen diferentes modificadores de tamaño que afectan su espaciado (margen) respecto al
                contenido que los rodea.
            </p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-none">

                    <!-- Extra Small -->
                    <div class="w4-panel w4-panel-base-100 p-4">
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Extra Small (.w4-divider-xs)</p>
                        <div class="w4-divider w4-divider-xs w4-divider-primary"></div>
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Margen: 0.375rem</p>
                    </div>

                    <!-- Small -->
                    <div class="w4-panel w4-panel-base-100 p-4">
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Small (.w4-divider-sm)</p>
                        <div class="w4-divider w4-divider-sm w4-divider-primary"></div>
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Margen: 0.625rem</p>
                    </div>

                    <!-- Medium (Default) -->
                    <div class="w4-panel w4-panel-base-100 p-4">
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Medium (.w4-divider-md / Por defecto)
                        </p>
                        <div class="w4-divider w4-divider-md w4-divider-primary"></div>
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Margen: 1rem</p>
                    </div>

                    <!-- Large -->
                    <div class="w4-panel w4-panel-base-100 p-4">
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Large (.w4-divider-lg)</p>
                        <div class="w4-divider w4-divider-lg w4-divider-primary"></div>
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Margen: 1.5rem</p>
                    </div>

                    <!-- Extra Large -->
                    <div class="w4-panel w4-panel-base-100 p-4">
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Extra Large (.w4-divider-xl)</p>
                        <div class="w4-divider w4-divider-xl w4-divider-primary"></div>
                        <p class="w4-text w4-text-sm w4-text-center w4-text-muted">Margen: 2rem</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- CASOS DE USO REALES -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Casos de Uso Comunes</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Login Alternativo -->
                    <div class="w4-card w4-card-base-100 w4-card-bordered">
                        <div class="w4-card-body w4-stack w4-stack-vertical w4-stack-md">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-center">Iniciar Sesión</h3>
                            <input type="email" class="w4-input w4-input-bordered" placeholder="Correo electrónico" />
                            <input type="password" class="w4-input w4-input-bordered" placeholder="Contraseña" />
                            <button class="w4-button w4-button-primary">Entrar</button>

                            <div class="w4-divider w4-divider-center w4-text-sm w4-text-muted">O continuar con</div>

                            <button class="w4-button w4-button-outline">Google</button>
                        </div>
                    </div>

                    <!-- Estadísticas con divisor vertical -->
                    <div class="w4-card w4-card-base-100 w4-card-bordered">
                        <div class="w4-card-body w4-stack w4-stack-horizontal w4-stack-between w4-stack-center">
                            <div class="w4-stack w4-stack-vertical w4-stack-center">
                                <span class="w4-heading w4-heading-h2 w4-heading-primary">42K</span>
                                <span class="w4-text w4-text-sm w4-text-muted">Visitas</span>
                            </div>

                            <div class="w4-divider w4-divider-vertical w4-divider-primary"></div>

                            <div class="w4-stack w4-stack-vertical w4-stack-center">
                                <span class="w4-heading w4-heading-h2 w4-heading-secondary">8.5%</span>
                                <span class="w4-text w4-text-sm w4-text-muted">Conversión</span>
                            </div>

                            <div class="w4-divider w4-divider-vertical w4-divider-secondary">
                            </div>

                            <div class="w4-stack w4-stack-vertical w4-stack-center">
                                <span class="w4-heading w4-heading-h2 w4-heading-accent">120</span>
                                <span class="w4-text w4-text-sm w4-text-muted">Ventas</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Estados CSS (Clases Estáticas)</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">

                <h3 class="w4-heading w4-heading-h4 w4-heading-primary w4-mb-4">Modificadores de Estado (.w4-divider-*)
                </h3>

                <div class="w4-grid w4-grid-md w4-grid-3 mt-6">

                    <!-- Active -->
                    <div class="w4-panel w4-panel-base-100 w4-p-4">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted">.w4-divider-active</h3>
                        <p class="w4-text w4-text-sm w4-mb-4">Se vuelve más grueso y toma el color primario.</p>
                        <div class="w4-divider w4-divider-active">Divisor Activo</div>
                    </div>

                    <!-- Disabled -->
                    <div class="w4-panel w4-panel-base-100 w4-p-4">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted">.w4-divider-disabled</h3>
                        <p class="w4-text w4-text-sm w4-mb-4">Se reduce su opacidad indicando que no está activo.</p>
                        <div class="w4-divider w4-divider-disabled">Divisor Deshabilitado</div>
                    </div>

                    <!-- Hidden -->
                    <div class="w4-panel w4-panel-base-100 w4-p-4">
                        <h3 class="w4-heading w4-heading-h4 w4-text-muted">.w4-divider-hidden</h3>
                        <p class="w4-text w4-text-sm w4-mb-4">El divisor desaparece completamente del DOM (display:
                            none).</p>
                        <div class="w4-divider w4-divider-hidden">No me verás</div>
                        <p class="w4-text w4-text-xs w4-text-muted w4-text-center">↑ El divisor estaba justo arriba</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS DINÁMICOS JS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Estados Dinámicos JS (w4-state)
            </h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">

                <div class="w4-stack w4-stack-horizontal w4-stack-between w4-stack-start w-full mt-6">

                    <!-- Divider Interactivo -->
                    <div style="flex: 1;">
                        <div class="w4-panel w4-panel-base-100 w4-p-6">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Divisor Interactivo</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Cambia el estado del divisor utilizando los
                                botones laterales mediante inyección del atributo <code>data-w4-state</code>.</p>

                            <div class="mt-8 mb-8">
                                <div id="jsInteractiveDivider" class="w4-divider w4-divider-center"
                                    data-w4-component="divider">
                                    Divisor Dinámico
                                </div>
                            </div>

                            <p class="w4-text w4-text-md w4-text-neutral">Contenido inferior para referencia de
                                espaciado.</p>
                        </div>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300 w4-ps-4 w-72">
                        <span class="w4-text w4-text-sm w4-text-muted w4-mb-2">Set State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w4-w-full"
                            onclick="document.getElementById('jsInteractiveDivider').removeAttribute('data-w4-state')">Clear</button>
                        <button class="w4-button w4-button-sm w4-button-info w4-w-full"
                            onclick="document.getElementById('jsInteractiveDivider').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning w4-w-full"
                            onclick="document.getElementById('jsInteractiveDivider').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error w4-w-full"
                            onclick="document.getElementById('jsInteractiveDivider').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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