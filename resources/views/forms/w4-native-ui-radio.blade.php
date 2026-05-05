<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Radio Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Radio</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Radio:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Radio</strong> (botón de opción) permite a los usuarios seleccionar una única
                opción de un conjunto mutuamente excluyente. A diferencia de los checkboxes, cuando se selecciona un
                radio button, cualquier otro botón previamente seleccionado en el mismo grupo se deselecciona
                automáticamente.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Selección de planes:</strong> Elegir un nivel de suscripción (Básico,
                    Pro, Enterprise).</li>
                <li><strong class="w4-text-active">Métodos de pago:</strong> Seleccionar una única forma de pago
                    (Tarjeta de crédito, PayPal,
                    Transferencia).</li>
                <li><strong class="w4-text-active">Preferencias únicas:</strong> Configurar opciones donde solo es
                    válida una respuesta, como
                    el género, rango de edad o idioma principal.</li>
                <li><strong class="w4-text-active">Encuestas o exámenes:</strong> Preguntas de opción múltiple donde
                    solo se admite una
                    respuesta correcta.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para radio buttons dentro de grupos de selección única.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="radioSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="radioSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="radioSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo" class="w4-radio" checked>Default</label></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo" class="w4-radio w4-radio-primary" checked>Primary</label></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo-2" class="w4-radio w4-radio-secondary" checked>Secondary</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo-3" class="w4-radio w4-radio-accent" checked>Accent</label></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo-4" class="w4-radio w4-radio-info" checked>Info</label></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo-5" class="w4-radio w4-radio-success" checked>Success</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo-6" class="w4-radio w4-radio-warning" checked>Warning</label>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><label class="w4-label"><input type="radio"
                                    name="semantic-demo-7" class="w4-radio w4-radio-error" checked>Error</label></div>
                    </div>
                </div>
                <div id="radioSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-primary&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-secondary&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-accent&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-info&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-success&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-warning&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-error&quot;&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas morfológicas del componente radio de <code>xs</code> a <code>xl</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="radioSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="radioSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="radioSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                        <label class="w4-label"><input type="radio" name="size-demo" class="w4-radio w4-radio-xs"
                                checked>XS</label>
                        <label class="w4-label"><input type="radio" name="size-demo-2" class="w4-radio w4-radio-sm"
                                checked>SM</label>
                        <label class="w4-label"><input type="radio" name="size-demo-3" class="w4-radio w4-radio-md"
                                checked>MD</label>
                        <label class="w4-label"><input type="radio" name="size-demo-4" class="w4-radio w4-radio-lg"
                                checked>LG</label>
                        <label class="w4-label"><input type="radio" name="size-demo-5" class="w4-radio w4-radio-xl"
                                checked>XL</label>
                    </div>
                </div>
                <div id="radioSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-xs&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-sm&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-md&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-lg&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-xl&quot;&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Casos de Uso Aplicados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos de planes, método de pago y preferencia única.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-3 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary">Plan de Suscripción</h3>
                    <label class="w4-label"><input type="radio" name="planDemo" class="w4-radio w4-radio-primary"
                            checked>Básico</label>
                    <label class="w4-label"><input type="radio" name="planDemo"
                            class="w4-radio w4-radio-primary">Pro</label>
                    <label class="w4-label"><input type="radio" name="planDemo"
                            class="w4-radio w4-radio-primary">Enterprise</label>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary">Método de Pago</h3>
                    <label class="w4-label"><input type="radio" name="payDemo" class="w4-radio w4-radio-secondary"
                            checked>Tarjeta</label>
                    <label class="w4-label"><input type="radio" name="payDemo"
                            class="w4-radio w4-radio-secondary">PayPal</label>
                    <label class="w4-label"><input type="radio" name="payDemo"
                            class="w4-radio w4-radio-secondary">Transferencia</label>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary">Idioma Principal</h3>
                    <label class="w4-label"><input type="radio" name="langDemo" class="w4-radio w4-radio-accent"
                            checked>Español</label>
                    <label class="w4-label"><input type="radio" name="langDemo"
                            class="w4-radio w4-radio-accent">Inglés</label>
                    <label class="w4-label"><input type="radio" name="langDemo"
                            class="w4-radio w4-radio-accent">Portugués</label>
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
                                data-w4-target="radioStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="radioStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="radioStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input type="radio" class="w4-radio w4-radio-selected"
                                            checked>Selected</label>
                                    <label class="w4-label"><input type="radio"
                                            class="w4-radio w4-radio-disabled">Disabled</label>
                                    <label class="w4-label"><input type="radio"
                                            class="w4-radio w4-radio-readonly">Readonly</label>
                                    <label class="w4-label"><input type="radio"
                                            class="w4-radio w4-radio-invalid">Invalid</label>
                                    <label class="w4-label"><input type="radio"
                                            class="w4-radio w4-radio-valid">Valid</label>
                                    <label class="w4-label"><input type="radio"
                                            class="w4-radio w4-radio-loading">Loading</label>
                                </div>
                            </div>
                            <div id="radioStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-selected&quot; checked&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-disabled&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-readonly&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-invalid&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-valid&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio w4-radio-loading&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="radioStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="radioStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="radioStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input type="radio" class="w4-radio"
                                            data-w4-state="selected" checked>selected</label>
                                    <label class="w4-label"><input type="radio" class="w4-radio"
                                            data-w4-state="disabled">disabled</label>
                                    <label class="w4-label"><input type="radio" class="w4-radio"
                                            data-w4-state="readonly">readonly</label>
                                    <label class="w4-label"><input type="radio" class="w4-radio"
                                            data-w4-state="invalid">invalid</label>
                                    <label class="w4-label"><input type="radio" class="w4-radio"
                                            data-w4-state="valid">valid</label>
                                    <label class="w4-label"><input type="radio" class="w4-radio"
                                            data-w4-state="loading">loading</label>
                                </div>
                            </div>
                            <div id="radioStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input type=&quot;radio&quot; class=&quot;w4-radio&quot; data-w4-state=&quot;selected&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio&quot; data-w4-state=&quot;disabled&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio&quot; data-w4-state=&quot;readonly&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio&quot; data-w4-state=&quot;invalid&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio&quot; data-w4-state=&quot;valid&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;w4-radio&quot; data-w4-state=&quot;loading&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Radio
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-radio-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al radio de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="radioJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="radioJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="radioJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <label class="w4-label"><input id="labRadioTarget" type="radio"
                                            class="w4-radio w4-radio-primary w4-radio-md">Radio de prueba</label>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-radio-state="enabled"
                                            data-w4-target="labRadioTarget">Enabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-primary"
                                            data-w4-radio-state="selected"
                                            data-w4-target="labRadioTarget">Selected</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-radio-state="readonly"
                                            data-w4-target="labRadioTarget">Readonly</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-radio-state="disabled"
                                            data-w4-target="labRadioTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-info"
                                            data-w4-radio-state="loading"
                                            data-w4-target="labRadioTarget">Loading</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-radio-state="invalid"
                                            data-w4-target="labRadioTarget">Invalid</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-accent"
                                            data-w4-radio-state="valid" data-w4-target="labRadioTarget">Valid</button>
                                    </div>
                                </div>
                            </div>
                            <div id="radioJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">&lt;input id=&quot;labRadioTarget&quot; type=&quot;radio&quot; class=&quot;w4-radio w4-radio-primary w4-radio-md&quot;&gt;
&lt;button data-w4-radio-state=&quot;enabled&quot; data-w4-target=&quot;labRadioTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-radio-state=&quot;selected&quot; data-w4-target=&quot;labRadioTarget&quot;&gt;Selected&lt;/button&gt;
&lt;button data-w4-radio-state=&quot;readonly&quot; data-w4-target=&quot;labRadioTarget&quot;&gt;Readonly&lt;/button&gt;
&lt;button data-w4-radio-state=&quot;disabled&quot; data-w4-target=&quot;labRadioTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-radio-state=&quot;loading&quot; data-w4-target=&quot;labRadioTarget&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-radio-state=&quot;invalid&quot; data-w4-target=&quot;labRadioTarget&quot;&gt;Invalid&lt;/button&gt;
&lt;button data-w4-radio-state=&quot;valid&quot; data-w4-target=&quot;labRadioTarget&quot;&gt;Valid&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al radio de prueba y sincroniza sus atributos visuales.
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

            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute(
                "data-theme") || "native-ui.light";
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