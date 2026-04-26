<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Nav Bar Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Navbar</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-navbar</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Navbar</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>NavBar</strong> (barra de navegación) proporciona una cabecera para la interfaz de
                usuario, típicamente ubicada en la parte superior de la página. Se utiliza para albergar el logotipo de
                la marca, enlaces de navegación principal, búsqueda y perfiles de usuario.
            </p>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong>Cabeceras de sitios web:</strong> Navegación principal en la parte superior de sitios web
                    públicos o páginas de aterrizaje.</li>
                <li><strong>Dashboards de aplicaciones:</strong> Barra superior que contiene acciones globales como
                    notificaciones, perfil de usuario y control de tema visual.</li>
                <li><strong>Navegación móvil:</strong> Barras compactas que integran menús hamburguesa para navegación
                    en pantallas pequeñas.</li>
                <li><strong>Barras de herramientas contextuales:</strong> Agrupar botones de acción, filtros o rutas de
                    migas de pan (breadcrumbs) en vistas o secciones específicas.</li>
            </ul>

        </section>



        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-warning w4-heading-start">Estados CSS del Navbar</h2>
            <hr class="w4-divider w4-divider-warning">
            <p class="w4-text w4-text-md w4-text-neutral">
                Ejemplos estáticos de estados con <code>data-w4-state</code>: <code>active</code>,
                <code>disabled</code>, <code>collapsed</code> y <code>hidden</code>.
            </p>

            <div class="w4-stack w4-stack-vertical w4-stack-sm">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-start">Active</h3>
                    <div class="w4-navbar w4-navbar-info" data-w4-state="active">
                        <div class="w4-navbar-start"><span class="w4-text">Analytics</span></div>
                        <div class="w4-navbar-end"><span class="w4-badge w4-badge-info">ON</span></div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-start">Disabled</h3>
                    <div class="w4-navbar w4-navbar-warning" data-w4-state="disabled">
                        <div class="w4-navbar-start"><span class="w4-text">Maintenance</span></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-sm">Action</button></div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-start">Collapsed</h3>
                    <div class="w4-navbar w4-navbar-secondary" data-w4-state="collapsed">
                        <div class="w4-navbar-start"><span class="w4-text">Hidden Height</span></div>
                        <div class="w4-navbar-end"><span class="w4-text">...</span></div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-start">Hidden</h3>
                    <div class="w4-navbar w4-navbar-error" data-w4-state="hidden">
                        <div class="w4-navbar-start"><span class="w4-text">This is hidden</span></div>
                        <div class="w4-navbar-end"><span class="w4-text">x</span></div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">El navbar no se muestra porque está en
                        <code>hidden</code>.
                    </p>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados JS del Navbar</h2>
            <hr class="w4-divider w4-divider-error">
            <p class="w4-text w4-text-md w4-text-neutral">
                Cambia estados dinámicamente para validar <code>active</code>, <code>disabled</code>,
                <code>collapsed</code> y <code>hidden</code>.
            </p>

            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Navbar Controlado</h3>
                    <div id="jsInteractiveNavbar" class="w4-navbar w4-navbar-error">
                        <div class="w4-navbar-start">
                            <button class="w4-button w4-button-ghost">Admin</button>
                        </div>
                        <div class="w4-navbar-center">
                            <span class="w4-text w4-text-error-content">Estado dinámico</span>
                        </div>
                        <div class="w4-navbar-end">
                            <button class="w4-button w4-button-ghost">Cuenta</button>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Controles</h3>
                    <div class="w4-stack w4-stack-vertical w4-stack-sm">
                        <button type="button" id="navbarStateClear"
                            class="w4-button w4-button-sm w4-button-outline">Clear
                            States</button>
                        <button type="button" id="navbarStateActive"
                            class="w4-button w4-button-sm w4-button-success">Set
                            Active</button>
                        <button type="button" id="navbarStateDisabled"
                            class="w4-button w4-button-sm w4-button-warning">Set Disabled</button>
                        <button type="button" id="navbarStateCollapsed"
                            class="w4-button w4-button-sm w4-button-info">Set Collapsed</button>
                        <button type="button" id="navbarStateHidden"
                            class="w4-button w4-button-sm w4-button-secondary">Set
                            Hidden</button>
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