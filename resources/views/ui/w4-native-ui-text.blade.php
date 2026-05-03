<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Text Lab</title>
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
                <select id="themeSwitcher" class="w4-select w4-select-sm w4-select-neutral-content">
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center mt-12">Native UI Text</h1>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Text:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Text</strong> es la base para el contenido escrito en la interfaz y asegura
                legibilidad, contraste y consistencia tipográfica.
            </p>
            <h2 class="w4-heading w4-heading-h3 w4-heading-primary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Cuerpos de texto:</strong> artículos y descripciones largas.</li>
                <li><strong class="w4-text-active">Leads:</strong> párrafos introductorios con
                    <code>w4-text-lead</code>.
                </li>
                <li><strong class="w4-text-active">Feedback:</strong> mensajes de éxito, error y advertencia.</li>
                <li><strong class="w4-text-active">Metadatos:</strong> texto auxiliar con <code>w4-text-xs</code> y
                    <code>w4-text-muted</code>.
                </li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Variantes Semánticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Colores semánticos para textos informativos y de
                estado.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-center">
                        <div class="w4-tabs w4-tabs-boxed " data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="textSemanticPreview">Vista Previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="textSemanticCode">Codigo HTML</button>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="textSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-4 w4-grid-bordered-primary">
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-neutral w4-text-center">Texto Neutral</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-primary w4-text-center">Texto Primary</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-secondary w4-text-center">Texto Secondary</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-accent w4-text-center">Texto Accent</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-info w4-text-center">Texto Info</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-success w4-text-center">Texto Success</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-warning w4-text-center">Texto Warning</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-error w4-text-center">Texto Error</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <p class="w4-text w4-text-muted w4-text-center">Texto Muted</p>
                                </div>
                            </div>
                        </div>
                        <div id="textSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-text w4-text-primary"&gt;Texto Primary&lt;/p&gt;
&lt;p class="w4-text w4-text-secondary"&gt;Texto Secondary&lt;/p&gt;
&lt;p class="w4-text w4-text-accent"&gt;Texto Accent&lt;/p&gt;
&lt;p class="w4-text w4-text-error"&gt;Texto Error&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Tamaños y Estilos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Escalas de texto y estilo lead.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-center">
                        <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="textSizePreview">Vista Previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="textSizeCode">Codigo HTML</button>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="textSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                <p class="w4-text w4-text-primary w4-text-xs">Texto XS</p>
                                <p class="w4-text w4-text-primary w4-text-sm">Texto SM</p>
                                <p class="w4-text w4-text-primary w4-text-md">Texto MD</p>
                                <p class="w4-text w4-text-primary w4-text-lg">Texto LG</p>
                                <p class="w4-text w4-text-primary w4-text-xl">Texto XL</p>
                            </div>
                        </div>
                        <div id="textSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-text w4-text-primary w4-text-xs"&gt;Texto XS&lt;/p&gt;
&lt;p class="w4-text w4-text-primary w4-text-sm"&gt;Texto SM&lt;/p&gt;
&lt;p class="w4-text w4-text-primary w4-text-md"&gt;Texto MD&lt;/p&gt;
&lt;p class="w4-text w4-text-primary w4-text-lg"&gt;Texto LG&lt;/p&gt;
&lt;p class="w4-text w4-text-primary w4-text-xl"&gt;Texto XL&lt;/p&gt;
&lt;p class="w4-text w4-text-lead"&gt;Lead&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Alineación</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Control de alineación horizontal del texto.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-center">
                        <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="textAlignPreview">Vista Previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="textAlignCode">Codigo HTML</button>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="textAlignPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <p class="w4-text w4-text-start">Texto alineado al inicio.</p>
                            <p class="w4-text w4-text-center">Texto alineado al centro.</p>
                            <p class="w4-text w4-text-end">Texto alineado al final.</p>
                        </div>
                        <div id="textAlignCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-text w4-text-start"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-center"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-end"&gt;...&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Ejemplos Basicos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Muestra de textos diversos aplicando todas las variantes de color del componente.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-center">
                        <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="textBasicPreview">Vista Previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="textBasicCode">Codigo HTML</button>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="textBasicPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-6 w4-gap-sm">

                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-neutral">Neutral: texto base para lectura general.</p>
                                </div>
                                <div class="w4-panel w4-panel-neutral w4-panel-sm">
                                    <p class="w4-text w4-text-neutral-content">Neutral Content: texto auxiliar en
                                        superficies.</p>
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                                    <p class="w4-text w4-text-primary">Primary: mensaje principal o CTA textual.</p>
                                </div>
                                <div class="w4-panel w4-panel-base-300 w4-panel-sm">
                                    <p class="w4-text w4-text-base-content">Base Content: color principal del sistema.
                                    </p>
                                </div>
                                <div class="w4-panel w4-panel-primary w4-panel-sm">
                                    <p class="w4-text w4-text-primary-content">Primary Content: texto sobre fondo
                                        primario.</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-secondary">Secondary: información complementaria.</p>
                                </div>
                                <div class="w4-panel w4-panel-secondary w4-panel-sm">
                                    <p class="w4-text w4-text-secondary-content">Secondary Content: contraste sobre
                                        secundario.</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-accent">Accent: resaltado visual puntual.</p>
                                </div>
                                <div class="w4-panel w4-panel-accent w4-panel-sm">
                                    <p class="w4-text w4-text-accent-content">Accent Content: texto sobre acento.</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-info">Info: nota informativa del sistema.</p>
                                </div>
                                <div class="w4-panel w4-panel-info w4-panel-sm">
                                    <p class="w4-text w4-text-info-content">Info Content: contraste sobre fondo info.
                                    </p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-success">Success: operación completada.</p>
                                </div>
                                <div class="w4-panel w4-panel-success w4-panel-sm">
                                    <p class="w4-text w4-text-success-content">Success Content: contraste sobre success.
                                    </p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-warning">Warning: advertencia preventiva.</p>
                                </div>
                                <div class="w4-panel w4-panel-warning w4-panel-sm">
                                    <p class="w4-text w4-text-warning-content">Warning Content: contraste sobre warning.
                                    </p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-error">Error: validación o falla crítica.</p>
                                </div>
                                <div class="w4-panel w4-panel-error w4-panel-sm">
                                    <p class="w4-text w4-text-error-content">Error Content: contraste sobre error.</p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-sm">
                                    <p class="w4-text w4-text-muted">Muted: metadata o texto secundario.</p>
                                </div>
                            </div>
                        </div>
                        <div id="textBasicCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-text w4-text-neutral"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-neutral-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-base-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-primary"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-primary-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-secondary"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-secondary-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-accent"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-accent-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-info"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-info-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-success"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-success-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-warning"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-warning-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-error"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-error-content"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-muted"&gt;...&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Estados por clase y por atributo
                <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="textClassPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="textClassCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="textClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                    <p class="w4-text w4-text-primary w4-text-active">Texto Active</p>
                                    <p class="w4-text w4-text-warning w4-text-disabled">Texto Disabled</p>
                                    <p class="w4-text w4-text-error w4-text-hidden">Texto Hidden</p>
                                </div>
                            </div>
                            <div id="textClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-text w4-text-primary w4-text-active"&gt;Texto Active&lt;/p&gt;
&lt;p class="w4-text w4-text-warning w4-text-disabled"&gt;Texto Disabled&lt;/p&gt;
&lt;p class="w4-text w4-text-error w4-text-hidden"&gt;Texto Hidden&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="textAttrPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="textAttrCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="textAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                    <p class="w4-text w4-text-primary" data-w4-state="active">data-w4-state="active"</p>
                                    <p class="w4-text w4-text-warning" data-w4-state="disabled">data-w4-state="disabled"
                                    </p>
                                    <p class="w4-text w4-text-error" data-w4-state="hidden">data-w4-state="hidden"</p>
                                </div>
                            </div>
                            <div id="textAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class="w4-text w4-text-primary" data-w4-state="active"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-warning" data-w4-state="disabled"&gt;...&lt;/p&gt;
&lt;p class="w4-text w4-text-error" data-w4-state="hidden"&gt;...&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary">Estados JS Soportados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Playground declarativo con
                <code>data-w4-text-state</code> y <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="textJsPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="textJsCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="textJsPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <p id="labTextTarget" class="w4-text w4-text-lg w4-text-primary mb-6">Texto de Prueba</p>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-outline"
                                    data-w4-text-state="enabled" data-w4-target="labTextTarget">Clear</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-text-state="enabled" data-w4-target="labTextTarget">Enabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-text-state="active" data-w4-target="labTextTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-text-state="disabled" data-w4-target="labTextTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-text-state="hidden"
                                    data-w4-target="labTextTarget">Hidden</button>
                            </div>
                        </div>
                        <div id="textJsCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p id="labTextTarget" class="w4-text w4-text-primary"&gt;Texto de Prueba&lt;/p&gt;
&lt;button data-w4-text-state="enabled" data-w4-target="labTextTarget"&gt;Clear&lt;/button&gt;
&lt;button data-w4-text-state="active" data-w4-target="labTextTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-text-state="disabled" data-w4-target="labTextTarget"&gt;Disabled&lt;/button&gt;
&lt;button data-w4-text-state="hidden" data-w4-target="labTextTarget"&gt;Hidden&lt;/button&gt;</code></pre>
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