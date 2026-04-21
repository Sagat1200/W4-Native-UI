<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Card Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Card</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente w4-card</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Card</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Card</strong> (tarjeta) es un contenedor versátil y flexible utilizado para
                agrupar contenido relacionado y acciones. Es fundamental en el diseño de interfaces modernas para
                organizar información de manera estructurada, legible y visualmente atractiva.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary mt-2">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical mt-2">
                <li><strong>Listados de contenido:</strong> Mostrar productos de una tienda, artículos de un blog o
                    perfiles de usuario en una cuadrícula.</li>
                <li><strong>Paneles de control (Dashboards):</strong> Agrupar métricas, gráficos o resúmenes de
                    información en widgets independientes.</li>
                <li><strong>Formularios estructurados:</strong> Contener secciones lógicas de un formulario largo (ej.
                    "Datos personales", "Información de pago").</li>
                <li><strong>Elementos interactivos:</strong> Crear tarjetas clicables que actúan como enlaces grandes
                    hacia vistas detalladas.</li>
            </ul>
        </section>

        <!-- EJEMPLOS BASICOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Ejemplos Básicos</h2>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-3">

                    <!-- Card Básica -->
                    <div class="w4-card w4-card-base-100">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Card Básica</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Esta es una tarjeta simple con su fondo por
                                defecto y contenido básico. Ideal para textos y descripciones.</p>
                            <div class="w4-stack w4-stack-horizontal w4-stack-end w4-mt-4">
                                <button class="w4-button w4-button-primary">Aceptar</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card con Borde -->
                    <div class="w4-card w4-card-base-100 w4-card-bordered w4-card-bordered-primary">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Card con Borde</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Esta tarjeta utiliza la clase
                                <code>.w4-card-bordered</code> para destacar su contorno con un color semántico.
                            </p>
                            <div class="w4-stack w4-stack-horizontal w4-stack-end w4-mt-4">
                                <button class="w4-button w4-button-secondary w4-button-outline">Detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Elevada -->
                    <div class="w4-card w4-card-base-100 w4-card-elevated">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-accent">Card Elevada</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Utiliza <code>.w4-card-elevated</code> para
                                agregar una sombra más pronunciada (shadow-lg), dándole profundidad.</p>
                            <div class="w4-stack w4-stack-horizontal w4-stack-end w4-mt-4">
                                <button class="w4-button w4-button-accent">Comprar</button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Segunda Fila: Ejemplos con Imágenes -->
                <div class="w4-grid w4-grid-md w4-grid-3 mt-6">

                    <!-- Solo Imagen -->
                    <div class="w4-card w4-card-base-100 w4-card-elevated">
                        <figure class="w4-card-figure">
                            <img src="https://picsum.photos/id/1015/400/225" alt="Paisaje natural" />
                        </figure>
                    </div>

                    <!-- Imagen + Texto -->
                    <div class="w4-card w4-card-base-100 w4-card-elevated">
                        <figure class="w4-card-figure">
                            <img src="https://picsum.photos/id/1016/400/225" alt="Montañas" />
                        </figure>
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Explora el mundo</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Descubre paisajes increíbles y conecta con la
                                naturaleza en tus próximas vacaciones.</p>
                        </div>
                    </div>

                    <!-- Imagen + Texto + Botones -->
                    <div class="w4-card w4-card-base-100 w4-card-elevated">
                        <figure class="w4-card-figure">
                            <img src="https://picsum.photos/id/1018/400/225" alt="Bosque" />
                        </figure>
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Aventura Extrema</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Reserva ahora tu paquete de senderismo guiado
                                por profesionales.</p>
                            <div class="w4-stack w4-stack-horizontal w4-stack-end w4-mt-4">
                                <button class="w4-button w4-button-ghost">Ignorar</button>
                                <button class="w4-button w4-button-primary">Reservar Ahora</button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tercera Fila: Imagen Abajo y con Padding -->
                <div class="w4-grid w4-grid-md w4-grid-3 mt-6">

                    <!-- Imagen Abajo -->
                    <div class="w4-card w4-card-base-100 w4-card-elevated">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Vista al Océano</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Disfruta de nuestras cabañas con vista directa
                                al mar.
                                Relájate con el sonido de las olas.</p>
                            <div class="w4-stack w4-stack-horizontal w4-stack-start w4-mt-4">
                                <button class="w4-button w4-button-secondary">Ver Galería</button>
                            </div>
                        </div>
                        <figure class="w4-card-figure">
                            <img src="https://picsum.photos/id/1019/400/225" alt="Océano" />
                        </figure>
                    </div>

                    <!-- Imagen con Padding (Dentro del body) -->
                    <div class="w4-card w4-card-base-100 w4-card-elevated">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Fotografía Artística</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">La imagen se encuentra dentro del cuerpo de la
                                tarjeta, heredando su padding.</p>
                            <figure class="w4-card-figure mt-4">
                                <img src="https://picsum.photos/id/1020/400/225" alt="Arte" class="w4-rounded-lg" />
                            </figure>
                        </div>
                    </div>

                    <!-- Imagen con Padding Constante -->
                    <div class="w4-card w4-card-base-100 w4-card-elevated w4-p-4">
                        <figure class="w4-card-figure">
                            <img src="https://picsum.photos/id/1021/400/225" alt="Bosque con niebla"
                                class="w4-rounded-lg" />
                        </figure>
                        <div class="w4-card-body w4-px-0 w4-pb-0">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-info">Bosque Místico</h3>
                            <p class="w4-text w4-text-md w4-text-neutral">Aplicando padding al contenedor principal para
                                crear un efecto de marco interior alrededor de la foto.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- VARIANTES SEMÁNTICAS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Semánticas (Colores)
            </h2>
            <hr class="w4-divider w4-divider-secondary">

            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-4">

                    <!-- Primary -->
                    <div class="w4-card w4-card-primary">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Primary</h3>
                            <p class="w4-text w4-text-md">Fondo primary con texto primary-content.</p>
                        </div>
                    </div>

                    <!-- Secondary -->
                    <div class="w4-card w4-card-secondary">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Secondary</h3>
                            <p class="w4-text w4-text-md">Fondo secondary con texto secondary-content.</p>
                        </div>
                    </div>

                    <!-- Accent -->
                    <div class="w4-card w4-card-accent">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Accent</h3>
                            <p class="w4-text w4-text-md">Fondo accent con texto accent-content.</p>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="w4-card w4-card-info">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Info</h3>
                            <p class="w4-text w4-text-md">Fondo info con texto info-content.</p>
                        </div>
                    </div>

                    <!-- Success -->
                    <div class="w4-card w4-card-success">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Success</h3>
                            <p class="w4-text w4-text-md">Fondo success con texto success-content.</p>
                        </div>
                    </div>

                    <!-- Warning -->
                    <div class="w4-card w4-card-warning">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Warning</h3>
                            <p class="w4-text w4-text-md">Fondo warning con texto warning-content.</p>
                        </div>
                    </div>

                    <!-- Error -->
                    <div class="w4-card w4-card-error">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Error</h3>
                            <p class="w4-text w4-text-md">Fondo error con texto error-content.</p>
                        </div>
                    </div>

                    <!-- Base 300 -->
                    <div class="w4-card w4-card-base-300">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">Base 300</h3>
                            <p class="w4-text w4-text-md">Fondo oscuro del tema (base-300).</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ESTADOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS (Clases Estáticas)</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">

                <h3 class="w4-heading w4-heading-h4 w4-heading-error w4-mb-4">Modificadores de Estado (.w4-card-*)</h3>

                <div class="w4-grid w4-grid-md w4-grid-4 mt-6">

                    <!-- Active (CSS) -->
                    <div class="w4-card w4-card-base-100 w4-card-bordered w4-card-active">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">.w4-card-active</h3>
                            <p class="w4-text w4-text-sm w4-text-neutral">Simula una tarjeta activa o seleccionada,
                                elevándola y resaltando sus bordes con el color primary.</p>
                        </div>
                    </div>

                    <!-- Disabled (CSS) -->
                    <div class="w4-card w4-card-base-100 w4-card-bordered w4-card-disabled">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">.w4-card-disabled</h3>
                            <p class="w4-text w4-text-sm">Tarjeta deshabilitada. Reduce la opacidad y desactiva la
                                interacción del ratón.</p>
                            <button class="w4-button w4-button-primary w4-button-sm w4-mt-2">No clickeable</button>
                        </div>
                    </div>

                    <!-- Collapsed (CSS) -->
                    <div class="w4-card w4-card-base-100 w4-card-bordered w4-card-collapsed">
                        <!-- El body se ocultará debido a la clase collapsed -->
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">.w4-card-collapsed</h3>
                            <p class="w4-text w4-text-sm">Este contenido no debería verse, ya que el body está
                                colapsado.</p>
                        </div>
                        <!-- Usamos un header falso fuera del body para mostrar que la tarjeta existe -->
                        <div class="w4-p-4 w4-border-b w4-border-base-300">
                            <h3 class="w4-heading w4-heading-h4">.w4-card-collapsed</h3>
                            <p class="w4-text w4-text-xs w4-text-muted">El contenido principal (w4-card-body) está
                                oculto.</p>
                        </div>
                    </div>

                    <!-- Hidden (CSS) -->
                    <div class="w4-card w4-card-base-100 w4-card-bordered w4-card-hidden">
                        <div class="w4-card-body">
                            <h3 class="w4-heading w4-heading-h3">.w4-card-hidden</h3>
                            <p class="w4-text w4-text-sm">Esta tarjeta está oculta en el DOM (display: none) y no
                                deberías poder verla.</p>
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

                    <!-- Card Interactiva -->
                    <div class="w4-grid w4-grid-1 w-72">
                        <div id="jsInteractiveCard" class="w4-card w4-card-base-100 w4-card-bordered"
                            data-w4-component="card">
                            <div class="w4-card-body">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Tarjeta Interactiva</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Utiliza los botones de la derecha para
                                    cambiar mi estado a través del atributo <code>data-w4-state</code>.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Botonera -->
                    <div class="w4-stack w4-stack-vertical w4-stack-sm w4-border-s w4-border-base-300">
                        <span class="w4-text w4-text-sm w4-text-muted w4-mb-2">Cambiar Estado:</span>
                        <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-wrap">
                            <button class="w4-button w4-button-sm w4-button-outline"
                                onclick="document.getElementById('jsInteractiveCard').removeAttribute('data-w4-state')">Limpiar
                                (Clear)</button>
                            <button class="w4-button w4-button-sm w4-button-info"
                                onclick="document.getElementById('jsInteractiveCard').setAttribute('data-w4-state', 'active')">Active</button>
                            <button class="w4-button w4-button-sm w4-button-warning"
                                onclick="document.getElementById('jsInteractiveCard').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                            <button class="w4-button w4-button-sm w4-button-error"
                                onclick="document.getElementById('jsInteractiveCard').setAttribute('data-w4-state', 'hidden')">Hidden</button>
                            <button class="w4-button w4-button-sm w4-button-secondary"
                                onclick="document.getElementById('jsInteractiveCard').setAttribute('data-w4-state', 'collapsed')">Collapsed</button>
                        </div>
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