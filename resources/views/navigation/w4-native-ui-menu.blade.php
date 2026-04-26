<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Menu Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Menu</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-menu</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Menu</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Menu</strong> proporciona una lista estructurada y navegable de opciones o
                enlaces. Es la base fundamental para construir sistemas de navegación como barras laterales, menús
                desplegables y barras de navegación superiores.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
                <li><strong>Navegación principal (Sidebar):</strong> Menús verticales en paneles de administración o
                    dashboards para acceder a diferentes módulos.</li>
                <li><strong>Navegación horizontal:</strong> Barras de enlaces en la cabecera de sitios web corporativos
                    o catálogos.</li>
                <li><strong>Menús anidados:</strong> Listas jerárquicas con submenús desplegables para organizar grandes
                    cantidades de opciones o categorías.</li>
                <li><strong>Listas de acciones:</strong> Agrupación de acciones o enlaces dentro de otros componentes
                    interactivos como <code>w4-dropdown</code>.</li>
            </ul>
        </section>

        <!-- VARIANTES DE COLOR -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-neutral">
                Menus basicos con diferentes variantes de color, con item activo.
            </p>

            <div class="w4-grid w4-grid-3">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Neutral</h3>
                    <ul class="w4-menu w4-menu-neutral w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-primary">Primary</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-secondary">Secondary</h3>
                    <ul class="w4-menu w4-menu-secondary w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-accent">Accent</h3>
                    <ul class="w4-menu w4-menu-accent w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-info">Info</h3>
                    <ul class="w4-menu w4-menu-info w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-success">Success</h3>
                    <ul class="w4-menu w4-menu-success w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-warning">Warning</h3>
                    <ul class="w4-menu w4-menu-warning w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-error">Error</h3>
                    <ul class="w4-menu w4-menu-error w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-100</h3>
                    <ul class="w4-menu w4-menu-base-100 w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-200</h3>
                    <ul class="w4-menu w4-menu-base-200 w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-300 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-300</h3>
                    <ul class="w4-menu w4-menu-base-300 w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- MENÚS VERTICALES CON SUBMENÚS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Menús Verticales con Submenús</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-primary">
                Ejemplos de menús verticales anidados, orpima el item activo para probar.
            </p>

            <div class="w4-grid w4-grid-3">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base + Submenu Base</h3>
                    <ul class="w4-menu w4-menu-base-100 w4-menu-sm w4-menu-vertical">
                        <li><a href="">Dashboard</a></li>
                        <li class="">
                            <a href="" class="active">Gestión</a>
                            <ul class="w4-submenu-base-200">
                                <li><a href="">Usuarios</a></li>
                                <li><a href="" class="active">Roles</a></li>
                                <li><a href="">Permisos</a></li>
                            </ul>
                        </li>
                        <li><a href="">Reportes</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-primary">Primary + Submenu Error</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-sm w4-menu-vertical">
                        <li><a href="">Inicio</a></li>
                        <li>
                            <a href="" class="active">Ventas</a>
                            <ul class="w4-submenu-error">
                                <li><a href="">Órdenes</a></li>
                                <li><a href="" class="active">Facturas</a></li>
                                <li><a href="">Cobranza</a></li>
                            </ul>
                        </li>
                        <li><a href="">Clientes</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-info">Info + Submenu Neutral</h3>
                    <ul class="w4-menu w4-menu-info w4-menu-sm w4-menu-vertical">
                        <li><a href="">Inicio</a></li>
                        <li class="">
                            <a href="" class="active">Configuración</a>
                            <ul class="w4-submenu-neutral">
                                <li><a href="">General</a></li>
                                <li><a href="">Integraciones</a></li>
                                <li><a href="" class="active">Notificaciones</a></li>
                            </ul>
                        </li>
                        <li><a href="">Auditoría</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- MENÚS HORIZONTALES -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Menús Horizontales</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-primary">
                Ejemplos de menús horizontales con diferentes variantes de color, con item activo.
            </p>

            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Neutral</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-neutral w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-primary">Primary</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-primary w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-secondary">Secondary</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-secondary w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-accent">Accent</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-accent w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-info">Info</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-info w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-success">Success</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-success w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-warning">Warning</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-warning w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-error">Error</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-error w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-100</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-base-100 w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-200</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-base-200 w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-300 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-300</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-base-300 w4-menu-md">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- MENÚS HORIZONTALES CON SUBMENÚS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Menús Horizontales con Submenús
            </h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-primary">
                Ejemplos de menus horizontales, con sub-menus y sub-menus anidados, oprima los items activos para prbar.
            </p>

            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Submenú Básico</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-base-100 w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li class="">
                            <a href="" class="active">Catálogo</a>
                            <ul class="w4-submenu-base-100">
                                <li><a href="">Categorías</a></li>
                                <li><a href="" class="active">Productos</a></li>
                                <li><a href="">Inventario</a></li>
                            </ul>
                        </li>
                        <li><a href="">Soporte</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-primary">Primary + Submenú Derecha
                    </h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-primary w4-menu-sm">
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Reportes</a></li>
                        <li class="w4-menu-right">
                            <a href="" class="active">Cuenta</a>
                            <ul class="w4-submenu-primary">
                                <li><a href="">Perfil</a></li>
                                <li><a href="" class="active">Seguridad</a></li>
                                <li><a href="">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-error">Error + Submenú Izquierda</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-error w4-menu-sm">
                        <li><a href="">Panel</a></li>
                        <li><a href="">Alertas</a></li>
                        <li class="w4-menu-left">
                            <a href="" class="active">Administrar</a>
                            <ul class="w4-submenu-error">
                                <li><a href="">Auditoría</a></li>
                                <li><a href="" class="active">Permisos</a></li>
                                <li><a href="">Registros</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-success">Submenú Anidado</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-success w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li class="">
                            <a href="">Sistema</a>
                            <ul class="w4-submenu-success">
                                <li><a href="">Estado</a></li>
                                <li class="w4-menu-right">
                                    <a href="" class="active">Configuración</a>
                                    <ul class="w4-submenu-info">
                                        <li><a href="">General</a></li>
                                        <li><a href="">API</a></li>
                                        <li class="w4-menu-right">
                                            <a href="" class="active">Webhooks</a>
                                            <ul class="w4-submenu-accent">
                                                <li><a href="">Webhooks</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Backups</a></li>
                            </ul>
                        </li>
                        <li><a href="">Ayuda</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- TAMAÑOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Tamaños del Menú</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-primary">
                Diferentes tamaños del menú, para diferentes usos, ajustan padding, tipografía, separación
                y ancho mínimo de submenú para que el componente escale de forma consistente.
            </p>

            <div class="w4-grid w4-grid-3">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">XS</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-xs">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">SM</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-sm">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">MD</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-md">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">LG</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-lg">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">XL</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-xl">
                        <li><a href="">Inbox</a></li>
                        <li><a href="" class="active">Sent</a></li>
                        <li><a href="">Drafts</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- MENÚS CON ICONOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Menús con Iconos</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-primary">
                Ejemplos de menu vertical y horizontal con iconos, para diferentes usos, enriqueciendo navegación y
                acciones rápidas.
            </p>

            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Sidebar con Iconos</h3>
                    <ul class="w4-menu w4-menu-base-100 w4-menu-md">
                        <li>
                            <a href="#" class="active">
                                <span class="w4-menu-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 13h8V3H3zM13 21h8v-6h-8zM13 11h8V3h-8zM3 21h8v-6H3z" />
                                    </svg>
                                </span>
                                <span class="w4-menu-item-label">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="w4-menu-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 4h18M3 12h18M3 20h18" />
                                    </svg>
                                </span>
                                <span class="w4-menu-item-label">Proyectos</span>
                                <span class="w4-menu-item-meta">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="w4-menu-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                    </svg>
                                </span>
                                <span class="w4-menu-item-label">Mensajes</span>
                                <span class="w4-menu-item-meta">3</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Horizontal con Iconos</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-primary w4-menu-sm w4-menu-center">
                        <li>
                            <a href="#" class="active">
                                <span class="w4-menu-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14" />
                                    </svg>
                                </span>
                                <span class="w4-menu-item-label">Nuevo</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="w4-menu-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </span>
                                <span class="w4-menu-item-label">Listado</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="w4-menu-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 20l9-5-9-5-9 5 9 5zM12 12V4" />
                                    </svg>
                                </span>
                                <span class="w4-menu-item-label">Exportar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ESTADOS CSS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-warning w4-heading-start">Estados CSS del Menú</h2>
            <hr class="w4-divider w4-divider-warning">
            <p class="w4-text w4-text-md w4-text-neutral">
                Ejemplos estáticos de estados usando <code>.active</code> y <code>data-w4-state</code> en los
                elementos <code>li</code>.
            </p>

            <div class="w4-grid w4-grid-4">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Active</h3>
                    <ul class="w4-menu w4-menu-primary w4-menu-sm">
                        <li><a href="">Dashboard</a></li>
                        <li><a href="" class="active">Ventas</a></li>
                        <li><a href="">Reportes</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Disabled</h3>
                    <ul class="w4-menu w4-menu-warning w4-menu-sm">
                        <li><a href="">Perfil</a></li>
                        <li data-w4-state="disabled"><a href="">Suscripción</a></li>
                        <li><a href="">Facturación</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Loading</h3>
                    <ul class="w4-menu w4-menu-info w4-menu-sm">
                        <li><a href="">General</a></li>
                        <li data-w4-state="loading"><a href="">Sincronizando...</a></li>
                        <li><a href="">Integraciones</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Hidden</h3>
                    <ul class="w4-menu w4-menu-secondary w4-menu-sm">
                        <li><a href="">General</a></li>
                        <li data-w4-state="hidden"><a href="">Elemento oculto</a></li>
                        <li><a href="">Integraciones</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ESTADOS JS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados JS del Menú</h2>
            <hr class="w4-divider w4-divider-error">
            <p class="w4-text w4-text-md w4-text-neutral">
                Cambia estados dinámicamente en tiempo real sobre los items del menú para validar
                <code>active</code>, <code>disabled</code>, <code>loading</code> y <code>hidden</code>.
            </p>

            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Menú Controlado</h3>
                    <ul id="jsInteractiveMenu" class="w4-menu w4-menu-error w4-menu-sm">
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Órdenes</a></li>
                        <li><a href="">Clientes</a></li>
                        <li><a href="">Configuración</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Controles</h3>
                    <div class="w4-stack w4-stack-vertical w4-stack-sm">
                        <select id="menuStateTarget" class="w4-select w4-select-sm w4-select-neutral">
                            <option value="0">Item 1: Dashboard</option>
                            <option value="1">Item 2: Órdenes</option>
                            <option value="2">Item 3: Clientes</option>
                            <option value="3">Item 4: Configuración</option>
                        </select>
                        <button type="button" id="menuStateClear" class="w4-button w4-button-sm w4-button-outline">Clear
                            States</button>
                        <button type="button" id="menuStateActive" class="w4-button w4-button-sm w4-button-success">Set
                            Active</button>
                        <button type="button" id="menuStateDisabled"
                            class="w4-button w4-button-sm w4-button-warning">Set Disabled</button>
                        <button type="button" id="menuStateLoading" class="w4-button w4-button-sm w4-button-info">Set
                            Loading</button>
                        <button type="button" id="menuStateHidden"
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