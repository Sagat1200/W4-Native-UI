<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Loading Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="w4-navbar  w4-navbar-fixed">
        <div class="w4-navbar-start">
            {{-- <button class="w4-btn w4-btn-ghost w4-btn-square">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w4-icon w4-icon-md stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button> --}}
            <button class="w4-button w4-button-ghost" aria-label="Native UI">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    class="w4-icon w4-icon-md stroke-current" aria-hidden="true">
                    <rect x="3.5" y="3.5" width="7" height="7" rx="1.5" stroke-width="1.75"></rect>
                    <rect x="13.5" y="3.5" width="7" height="7" rx="1.5" stroke-width="1.75"></rect>
                    <rect x="3.5" y="13.5" width="7" height="7" rx="1.5" stroke-width="1.75"></rect>
                    <rect x="13.5" y="13.5" width="7" height="7" rx="1.5" stroke-width="1.75"></rect>
                    <path d="M7 7L12 12L17 7" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span>Native UI</span>
            </button>

        </div>
        <div class="w4-navbar-center">
            <ul class="w4-menu w4-menu-horizontal w4-menu-center w4-menu-base-300 w4-menu-md">
                <li class="w4-text w4-text-neutral"><a href="">Inicio</a></li>
                <li class="w4-text w4-text-neutral"><a href="">Documentacion</a></li>
                <li class="w4-text w4-text-neutral"><a href="">Soporte</a></li>
            </ul>
        </div>
        <div class="w4-navbar-end">
            <div class="w4-stack w4-stack-xs mx-2">
                <select id="themeSwitcher" class="w4-select w4-select-sm w4-select-neutral">
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Loading</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Loading:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Loading (o Spinner) proporciona retroalimentación visual sobre operaciones asíncronas en
                curso. Es ligero, renderizado completamente en CSS (sin SVGs o GIFs pesados) y se adapta a cualquier
                contexto de tamaño o color del sistema de diseño.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Carga de página/sección:</strong> Centrado en un contenedor vacío
                    mientras se obtienen los datos de una API (usando <code>w4-loading-lg</code> o <code>xl</code>).
                </li>
                <li><strong class="w4-text-active">Acciones en botones:</strong> Reemplazar el ícono de un botón por el
                    spinner de carga al enviar un formulario (tamaños <code>xs</code> o <code>sm</code>).</li>
                <li><strong class="w4-text-active">Carga infinita (Infinite Scroll):</strong> Mostrar en la parte
                    inferior de una lista mientras se cargan más resultados.</li>
                <li><strong class="w4-text-active">Sincronización:</strong> Indicar procesos de guardado automático en
                    segundo plano usando la variante Dots (<code>w4-loading-dots</code>).</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Spinners con los colores semánticos del sistema.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                        data-w4-target="loadingSemanticPreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                        data-w4-target="loadingSemanticCode">Codigo HTML</button>
                </div>
                <div id="loadingSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        {{-- <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Default</span>
                        </div> --}}
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-neutral"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Neutral</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-primary"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Primary</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-secondary"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Secondary</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-accent"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Accent</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-info"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Info</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-success"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Success</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-warning"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Warning</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-error"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Error</span>
                        </div>
                    </div>
                </div>
                <div id="loadingSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;span class=&quot;w4-loading w4-loading-neutral&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-primary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-secondary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-accent&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-info&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-success&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-warning&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-error&quot;&gt;&lt;/span&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Default Loadings</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes visuales de loading para distintos contextos de interfaz.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                        data-w4-target="loadingShapePreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                        data-w4-target="loadingShapeCode">Codigo HTML</button>
                </div>
                <div id="loadingShapePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-5 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-spinner w4-loading-primary"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Spinner</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-dots w4-loading-info"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Dots</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-ring w4-loading-success"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Ring</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-bars w4-loading-warning"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Bars</span>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs">
                            <span class="w4-loading w4-loading-infinity w4-loading-secondary"></span>
                            <span class="w4-text w4-text-xs w4-text-neutral">Infinity</span>
                        </div>
                    </div>
                </div>
                <div id="loadingShapeCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;span class=&quot;w4-loading w4-loading-spinner&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-dots&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-ring&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-bars&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-infinity&quot;&gt;&lt;/span&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Loadings Empresariales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes avanzadas para contextos corporativos y dashboards operativos.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                        data-w4-target="loadingBusinessPreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                        data-w4-target="loadingBusinessCode">Codigo HTML</button>
                </div>
                <div id="loadingBusinessPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-pulse w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Pulse</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-eclipse w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Eclipse</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-radar w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Radar</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-square w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Square</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-diamond w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Diamond</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-wave w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Wave</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-clock w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Clock</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-hex w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Hex</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-dual-ring w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Dual Ring</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-orbit w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Orbit</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-crescent w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Crescent</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-steps w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Steps</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-scan w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Scan</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-cross w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Cross</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-corner w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Corner</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-triangle w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Triangle</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-beacon w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Beacon</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-matrix w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Matrix</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-helix w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Helix</span></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center w4-stack-xs"><span
                                class="w4-loading w4-loading-arc w4-loading-primary"></span><span
                                class="w4-text w4-text-xs w4-text-neutral">Arc</span></div>
                    </div>
                </div>
                <div id="loadingBusinessCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;span class=&quot;w4-loading w4-loading-pulse&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-eclipse&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-radar&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-square&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-diamond&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-wave&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-clock&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-hex&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-dual-ring&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-orbit&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-crescent&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-steps&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-scan&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-cross&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-corner&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-triangle&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-beacon&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-matrix&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-helix&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-arc&quot;&gt;&lt;/span&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas de tamaño para micro acciones y cargas de bloque.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                        data-w4-target="loadingSizePreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                        data-w4-target="loadingSizeCode">Codigo HTML</button>
                </div>
                <div id="loadingSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-item-center">
                        <span class="w4-loading w4-loading-primary w4-loading-xs"></span>
                        <span class="w4-loading w4-loading-primary w4-loading-sm"></span>
                        <span class="w4-loading w4-loading-primary w4-loading-md"></span>
                        <span class="w4-loading w4-loading-primary w4-loading-lg"></span>
                        <span class="w4-loading w4-loading-primary w4-loading-xl"></span>
                    </div>
                </div>
                <div id="loadingSizeCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;span class=&quot;w4-loading w4-loading-primary w4-loading-xs&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-primary w4-loading-sm&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-primary w4-loading-md&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-primary w4-loading-lg&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-primary w4-loading-xl&quot;&gt;&lt;/span&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Ejemplos de Uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Casos prácticos basados en los escenarios de carga más frecuentes.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                        data-w4-target="loadingUsePreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                        data-w4-target="loadingUseCode">Codigo HTML</button>
                </div>
                <div id="loadingUsePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-2 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Carga de página/sección</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-center">
                                <span class="w4-loading w4-loading-ring w4-loading-primary w4-loading-xl"></span>
                            </div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Acciones en botones</span>
                            <button type="button" class="w4-button w4-button-primary w4-button-sm" disabled>
                                <span class="w4-loading w4-loading-spinner w4-loading-xs"></span>
                                <span>Enviando...</span>
                            </button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Infinite Scroll</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-center">
                                <span class="w4-loading w4-loading-bars w4-loading-info w4-loading-md"></span>
                                <span class="w4-text w4-text-sm">Cargando más resultados...</span>
                            </div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Sincronización</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-center">
                                <span class="w4-loading w4-loading-dots w4-loading-success w4-loading-sm"></span>
                                <span class="w4-text w4-text-sm">Guardando cambios automáticamente...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="loadingUseCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;span class=&quot;w4-loading w4-loading-ring w4-loading-xl&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-spinner w4-loading-xs&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-bars w4-loading-md&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;w4-loading w4-loading-dots w4-loading-sm&quot;&gt;&lt;/span&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados soportados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                        data-w4-target="loadingStateClassPreview">Por Clase</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="loadingStateAttrPreview">Por Atributo</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="loadingStateClassPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-item-center">
                            <span class="w4-loading w4-loading-primary w4-loading-active"></span>
                            <span class="w4-loading w4-loading-warning w4-loading-disabled"></span>
                            <span class="w4-loading w4-loading-info w4-loading-loading"></span>
                        </div>
                        <p class="w4-text w4-text-sm w4-text-neutral">El estado <code>hidden</code> oculta el
                            componente.</p>
                    </div>
                    <div id="loadingStateAttrPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm" hidden
                        aria-hidden="true">
                        <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-item-center">
                            <span class="w4-loading w4-loading-primary" data-w4-state="active"></span>
                            <span class="w4-loading w4-loading-warning" data-w4-state="disabled"></span>
                            <span class="w4-loading w4-loading-info" data-w4-state="loading"></span>
                        </div>
                        <p class="w4-text w4-text-sm w4-text-neutral">Usa <code>data-w4-state="hidden"</code> para
                            ocultar.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Nativos Javascript Soportados al Componente
                Loading</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones del componente usando <code>data-w4-loading-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                        data-w4-target="loadingJsPreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="loadingJsCode">Codigo HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="loadingJsPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-item-center">
                                <span>Estado actual:</span>
                                <span id="labLoadingTarget" class="w4-loading w4-loading-primary w4-loading-lg"></span>
                            </div>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-loading-state="enabled" data-w4-target="labLoadingTarget">Clear</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-loading-state="active" data-w4-target="labLoadingTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-info"
                                    data-w4-loading-state="loading" data-w4-target="labLoadingTarget">Loading</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-loading-state="disabled" data-w4-target="labLoadingTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error"
                                    data-w4-loading-state="hidden" data-w4-target="labLoadingTarget">Hidden</button>
                            </div>
                        </div>
                    </div>
                    <div id="loadingJsCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre
                            class="m-0"><code class="w4-text w4-text-xs">&lt;span id=&quot;labLoadingTarget&quot; class=&quot;w4-loading w4-loading-primary&quot;&gt;&lt;/span&gt;
&lt;button data-w4-loading-state=&quot;active&quot; data-w4-target=&quot;labLoadingTarget&quot;&gt;Active&lt;/button&gt;
&lt;button data-w4-loading-state=&quot;loading&quot; data-w4-target=&quot;labLoadingTarget&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-loading-state=&quot;disabled&quot; data-w4-target=&quot;labLoadingTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-loading-state=&quot;hidden&quot; data-w4-target=&quot;labLoadingTarget&quot;&gt;Hidden&lt;/button&gt;</code></pre>
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