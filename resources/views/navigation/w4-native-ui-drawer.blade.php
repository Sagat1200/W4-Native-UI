<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Drawer Lab</title>
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
            <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-neutral-content w4-menu-md">
                <li class="w4-text w4-text-primary-content"><a href="">Home</a></li>
                <li class="w4-text w4-text-primary-content"><a href="">Documentacion</a></li>
                <li class="w4-text w4-text-primary-content"><a href="">Productos</a></li>
                <li class="w4-text w4-text-primary-content"><a href="">Contacto</a></li>
            </ul>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Drawer</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-drawer</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Drawer</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Drawer</strong> (barra lateral o panel off-canvas) proporciona un contenedor
                deslizante que se superpone al contenido principal. Es ideal para mostrar opciones de navegación,
                filtros o detalles adicionales sin cambiar de página.
            </p>
            <h2 class="w4-heading w4-heading-h3 w4-heading-primary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong>Navegación principal en móviles:</strong> Menús hamburguesa que se despliegan desde el
                    lateral izquierdo (o derecho) para acceder a las secciones del sitio.</li>
                <li><strong>Paneles de filtros en e-commerce:</strong> Barras laterales para aplicar filtros avanzados
                    de búsqueda de productos sin salir del catálogo.</li>
                <li><strong>Previsualización de detalles:</strong> Mostrar la información detallada de un registro (ej.
                    un usuario o una orden) al hacer clic en una fila de una tabla, deslizándose desde la derecha.</li>
                <li><strong>Carrito de compras:</strong> Un "mini-carrito" off-canvas que permite al usuario revisar los
                    productos seleccionados y proceder al pago rápidamente.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Tamaños del Drawer</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral">
                Ejemplos de apertura usando tamaños: <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code>,
                <code>xl</code> y <code>full</code>.
            </p>

            <div class="w4-panel w4-stack w4-stack-sm w4-stack-horizontal w4-stack-center">
                <button type="button" class="w4-button w4-button-primary" data-w4-toggle="drawer"
                    data-w4-target="drawerSizeXs">Abrir XS</button>
                <button type="button" class="w4-button w4-button-primary" data-w4-toggle="drawer"
                    data-w4-target="drawerSizeSm">Abrir SM</button>
                <button type="button" class="w4-button w4-button-primary" data-w4-toggle="drawer"
                    data-w4-target="drawerSizeMd">Abrir MD</button>
                <button type="button" class="w4-button w4-button-primary" data-w4-toggle="drawer"
                    data-w4-target="drawerSizeLg">Abrir LG</button>
                <button type="button" class="w4-button w4-button-primary" data-w4-toggle="drawer"
                    data-w4-target="drawerSizeXl">Abrir XL</button>
                <button type="button" class="w4-button w4-button-primary" data-w4-toggle="drawer"
                    data-w4-target="drawerSizeFull">Abrir FULL</button>
            </div>
        </section>

        <aside id="drawerSizeXs" class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-xs">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer tamaño XS</div>
            </div>
        </aside>

        <aside id="drawerSizeSm" class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-sm">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer tamaño SM</div>
            </div>
        </aside>

        <aside id="drawerSizeMd" class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-md">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer tamaño MD</div>
            </div>
        </aside>

        <aside id="drawerSizeLg" class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-lg">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer tamaño LG</div>
            </div>
        </aside>

        <aside id="drawerSizeXl" class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-xl">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer tamaño XL</div>
            </div>
        </aside>

        <aside id="drawerSizeFull" class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-full">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer tamaño FULL</div>
            </div>
        </aside>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Aperturas del Drawer</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral">
                Drawers con diferentes posiciones y tamaños del viewport de 5% al 20%
            </p>

            <div class="w4-panel w4-stack w4-stack-sm w4-stack-horizontal w4-stack-center">
                <button type="button" class="w4-button w4-button-success" data-w4-toggle="drawer"
                    data-w4-target="drawerLeft25">Drawer Izquierdo (5% VPW)</button>
                <button type="button" class="w4-button w4-button-info" data-w4-toggle="drawer"
                    data-w4-target="drawerRight20">Drawer Derecho (10% VPW)</button>
                <button type="button" class="w4-button w4-button-warning" data-w4-toggle="drawer"
                    data-w4-target="drawerTop15">Drawer Superior (15% VPH)</button>
                <button type="button" class="w4-button w4-button-error" data-w4-toggle="drawer"
                    data-w4-target="drawerBottom5">Drawer Inferior (20% VPH)</button>
            </div>
        </section>

        <aside id="drawerLeft25" class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-success w4-drawer-5p">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <ul class="w4-menu w4-menu-success-content w4-menu-sm">
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Navegación</a></li>
                    <li><a href="">Ajustes</a></li>
                </ul>
            </div>
        </aside>

        <aside id="drawerRight20" class="w4-drawer w4-drawer-right w4-drawer-fixed w4-drawer-info w4-drawer-10p">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <ul class="w4-menu w4-menu-info-content w4-menu-sm">
                    <li><a href="">Detalle</a></li>
                    <li><a href="">Actividad</a></li>
                    <li><a href="">Historial</a></li>
                </ul>
            </div>
        </aside>

        <aside id="drawerTop15" class="w4-drawer w4-drawer-top w4-drawer-fixed w4-drawer-warning w4-drawer-15p">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer superior 15% del alto del viewport.</div>
            </div>
        </aside>

        <aside id="drawerBottom5" class="w4-drawer w4-drawer-bottom w4-drawer-fixed w4-drawer-error w4-drawer-20p">
            <div class="w4-stack w4-stack-sm">
                <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                    data-w4-dismiss="drawer">Cerrar</button>
                <div class="w4-text">Drawer inferior 5% del alto del viewport.</div>
            </div>
        </aside>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-warning w4-heading-start">Estados CSS del Drawer</h2>
            <hr class="w4-divider w4-divider-warning">
            <p class="w4-text w4-text-md w4-text-neutral">
                Estados estáticos soportados por el framework usando <code>data-w4-state</code>:
                <code>closed</code> y <code>open</code>.
            </p>

            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3">Closed</h3>
                    <aside class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-md"
                        data-w4-state="closed">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-text">Drawer en estado cerrado</div>
                        </div>
                    </aside>
                    <p class="w4-text w4-text-sm w4-text-neutral">Con <code>closed</code> se mantiene fuera de vista
                        en modo off-canvas.</p>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3">Open</h3>
                    <aside class="w4-drawer w4-drawer-right w4-drawer-info h-24" data-w4-state="open">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-text">Drawer en estado abierto</div>
                        </div>
                    </aside>
                    <p class="w4-text w4-text-sm w4-text-neutral">Con <code>open</code> entra en pantalla en modo
                        off-canvas.</p>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Estados JS Soportados
                (data-w4-state)</h2>
            <hr class="w4-divider w4-divider-success">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-vertical">
                    <div class="w4-stack w4-stack-sm">
                        <aside id="jsInteractiveDrawer"
                            class="w4-drawer w4-drawer-left w4-drawer-fixed w4-drawer-primary w4-drawer-md"
                            data-w4-component="drawer">
                            <div class="w4-stack w4-stack-sm">
                                <div class="w4-text">Dynamic JS Drawer</div>
                                <div class="w4-text w4-text-sm">Cambia su estado con los controles.</div>
                            </div>
                        </aside>
                    </div>

                    <div class="w4-stack w4-stack-sm w4-stack-horizontal w4-stack-center"
                        style="border-block-start: 1px solid hsl(var(--w4-base-300)); padding-block-start: 1rem;">
                        <span class="w4-text w4-text-sm w4-text-neutral">Set State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-info"
                            onclick="document.getElementById('jsInteractiveDrawer').setAttribute('data-w4-state', 'closed')">Closed</button>
                        <button class="w4-button w4-button-sm w4-button-success"
                            onclick="document.getElementById('jsInteractiveDrawer').setAttribute('data-w4-state', 'open')">Open</button>
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