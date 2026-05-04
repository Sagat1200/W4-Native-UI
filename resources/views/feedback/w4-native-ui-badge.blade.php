<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Badge Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Badge</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Badge:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Badge</strong> es un pequeño indicador visual utilizado para resaltar metadatos,
                contadores,
                etiquetas de estado o atributos clave. Es altamente flexible y está diseñado para ser anidado dentro de
                otros componentes más grandes como botones, tarjetas o elementos de navegación.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Contadores de notificaciones:</strong> Mostrar el número de mensajes
                    sin leer (ej. "+99") anidado en un icono de campana o avatar.</li>
                <li><strong class="w4-text-active">Etiquetas de estado:</strong> Indicar el ciclo de vida de un registro
                    en una tabla (ej. "Pendiente" en Warning, "Completado" en Success).</li>
                <li><strong class="w4-text-active">Categorizacion:</strong> Listar tags o categorías de un artículo
                    usando la variante Outline o Soft para no sobrecargar la vista.</li>
                <li><strong class="w4-text-active">Lamadas de atencion:</strong> Usar la variante
                    <code>w4-badge-highlighted</code> (animación de pulso) para atraer la mirada a una nueva
                    funcionalidad (ej. etiqueta "Nuevo").
                </li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Badges con colores del sistema semántico.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="badgeSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="badgeSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="badgeSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <span class="w4-badge w4-badge-neutral">Neutral</span>
                        <span class="w4-badge w4-badge-primary">Primary</span>
                        <span class="w4-badge w4-badge-secondary">Secondary</span>
                        <span class="w4-badge w4-badge-accent">Accent</span>
                        <span class="w4-badge w4-badge-info">Info</span>
                        <span class="w4-badge w4-badge-success">Success</span>
                        <span class="w4-badge w4-badge-warning">Warning</span>
                        <span class="w4-badge w4-badge-error">Error</span>
                    </div>
                </div>
                <div id="badgeSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
        &lt;span class=&quot;w4-badge w4-badge-neutral&quot;&gt;Neutral&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary&quot;&gt;Primary&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-secondary&quot;&gt;Secondary&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-accent&quot;&gt;Accent&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-info&quot;&gt;Info&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-success&quot;&gt;Success&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-warning&quot;&gt;Warning&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-error&quot;&gt;Error&lt;/span&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Outline Y Soft</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Badges para superficies discretas y etiquetas secundarias.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="badgeSurfacePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="badgeSurfaceCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="badgeSurfacePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Outline</h3>
                        <div class="w4-grid w4-grid-4 w4-grid-sm">
                            <span class="w4-badge w4-badge-outline w4-badge-neutral">Neutral</span>
                            <span class="w4-badge w4-badge-outline w4-badge-primary">Primary</span>
                            <span class="w4-badge w4-badge-outline w4-badge-secondary">Secondary</span>
                            <span class="w4-badge w4-badge-outline w4-badge-accent">Accent</span>
                            <span class="w4-badge w4-badge-outline w4-badge-info">Info</span>
                            <span class="w4-badge w4-badge-outline w4-badge-success">Success</span>
                            <span class="w4-badge w4-badge-outline w4-badge-warning">Warning</span>
                            <span class="w4-badge w4-badge-outline w4-badge-error">Error</span>
                        </div>
                        <h3 class="w4-heading w4-heading-h4 w4-heading-secondary">Soft</h3>
                        <div class="w4-grid w4-grid-4 w4-grid-sm">
                            <span class="w4-badge w4-badge-soft w4-badge-neutral">Neutral</span>
                            <span class="w4-badge w4-badge-soft w4-badge-primary">Primary</span>
                            <span class="w4-badge w4-badge-soft w4-badge-secondary">Secondary</span>
                            <span class="w4-badge w4-badge-soft w4-badge-accent">Accent</span>
                            <span class="w4-badge w4-badge-soft w4-badge-info">Info</span>
                            <span class="w4-badge w4-badge-soft w4-badge-success">Success</span>
                            <span class="w4-badge w4-badge-soft w4-badge-warning">Warning</span>
                            <span class="w4-badge w4-badge-soft w4-badge-error">Error</span>
                        </div>
                    </div>
                </div>
                <div id="badgeSurfaceCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">

        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-neutral&quot;&gt;Neutral&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-primary&quot;&gt;Primary&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-secondary&quot;&gt;Secondary&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-accent&quot;&gt;Accent&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-info&quot;&gt;Info&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-success&quot;&gt;Success&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-warning&quot;&gt;Warning&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-error&quot;&gt;Error&lt;/span&gt;
        
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-neutral&quot;&gt;Neutral&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-primary&quot;&gt;Primary&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-secondary&quot;&gt;Secondary&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-accent&quot;&gt;Accent&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-info&quot;&gt;Info&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-success&quot;&gt;Success&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-warning&quot;&gt;Warning&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-error&quot;&gt;Error&lt;/span&gt;
    </code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas de tamaño disponibles para badge.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="badgeSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="badgeSizeCode">Codigo
                            HTML</button>
                    </div>
                </div>
                <div id="badgeSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                        <span class="w4-badge w4-badge-primary w4-badge-xs">XS</span>
                        <span class="w4-badge w4-badge-primary w4-badge-sm">SM</span>
                        <span class="w4-badge w4-badge-primary w4-badge-md">MD</span>
                        <span class="w4-badge w4-badge-primary w4-badge-lg">LG</span>
                        <span class="w4-badge w4-badge-primary w4-badge-xl">XL</span>
                    </div>
                </div>
                <div id="badgeSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
        &lt;span class=&quot;w4-badge w4-badge-primary w4-badge-xs&quot;&gt;XS&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary w4-badge-sm&quot;&gt;SM&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary w4-badge-md&quot;&gt;MD&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary w4-badge-lg&quot;&gt;LG&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary w4-badge-xl&quot;&gt;XL&lt;/span&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Ejemplos de Uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Casos prácticos basados en notificaciones, estado, categorización y llamadas de atención.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="badgeUsePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="badgeUseCode">Codigo
                            HTML</button>
                    </div>
                </div>
                <div id="badgeUsePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-2 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Contadores de notificaciones</span>
                            <button type="button" class="w4-button w4-button-ghost w4-button-sm">
                                <i class="fa-solid fa-bell"></i>
                                <span>Notificaciones</span>
                                <span class="w4-badge w4-badge-error w4-badge-sm">+99</span>
                            </button>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Etiquetas de estado</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-xs">
                                <span class="w4-badge w4-badge-warning">Pendiente</span>
                                <span class="w4-badge w4-badge-success">Completado</span>
                            </div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Categorizacion</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-xs">
                                <span class="w4-badge w4-badge-outline w4-badge-info">API</span>
                                <span class="w4-badge w4-badge-soft w4-badge-secondary">Laravel</span>
                                <span class="w4-badge w4-badge-soft w4-badge-accent">UI</span>
                            </div>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                            <span class="w4-text w4-text-sm w4-text-muted">Llamadas de atencion</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-xs">
                                <span class="w4-badge w4-badge-primary w4-badge-highlighted">Nuevo</span>
                                <span class="w4-badge w4-badge-info">Beta</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="badgeUseCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;!-- Contador --&gt;
        &lt;button class=&quot;w4-button w4-button-ghost w4-button-sm&quot;&gt;
          &lt;i class=&quot;fa-solid fa-bell&quot;&gt;&lt;/i&gt;
          &lt;span&gt;Notificaciones&lt;/span&gt;
          &lt;span class=&quot;w4-badge w4-badge-error w4-badge-sm&quot;&gt;+99&lt;/span&gt;
        &lt;/button&gt;
        
        &lt;!-- Estado --&gt;
        &lt;span class=&quot;w4-badge w4-badge-warning&quot;&gt;Pendiente&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-success&quot;&gt;Completado&lt;/span&gt;
        
        &lt;!-- Categorización --&gt;
        &lt;span class=&quot;w4-badge w4-badge-outline w4-badge-info&quot;&gt;API&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-secondary&quot;&gt;Laravel&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-soft w4-badge-accent&quot;&gt;UI&lt;/span&gt;
        
        &lt;!-- Llamada de atención --&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary w4-badge-highlighted&quot;&gt;Nuevo&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-info&quot;&gt;Beta&lt;/span&gt;</code></pre>
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
                        data-w4-target="badgeStateClassPreview">Por Clase</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="badgeStateAttrPreview">Por Atributo</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-accent"
                        data-w4-target="badgeStateCode">Codigo
                        HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="badgeStateClassPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-item-center">
                            <span class="w4-badge w4-badge-primary w4-badge-active">Active</span>
                            <span class="w4-badge w4-badge-warning w4-badge-disabled">Disabled</span>
                            <span class="w4-badge w4-badge-info w4-badge-highlighted">Highlighted</span>
                        </div>
                        <p class="w4-text w4-text-sm w4-text-neutral">
                            El estado <code>hidden</code> oculta completamente el badge.
                        </p>
                    </div>
                    <div id="badgeStateAttrPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm" hidden
                        aria-hidden="true">
                        <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-item-center">
                            <span class="w4-badge w4-badge-primary" data-w4-state="active">data-w4-state="active"</span>
                            <span class="w4-badge w4-badge-warning"
                                data-w4-state="disabled">data-w4-state="disabled"</span>
                            <span class="w4-badge w4-badge-info"
                                data-w4-state="highlighted">data-w4-state="highlighted"</span>
                        </div>
                        <p class="w4-text w4-text-sm w4-text-neutral">
                            Usa <code>data-w4-state="hidden"</code> para ocultar.
                        </p>
                    </div>
                    <div id="badgeStateCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre
                            class="m-0"><code class="w4-text w4-text-xs">&lt;!-- Por clase --&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary w4-badge-active&quot;&gt;Active&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-warning w4-badge-disabled&quot;&gt;Disabled&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-info w4-badge-highlighted&quot;&gt;Highlighted&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-error w4-badge-hidden&quot;&gt;Hidden&lt;/span&gt;
        
        &lt;!-- Por atributo --&gt;
        &lt;span class=&quot;w4-badge w4-badge-primary&quot; data-w4-state=&quot;active&quot;&gt;...&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-warning&quot; data-w4-state=&quot;disabled&quot;&gt;...&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-info&quot; data-w4-state=&quot;highlighted&quot;&gt;...&lt;/span&gt;
        &lt;span class=&quot;w4-badge w4-badge-error&quot; data-w4-state=&quot;hidden&quot;&gt;...&lt;/span&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Nativos Javascript Soportados al Componente
                Badge</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones del componente usando <code>data-w4-badge-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en el Badge de prueba.
                </p>
                <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                        data-w4-target="badgeJsPreview">Vista Previa</button>
                    <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                        data-w4-target="badgeJsCode">Codigo
                        HTML</button>
                </div>
                <div class="w4-tab-lifted-content-panels">
                    <div id="badgeJsPreview" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                        <div class="w4-stack w4-stack-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-item-center">
                                <span>Estado actual:</span>
                                <span id="labBadgeTarget" class="w4-badge w4-badge-primary w4-badge-md">Activo</span>
                            </div>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-badge-state="enabled" data-w4-target="labBadgeTarget">Clear</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-badge-state="active" data-w4-target="labBadgeTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-info"
                                    data-w4-badge-state="highlighted"
                                    data-w4-target="labBadgeTarget">Highlighted</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-badge-state="disabled" data-w4-target="labBadgeTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-badge-state="hidden"
                                    data-w4-target="labBadgeTarget">Hidden</button>
                            </div>
                        </div>
                    </div>
                    <div id="badgeJsCode" data-w4-tab-panel
                        class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                        aria-hidden="true">
                        <pre
                            class="m-0"><code class="w4-text w4-text-xs">&lt;span id=&quot;labBadgeTarget&quot; class=&quot;w4-badge w4-badge-primary&quot;&gt;Activo&lt;/span&gt;
        &lt;button data-w4-badge-state=&quot;active&quot; data-w4-target=&quot;labBadgeTarget&quot;&gt;Active&lt;/button&gt;
        &lt;button data-w4-badge-state=&quot;highlighted&quot; data-w4-target=&quot;labBadgeTarget&quot;&gt;Highlighted&lt;/button&gt;
        &lt;button data-w4-badge-state=&quot;disabled&quot; data-w4-target=&quot;labBadgeTarget&quot;&gt;Disabled&lt;/button&gt;
        &lt;button data-w4-badge-state=&quot;hidden&quot; data-w4-target=&quot;labBadgeTarget&quot;&gt;Hidden&lt;/button&gt;</code></pre>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica al Badge de prueba y refleja los hooks visuales del componente.
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