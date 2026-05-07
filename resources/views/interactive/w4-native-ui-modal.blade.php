<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Modal Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Modal</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Modal:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Modal</strong> (cuadro de diálogo) es una ventana superpuesta que requiere la
                atención del usuario y bloquea temporalmente la interacción con el resto de la página. Es perfecto para
                mostrar información importante, confirmaciones o formularios sin que el usuario pierda su contexto
                actual.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong>Confirmaciones críticas:</strong> Preguntar al usuario "¿Estás seguro?" antes de eliminar un
                    registro (Modal de Advertencia/Error).</li>
                <li><strong>Formularios contextuales:</strong> Crear o editar un registro rápidamente (ej. "Añadir nuevo
                    usuario") sin cambiar de página.</li>
                <li><strong>Visualización de detalles:</strong> Mostrar la información completa de un elemento de una
                    tabla o lista al hacer clic sobre él.</li>
                <li><strong>Mensajes y notificaciones:</strong> Mostrar términos y condiciones o actualizaciones
                    importantes del sistema.</li>
            </ul>
        </section>


        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes visuales del modal para distintos contextos.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="modalSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="modalSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="modalSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                data-w4-toggle="modal" data-w4-target="modalNeutral">Modal Neutral</button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-primary"
                                data-w4-toggle="modal" data-w4-target="modalPrimary">Modal Primary</button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                data-w4-toggle="modal" data-w4-target="modalSecondary">Modal Secondary</button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-accent" data-w4-toggle="modal"
                                data-w4-target="modalAccent">Modal Accent</button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-info" data-w4-toggle="modal"
                                data-w4-target="modalInfo">Modal Info</button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-success"
                                data-w4-toggle="modal" data-w4-target="modalSuccess">Modal Success</button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                data-w4-toggle="modal" data-w4-target="modalWarning">Modal Warning</button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button type="button" class="w4-button w4-button-sm w4-button-error" data-w4-toggle="modal"
                                data-w4-target="modalError">Modal Error</button>
                        </div>
                    </div>
                </div>
                <div id="modalSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalNeutral&quot;&gt;Neutral&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalPrimary&quot;&gt;Primary&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalSecondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalAccent&quot;&gt;Accent&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalInfo&quot;&gt;Info&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalSuccess&quot;&gt;Success&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalWarning&quot;&gt;Warning&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalError&quot;&gt;Error&lt;/button&gt;

</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Posicion</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controla la ubicación vertical del contenedor modal.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="modalPositionPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="modalPositionCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="modalPositionPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-3 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalTop">Modal Top</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalMiddle">Modal Middle</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalBottom">Modal Bottom</button></div>
                    </div>
                </div>
                <div id="modalPositionCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre
                        class="m-0"><code class="w4-text w4-text-xs">&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalTop&quot;&gt;Top&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalMiddle&quot;&gt;Middle&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalBottom&quot;&gt;Bottom&lt;/button&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas soportadas del modal: <code>xs, sm, md, lg, xl, 2xl, 3xl</code> y <code>full</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="modalSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="modalSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="modalSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalXs">Modal XS</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalSm">Modal SM</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalMd">Modal MD</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalLg">Modal LG</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalXl">Modal XL</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modal2xl">Modal 2XL</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modal3xl">Modal 3XL</button></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center"><button
                                type="button" class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalFull">Modal FULL</button></div>
                    </div>
                </div>
                <div id="modalSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalXs&quot;&gt;XS&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalSm&quot;&gt;SM&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalMd&quot;&gt;MD&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalLg&quot;&gt;LG&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalXl&quot;&gt;XL&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modal2xl&quot;&gt;2XL&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modal3xl&quot;&gt;3XL&lt;/button&gt;
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalFull&quot;&gt;FULL&lt;/button&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Backdrop Static</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Modal que no se cierra al hacer clic fuera ni con <code>Esc</code>, solo con su botón de cierre.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="modalStaticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="modalStaticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="modalStaticPreview" data-w4-tab-panel class="w4-tab-content">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-center">
                        <button type="button" class="w4-button w4-button-sm w4-button-warning" data-w4-toggle="modal"
                            data-w4-target="modalStaticBackdrop">
                            Abrir Modal Static
                        </button>
                    </div>
                </div>
                <div id="modalStaticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalStaticBackdrop&quot;&gt;
  Abrir Modal Static
&lt;/button&gt;

&lt;div id=&quot;modalStaticBackdrop&quot; class=&quot;w4-modal&quot; data-w4-backdrop=&quot;static&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;w4-modal-box&quot;&gt;
    &lt;h3 class=&quot;w4-hdg w4-hdg-h4&quot;&gt;Modal Backdrop Static&lt;/h3&gt;
    &lt;p class=&quot;w4-text&quot;&gt;Solo se cierra con su botón interno.&lt;/p&gt;
    &lt;div class=&quot;w4-modal-action&quot;&gt;
      &lt;button data-w4-dismiss=&quot;modal&quot;&gt;Cerrar&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Modal Configurable (Width Y H-Screen)</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Configura dinámicamente el tamaño en ancho y altura antes de abrir el modal.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="modalConfigPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="modalConfigCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="modalConfigPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-3 w4-grid-sm">
                        <div class="w4-stack w4-stack-xs">
                            <label class="w4-label" for="modalConfigWidth">Width</label>
                            <select id="modalConfigWidth" class="w4-select w4-select-sm w4-select-primary">
                                <option value="w4-modal-xs">XS</option>
                                <option value="w4-modal-sm">SM</option>
                                <option value="w4-modal-md" selected>MD</option>
                                <option value="w4-modal-lg">LG</option>
                                <option value="w4-modal-xl">XL</option>
                                <option value="w4-modal-2xl">2XL</option>
                                <option value="w4-modal-3xl">3XL</option>
                                <option value="w4-modal-full">FULL</option>
                            </select>
                        </div>
                        <div class="w4-stack w4-stack-xs">
                            <label class="w4-label" for="modalConfigHeight">Height</label>
                            <select id="modalConfigHeight" class="w4-select w4-select-sm w4-select-secondary">
                                <option value="w4-modal-h-auto" selected>AUTO</option>
                                <option value="w4-modal-h-sm">H-SM</option>
                                <option value="w4-modal-h-md">H-MD</option>
                                <option value="w4-modal-h-lg">H-LG</option>
                                <option value="w4-modal-h-screen">H-SCREEN</option>
                            </select>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-center">
                            <button id="modalConfigOpenBtn" type="button"
                                class="w4-button w4-button-sm w4-button-primary" data-w4-toggle="modal"
                                data-w4-target="modalConfigurable">
                                Abrir Configurable
                            </button>
                        </div>
                    </div>
                </div>
                <div id="modalConfigCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;select id=&quot;modalConfigWidth&quot;&gt;
  &lt;option value=&quot;w4-modal-xs&quot;&gt;XS&lt;/option&gt;
  ...
  &lt;option value=&quot;w4-modal-full&quot;&gt;FULL&lt;/option&gt;
&lt;/select&gt;
&lt;select id=&quot;modalConfigHeight&quot;&gt;
  &lt;option value=&quot;w4-modal-h-auto&quot;&gt;AUTO&lt;/option&gt;
  ...
  &lt;option value=&quot;w4-modal-h-screen&quot;&gt;H-SCREEN&lt;/option&gt;
&lt;/select&gt;
&lt;button id=&quot;modalConfigOpenBtn&quot; data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;modalConfigurable&quot;&gt;
  Abrir Configurable
&lt;/button&gt;</code></pre>
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
                                data-w4-target="modalStateClassPreview">Vista Previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="modalStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="modalStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <button type="button" class="w4-button w4-button-sm w4-button-primary"
                                        data-w4-toggle="modal" data-w4-target="modalStateClassActive">
                                        Demo .w4-modal-active
                                    </button>
                                    <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                                        <p class="w4-text w4-text-sm"><code>.w4-modal-hidden</code>: oculta
                                            completamente
                                            el modal.</p>
                                    </div>
                                    <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                                        <p class="w4-text w4-text-sm"><code>.w4-modal-disabled</code>: desactiva
                                            interacción del overlay.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="modalStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class=&quot;w4-modal w4-modal-active&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-modal w4-modal-hidden&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-modal w4-modal-disabled&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="modalStateAttrPreview">Vista Previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="modalStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="modalStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                        data-w4-toggle="modal" data-w4-target="modalStateAttrActive">
                                        Demo data-w4-state="active"
                                    </button>
                                    <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                                        <p class="w4-text w4-text-sm"><code>data-w4-state="hidden"</code>: oculta el
                                            modal.</p>
                                    </div>
                                    <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                                        <p class="w4-text w4-text-sm"><code>data-w4-state="disabled"</code>: desactiva
                                            interacción del modal.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="modalStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class=&quot;w4-modal&quot; data-w4-state=&quot;active&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-modal&quot; data-w4-state=&quot;hidden&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;w4-modal&quot; data-w4-state=&quot;disabled&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Nativos Javascript Soportados al Componente
                Modal</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-modal-state</code> y
                <code>data-w4-target</code>.
            </p>
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Instrucciones De Uso</h3>
                <ol class="w4-text w4-text-sm w4-text-neutral">
                    <li><strong class="w4-text-primary">Estado Modal:</strong> Abre el modal con comportamiento normal
                        (se puede cerrar con botón interno o clic en el backdrop).</li>
                    <li><strong class="w4-text-primary">Enabled Modal:</strong> Deja el modal habilitado para
                        interacción
                        y apertura normal.</li>
                    <li><strong class="w4-text-primary">Active Modal:</strong> Abre el modal y le da prioridad visual
                        como estado activo.</li>
                    <li><strong class="w4-text-primary">Disabled Modal:</strong> Deja el modal bloqueado; no debe abrir
                        hasta volver a <code>Enabled</code> o <code>Clear</code>.</li>
                    <li><strong class="w4-text-primary">Hidden Modal:</strong> Mantiene el modal en estado oculto
                        (preserva estado visual sin mostrar overlay).</li>
                    <li><strong class="w4-text-primary">Clear Modal States:</strong> Limpia estados residuales y regresa
                        el modal al estado base.</li>
                    <li><strong class="w4-text-primary">Flujo recomendado:</strong> Usa
                        <code>Disabled/Hidden</code> para probar bloqueos y luego <code>Clear</code> antes de repetir la
                        prueba.
                    </li>
                </ol>
            </div>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al Modal de prueba.
                </p>
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="modalJsPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="modalJsCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="modalJsPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-between">
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                                    <button type="button" class="w4-button w4-button-sm w4-button-success"
                                        data-w4-toggle="modal" data-w4-target="labModalTarget">Modal de Prueba</button>
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xl">
                                    <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                        data-w4-modal-state="enabled" data-w4-target="labModalTarget">Enabled
                                        Modal</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                        data-w4-modal-state="active" data-w4-target="labModalTarget">Active
                                        Modal</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-error"
                                        data-w4-modal-state="disabled" data-w4-target="labModalTarget">Disabled
                                        Modal</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-info"
                                        data-w4-modal-state="hidden" data-w4-target="labModalTarget">Hidden
                                        Modal</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                        data-w4-modal-state="clear" data-w4-target="labModalTarget">Clear Modal
                                        states</button>
                                </div>
                            </div>
                        </div>
                        <div id="modalJsCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre
                                class="m-0"><code class="w4-text w4-text-xs">
&lt;button data-w4-toggle=&quot;modal&quot; data-w4-target=&quot;labModalTarget&quot;&gt;Estado Modal&lt;/button&gt;
&lt;button data-w4-modal-state=&quot;enabled&quot; data-w4-target=&quot;labModalTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-modal-state=&quot;active&quot; data-w4-target=&quot;labModalTarget&quot;&gt;Active&lt;/button&gt;
&lt;button data-w4-modal-state=&quot;disabled&quot; data-w4-target=&quot;labModalTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-modal-state=&quot;hidden&quot; data-w4-target=&quot;labModalTarget&quot;&gt;Hidden&lt;/button&gt;
&lt;button data-w4-modal-state=&quot;clear&quot; data-w4-target=&quot;labModalTarget&quot;&gt;Clear&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica al Modal de prueba y sincroniza sus atributos visuales.
                </p>
            </div>
        </section>

        <div id="modalNeutral" class="w4-modal w4-modal-neutral" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-neutral">Modal Neutral</h3>
                <p class="w4-text">Contenido de ejemplo para variante neutral.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-neutral"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalPrimary" class="w4-modal w4-modal-primary" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Modal Primary</h3>
                <p class="w4-text">Contenido de ejemplo para variante primary.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-primary"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalSecondary" class="w4-modal w4-modal-secondary" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-secondary">Modal Secondary</h3>
                <p class="w4-text">Contenido de ejemplo.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-secondary"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalAccent" class="w4-modal w4-modal-accent" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-accent">Modal Accent</h3>
                <p class="w4-text">Contenido de ejemplo.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-accent"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalInfo" class="w4-modal w4-modal-info" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-info">Modal Info</h3>
                <p class="w4-text">Contenido de ejemplo.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-info"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalSuccess" class="w4-modal w4-modal-success" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-success">Modal Success</h3>
                <p class="w4-text">Contenido de ejemplo.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-success"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalWarning" class="w4-modal w4-modal-warning" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-warning">Modal Warning</h3>
                <p class="w4-text">Contenido de ejemplo.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-warning"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalError" class="w4-modal w4-modal-error" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-error">Modal Error</h3>
                <p class="w4-text">Contenido de ejemplo.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-error"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>

        <div id="modalTop" class="w4-modal w4-modal-top w4-modal-primary" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Modal Top</h3>
                <p class="w4-text">Posición superior.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-primary"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalMiddle" class="w4-modal w4-modal-middle w4-modal-primary" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Modal Middle</h3>
                <p class="w4-text">Posición centrada.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-primary"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalBottom" class="w4-modal w4-modal-bottom w4-modal-primary" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Modal Bottom</h3>
                <p class="w4-text">Posición inferior.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm w4-btn-primary"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>

        <div id="modalXs" class="w4-modal w4-modal-xs" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal XS</h3>
                <p class="w4-text">Tamaño extra pequeño.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalSm" class="w4-modal w4-modal-sm" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal SM</h3>
                <p class="w4-text">Tamaño pequeño.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalMd" class="w4-modal w4-modal-md" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal MD</h3>
                <p class="w4-text">Tamaño medio.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalLg" class="w4-modal w4-modal-lg" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal LG</h3>
                <p class="w4-text">Tamaño grande.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalXl" class="w4-modal w4-modal-xl" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal XL</h3>
                <p class="w4-text">Tamaño extra grande.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modal2xl" class="w4-modal w4-modal-2xl" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal 2XL</h3>
                <p class="w4-text">Tamaño doble extra grande.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modal3xl" class="w4-modal w4-modal-3xl" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal 3XL</h3>
                <p class="w4-text">Tamaño triple extra grande.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
        <div id="modalFull" class="w4-modal w4-modal-full" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal FULL</h3>
                <p class="w4-text">Cubre casi toda la pantalla.</p>
                <div class="w4-modal-action"><button class="w4-button w4-button-sm"
                        data-w4-dismiss="modal">Cerrar</button></div>
            </div>
        </div>

        <div id="labModalTarget" class="w4-modal w4-modal-base-100 w4-modal-md" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Modal de Prueba JS</h3>
                <p class="w4-text">Usa los botones del playground para aplicar estados nativos.</p>
                <div class="w4-modal-action">
                    <button type="button" class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
        <div id="modalStaticBackdrop" class="w4-modal w4-modal-warning" data-w4-backdrop="static" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal Backdrop Static</h3>
                <p class="w4-text">Este modal no se cierra al hacer clic fuera ni con Escape.</p>
                <div class="w4-modal-action">
                    <button type="button" class="w4-button w4-button-sm w4-button-warning"
                        data-w4-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
        <div id="modalConfigurable" class="w4-modal w4-modal-md w4-modal-h-auto" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Modal Configurable</h3>
                <p class="w4-text">Se adapta según el ancho y la altura seleccionados en el panel de configuración.</p>
                <div class="w4-modal-action">
                    <button type="button" class="w4-button w4-button-sm w4-button-primary"
                        data-w4-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
        <div id="modalStateClassActive" class="w4-modal w4-modal-md w4-modal-active" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Estado por Clase: Active</h3>
                <p class="w4-text">Ejemplo de modal con clase <code>w4-modal-active</code>.</p>
                <div class="w4-modal-action">
                    <button type="button" class="w4-button w4-button-sm w4-button-primary"
                        data-w4-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
        <div id="modalStateAttrActive" class="w4-modal w4-modal-md" data-w4-state="active" aria-hidden="true">
            <div class="w4-modal-box">
                <h3 class="w4-hdg w4-hdg-h4">Estado por Atributo: Active</h3>
                <p class="w4-text">Ejemplo de modal con <code>data-w4-state="active"</code>.</p>
                <div class="w4-modal-action">
                    <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                        data-w4-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </main>

    @NativeUIScripts
    @NativeUIInit

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Theme Switcher Logic
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

            var modalConfigurable = document.getElementById("modalConfigurable");
            var modalConfigWidth = document.getElementById("modalConfigWidth");
            var modalConfigHeight = document.getElementById("modalConfigHeight");
            var modalConfigOpenBtn = document.getElementById("modalConfigOpenBtn");

            if (modalConfigurable && modalConfigOpenBtn && modalConfigWidth && modalConfigHeight) {
                var widthClasses = ["w4-modal-xs", "w4-modal-sm", "w4-modal-md", "w4-modal-lg", "w4-modal-xl", "w4-modal-2xl", "w4-modal-3xl", "w4-modal-full"];
                var heightClasses = ["w4-modal-h-auto", "w4-modal-h-sm", "w4-modal-h-md", "w4-modal-h-lg", "w4-modal-h-screen"];

                modalConfigOpenBtn.addEventListener("click", function () {
                    modalConfigurable.classList.remove.apply(modalConfigurable.classList, widthClasses);
                    modalConfigurable.classList.remove.apply(modalConfigurable.classList, heightClasses);
                    modalConfigurable.classList.add(modalConfigWidth.value);
                    modalConfigurable.classList.add(modalConfigHeight.value);
                });
            }
        });
    </script>
</body>

</html>