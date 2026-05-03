<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Heading Lab</title>
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
        <section class="w4-section w4-section-xl">
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Heading</h1>
        </section>

        <section class="w4-section w4-section-xl">
            <h1 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Heading:</h1>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Heading</strong> se utiliza para crear jerarquía tipográfica y estructura
                semántica en las páginas.
                Soporta tamaños explícitos, colores temáticos y clases de alineación, asegurando que el SEO y la
                accesibilidad se mantengan intactos.

            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Títulos de página:</strong> Nivel H1 principal usando
                    <code>w4-hdg-h1</code>.
                </li>
                <li><strong class="w4-text-active">Separación de secciones:</strong> Jerarquía secundaria con H2 y H3.
                </li>
                <li><strong class="w4-text-active">Destacar información:</strong> Uso de variantes de color como Primary
                    o Accent para llamar la atención en Landing Pages.</li>
                <li><strong class="w4-text-active">Tarjetas y Modales:</strong> Encabezados pequeños (H5, H6) integrados
                    en otros componentes de UI.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes Semánticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Colores de heading alineados al sistema de tokens.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="headingSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="headingSemanticCode">Código HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="headingSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-4 w4-grid-bordered-primary">
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-center">Heading Neutral
                                    </h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-center">Heading Primary</h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-secondary w4-hdg-center">Heading Secondary</h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-accent w4-hdg-center">Heading Accent</h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-info w4-hdg-center">Heading Info</h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-success w4-hdg-center">Heading Success</h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-warning w4-hdg-center">Heading Warning</h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-error w4-hdg-center">Heading Error</h3>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <h3 class="w4-hdg w4-hdg-h3 w4-hdg-muted w4-hdg-center">Heading Muted</h3>
                                </div>
                            </div>
                        </div>
                        <div id="headingSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;h3 class="w4-hdg w4-hdg-h3"&gt;Heading Neutral&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-primary"&gt;Heading Primary&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-secondary"&gt;Heading Secondary&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-accent"&gt;Heading Accent&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-info"&gt;Heading Info&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-success"&gt;Heading Success&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-warning"&gt;Heading Warning&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-error"&gt;Heading Error&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-muted"&gt;Heading Muted&lt;/h3&gt;
</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños y Jerarquía</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas tipográficas y aliases de encabezado.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="headingSizePreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="headingSizeCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="headingSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm">
                            <div class="w4-stack w4-stack-sm">
                                <h1 class="w4-hdg w4-hdg-h1">Heading H1</h1>
                                <h2 class="w4-hdg w4-hdg-h2">Heading H2</h2>
                                <h3 class="w4-hdg w4-hdg-h3">Heading H3</h3>
                                <h4 class="w4-hdg w4-hdg-h4">Heading H4</h4>
                                <h5 class="w4-hdg w4-hdg-h5">Heading H5</h5>
                                <h6 class="w4-hdg w4-hdg-h6">Heading H6</h6>
                            </div>
                        </div>
                        <div id="headingSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;h1 class="w4-hdg w4-hdg-h1"&gt;Heading H1&lt;/h1&gt;
&lt;h2 class="w4-hdg w4-hdg-h2"&gt;Heading H2&lt;/h2&gt;
&lt;h3 class="w4-hdg w4-hdg-h3"&gt;Heading H3&lt;/h3&gt;
&lt;h4 class="w4-hdg w4-hdg-h4"&gt;Heading H4&lt;/h4&gt;
&lt;h5 class="w4-hdg w4-hdg-h5"&gt;Heading H5&lt;/h5&gt;
&lt;h6 class="w4-hdg w4-hdg-h6"&gt;Heading H6&lt;/h6&gt;
</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Alineación</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Control de alineación con modificadores start, center y end.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="headingAlignPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="headingAlignCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="headingAlignPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm">
                            <h3 class="w4-hdg w4-hdg-h3 w4-hdg-start">Alineado al inicio</h3>
                            <h3 class="w4-hdg w4-hdg-h3 w4-hdg-center">Alineado al centro</h3>
                            <h3 class="w4-hdg w4-hdg-h3 w4-hdg-end">Alineado al final</h3>
                        </div>
                        <div id="headingAlignCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-start"&gt;Alineado al inicio&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-center"&gt;Alineado al centro&lt;/h3&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-end"&gt;Alineado al final&lt;/h3&gt;
</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Demostración de los modificadores de tamaño: <code>w4-hdg-xs</code>, <code>w4-hdg-sm</code>,
                <code>w4-hdg-md</code>, <code>w4-hdg-lg</code> y <code>w4-hdg-xl</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="headingScalePreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="headingScaleCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="headingScalePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm">
                            <div class="w4-stack w4-stack-sm">
                                <p class="w4-hdg w4-hdg-xs w4-hdg-primary">w4-hdg-xs</p>
                                <p class="w4-hdg w4-hdg-sm w4-hdg-primary">w4-hdg-sm</p>
                                <p class="w4-hdg w4-hdg-md w4-hdg-primary">w4-hdg-md</p>
                                <p class="w4-hdg w4-hdg-lg w4-hdg-primary">w4-hdg-lg</p>
                                <p class="w4-hdg w4-hdg-xl w4-hdg-primary">w4-hdg-xl</p>
                            </div>
                        </div>
                        <div id="headingScaleCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-hdg w4-hdg-xs w4-hdg-primary"&gt;w4-hdg-xs&lt;/p&gt;
&lt;p class="w4-hdg w4-hdg-sm w4-hdg-primary"&gt;w4-hdg-sm&lt;/p&gt;
&lt;p class="w4-hdg w4-hdg-md w4-hdg-primary"&gt;w4-hdg-md&lt;/p&gt;
&lt;p class="w4-hdg w4-hdg-lg w4-hdg-primary"&gt;w4-hdg-lg&lt;/p&gt;
&lt;p class="w4-hdg w4-hdg-xl w4-hdg-primary"&gt;w4-hdg-xl&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Ejemplos de uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplo visual para destacar informacion en una landing page usando jerarquia y color.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="headingHeroPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="headingHeroCode">Código HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="headingHeroPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-md">
                            <p class="w4-hdg w4-hdg-sm w4-hdg-secondary w4-hdg-center">NUEVA COLECCION 2026</p>
                            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-center">Disena Interfaces Que</h2>
                            <h3 class="w4-hdg w4-hdg-h3 w4-hdg-accent w4-hdg-center">Convierten Mas Rapido</h3>
                            <p class="w4-text w4-text-base w4-text-neutral w4-text-center">
                                Combina variantes <strong>Primary</strong> y <strong>Accent</strong> para dirigir la
                                atencion
                                del usuario al mensaje principal.
                            </p>
                        </div>
                        <div id="headingHeroCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-hdg w4-hdg-sm w4-hdg-secondary w4-hdg-center"&gt;NUEVA COLECCION 2026&lt;/p&gt;
&lt;h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-center"&gt;Disena Interfaces Que&lt;/h2&gt;
&lt;h3 class="w4-hdg w4-hdg-h3 w4-hdg-accent w4-hdg-center"&gt;Convierten Mas Rapido&lt;/h3&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados soportados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="headingClassPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="headingClassCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="headingClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <h4 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-active">Heading
                                        Active</h4>
                                    <h4 class="w4-hdg w4-hdg-h4 w4-hdg-secondary w4-hdg-disabled">
                                        Heading Disabled</h4>
                                    <h4 class="w4-hdg w4-hdg-h4 w4-hdg-info">Heading Visible</h4>
                                </div>
                            </div>
                            <div id="headingClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;h4 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-active"&gt;Active&lt;/h4&gt;
&lt;h4 class="w4-hdg w4-hdg-h4 w4-hdg-secondary w4-hdg-disabled"&gt;Disabled&lt;/h4&gt;
&lt;h4 class="w4-hdg w4-hdg-h4 w4-hdg-info w4-hdg-hidden"&gt;Hidden&lt;/h4&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="headingAttrPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="headingAttrCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="headingAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <h4 class="w4-hdg w4-hdg-h4 w4-hdg-primary" data-w4-state="active">
                                        data-w4-state="active"</h4>
                                    <h4 class="w4-hdg w4-hdg-h4 w4-hdg-warning" data-w4-state="disabled">
                                        data-w4-state="disabled"</h4>
                                    <h4 class="w4-hdg w4-hdg-h4 w4-hdg-info" data-w4-state="hidden">
                                        data-w4-state="hidden"</h4>
                                </div>
                            </div>
                            <div id="headingAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;h4 class="w4-hdg w4-hdg-h4 w4-hdg-primary" data-w4-state="active"&gt;...&lt;/h4&gt;
&lt;h4 class="w4-hdg w4-hdg-h4 w4-hdg-warning" data-w4-state="disabled"&gt;...&lt;/h4&gt;
&lt;h4 class="w4-hdg w4-hdg-h4 w4-hdg-info" data-w4-state="hidden"&gt;...&lt;/h4&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Nativos Javascript Soportados al Componente
                Heading</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Prueba de cambios de estado del componente con <code>data-w4-heading-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en el heading de prueba.
                </p>
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="headingJsPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="headingJsCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="headingJsPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <h3 id="labHeadingTarget" class="w4-hdg w4-hdg-h3 w4-hdg-primary mb-6">
                                Heading de Prueba
                            </h3>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-heading-state="enabled" data-w4-target="labHeadingTarget">Enabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-heading-state="active" data-w4-target="labHeadingTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-heading-state="disabled" data-w4-target="labHeadingTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error"
                                    data-w4-heading-state="hidden" data-w4-target="labHeadingTarget">Hidden</button>
                            </div>
                        </div>
                        <div id="headingJsCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;h3 id="labHeadingTarget" class="w4-hdg w4-hdg-h3 w4-hdg-primary"&gt;Heading de Prueba&lt;/h3&gt;
&lt;button data-w4-heading-state="enabled" data-w4-target="labHeadingTarget"&gt;Enabled&lt;/button&gt;
&lt;button data-w4-heading-state="active" data-w4-target="labHeadingTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-heading-state="disabled" data-w4-target="labHeadingTarget"&gt;Disabled&lt;/button&gt;
&lt;button data-w4-heading-state="hidden" data-w4-target="labHeadingTarget"&gt;Hidden&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica al heading de prueba y refleja los hooks visuales del componente.
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

            // Intenta obtener el tema de localStorage, si no, usa el data-theme actual o light por defecto
            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";

            // Aplica el tema al documento
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