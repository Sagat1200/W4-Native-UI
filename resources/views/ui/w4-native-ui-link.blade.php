<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Link Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Link</h1>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Link:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Link</strong> se encarga de estilizar hipervínculos (etiquetas
                <code>&lt;a&gt;</code>) de manera
                consistente. Soporta variantes de color para indicar la naturaleza del enlace, hereda automáticamente el
                tamaño de la tipografía donde se encuentre insertado y cuenta con estados accesibles (focus ring)
                integrados.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Navegación textual:</strong> enlaces dentro de contenido.</li>
                <li><strong class="w4-text-active">Acciones secundarias:</strong> recuperar contraseña, ayuda, soporte.
                </li>
                <li><strong class="w4-text-active">Breadcrumbs:</strong> rutas de navegación estructural.</li>
                <li><strong class="w4-text-active">Legal:</strong> términos, privacidad y políticas.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes Semánticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Colores semánticos para enlaces.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="linkSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="linkSemanticCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="linkSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm">
                            <div class="w4-grid w4-grid-4 w4-grid-bordered-primary">
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-neutral">Neutral</div>
                                    <a href="" class="w4-link w4-link-neutral">Link Neutral</a>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-primary">Primary</div>
                                    <a href="" class="w4-link w4-link-primary">Link Primary</a>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-secondary">Secondary</div>
                                    <a href="" class="w4-link w4-link-secondary">Link Secondary</a>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-accent">Accent</div>
                                    <a href="" class="w4-link w4-link-accent">Link Accent</a>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-info">Info</div>
                                    <a href="" class="w4-link w4-link-info">Link Info</a>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-success">Success</div>
                                    <a href="" class="w4-link w4-link-success">Link Success</a>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-warning">Warning</div>
                                    <a href="" class="w4-link w4-link-warning">Link Warning</a>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <div class="w4-text w4-text-xs w4-text-error">Error</div>
                                    <a href="" class="w4-link w4-link-error">Link Error</a>
                                </div>
                            </div>
                        </div>
                        <div id="linkSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;a class="w4-link w4-link-neutral" href="#"&gt;Link Neutral&lt;/a&gt;
&lt;a class="w4-link w4-link-primary" href="#"&gt;Link Primary&lt;/a&gt;
&lt;a class="w4-link w4-link-secondary" href="#"&gt;Link Secondary&lt;/a&gt;
&lt;a class="w4-link w4-link-accent" href="#"&gt;Link Accent&lt;/a&gt;
&lt;a class="w4-link w4-link-info" href="#"&gt;Link Info&lt;/a&gt;
&lt;a class="w4-link w4-link-success" href="#"&gt;Link Success&lt;/a&gt;
&lt;a class="w4-link w4-link-warning" href="#"&gt;Link Warning&lt;/a&gt;
&lt;a class="w4-link w4-link-error" href="#"&gt;Link Error&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas tipográficas para links.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="linkSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="linkSizeCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="linkSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center">
                                <a href="" class="w4-link w4-link-primary w4-link-xs">Link XS</a>
                                <a href="" class="w4-link w4-link-primary w4-link-sm">Link SM</a>
                                <a href="" class="w4-link w4-link-primary w4-link-md">Link MD</a>
                                <a href="" class="w4-link w4-link-primary w4-link-lg">Link LG</a>
                                <a href="" class="w4-link w4-link-primary w4-link-xl">Link XL</a>
                            </div>
                        </div>
                        <div id="linkSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;a class="w4-link w4-link-primary w4-link-xs" href="#"&gt;Link XS&lt;/a&gt;
&lt;a class="w4-link w4-link-primary w4-link-sm" href="#"&gt;Link SM&lt;/a&gt;
&lt;a class="w4-link w4-link-primary w4-link-md" href="#"&gt;Link MD&lt;/a&gt;
&lt;a class="w4-link w4-link-primary w4-link-lg" href="#"&gt;Link LG&lt;/a&gt;
&lt;a class="w4-link w4-link-primary w4-link-xl" href="#"&gt;Link XL&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Ejemplos Basicos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Casos rapidos de uso para navegacion textual, acciones secundarias, breadcrumbs y links legales.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="linkBasicPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="linkBasicCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="linkBasicPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-vertical w4-stack-sm">
                                <p class="w4-text w4-text-base">
                                    Lee nuestra
                                    <a href="" class="w4-link w4-link-primary">documentacion de implementacion</a>
                                    para conocer mas detalles.
                                </p>
                                <p class="w4-text w4-text-base">
                                    <a href="" class="w4-link w4-link-primary w4-link-sm">Olvide mi contrasena</a>
                                </p>
                                <nav class="w4-breadcrumb w4-breadcrumb-size-sm w4-breadcrumb-primary">
                                    <ul>
                                        <li><a href="" class="w4-link w4-link-neutral">Inicio</a></li>
                                        <li><a href="" class="w4-link w4-link-neutral">Cuenta</a></li>
                                        <li><a href="" class="w4-link w4-link-primary w4-link-active">Seguridad</a></li>
                                    </ul>
                                </nav>
                                <p class="w4-text w4-text-sm w4-text-neutral">
                                    Al continuar aceptas nuestros
                                    <a href="" class="w4-link w4-link-primary">Terminos de Servicio</a>
                                    y la
                                    <a href="" class="w4-link w4-link-primary">Politica de Privacidad</a>.
                                </p>
                            </div>
                        </div>
                        <div id="linkBasicCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
        &lt;p class="w4-text w4-text-base"&gt;
          Lee nuestra &lt;a href="#" class="w4-link w4-link-primary"&gt;documentacion de implementacion&lt;/a&gt;
          para conocer mas detalles.
        &lt;/p&gt;
        &lt;a href="#" class="w4-link w4-link-primary w4-link-sm"&gt;Olvide mi contrasena&lt;/a&gt;
        &lt;nav class="w4-breadcrumb w4-breadcrumb-size-sm w4-breadcrumb-primary"&gt;
          &lt;ul&gt;
            &lt;li&gt;
              &lt;a href="#" class="w4-link w4-link-neutral"&gt;Inicio&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a href="#" class="w4-link w4-link-neutral"&gt;Cuenta&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a href="#" class="w4-link w4-link-primary w4-link-active"&gt;Seguridad&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/nav&gt;
        &lt;p class="w4-text w4-text-sm w4-text-neutral-content"&gt;
          Al continuar aceptas nuestros &lt;a href="#" class="w4-link w4-link-primary"&gt;Terminos de Servicio&lt;/a&gt; y la &lt;a href="#" class="w4-link w4-link-primary"&gt;Politica de Privacidad&lt;/a&gt;.
        &lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="linkClassPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="linkClassCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="linkClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                    <a href="" class="w4-link w4-link-primary w4-link-active">Link Active</a>
                                    <a href="" class="w4-link w4-link-warning w4-link-disabled">Link Disabled</a>
                                    <a href="" class="w4-link w4-link-error w4-link-hidden">Link Hidden</a>
                                </div>
                            </div>
                            <div id="linkClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;a class="w4-link w4-link-primary w4-link-active" href="#"&gt;Link Active&lt;/a&gt;
&lt;a class="w4-link w4-link-warning w4-link-disabled" href="#"&gt;Link Disabled&lt;/a&gt;
&lt;a class="w4-link w4-link-error w4-link-hidden" href="#"&gt;Link Hidden&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="linkAttrPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="linkAttrCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="linkAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                    <a href="" class="w4-link w4-link-primary"
                                        data-w4-state="active">data-w4-state="active"</a>
                                    <a href="" class="w4-link w4-link-warning"
                                        data-w4-state="disabled">data-w4-state="disabled"</a>
                                    <a href="" class="w4-link w4-link-error"
                                        data-w4-state="hidden">data-w4-state="hidden"</a>
                                </div>
                            </div>
                            <div id="linkAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;a class="w4-link w4-link-primary" data-w4-state="active" href="#"&gt;...&lt;/a&gt;
&lt;a class="w4-link w4-link-warning" data-w4-state="disabled" href="#"&gt;...&lt;/a&gt;
&lt;a class="w4-link w4-link-error" data-w4-state="hidden" href="#"&gt;...&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Nativos Javascript Soportados al Componente
                Link</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones del componente usando <code>data-w4-link-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en el Link de prueba.
                </p>
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="linkJsPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="linkJsCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="linkJsPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-vertical w4-stack-sm">
                                <a id="labLinkTarget" href="" class="w4-link w4-link-primary w4-link-lg">Link de
                                    Prueba</a>
                                <p class="w4-text w4-text-sm w4-text-neutral-content">El link no navega en este
                                    laboratorio.</p>
                            </div>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-link-state="enabled" data-w4-target="labLinkTarget">Enabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-link-state="active" data-w4-target="labLinkTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-link-state="disabled" data-w4-target="labLinkTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-link-state="hidden"
                                    data-w4-target="labLinkTarget">Hidden</button>
                            </div>
                        </div>
                        <div id="linkJsCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;a id="labLinkTarget" class="w4-link w4-link-primary" href="#"&gt;Link de Prueba&lt;/a&gt;
&lt;button data-w4-link-state="enabled" data-w4-target="labLinkTarget"&gt;Enabled&lt;/button&gt;
&lt;button data-w4-link-state="active" data-w4-target="labLinkTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-link-state="disabled" data-w4-target="labLinkTarget"&gt;Disabled&lt;/button&gt;
&lt;button data-w4-link-state="hidden" data-w4-target="labLinkTarget"&gt;Hidden&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica al link de prueba y refleja los hooks visuales del componente.
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