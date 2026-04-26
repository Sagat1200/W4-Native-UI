<!DOCTYPE html>
<html lang="es" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Template - Navbar + Sidebar Content</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .w4-page-layout {
            --w4-navbar-height: 4rem;
            --w4-sidebar-current-width: 4rem;
            min-block-size: 100vh;
            padding-block-start: var(--w4-navbar-height);
        }

        .w4-page-layout>.w4-sidebar {
            inset-block-start: var(--w4-navbar-height);
            block-size: calc(100vh - var(--w4-navbar-height));
        }

        .w4-page-layout>.w4-page-main {
            margin-inline-start: var(--w4-sidebar-current-width);
            inline-size: calc(100% - var(--w4-sidebar-current-width));
            padding: 1.5rem;
            transition: margin-inline-start 0.2s ease, inline-size 0.2s ease;
        }
    </style>
</head>

<body>
    <div class="w4-navbar w4-navbar-primary w4-navbar-fixed">
        <div class="w4-navbar-start">
            <button class="w4-button w4-button-ghost w4-button-square w4-sidebar-expanend ml-2"
                data-w4-target="appSidebar">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w4-icon w4-icon-md stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                    stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                    class="my-1.5 inline-block size-4">
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                    <path d="M9 4v16"></path>
                    <path d="M14 10l2 2l-2 2"></path>
                </svg>
            </button>
            <a href="#" class="w4-button w4-button-ghost">W4 Admin</a>
        </div>
        <div class="w4-navbar-center">
            <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-primary-content w4-menu-sm">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Analitica</a></li>
                <li><a href="#">Ventas</a></li>
                <li><a href="#">Soporte</a></li>
            </ul>
        </div>
        <div class="w4-navbar-end">
            <div class="w4-stack w4-stack-xs">
                <select id="themeSwitcher" class="w4-select w4-select-sm w4-select-neutral">
                    <option value="native-ui.light">Light</option>
                    <option value="native-ui.dark">Dark</option>
                    <option value="native-ui.corporate">Corporate</option>
                    <option value="native-ui.night">Night</option>
                    <option value="native-ui.business">Business</option>
                </select>
            </div>
        </div>
    </div>

    <div class="w4-page-layout">
        <aside id="appSidebar"
            class="w4-sidebar w4-sidebar-primary w4-sidebar-xs w4-sidebar-fixed w4-sidebar-collapsible-icons"
            data-w4-component="sidebar" data-w4-state="collapsed">
            <div class="w4-stack w4-stack-sm">
                <a href="#" class="w4-sidebar-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="w4-sidebar-label">Dashboard</span>
                </a>
                <a href="#" class="w4-sidebar-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5V4H2v16h5m10 0v-8a2 2 0 00-2-2H9a2 2 0 00-2 2v8m10 0H7" />
                    </svg>
                    <span class="w4-sidebar-label">Proyectos</span>
                </a>
                <a href="#" class="w4-sidebar-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2a4 4 0 014-4h8m0 0l-3-3m3 3l-3 3M5 3h4a2 2 0 012 2v4a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />
                    </svg>
                    <span class="w4-sidebar-label">Integraciones</span>
                </a>
                <a href="#" class="w4-sidebar-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317a9 9 0 113.35 0M9 9h6v11H9z" />
                    </svg>
                    <span class="w4-sidebar-label">Configuracion</span>
                </a>
            </div>
        </aside>

        <main id="appMainContent" class="w4-page-main">
            <div class="w4-section w4-section-lg">
                <h1 class="w4-heading w4-heading-h1 w4-heading-primary">Panel Principal</h1>
                <p class="w4-text w4-text-neutral">
                    Plantilla base con <strong>navbar</strong> y <strong>sidebar</strong> para administrar contenido de
                    pagina.
                </p>
            </div>

            <section class="w4-section w4-section-lg">
                <div class="w4-grid w4-grid-3">
                    <div class="w4-card w4-card-base-100 w4-card-shadow">
                        <div class="w4-card-body">
                            <h2 class="w4-heading w4-heading-h3">Usuarios</h2>
                            <p class="w4-text">1,248 activos</p>
                        </div>
                    </div>
                    <div class="w4-card w4-card-base-100 w4-card-shadow">
                        <div class="w4-card-body">
                            <h2 class="w4-heading w4-heading-h3">Ventas</h2>
                            <p class="w4-text">$ 42,380 este mes</p>
                        </div>
                    </div>
                    <div class="w4-card w4-card-base-100 w4-card-shadow">
                        <div class="w4-card-body">
                            <h2 class="w4-heading w4-heading-h3">Tickets</h2>
                            <p class="w4-text">37 pendientes</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w4-section w4-section-lg">
                <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Contenido de Pagina</h2>
                <hr class="w4-divider w4-divider-secondary">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-stack w4-stack-sm">
                        <p class="w4-text">
                            Aqui puedes renderizar listados, formularios, tablas y bloques dinamicos del modulo actual.
                        </p>
                        <div style="overflow-x:auto;">
                            <table class="w4-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1024</td>
                                        <td>Landing corporativa</td>
                                        <td><span class="w4-badge w4-badge-success">Activo</span></td>
                                        <td>2026-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>#1025</td>
                                        <td>Portal clientes</td>
                                        <td><span class="w4-badge w4-badge-warning">Revision</span></td>
                                        <td>2026-04-24</td>
                                    </tr>
                                    <tr>
                                        <td>#1026</td>
                                        <td>Intranet RRHH</td>
                                        <td><span class="w4-badge w4-badge-error">Pausado</span></td>
                                        <td>2026-04-22</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w4-section w4-section-lg">
                <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Contenido de Pagina</h2>
                <hr class="w4-divider w4-divider-secondary">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-stack w4-stack-sm">
                        <p class="w4-text">
                            Aqui puedes renderizar listados, formularios, tablas y bloques dinamicos del modulo actual.
                        </p>
                        <div style="overflow-x:auto;">
                            <table class="w4-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1024</td>
                                        <td>Landing corporativa</td>
                                        <td><span class="w4-badge w4-badge-success">Activo</span></td>
                                        <td>2026-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>#1025</td>
                                        <td>Portal clientes</td>
                                        <td><span class="w4-badge w4-badge-warning">Revision</span></td>
                                        <td>2026-04-24</td>
                                    </tr>
                                    <tr>
                                        <td>#1026</td>
                                        <td>Intranet RRHH</td>
                                        <td><span class="w4-badge w4-badge-error">Pausado</span></td>
                                        <td>2026-04-22</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w4-section w4-section-lg">
                <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Contenido de Pagina</h2>
                <hr class="w4-divider w4-divider-secondary">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-stack w4-stack-sm">
                        <p class="w4-text">
                            Aqui puedes renderizar listados, formularios, tablas y bloques dinamicos del modulo actual.
                        </p>
                        <div style="overflow-x:auto;">
                            <table class="w4-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1024</td>
                                        <td>Landing corporativa</td>
                                        <td><span class="w4-badge w4-badge-success">Activo</span></td>
                                        <td>2026-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>#1025</td>
                                        <td>Portal clientes</td>
                                        <td><span class="w4-badge w4-badge-warning">Revision</span></td>
                                        <td>2026-04-24</td>
                                    </tr>
                                    <tr>
                                        <td>#1026</td>
                                        <td>Intranet RRHH</td>
                                        <td><span class="w4-badge w4-badge-error">Pausado</span></td>
                                        <td>2026-04-22</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w4-section w4-section-lg">
                <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Contenido de Pagina</h2>
                <hr class="w4-divider w4-divider-secondary">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-stack w4-stack-sm">
                        <p class="w4-text">
                            Aqui puedes renderizar listados, formularios, tablas y bloques dinamicos del modulo actual.
                        </p>
                        <div style="overflow-x:auto;">
                            <table class="w4-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1024</td>
                                        <td>Landing corporativa</td>
                                        <td><span class="w4-badge w4-badge-success">Activo</span></td>
                                        <td>2026-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>#1025</td>
                                        <td>Portal clientes</td>
                                        <td><span class="w4-badge w4-badge-warning">Revision</span></td>
                                        <td>2026-04-24</td>
                                    </tr>
                                    <tr>
                                        <td>#1026</td>
                                        <td>Intranet RRHH</td>
                                        <td><span class="w4-badge w4-badge-error">Pausado</span></td>
                                        <td>2026-04-22</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @NativeUIScripts
    @NativeUIInit

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var storageKey = "w4-native-ui-theme";
            var switcher = document.getElementById("themeSwitcher");
            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";
            var layout = document.querySelector(".w4-page-layout");
            var sidebar = document.getElementById("appSidebar");

            document.documentElement.setAttribute("data-theme", currentTheme);

            if (switcher) {
                switcher.value = currentTheme;
                switcher.addEventListener("change", function (event) {
                    var theme = event.target.value;
                    document.documentElement.setAttribute("data-theme", theme);
                    localStorage.setItem(storageKey, theme);
                });
            }

            function syncLayoutWithSidebar() {
                if (!layout || !sidebar) return;
                var width = sidebar.getBoundingClientRect().width || 0;
                layout.style.setProperty("--w4-sidebar-current-width", width + "px");
            }

            syncLayoutWithSidebar();
            window.addEventListener("resize", syncLayoutWithSidebar);

            if (sidebar) {
                var resizeObserver = new ResizeObserver(syncLayoutWithSidebar);
                resizeObserver.observe(sidebar);

                var mutationObserver = new MutationObserver(syncLayoutWithSidebar);
                mutationObserver.observe(sidebar, {
                    attributes: true,
                    attributeFilter: ["class", "data-w4-state", "style"]
                });
            }
        });
    </script>
</body>

</html>