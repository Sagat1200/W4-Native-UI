<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Tab Lab</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .w4-tabs-folder {
            display: flex;
            align-items: flex-end;
            gap: 0;
            border-block-end: 2px solid hsl(var(--w4-base-content, 220 9% 24%) / 0.28);
        }

        .w4-tabs-folder.w4-tabs-bottom {
            align-items: flex-start;
            border-block-end: 0;
            border-block-start: 2px solid hsl(var(--w4-base-content, 220 9% 24%) / 0.28);
        }

        .w4-tabs-folder>.w4-tab-lifted {
            background-color: hsl(var(--w4-base-200, 220 14% 95%));
            border: 1px solid hsl(var(--w4-base-content, 220 9% 24%) / 0.28);
            border-block-end-color: hsl(var(--w4-base-content, 220 9% 24%) / 0.28);
            border-radius: var(--w4-radius-md, 0.5rem) var(--w4-radius-md, 0.5rem) 0 0;
            margin-inline-end: var(--w4-spacing-1, 0.25rem);
            margin-block-end: -1px;
            padding: calc(var(--w4-spacing-2, 0.5rem) + 2px) var(--w4-spacing-5, 1.25rem);
            line-height: 1.2;
            position: relative;
            z-index: 0;
        }

        .w4-tabs-folder.w4-tabs-bottom>.w4-tab-lifted {
            border-radius: 0 0 var(--w4-radius-md, 0.5rem) var(--w4-radius-md, 0.5rem);
            margin-block-start: -1px;
            margin-block-end: 0;
            border-block-start-color: hsl(var(--w4-base-content, 220 9% 24%) / 0.28);
        }

        .w4-tabs-folder>.w4-tab-lifted:is(.w4-tab-active, .w4-tab-selected, [aria-selected="true"], [data-w4-state~="active"], [data-w4-state~="selected"]) {
            background-color: hsl(var(--w4-base-100, 0 0% 100%));
            border-block-end-color: hsl(var(--w4-base-100, 0 0% 100%));
            z-index: 2;
        }

        .w4-tabs-folder.w4-tabs-bottom>.w4-tab-lifted:is(.w4-tab-active, .w4-tab-selected, [aria-selected="true"], [data-w4-state~="active"], [data-w4-state~="selected"]) {
            border-block-end-color: hsl(var(--w4-base-content, 220 9% 24%) / 0.28);
            border-block-start-color: hsl(var(--w4-base-100, 0 0% 100%));
        }
    </style>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Tab</h1>
            <p class="w4-text w4-text-neutral-content w4-text-center">Entorno de pruebas visuales para el componente
                w4-tab</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Tab</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                <strong>Tabs</strong> (pestañas) Pure CSS estilo DaisyUI
            </p>
            <div class="w4-stack w4-stack-md w4-stack-center">
                <div class="w4-tabs w4-tabs-lifted w4-tabs-top">
                    <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-primary" aria-label="Tab 1"
                        checked="checked" />
                    <div class="w4-tab-content w4-panel w4-panel-primary w4-tab-lifted-content">Tab content 1. This
                        content merges visually with the active tab.</div>

                    <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        aria-label="Tab 2" />
                    <div class="w4-tab-content w4-panel w4-panel-secondary w4-tab-lifted-content">Tab content
                        2 . Testing
                        the daisyui pure CSS implementation.</div>

                    <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-neutral" aria-label="Tab 3" />
                    <div class="w4-tab-content w4-panel w4-panel-base-100 w4-tab-lifted-content">Tab content 3. The
                        radial gradients provide smooth curves!</div>
                </div>
            </div>

            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab</strong> (pestañas) organiza contenido relacionado en múltiples vistas u
                hojas, permitiendo a los usuarios navegar entre ellas sin tener que cambiar de página. Es excelente para
                ahorrar espacio en pantalla y estructurar información densa.
            </p>
            <h2 class="w4-heading w4-heading-h3 w4-heading-primary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong>Paneles de configuración:</strong> Dividir preferencias complejas en categorías ordenadas
                    (General, Seguridad, Notificaciones, etc.).</li>
                <li><strong>Fichas de producto:</strong> Alternar entre la descripción detallada, especificaciones
                    técnicas y reseñas de clientes en un comercio electrónico.</li>
                <li><strong>Dashboards analíticos:</strong> Cambiar la vista de datos (Gráficos, Tablas, Resumen) dentro
                    de un mismo widget o panel interactivo.</li>
                <li><strong>Perfiles de usuario:</strong> Navegar entre información personal, actividad reciente y
                    ajustes de cuenta desde una misma pantalla.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes y Estilos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab</strong> (pestañas) ofrece varias variantes y estilos para personalizar la
                apariencia y
                comportamiento de las pestañas.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                <strong>Tabs</strong> (pestañas) sin borde
            </p>
            <div class="w4-stack w4-stack-md w4-stack-center">
                <div class="w4-tabs" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-base-100 w4-tab-active">Base-100</button>
                    <button type="button" class="w4-tab w4-tab-base-200">Base-200</button>
                    <button type="button" class="w4-tab w4-tab-base-300">Base-300</button>
                    <button type="button" class="w4-tab w4-tab-neutral">Neutral</button>
                    <button type="button" class="w4-tab w4-tab-primary">Primary</button>
                    <button type="button" class="w4-tab w4-tab-secondary">Secondary</button>
                    <button type="button" class="w4-tab w4-tab-accent">Accent</button>
                    <button type="button" class="w4-tab w4-tab-info">Info</button>
                    <button type="button" class="w4-tab w4-tab-success">Success</button>
                    <button type="button" class="w4-tab w4-tab-warning">Warning</button>
                    <button type="button" class="w4-tab w4-tab-error">Error</button>
                </div>
            </div>

            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                <strong>Tabs</strong> (pestañas) con borde
            </p>
            <div class="w4-stack w4-stack-md w4-stack-center">
                <div class="w4-tabs" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-base-100 w4-tab-active">Base-100</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-base-200">Base-200</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-base-300">Base-300</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-neutral">Neutral</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-primary">Primary</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-secondary">Secondary</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-accent">Accent</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-info">Info</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-success">Success</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-warning">Warning</button>
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-error">Error</button>
                </div>
            </div>

            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                <strong>Tabs</strong> (pestañas) estilo lifted
            </p>
            <div class="w4-stack w4-stack-md w4-stack-center">

                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-base-100 w4-tab-active">Base-100</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-base-200">Base-200</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-base-300">Base-300</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-neutral">Neutral</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary">Primary</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary">Secondary</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-accent">Accent</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-info">Info</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-success">Success</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-warning">Warning</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-error">Error</button>
                </div>
            </div>

            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                <strong>Tabs</strong> (pestañas) estilo folder
            </p>
            <div class="w4-stack w4-stack-md w4-stack-center">
                <div class="w4-tabs w4-tabs-folder" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-base-100 w4-tab-active">Base-100</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-base-200">Base-200</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-base-300">Base-300</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-neutral">Neutral</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary">Primary</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary">Secondary</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-accent">Accent</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-info">Info</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-success">Success</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-warning">Warning</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-error">Error</button>
                </div>
            </div>

            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                <strong>Tabs</strong> (pestañas) estilo boxed
            </p>
            <div class="w4-stack w4-stack-md w4-stack-center">

                <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-base-100 w4-tab-active">Base-100</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-base-200">Base-200</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-base-300">Base-300</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-neutral">Neutral</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary">Primary</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary">Secondary</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-accent">Accent</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-info">Info</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-success">Success</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-warning">Warning</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-error">Error</button>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Posiciones</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab</strong> (pestañas) ofrece varias posiciones para colocar las pestañas en la
                interfaz
                de usuario
            </p>
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-md w4-stack-center">
                    <div class="w4-tabs w4-tabs-top" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-active w4-tab-base-100 mx-2"
                            data-w4-target="tabBase100">Base-100</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-base-200 mx-2"
                            data-w4-target="tabBase200">Base-200</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-base-300 mx-2"
                            data-w4-target="tabBase300">Base-300</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-neutral mx-2"
                            data-w4-target="tabNeutral">Neutral</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-primary mx-2"
                            data-w4-target="tabPrimary">Primary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-secondary mx-2"
                            data-w4-target="tabSecondary">Secondary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-accent mx-2"
                            data-w4-target="tabAccent">Accent</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-info mx-2"
                            data-w4-target="tabInfo">Info</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-success mx-2"
                            data-w4-target="tabSuccess">Success</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-warning mx-2"
                            data-w4-target="tabWarning">Warning</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-error mx-2"
                            data-w4-target="tabError">Error</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div id="tabBase100" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <p class="w4-text w4-text-sm w4-text-base-100-content">Base-100</p>
                        </div>
                        <div id="tabBase200" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-base-200-content">Base-200</p>
                        </div>
                        <div id="tabBase300" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-300 w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-base-300-content">Base-300</p>
                        </div>
                        <div id="tabNeutral" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-neutral w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-neutral-content">Neutral</p>
                        </div>
                        <div id="tabPrimary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-primary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-primary-content">Primary</p>
                        </div>
                        <div id="tabSecondary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-secondary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-secondary-content">Secondary</p>
                        </div>
                        <div id="tabAccent" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-accent w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-accent-content">Accent</p>
                        </div>
                        <div id="tabInfo" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-info w4-panel-sm"
                            hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-info-content">Info</p>
                        </div>
                        <div id="tabSuccess" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-success w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-success-content">Success</p>
                        </div>
                        <div id="tabWarning" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-warning w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-warning-content">Warning</p>
                        </div>
                        <div id="tabError" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-error w4-panel-sm"
                            hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-error-content">Error</p>
                        </div>
                    </div>



                    <div class="w4-tabs w4-tabs-bottom" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-active w4-tab-base-100 mx-2"
                            data-w4-target="tabBottomBase100">Base-100</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-base-200 mx-2"
                            data-w4-target="tabBottomBase200">Base-200</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-base-300 mx-2"
                            data-w4-target="tabBottomBase300">Base-300</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-neutral mx-2"
                            data-w4-target="tabBottomNeutral">Neutral</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-primary mx-2"
                            data-w4-target="tabBottomPrimary">Primary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-secondary mx-2"
                            data-w4-target="tabBottomSecondary">Secondary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-accent mx-2"
                            data-w4-target="tabBottomAccent">Accent</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-info mx-2"
                            data-w4-target="tabBottomInfo">Info</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-success mx-2"
                            data-w4-target="tabBottomSuccess">Success</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-warning mx-2"
                            data-w4-target="tabBottomWarning">Warning</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-error mx-2"
                            data-w4-target="tabBottomError">Error</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div id="tabBottomBase100" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <p class="w4-text w4-text-sm w4-text-base-100-content">Bottom Base-100</p>
                        </div>
                        <div id="tabBottomBase200" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-base-200-content">Bottom Base-200</p>
                        </div>
                        <div id="tabBottomBase300" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-300 w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-base-300-content">Bottom Base-300</p>
                        </div>
                        <div id="tabBottomNeutral" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-neutral w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-neutral-content">Bottom Neutral</p>
                        </div>
                        <div id="tabBottomPrimary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-primary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-primary-content">Bottom Primary</p>
                        </div>
                        <div id="tabBottomSecondary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-secondary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-secondary-content">Bottom Secondary</p>
                        </div>
                        <div id="tabBottomAccent" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-accent w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-accent-content">Bottom Accent</p>
                        </div>
                        <div id="tabBottomInfo" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-info w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-info-content">Bottom Info</p>
                        </div>
                        <div id="tabBottomSuccess" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-success w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-success-content">Bottom Success</p>
                        </div>
                        <div id="tabBottomWarning" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-warning w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-warning-content">Bottom Warning</p>
                        </div>
                        <div id="tabBottomError" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-error w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-error-content">Bottom Error</p>
                        </div>
                    </div>

                    <hr class="w4-divider w4-divider-primary">
                    <div class="w4-stack w4-stack-md w4-stack-center">
                        <div class="w4-tabs w4-tabs-lifted w4-tabs-top">
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-base-100"
                                aria-label="Base-100" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-base-100 w4-tab-lifted-content">Tab content 1.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-base-200"
                                aria-label="Base-200" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-base-200 w4-tab-lifted-content">Tab content 2.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-base-300"
                                aria-label="Base-300" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-base-300 w4-tab-lifted-content">Tab content 3.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-primary"
                                aria-label="Primary" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-primary w4-tab-lifted-content">Tab content 4.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                aria-label="Secondary" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-secondary w4-tab-lifted-content">Tab content 5.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-accent"
                                aria-label="Accent" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-accent w4-tab-lifted-content">Tab content 6.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-info"
                                aria-label="Info" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-info w4-tab-lifted-content">Tab content 7.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-success"
                                aria-label="Success" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-success w4-tab-lifted-content">Tab content 8.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-warning"
                                aria-label="Warning" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-warning w4-tab-lifted-content">Tab content 9.
                                This
                                content merges visually with the active tab.</div>
                            <input type="radio" name="w4-tabs" class="w4-tab w4-tab-lifted w4-tab-error"
                                aria-label="Error" checked="checked" />
                            <div class="w4-tab-content w4-panel w4-panel-error w4-tab-lifted-content">Tab content 10.
                                This
                                content merges visually with the active tab.</div>

                        </div>
                    </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Estilos de Tab</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-stack w4-stack-lg w4-stack-center">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Folder</h3>
                    <div class="w4-tabs w4-tabs-folder" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active">Perfil</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary">Seguridad</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-accent">Notificaciones</button>
                    </div>
                </div>



                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Boxed</h3>
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active">Mensual</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary">Trimestral</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-accent">Anual</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Tamanos</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-stack w4-stack-md">
                <div class="w4-tabs w4-tabs-xs" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-bordered">XSmall</button>
                    <button type="button" class="w4-tab w4-tab-bordered">XSmall</button>
                    <button type="button" class="w4-tab w4-tab-bordered">XSmall</button>
                </div>
                <div class="w4-tabs w4-tabs-sm" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-active">Small</button>
                    <button type="button" class="w4-tab w4-tab-bordered">Small</button>
                    <button type="button" class="w4-tab w4-tab-bordered">Small</button>
                </div>
                <div class="w4-tabs w4-tabs-md" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-active">Medium</button>
                    <button type="button" class="w4-tab w4-tab-bordered">Medium</button>
                    <button type="button" class="w4-tab w4-tab-bordered">Medium</button>
                </div>
                <div class="w4-tabs w4-tabs-lg" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-active">Large</button>
                    <button type="button" class="w4-tab w4-tab-bordered">Large</button>
                    <button type="button" class="w4-tab w4-tab-bordered">Large</button>
                </div>
                <div class="w4-tabs w4-tabs-xl" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-active">XLarge</button>
                    <button type="button" class="w4-tab w4-tab-bordered">XLarge</button>
                    <button type="button" class="w4-tab w4-tab-bordered">XLarge</button>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Estados CSS</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-tabs" data-w4-component="tab">
                <button type="button" class="w4-tab w4-tab-bordered w4-tab-active">Active</button>
                <button type="button" class="w4-tab w4-tab-bordered w4-tab-selected">Selected</button>
                <button type="button" class="w4-tab w4-tab-bordered w4-tab-disabled">Disabled</button>
                <button type="button" class="w4-tab w4-tab-bordered w4-tab-hidden">Hidden</button>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Estados JS Soportados</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-md">
                    <div class="w4-tabs" data-w4-component="tab">
                        <button type="button" id="jsTabAlpha" class="w4-tab w4-tab-bordered w4-tab-active"
                            data-w4-state="active">Alpha</button>
                        <button type="button" id="jsTabBeta" class="w4-tab w4-tab-bordered"
                            data-w4-state="enabled">Beta</button>
                        <button type="button" id="jsTabGamma" class="w4-tab w4-tab-bordered"
                            data-w4-state="enabled">Gamma</button>
                    </div>

                    <div class="w4-stack w4-stack-sm">
                        <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-xs">
                            <button class="w4-button w4-button-sm w4-button-primary"
                                onclick="document.getElementById('jsTabAlpha').setAttribute('data-w4-state', 'enabled')">Enabled</button>
                            <button class="w4-button w4-button-sm w4-button-secondary"
                                onclick="document.getElementById('jsTabAlpha').setAttribute('data-w4-state', 'active')">Active</button>
                            <button class="w4-button w4-button-sm w4-button-accent"
                                onclick="document.getElementById('jsTabAlpha').setAttribute('data-w4-state', 'selected')">Selected</button>
                            <button class="w4-button w4-button-sm w4-button-warning"
                                onclick="document.getElementById('jsTabAlpha').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                            <button class="w4-button w4-button-sm w4-button-error"
                                onclick="document.getElementById('jsTabAlpha').setAttribute('data-w4-state', 'hidden')">Hidden</button>
                        </div>
                        <p class="w4-text w4-text-sm w4-text-neutral-content">
                            Controles aplicados al tab <strong>Alpha</strong> para validar los hooks de estado JS.
                        </p>
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