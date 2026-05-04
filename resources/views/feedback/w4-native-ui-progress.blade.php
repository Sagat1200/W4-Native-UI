<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Progress Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Progress</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Progress:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Progress estiliza la etiqueta nativa <code>&lt;progress&gt;</code> de HTML5. Se utiliza
                para visualizar el estado de avance de una operación extensa (como una descarga o un flujo de pasos
                múltiples), ofreciendo tanto estados determinados (porcentajes) como indeterminados (animación de carga
                continua).
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Subida/Descarga de archivos:</strong> Mostrar el porcentaje exacto de
                    un archivo que se está procesando usando el atributo <code>value</code>.</li>
                <li><strong class="w4-text-active">Wizards y Formularios por pasos:</strong> Indicar en qué paso se
                    encuentra el usuario dentro de un flujo largo.</li>
                <li><strong class="w4-text-active">Carga de aplicaciones:</strong> Usar el estado indeterminado
                    (removiendo el atributo value) durante el enrutamiento inicial o carga de datos pesados.</li>
                <li><strong class="w4-text-active">Cuotas y límites:</strong> Representar visualmente el uso de
                    almacenamiento de una cuenta (cambiando a color Warning o Error al acercarse al 100%).</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Barras de progreso con colores del sistema semántico.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="progressSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="progressSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="progressSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-8 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Default</span>
                            <progress class="w4-progress" value="25" max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Primary</span>
                            <progress class="w4-progress w4-progress-primary" value="35" max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Secondary</span>
                            <progress class="w4-progress w4-progress-secondary" value="45" max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Accent</span>
                            <progress class="w4-progress w4-progress-accent" value="55" max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Info</span>
                            <progress class="w4-progress w4-progress-info" value="65" max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Success</span>
                            <progress class="w4-progress w4-progress-success" value="75" max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Warning</span>
                            <progress class="w4-progress w4-progress-warning" value="85" max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">Error</span>
                            <progress class="w4-progress w4-progress-error" value="95" max="100"></progress>
                        </div>
                    </div>
                </div>
                <div id="progressSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre
                        class="m-0"><code class="w4-text w4-text-xs">&lt;progress class=&quot;w4-progress&quot; value=&quot;25&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-primary&quot; value=&quot;35&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-secondary&quot; value=&quot;45&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-accent&quot; value=&quot;55&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-info&quot; value=&quot;65&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-success&quot; value=&quot;75&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-warning&quot; value=&quot;85&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-error&quot; value=&quot;95&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños de Progress</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escala morfológica disponible para barras de progreso.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="progressSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="progressSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="progressSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">XS · 0.25rem</span>
                            <progress class="w4-progress w4-progress-primary w4-progress-xs" value="45"
                                max="100"></progress>
                        </div>
                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">SM · 0.375rem</span>
                            <progress class="w4-progress w4-progress-primary w4-progress-sm" value="55"
                                max="100"></progress>
                        </div>
                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">MD · 0.5rem</span>
                            <progress class="w4-progress w4-progress-primary w4-progress-md" value="65"
                                max="100"></progress>
                        </div>
                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">LG · 0.75rem</span>
                            <progress class="w4-progress w4-progress-primary w4-progress-lg" value="75"
                                max="100"></progress>
                        </div>
                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-xs w4-text-neutral">XL · 1rem</span>
                            <progress class="w4-progress w4-progress-primary w4-progress-xl" value="85"
                                max="100"></progress>
                        </div>
                    </div>
                </div>
                <div id="progressSizeCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre
                        class="m-0"><code class="w4-text w4-text-xs">&lt;progress class=&quot;w4-progress w4-progress-primary w4-progress-xs&quot; value=&quot;45&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-primary w4-progress-sm&quot; value=&quot;55&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-primary w4-progress-md&quot; value=&quot;65&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-primary w4-progress-lg&quot; value=&quot;75&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-primary w4-progress-xl&quot; value=&quot;85&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Ejemplos de Uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Casos prácticos de uso para progreso determinado e indeterminado.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="progressUsePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="progressUseCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="progressUsePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-2 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-neutral">Carga de archivo</span>
                            <progress class="w4-progress w4-progress-info w4-progress-md" value="32"
                                max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-neutral">Wizard de registro</span>
                            <progress class="w4-progress w4-progress-primary w4-progress-md" value="60"
                                max="100"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-neutral">Sincronización de datos</span>
                            <progress
                                class="w4-progress w4-progress-secondary w4-progress-lg w4-progress-loading"></progress>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-neutral">Uso de almacenamiento</span>
                            <progress class="w4-progress w4-progress-warning w4-progress-lg" value="88"
                                max="100"></progress>
                        </div>
                    </div>
                </div>
                <div id="progressUseCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre
                        class="m-0"><code class="w4-text w4-text-xs">&lt;progress class=&quot;w4-progress w4-progress-info&quot; value=&quot;32&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-primary&quot; value=&quot;60&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-secondary w4-progress-loading&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-warning&quot; value=&quot;88&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;</code></pre>
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
                        data-w4-target="progressStateClassPreview">Por Clase</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="progressStateAttrPreview">Por Atributo</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-accent"
                        data-w4-target="progressStateCode">Codigo HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="progressStateClassPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-sm">
                            <progress class="w4-progress w4-progress-success w4-progress-active" value="66"
                                max="100"></progress>
                            <progress class="w4-progress w4-progress-warning w4-progress-disabled" value="40"
                                max="100"></progress>
                            <progress class="w4-progress w4-progress-info w4-progress-loading"></progress>
                            <p class="w4-text w4-text-sm w4-text-neutral">
                                El estado <code>hidden</code> oculta el componente por completo.
                            </p>
                        </div>
                    </div>
                    <div id="progressStateAttrPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm" hidden
                        aria-hidden="true">
                        <div class="w4-stack w4-stack-sm">
                            <progress class="w4-progress w4-progress-success" value="66" max="100"
                                data-w4-state="active"></progress>
                            <progress class="w4-progress w4-progress-warning" value="40" max="100"
                                data-w4-state="disabled"></progress>
                            <progress class="w4-progress w4-progress-info" data-w4-state="loading"></progress>
                            <p class="w4-text w4-text-sm w4-text-neutral">
                                Usa <code>data-w4-state="hidden"</code> para ocultar.
                            </p>
                        </div>
                    </div>
                    <div id="progressStateCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre
                            class="m-0"><code class="w4-text w4-text-xs">&lt;!-- Por clase --&gt;
&lt;progress class=&quot;w4-progress w4-progress-success w4-progress-active&quot; value=&quot;66&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-warning w4-progress-disabled&quot; value=&quot;40&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-info w4-progress-loading&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-error w4-progress-hidden&quot; value=&quot;50&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;

&lt;!-- Por atributo --&gt;
&lt;progress class=&quot;w4-progress w4-progress-success&quot; value=&quot;66&quot; max=&quot;100&quot; data-w4-state=&quot;active&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-warning&quot; value=&quot;40&quot; max=&quot;100&quot; data-w4-state=&quot;disabled&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-info&quot; data-w4-state=&quot;loading&quot;&gt;&lt;/progress&gt;
&lt;progress class=&quot;w4-progress w4-progress-error&quot; value=&quot;50&quot; max=&quot;100&quot; data-w4-state=&quot;hidden&quot;&gt;&lt;/progress&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        @php
            $progressConfig = $progressConfig ?? [
                'bar_id' => 'jsProgressBar',
                'text_id' => 'jsProgressText',
                'initial_state' => 'enabled',
                'autostart' => false,
                'initial_value' => 0,
            ];
        @endphp

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Nativos Javascript Soportados al Componente
                Progress</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones del componente usando <code>data-w4-progress-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en el Progress de prueba.
                </p>
                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                        data-w4-target="progressJsPreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="progressJsCode">Codigo HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="progressJsPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-sm">
                            <span id="{{ $progressConfig['text_id'] }}" class="w4-text w4-text-sm w4-text-neutral"
                                data-w4-progress-text-for="{{ $progressConfig['bar_id'] }}">{{ $progressConfig['initial_value'] }}%</span>
                            <progress id="{{ $progressConfig['bar_id'] }}"
                                class="w4-progress w4-progress-primary w4-progress-lg"
                                value="{{ $progressConfig['initial_value'] }}" max="100"
                                data-w4-progress-initial-state="{{ $progressConfig['initial_state'] }}"
                                data-w4-progress-autostart="{{ $progressConfig['autostart'] ? 'true' : 'false' }}"></progress>
                        </div>
                        <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm mt-3">
                            <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                data-w4-progress-state="enabled"
                                data-w4-target="{{ $progressConfig['bar_id'] }}">Clear</button>

                            <button type="button" class="w4-btn w4-btn-sm w4-btn-primary"
                                data-w4-progress-state="active"
                                data-w4-target="{{ $progressConfig['bar_id'] }}">Active</button>

                            <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                data-w4-progress-state="loading"
                                data-w4-target="{{ $progressConfig['bar_id'] }}">Loading</button>

                            <button type="button" class="w4-btn w4-btn-sm w4-btn-info"
                                data-w4-progress-state="indeterminate"
                                data-w4-target="{{ $progressConfig['bar_id'] }}">Indeterminate</button>

                            <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                data-w4-progress-state="disabled"
                                data-w4-target="{{ $progressConfig['bar_id'] }}">Disabled</button>

                            <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-progress-state="hidden"
                                data-w4-target="{{ $progressConfig['bar_id'] }}">Hidden</button>

                        </div>
                    </div>
                    <div id="progressJsCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre
                            class="m-0"><code class="w4-text w4-text-xs">&lt;span id=&quot;jsProgressText&quot; data-w4-progress-text-for=&quot;jsProgressBar&quot;&gt;0%&lt;/span&gt;
&lt;progress id=&quot;jsProgressBar&quot; class=&quot;w4-progress w4-progress-primary w4-progress-lg&quot; value=&quot;0&quot; max=&quot;100&quot;&gt;&lt;/progress&gt;

&lt;button data-w4-progress-state=&quot;active&quot; data-w4-target=&quot;jsProgressBar&quot;&gt;Active&lt;/button&gt;
&lt;button data-w4-progress-state=&quot;enabled&quot; data-w4-target=&quot;jsProgressBar&quot;&gt;Clear&lt;/button&gt;
&lt;button data-w4-progress-state=&quot;loading&quot; data-w4-target=&quot;jsProgressBar&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-progress-state=&quot;indeterminate&quot; data-w4-target=&quot;jsProgressBar&quot;&gt;Indeterminate&lt;/button&gt;
&lt;button data-w4-progress-state=&quot;disabled&quot; data-w4-target=&quot;jsProgressBar&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-progress-state=&quot;hidden&quot; data-w4-target=&quot;jsProgressBar&quot;&gt;Hidden&lt;/button&gt;
&lt;button data-w4-progress-state=&quot;success&quot; data-w4-target=&quot;jsProgressBar&quot;&gt;Success&lt;/button&gt;</code></pre>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica al Progress de prueba y refleja los hooks visuales del componente.
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

            var progressBar = document.getElementById(@json($progressConfig['bar_id']));
            var progressText = document.getElementById(@json($progressConfig['text_id']));

            if (progressBar && progressText) {
                var syncProgressText = function () {
                    if (progressBar.hasAttribute("data-w4-state")) {
                        var state = progressBar.getAttribute("data-w4-state");

                        if (state === "indeterminate" || state === "loading") {
                            progressText.textContent = "Cargando...";
                            return;
                        }

                        if (state === "disabled") {
                            progressText.textContent = "Pausado / Deshabilitado";
                            return;
                        }

                        if (state === "hidden") {
                            progressText.textContent = "Oculto";
                            return;
                        }
                    }

                    progressText.textContent = (progressBar.getAttribute("value") || "0") + "%";
                };

                syncProgressText();
                new MutationObserver(syncProgressText).observe(progressBar, {
                    attributes: true,
                    attributeFilter: ["value", "data-w4-state", "class"]
                });
            }
        });
    </script>
</body>

</html>