<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Toggle Lab</title>
    @NativeUIStyles
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Toggle</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Toggle:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Toggle</strong> (interruptor) es un elemento visual que permite al usuario
                alternar entre dos estados opuestos, generalmente "encendido" y "apagado". Proporciona retroalimentación
                visual inmediata, similar a un interruptor de luz físico, y es ideal para ajustes de configuración que
                aplican cambios instantáneos.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Preferencias del sistema:</strong> Activar o desactivar
                    características globales como el
                    "Modo oscuro" o "Notificaciones push".</li>
                <li><strong class="w4-text-active">Configuraciones de privacidad:</strong> Controlar permisos rápidos,
                    como "Perfil público" o
                    "Compartir ubicación".</li>
                <li><strong class="w4-text-active">Filtros instantáneos:</strong> Alternar vistas o estados en tablas y
                    listas (ej. "Mostrar
                    solo elementos activos").</li>
                <li><strong class="w4-text-active">Funciones experimentales:</strong> Habilitar características beta en
                    paneles de
                    administración.</li>
            </ul>
        </section>




        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para interruptores en estado activo.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="toggleSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="toggleSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="toggleSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-md" checked>
                            <span>Neutral</span>
                        </label>
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md" checked>
                            <span>Primary</span>
                        </label>
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-secondary w4-toggle-md" checked>
                            <span>Secondary</span>
                        </label>
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-accent w4-toggle-md" checked>
                            <span>Accent</span>
                        </label>
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-info w4-toggle-md" checked>
                            <span>Info</span>
                        </label>
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-success w4-toggle-md" checked>
                            <span>Success</span>
                        </label>
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-warning w4-toggle-md" checked>
                            <span>Warning</span>
                        </label>
                        <label
                            class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-error w4-toggle-md" checked>
                            <span>Error</span>
                        </label>
                    </div>
                </div>
                <div id="toggleSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-primary w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-secondary w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-accent w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-info w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-success w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-warning w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-error w4-toggle-md&quot; checked&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas morfológicas del toggle desde <code>xs</code> hasta <code>xl</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="toggleSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="toggleSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="toggleSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm w4-stack-center w4-stack-horizontal">
                        <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-xs" checked>XS</label>
                        <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-sm" checked>SM</label>
                        <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-md" checked>MD</label>
                        <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-lg" checked>LG</label>
                        <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-xl" checked>XL</label>
                    </div>
                </div>
                <div id="toggleSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-xs&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-sm&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-lg&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-xl&quot; checked&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Casos de Uso Aplicados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos de configuración común con cambios instantáneos.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-3 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Preferencias</h3>
                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md"
                            checked>Modo
                        oscuro</label>
                    <label class="w4-label"><input type="checkbox"
                            class="w4-toggle w4-toggle-info w4-toggle-md">Notificaciones
                        push</label>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Privacidad</h3>
                    <label class="w4-label"><input type="checkbox"
                            class="w4-toggle w4-toggle-warning w4-toggle-md">Perfil
                        público</label>
                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-secondary w4-toggle-md"
                            checked>Compartir ubicación</label>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Filtros</h3>
                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-success w4-toggle-md"
                            checked>Solo
                        activos</label>
                    <label class="w4-label"><input type="checkbox"
                            class="w4-toggle w4-toggle-accent w4-toggle-md">Mostrar
                        archivados</label>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados soportados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="toggleStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="toggleStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="toggleStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-toggle w4-toggle-checked w4-toggle-md" checked>Checked</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-toggle w4-toggle-disabled w4-toggle-md">Disabled</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-toggle w4-toggle-readonly w4-toggle-md" checked>Readonly</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-toggle w4-toggle-invalid w4-toggle-md">Invalid</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-toggle w4-toggle-valid w4-toggle-md" checked>Valid</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-toggle w4-toggle-loading w4-toggle-md">Loading</label>
                                </div>
                            </div>
                            <div id="toggleStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-checked w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-disabled w4-toggle-md&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-readonly w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-invalid w4-toggle-md&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-valid w4-toggle-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-loading w4-toggle-md&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="toggleStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="toggleStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="toggleStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-md"
                                            data-w4-state="checked" checked>checked</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-md"
                                            data-w4-state="disabled">disabled</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-md"
                                            data-w4-state="readonly" checked>readonly</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-md"
                                            data-w4-state="invalid">invalid</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-md"
                                            data-w4-state="valid" checked>valid</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-toggle w4-toggle-md"
                                            data-w4-state="loading">loading</label>
                                </div>
                            </div>
                            <div id="toggleStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-md&quot; data-w4-state=&quot;checked&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-md&quot; data-w4-state=&quot;disabled&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-md&quot; data-w4-state=&quot;readonly&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-md&quot; data-w4-state=&quot;invalid&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-md&quot; data-w4-state=&quot;valid&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-md&quot; data-w4-state=&quot;loading&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Toggle
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-toggle-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al toggle de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="toggleJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="toggleJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="toggleJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label">
                                        <input id="labToggleTarget" type="checkbox"
                                            class="w4-toggle w4-toggle-primary w4-toggle-md">
                                        Toggle de prueba
                                    </label>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-toggle-state="enabled"
                                            data-w4-target="labToggleTarget">Enabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-success"
                                            data-w4-toggle-state="checked"
                                            data-w4-target="labToggleTarget">Checked</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-toggle-state="unchecked"
                                            data-w4-target="labToggleTarget">Unchecked</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-toggle-state="readonly"
                                            data-w4-target="labToggleTarget">Readonly</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-toggle-state="disabled"
                                            data-w4-target="labToggleTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-info"
                                            data-w4-toggle-state="loading"
                                            data-w4-target="labToggleTarget">Loading</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-toggle-state="invalid"
                                            data-w4-target="labToggleTarget">Invalid</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-accent"
                                            data-w4-toggle-state="valid" data-w4-target="labToggleTarget">Valid</button>
                                    </div>
                                </div>
                            </div>
                            <div id="toggleJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">&lt;input id=&quot;labToggleTarget&quot; type=&quot;checkbox&quot; class=&quot;w4-toggle w4-toggle-primary&quot;&gt;
&lt;button data-w4-toggle-state=&quot;enabled&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-toggle-state=&quot;checked&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Checked&lt;/button&gt;
&lt;button data-w4-toggle-state=&quot;unchecked&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Unchecked&lt;/button&gt;
&lt;button data-w4-toggle-state=&quot;readonly&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Readonly&lt;/button&gt;
&lt;button data-w4-toggle-state=&quot;disabled&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-toggle-state=&quot;loading&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-toggle-state=&quot;invalid&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Invalid&lt;/button&gt;
&lt;button data-w4-toggle-state=&quot;valid&quot; data-w4-target=&quot;labToggleTarget&quot;&gt;Valid&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al toggle de prueba y sincroniza sus atributos visuales.
                    </p>
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