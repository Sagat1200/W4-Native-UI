<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Icon Lab</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Carga de FontAwesome para el testeo visual de íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Icon</h1>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Icon:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Icon</strong> permite renderizar iconografía con colores, tamaños y estados
                consistentes usando tokens de W4 Native UI.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Soporte visual:</strong> Acompañar acciones en botones y enlaces.
                </li>
                <li><strong class="w4-text-active">Feedback:</strong> Comunicar estados como éxito, advertencia o error.
                </li>
                <li><strong class="w4-text-active">Carga:</strong> Mostrar actividad con <code>w4-icon-spin</code>.</li>
                <li><strong class="w4-text-active">Navegación:</strong> Dar contexto visual en menús y barras.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes Semánticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Colores de íconos alineados al sistema de tokens.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconSemanticPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconSemanticCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="iconSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-neutral" aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-primary" aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-secondary"
                                    aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-accent" aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-info" aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-success" aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-warning" aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-error" aria-hidden="true"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-muted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div id="iconSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-neutral"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-secondary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-accent"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-info"&gt;&lt;/i&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños y Jerarquía</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas de tamaño aplicadas al mismo ícono.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconSizePreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconSizeCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="iconSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                                <i class="fa-solid fa-star w4-icon w4-icon-xs w4-icon-primary" aria-hidden="true"></i>
                                <i class="fa-solid fa-star w4-icon w4-icon-sm w4-icon-primary" aria-hidden="true"></i>
                                <i class="fa-solid fa-star w4-icon w4-icon-md w4-icon-primary" aria-hidden="true"></i>
                                <i class="fa-solid fa-star w4-icon w4-icon-lg w4-icon-primary" aria-hidden="true"></i>
                                <i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-primary" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div id="iconSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;i class="fa-solid fa-star w4-icon w4-icon-xs w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-star w4-icon w4-icon-sm w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-star w4-icon w4-icon-md w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-star w4-icon w4-icon-lg w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-primary"&gt;&lt;/i&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Alineación</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos de íconos en inicio, centro y final dentro de un contenedor.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconAlignPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconAlignCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="iconAlignPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-between w4-item-center">
                                <i class="fa-solid fa-arrow-left w4-icon w4-icon-lg w4-icon-secondary"
                                    aria-hidden="true"></i>
                                <i class="fa-solid fa-compass w4-icon w4-icon-lg w4-icon-primary"
                                    aria-hidden="true"></i>
                                <i class="fa-solid fa-arrow-right w4-icon w4-icon-lg w4-icon-accent"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        <div id="iconAlignCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;i class="fa-solid fa-arrow-left w4-icon w4-icon-lg w4-icon-secondary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-compass w4-icon w4-icon-lg w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-arrow-right w4-icon w4-icon-lg w4-icon-accent"&gt;&lt;/i&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Demostración de <code>w4-icon-xs</code>, <code>w4-icon-sm</code>, <code>w4-icon-md</code>,
                <code>w4-icon-lg</code> y <code>w4-icon-xl</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconScalePreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconScaleCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="iconScalePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <i class="fa-solid fa-circle w4-icon w4-icon-xs w4-icon-primary" title="w4-icon-xs"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-sm w4-icon-primary" title="w4-icon-sm"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-md w4-icon-primary" title="w4-icon-md"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-primary" title="w4-icon-lg"></i>
                                <i class="fa-solid fa-circle w4-icon w4-icon-xl w4-icon-primary" title="w4-icon-xl"></i>
                            </div>
                        </div>
                        <div id="iconScaleCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;i class="fa-solid fa-circle w4-icon w4-icon-xs w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-sm w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-md w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-lg w4-icon-primary"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-circle w4-icon w4-icon-xl w4-icon-primary"&gt;&lt;/i&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Ejemplos de Uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Casos prácticos de íconos para soporte visual, feedback, carga y navegación.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconUsePreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconUseCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="iconUsePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-2 w4-grid-sm">
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Soporte visual</span>
                                    <button type="button" class="w4-btn w4-btn-primary w4-btn-sm">
                                        <i class="fa-solid fa-floppy-disk w4-icon w4-icon-sm" aria-hidden="true"></i>
                                        <span>Guardar cambios</span>
                                    </button>
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Feedback</span>
                                    <div class="w4-alert w4-alert-success w4-alert-sm">
                                        <i class="fa-solid fa-circle-check w4-icon w4-icon-sm" aria-hidden="true"></i>
                                        <span>Perfil actualizado correctamente.</span>
                                    </div>
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Carga</span>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-item-center">
                                        <i class="fa-solid fa-rotate w4-icon w4-icon-md w4-icon-info w4-icon-spin"
                                            aria-hidden="true"></i>
                                        <span class="w4-text w4-text-sm">Sincronizando datos...</span>
                                    </div>
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Navegación</span>
                                    <ul class="w4-menu w4-menu-base-100 w4-menu-sm">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-house w4-icon w4-icon-sm w4-icon-primary"
                                                    aria-hidden="true"></i>
                                                <span>Inicio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-gear w4-icon w4-icon-sm w4-icon-secondary"
                                                    aria-hidden="true"></i>
                                                <span>Configuración</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="iconUseCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">&lt;!-- Soporte visual --&gt;
&lt;button class=&quot;w4-button w4-button-primary w4-button-sm&quot;&gt;
  &lt;i class=&quot;fa-solid fa-floppy-disk w4-icon w4-icon-sm&quot;&gt;&lt;/i&gt;
  &lt;span&gt;Guardar cambios&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Feedback --&gt;
&lt;div class=&quot;w4-alert w4-alert-success w4-alert-sm&quot;&gt;
  &lt;i class=&quot;fa-solid fa-circle-check w4-icon w4-icon-sm&quot;&gt;&lt;/i&gt;
  &lt;span&gt;Perfil actualizado correctamente.&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Carga --&gt;
&lt;i class=&quot;fa-solid fa-rotate w4-icon w4-icon-md w4-icon-info w4-icon-spin&quot;&gt;&lt;/i&gt;

&lt;!-- Navegación --&gt;
&lt;a href=&quot;#&quot;&gt;
  &lt;i class=&quot;fa-solid fa-house w4-icon w4-icon-sm w4-icon-primary&quot;&gt;&lt;/i&gt;
  &lt;span&gt;Inicio&lt;/span&gt;
&lt;/a&gt;</code></pre>
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
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="iconClassPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="iconClassCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="iconClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <i class="fa-solid fa-heart w4-icon w4-icon-xl w4-icon-primary w4-icon-active"
                                        aria-hidden="true"></i>
                                    <i class="fa-solid fa-heart w4-icon w4-icon-xl w4-icon-secondary w4-icon-disabled"
                                        aria-hidden="true"></i>
                                    <i class="fa-solid fa-gear w4-icon w4-icon-xl w4-icon-info w4-icon-loading"
                                        aria-hidden="true"></i>
                                    <i class="fa-solid fa-rotate w4-icon w4-icon-xl w4-icon-warning w4-icon-spin"
                                        aria-hidden="true"></i>
                                </div>
                            </div>
                            <div id="iconClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;i class="fa-solid fa-heart w4-icon w4-icon-xl w4-icon-primary w4-icon-active"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-heart w4-icon w4-icon-xl w4-icon-secondary w4-icon-disabled"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-gear w4-icon w4-icon-xl w4-icon-info w4-icon-loading"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-rotate w4-icon w4-icon-xl w4-icon-warning w4-icon-spin"&gt;&lt;/i&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="iconAttrPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="iconAttrCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="iconAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-primary"
                                        data-w4-state="active" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-warning"
                                        data-w4-state="disabled" aria-hidden="true"></i>
                                    <i class="fa-solid fa-gear w4-icon w4-icon-xl w4-icon-info" data-w4-state="loading"
                                        aria-hidden="true"></i>
                                    <i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-error" data-w4-state="hidden"
                                        aria-hidden="true"></i>
                                </div>
                            </div>
                            <div id="iconAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-primary" data-w4-state="active"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-warning" data-w4-state="disabled"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-gear w4-icon w4-icon-xl w4-icon-info" data-w4-state="loading"&gt;&lt;/i&gt;
&lt;i class="fa-solid fa-star w4-icon w4-icon-xl w4-icon-error" data-w4-state="hidden"&gt;&lt;/i&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Nativos Javascript Soportados al Componente
                Icon</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Prueba de cambios de estado del componente con <code>data-w4-icon-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en el icon de prueba.
                </p>
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="iconJsPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="iconJsCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="iconJsPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-center w4-stack-sm">
                                <i id="labIconTarget" class="fa-solid fa-gear w4-icon w4-icon-xl w4-icon-info mb-6"
                                    aria-hidden="true"></i>
                            </div>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-icon-state="enabled" data-w4-target="labIconTarget">Enabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-icon-state="active" data-w4-target="labIconTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-info" data-w4-icon-state="loading"
                                    data-w4-target="labIconTarget">Loading</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-icon-state="disabled" data-w4-target="labIconTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-icon-state="hidden"
                                    data-w4-target="labIconTarget">Hidden</button>
                            </div>
                        </div>
                        <div id="iconJsCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;i id="labIconTarget" class="fa-solid fa-gear w4-icon w4-icon-xl w4-icon-primary"&gt;&lt;/i&gt;
&lt;button data-w4-icon-state="enabled" data-w4-target="labIconTarget"&gt;Clear&lt;/button&gt;
&lt;button data-w4-icon-state="enabled" data-w4-target="labIconTarget"&gt;Enabled&lt;/button&gt;
&lt;button data-w4-icon-state="active" data-w4-target="labIconTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-icon-state="loading" data-w4-target="labIconTarget"&gt;Loading&lt;/button&gt;
&lt;button data-w4-icon-state="disabled" data-w4-target="labIconTarget"&gt;Disabled&lt;/button&gt;
&lt;button data-w4-icon-state="hidden" data-w4-target="labIconTarget"&gt;Hidden&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica al icono de prueba y refleja los hooks visuales del componente.
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
        });
    </script>
</body>

</html>