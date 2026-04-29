<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Tab Lab</title>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Tab</h1>
            <p class="w4-text w4-text-neutral-content w4-text-center">Entorno de pruebas visuales para el componente
                w4-tab</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Tab</h2>


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
                    <button type="button" class="w4-tab w4-tab-neutral-content">Neutral</button>
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
                    <button type="button" class="w4-tab w4-tab-bordered w4-tab-neutral-content">Neutral</button>
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
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-neutral-content">Neutral</button>
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
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-neutral-content">Neutral</button>
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
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tab sin Borde y Contendido</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab</strong> (pestañas) puede mostrar el contenido en posiciones top y bottom para
                cada uno de sus tipos (Sin Bordered).
            </p>
            <hr class="w4-divider w4-divider-primary">

            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab sin Borde</strong> (pestañas) en posición top
            </p>
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-md w4-stack-center">
                    <div class="w4-tabs w4-tabs-top" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-neutral-content mx-2"
                            data-w4-target="tabTopNeutral">Neutral</button>
                        <button type="button" class="w4-tab w4-tab-primary mx-2"
                            data-w4-target="tabTopPrimary">Primary</button>
                        <button type="button" class="w4-tab w4-tab-secondary mx-2"
                            data-w4-target="tabTopSecondary">Secondary</button>
                        <button type="button" class="w4-tab w4-tab-accent mx-2"
                            data-w4-target="tabTopAccent">Accent</button>
                        <button type="button" class="w4-tab w4-tab-info mx-2" data-w4-target="tabTopInfo">Info</button>
                        <button type="button" class="w4-tab w4-tab-success mx-2"
                            data-w4-target="tabTopSuccess">Success</button>
                        <button type="button" class="w4-tab w4-tab-warning mx-2"
                            data-w4-target="tabTopWarning">Warning</button>
                        <button type="button" class="w4-tab w4-tab-error mx-2"
                            data-w4-target="tabTopError">Error</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-tab-bordered-content-panels">
                        <div id="tabTopNeutral" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-neutral w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-neutral-content">Top Neutral</p>
                        </div>
                        <div id="tabTopPrimary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-primary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-primary-content">Top Primary</p>
                        </div>
                        <div id="tabTopSecondary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-secondary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-secondary-content">Top Secondary</p>
                        </div>
                        <div id="tabTopAccent" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-accent w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-accent-content">Top Accent</p>
                        </div>
                        <div id="tabTopInfo" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-info w4-panel-sm"
                            hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-info-content">Top Info</p>
                        </div>
                        <div id="tabTopSuccess" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-success w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-success-content">Top Success</p>
                        </div>
                        <div id="tabTopWarning" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-warning w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-warning-content">Top Warning</p>
                        </div>
                        <div id="tabTopError" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-error w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-error-content">Top Error</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab sin borde</strong> (pestañas) en posición bottom
            </p>
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-md w4-stack-center">
                    <div class="w4-tabs w4-tabs-bottom" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-neutral-content mx-2"
                            data-w4-target="tabBottomNeutral">Neutral</button>
                        <button type="button" class="w4-tab w4-tab-primary mx-2"
                            data-w4-target="tabBottomPrimary">Primary</button>
                        <button type="button" class="w4-tab w4-tab-secondary mx-2"
                            data-w4-target="tabBottomSecondary">Secondary</button>
                        <button type="button" class="w4-tab w4-tab-accent mx-2"
                            data-w4-target="tabBottomAccent">Accent</button>
                        <button type="button" class="w4-tab w4-tab-info mx-2"
                            data-w4-target="tabBottomInfo">Info</button>
                        <button type="button" class="w4-tab w4-tab-success mx-2"
                            data-w4-target="tabBottomSuccess">Success</button>
                        <button type="button" class="w4-tab w4-tab-warning mx-2"
                            data-w4-target="tabBottomWarning">Warning</button>
                        <button type="button" class="w4-tab w4-tab-error mx-2"
                            data-w4-target="tabBottomError">Error</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
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
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tab Bordered y Contendido</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab</strong> (pestañas) puede mostrar el contenido en posiciones top y bottom para
                cada uno de sus tipos (Bordered).
            </p>
            <hr class="w4-divider w4-divider-primary">

            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab bordered</strong> (pestañas) en posición top
            </p>
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-md w4-stack-center">
                    <div class="w4-tabs w4-tabs-top" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-neutral-content w4-tab-active mx-2"
                            data-w4-target="tabTopBorderedNeutral">Neutral</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-primary mx-2"
                            data-w4-target="tabTopBorderedPrimary">Primary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-secondary mx-2"
                            data-w4-target="tabTopBorderedSecondary">Secondary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-accent mx-2"
                            data-w4-target="tabTopBorderedAccent">Accent</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-info mx-2"
                            data-w4-target="tabTopBorderedInfo">Info</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-success mx-2"
                            data-w4-target="tabTopBorderedSuccess">Success</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-warning mx-2"
                            data-w4-target="tabTopBorderedWarning">Warning</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-error mx-2"
                            data-w4-target="tabTopBorderedError">Error</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-tab-bordered-content-panels">
                        <div id="tabTopBorderedNeutral" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-neutral w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-neutral-content">Top Neutral</p>
                        </div>
                        <div id="tabTopBorderedPrimary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-primary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-primary-content">Top Primary</p>
                        </div>
                        <div id="tabTopBorderedSecondary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-secondary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-secondary-content">Top Secondary</p>
                        </div>
                        <div id="tabTopBorderedAccent" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-accent w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-accent-content">Top Accent</p>
                        </div>
                        <div id="tabTopBorderedInfo" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-info w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-info-content">Top Info</p>
                        </div>
                        <div id="tabTopBorderedSuccess" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-success w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-success-content">Top Success</p>
                        </div>
                        <div id="tabTopBorderedWarning" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-warning w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-warning-content">Top Warning</p>
                        </div>
                        <div id="tabTopBorderedError" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-error w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-error-content">Top Error</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab bordered</strong> (pestañas) en posición bottom
            </p>
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-md w4-stack-center">
                    <div class="w4-tabs w4-tabs-bottom" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-neutral-content w4-tab-active mx-2"
                            data-w4-target="tabBottomBorderedNeutral">Neutral</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-primary mx-2"
                            data-w4-target="tabBottomBorderedPrimary">Primary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-secondary mx-2"
                            data-w4-target="tabBottomBorderedSecondary">Secondary</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-accent mx-2"
                            data-w4-target="tabBottomBorderedAccent">Accent</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-info mx-2"
                            data-w4-target="tabBottomBorderedInfo">Info</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-success mx-2"
                            data-w4-target="tabBottomBorderedSuccess">Success</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-warning mx-2"
                            data-w4-target="tabBottomBorderedWarning">Warning</button>
                        <button type="button" class="w4-tab w4-tab-bordered w4-tab-error mx-2"
                            data-w4-target="tabBottomBorderedError">Error</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div id="tabBottomBorderedNeutral" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-neutral w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-neutral-content">Bottom Neutral</p>
                        </div>
                        <div id="tabBottomBorderedPrimary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-primary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-primary-content">Bottom Primary</p>
                        </div>
                        <div id="tabBottomBorderedSecondary" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-secondary w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-secondary-content">Bottom Secondary</p>
                        </div>
                        <div id="tabBottomBorderedAccent" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-accent w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-accent-content">Bottom Accent</p>
                        </div>
                        <div id="tabBottomBorderedInfo" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-info w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-info-content">Bottom Info</p>
                        </div>
                        <div id="tabBottomBorderedSuccess" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-success w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-success-content">Top Success</p>
                        </div>
                        <div id="tabBottomBorderedWarning" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-warning w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-warning-content">Bottom Warning</p>
                        </div>
                        <div id="tabBottomBorderedError" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-error w4-panel-sm" hidden aria-hidden="true">
                            <p class="w4-text w4-text-sm w4-text-error-content">Bottom Error</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tab Lifted y Contendido</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab</strong> (pestañas) puede mostrar el contenido en posiciones top y bottom para
                cada uno de sus tipos (Lifted).
            </p>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-panel w4-panel-base-100 w4-panel-md margin-t-md">
                <div class="w4-grid w4-grid-2 w4-gap-xl" style="position: relative;">
                    <!-- Top Lifted -->
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-tab-lifted-content-panels">
                            <div class="w4-tabs w4-tabs-lifted w4-tabs-top" data-w4-component="tab">
                                <button type="button" class="w4-tab w4-tab-lifted w4-tab-active w4-tab-neutral-content"
                                    data-w4-target="exLiftedTop1">Neutral</button>
                                <button type="button" class="w4-tab w4-tab-lifted w4-tab-active w4-tab-primary"
                                    data-w4-target="exLiftedTop2">Primary</button>
                                <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                    data-w4-target="exLiftedTop3">Secondary</button>
                            </div>
                            <div class="w4-stack w4-stack-sm">
                                <div id="exLiftedTop1" data-w4-tab-panel
                                    class="w4-tab-content w4-panel w4-panel-neutral w4-tab-lifted-content w4-panel-sm">
                                    <p class="w4-text w4-text-sm w4-text-neutral-content">Contenido Lifted Top Neutral
                                    </p>
                                </div>
                                <div id="exLiftedTop2" data-w4-tab-panel
                                    class="w4-tab-content w4-panel w4-panel-primary w4-tab-lifted-content w4-panel-sm"
                                    hidden aria-hidden="true">
                                    <p class="w4-text w4-text-sm w4-text-primary-content">Contenido Lifted Top Primary
                                    </p>
                                </div>
                                <div id="exLiftedTop3" data-w4-tab-panel
                                    class="w4-tab-content w4-panel w4-panel-secondary w4-tab-lifted-content w4-panel-sm"
                                    hidden aria-hidden="true">
                                    <p class="w4-text w4-text-sm w4-text-secondary-content">Contenido Lifted Top
                                        Secondary</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Divisor Vertical Central -->
                    <div class="w4-divider w4-divider-vertical w4-divider-primary"
                        style="position: absolute; left: 50%; top: 0; bottom: 0; transform: translateX(-50%); margin: 0;">
                    </div>

                    <!-- Bottom Lifted -->
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-tab-lifted-content-panels">
                            <div class="w4-tabs w4-tabs-lifted w4-tabs-bottom" data-w4-component="tab">
                                <button type="button" class="w4-tab w4-tab-lifted w4-tab-active w4-tab-neutral-content"
                                    data-w4-target="exLiftedBot1">Neutral</button>
                                <button type="button" class="w4-tab w4-tab-lifted w4-tab-active w4-tab-primary"
                                    data-w4-target="exLiftedBot2">Primary</button>
                                <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                    data-w4-target="exLiftedBot3">Secondary</button>
                            </div>
                            <div class="w4-stack w4-stack-sm">
                                <div id="exLiftedBot1" data-w4-tab-panel
                                    class="w4-tab-content w4-panel w4-panel-neutral w4-tab-lifted-content w4-panel-sm">
                                    <p class="w4-text w4-text-sm w4-text-neutral-content">Contenido Lifted Bottom
                                        Neutral</p>
                                </div>
                                <div id="exLiftedBot2" data-w4-tab-panel
                                    class="w4-tab-content w4-panel w4-panel-primary w4-tab-lifted-content w4-panel-sm">
                                    <p class="w4-text w4-text-sm w4-text-primary-content">Contenido Lifted Bottom
                                        Primary</p>
                                </div>
                                <div id="exLiftedBot3" data-w4-tab-panel
                                    class="w4-tab-content w4-panel w4-panel-secondary w4-tab-lifted-content w4-panel-sm"
                                    hidden aria-hidden="true">
                                    <p class="w4-text w4-text-sm w4-text-secondary-content">Contenido Lifted Bottom
                                        Secondary</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tab Boxed</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab Boxed</strong> en posiciones top
            </p>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-stack w4-stack-md w4-stack-center">
                <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-neutral-content w4-tab-active"
                        data-w4-target="tabboxedNeutral">Neutral</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary"
                        data-w4-target="tabboxedPrimary">Primary</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                        data-w4-target="tabboxedSecondary">Secondary</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-accent"
                        data-w4-target="tabboxedAccent">Accent</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-info"
                        data-w4-target="tabboxedInfo">Info</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-success"
                        data-w4-target="tabboxedSuccess">Success</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-warning"
                        data-w4-target="tabboxedWarning">Warning</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-error"
                        data-w4-target="tabboxedError">Error</button>
                </div>
            </div>
            <div class="w4-stack w4-stack-md w4-stack-center">
                <div id="tabboxedNeutral" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-neutral w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-neutral-content w4-text-center">Top Neutral</p>
                </div>
                <div id="tabboxedPrimary" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-primary w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-primary-content w4-text-center">Top Primary</p>
                </div>
                <div id="tabboxedSecondary" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-secondary w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-secondary-content w4-text-center">Top Secondary</p>
                </div>
                <div id="tabboxedAccent" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-accent w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-accent-content w4-text-center">Top Accent</p>
                </div>
                <div id="tabboxedInfo" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-info w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-info-content w4-text-center">Top Info</p>
                </div>
                <div id="tabboxedSuccess" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-success w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-success-content w4-text-center">Top Success</p>
                </div>
                <div id="tabboxedWarning" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-warning w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-warning-content w4-text-center">Top Warning</p>
                </div>
                <div id="tabboxedError" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-error w4-panel-sm w-2xl">
                    <p class="w4-text w4-text-sm w4-text-error-content w4-text-center">Top Error</p>
                </div>
            </div>

        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tab Boxed</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Tab Boxed</strong> en posiciones bottom
            </p>
            <hr class="w4-divider w4-divider-primary">

            <div class="w4-stack w4-tab-lifted-content-panels">
                <div class="w4-stack w4-stack-md w4-stack-center">
                    <div id="tabboxedbottomNeutral" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-neutral w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-neutral-content w4-text-center">Bottom Neutral</p>
                    </div>
                    <div id="tabboxedbottomPrimary" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-primary w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-primary-content w4-text-center">Bottom Primary</p>
                    </div>
                    <div id="tabboxedbottomSecondary" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-secondary w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-secondary-content w4-text-center">Bottom Secondary</p>
                    </div>
                    <div id="tabboxedbottomAccent" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-accent w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-accent-content w4-text-center">Bottom Accent</p>
                    </div>
                    <div id="tabboxedbottomInfo" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-info w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-info-content w4-text-center">Bottom Info</p>
                    </div>
                    <div id="tabboxedbottomSuccess" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-success w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-success-content w4-text-center">Bottom Success</p>
                    </div>
                    <div id="tabboxedbottomWarning" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-warning w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-warning-content w4-text-center">Bottom Warning</p>
                    </div>
                    <div id="tabboxedbottomError" data-w4-tab-panel
                        class="w4-tab-content w4-panel w4-panel-error w4-panel-sm w-2xl">
                        <p class="w4-text w4-text-sm w4-text-error-content w4-text-center">Bottom Error</p>
                    </div>
                </div>
                <div class="w4-stack w4-stack-md w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed w4-tabs-boxed-top" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-neutral-content w4-tab-active"
                            data-w4-target="tabboxedbottomNeutral">Neutral</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary"
                            data-w4-target="tabboxedbottomPrimary">Primary</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="tabboxedbottomSecondary">Secondary</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-accent"
                            data-w4-target="tabboxedbottomAccent">Accent</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-info"
                            data-w4-target="tabboxedbottomInfo">Info</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-success"
                            data-w4-target="tabboxedbottomSuccess">Success</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-warning"
                            data-w4-target="tabboxedbottomWarning">Warning</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-error"
                            data-w4-target="tabboxedbottomError">Error</button>
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