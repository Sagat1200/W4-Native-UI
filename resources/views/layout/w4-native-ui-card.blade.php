<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Card Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Card</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Card:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Card</strong> (tarjeta) es un contenedor versátil y flexible utilizado para
                agrupar contenido relacionado y acciones. Es fundamental en el diseño de interfaces modernas para
                organizar información de manera estructurada, legible y visualmente atractiva.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong>Listados de contenido:</strong> Mostrar productos de una tienda, artículos de un blog o
                    perfiles de usuario en una cuadrícula.</li>
                <li><strong>Paneles de control (Dashboards):</strong> Agrupar métricas, gráficos o resúmenes de
                    información en widgets independientes.</li>
                <li><strong>Formularios estructurados:</strong> Contener secciones lógicas de un formulario largo (ej.
                    "Datos personales", "Información de pago").</li>
                <li><strong>Elementos interactivos:</strong> Crear tarjetas clicables que actúan como enlaces grandes
                    hacia vistas detalladas.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Card</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Ejemplo basico de una tarjeta con contenido y accion.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center w4-tab-boxed-content-panels">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="cardBasicPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="cardBasicCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="cardBasicPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <article class="w4-card w4-card-base-100">
                                <div class="w4-card-body">
                                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Card Basica</h3>
                                    <p class="w4-text w4-text-neutral">
                                        Esta card organiza contenido relacionado y mantiene una accion principal clara.
                                    </p>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-sm">
                                        <button class="w4-button w4-button-primary w4-button-sm">Ver Mas</button>
                                        <button class="w4-button w4-button-ghost w4-button-sm">Cancelar</button>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div id="cardBasicCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;article class="w4-card w4-card-base-100"&gt;
  &lt;div class="w4-card-body"&gt;
    &lt;h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary"&gt;Card Basica&lt;/h3&gt;
    &lt;p class="w4-text w4-text-neutral"&gt;
      Esta card organiza contenido relacionado y mantiene una accion principal clara.
    &lt;/p&gt;
    &lt;div class="w4-stack w4-stack-horizontal w4-stack-sm"&gt;
      &lt;button class="w4-button w4-button-primary w4-button-sm"&gt;Ver Mas&lt;/button&gt;
      &lt;button class="w4-button w4-button-ghost w4-button-sm"&gt;Cancelar&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Variantes de color para enfatizar contexto visual.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="cardSemanticPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="cardSemanticCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="cardSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-4 w4-gap-md">
                                <article class="w4-card w4-card-neutral">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-neutral-content">Neutral</h3>
                                        <p class="w4-text w4-text-sm w4-text-neutral-content">Estado neutral.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-primary">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary-content">Primary</h3>
                                        <p class="w4-text w4-text-sm w4-text-primary-content">Estado principal.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-secondary">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-secondary-content">Secondary</h3>
                                        <p class="w4-text w4-text-sm w4-text-secondary-content">Estado secundario.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-accent">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-accent-content">Accent</h3>
                                        <p class="w4-text w4-text-sm w4-text-accent-content">Color de destaque.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-success">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-success-content">Success</h3>
                                        <p class="w4-text w4-text-sm w4-text-success-content">Confirmacion o exito.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-info">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-info-content">Info</h3>
                                        <p class="w4-text w4-text-sm w4-text-info-content">Informacion adicional.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-warning">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-warning-content">Warning</h3>
                                        <p class="w4-text w4-text-sm w4-text-warning-content">Atencion requerida.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-error">
                                    <div class="w4-card-body">
                                        <h3 class="w4-hdg w4-hdg-h5 w4-hdg-error-content">Error</h3>
                                        <p class="w4-text w4-text-sm w4-text-error-content">Falla o bloqueo.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div id="cardSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;article class="w4-card w4-card-primary"&gt;
  &lt;div class="w4-card-body"&gt;
    &lt;h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary-content"&gt;Primary&lt;/h3&gt;
    &lt;p class="w4-text w4-text-sm w4-text-primary-content"&gt;Estado principal.&lt;/p&gt;
  &lt;/div&gt;
&lt;/article&gt;

&lt;article class="w4-card w4-card-success"&gt;...&lt;/article&gt;
&lt;article class="w4-card w4-card-warning"&gt;...&lt;/article&gt;
&lt;article class="w4-card w4-card-error"&gt;...&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Superficie y Bordes</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Modificadores para profundidad, borde y estilo.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="cardSurfacePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="cardSurfaceCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="cardSurfacePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-3 w4-gap-md">
                                <article class="w4-card w4-card-bordered w4-card-bordered-primary">
                                    <div class="w4-card-body">
                                        <h3 class="w4-heading w4-heading-h5 w4-heading-primary">Bordered</h3>
                                        <p class="w4-text w4-text-sm w4-text-neutral">Card con borde destacado.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-elevated">
                                    <div class="w4-card-body">
                                        <h3 class="w4-heading w4-heading-h5 w4-heading-primary">Elevated</h3>
                                        <p class="w4-text w4-text-sm w4-text-neutral">Mayor elevacion visual.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-ghost">
                                    <div class="w4-card-body">
                                        <h3 class="w4-heading w4-heading-h5 w4-heading-primary">Ghost</h3>
                                        <p class="w4-text w4-text-sm w4-text-neutral">Sin fondo ni borde visible.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div id="cardSurfaceCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;article class="w4-card w4-card-bordered w4-card-bordered-primary"&gt;
  &lt;div class="w4-card-body"&gt;
    &lt;h3&gt;Bordered&lt;/h3&gt;
    &lt;p&gt;Card con borde destacado.&lt;/p&gt;
  &lt;/div&gt;
&lt;/article&gt;

&lt;article class="w4-card w4-card-elevated"&gt;...&lt;/article&gt;
&lt;article class="w4-card w4-card-ghost"&gt;...&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamanos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Escalas de padding para densidad visual.</p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="cardSizePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="cardSizeCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="cardSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-2 w4-gap-md">
                                <article class="w4-card w4-card-xs">
                                    <div class="w4-card-body"><strong>XS</strong>
                                        <p class="w4-text w4-text-sm">Padding compacto.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-sm">
                                    <div class="w4-card-body"><strong>SM</strong>
                                        <p class="w4-text w4-text-sm">Uso denso.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-md">
                                    <div class="w4-card-body"><strong>MD</strong>
                                        <p class="w4-text w4-text-sm">Tamaño base.</p>
                                    </div>
                                </article>
                                <article class="w4-card w4-card-lg">
                                    <div class="w4-card-body"><strong>LG</strong>
                                        <p class="w4-text w4-text-sm">Contenido destacado.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div id="cardSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;article class="w4-card w4-card-xs"&gt;&lt;div class="w4-card-body"&gt;...&lt;/div&gt;&lt;/article&gt;
&lt;article class="w4-card w4-card-sm"&gt;&lt;div class="w4-card-body"&gt;...&lt;/div&gt;&lt;/article&gt;
&lt;article class="w4-card w4-card-md"&gt;&lt;div class="w4-card-body"&gt;...&lt;/div&gt;&lt;/article&gt;
&lt;article class="w4-card w4-card-lg"&gt;&lt;div class="w4-card-body"&gt;...&lt;/div&gt;&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Ejemplos de Cards por Caso de Uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos aplicados a contenido, analitica, elementos interactivos y formularios estructurados.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary">Card XS con Imagen Superior</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="cardUseXsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="cardUseXsCode">Codigo HTML</button>
                        </div>
                        <div id="cardUseXsPreview" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <article class="w4-card w4-card-xs w4-card-base-100">
                                <figure class="w4-card-figure">
                                    <img src="https://picsum.photos/640/220?random=77" alt="Portada del articulo de viaje">
                                </figure>
                                <div class="w4-card-body">
                                    <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Viaje a la Sierra Norte</h4>
                                    <p class="w4-text w4-text-sm w4-text-neutral">Ruta breve con miradores y pueblos magicos.</p>
                                </div>
                            </article>
                        </div>
                        <div id="cardUseXsCode" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">&lt;article class="w4-card w4-card-xs w4-card-base-100"&gt;
  &lt;figure class="w4-card-figure"&gt;&lt;img src="..." alt="Portada del articulo de viaje"&gt;&lt;/figure&gt;
  &lt;div class="w4-card-body"&gt;
    &lt;h4&gt;Viaje a la Sierra Norte&lt;/h4&gt;
    &lt;p&gt;Ruta breve con miradores y pueblos magicos.&lt;/p&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary">Card SM con Grafico</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="cardUseSmPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="cardUseSmCode">Codigo HTML</button>
                        </div>
                        <div id="cardUseSmPreview" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <article class="w4-card w4-card-sm w4-card-base-100">
                                <figure class="w4-card-figure">
                                    <svg viewBox="0 0 320 140" role="img" aria-label="Grafico de tendencia semanal">
                                        <rect x="0" y="0" width="320" height="140" fill="hsl(var(--w4-base-200))"></rect>
                                        <polyline fill="none" stroke="hsl(var(--w4-primary))" stroke-width="4" points="20,110 70,90 120,100 170,62 220,74 270,42 300,48"></polyline>
                                        <line x1="20" y1="118" x2="300" y2="118" stroke="hsl(var(--w4-base-300))" stroke-width="2"></line>
                                    </svg>
                                </figure>
                                <div class="w4-card-body">
                                    <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Trafico Semanal</h4>
                                    <p class="w4-text w4-text-sm w4-text-neutral">Crecimiento sostenido en los ultimos siete dias.</p>
                                </div>
                            </article>
                        </div>
                        <div id="cardUseSmCode" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">&lt;article class="w4-card w4-card-sm w4-card-base-100"&gt;
  &lt;figure class="w4-card-figure"&gt;&lt;svg viewBox="0 0 320 140"&gt;...&lt;/svg&gt;&lt;/figure&gt;
  &lt;div class="w4-card-body"&gt;
    &lt;h4&gt;Trafico Semanal&lt;/h4&gt;
    &lt;p&gt;Crecimiento sostenido en los ultimos siete dias.&lt;/p&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary">Card MD Interactiva</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="cardUseMdPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="cardUseMdCode">Codigo HTML</button>
                        </div>
                        <div id="cardUseMdPreview" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <article class="w4-card w4-card-md w4-card-base-100">
                                <div class="w4-card-body">
                                    <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Detalle de Destino Interactivo</h4>
                                    <p class="w4-text w4-text-sm w4-text-neutral">Card clicable para navegar a una vista detallada.</p>
                                    <a href="#" class="w4-button w4-button-primary w4-button-sm">Abrir Detalle</a>
                                </div>
                            </article>
                        </div>
                        <div id="cardUseMdCode" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">&lt;article class="w4-card w4-card-md w4-card-base-100"&gt;
  &lt;div class="w4-card-body"&gt;
    &lt;h4&gt;Detalle de Destino Interactivo&lt;/h4&gt;
    &lt;p&gt;Card clicable para navegar a una vista detallada.&lt;/p&gt;
    &lt;a href="#" class="w4-button w4-button-primary w4-button-sm"&gt;Abrir Detalle&lt;/a&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h5 w4-hdg-primary">Card LG con Formulario</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="cardUseLgPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="cardUseLgCode">Codigo HTML</button>
                        </div>
                        <div id="cardUseLgPreview" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <article class="w4-card w4-card-lg w4-card-base-100">
                                <div class="w4-card-body">
                                    <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Datos Personales</h4>
                                    <p class="w4-text w4-text-sm w4-text-neutral">Seccion de formulario estructurado.</p>
                                    <div class="w4-stack w4-stack-sm">
                                        <input type="text" class="w4-input w4-input-bordered" placeholder="Nombre completo">
                                        <input type="email" class="w4-input w4-input-bordered" placeholder="Correo electronico">
                                    </div>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-sm">
                                        <button class="w4-button w4-button-primary w4-button-sm">Guardar</button>
                                        <button class="w4-button w4-button-ghost w4-button-sm">Cancelar</button>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div id="cardUseLgCode" data-w4-tab-panel class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">&lt;article class="w4-card w4-card-lg w4-card-base-100"&gt;
  &lt;div class="w4-card-body"&gt;
    &lt;h4&gt;Datos Personales&lt;/h4&gt;
    &lt;input type="text" class="w4-input w4-input-bordered" placeholder="Nombre completo"&gt;
    &lt;input type="email" class="w4-input w4-input-bordered" placeholder="Correo electronico"&gt;
    &lt;button class="w4-button w4-button-primary w4-button-sm"&gt;Guardar&lt;/button&gt;
    &lt;button class="w4-button w4-button-ghost w4-button-sm"&gt;Cancelar&lt;/button&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">Demostracion de estados por clase y atributo
                <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="cardVisualStatePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="cardVisualStateCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="cardVisualStatePreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-2 w4-gap-md">
                                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                                    <h3 class="w4-heading w4-heading-h5 w4-heading-primary">Por Clase</h3>
                                    <div class="w4-grid w4-grid-2 w4-gap-md">
                                        <article class="w4-card">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Enabled</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral"><code>.w4-card</code></p>
                                            </div>
                                        </article>
                                        <article class="w4-card w4-card-active">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Active</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral">
                                                    <code>.w4-card-active</code>
                                                </p>
                                            </div>
                                        </article>
                                        <article class="w4-card w4-card-disabled">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Disabled</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral">
                                                    <code>.w4-card-disabled</code>
                                                </p>
                                            </div>
                                        </article>
                                        <article class="w4-card w4-card-collapsed">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Collapsed</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral">
                                                    <code>.w4-card-collapsed</code>
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <p class="w4-text w4-text-xs w4-text-neutral mt-2">
                                        <code>.w4-card-hidden</code> oculta completamente el elemento (no visible en
                                        preview).
                                    </p>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                                    <h3 class="w4-heading w4-heading-h5 w4-heading-primary">Por Atributo</h3>
                                    <div class="w4-grid w4-grid-2 w4-gap-md">
                                        <article class="w4-card" data-w4-state="enabled">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Enabled</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral">
                                                    <code>data-w4-state="enabled"</code>
                                                </p>
                                            </div>
                                        </article>
                                        <article class="w4-card" data-w4-state="active">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Active</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral">
                                                    <code>data-w4-state="active"</code>
                                                </p>
                                            </div>
                                        </article>
                                        <article class="w4-card" data-w4-state="disabled">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Disabled</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral">
                                                    <code>data-w4-state="disabled"</code>
                                                </p>
                                            </div>
                                        </article>
                                        <article class="w4-card" data-w4-state="collapsed">
                                            <div class="w4-card-body">
                                                <h4 class="w4-hdg w4-hdg-h6 w4-hdg-primary">Collapsed</h4>
                                                <p class="w4-text w4-text-xs w4-text-neutral">
                                                    <code>data-w4-state="collapsed"</code>
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <p class="w4-text w4-text-xs w4-text-neutral mt-2">
                                        <code>data-w4-state="hidden"</code> oculta completamente el elemento (no visible
                                        en preview).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="cardVisualStateCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;!-- Estados por clase --&gt;
&lt;article class="w4-card"&gt;...enabled...&lt;/article&gt;
&lt;article class="w4-card w4-card-active"&gt;...&lt;/article&gt;
&lt;article class="w4-card w4-card-disabled"&gt;...&lt;/article&gt;
&lt;article class="w4-card w4-card-collapsed"&gt;...&lt;/article&gt;
&lt;article class="w4-card w4-card-hidden"&gt;...&lt;/article&gt;

&lt;!-- Estados por atributo --&gt;
&lt;article class="w4-card" data-w4-state="enabled"&gt;...&lt;/article&gt;
&lt;article class="w4-card" data-w4-state="active"&gt;...&lt;/article&gt;
&lt;article class="w4-card" data-w4-state="disabled"&gt;...&lt;/article&gt;
&lt;article class="w4-card" data-w4-state="collapsed"&gt;...&lt;/article&gt;
&lt;article class="w4-card" data-w4-state="hidden"&gt;...&lt;/article&gt;</code></pre>
                        </div>
                        </article>
                    </div>
                </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Nativos Javascript Soportados al Componente
                Card</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-card-state</code> y <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">Playground: aplica estados JS al Card de prueba.</p>
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="cardJsStatePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="cardJsStateCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="cardJsStatePreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-md">
                                <article id="labCardTarget" class="w4-card w4-card-base-100" data-w4-component="card">
                                    <div class="w4-card-body">
                                        <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Card de Prueba</h3>
                                        <p class="w4-text w4-text-neutral">Usa los botones para cambiar el estado.</p>
                                        <button class="w4-button w4-button-primary w4-button-sm">Accion Interna</button>
                                    </div>
                                </article>
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button type="button" class="w4-button w4-button-sm w4-button-ghost"
                                        data-w4-card-state="enabled" data-w4-target="labCardTarget">State Clear</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-info"
                                        data-w4-card-state="active" data-w4-target="labCardTarget">Active</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                        data-w4-card-state="disabled" data-w4-target="labCardTarget">Disabled</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-error"
                                        data-w4-card-state="hidden" data-w4-target="labCardTarget">Hidden</button>
                                    <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                        data-w4-card-state="collapsed" data-w4-target="labCardTarget">Collapsed</button>
                                </div>
                                <p class="w4-text w4-text-sm w4-text-neutral">
                                    Los controles usan la API declarativa del componente:
                                    <code>data-w4-card-state</code>.
                                </p>
                            </div>
                        </div>
                        <div id="cardJsStateCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;article id="labCardTarget" class="w4-card w4-card-base-100" data-w4-component="card"&gt;
  &lt;div class="w4-card-body"&gt;...&lt;/div&gt;
&lt;/article&gt;

&lt;button data-w4-card-state="enabled" data-w4-target="labCardTarget"&gt;State Clear&lt;/button&gt;
&lt;button data-w4-card-state="active" data-w4-target="labCardTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-card-state="disabled" data-w4-target="labCardTarget"&gt;Disabled&lt;/button&gt;
&lt;button data-w4-card-state="hidden" data-w4-target="labCardTarget"&gt;Hidden&lt;/button&gt;
&lt;button data-w4-card-state="collapsed" data-w4-target="labCardTarget"&gt;Collapsed&lt;/button&gt;</code></pre>
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
