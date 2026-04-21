<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Container Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Container</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-container</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Container</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Container</strong> es el elemento estructural más básico para definir límites de
                ancho (max-width) en el diseño. Ayuda a centrar el contenido y asegurar que el layout se adapte
                correctamente en pantallas grandes, evitando que la información se extienda demasiado y sea difícil de
                leer.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>Envoltura de páginas (Wrappers):</strong> Centrar todo el contenido principal de una página
                    web dentro de límites definidos.</li>
                <li><strong>Lectura óptima:</strong> Usar contenedores estrechos (`xs` o `sm`) para artículos de blog y
                    facilitar el seguimiento visual del texto.</li>
                <li><strong>Alineación de secciones:</strong> Alinear diferentes bloques horizontales para que mantengan
                    los mismos márgenes laterales.</li>
                <li><strong>Diseño responsivo:</strong> Adaptar automáticamente el ancho máximo en diferentes
                    breakpoints (móvil, tablet, escritorio).</li>
            </ul>
        </section>


        <!-- EJEMPLOS BÁSICOS DE TAMAÑOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Escalas de Tamaño (Max-Width)</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral w4-mb-6">
                Los contenedores utilizan clases modificadoras para establecer su ancho máximo. Para propósitos de esta
                demostración, se ha añadido la clase <code>.w4-container-solid</code> y un borde punteado para que
                puedas visualizar sus límites.
            </p>

            <div class="w4-stack w4-stack-vertical w4-stack-md">

                <!-- Extra Small -->
                <div>
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">Extra Small (.w4-container-xs) - Max
                        420px</h3>
                    <div class="w4-container w4-container-xs w4-container-solid p-4"
                        style="border: 2px dashed hsl(var(--w4-primary));">
                        <p class="w4-text w4-text-center">Ideal para tarjetas de login, formularios de registro pequeños
                            o modales estrechos.</p>
                    </div>
                </div>

                <!-- Small -->
                <div>
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">Small (.w4-container-sm) - Max 640px</h3>
                    <div class="w4-container w4-container-sm w4-container-solid p-4"
                        style="border: 2px dashed hsl(var(--w4-secondary));">
                        <p class="w4-text w4-text-center">Tamaño perfecto para artículos de blog y bloques de texto
                            largo para mantener una lectura óptima.</p>
                    </div>
                </div>

                <!-- Medium -->
                <div>
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">Medium (.w4-container-md) - Max 840px
                    </h3>
                    <div class="w4-container w4-container-md w4-container-solid p-4"
                        style="border: 2px dashed hsl(var(--w4-accent));">
                        <p class="w4-text w4-text-center">Contenedor estándar para vistas de contenido mixto, perfiles o
                            paneles de administración básicos.</p>
                    </div>
                </div>

                <!-- Large -->
                <div>
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">Large (.w4-container-lg) - Max 1080px
                    </h3>
                    <div class="w4-container w4-container-lg w4-container-solid p-4"
                        style="border: 2px dashed hsl(var(--w4-info));">
                        <p class="w4-text w4-text-center">Uso general para sitios web corporativos y landing pages.</p>
                    </div>
                </div>

                <!-- Extra Large -->
                <div>
                    <h3 class="w4-heading w4-heading-h4 w4-text-muted w4-mb-2">Extra Large (.w4-container-xl) - Max
                        1280px</h3>
                    <div class="w4-container w4-container-xl w4-container-solid p-4"
                        style="border: 2px dashed hsl(var(--w4-success));">
                        <p class="w4-text w4-text-center">Contenedor principal amplio. Este es el contenedor que está
                            envolviendo toda esta página de demostración.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ESTADOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS (Clases Estáticas)</h2>
            <hr class="w4-divider w4-divider-error">
            <p class="w4-text w4-text-md w4-text-neutral mb-6">
                El contenedor también soporta el sistema de estados globales para controlar su visibilidad o
                interacción.
            </p>

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-vertical w4-stack-md">

                    <!-- Active -->
                    <div>
                        <div class="w4-container w4-container-md w4-container-solid w4-container-active p-4">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">.w4-container-active</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">El contenedor activo aplica un fondo primario
                                translúcido y una sombra interna. Útil para depuración (debugging) o para resaltar
                                temporalmente una sección.</p>
                        </div>
                    </div>

                    <!-- Disabled -->
                    <div>
                        <div class="w4-container w4-container-md w4-container-solid w4-container-disabled w4-p-4">
                            <h3 class="w4-heading w4-heading-h3">.w4-container-disabled</h3>
                            <p class="w4-text w4-text-md">El contenedor deshabilitado pierde opacidad, se vuelve escala
                                de grises y bloquea todos los clics (pointer-events: none).</p>
                            <button class="w4-button w4-button-primary w4-button-sm w4-mt-2">No clickeable</button>
                        </div>
                    </div>

                    <!-- Hidden -->
                    <div>
                        <div class="w4-container w4-container-md w4-container-solid w4-container-hidden w4-p-4">
                            <h3 class="w4-heading w4-heading-h3">.w4-container-hidden</h3>
                            <p class="w4-text w4-text-md">Este contenedor está oculto y no deberías poder verlo.</p>
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

                <div class="w4-stack w4-stack-horizontal w4-stack-between w4-stack-start w-full mt-6">

                    <!-- Container Interactivo -->
                    <div style="flex: 1;">
                        <div id="jsInteractiveContainer" class="w4-container w4-container-solid p-6"
                            data-w4-component="container">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Contenedor Interactivo</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Cambia mi estado con los botones de la
                                derecha. Nota cómo mi comportamiento y apariencia se actualizan inmediatamente.</p>
                            <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-mt-4">
                                <button class="w4-button w4-button-primary w4-button-sm">Botón de prueba</button>
                                <input type="text" class="w4-input w4-input-sm w4-input-bordered"
                                    placeholder="Input de prueba" />
                            </div>
                        </div>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300 w-72">
                        <span class="w4-text w4-text-sm w4-text-muted w4-mb-2">Set State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w4-w-full"
                            onclick="document.getElementById('jsInteractiveContainer').removeAttribute('data-w4-state')">Clear</button>
                        <button class="w4-button w4-button-sm w4-button-info w4-w-full"
                            onclick="document.getElementById('jsInteractiveContainer').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning w4-w-full"
                            onclick="document.getElementById('jsInteractiveContainer').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error w4-w-full"
                            onclick="document.getElementById('jsInteractiveContainer').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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