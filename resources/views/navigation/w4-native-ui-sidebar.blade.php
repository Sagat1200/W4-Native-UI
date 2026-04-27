<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Sidebar Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Sidebar</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente
                w4-sidebar</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Sidebar</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Sidebar</strong> es un panel de navegación lateral siempre visible, ideal para
                organizar menús, accesos rápidos y contenido contextual dentro de layouts de aplicación.
            </p>
            <h2 class="w4-heading w4-heading-h3 w4-heading-primary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li>Panel de navegación principal en dashboards y aplicaciones administrativas.</li>
                <li>Organización de módulos por secciones (usuarios, reportes, configuración, etc.).</li>
                <li>Accesos rápidos a acciones frecuentes sin cambiar de pantalla.</li>
                <li>Menús jerárquicos con subniveles para estructuras de información amplias.</li>
                <li>Contenedor de filtros o herramientas contextuales visibles durante el flujo de trabajo.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Ejemplo Base (Siempre Visible)</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md" style="padding: 0;">
                <div class="w4-stack w4-stack-horizontal" style="min-block-size: 20rem;">
                    <aside class="w4-sidebar w4-sidebar-md w4-sidebar-primary" data-w4-state="enabled">
                        <div class="w4-stack w4-stack-sm" style="padding: 1rem;">
                            <h3 class="w4-heading w4-heading-h3 w4-heading-primary-content">Sidebar Base</h3>
                            <ul class="w4-menu w4-menu-vertical">
                                <li class="w4-text w4-text-primary-content"><a href="#"><span>Dashboard</span></a></li>
                                <li class="w4-text w4-text-primary-content"><a href="#"><span>Usuarios</span></a></li>
                                <li class="w4-text w4-text-primary-content"><a href="#"><span>Reportes</span></a></li>
                                <li class="w4-text w4-text-primary-content"><a href="#"><span>Configuración</span></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="w4-stack w4-stack-sm">
                        <h3 class="w4-heading w4-heading-h3">Contenido Principal</h3>
                        <p class="w4-text w4-text-neutral">El sidebar permanece visible y comparte el layout con el
                            contenido principal.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-3">
                <aside class="w4-sidebar w4-sidebar-sm w4-sidebar-primary">
                    <div class="w4-stack w4-stack-sm"><span class="w4-text-primary-content">Primary</span></div>
                </aside>
                <aside class="w4-sidebar w4-sidebar-sm w4-sidebar-secondary">
                    <div class="w4-stack w4-stack-sm"><span class="w4-text-primary-content">Secondary</span></div>
                </aside>
                <aside class="w4-sidebar w4-sidebar-sm w4-sidebar-accent">
                    <div class="w4-stack w4-stack-sm"><span class="w4-text-primary-content">Accent</span></div>
                </aside>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Tamaños</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-sm">
                    <aside class="w4-sidebar w4-sidebar-xs w4-sidebar-base-300">
                        <div><span class="w4-text-primary-content">XS</span></div>
                    </aside>
                    <aside class="w4-sidebar w4-sidebar-sm w4-sidebar-base-300">
                        <div><span class="w4-text-primary-content">SM</span></div>
                    </aside>
                    <aside class="w4-sidebar w4-sidebar-md w4-sidebar-base-300">
                        <div><span class="w4-text-primary-content">MD</span></div>
                    </aside>
                </div>
                <div class="w4-stack w4-stack-horizontal w4-stack-sm">
                    <aside class="w4-sidebar w4-sidebar-lg w4-sidebar-base-300">
                        <div><span class="w4-text-primary-content">LG</span></div>
                    </aside>
                    <aside class="w4-sidebar w4-sidebar-xl w4-sidebar-base-300">
                        <div><span class="w4-text-primary-content">XL</span></div>
                    </aside>
                    <aside class="w4-sidebar w4-sidebar-full w4-sidebar-base-300">
                        <div><span class="w4-text-primary-content">FULL</span></div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Estados CSS del Sidebar</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-md w4-text-primary">
                Estados estáticos soportados: <code>enabled</code>, <code>disabled</code>, <code>active</code>,
                <code>hidden</code>, <code>collapsed</code>.
            </p>
            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-xl">
                    <h3 class="w4-heading w4-heading-h3">Enabled</h3>
                    <aside class="w4-sidebar w4-sidebar-md w4-sidebar-primary" data-w4-state="enabled">
                        <div><span class="w4-text-primary-content">Sidebar habilitado</span></div>
                    </aside>
                </div>
                <div class="w4-panel w4-panel-base-200 w4-panel-xl">
                    <h3 class="w4-heading w4-heading-h3">Disabled</h3>
                    <aside class="w4-sidebar w4-sidebar-md w4-sidebar-info" data-w4-state="disabled">
                        <div><span class="w4-text-primary-content">Sidebar deshabilitado</span></div>
                    </aside>
                </div>
                <div class="w4-panel w4-panel-base-200 w4-panel-xl">
                    <h3 class="w4-heading w4-heading-h3">Active</h3>
                    <aside class="w4-sidebar w4-sidebar-md w4-sidebar-success" data-w4-state="active">
                        <div><span class="w4-text-primary-content">Sidebar activo</span></div>
                    </aside>
                </div>
                <div class="w4-panel w4-panel-base-200 w4-panel-xl">
                    <h3 class="w4-heading w4-heading-h3">Collapsed</h3>
                    <aside class="w4-sidebar w4-sidebar-lg w4-sidebar-secondary" data-w4-state="collapsed">
                        <div><span class="w4-text-primary-content">Sidebar colapsado</span></div>
                    </aside>
                </div>
                <div class="w4-panel w4-panel-base-200 w4-panel-xl">
                    <h3 class="w4-heading w4-heading-h3">Hidden</h3>
                    <aside class="w4-sidebar w4-sidebar-md w4-sidebar-error" data-w4-state="hidden">
                        <div><span class="w4-text-primary-content">Sidebar oculto</span></div>
                    </aside>
                    <p class="w4-text w4-text-sm w4-text-neutral-content">Este estado no se visualiza por diseño.</p>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Estados JS Soportados
                (data-w4-state)</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-vertical">
                    <aside id="jsInteractiveSidebar"
                        class="w4-sidebar w4-sidebar-primary w4-sidebar-md w4-sidebar-collapsible-icons"
                        data-w4-component="sidebar" data-w4-state="collapsed">
                        <div class="w4-stack w4-stack-sm">
                            <a href="#" class="w4-sidebar-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span class="w4-sidebar-label">Dashboard</span>
                            </a>
                            <a href="#" class="w4-sidebar-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5V4H2v16h5m10 0v-8a2 2 0 00-2-2H9a2 2 0 00-2 2v8m10 0H7" />
                                </svg>
                                <span class="w4-sidebar-label">Proyectos</span>
                            </a>
                            <a href="#" class="w4-sidebar-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 17v-2a4 4 0 014-4h8m0 0l-3-3m3 3l-3 3M5 3h4a2 2 0 012 2v4a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />
                                </svg>
                                <span class="w4-sidebar-label">Integraciones</span>
                            </a>
                            <a href="#" class="w4-sidebar-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-sm" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317a9 9 0 113.35 0M9 9h6v11H9z" />
                                </svg>
                                <span class="w4-sidebar-label">Configuración</span>
                            </a>
                        </div>
                    </aside>
                    <div class="w4-stack w4-stack-sm w4-stack-horizontal w4-stack-center"
                        style="border-block-start: 1px solid hsl(var(--w4-base-300)); padding-block-start: 1rem;">
                        <span class="w4-text w4-text-sm w4-text-neutral">Set State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveSidebar').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-primary"
                            onclick="document.getElementById('jsInteractiveSidebar').setAttribute('data-w4-state', 'enabled')">Enabled</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveSidebar').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveSidebar').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-secondary"
                            onclick="document.getElementById('jsInteractiveSidebar').setAttribute('data-w4-state', 'collapsed')">Collapsed</button>
                        <button class="w4-button w4-button-sm w4-button-success"
                            onclick="document.getElementById('jsInteractiveSidebar').setAttribute('data-w4-state', 'expanded')">Expanded</button>
                        <button class="w4-button w4-button-sm w4-button-accent w4-sidebar-expanend"
                            data-w4-target="jsInteractiveSidebar">Toggle
                            Collapse/Expand</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveSidebar').setAttribute('data-w4-state', 'hidden')">Hidden</button>
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