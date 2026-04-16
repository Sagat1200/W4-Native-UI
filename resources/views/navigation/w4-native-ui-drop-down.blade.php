<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Drop Down Lab</title>
    @NativeUIStyles
    <style>
        body {
            background-color: hsl(var(--w4-base-200));
            color: hsl(var(--w4-base-content));
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
            margin: 0;
            padding: 2rem;
            min-block-size: 100vh;
        }

        .lab-shell {
            max-inline-size: 1280px;
            margin: 0 auto;
            background-color: hsl(var(--w4-base-100));
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .lab-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            border-block-end: 1px solid hsl(var(--w4-base-300));
            padding-block-end: 1.25rem;
        }

        .lab-title {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }

        .lab-subtitle {
            margin: 0.5rem 0 0 0;
            color: hsl(var(--w4-base-content) / 0.72);
        }

        .theme-selector-wrapper {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .theme-selector {
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 1px solid hsl(var(--w4-base-300));
            background-color: hsl(var(--w4-base-100));
            color: hsl(var(--w4-base-content));
            min-inline-size: 180px;
        }

        .section-title {
            margin: 0 0 1rem 0;
            font-size: 1.25rem;
            font-weight: 600;
            border-inline-start: 4px solid hsl(var(--w4-primary));
            padding-inline-start: 0.75rem;
        }

        .demo-zone {
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            padding: 1rem;
            display: grid;
            gap: 1rem;
        }

        .demo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 0.875rem;
        }

        .demo-card {
            min-block-size: 190px;
            overflow: visible;
        }

        .dropdown-menu {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .dropdown-menu a,
        .dropdown-menu button {
            appearance: none;
            border: 0;
            background: transparent;
            color: inherit;
            text-align: start;
            text-decoration: none;
            padding: 0.35rem 0.45rem;
            border-radius: 0.45rem;
            cursor: pointer;
            font: inherit;
        }

        .dropdown-menu a:hover,
        .dropdown-menu button:hover {
            background-color: hsl(var(--w4-base-300) / 0.4);
        }

        .w4-dropdown[data-demo="right-end-fix"].w4-dropdown-right.w4-dropdown-end .w4-dropdown-content {
            inset-block-start: 0 !important;
            inset-block-end: auto !important;
            inset-inline-start: auto !important;
            inset-inline-end: calc(100% + var(--w4-spacing-1)) !important;
            margin-inline-start: 0 !important;
            margin-inline-end: 0 !important;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Dropdown Lab</h1>
                <p class="lab-subtitle">Pruebas de apertura, posicion, tamano, variante y estados de `w4-dropdown`.</p>
            </div>
            <div class="theme-selector-wrapper">
                <label for="themeSwitcher" style="font-weight: 600; font-size: 0.875rem;">Cambiar tema:</label>
                <select id="themeSwitcher" class="theme-selector">
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
        </header>

        <section class="w4-section w4-section-md w4-section-base-100"
            style="margin-block-end: 2rem; margin-block-start: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Dropdown</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Dropdown</strong> (menú desplegable) muestra una lista de acciones o enlaces
                contextuales cuando el usuario interactúa con un elemento desencadenador (como un botón o un icono).
                Ayuda a organizar y ocultar opciones secundarias para mantener una interfaz más limpia.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Menús de perfil de usuario:</strong> Opciones como "Mi Perfil", "Configuración" y "Cerrar
                    Sesión" accesibles desde el avatar en la navegación superior.</li>
                <li><strong>Acciones en tablas o listas:</strong> Agrupar acciones secundarias (ej. editar, duplicar,
                    eliminar) en un menú de "tres puntos" para cada registro.</li>
                <li><strong>Selectores de contexto:</strong> Elegir idioma, cambiar de tema visual (claro/oscuro), o
                    seleccionar el proyecto activo en una aplicación SaaS.</li>
                <li><strong>Filtros y ordenamiento:</strong> Desplegar listas de criterios o métodos de ordenamiento en
                    vistas complejas o catálogos.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title">Open Modes</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Click Toggle</div>
                        <div class="w4-dropdown w4-dropdown-bottom">
                            <button class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="dropdown">Abrir
                                Menu</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu">
                                    <a href="#">Perfil</a>
                                    <a href="#">Configuracion</a>
                                    <button type="button">Cerrar Sesion</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Hover</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-dropdown-hover">
                            <button class="w4-button w4-button-sm w4-button-secondary" data-w4-toggle="dropdown">Hover
                                Menu</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu">
                                    <a href="#">Docs</a>
                                    <a href="#">Guias</a>
                                    <a href="#">API</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Open by State</div>
                        <div class="w4-dropdown w4-dropdown-bottom" data-w4-state="open">
                            <button class="w4-button w4-button-sm w4-button-accent" data-w4-toggle="dropdown">Siempre
                                Open</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu">
                                    <a href="#">Vista 1</a>
                                    <a href="#">Vista 2</a>
                                    <a href="#">Vista 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Positions</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Bottom (Default)</div>
                        <div class="w4-dropdown w4-dropdown-bottom">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Bottom</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Item</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Top</div>
                        <div class="w4-dropdown w4-dropdown-top">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Top</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Item</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Left</div>
                        <div class="w4-dropdown w4-dropdown-left">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Left</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Item</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Right + End</div>
                        <div class="w4-dropdown w4-dropdown-right w4-dropdown-end" data-demo="right-end-fix">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Right End</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Item</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-warning));">Sizes & Variants</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Size XS</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-size-xs">
                            <button class="w4-button w4-button-xs" data-w4-toggle="dropdown">XS</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Item XS</a><a href="#">Otro</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Size LG</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-size-lg">
                            <button class="w4-button w4-button-lg" data-w4-toggle="dropdown">LG</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Item LG</a><a href="#">Otro</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Variant Primary</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-variant-primary">
                            <button class="w4-button w4-button-sm w4-button-primary"
                                data-w4-toggle="dropdown">Primary</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Action</a><a href="#">Settings</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Variant Neutral</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-variant-neutral">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Neutral</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Action</a><a href="#">Settings</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Active</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-dropdown-active">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Active</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Item</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Disabled</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-dropdown-disabled">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Disabled</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">No open</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Data State Disabled</div>
                        <div class="w4-dropdown w4-dropdown-bottom" data-w4-state="disabled">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Data Disabled</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">No open</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Hidden</div>
                        <div class="w4-dropdown w4-dropdown-bottom w4-dropdown-hidden">
                            <button class="w4-button w4-button-sm" data-w4-toggle="dropdown">Hidden</button>
                            <div class="w4-dropdown-content">
                                <div class="dropdown-menu"><a href="#">Hidden</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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