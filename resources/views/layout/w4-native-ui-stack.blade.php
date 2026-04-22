<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Stack Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Stack</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-stack</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Stack</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Stack</strong> es un contenedor flexible basado en Flexbox, diseñado para apilar
                elementos de forma lineal (ya sea vertical u horizontalmente). Simplifica enormemente la gestión del
                espaciado (gap) y la alineación entre componentes hermanos.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>Grupos de botones:</strong> Alinear varios botones (ej. "Aceptar" y "Cancelar")
                    horizontalmente con un espacio consistente.</li>
                <li><strong>Listas de elementos:</strong> Apilar verticalmente tarjetas de notificaciones, mensajes o
                    comentarios.</li>
                <li><strong>Alineación de formularios:</strong> Distribuir pares de Label e Input verticalmente
                    asegurando que todos tengan el mismo margen.</li>
                <li><strong>Barras de herramientas:</strong> Crear filas de iconos o acciones (toolbars) alineadas al
                    centro o a los extremos.</li>
            </ul>
        </section>

        <!-- ORIENTACIÓN Y ENVOLTURA -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Orientación y Envoltura (Wrap)
            </h2>
            <hr class="w4-divider w4-divider-secondary">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">Stack permite organizar los elementos en columnas o
                filas, y soporta flex-wrap para que los elementos salten a la siguiente línea si no hay espacio.</p>

            <div class="w4-grid w4-grid-md w4-grid-2">

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 mb-4">Vertical (.w4-stack-vertical) Default</h3>
                    <div class="w4-stack w4-stack-vertical w4-stack-md w4-panel w4-panel-outline border-dashed">
                        <div class="w4-panel w4-panel-primary w4-panel-sm w4-text-center font-bold">1</div>
                        <div class="w4-panel w4-panel-primary w4-panel-sm w4-text-center font-bold">2</div>
                        <div class="w4-panel w4-panel-primary w4-panel-sm w4-text-center font-bold">3</div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 mb-4">Horizontal (.w4-stack-horizontal)</h3>
                    <div
                        class="w4-stack w4-stack-horizontal w4-stack-center w4-stack-md w4-panel w4-panel-outline border-dashed">
                        <div class="w4-panel w4-panel-secondary w4-panel-sm w4-text-center font-bold">1</div>
                        <div class="w4-panel w4-panel-secondary w4-panel-sm w4-text-center font-bold">2</div>
                        <div class="w4-panel w4-panel-secondary w4-panel-sm w4-text-center font-bold">3</div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md w4-col-span-2">
                    <h3 class="w4-heading w4-heading-h4 mb-4">Horizontal con Wrap (.w4-stack-wrap)</h3>
                    <p class="w4-text w4-text-sm w4-text-neutral mb-4">Ajusta el tamaño de tu navegador para ver cómo
                        los elementos bajan a la siguiente línea automáticamente.</p>
                    <div
                        class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-between w4-stack-sm w4-panel w4-panel-outline border-dashed">
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">1</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">2</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">3</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">4</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">5</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">6</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">7</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">8</div>
                        <div class="w4-panel w4-panel-accent w4-panel-xs w4-text-center font-bold w-24">9</div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ESCALAS DE TAMAÑO (GAPS) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Escalas de Tamaño (Gap)</h2>
            <hr class="w4-divider w4-divider-info">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">El componente Stack maneja la separación interna usando
                la propiedad `gap`. Esto asegura que solo haya espacio ENTRE los elementos, no a los lados.</p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-lg">

                    <div>
                        <p class="w4-text w4-text-sm font-bold mb-2">.w4-stack-none (0px)</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-none">
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">A
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">B
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">C
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm font-bold mb-2">.w4-stack-xs (0.375rem)</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-xs">
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">A
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">B
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">C
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm font-bold mb-2">.w4-stack-sm (0.625rem)</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-sm">
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">A
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">B
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">C
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm font-bold mb-2">.w4-stack-md (1rem / Default)</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-md">
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">A
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">B
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">C
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm font-bold mb-2">.w4-stack-lg (1.5rem)</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-lg">
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">A
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">B
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">C
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm font-bold mb-2">.w4-stack-xl (2rem)</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-xl">
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">A
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">B
                            </div>
                            <div class="w4-panel w4-panel-base-100 w4-panel-sm flex-1 w4-text-center border-dashed">C
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ALINEACIÓN (JUSTIFY & ALIGN) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Modificadores de Alineación</h2>
            <hr class="w4-divider w4-divider-success">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">Utilizamos clases semánticas para controlar la alineación
                en el eje principal (justify-content) y en el eje cruzado (align-items).</p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">

                <h3 class="w4-heading w4-heading-h4 mb-4">Eje Principal (Justify Content)</h3>
                <div class="w4-grid w4-grid-md w4-grid-2 mb-8">

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-stack-start (Default)</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-stack-start w4-stack-sm w4-panel w4-panel-outline border-dashed">
                            <button class="w4-button w4-button-sm w4-button-primary">1</button>
                            <button class="w4-button w4-button-sm w4-button-primary">2</button>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-stack-center</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-stack-center w4-stack-sm w4-panel w4-panel-outline border-dashed">
                            <button class="w4-button w4-button-sm w4-button-secondary">1</button>
                            <button class="w4-button w4-button-sm w4-button-secondary">2</button>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-stack-end</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-sm w4-panel w4-panel-outline border-dashed">
                            <button class="w4-button w4-button-sm w4-button-accent">1</button>
                            <button class="w4-button w4-button-sm w4-button-accent">2</button>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-stack-between</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-stack-between w4-stack-sm w4-panel w4-panel-outline border-dashed">
                            <button class="w4-button w4-button-sm w4-button-info">1</button>
                            <button class="w4-button w4-button-sm w4-button-info">2</button>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-stack-around</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-stack-around w4-stack-sm w4-panel w4-panel-outline border-dashed">
                            <button class="w4-button w4-button-sm w4-button-warning">1</button>
                            <button class="w4-button w4-button-sm w4-button-warning">2</button>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-stack-evenly</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-stack-evenly w4-stack-sm w4-panel w4-panel-outline border-dashed">
                            <button class="w4-button w4-button-sm w4-button-success">1</button>
                            <button class="w4-button w4-button-sm w4-button-success">2</button>
                        </div>
                    </div>
                </div>

                <hr class="w4-divider w4-divider-base-300">

                <h3 class="w4-heading w4-heading-h4 mb-4 mt-4">Eje Cruzado (Align Items)</h3>
                <div class="w4-grid w4-grid-md w4-grid-3">

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-items-start</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-items-start w4-stack-sm w4-panel w4-panel-outline border-dashed h-24">
                            <div class="w4-panel w4-panel-primary w4-panel-xs">Caja 1</div>
                            <div class="w4-panel w4-panel-primary w4-panel-xs">Caja 2</div>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-items-center</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-items-center w4-stack-center w4-stack-sm w4-panel w4-panel-outline border-dashed h-24">
                            <div class="w4-panel w4-panel-secondary w4-panel-xs">Caja 1</div>
                            <div class="w4-panel w4-panel-secondary w4-panel-xs">Caja 2</div>
                        </div>
                    </div>

                    <div>
                        <p class="w4-text w4-text-sm mb-1 font-bold">.w4-items-end</p>
                        <div
                            class="w4-stack w4-stack-horizontal w4-items-end w4-stack-end w4-stack-sm w4-panel w4-panel-outline border-dashed h-24">
                            <div class="w4-panel w4-panel-accent w4-panel-xs">Caja 1</div>
                            <div class="w4-panel w4-panel-accent w4-panel-xs">Caja 2</div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ESTADOS ESTÁTICOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-warning w4-heading-start">Estados Estáticos (CSS)</h2>
            <hr class="w4-divider w4-divider-warning">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Active -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <h3 class="w4-heading w4-heading-h4 mb-2">.w4-stack-active</h3>
                        <p class="w4-text w4-text-sm w4-text-neutral mb-4">Añade un borde punteado primario. Muy útil
                            para depuración visual del layout.</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-active w4-stack-md w4-p-2">
                            <button class="w4-button w4-button-sm w4-button-primary">Botón 1</button>
                            <button class="w4-button w4-button-sm w4-button-primary">Botón 2</button>
                        </div>
                    </div>

                    <!-- Disabled -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                        <h3 class="w4-heading w4-heading-h4 mb-2">.w4-stack-disabled</h3>
                        <p class="w4-text w4-text-sm w4-text-neutral mb-4">Desactiva y vuelve gris todo el bloque de
                            contenido interno.</p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-disabled w4-stack-md w4-p-2">
                            <button class="w4-button w4-button-sm w4-button-primary">Botón 1</button>
                            <button class="w4-button w4-button-sm w4-button-primary">Botón 2</button>
                        </div>
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
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mb-4">Stack Dinámico</h3>
                            <p class="w4-text w4-text-md w4-text-neutral mb-4">Aplica estados al contenedor Stack usando
                                los botones de la derecha.</p>

                            <div id="jsInteractiveStack" class="w4-stack w4-stack-horizontal w4-stack-md w4-p-4"
                                data-w4-component="stack">
                                <input type="text" class="w4-input w4-input-md w4-input-bordered flex-1"
                                    placeholder="Campo 1...">
                                <input type="text" class="w4-input w4-input-md w4-input-bordered flex-1"
                                    placeholder="Campo 2...">
                                <button class="w4-button w4-button-md w4-button-primary">Guardar</button>
                            </div>
                        </div>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300 w4-ps-4 w-72">
                        <span class="w4-text w4-text-sm w4-text-muted mb-2">data-w4-state:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w-full"
                            onclick="document.getElementById('jsInteractiveStack').removeAttribute('data-w4-state')">Clear
                        </button>
                        <button class="w4-button w4-button-sm w4-button-info w-full"
                            onclick="document.getElementById('jsInteractiveStack').setAttribute('data-w4-state', 'active')">Active
                        </button>
                        <button class="w4-button w4-button-sm w4-button-warning w-full"
                            onclick="document.getElementById('jsInteractiveStack').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error w-full"
                            onclick="document.getElementById('jsInteractiveStack').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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