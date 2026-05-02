<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native IconButton Lab</title>
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
                <li class="w4-text w4-text-neutral-content"><a href="">Inicio</a></li>
                <li class="w4-text w4-text-neutral-content"><a href="">Documentacion</a></li>
                <li class="w4-text w4-text-neutral-content"><a href="">Soporte</a></li>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI IconButton</h1>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">IconButton:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>IconButton</strong> es una variación especializada del botón diseñada para
                acciones compactas con iconografía.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Barras de herramientas:</strong> acciones rápidas en espacios
                    reducidos.</li>
                <li><strong class="w4-text-active">Acciones contextuales:</strong> editar, eliminar, ver detalles.</li>
                <li><strong class="w4-text-active">Navegación compacta:</strong> menú, cerrar modal, paginación.</li>
                <li><strong class="w4-text-active">Social/brand:</strong> accesos directos por icono.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Ejemplo De Barra De Herramientas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Composición típica de acciones de edición usando icon buttons compactos.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconButtonToolbarPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconButtonToolbarCode">Código HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-stack-center">
                        <div id="iconButtonToolbarPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button
                                        class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-secondary"
                                        aria-label="Negrita">
                                        <i class="fa-solid fa-bold"></i>
                                    </button>
                                    <button
                                        class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-secondary"
                                        aria-label="Cursiva">
                                        <i class="fa-solid fa-italic"></i>
                                    </button>
                                    <button
                                        class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-secondary"
                                        aria-label="Subrayado">
                                        <i class="fa-solid fa-underline"></i>
                                    </button>
                                    <button
                                        class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-info"
                                        aria-label="Alinear">
                                        <i class="fa-solid fa-align-left"></i>
                                    </button>
                                    <button
                                        class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-success"
                                        aria-label="Guardar">
                                        <i class="fa-solid fa-floppy-disk"></i>
                                    </button>
                                    <button
                                        class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-error"
                                        aria-label="Eliminar">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="iconButtonToolbarCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm"&gt;
  &lt;button class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-secondary"&gt;&lt;i class="fa-solid fa-bold"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;button class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-secondary"&gt;&lt;i class="fa-solid fa-italic"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;button class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-secondary"&gt;&lt;i class="fa-solid fa-underline"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;button class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-info"&gt;&lt;i class="fa-solid fa-align-left"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;button class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-success"&gt;&lt;i class="fa-solid fa-floppy-disk"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;button class="w4-icon-button w4-icon-button-xs w4-icon-button-outline w4-icon-button-error"&gt;&lt;i class="fa-solid fa-trash"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes Semánticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Colores semánticos aplicados a icon buttons.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconButtonSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconButtonSemanticCode">Código HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-stack-center">
                        <div id="iconButtonSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button class="w4-icon-button w4-icon-button-primary"><i
                                        class="fa-solid fa-bolt"></i></button>
                                <button class="w4-icon-button w4-icon-button-secondary"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="w4-icon-button w4-icon-button-accent"><i
                                        class="fa-solid fa-heart"></i></button>
                                <button class="w4-icon-button w4-icon-button-info"><i
                                        class="fa-solid fa-circle-info"></i></button>
                                <button class="w4-icon-button w4-icon-button-success"><i
                                        class="fa-solid fa-check"></i></button>
                                <button class="w4-icon-button w4-icon-button-warning"><i
                                        class="fa-solid fa-triangle-exclamation"></i></button>
                                <button class="w4-icon-button w4-icon-button-error"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <div id="iconButtonSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre
                                class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-icon-button w4-icon-button-primary"&gt;&lt;i class="fa-solid fa-bolt"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-secondary"&gt;&lt;i class="fa-solid fa-star"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-accent"&gt;&lt;i class="fa-solid fa-heart"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-info"&gt;&lt;i class="fa-solid fa-circle-info"&gt;&lt;/i&gt;&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes De Superficie</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estilos `outline` y `ghost` para acciones secundarias.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconButtonSurfacePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconButtonSurfaceCode">Código HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-stack-center">
                        <div id="iconButtonSurfacePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button class="w4-icon-button w4-icon-button-outline w4-icon-button-primary"><i
                                        class="fa-solid fa-pen"></i></button>
                                <button class="w4-icon-button w4-icon-button-outline w4-icon-button-secondary"><i
                                        class="fa-solid fa-folder-open"></i></button>
                                <button class="w4-icon-button w4-icon-button-ghost"><i
                                        class="fa-solid fa-share-nodes"></i></button>
                                <button class="w4-icon-button w4-icon-button-ghost"><i
                                        class="fa-solid fa-ellipsis"></i></button>
                            </div>
                        </div>
                        <div id="iconButtonSurfaceCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-icon-button w4-icon-button-outline w4-icon-button-primary"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-outline w4-icon-button-secondary"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-ghost"&gt;...&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Escalas morfológicas del icon button.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="iconButtonSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="iconButtonSizeCode">Código HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm w4-stack-center">
                        <div id="iconButtonSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-xs"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-sm"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-md"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-lg"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-xl"><i
                                        class="fa-solid fa-star"></i></button>
                            </div>
                        </div>
                        <div id="iconButtonSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-icon-button w4-icon-button-primary w4-icon-button-xs"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-primary w4-icon-button-sm"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-primary w4-icon-button-md"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-primary w4-icon-button-lg"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-primary w4-icon-button-xl"&gt;...&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="iconButtonClassPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="iconButtonClassCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="iconButtonClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button class="w4-icon-button w4-icon-button-primary w4-icon-button-active"><i
                                            class="fa-solid fa-bolt"></i></button>
                                    <button class="w4-icon-button w4-icon-button-secondary w4-icon-button-loading"><i
                                            class="fa-solid fa-spinner"></i></button>
                                    <button class="w4-icon-button w4-icon-button-warning w4-icon-button-readonly"><i
                                            class="fa-solid fa-lock"></i></button>
                                    <button class="w4-icon-button w4-icon-button-error w4-icon-button-disabled"><i
                                            class="fa-solid fa-ban"></i></button>
                                </div>
                            </div>
                            <div id="iconButtonClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-icon-button w4-icon-button-primary w4-icon-button-active"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-secondary w4-icon-button-loading"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-warning w4-icon-button-readonly"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-error w4-icon-button-disabled"&gt;...&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="iconButtonAttrPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="iconButtonAttrCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="iconButtonAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button class="w4-icon-button w4-icon-button-primary" data-w4-state="active"><i
                                            class="fa-solid fa-bolt"></i></button>
                                    <button class="w4-icon-button w4-icon-button-info" data-w4-state="loading"><i
                                            class="fa-solid fa-spinner"></i></button>
                                    <button class="w4-icon-button w4-icon-button-warning" data-w4-state="readonly"><i
                                            class="fa-solid fa-lock"></i></button>
                                    <button class="w4-icon-button w4-icon-button-error" data-w4-state="disabled"><i
                                            class="fa-solid fa-ban"></i></button>
                                </div>
                            </div>
                            <div id="iconButtonAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-icon-button w4-icon-button-primary" data-w4-state="active"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-info" data-w4-state="loading"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-warning" data-w4-state="readonly"&gt;...&lt;/button&gt;
&lt;button class="w4-icon-button w4-icon-button-error" data-w4-state="disabled"&gt;...&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados JS Soportados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Playground de estados con <code>data-w4-icon-button-state</code> y <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="iconButtonJsPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="iconButtonJsCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="iconButtonJsPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-center w4-stack-sm">
                                <button id="labIconButtonTarget"
                                    class="w4-icon-button w4-icon-button-primary w4-icon-button-md mb-6">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                            </div>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-icon-button-state="enabled"
                                    data-w4-target="labIconButtonTarget">Enabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-icon-button-state="active"
                                    data-w4-target="labIconButtonTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-info"
                                    data-w4-icon-button-state="loading"
                                    data-w4-target="labIconButtonTarget">Loading</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-icon-button-state="readonly"
                                    data-w4-target="labIconButtonTarget">Readonly</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error"
                                    data-w4-icon-button-state="disabled"
                                    data-w4-target="labIconButtonTarget">Disabled</button>
                            </div>
                        </div>
                        <div id="iconButtonJsCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre
                                class="m-0"><code class="w4-text w4-text-xs">
&lt;button id="labIconButtonTarget" class="w4-icon-button w4-icon-button-primary w4-icon-button-md"&gt;...&lt;/button&gt;
&lt;button data-w4-icon-button-state="enabled" data-w4-target="labIconButtonTarget"&gt;Enabled&lt;/button&gt;
&lt;button data-w4-icon-button-state="active" data-w4-target="labIconButtonTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-icon-button-state="loading" data-w4-target="labIconButtonTarget"&gt;Loading&lt;/button&gt;
&lt;button data-w4-icon-button-state="readonly" data-w4-target="labIconButtonTarget"&gt;Readonly&lt;/button&gt;
&lt;button data-w4-icon-button-state="disabled" data-w4-target="labIconButtonTarget"&gt;Disabled&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral-content">
                    El estado se aplica al icon button de prueba y refleja los hooks visuales del componente.
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