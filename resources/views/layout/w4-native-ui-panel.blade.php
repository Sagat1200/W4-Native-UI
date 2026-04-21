<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Panel Lab</title>
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
            <a href="#" class="w4-button w4-button-link w4-button-primary-content">DOCUMENTACION</a>
        </div>
        <div class="w4-navbar-end">
            <div class="w4-stack w4-stack-xs mx-2">
                <select id="themeSwitcher" class="w4-select w4-select-sm w4-select-primary-content">
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Panel</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-panel</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Panel</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Panel</strong> es un contenedor estructurado similar a una tarjeta (Card), pero
                generalmente utilizado para envolver secciones enteras de una interfaz o vistas de detalle más
                complejas. Ayuda a destacar bloques de contenido del fondo principal de la aplicación.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>Vistas de configuración:</strong> Agrupar formularios y opciones de cuenta de usuario.</li>
                <li><strong>Paneles laterales (Asides):</strong> Contener herramientas de filtrado, navegación
                    secundaria o información contextual en un layout complejo.</li>
                <li><strong>Contenido destacado:</strong> Envolver un mensaje importante, un resumen de métricas o una
                    alerta persistente.</li>
                <li><strong>Layouts divididos:</strong> Usar múltiples paneles uno al lado del otro para dividir la
                    información (ej. editor a la izquierda, vista previa a la derecha).</li>
            </ul>
        </section>

        <!-- EJEMPLOS BÁSICOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Ejemplos Básicos</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Panel Básico -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Panel Básico</h3>
                        <p class="w4-text w4-text-md w4-text-neutral">Un panel simple con fondo claro, borde sutil y
                            padding moderado. Sirve como un contenedor general para estructurar contenido.</p>
                    </div>

                    <!-- Panel Elevado -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-panel-elevated">
                        <h3 class="w4-heading w4-heading-h3 w4-heading-accent">Panel Elevado</h3>
                        <p class="w4-text w4-text-md w4-text-neutral">Añade la clase <code>.w4-panel-elevated</code>
                            para agregar una sombra de profundidad, destacando este panel por encima del resto.</p>
                    </div>

                    <!-- Panel Ghost -->
                    <div class="w4-panel w4-panel-ghost w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Panel Ghost</h3>
                        <p class="w4-text w4-text-md">Un panel "fantasma" que hereda los paddings y radios del sistema,
                            pero elimina el fondo, el borde y las sombras.</p>
                    </div>

                    <!-- Panel Base 300 -->
                    <div class="w4-panel w4-panel-base-300 w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Panel Oscurecido</h3>
                        <p class="w4-text w4-text-md">Utilizando el color <code>base-300</code> se puede lograr una
                            diferenciación visual fuerte para secciones secundarias.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- EJEMPLO: VISTAS DE CONFIGURACIÓN -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Ejemplo de diseño de una vista de
                configuracion</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">Un diseño clásico de ajustes (settings) combinando un
                panel de navegación lateral y múltiples paneles de contenido para agrupar formularios y opciones.</p>

            <div class="w4-stack w4-stack-horizontal w4-stack-lg">

                <!-- Menú Lateral -->
                <div class="w4-panel w4-panel-primary w4-panel-md w4-panel-elevated w-64">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary-content mb-4">Ajustes</h3>
                    <div class="w4-stack w4-stack-vertical w4-stack-xl">
                        <button class="w4-button w4-button-sm w4-button-ghost w-full w4-text-primary">Perfil
                            de Usuario</button>
                        <button class="w4-button w4-button-sm w4-button-ghost w-full">Seguridad</button>
                        <button class="w4-button w4-button-sm w4-button-ghost w-full">Notificaciones</button>
                        <button class="w4-button w4-button-sm w4-button-ghost ">Facturación</button>
                    </div>
                </div>

                <!-- Contenido Principal -->
                <div class="w4-stack w4-stack-vertical w4-stack-xl w-full">

                    <!-- Panel Perfil -->
                    <div class="w4-panel w4-panel-primary w4-panel-md w4-panel-elevated">
                        <h3 class="w4-heading w4-heading-h3 w4-heading-primary-content mb-1">Perfil de Usuario</h3>
                        <p class="w4-text w4-text-sm w4-text-primary-content mb-4">Actualiza tu información
                            personal y
                            datos
                            de contacto.</p>
                        <hr class="w4-divider w4-divider-primary-content mb-4">

                        <div class="w4-stack w4-stack-vertical w4-stack-sm mb-4">
                            <label class="w4-text w4-text-sm w4-text-primary-content">Nombre Completo</label>
                            <input type="text" class="w4-input w4-input-md w4-input-primary-content" value="Juan Pérez">
                        </div>

                        <div class="w4-stack w4-stack-vertical w4-stack-sm mb-4">
                            <label class="w4-text w4-text-sm w4-text-primary-content">Correo Electrónico</label>
                            <input type="email" class="w4-input w4-input-md w4-input-primary-content"
                                value="juan@example.com">
                        </div>

                        <div class="w4-stack w4-stack-horizontal w4-stack-end mt-3">
                            <button class="w4-button w4-button-primary w4-button-md">Guardar Cambios</button>
                        </div>
                    </div>

                    <!-- Panel Preferencias -->
                    <div class="w4-panel w4-panel-primary w4-panel-md w4-panel-elevated">
                        <h3 class="w4-heading w4-heading-h3 w4-heading-primary-content mb-1">Preferencias de la Cuenta
                        </h3>
                        <p class="w4-text w4-text-sm w4-text-primary-content font-bold mb-4">Administra el idioma y la
                            zona
                            horaria de
                            tu entorno.</p>
                        <hr class="w4-divider w4-divider-primary-content mb-4">

                        <div class="w4-grid w4-grid-md w4-grid-2">
                            <div class="w4-stack w4-stack-vertical w4-stack-sm mb-4">
                                <label class="w4-text w4-text-sm w4-text-primary-content">Idioma</label>
                                <select class="w4-select w4-select-md w4-select-primary-content">
                                    <option>Español</option>
                                    <option>Inglés</option>
                                </select>
                            </div>

                            <div class="w4-stack w4-stack-vertical w4-stack-sm mb-4">
                                <label class="w4-text w4-text-sm w4-text-primary-content">Zona Horaria</label>
                                <select class="w4-select w4-select-md w4-select-primary-content">
                                    <option>(GMT-05:00) Bogotá, Lima, Quito</option>
                                    <option>(GMT-06:00) Ciudad de México</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Panel Peligroso -->
                    <div class="w4-panel w4-panel-error w4-panel-md w4-panel-elevated">
                        <h3 class="w4-heading w4-heading-h3 w4-heading-error-content mb-1">Zona Peligrosa</h3>
                        <p class="w4-text w4-text-sm w4-text-error-content mb-4">Las acciones en esta área pueden ser
                            irreversibles. Procede con precaución.</p>



                        <p class="w4-text w4-text-xs w4-text-error-content">¿Estás seguro?</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-end w4-items-center mb-4">
                            <button class="w4-button w4-button-sm w4-button-primary">Cancelar</button>
                            <button class="w4-button w4-button-sm w4-button-error">Aceptar</button>
                        </div>


                    </div>

                </div>
            </div>
        </section>

        <!-- ESCALAS DE TAMAÑO (PADDINGS) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Escalas de Tamaño (Paddings)</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-md">

                    <!-- XS -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                        <p class="w4-text w4-text-sm w4-text-center">.w4-panel-xs (Padding: 0.5rem)</p>
                    </div>

                    <!-- SM -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <p class="w4-text w4-text-sm w4-text-center">.w4-panel-sm (Padding: 0.75rem)</p>
                    </div>

                    <!-- MD -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md">
                        <p class="w4-text w4-text-md w4-text-center">.w4-panel-md (Padding: 1rem / Default)</p>
                    </div>

                    <!-- LG -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-lg">
                        <p class="w4-text w4-text-lg w4-text-center">.w4-panel-lg (Padding: 1.25rem)</p>
                    </div>

                    <!-- XL -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-xl">
                        <p class="w4-text w4-text-xl w4-text-center">.w4-panel-xl (Padding: 1.5rem)</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- VARIANTES SEMÁNTICAS (COLORES) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes Semánticas (Colores)</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-3">

                    <div class="w4-panel w4-panel-primary w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Primary</h3>
                        <p class="w4-text w4-text-md">Fondo primary con color primary-content.</p>
                    </div>

                    <div class="w4-panel w4-panel-secondary w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Secondary</h3>
                        <p class="w4-text w4-text-md">Fondo secondary con color secondary-content.</p>
                    </div>

                    <div class="w4-panel w4-panel-accent w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Accent</h3>
                        <p class="w4-text w4-text-md">Fondo accent con color accent-content.</p>
                    </div>

                    <div class="w4-panel w4-panel-info w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Info</h3>
                        <p class="w4-text w4-text-md">Fondo info con color info-content.</p>
                    </div>

                    <div class="w4-panel w4-panel-success w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Success</h3>
                        <p class="w4-text w4-text-md">Fondo success con color success-content.</p>
                    </div>

                    <div class="w4-panel w4-panel-warning w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Warning</h3>
                        <p class="w4-text w4-text-md">Fondo warning con color warning-content.</p>
                    </div>

                    <div class="w4-panel w4-panel-error w4-panel-md">
                        <h3 class="w4-heading w4-heading-h3">Error</h3>
                        <p class="w4-text w4-text-md">Fondo error con color error-content.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Estados Estáticos (CSS)</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-3">

                    <!-- Active (CSS) -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-panel-active">
                        <h3 class="w4-heading w4-heading-h4">.w4-panel-active</h3>
                        <p class="w4-text w4-text-sm">Resalta el borde con el color primario y agrega un ligero fondo
                            primario translúcido.</p>
                    </div>

                    <!-- Disabled (CSS) -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-panel-disabled">
                        <h3 class="w4-heading w4-heading-h4">.w4-panel-disabled</h3>
                        <p class="w4-text w4-text-sm">Se vuelve semitransparente, en escala de grises y no clickeable.
                        </p>
                    </div>

                    <!-- Collapsed (CSS) -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-panel-collapsed">
                        <h3 class="w4-heading w4-heading-h4">.w4-panel-collapsed</h3>
                        <p class="w4-text w4-text-sm">Este texto no se verá porque la altura y el padding colapsan a
                            cero.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS JS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Estados Interactivos (JS)</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-between w4-stack-start">

                    <div class="w-full">
                        <div id="jsInteractivePanel" class="w4-panel w4-panel-base-100 w4-panel-md"
                            data-w4-component="panel">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Panel Dinámico</h3>
                            <p class="w4-text w4-text-md w4-text-neutral w4-mb-4">Modifica mis atributos usando los
                                controles de la derecha.</p>
                            <input type="text" class="w4-input w4-input-md w4-input-bordered w4-w-full"
                                placeholder="Interactúa conmigo..." />
                        </div>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300 w4-ps-4 w-72">
                        <span class="w4-text w4-text-sm w4-text-muted w4-mb-2">data-w4-state:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w4-w-full"
                            onclick="document.getElementById('jsInteractivePanel').removeAttribute('data-w4-state')">Clear
                            (Ninguno)</button>
                        <button class="w4-button w4-button-sm w4-button-info w4-w-full"
                            onclick="document.getElementById('jsInteractivePanel').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning w4-w-full"
                            onclick="document.getElementById('jsInteractivePanel').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-secondary w4-w-full"
                            onclick="document.getElementById('jsInteractivePanel').setAttribute('data-w4-state', 'collapsed')">Collapsed</button>
                        <button class="w4-button w4-button-sm w4-button-error w4-w-full"
                            onclick="document.getElementById('jsInteractivePanel').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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