<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Section Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Section</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-section</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Section</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Section</strong> es el bloque de construcción principal para agrupar contenido
                relacionado verticalmente en una página. Proporciona espaciado uniforme (padding/margin) y facilita la
                división temática del diseño, creando ritmo y pausas visuales.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>Landing Pages:</strong> Separar bloques de contenido como "Hero", "Características",
                    "Testimonios" y "Precios".</li>
                <li><strong>Estructura de artículos:</strong> Dividir artículos largos en partes lógicas con sus propios
                    encabezados.</li>
                <li><strong>Fondos alternados:</strong> Crear franjas horizontales con diferentes colores de fondo (ej.
                    blanco, gris, primario) para diferenciar contenido.</li>
                <li><strong>Agrupación semántica:</strong> Asegurar que el HTML sea accesible y semánticamente correcto
                    (etiqueta `section`).</li>
            </ul>
        </section>

        <!-- ESCALAS DE TAMAÑO (PADDINGS VERTICALES) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Escalas de Tamaño (Padding
                Vertical)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">El componente Section utiliza modificadores de tamaño
                para controlar el padding superior e inferior (block). Para hacer visibles estos paddings en el ejemplo,
                las secciones tienen un fondo base-200 y el contenido interno tiene fondo base-100.</p>

            <div class="w4-stack w4-stack-vertical w4-stack-lg">

                <!-- None -->
                <div class="w4-section w4-section-none w4-section-base-200">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <p class="w4-text w4-text-center font-bold">.w4-section-none</p>
                        <p class="w4-text w4-text-center w4-text-xs w4-text-neutral">Padding: 0</p>
                    </div>
                </div>

                <!-- XS -->
                <div class="w4-section w4-section-xs w4-section-base-200">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <p class="w4-text w4-text-center font-bold">.w4-section-xs</p>
                        <p class="w4-text w4-text-center w4-text-xs w4-text-neutral">Padding: 0.5rem</p>
                    </div>
                </div>

                <!-- SM -->
                <div class="w4-section w4-section-sm w4-section-base-200">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <p class="w4-text w4-text-center font-bold">.w4-section-sm</p>
                        <p class="w4-text w4-text-center w4-text-xs w4-text-neutral">Padding: 0.75rem</p>
                    </div>
                </div>

                <!-- MD -->
                <div class="w4-section w4-section-md w4-section-base-200">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <p class="w4-text w4-text-center font-bold">.w4-section-md (Default)</p>
                        <p class="w4-text w4-text-center w4-text-xs w4-text-neutral">Padding: 1rem</p>
                    </div>
                </div>

                <!-- LG -->
                <div class="w4-section w4-section-lg w4-section-base-200">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <p class="w4-text w4-text-center font-bold">.w4-section-lg</p>
                        <p class="w4-text w4-text-center w4-text-xs w4-text-neutral">Padding: 1.5rem</p>
                    </div>
                </div>

                <!-- XL -->
                <div class="w4-section w4-section-xl w4-section-base-200">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <p class="w4-text w4-text-center font-bold">.w4-section-xl</p>
                        <p class="w4-text w4-text-center w4-text-xs w4-text-neutral">Padding: 2rem</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- CASO DE USO: LANDING PAGE (Fondos Alternados) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Caso de Uso: Landing Page (Franjas)
            </h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">Combinando Sections con fondos de colores alternados para
                construir la estructura clásica de una Landing Page de extremo a extremo.</p>

            <div class="w4-panel w4-panel-outline w4-panel-none overflow-hidden border border-dashed border-primary">

                <!-- Hero Section -->
                <section class="w4-section w4-section-xl w4-section-primary">
                    <div class="w4-container w4-container-md w4-stack w4-stack-vertical w4-items-center">
                        <h2 class="w4-heading w4-heading-h1 w4-heading-primary-content text-center">Bienvenido a Native
                            UI</h2>
                        <p class="w4-text w4-text-lg w4-text-primary-content text-center opacity-80">El framework visual
                            más ligero, rápido y predecible para aplicaciones Laravel modernas.</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-center mt-4">
                            <button class="w4-button w4-button-base-100 w4-button-md text-primary">Comenzar</button>
                            <button
                                class="w4-button w4-button-ghost w4-button-md w4-text-primary-content">Documentación</button>
                        </div>
                    </div>
                </section>

                <!-- Features Section -->
                <section class="w4-section w4-section-lg w4-section-base-100 mt-6">
                    <div class="w4-container w4-container-lg">
                        <h3 class="w4-heading w4-heading-h2 w4-heading-center mb-8">Nuestras Características</h3>
                        <div class="w4-grid w4-grid-lg w4-grid-3">
                            <div class="w4-panel w4-panel-base-200 w4-panel-md w4-items-center text-center">
                                <h4 class="w4-heading w4-heading-h4 w4-heading-primary mb-2">⚡ Rápido</h4>
                                <p class="w4-text w4-text-sm w4-text-neutral">Construido con variables CSS nativas para
                                    máximo rendimiento.</p>
                            </div>
                            <div class="w4-panel w4-panel-base-200 w4-panel-md w4-items-center text-center">
                                <h4 class="w4-heading w4-heading-h4 w4-heading-secondary mb-2">🎨 Temático</h4>
                                <p class="w4-text w4-text-sm w4-text-neutral">Cambia el aspecto completo con un solo
                                    atributo data-theme.</p>
                            </div>
                            <div class="w4-panel w4-panel-base-200 w4-panel-md w4-items-center text-center">
                                <h4 class="w4-heading w4-heading-h4 w4-heading-accent mb-2">🧩 Modular</h4>
                                <p class="w4-text w4-text-sm w4-text-neutral">Importa solo los componentes que realmente
                                    vas a utilizar.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="w4-section w4-section-lg w4-section-base-200">
                    <div
                        class="w4-container w4-container-md w4-stack w4-stack-horizontal w4-stack-between w4-items-center">
                        <div>
                            <h3 class="w4-heading w4-heading-h3 mb-1">¿Listo para empezar?</h3>
                            <p class="w4-text w4-text-sm w4-text-neutral">Únete a cientos de desarrolladores hoy.</p>
                        </div>
                        <button class="w4-button w4-button-primary">Crear Cuenta Gratis</button>
                    </div>
                </section>

            </div>
        </section>

        <!-- ESTADOS ESTÁTICOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Estados Estáticos (CSS)</h2>
            <hr class="w4-divider w4-divider-info">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-md">

                    <!-- Active -->
                    <div class="w4-section w4-section-md w4-section-base-100 w4-section-active">
                        <h3 class="w4-heading w4-heading-h4">.w4-section-active</h3>
                        <p class="w4-text w4-text-sm">Agrega una sutil barra lateral con el color primario y un fondo
                            primario translúcido. Útil para resaltar la sección actual en un artículo o scroll-spy.</p>
                    </div>

                    <!-- Disabled -->
                    <div class="w4-section w4-section-md w4-section-base-100 w4-section-disabled">
                        <h3 class="w4-heading w4-heading-h4">.w4-section-disabled</h3>
                        <p class="w4-text w4-text-sm">Vuelve toda la sección semitransparente, en escala de grises y
                            desactiva las interacciones del cursor.</p>
                    </div>

                    <!-- Collapsed -->
                    <div class="w4-section w4-section-md w4-section-base-100 w4-section-collapsed">
                        <h3 class="w4-heading w4-heading-h4">.w4-section-collapsed</h3>
                        <p class="w4-text w4-text-sm">Este texto no se verá. Oculta el padding y colapsa la altura a
                            cero con overflow hidden.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS INTERACTIVOS JS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-warning w4-heading-start">Estados Interactivos (JS)</h2>
            <hr class="w4-divider w4-divider-warning">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-between w4-items-start">

                    <div class="w-full">
                        <section id="jsInteractiveSection" class="w4-section w4-section-lg w4-section-base-100"
                            data-w4-component="section">
                            <div class="w4-container">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-primary mb-2">Sección Dinámica</h3>
                                <p class="w4-text w4-text-md w4-text-neutral mb-4">Modifica los atributos de estado de
                                    esta sección usando los botones de la derecha.</p>

                                <div class="w4-grid w4-grid-sm w4-grid-2 h-14">
                                    <input type="text" class="w4-input w4-input-md w4-input-bordered "
                                        placeholder="Intenta escribir aquí...">
                                    <button class="w4-button w4-button-md w4-button-primary">Botón de prueba</button>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300 w4-ps-4 w-72">
                        <span class="w4-text w4-text-sm w4-text-muted mb-2">data-w4-state:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w-full"
                            onclick="document.getElementById('jsInteractiveSection').removeAttribute('data-w4-state')">Clear
                            (Ninguno)</button>
                        <button class="w4-button w4-button-sm w4-button-info w-full"
                            onclick="document.getElementById('jsInteractiveSection').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning w-full"
                            onclick="document.getElementById('jsInteractiveSection').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-secondary w-full"
                            onclick="document.getElementById('jsInteractiveSection').setAttribute('data-w4-state', 'collapsed')">Collapsed</button>
                        <button class="w4-button w4-button-sm w4-button-error w-full"
                            onclick="document.getElementById('jsInteractiveSection').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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