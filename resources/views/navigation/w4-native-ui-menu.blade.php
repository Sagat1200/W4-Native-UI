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
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Variantes de Color</h2>
            <hr class="w4-divider w4-divider-success">
            <p class="w4-text w4-text-md w4-text-neutral">
                Aplica una variante al contenedor <code>ul</code> con clases <code>.w4-menu-*</code>. El elemento
                activo usa <code>.active</code> para mostrar el estado seleccionado.
            </p>

            <div class="w4-grid w4-grid-3">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Neutral</h3>
                    <ul class="w4-menu w4-menu-neutral w4-menu-vertical">
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

        <!-- MENÚS HORIZONTALES -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Menús Horizontales</h2>
            <hr class="w4-divider w4-divider-accent">
            <p class="w4-text w4-text-md w4-text-neutral">
                Ejemplos de <code>.w4-menu-horizontal</code> sin submenús con todas las variantes de color disponibles.
            </p>

            <div class="w4-grid w4-grid-2">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Neutral</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-neutral w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-primary">Primary</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-primary w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-secondary">Secondary</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-secondary w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-accent">Accent</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-accent w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-info">Info</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-info w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-success">Success</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-success w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-warning">Warning</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-warning w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center w4-text-error">Error</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-error w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-100</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-base-100 w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-200</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-base-200 w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>

                <div class="w4-panel w4-panel-base-300 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-center">Base-300</h3>
                    <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-base-300 w4-menu-sm">
                        <li><a href="">Inicio</a></li>
                        <li><a href="" class="active">Explorar</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- TAMAÑOS -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Tamaños del Menú</h2>
            <hr class="w4-divider w4-divider-info">
            <p class="w4-text w4-text-md w4-text-neutral">
                Las clases <code>.w4-menu-xs</code> a <code>.w4-menu-xl</code> ajustan padding, tipografía, separación
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
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Menús con Iconos</h2>
            <hr class="w4-divider w4-divider-secondary">
            <p class="w4-text w4-text-md w4-text-neutral">
                Ejemplos usando <code>.w4-menu-item-icon</code>, <code>.w4-menu-item-label</code> y
                <code>.w4-menu-item-meta</code> para enriquecer navegación y acciones rápidas.
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