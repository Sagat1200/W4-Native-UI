<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Alert Lab</title>
    @NativeUIStyles
    <!-- FontAwesome for icons -->
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Alert</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Alert:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Alert</strong> es un elemento de retroalimentación visual diseñado para comunicar
                información
                importante, cambios de estado o advertencias críticas al usuario sin interrumpir su flujo de trabajo
                principal.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Feedback de sistema:</strong> Notificar sobre el éxito de una
                    operación ("Guardado exitosamente") o un error crítico.</li>
                <li><strong class="w4-text-active">Anuncios informativos:</strong> Informar sobre nuevas
                    características, actualizaciones del sistema o mantenimientos programados.</li>
                <li><strong class="w4-text-active">Validación de formularios:</strong> Agrupar errores de validación en
                    la parte superior de un formulario extenso.</li>
                <li><strong class="w4-text-active">Banner global:</strong> Fijarlo en la parte superior del Layout
                    principal para alertas a nivel de aplicación usando las variantes de tamaño y color sólido.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Alertas con colores del sistema semántico.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="alertSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="alertSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="alertSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-alert"><i class="fa-solid fa-circle"></i><span>Default</span>
                        </div>
                        <div class="w4-alert w4-alert-primary"><i class="fa-solid fa-bolt"></i><span>Primary</span>
                        </div>
                        <div class="w4-alert w4-alert-secondary"><i
                                class="fa-solid fa-layer-group"></i><span>Secondary</span>
                        </div>
                        <div class="w4-alert w4-alert-accent"><i
                                class="fa-solid fa-wand-magic-sparkles"></i><span>Accent</span>
                        </div>
                        <div class="w4-alert w4-alert-info"><i class="fa-solid fa-circle-info"></i><span>Info</span>
                        </div>
                        <div class="w4-alert w4-alert-success"><i
                                class="fa-solid fa-circle-check"></i><span>Success</span>
                        </div>
                        <div class="w4-alert w4-alert-warning"><i
                                class="fa-solid fa-triangle-exclamation"></i><span>Warning</span>
                        </div>
                        <div class="w4-alert w4-alert-error"><i class="fa-solid fa-circle-xmark"></i><span>Error</span>
                        </div>
                    </div>
                </div>
                <div id="alertSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class=&quot;w4-alert&quot;&gt;Default&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-primary&quot;&gt;Primary&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-secondary&quot;&gt;Secondary&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-accent&quot;&gt;Accent&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info&quot;&gt;Info&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-success&quot;&gt;Success&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-warning&quot;&gt;Warning&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-error&quot;&gt;Error&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Variantes Solid Y Outline</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Alertas con variantes sólidas,contornos y superficie.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="alertSurfacePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="alertSurfaceCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="alertSurfacePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-vertical w4-stack-sm">
                        <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Solid</h3>
                        <div class="w4-grid w4-grid-4 w4-grid-sm">
                            <div class="w4-alert w4-alert-neutral w4-alert-solid"><span>Neutral Solid</span></div>
                            <div class="w4-alert w4-alert-primary w4-alert-solid"><span>Primary Solid</span></div>
                            <div class="w4-alert w4-alert-secondary w4-alert-solid"><span>Secondary Solid</span></div>
                            <div class="w4-alert w4-alert-accent w4-alert-solid"><span>Accent Solid</span></div>
                            <div class="w4-alert w4-alert-info w4-alert-solid"><span>Info Solid</span></div>
                            <div class="w4-alert w4-alert-success w4-alert-solid"><span>Success Solid</span></div>
                            <div class="w4-alert w4-alert-warning w4-alert-solid"><span>Warning Solid</span></div>
                            <div class="w4-alert w4-alert-error w4-alert-solid"><span>Error Solid</span></div>
                        </div>
                        <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Outline</h3>
                        <div class="w4-grid w4-grid-4 w4-grid-sm">
                            <div class="w4-alert w4-alert-outline"><span>Default Outline</span></div>
                            <div class="w4-alert w4-alert-primary w4-alert-outline"><span>Primary Outline</span></div>
                            <div class="w4-alert w4-alert-secondary w4-alert-outline"><span>Secondary Outline</span>
                            </div>
                            <div class="w4-alert w4-alert-accent w4-alert-outline"><span>Accent Outline</span></div>
                            <div class="w4-alert w4-alert-info w4-alert-outline"><span>Info Outline</span></div>
                            <div class="w4-alert w4-alert-success w4-alert-outline"><span>Success Outline</span></div>
                            <div class="w4-alert w4-alert-warning w4-alert-outline"><span>Warning Outline</span></div>
                            <div class="w4-alert w4-alert-error w4-alert-outline"><span>Error Outline</span></div>
                        </div>
                        <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Dash</h3>
                        <div class="w4-grid w4-grid-4 w4-grid-sm">
                            <div class="w4-alert w4-alert-dash"><span>Default Dash</span></div>
                            <div class="w4-alert w4-alert-primary w4-alert-dash"><span>Primary Dash</span></div>
                            <div class="w4-alert w4-alert-secondary w4-alert-dash"><span>Secondary Dash</span></div>
                            <div class="w4-alert w4-alert-accent w4-alert-dash"><span>Accent Dash</span></div>
                            <div class="w4-alert w4-alert-info w4-alert-dash"><span>Info Dash</span></div>
                            <div class="w4-alert w4-alert-success w4-alert-dash"><span>Success Dash</span></div>
                            <div class="w4-alert w4-alert-warning w4-alert-dash"><span>Warning Dash</span></div>
                            <div class="w4-alert w4-alert-error w4-alert-dash"><span>Error Dash</span></div>
                        </div>
                    </div>
                </div>
                <div id="alertSurfaceCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class=&quot;w4-alert w4-alert-neutral w4-alert-solid&quot;&gt;Neutral Solid&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-primary w4-alert-solid&quot;&gt;Primary Solid&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-secondary w4-alert-solid&quot;&gt;Secondary Solid&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-accent w4-alert-solid&quot;&gt;Accent Solid&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-solid&quot;&gt;Info Solid&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-success w4-alert-solid&quot;&gt;Success Solid&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-warning w4-alert-solid&quot;&gt;Warning Solid&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-error w4-alert-solid&quot;&gt;Error Solid&lt;/div&gt;

&lt;div class=&quot;w4-alert w4-alert-outline&quot;&gt;Default Outline&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-primary w4-alert-outline&quot;&gt;Primary Outline&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-secondary w4-alert-outline&quot;&gt;Secondary Outline&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-accent w4-alert-outline&quot;&gt;Accent Outline&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-outline&quot;&gt;Info Outline&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-success w4-alert-outline&quot;&gt;Success Outline&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-warning w4-alert-outline&quot;&gt;Warning Outline&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-error w4-alert-outline&quot;&gt;Error Outline&lt;/div&gt;

&lt;div class=&quot;w4-alert w4-alert-dash&quot;&gt;Default Dash&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-primary w4-alert-dash&quot;&gt;Primary Dash&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-secondary w4-alert-dash&quot;&gt;Secondary Dash&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-accent w4-alert-dash&quot;&gt;Accent Dash&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-dash&quot;&gt;Info Dash&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-success w4-alert-dash&quot;&gt;Success Dash&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-warning w4-alert-dash&quot;&gt;Warning Dash&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-error w4-alert-dash&quot;&gt;Error Dash&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">
                Tamaños de alerta
            </h2>
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="alertSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="alertSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="alertSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <div class="w4-alert w4-alert-info w4-alert-xs">
                            <i class="fa-solid fa-circle-info"></i><span>Alerta XS</span>
                        </div>
                        <div class="w4-alert w4-alert-info w4-alert-sm">
                            <i class="fa-solid fa-circle-info"></i><span>Alerta SM</span>
                        </div>
                        <div class="w4-alert w4-alert-info w4-alert-md">
                            <i class="fa-solid fa-circle-info"></i><span>Alerta MD</span>
                        </div>
                        <div class="w4-alert w4-alert-info w4-alert-lg">
                            <i class="fa-solid fa-circle-info"></i><span>Alerta LG</span>
                        </div>
                        <div class="w4-alert w4-alert-info w4-alert-xl">
                            <i class="fa-solid fa-circle-info"></i><span>Alerta XL</span>
                        </div>
                    </div>
                </div>
                <div id="alertSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;div class=&quot;w4-alert w4-alert-info w4-alert-xs&quot;&gt;Alerta XS&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-sm&quot;&gt;Alerta SM&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-md&quot;&gt;Alerta MD&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-lg&quot;&gt;Alerta LG&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-xl&quot;&gt;Alerta XL&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados soportados por clases y atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                        data-w4-target="alertStateClassPreview">Por Clase</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="alertStateAttrPreview">Por Atributo</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-accent"
                        data-w4-target="alertStateCode">Codigo HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="alertStateClassPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-alert w4-alert-success w4-alert-active">
                                <span>Estado active por clase.</span>
                            </div>
                            <div class="w4-alert w4-alert-warning w4-alert-disabled">
                                <span>Estado disabled por clase.</span>
                            </div>
                            <p class="w4-text w4-text-sm w4-text-neutral">
                                Los estados <code>hidden</code> y <code>dismissed</code> ocultan la alerta por completo.
                            </p>
                        </div>
                    </div>
                    <div id="alertStateAttrPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm" hidden
                        aria-hidden="true">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-alert w4-alert-success" data-w4-state="active">
                                <span>Estado active por data-w4-state.</span>
                            </div>
                            <div class="w4-alert w4-alert-warning" data-w4-state="disabled">
                                <span>Estado disabled por data-w4-state.</span>
                            </div>
                            <p class="w4-text w4-text-sm w4-text-neutral">
                                Usa <code>data-w4-state="hidden"</code> o <code>data-w4-state="dismissed"</code> para
                                ocultar.
                            </p>
                        </div>
                    </div>
                    <div id="alertStateCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre class="m-0"><code class="w4-text w4-text-xs">&lt;!-- Por clase --&gt;
&lt;div class=&quot;w4-alert w4-alert-success w4-alert-active&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-warning w4-alert-disabled&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-error w4-alert-hidden&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info w4-alert-dismissed&quot;&gt;...&lt;/div&gt;

&lt;!-- Por atributo --&gt;
&lt;div class=&quot;w4-alert w4-alert-success&quot; data-w4-state=&quot;active&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-warning&quot; data-w4-state=&quot;disabled&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-error&quot; data-w4-state=&quot;hidden&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-alert w4-alert-info&quot; data-w4-state=&quot;dismissed&quot;&gt;...&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Estados Nativos Javascript Soportados al Componente
                Alert</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones del componente usando <code>data-w4-alert-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en la Alerta de prueba.
                </p>
                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                        data-w4-target="alertJsPreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="alertJsCode">Codigo HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="alertJsPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-sm">
                            <div id="labAlertTarget" class="w4-alert w4-alert-info w4-alert-md">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Alerta de prueba para cambios de estado.</span>
                                <button type="button" class="w4-button w4-button-ghost w4-button-sm"
                                    data-w4-dismiss="alert" aria-label="Cerrar">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-alert-state="enabled" data-w4-target="labAlertTarget">Clear</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-alert-state="active" data-w4-target="labAlertTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-alert-state="disabled" data-w4-target="labAlertTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-alert-state="hidden"
                                    data-w4-target="labAlertTarget">Hidden</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-primary"
                                    data-w4-alert-state="dismissed" data-w4-target="labAlertTarget">Dismissed</button>
                            </div>
                        </div>
                    </div>
                    <div id="alertJsCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre
                            class="m-0"><code class="w4-text w4-text-xs">&lt;div id=&quot;labAlertTarget&quot; class=&quot;w4-alert w4-alert-info&quot;&gt;...&lt;/div&gt;
&lt;button data-w4-alert-state=&quot;active&quot; data-w4-target=&quot;labAlertTarget&quot;&gt;Active&lt;/button&gt;
&lt;button data-w4-alert-state=&quot;disabled&quot; data-w4-target=&quot;labAlertTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-alert-state=&quot;hidden&quot; data-w4-target=&quot;labAlertTarget&quot;&gt;Hidden&lt;/button&gt;
&lt;button data-w4-alert-state=&quot;dismissed&quot; data-w4-target=&quot;labAlertTarget&quot;&gt;Dismissed&lt;/button&gt;</code></pre>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica a la Alerta de prueba y refleja los hooks visuales del componente.
                </p>
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