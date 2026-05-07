<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Tooltip Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Tooltip</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tooltip:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Tooltip</strong> (información sobre herramientas) proporciona texto explicativo o
                contexto adicional cuando un usuario pasa el cursor (hover) o enfoca un elemento. Ayuda a mantener la
                interfaz limpia ocultando detalles secundarios hasta que son necesarios.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong>Botones con solo íconos:</strong> Explicar la acción de un botón que no tiene texto visible
                    (ej. ícono de papelera &rarr; "Eliminar").</li>
                <li><strong>Aclaración de términos:</strong> Proporcionar definiciones de términos técnicos o acrónimos
                    sin saturar el texto principal.</li>
                <li><strong>Información de estado:</strong> Mostrar el motivo por el cual un botón o campo está
                    deshabilitado.</li>
                <li><strong>Fechas relativas:</strong> Mostrar la fecha y hora exacta al pasar el cursor sobre una fecha
                    relativa como "hace 2 horas".</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Color del tooltip y caret.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="tooltipVariantPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="tooltipVariantCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="tooltipVariantPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-neutral" data-w4-tip="Neutral">
                                    <button class="w4-btn w4-btn-neutral">Neutral</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-primary" data-w4-tip="Primary">
                                    <button class="w4-btn w4-btn-primary">Primary</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-secondary" data-w4-tip="Secondary">
                                    <button class="w4-btn w4-btn-secondary">Secondary</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-accent" data-w4-tip="Accent">
                                    <button class="w4-btn w4-btn-accent">Accent</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-info" data-w4-tip="Info">
                                    <button class="w4-btn w4-btn-info">Info</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-success" data-w4-tip="Success">
                                    <button class="w4-btn w4-btn-success">Success</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-warning" data-w4-tip="Warning">
                                    <button class="w4-btn w4-btn-warning">Warning</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top w4-tooltip-error" data-w4-tip="Error">
                                    <button class="w4-btn w4-btn-error">Error</button>
                                </div>
                            </div>
                        </div>
                        <div id="tooltipVariantCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
                        &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-primary" data-w4-tip="Primary"&gt;
                          &lt;button class="w4-button w4-button-primary"&gt;Primary&lt;/button&gt;
                        &lt;/div&gt;
                        &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-secondary" data-w4-tip="Secondary"&gt;
                          &lt;button class="w4-button w4-button-secondary"&gt;Secondary&lt;/button&gt;
                        &lt;/div&gt;
                        &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-accent" data-w4-tip="Accent"&gt;
                          &lt;button class="w4-button w4-button-accent"&gt;Accent&lt;/button&gt;
                        &lt;/div&gt;
                        &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-info" data-w4-tip="Info"&gt;
                          &lt;button class="w4-button w4-button-info"&gt;Info&lt;/button&gt;
                        &lt;/div&gt;
                        &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-success" data-w4-tip="Success"&gt;
                          &lt;button class="w4-button w4-button-success"&gt;Success&lt;/button&gt;
                        &lt;/button&gt;
                        &lt;/div&gt;
                        &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-warning" data-w4-tip="Warning"&gt;
                          &lt;button class="w4-button w4-button-warning"&gt;Warning&lt;/button&gt;
                        &lt;/div&gt;
                        &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-error" data-w4-tip="Error"&gt;
                          &lt;button class="w4-button w4-button-error"&gt;Error&lt;/button&gt;
                        &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Posiciones Base</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Top, Bottom, Left y Right.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="tooltipPositionBasePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="tooltipPositionBaseCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="tooltipPositionBasePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                <div class="w4-tooltip w4-tooltip-top " data-w4-tip="Tooltip Top">
                                    <button class="w4-btn w4-btn-primary">Top</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-left" data-w4-tip="Tooltip Left">
                                    <button class="w4-btn w4-btn-primary">Left</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-bottom" data-w4-tip="Tooltip Bottom">
                                    <button class="w4-btn w4-btn-primary">Bottom</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-right" data-w4-tip="Tooltip Right">
                                    <button class="w4-btn w4-btn-primary">Right</button>
                                </div>
                            </div>
                        </div>
                        <div id="tooltipPositionBaseCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class="w4-tooltip w4-tooltip-top" data-w4-tip="Tooltip Top"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Top&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-bottom" data-w4-tip="Tooltip Bottom"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Bottom&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-left" data-w4-tip="Tooltip Left"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Left&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-right" data-w4-tip="Tooltip Right"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Posiciones Esquina</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Top Left/Right y Bottom Left/Right.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="tooltipPositionCornerPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="tooltipPositionCornerCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="tooltipPositionCornerPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                <div class="w4-tooltip w4-tooltip-top-left" data-w4-tip="Top Left">
                                    <button class="w4-button w4-button-primary">Top Left</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-top-right" data-w4-tip="Top Right">
                                    <button class="w4-btn w4-btn-primary">Top Right</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-bottom-left" data-w4-tip="Bottom Left">
                                    <button class="w4-btn w4-btn-primary">Bottom Left</button>
                                </div>
                                <div class="w4-tooltip w4-tooltip-bottom-right" data-w4-tip="Bottom Right">
                                    <button class="w4-btn w4-btn-primary">Bottom Right</button>
                                </div>
                            </div>
                        </div>
                        <div id="tooltipPositionCornerCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class="w4-tooltip w4-tooltip-top-left" data-w4-tip="Top Left"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Top Left&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-top-right" data-w4-tip="Top Right"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Top Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-bottom-left" data-w4-tip="Bottom Left"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Bottom Left&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-bottom-right" data-w4-tip="Bottom Right"&gt;
  &lt;button class="w4-button w4-button-primary"&gt;Bottom Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Escalas soportadas para Tooltip.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-1 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <div class="w4-stack w4-stack-sm w4-stack-center">
                        <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="tooltipSizePreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="tooltipSizeCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="tooltipSizePreview" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                    <div class="w4-tooltip w4-tooltip-top w4-size-xs" data-w4-tip="w4-size-xs">
                                        <button class="w4-btn w4-btn-primary w4-btn-xs">XS</button>
                                    </div>
                                    <div class="w4-tooltip w4-tooltip-top w4-size-sm" data-w4-tip="w4-size-sm">
                                        <button class="w4-btn w4-btn-primary w4-btn-sm">SM</button>
                                    </div>
                                    <div class="w4-tooltip w4-tooltip-top w4-size-md" data-w4-tip="w4-size-md">
                                        <button class="w4-btn w4-btn-primary w4-btn-md">MD</button>
                                    </div>
                                    <div class="w4-tooltip w4-tooltip-top w4-size-lg" data-w4-tip="w4-size-lg">
                                        <button class="w4-btn w4-btn-primary w4-btn-lg">LG</button>
                                    </div>
                                    <div class="w4-tooltip w4-tooltip-top w4-size-xl" data-w4-tip="w4-size-xl">
                                        <button class="w4-btn w4-btn-primary w4-btn-xl">XL</button>
                                    </div>
                                </div>
                            </div>
                            <div id="tooltipSizeCode" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class="w4-tooltip w4-tooltip-top w4-size-xs" data-w4-tip="w4-size-xs"&gt;
  &lt;button class="w4-button w4-button-primary w4-button-xs"&gt;XS&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-size-sm" data-w4-tip="w4-size-sm"&gt;
  &lt;button class="w4-button w4-button-primary w4-button-sm"&gt;SM&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-size-md" data-w4-tip="w4-size-md"&gt;
  &lt;button class="w4-button w4-button-primary w4-button-md"&gt;MD&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-size-lg" data-w4-tip="w4-size-lg"&gt;
  &lt;button class="w4-button w4-button-primary w4-button-lg"&gt;LG&lt;/button&gt;
&lt;/div&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-size-xl" data-w4-tip="w4-size-xl"&gt;
  &lt;button class="w4-button w4-button-primary w4-button-xl"&gt;XL&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Ejemplos de Usos Comunes</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escenarios reales para aplicar tooltips en interfaces productivas.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="tooltipCommonUsePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="tooltipCommonUseCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="tooltipCommonUsePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-2 w4-gap-md">
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-sm w4-text-neutral">Botones con solo iconos</p>
                                    <div class="w4-tooltip w4-tooltip-top w4-tooltip-error"
                                        data-w4-tip="Eliminar registro">
                                        <button class="w4-button w4-button-error w4-button-square"
                                            aria-label="Eliminar">🗑</button>
                                    </div>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-sm w4-text-neutral">Aclaracion de terminos</p>
                                    <div class="w4-tooltip w4-tooltip-top w4-tooltip-info"
                                        data-w4-tip="SLA: Acuerdo de nivel de servicio">
                                        <span class="w4-text w4-text-md w4-text-primary">SLA</span>
                                    </div>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-sm w4-text-neutral">Informacion de estado</p>
                                    <div class="w4-tooltip w4-tooltip-top w4-tooltip-warning"
                                        data-w4-tip="No tienes permisos para editar este campo">
                                        {{-- <button class="w4-button w4-button-warning" disabled>Editar</button> --}}
                                        <input type="text" class="w4-input w4-input-warning"
                                            placeholder="+ 52 721 55 98" disabled>
                                    </div>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-sm w4-text-neutral">Fechas relativas</p>
                                    <div class="w4-tooltip w4-tooltip-top w4-tooltip-neutral"
                                        data-w4-tip="2026-05-06 14:32:10 UTC">
                                        <span class="w4-text w4-text-md">hace 2 horas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tooltipCommonUseCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;!-- Botones con solo iconos --&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-error" data-w4-tip="Eliminar registro"&gt;
  &lt;button class="w4-button w4-button-error w4-button-square" aria-label="Eliminar"&gt;🗑&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Aclaracion de terminos --&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-info" data-w4-tip="SLA: Acuerdo de nivel de servicio"&gt;
  &lt;span class="w4-text w4-text-md w4-text-primary"&gt;SLA&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Informacion de estado --&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-warning" data-w4-tip="No tienes permisos para editar este campo"&gt;
   &lt;input type="text" class="w4-input w4-input-warning" disabled value="+ 52 721 55 98"&gt;
&lt;!-- Fechas relativas --&gt;
&lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-neutral" data-w4-tip="2026-05-06 14:32:10 UTC"&gt;
  &lt;span class="w4-text w4-text-md"&gt;hace 2 horas&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="tooltipVisualStatePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="tooltipVisualStateCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="tooltipVisualStatePreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-2 w4-gap-md">
                                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Clase</h3>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                        <div class="w4-tooltip w4-tooltip-top w4-tooltip-open"
                                            data-w4-tip="Tooltip Open">
                                            <button class="w4-btn w4-btn-primary">Open</button>
                                        </div>
                                        <div class="w4-tooltip w4-tooltip-top w4-tooltip-active"
                                            data-w4-tip="Tooltip Active">
                                            <button class="w4-btn w4-btn-secondary">Active</button>
                                        </div>
                                        <div class="w4-tooltip w4-tooltip-top w4-tooltip-disabled"
                                            data-w4-tip="Tooltip Disabled">
                                            <button class="w4-btn w4-btn-warning">Disabled</button>
                                        </div>
                                        <div class="w4-tooltip w4-tooltip-top w4-tooltip-hidden"
                                            data-w4-tip="Tooltip Hidden">
                                            <button class="w4-btn w4-btn-error">Hidden</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Atributo</h3>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                        <div class="w4-tooltip w4-tooltip-top" data-w4-state="open"
                                            data-w4-tip="data-w4-state open">
                                            <button class="w4-btn w4-btn-primary">Open</button>
                                        </div>
                                        <div class="w4-tooltip w4-tooltip-top" data-w4-state="active"
                                            data-w4-tip="data-w4-state active">
                                            <button class="w4-btn w4-btn-secondary">Active</button>
                                        </div>
                                        <div class="w4-tooltip w4-tooltip-top" data-w4-state="disabled"
                                            data-w4-tip="data-w4-state disabled">
                                            <button class="w4-btn w4-btn-warning">Disabled</button>
                                        </div>
                                        <div class="w4-tooltip w4-tooltip-top" data-w4-state="hidden"
                                            data-w4-tip="data-w4-state hidden">
                                            <button class="w4-btn w4-btn-error">Hidden</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tooltipVisualStateCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
                &lt;!-- Por clase --&gt;
                &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-open" data-w4-tip="Tooltip Open"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Open&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-active" data-w4-tip="Tooltip Active"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Active&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-disabled" data-w4-tip="Tooltip Disabled"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Disabled&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="w4-tooltip w4-tooltip-top w4-tooltip-hidden" data-w4-tip="Tooltip Hidden"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Hidden&lt;/button&gt;
                &lt;/div&gt;
                
                &lt;!-- Por atributo --&gt;
                &lt;div class="w4-tooltip w4-tooltip-top" data-w4-state="open" data-w4-tip="data-w4-state open"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Open&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="w4-tooltip w4-tooltip-top" data-w4-state="active" data-w4-tip="data-w4-state active"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Active&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="w4-tooltip w4-tooltip-top" data-w4-state="disabled" data-w4-tip="data-w4-state disabled"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Disabled&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="w4-tooltip w4-tooltip-top" data-w4-state="hidden" data-w4-tip="data-w4-state hidden"&gt;
                  &lt;button class="w4-button w4-button-primary"&gt;Hidden&lt;/button&gt;
                &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Nativos Javascript Soportados al Componente
                Tooltip</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-tooltip-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al Tooltip de prueba.
                </p>
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="tooltipJsStatePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="tooltipJsStateCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="tooltipJsStatePreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-md">
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <div id="labTooltipTarget" class="w4-tooltip w4-tooltip-top w4-tooltip-primary my-6"
                                        data-w4-component="tooltip" data-w4-tip="Tooltip de prueba">
                                        <button class="w4-btn w4-btn-primary w4-btn-md">Tooltip de
                                            Prueba</button>
                                    </div>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                                        data-w4-tooltip-state="enabled" data-w4-target="labTooltipTarget">State
                                        Clear</button>
                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                        data-w4-tooltip-state="open" data-w4-target="labTooltipTarget">Open</button>
                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-info"
                                        data-w4-tooltip-state="active" data-w4-target="labTooltipTarget">Active</button>
                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                        data-w4-tooltip-state="disabled"
                                        data-w4-target="labTooltipTarget">Disabled</button>
                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-error"
                                        data-w4-tooltip-state="hidden" data-w4-target="labTooltipTarget">Hidden</button>
                                </div>
                                <p class="w4-text w4-text-sm w4-text-neutral">
                                    El estado se aplica al Tooltip de prueba y sincroniza sus atributos visuales.
                                </p>
                            </div>
                        </div>
                        <div id="tooltipJsStateCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div id="labTooltipTarget" class="w4-tooltip w4-tooltip-top w4-tooltip-primary"
     data-w4-component="tooltip" data-w4-tip="Tooltip de prueba"&gt;
  &lt;button class="w4-button w4-button-primary w4-button-md"&gt;Tooltip de Prueba&lt;/button&gt;
&lt;/div&gt;

&lt;button data-w4-tooltip-state="enabled" data-w4-target="labTooltipTarget"&gt;State Clear&lt;/button&gt;
&lt;button data-w4-tooltip-state="open" data-w4-target="labTooltipTarget"&gt;Open&lt;/button&gt;
&lt;button data-w4-tooltip-state="active" data-w4-target="labTooltipTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-tooltip-state="disabled" data-w4-target="labTooltipTarget"&gt;Disabled&lt;/button&gt;
&lt;button data-w4-tooltip-state="hidden" data-w4-target="labTooltipTarget"&gt;Hidden&lt;/button&gt;</code></pre>
                        </div>
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