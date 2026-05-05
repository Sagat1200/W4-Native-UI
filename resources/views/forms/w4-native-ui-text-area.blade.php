<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Text Area Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI TextArea</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">TextArea:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Text Area</strong> permite a los usuarios introducir múltiples líneas de texto. Es
                esencial para capturar información extensa, como descripciones, comentarios o mensajes largos, donde un
                input de una sola línea sería insuficiente.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Comentarios y retroalimentación:</strong> Formularios de contacto o
                    reseñas donde los
                    usuarios dejan sus opiniones detalladas.</li>
                <li><strong class="w4-text-active">Descripciones de productos/perfiles:</strong> Áreas para que los
                    usuarios escriban
                    biografías largas o detalles de artículos.</li>
                <li><strong class="w4-text-active">Mensajería:</strong> Cajas de texto para redactar correos
                    electrónicos, mensajes directos o
                    publicaciones en foros.</li>
                <li><strong class="w4-text-active">Ingreso de código o datos en bruto:</strong> Captura de
                    configuraciones JSON, fragmentos de
                    código o direcciones largas.</li>
            </ul>
        </section>


        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para áreas de texto según intención visual.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="textareaSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="textareaSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="textareaSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-ghost" rows="2" placeholder="Ghost"></textarea></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-primary" rows="2" placeholder="Primary"></textarea></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-secondary" rows="2" placeholder="Secondary"></textarea>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-accent" rows="2" placeholder="Accent"></textarea></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-info" rows="2" placeholder="Info"></textarea></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-success" rows="2" placeholder="Success"></textarea></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-warning" rows="2" placeholder="Warning"></textarea></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><textarea
                                class="w4-textarea w4-textarea-error" rows="2" placeholder="Error"></textarea></div>
                    </div>
                </div>
                <div id="textareaSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;textarea class=&quot;w4-textarea w4-textarea-ghost&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-primary&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-secondary&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-accent&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-info&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-success&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-warning&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-error&quot;&gt;&lt;/textarea&gt;
</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas morfológicas para entradas de texto multilínea.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="textareaSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="textareaSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="textareaSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <textarea class="w4-textarea w4-textarea-xs" rows="2" placeholder="TextArea XS"></textarea>
                        <textarea class="w4-textarea w4-textarea-sm" rows="2" placeholder="TextArea SM"></textarea>
                        <textarea class="w4-textarea w4-textarea-md" rows="2" placeholder="TextArea MD"></textarea>
                        <textarea class="w4-textarea w4-textarea-lg" rows="2" placeholder="TextArea LG"></textarea>
                        <textarea class="w4-textarea w4-textarea-xl" rows="2" placeholder="TextArea XL"></textarea>
                    </div>
                </div>
                <div id="textareaSizeCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;textarea class=&quot;w4-textarea w4-textarea-xs&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-sm&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-md&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-lg&quot;&gt;&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-xl&quot;&gt;&lt;/textarea&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Casos de Uso Aplicados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos de comentarios, biografía y mensajes largos.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-3 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="textareaCommentDemo">Comentario</label>
                    <textarea id="textareaCommentDemo" class="w4-textarea" rows="4"
                        placeholder="Escribe tu retroalimentación"></textarea>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="textareaBioDemo">Biografía</label>
                    <textarea id="textareaBioDemo" class="w4-textarea w4-textarea-primary" rows="4"
                        placeholder="Cuéntanos sobre ti"></textarea>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="textareaJsonDemo">Datos en bruto</label>
                    <textarea id="textareaJsonDemo" class="w4-textarea w4-textarea-secondary" rows="4"
                        placeholder='{"key":"value"}'></textarea>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Resize Y Auto Resize</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Modificadores de resize y crecimiento automático por contenido.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Resize Modifiers</h3>
                    <textarea class="w4-textarea w4-textarea-resize-none" rows="3" placeholder="Resize none"></textarea>
                    <textarea class="w4-textarea w4-textarea-resize-horizontal" rows="3"
                        placeholder="Resize horizontal"></textarea>
                    <textarea class="w4-textarea w4-textarea-resize-vertical" rows="3"
                        placeholder="Resize vertical"></textarea>
                    <textarea class="w4-textarea w4-textarea-resize-both" rows="3" placeholder="Resize both"></textarea>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Auto Resize</h3>
                    <textarea class="w4-textarea w4-textarea-info w4-textarea-resize-none" rows="2"
                        data-w4-auto-resize="true"
                        placeholder="Escribe varias líneas para ver el crecimiento automático..."></textarea>
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
                                data-w4-target="textareaStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="textareaStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="textareaStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <textarea class="w4-textarea w4-textarea-disabled" rows="2">Disabled</textarea>
                                    <textarea class="w4-textarea w4-textarea-readonly" rows="2">Readonly</textarea>
                                    <textarea class="w4-textarea w4-textarea-invalid" rows="2">Invalid</textarea>
                                    <textarea class="w4-textarea w4-textarea-valid" rows="2">Valid</textarea>
                                    <textarea class="w4-textarea w4-textarea-loading" rows="2">Loading</textarea>
                                </div>
                            </div>
                            <div id="textareaStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;textarea class=&quot;w4-textarea w4-textarea-disabled&quot;&gt;Disabled&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-readonly&quot;&gt;Readonly&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-invalid&quot;&gt;Invalid&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-valid&quot;&gt;Valid&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea w4-textarea-loading&quot;&gt;Loading&lt;/textarea&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="textareaStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="textareaStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="textareaStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <textarea class="w4-textarea" data-w4-state="disabled" rows="2">disabled</textarea>
                                    <textarea class="w4-textarea" data-w4-state="readonly" rows="2">readonly</textarea>
                                    <textarea class="w4-textarea" data-w4-state="invalid" rows="2">invalid</textarea>
                                    <textarea class="w4-textarea" data-w4-state="valid" rows="2">valid</textarea>
                                    <textarea class="w4-textarea" data-w4-state="loading" rows="2">loading</textarea>
                                </div>
                            </div>
                            <div id="textareaStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;textarea class=&quot;w4-textarea&quot; data-w4-state=&quot;disabled&quot;&gt;disabled&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea&quot; data-w4-state=&quot;readonly&quot;&gt;readonly&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea&quot; data-w4-state=&quot;invalid&quot;&gt;invalid&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea&quot; data-w4-state=&quot;valid&quot;&gt;valid&lt;/textarea&gt;
&lt;textarea class=&quot;w4-textarea&quot; data-w4-state=&quot;loading&quot;&gt;loading&lt;/textarea&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Textarea
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-textarea-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al textarea de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="textareaJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="textareaJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="textareaJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <textarea id="labTextareaTarget" class="w4-textarea w4-textarea-primary" rows="3"
                                        placeholder="Textarea de prueba"></textarea>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-textarea-state="enabled"
                                            data-w4-target="labTextareaTarget">Enabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-textarea-state="readonly"
                                            data-w4-target="labTextareaTarget">Readonly</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-textarea-state="disabled"
                                            data-w4-target="labTextareaTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-info"
                                            data-w4-textarea-state="loading"
                                            data-w4-target="labTextareaTarget">Loading</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-textarea-state="invalid"
                                            data-w4-target="labTextareaTarget">Invalid</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-accent"
                                            data-w4-textarea-state="valid"
                                            data-w4-target="labTextareaTarget">Valid</button>
                                    </div>
                                </div>
                            </div>
                            <div id="textareaJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">&lt;textarea id=&quot;labTextareaTarget&quot; class=&quot;w4-textarea w4-textarea-primary&quot;&gt;&lt;/textarea&gt;
&lt;button data-w4-textarea-state=&quot;enabled&quot; data-w4-target=&quot;labTextareaTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-textarea-state=&quot;readonly&quot; data-w4-target=&quot;labTextareaTarget&quot;&gt;Readonly&lt;/button&gt;
&lt;button data-w4-textarea-state=&quot;disabled&quot; data-w4-target=&quot;labTextareaTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-textarea-state=&quot;loading&quot; data-w4-target=&quot;labTextareaTarget&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-textarea-state=&quot;invalid&quot; data-w4-target=&quot;labTextareaTarget&quot;&gt;Invalid&lt;/button&gt;
&lt;button data-w4-textarea-state=&quot;valid&quot; data-w4-target=&quot;labTextareaTarget&quot;&gt;Valid&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al textarea de prueba y sincroniza sus atributos visuales.
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