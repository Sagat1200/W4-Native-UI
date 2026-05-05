<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Skeleton Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Skeleton</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Skeleton:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Skeleton</strong> proporciona una representación visual anticipada (placeholder)
                de la interfaz
                mientras los datos subyacentes se están cargando. Esto mejora drásticamente el rendimiento percibido por
                el usuario en comparación con un spinner tradicional.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Carga de Tarjetas (Cards):</strong> Combinar formas de círculo
                    (avatar) y texto para imitar el perfil de un usuario antes de que la API responda.</li>
                <li><strong class="w4-text-active">DataGrids / Tablas:</strong> Renderizar filas de Skeletons para
                    mantener la estructura de la tabla estática mientras se realiza el fetching.</li>
                <li><strong class="w4-text-active">Imágenes de héroe:</strong> Usar la variante de bloque sin radio
                    (Square) para reservar el espacio de imágenes pesadas y evitar Layout Shifts (CLS).</li>
                <li><strong class="w4-text-active">Transiciones suaves:</strong> Utilizar el estado JS para desaparecer
                    el skeleton e intercambiarlo por el contenido real mediante opacidad.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes de Color</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos de variantes semánticas para personalizar el shimmer del skeleton.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="skeletonVariantPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="skeletonVariantCode">Codigo HTML</button>
                    </div>
                </div>

                <div id="skeletonVariantPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Default</p>
                            <div class="w4-skeleton w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Primary</p>
                            <div class="w4-skeleton w4-skeleton-primary w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Secondary</p>
                            <div class="w4-skeleton w4-skeleton-secondary w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Accent</p>
                            <div class="w4-skeleton w4-skeleton-accent w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Info</p>
                            <div class="w4-skeleton w4-skeleton-info w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Success</p>
                            <div class="w4-skeleton w4-skeleton-success w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Warning</p>
                            <div class="w4-skeleton w4-skeleton-warning w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">Error</p>
                            <div class="w4-skeleton w4-skeleton-error w4-skeleton-loading w4-skeleton-lg"></div>
                        </div>
                    </div>
                </div>

                <div id="skeletonVariantCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;div class=&quot;w4-skeleton w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-primary w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-secondary w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-accent w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-info w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-success w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-warning w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-error w4-skeleton-loading&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Formas de Skeleton</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de morfologia para texto, avatar y bloques de contenido.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="skeletonShapePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="skeletonShapeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="skeletonShapePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-2 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <div class="w4-skeleton w4-skeleton-title w4-skeleton-loading"></div>
                            <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                            <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-horizontal w4-stack-sm">
                            <div class="w4-skeleton w4-skeleton-circle w4-skeleton-loading h-12 w-12"></div>
                            <div class="w4-stack w4-stack-sm w4-stack-vertical ml-4 w-full">
                                <div class="w4-skeleton w4-skeleton-title w4-skeleton-loading"></div>
                                <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                                <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                            </div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <div class="w4-skeleton w4-skeleton-square w4-skeleton-loading w4-skeleton-xl"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <div class="w4-skeleton w4-skeleton-loading w4-skeleton-xl"></div>
                        </div>
                    </div>
                </div>
                <div id="skeletonShapeCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;div class=&quot;w4-skeleton w4-skeleton-title w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-text w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-circle w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-square w4-skeleton-loading&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas de tamaño soportadas por el componente.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="skeletonSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="skeletonSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="skeletonSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">XS</p>
                            <div class="w4-skeleton w4-skeleton-xs w4-skeleton-loading"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">SM</p>
                            <div class="w4-skeleton w4-skeleton-sm w4-skeleton-loading"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">MD</p>
                            <div class="w4-skeleton w4-skeleton-md w4-skeleton-loading"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">LG</p>
                            <div class="w4-skeleton w4-skeleton-lg w4-skeleton-loading"></div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                            <p class="w4-text w4-text-sm w4-text-neutral">XL</p>
                            <div class="w4-skeleton w4-skeleton-xl w4-skeleton-loading"></div>
                        </div>
                    </div>
                </div>
                <div id="skeletonSizeCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;div class=&quot;w4-skeleton w4-skeleton-xs w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-sm w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-md w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-lg w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-xl w4-skeleton-loading&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
            </div>
        </section>

        {{-- <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Ejemplos Reales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Integración con API JS: reemplazo de skeleton y ocultado masivo en contenedores.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">replace(skeleton, content)</h3>
                    <div id="replaceSkeletonContainer" class="w4-panel w4-panel-base-200 w4-panel-sm">
                        <div id="replaceSkeletonTarget" class="w4-skeleton w4-skeleton-loading"></div>
                    </div>
                    <button id="btnReplaceSkeleton" type="button" class="w4-btn w4-btn-sm w4-btn-primary">
                        Simular carga completada
                    </button>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">hideAllIn(container)</h3>
                    <div id="listSkeletonContainer" class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-sm">
                        <div class="w4-skeleton w4-skeleton-title w4-skeleton-loading"></div>
                        <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                        <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading">
                        </div>
                    </div>
                    <button id="btnHideSkeletons" type="button" class="w4-btn w4-btn-sm w4-btn-secondary">
                        Ocultar skeletons del bloque
                    </button>
                </div>
            </div>
        </section> --}}

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                        data-w4-target="skeletonStateClassPreview">Por Clase</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="skeletonStateAttrPreview">Por Atributo</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-accent"
                        data-w4-target="skeletonStateCode">Codigo HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="skeletonStateClassPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-skeleton w4-skeleton-md w4-skeleton-loading"></div>
                            <div class="w4-skeleton w4-skeleton-md w4-skeleton-active"></div>
                            <div class="w4-skeleton w4-skeleton-md w4-skeleton-disabled"></div>
                            <p class="w4-text w4-text-sm w4-text-neutral">
                                <code>hidden</code> oculta el skeleton; <code>loading</code> activa la animación
                                shimmer.
                            </p>
                        </div>
                    </div>
                    <div id="skeletonStateAttrPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm" hidden
                        aria-hidden="true">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-skeleton w4-skeleton-md" data-w4-state="loading"></div>
                            <div class="w4-skeleton w4-skeleton-md" data-w4-state="active"></div>
                            <div class="w4-skeleton w4-skeleton-md" data-w4-state="disabled"></div>
                        </div>
                    </div>
                    <div id="skeletonStateCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre class="m-0"><code class="w4-text w4-text-xs">&lt;!-- Por clase --&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-disabled&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton w4-skeleton-hidden&quot;&gt;&lt;/div&gt;

&lt;!-- Por atributo --&gt;
&lt;div class=&quot;w4-skeleton&quot; data-w4-state=&quot;loading&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton&quot; data-w4-state=&quot;active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton&quot; data-w4-state=&quot;disabled&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w4-skeleton&quot; data-w4-state=&quot;hidden&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Playground JS</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles declarativos para probar estados del componente con <code>data-w4-skeleton-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en el Skeleton de prueba.
                </p>
                <div id="labSkeletonTarget" class="w4-skeleton w4-skeleton-md w4-skeleton-loading"></div>
                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                    <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral" data-w4-skeleton-state="enabled"
                        data-w4-target="labSkeletonTarget">Clear</button>
                    <button type="button" class="w4-btn w4-btn-sm w4-btn-primary" data-w4-skeleton-state="loading"
                        data-w4-target="labSkeletonTarget">Loading</button>
                    <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary" data-w4-skeleton-state="active"
                        data-w4-target="labSkeletonTarget">Active</button>
                    <button type="button" class="w4-btn w4-btn-sm w4-btn-warning" data-w4-skeleton-state="disabled"
                        data-w4-target="labSkeletonTarget">Disabled</button>
                    <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-skeleton-state="hidden"
                        data-w4-target="labSkeletonTarget">Hidden</button>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica a la Alerta de prueba y refleja los hooks visuales del componente.
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

            var skeletonApi =
                (window.W4NativeUI && window.W4NativeUI.Skeleton) ||
                (window.W4 && window.W4.Skeleton);

            var replaceButton = document.getElementById("btnReplaceSkeleton");
            var hideAllButton = document.getElementById("btnHideSkeletons");

            if (replaceButton) {
                replaceButton.addEventListener("click", function () {
                    var target = document.getElementById("replaceSkeletonTarget");
                    if (!target) return;

                    var content = document.createElement("div");
                    content.className = "w4-alert w4-alert-success w4-alert-solid w4-alert-sm";
                    content.innerHTML = "<span>Contenido real cargado correctamente.</span>";

                    if (skeletonApi && typeof skeletonApi.replace === "function") {
                        skeletonApi.replace(target, content);
                    } else {
                        target.replaceWith(content);
                    }
                });
            }

            if (hideAllButton) {
                hideAllButton.addEventListener("click", function () {
                    var container = document.getElementById("listSkeletonContainer");
                    if (!container) return;

                    if (skeletonApi && typeof skeletonApi.hideAllIn === "function") {
                        skeletonApi.hideAllIn(container);
                    } else {
                        var skeletons = container.querySelectorAll(".w4-skeleton");
                        skeletons.forEach(function (el) {
                            el.style.display = "none";
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>