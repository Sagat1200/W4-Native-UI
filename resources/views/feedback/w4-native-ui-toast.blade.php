<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Toast Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Toast</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Toast:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Toast (Notificación)</strong> proporciona retroalimentación efímera y no
                bloqueante sobre una
                operación que el usuario acaba de realizar. Está diseñado para aparecer superpuesto en las esquinas de
                la interfaz y desaparecer automáticamente después de unos segundos, utilizando animaciones de entrada y
                salida suaves integradas en el motor CSS.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Confirmaciones de acción:</strong> Mostrar "Registro guardado
                    correctamente" (Success) en la esquina inferior derecha tras enviar un formulario.</li>
                <li><strong class="w4-text-active">Errores no críticos:</strong> Avisar sobre fallos temporales de
                    conexión (Warning) en la parte superior sin interrumpir la navegación.</li>
                <li><strong class="w4-text-active">Nuevos eventos (Push):</strong> Notificar la llegada de un nuevo
                    mensaje de chat o correo (Info/Primary) en tiempo real.</li>
                <li><strong class="w4-text-active">Animación de salida:</strong> Utilizar el estado
                    <code>data-w4-state="dismissed"</code> vía JavaScript para desencadenar el fade-out antes de remover
                    el elemento del DOM.
                </li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Toasts con colores semánticos del sistema.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="toastSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="toastSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="toastSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-toast w4-toast-primary w4-toast-sm">Primary toast</div>
                        <div class="w4-toast w4-toast-secondary w4-toast-sm">Secondary toast</div>
                        <div class="w4-toast w4-toast-accent w4-toast-sm">Accent toast</div>
                        <div class="w4-toast w4-toast-info w4-toast-sm">Info toast</div>
                        <div class="w4-toast w4-toast-success w4-toast-sm">Success toast</div>
                        <div class="w4-toast w4-toast-warning w4-toast-sm">Warning toast</div>
                        <div class="w4-toast w4-toast-error w4-toast-sm">Error toast</div>
                    </div>
                </div>
                <div id="toastSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;div class=&quot;w4-toast w4-toast-primary&quot;&gt;Primary toast&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-secondary&quot;&gt;Secondary toast&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-accent&quot;&gt;Accent toast&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-info&quot;&gt;Info toast&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-success&quot;&gt;Success toast&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-warning&quot;&gt;Warning toast&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-error&quot;&gt;Error toast&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Surface</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de superficie del componente toast.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="toastSurfacePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="toastSurfaceCode">Codigo HTML</button>
                    </div>
                </div>

                <div id="toastSurfacePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-3 w4-grid-sm">
                        <div class="w4-toast w4-toast-info w4-toast-sm">Default</div>
                        <div class="w4-toast w4-toast-info w4-toast-soft w4-toast-sm">Soft</div>
                        <div class="w4-toast w4-toast-info w4-toast-outline w4-toast-sm">Outline</div>
                    </div>
                </div>

                <div id="toastSurfaceCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class=&quot;w4-toast w4-toast-info w4-toast-sm&quot;&gt;Default&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-info w4-toast-soft w4-toast-sm&quot;&gt;Soft&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-info w4-toast-outline w4-toast-sm&quot;&gt;Outline&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas de tamaño del componente toast.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="toastSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="toastSizeCode">Codigo HTML</button>
                    </div>
                </div>

                <div id="toastSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <div class="w4-toast w4-toast-primary w4-toast-xs">Toast XS</div>
                        <div class="w4-toast w4-toast-primary w4-toast-sm">Toast SM</div>
                        <div class="w4-toast w4-toast-primary w4-toast-md">Toast MD</div>
                        <div class="w4-toast w4-toast-primary w4-toast-lg">Toast LG</div>
                        <div class="w4-toast w4-toast-primary w4-toast-xl">Toast XL</div>
                    </div>
                </div>

                <div id="toastSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;div class=&quot;w4-toast w4-toast-primary w4-toast-xs&quot;&gt;Toast XS&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-primary w4-toast-sm&quot;&gt;Toast SM&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-primary w4-toast-md&quot;&gt;Toast MD&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-primary w4-toast-lg&quot;&gt;Toast LG&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-primary w4-toast-xl&quot;&gt;Toast XL&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Playground Dinamico</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Simulador de notificaciones dinámicas con posición y variante.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-grid w4-grid-4 w4-grid-sm">
                    <div class="w4-stack w4-stack-sm">
                        <label class="w4-label w4-label-sm" for="toastType">Tipo Toast</label>
                        <select id="toastType" class="w4-select w4-select-sm w4-select-primary">
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="accent">Accent</option>
                            <option value="info" selected>Info</option>
                            <option value="success">Success</option>
                            <option value="warning">Warning</option>
                            <option value="error">Error</option>
                        </select>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <label class="w4-label w4-label-sm" for="toastPosition">Posición</label>
                        <select id="toastPosition" class="w4-select w4-select-sm w4-select-primary">
                            <option value="top-right">Top Right</option>
                            <option value="top-left">Top Left</option>
                            <option value="bottom-right" selected>Bottom Right</option>
                            <option value="bottom-left">Bottom Left</option>
                            <option value="top-center">Top Center</option>
                            <option value="bottom-center">Bottom Center</option>
                        </select>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <label class="w4-label w4-label-sm" for="toastMessage">Mensaje</label>
                        <input id="toastMessage" class="w4-input w4-input-sm w4-input-primary"
                            value="Notificación dinámica de ejemplo">
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <label class="w4-label w4-label-sm" for="toastDuration">Duración</label>
                        <select id="toastDuration" class="w4-select w4-select-sm w4-select-primary">
                            <option value="1500">1.5s</option>
                            <option value="3000" selected>3s</option>
                            <option value="5000">5s</option>
                            <option value="8000">8s</option>
                            <option value="0">Sin auto-cierre</option>
                        </select>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <label class="w4-label w4-label-sm">Acción</label>
                        <button id="spawnToastBtn" type="button" class="w4-button w4-button-sm w4-button-primary">
                            Lanzar Toast
                        </button>
                    </div>
                </div>

                <div class="w4-toast-playground">
                    <div id="tr-wrapper" class="w4-toast-playground-wrapper w4-toast-pos-top-right"></div>
                    <div id="tl-wrapper" class="w4-toast-playground-wrapper w4-toast-pos-top-left"></div>
                    <div id="br-wrapper" class="w4-toast-playground-wrapper w4-toast-pos-bottom-right"></div>
                    <div id="bl-wrapper" class="w4-toast-playground-wrapper w4-toast-pos-bottom-left"></div>
                    <div id="tc-wrapper" class="w4-toast-playground-wrapper w4-toast-pos-top-center"></div>
                    <div id="bc-wrapper" class="w4-toast-playground-wrapper w4-toast-pos-bottom-center"></div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="toastStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="toastStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="toastStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <div class="w4-toast w4-toast-success w4-toast-active">Estado active por clase</div>
                                    <div class="w4-toast w4-toast-warning w4-toast-disabled">Estado disabled por clase
                                    </div>
                                    <div class="w4-toast w4-toast-error w4-toast-hidden">Estado hidden por clase</div>
                                </div>
                            </div>
                            <div id="toastStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class=&quot;w4-toast w4-toast-success w4-toast-active&quot;&gt;Estado active por clase&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-warning w4-toast-disabled&quot;&gt;Estado disabled por clase&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-error w4-toast-hidden&quot;&gt;Estado hidden por clase&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="toastStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="toastStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="toastStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <div class="w4-toast w4-toast-success" data-w4-state="active">Estado active por
                                        atributo</div>
                                    <div class="w4-toast w4-toast-warning" data-w4-state="disabled">Estado disabled por
                                        atributo</div>
                                    <div class="w4-toast w4-toast-error" data-w4-state="hidden">Estado hidden por
                                        atributo</div>
                                </div>
                            </div>
                            <div id="toastStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">
&lt;div class=&quot;w4-toast w4-toast-success&quot; data-w4-state=&quot;active&quot;&gt;Estado active por atributo&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-warning&quot; data-w4-state=&quot;disabled&quot;&gt;Estado disabled por atributo&lt;/div&gt;
&lt;div class=&quot;w4-toast w4-toast-error&quot; data-w4-state=&quot;hidden&quot;&gt;Estado hidden por atributo&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Toast
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones del componente usando <code>data-w4-toast-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: prueba los estados JS sobre un toast de ejemplo.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="toastJsStatePreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="toastJsStateCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="toastJsStatePreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <div id="labToastTarget" class="w4-toast w4-toast-info w4-toast-md">
                                        Toast de prueba para estados JS
                                    </div>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-toast-state="enabled" data-w4-target="labToastTarget">
                                            Enabled
                                        </button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                            data-w4-toast-state="active" data-w4-target="labToastTarget">
                                            Active
                                        </button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-toast-state="disabled" data-w4-target="labToastTarget">
                                            Disabled
                                        </button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-toast-state="hidden" data-w4-target="labToastTarget">
                                            Hidden
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="toastJsStateCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">&lt;div id=&quot;labToastTarget&quot; class=&quot;w4-toast w4-toast-info w4-toast-md&quot;&gt;
  Toast de prueba para estados JS
&lt;/div&gt;
&lt;button data-w4-toast-state=&quot;enabled&quot; data-w4-target=&quot;labToastTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-toast-state=&quot;active&quot; data-w4-target=&quot;labToastTarget&quot;&gt;Active&lt;/button&gt;
&lt;button data-w4-toast-state=&quot;disabled&quot; data-w4-target=&quot;labToastTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-toast-state=&quot;hidden&quot; data-w4-target=&quot;labToastTarget&quot;&gt;Hidden&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al toast de prueba y refleja los hooks visuales del componente.
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

        // Simulador dinámico de Toasts
        function spawnToast(type, message, position, duration) {
            const wrapperId = position === 'top-right' ? 'tr-wrapper' :
                position === 'top-left' ? 'tl-wrapper' :
                    position === 'bottom-right' ? 'br-wrapper' :
                        position === 'bottom-left' ? 'bl-wrapper' :
                            position === 'top-center' ? 'tc-wrapper' : 'bc-wrapper';

            const wrapper = document.getElementById(wrapperId);
            if (!wrapper) return;

            const toast = document.createElement('div');
            toast.className = `w4-toast w4-toast-md w4-toast-${type}`;
            toast.innerText = message;

            // Append to wrapper
            wrapper.appendChild(toast);

            // Auto dismiss based on selected duration
            if (duration > 0) {
                setTimeout(() => {
                    // Add fade out animation (using state dismissed)
                    toast.setAttribute('data-w4-state', 'dismissed');

                    // Remove from DOM after animation completes
                    setTimeout(() => {
                        if (wrapper.contains(toast)) {
                            wrapper.removeChild(toast);
                        }
                    }, 300);
                }, duration);
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            var typeField = document.getElementById("toastType");
            var messageField = document.getElementById("toastMessage");
            var positionField = document.getElementById("toastPosition");
            var durationField = document.getElementById("toastDuration");
            var spawnButton = document.getElementById("spawnToastBtn");

            if (spawnButton) {
                spawnButton.addEventListener("click", function () {
                    var type = typeField ? typeField.value : "info";
                    var message = messageField ? messageField.value : "Notificación";
                    var position = positionField ? positionField.value : "bottom-right";
                    var duration = durationField ? parseInt(durationField.value, 10) : 3000;
                    spawnToast(type, message, position, isNaN(duration) ? 3000 : duration);
                });
            }
        });
    </script>
</body>

</html>