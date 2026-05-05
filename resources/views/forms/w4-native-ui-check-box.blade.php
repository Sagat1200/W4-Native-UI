<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Checkbox Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Checkbox</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Checkbox:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Checkbox</strong> permite a los usuarios seleccionar una o varias opciones de un
                conjunto, o alternar entre dos estados opuestos (como encendido/apagado). Es un elemento de formulario
                esencial para recopilar preferencias y confirmaciones.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Aceptación de términos:</strong> Para confirmar que el usuario ha
                    leído y aceptado los
                    términos y condiciones.</li>
                <li><strong class="w4-text-active">Selección múltiple:</strong> En listas de filtros o configuraciones
                    donde se pueden elegir
                    varias opciones simultáneamente.</li>
                <li><strong class="w4-text-active">Configuración de preferencias:</strong> Para activar o desactivar
                    características
                    específicas (ej. recibir notificaciones).</li>
                <li><strong class="w4-text-active">Tareas y listas:</strong> Marcar elementos como completados en una
                    lista de tareas
                    pendientes.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para checkbox usando tokens del sistema.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="checkSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="checkSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="checkSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-neutral"
                                    checked>Neutral</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-primary"
                                    checked>Primary</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-secondary"
                                    checked>Secondary</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-accent"
                                    checked>Accent</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-info"
                                    checked>Info</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-success"
                                    checked>Success</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-warning"
                                    checked>Warning</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-error"
                                    checked>Error</label>
                        </div>
                    </div>
                </div>
                <div id="checkSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-neutral&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-primary&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-secondary&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-accent&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-info&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-success&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-warning&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-error&quot; checked&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas morfológicas del checkbox: <code>xs</code> a <code>xl</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="checkSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="checkSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="checkSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-xs"
                                checked>XS</label>
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-sm"
                                checked>SM</label>
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-md"
                                checked>MD</label>
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-lg"
                                checked>LG</label>
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-xl"
                                checked>XL</label>
                    </div>
                </div>
                <div id="checkSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-xs&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-sm&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-md&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-lg&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-xl&quot; checked&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Checked E Indeterminate</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                El estado <code>indeterminate</code> se aplica por JS al inicializar el componente.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="checkStatePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="checkStateCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="checkStatePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-success"
                                checked>Checked nativo</label>
                        <label class="w4-label"><input type="checkbox"
                                class="w4-checkbox w4-checkbox-warning w4-checkbox-indeterminate">Indeterminate por
                            clase</label>
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-info"
                                data-w4-state="indeterminate">Indeterminate por atributo</label>
                    </div>
                </div>
                <div id="checkStateCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre
                        class="m-0"><code class="w4-text w4-text-xs">
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-success&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-warning w4-checkbox-indeterminate&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-info&quot; data-w4-state=&quot;indeterminate&quot;&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Ejemplos de Casos de Uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos prácticos para aceptación de términos y selección múltiple.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Aceptación de Términos</h3>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        Caso típico para habilitar el envío de un formulario solo cuando el usuario acepta los términos.
                    </p>
                    <label class="w4-label w4-label-error">
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary">
                        Acepto los términos y condiciones
                    </label>
                    <button type="button" class="w4-btn w4-btn-sm w4-btn-primary" disabled>
                        Continuar
                    </button>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Selección Múltiple</h3>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        Caso común para filtros o preferencias donde se pueden marcar varias opciones.
                    </p>
                    <div class="w4-stack w4-stack-sm">
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-secondary"
                                checked>Email</label>
                        <label class="w4-label"><input type="checkbox"
                                class="w4-checkbox w4-checkbox-secondary">SMS</label>
                        <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-secondary"
                                checked>Push</label>
                    </div>
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
                                data-w4-target="checkClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="checkClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="checkClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-checkbox w4-checkbox-disabled">Disabled</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-checkbox w4-checkbox-readonly" checked>Readonly</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-checkbox w4-checkbox-invalid">Invalid</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-checkbox w4-checkbox-valid"
                                            checked>Valid</label>
                                    <label class="w4-label"><input type="checkbox"
                                            class="w4-checkbox w4-checkbox-loading">Loading</label>
                                </div>
                            </div>
                            <div id="checkClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-disabled&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-readonly&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-invalid&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-valid&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-loading&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="checkAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="checkAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="checkAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input type="checkbox" class="w4-checkbox"
                                            data-w4-state="disabled">disabled</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-checkbox"
                                            data-w4-state="readonly" checked>readonly</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-checkbox"
                                            data-w4-state="invalid">invalid</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-checkbox"
                                            data-w4-state="valid" checked>valid</label>
                                    <label class="w4-label"><input type="checkbox" class="w4-checkbox"
                                            data-w4-state="loading">loading</label>
                                </div>
                            </div>
                            <div id="checkAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox&quot; data-w4-state=&quot;disabled&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox&quot; data-w4-state=&quot;readonly&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox&quot; data-w4-state=&quot;invalid&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox&quot; data-w4-state=&quot;valid&quot; checked&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;w4-checkbox&quot; data-w4-state=&quot;loading&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Checkbox
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-checkbox-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al checkbox de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="checkJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="checkJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="checkJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input id="labCheckboxTarget" type="checkbox"
                                            class="w4-checkbox w4-checkbox-primary w4-checkbox-md">Checkbox de
                                        prueba</label>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-checkbox-state="enabled"
                                            data-w4-target="labCheckboxTarget">Enabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-primary"
                                            data-w4-checkbox-state="checked"
                                            data-w4-target="labCheckboxTarget">Checked</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                            data-w4-checkbox-state="indeterminate"
                                            data-w4-target="labCheckboxTarget">Indeterminate</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-checkbox-state="readonly"
                                            data-w4-target="labCheckboxTarget">Readonly</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-checkbox-state="disabled"
                                            data-w4-target="labCheckboxTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-info"
                                            data-w4-checkbox-state="loading"
                                            data-w4-target="labCheckboxTarget">Loading</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-accent"
                                            data-w4-checkbox-state="valid"
                                            data-w4-target="labCheckboxTarget">Valid</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-checkbox-state="invalid"
                                            data-w4-target="labCheckboxTarget">Invalid</button>
                                    </div>
                                </div>
                            </div>
                            <div id="checkJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">&lt;input id=&quot;labCheckboxTarget&quot; type=&quot;checkbox&quot; class=&quot;w4-checkbox w4-checkbox-primary w4-checkbox-md&quot;&gt;
&lt;button data-w4-checkbox-state=&quot;enabled&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-checkbox-state=&quot;checked&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Checked&lt;/button&gt;
&lt;button data-w4-checkbox-state=&quot;indeterminate&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Indeterminate&lt;/button&gt;
&lt;button data-w4-checkbox-state=&quot;readonly&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Readonly&lt;/button&gt;
&lt;button data-w4-checkbox-state=&quot;disabled&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-checkbox-state=&quot;loading&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-checkbox-state=&quot;valid&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Valid&lt;/button&gt;
&lt;button data-w4-checkbox-state=&quot;invalid&quot; data-w4-target=&quot;labCheckboxTarget&quot;&gt;Invalid&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al checkbox de prueba y sincroniza sus atributos visuales.
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
