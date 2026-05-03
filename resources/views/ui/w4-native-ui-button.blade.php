<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Button Lab</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        <div class="w4-section w4-section-xl">
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Button</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Button:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                El componente <strong>Button</strong> es un elemento de interfaz fundamental utilizado para desencadenar
                acciones.
                Soporta múltiples variantes semánticas, tamaños, formas y estados de interacción.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Formularios:</strong> Enviar, guardar o cancelar datos (usando
                    multiples variantes de color y tamaño).</li>
                <li><strong class="w4-text-active">Acciones destructivas:</strong> Eliminar registros (usando variante
                    Error).</li>
                <li><strong class="w4-text-active">Navegación:</strong> Simular enlaces con la variante Link o
                    integrarlos en Sidebars.</li>
                <li><strong class="w4-text-active">Procesamiento:</strong> Mostrar retroalimentación asíncrona con el
                    estado <code>data-w4-state="loading"</code>.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes de colores semánticos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Botones con colores del sistema semántico.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="buttonSemanticPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="buttonSemanticCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="buttonSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                <button class="w4-btn w4-btn-neutral">Neutral</button>
                                <button class="w4-btn w4-btn-primary">Primary</button>
                                <button class="w4-btn w4-btn-secondary">Secondary</button>
                                <button class="w4-btn w4-btn-accent">Accent</button>
                                <button class="w4-btn w4-btn-info">Info</button>
                                <button class="w4-btn w4-btn-success">Success</button>
                                <button class="w4-btn w4-btn-warning">Warning</button>
                                <button class="w4-btn w4-btn-error">Error</button>
                                <button class="w4-btn w4-btn-ghost">Ghost</button>
                                <button class="w4-btn w4-btn-link">Link</button>
                            </div>
                        </div>
                        <div id="buttonSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code >
&lt;button class="w4-btn w4-btn-neutral"&gt;Neutral&lt;/button&gt;
&lt;button class="w4-btn w4-btn-primary"&gt;Primary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-accent"&gt;Accent&lt;/button&gt;
&lt;button class="w4-btn w4-btn-info"&gt;Info&lt;/button&gt;
&lt;button class="w4-btn w4-btn-success"&gt;Success&lt;/button&gt;
&lt;button class="w4-btn w4-btn-warning"&gt;Warning&lt;/button&gt;
&lt;button class="w4-btn w4-btn-error"&gt;Error&lt;/button&gt;
&lt;button class="w4-btn w4-btn-ghost"&gt;Ghost&lt;/button&gt;
&lt;button class="w4-btn w4-btn-link"&gt;Link&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Ejemplos Basicos</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Casos basicos para formularios, acciones destructivas, navegacion y procesamiento asincrono.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="buttonBasicPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="buttonBasicCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="buttonBasicPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-vertical w4-stack-md">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <span class="w4-text w4-text-sm w4-text-neutral-content">Formulario:</span>
                                    <button class="w4-btn w4-btn-primary">Guardar</button>
                                    <button class="w4-btn w4-btn-secondary">Enviar</button>
                                    <button class="w4-btn w4-btn-ghost">Cancelar</button>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <span class="w4-text w4-text-sm w4-text-neutral-content">Accion destructiva:</span>
                                    <button class="w4-btn w4-btn-error">Eliminar Registro</button>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <span class="w4-text w4-text-sm w4-text-neutral-content">Navegacion:</span>
                                    <button class="w4-btn w4-btn-link">Ir al Dashboard</button>
                                    <button class="w4-btn w4-btn-outline">Ver Detalles</button>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <span class="w4-text w4-text-sm w4-text-neutral-content">Procesamiento:</span>
                                    <button class="w4-btn w4-btn-info w4-btn-md" data-w4-state="loading">
                                        <i class=" fa-solid fa-rotate w4-icon w4-icon-md w4-icon-secondary
                                        w4-icon-spin"></i>Procesando...
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="buttonBasicCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre
                                class="m-0"><code>
&lt;!-- Formularios --&gt;
&lt;button class="w4-btn w4-btn-primary"&gt;Guardar&lt;/button&gt;
&lt;button class="w4-btn w4-btn-secondary"&gt;Enviar&lt;/button&gt;
&lt;button class="w4-btn w4-btn-ghost"&gt;Cancelar&lt;/button&gt;

&lt;!-- Accion destructiva --&gt;
&lt;button class="w4-btn w4-btn-error"&gt;Eliminar Registro&lt;/button&gt;

&lt;!-- Navegacion --&gt;
&lt;button class="w4-btn w4-btn-link"&gt;Ir al Dashboard&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline"&gt;Ver Detalles&lt;/button&gt;

&lt;!-- Procesamiento --&gt;
&lt;button class="w4-btn w4-btn-info w4-btn-md" data-w4-state="loading"&gt;
&lt;i class=" fa-solid fa-rotate w4-icon w4-icon-xl w4-icon-secondary w4-icon-spin"&gt;&lt;/i&gt;Procesando...&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Botones con semantica de contorno</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estilos visuales alternativos para priorizar o suavizar acciones.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="buttonOutlinePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="buttonOutlineCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="buttonOutlinePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                <button class="w4-btn w4-btn-outline">Neutral</button>
                                <button class="w4-btn w4-btn-outline w4-btn-primary">Primary</button>
                                <button class="w4-btn w4-btn-outline w4-btn-secondary">Secondary</button>
                                <button class="w4-btn w4-btn-outline w4-btn-accent">Accent</button>
                                <button class="w4-btn w4-btn-outline w4-btn-info">Info</button>
                                <button class="w4-btn w4-btn-outline w4-btn-success">Success</button>
                                <button class="w4-btn w4-btn-outline w4-btn-warning">Warning</button>
                                <button class="w4-btn w4-btn-outline w4-btn-error">Error</button>
                            </div>
                        </div>
                        <div id="buttonOutlineCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code>
&lt;button class="w4-btn w4-btn-outline"&gt;Neutral&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline w4-btn-primary"&gt;Primary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline w4-btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline w4-btn-accent"&gt;Accent&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline w4-btn-info"&gt;Info&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline w4-btn-success"&gt;Success&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline w4-btn-warning"&gt;Warning&lt;/button&gt;
&lt;button class="w4-btn w4-btn-outline w4-btn-error"&gt;Error&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Botones con semantica de fondo suave</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estilos visuales alternativos para mostrar acciones con fondo suave.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="buttonSoftPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="buttonSoftCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="buttonSoftPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                <button class="w4-btn w4-btn-soft w4-btn-neutral">Neutral</button>
                                <button class="w4-btn w4-btn-soft w4-btn-primary">Primary</button>
                                <button class="w4-btn w4-btn-soft w4-btn-secondary">Secondary</button>
                                <button class="w4-btn w4-btn-soft w4-btn-accent">Accent</button>
                                <button class="w4-btn w4-btn-soft w4-btn-info">Info</button>
                                <button class="w4-btn w4-btn-soft w4-btn-success">Success</button>
                                <button class="w4-btn w4-btn-soft w4-btn-warning">Warning</button>
                                <button class="w4-btn w4-btn-soft w4-btn-error">Error</button>
                            </div>
                        </div>
                        <div id="buttonSoftCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code>
&lt;button class="w4-btn w4-btn-soft w4-btn-neutral"&gt;Neutral&lt;/button&gt;
&lt;button class="w4-btn w4-btn-soft w4-btn-primary"&gt;Primary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-soft w4-btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-soft w4-btn-accent"&gt;Accent&lt;/button&gt;
&lt;button class="w4-btn w4-btn-soft w4-btn-info"&gt;Info&lt;/button&gt;
&lt;button class="w4-btn w4-btn-soft w4-btn-success"&gt;Success&lt;/button&gt;
&lt;button class="w4-btn w4-btn-soft w4-btn-warning"&gt;Warning&lt;/button&gt;
&lt;button class="w4-btn w4-btn-soft w4-btn-error"&gt;Error&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Botones con semantica de contorno discontinuo</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estilos visuales alternativos para mostrar acciones con contorno discontinuo.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="buttonDashPreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="buttonDashCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="buttonDashPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-center w4-stack-sm">
                                <button class="w4-btn w4-btn-dash w4-btn-neutral">Neutral</button>
                                <button class="w4-btn w4-btn-dash w4-btn-primary">Primary</button>
                                <button class="w4-btn w4-btn-dash w4-btn-secondary">Secondary</button>
                                <button class="w4-btn w4-btn-dash w4-btn-accent">Accent</button>
                                <button class="w4-btn w4-btn-dash w4-btn-info">Info</button>
                                <button class="w4-btn w4-btn-dash w4-btn-success">Success</button>
                                <button class="w4-btn w4-btn-dash w4-btn-warning">Warning</button>
                                <button class="w4-btn w4-btn-dash w4-btn-error">Error</button>
                            </div>
                        </div>
                        <div id="buttonDashCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code>
&lt;button class="w4-btn w4-btn-dash w4-btn-neutral"&gt;Neutral&lt;/button&gt;
&lt;button class="w4-btn w4-btn-dash w4-btn-primary"&gt;Primary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-dash w4-btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="w4-btn w4-btn-dash w4-btn-accent"&gt;Accent&lt;/button&gt;
&lt;button class="w4-btn w4-btn-dash w4-btn-info"&gt;Info&lt;/button&gt;
&lt;button class="w4-btn w4-btn-dash w4-btn-success"&gt;Success&lt;/button&gt;
&lt;button class="w4-btn w4-btn-dash w4-btn-warning"&gt;Warning&lt;/button&gt;
&lt;button class="w4-btn w4-btn-dash w4-btn-error"&gt;Error&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Escalas morfológicas del botón.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="buttonSizePreview">Vista previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="buttonSizeCode">Codigo HTML</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="buttonSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm w4-stack-center">
                                <button class="w4-btn w4-btn-primary w4-btn-xs">XSmall</button>
                                <button class="w4-btn w4-btn-primary w4-btn-sm">Small</button>
                                <button class="w4-btn w4-btn-primary w4-btn-md">Medium</button>
                                <button class="w4-btn w4-btn-primary w4-btn-lg">Large</button>
                                <button class="w4-btn w4-btn-primary w4-btn-xl">XLarge</button>
                            </div>
                        </div>
                        <div id="buttonSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code>
&lt;button class="w4-btn w4-btn-primary w4-btn-xs"&gt;XSmall&lt;/button&gt;
&lt;button class="w4-btn w4-btn-primary w4-btn-sm"&gt;Small&lt;/button&gt;
&lt;button class="w4-btn w4-btn-primary w4-btn-md"&gt;Medium&lt;/button&gt;
&lt;button class="w4-btn w4-btn-primary w4-btn-lg"&gt;Large&lt;/button&gt;
&lt;button class="w4-btn w4-btn-primary w4-btn-xl"&gt;XLarge&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Formas y Layout</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Modificadores de forma y distribución.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Square / Circle</h3>
                    <div class="w4-stack w4-stack-sm">
                        <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="buttonShapePreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="buttonShapeCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="buttonShapePreview" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button class="w4-btn w4-btn-secondary w4-btn-square" aria-label="Square">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="w4-icon w4-icon-md stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button>
                                    <button class="w4-btn w4-btn-accent w4-btn-circle" aria-label="Circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="w4-icon w4-icon-md stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v12m6-6H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div id="buttonShapeCode" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                                <pre class="w4-m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-btn w4-btn-secondary w4-btn-square"&gt;...&lt;/button&gt;
&lt;button class="w4-btn w4-btn-accent w4-btn-circle"&gt;...&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <hr class="w4-divider w4-divider-primary">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Botones Anchos</h3>
                    <div class="w4-stack w4-stack-sm">
                        <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="buttonWidePreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="buttonWideCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="buttonWidePreview" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-vertical w4-stack-center">
                                    <button class="w4-btn w4-btn-primary w4-btn-wide">Open</button>
                                    <button class="w4-btn w4-btn-accent w4-btn-wide">Close</button>
                                </div>
                            </div>
                            <div id="buttonWideCode" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-button w4-button-accent w4-btn-wide"&gt;Open&lt;/button&gt;
&lt;button class="w4-button w4-button-accent w4-btn-wide"&gt;Close&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Block</h3>
                    <div class="w4-stack w4-stack-sm">
                        <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                                data-w4-target="buttonBlockPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                                data-w4-target="buttonBlockCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="buttonBlockPreview" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm w4-stack-vertical">
                                    <button class="w4-button w4-button-primary w4-button-block">Acción
                                        Principal</button>
                                    <button
                                        class="w4-button w4-button-outline w4-button-secondary w4-button-block">Acción
                                        Secundaria</button>
                                </div>
                            </div>
                            <div id="buttonBlockCode" data-w4-tab-panel
                                class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-button w4-button-primary w4-button-block"&gt;...&lt;/button&gt;
&lt;button class="w4-button w4-button-outline w4-button-secondary w4-button-block"&gt;...&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Estados soportados por clases y atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-gap-md">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="buttonStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="buttonStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="buttonStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button class="w4-btn w4-btn-primary w4-btn-active">Active</button>
                                    <button class="w4-btn w4-btn-secondary w4-btn-disabled">Disabled</button>
                                    <button class="w4-btn w4-btn-info w4-btn-loading">Loading</button>
                                    <button class="w4-btn w4-btn-warning w4-btn-readonly">Readonly</button>
                                </div>
                            </div>
                            <div id="buttonStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-btn w4-btn-primary w4-btn-active"&gt;Active&lt;/button&gt;
&lt;button class="w4-btn w4-btn-secondary w4-btn-disabled"&gt;Disabled&lt;/button&gt;
&lt;button class="w4-btn w4-btn-info w4-btn-loading"&gt;Loading&lt;/button&gt;
&lt;button class="w4-btn w4-btn-warning w4-btn-readonly"&gt;Readonly&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="buttonStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="buttonStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="buttonStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button class="w4-btn w4-btn-primary"
                                        data-w4-state="active">data-w4-state="active"</button>
                                    <button class="w4-btn w4-btn-secondary" disabled>disabled</button>
                                    <button class="w4-btn w4-btn-info"
                                        data-w4-state="loading">data-w4-state="loading"</button>
                                    <button class="w4-btn w4-btn-warning" readonly>readonly</button>
                                </div>
                            </div>
                            <div id="buttonStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button class="w4-btn w4-btn-primary" data-w4-state="active"&gt;data-w4-state="active"&lt;/button&gt;
&lt;button class="w4-btn w4-btn-secondary" disabled&gt;disabled&lt;/button&gt;
&lt;button class="w4-btn w4-btn-info" data-w4-state="loading"&gt;data-w4-state="loading"&lt;/button&gt;
&lt;button class="w4-btn w4-btn-warning" readonly&gt;readonly&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Nativos Javascript Soportados al Componente
                Button</h2>
            <p class="w4-text w4-text-lg w4-text-neutral-content">
                Controles para probar transiciones del componente usando <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral-content">
                    Playground: Juega con los estados JS soportados para ver su efecto en el botón de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="buttonJsStatePreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="buttonJsStateCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="buttonJsStatePreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button id="labButtonTarget" class="w4-btn w4-btn-primary w4-btn-md mb-6">Botón de
                                        Prueba
                                        <i class="fa-solid fa-rotate w4-icon w4-icon-md w4-icon-info"></i>
                                    </button>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                        data-w4-button-state="enabled" data-w4-target="labButtonTarget">Enabled</button>

                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                        data-w4-button-state="active" data-w4-target="labButtonTarget">Active</button>

                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-info"
                                        data-w4-button-state="loading" data-w4-target="labButtonTarget">Loading</button>

                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                        data-w4-button-state="readonly"
                                        data-w4-target="labButtonTarget">Readonly</button>

                                    <button type="button" class="w4-btn w4-btn-sm w4-btn-error"
                                        data-w4-button-state="disabled"
                                        data-w4-target="labButtonTarget">Disabled</button>
                                </div>
                            </div>
                            <div id="buttonJsStateCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;button id="labButtonTarget" class="w4-btn w4-btn-primary w4-btn-md"&gt;
  Botón de Prueba
  &lt;i class="fa-solid fa-rotate w4-icon w4-icon-md"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button data-w4-button-state="enabled" data-w4-target="labButtonTarget"&gt;Clear&lt;/button&gt;
&lt;button data-w4-button-state="enabled" data-w4-target="labButtonTarget"&gt;Enabled&lt;/button&gt;
&lt;button data-w4-button-state="active" data-w4-target="labButtonTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-button-state="loading" data-w4-target="labButtonTarget"&gt;Loading&lt;/button&gt;
&lt;button data-w4-button-state="readonly" data-w4-target="labButtonTarget"&gt;Readonly&lt;/button&gt;
&lt;button data-w4-button-state="disabled" data-w4-target="labButtonTarget"&gt;Disabled&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral-content">
                        El estado se aplica al botón de prueba y refleja los hooks visuales del componente.
                    </p>
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