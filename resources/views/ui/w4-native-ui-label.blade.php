<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Label Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Label</h1>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Label:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Label</strong> proporciona consistencia tipográfica para describir inputs y
                controles.
            </p>
            <h2 class="w4-heading w4-heading-h3 w4-heading-primary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Formularios:</strong> asociar texto descriptivo mediante
                    <code>for=""</code>.
                </li>
                <li><strong class="w4-text-active">Obligatoriedad:</strong> usar <code>w4-label-required</code> o
                    <code>data-w4-state="required"</code>.
                </li>
                <li><strong class="w4-text-active">Validación:</strong> aplicar colores semánticos según contexto.</li>
                <li><strong class="w4-text-active">Desactivación:</strong> sincronizar con el estado del control
                    asociado.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Variantes Semánticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Colores semánticos disponibles para etiquetas.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="labelSemanticPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="labelSemanticCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="labelSemanticPreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm">
                            <div class="w4-grid w4-grid-4 w4-grid-bordered-primary">
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-neutral">Neutral Label</label>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-primary">Primary Label</label>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-secondary">Secondary Label</label>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-accent">Accent Label</label>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-info">Info Label</label>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-success">Success Label</label>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-warning">Warning Label</label>
                                </div>
                                <div class="w4-panel w4-panel-base-100 w4-panel-xs">
                                    <label class="w4-label w4-label-error">Error Label</label>
                                </div>
                            </div>
                        </div>
                        <div id="labelSemanticCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;label class="w4-label w4-label-neutral"&gt;Neutral Label&lt;/label&gt;
&lt;label class="w4-label w4-label-primary"&gt;Primary Label&lt;/label&gt;
&lt;label class="w4-label w4-label-secondary"&gt;Secondary Label&lt;/label&gt;
&lt;label class="w4-label w4-label-accent"&gt;Accent Label&lt;/label&gt;
&lt;label class="w4-label w4-label-info"&gt;Info Label&lt;/label&gt;
&lt;label class="w4-label w4-label-success"&gt;Success Label&lt;/label&gt;
&lt;label class="w4-label w4-label-warning"&gt;Warning Label&lt;/label&gt;
&lt;label class="w4-label w4-label-error"&gt;Error Label&lt;/label&gt;
</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas tipográficas para labels.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="labelSizePreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="labelSizeCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="labelSizePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                <label class="w4-label w4-label-primary w4-label-xs">Label XS</label>
                                <label class="w4-label w4-label-primary w4-label-sm">Label SM</label>
                                <label class="w4-label w4-label-primary w4-label-md">Label MD</label>
                                <label class="w4-label w4-label-primary w4-label-lg">Label LG</label>
                                <label class="w4-label w4-label-primary w4-label-xl">Label XL</label>
                            </div>
                        </div>
                        <div id="labelSizeCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;label class="w4-label w4-label-primary w4-label-xs"&gt;Label XS&lt;/label&gt;
&lt;label class="w4-label w4-label-primary w4-label-sm"&gt;Label SM&lt;/label&gt;
&lt;label class="w4-label w4-label-primary w4-label-md"&gt;Label MD&lt;/label&gt;
&lt;label class="w4-label w4-label-primary w4-label-lg"&gt;Label LG&lt;/label&gt;
&lt;label class="w4-label w4-label-primary w4-label-xl"&gt;Label XL&lt;/label&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Ejemplos de Uso</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Casos prácticos para formularios, obligatoriedad, validación y desactivación.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md">
                <div class="w4-stack w4-stack-sm">
                    <div class="w4-tabs w4-tabs-boxed w4-stack w4-stack-horizontal w4-stack-center"
                        data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="labelUsePreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="labelUseCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="labelUsePreview" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-grid w4-grid-2 w4-grid-sm">
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Formularios</span>
                                    <label for="useEmailField" class="w4-label w4-label-primary">Correo
                                        electrónico</label>
                                    <input id="useEmailField" type="email" class="w4-input w4-input-bordered"
                                        placeholder="usuario@correo.com">
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Obligatoriedad</span>
                                    <label for="useNameField" class="w4-label w4-label-warning w4-label-required">Nombre
                                        completo</label>
                                    <input id="useNameField" type="text" class="w4-input w4-input-bordered"
                                        placeholder="Campo obligatorio">
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Validación</span>
                                    <label for="usePhoneField" class="w4-label w4-label-error">Teléfono inválido</label>
                                    <input id="usePhoneField" type="tel" class="w4-input w4-input-error"
                                        placeholder="Formato: 555-123-4567">
                                </div>
                                <div class="w4-panel w4-panel-base-200 w4-panel-sm w4-stack w4-stack-xs">
                                    <span class="w4-text w4-text-sm w4-text-muted">Desactivación</span>
                                    <label for="useCodeField" class="w4-label w4-label-neutral w4-label-disabled">Código
                                        de
                                        invitación</label>
                                    <input id="useCodeField" type="text" class="w4-input w4-input-bordered" disabled
                                        placeholder="No disponible">
                                </div>
                            </div>
                        </div>
                        <div id="labelUseCode" data-w4-tab-panel
                            class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">&lt;!-- Formularios --&gt;
&lt;label for=&quot;email&quot; class=&quot;w4-label w4-label-primary&quot;&gt;Correo electrónico&lt;/label&gt;
&lt;input id=&quot;email&quot; class=&quot;w4-input w4-input-bordered&quot; /&gt;

&lt;!-- Obligatoriedad --&gt;
&lt;label for=&quot;name&quot; class=&quot;w4-label w4-label-warning w4-label-required&quot;&gt;Nombre completo&lt;/label&gt;
&lt;input id=&quot;name&quot; class=&quot;w4-input w4-input-bordered&quot; /&gt;

&lt;!-- Validación --&gt;
&lt;label for=&quot;phone&quot; class=&quot;w4-label w4-label-error&quot;&gt;Teléfono inválido&lt;/label&gt;
&lt;input id=&quot;phone&quot; class=&quot;w4-input w4-input-error&quot; /&gt;

&lt;!-- Desactivación --&gt;
&lt;label for=&quot;invite&quot; class=&quot;w4-label w4-label-neutral w4-label-disabled&quot;&gt;Código de invitación&lt;/label&gt;
&lt;input id=&quot;invite&quot; class=&quot;w4-input w4-input-bordered&quot; disabled /&gt;</code></pre>
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
                    <h3 class="w4-heading w4-heading-h4 w4-heading-primary">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="labelClassPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="labelClassCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="labelClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                    <label class="w4-label w4-label-primary w4-label-active">Label Active</label>
                                    <label class="w4-label w4-label-warning w4-label-required">Label Required</label>
                                    <label class="w4-label w4-label-error w4-label-disabled">Label Disabled</label>
                                    <label class="w4-label w4-label-secondary w4-label-hidden">Label Hidden</label>
                                </div>
                            </div>
                            <div id="labelClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;label class="w4-label w4-label-primary w4-label-active"&gt;Label Active&lt;/label&gt;
&lt;label class="w4-label w4-label-warning w4-label-required"&gt;Label Required&lt;/label&gt;
&lt;label class="w4-label w4-label-error w4-label-disabled"&gt;Label Disabled&lt;/label&gt;
&lt;label class="w4-label w4-label-secondary w4-label-hidden"&gt;Label Hidden&lt;/label&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="labelAttrPreview">Vista</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="labelAttrCode">Codigo</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="labelAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                    <label class="w4-label w4-label-primary"
                                        data-w4-state="active">data-w4-state="active"</label>
                                    <label class="w4-label w4-label-warning"
                                        data-w4-state="required">data-w4-state="required"</label>
                                    <label class="w4-label w4-label-error"
                                        data-w4-state="disabled">data-w4-state="disabled"</label>
                                    <label class="w4-label w4-label-secondary"
                                        data-w4-state="hidden">data-w4-state="hidden"</label>
                                </div>
                            </div>
                            <div id="labelAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;label class="w4-label w4-label-primary" data-w4-state="active"&gt;...&lt;/label&gt;
&lt;label class="w4-label w4-label-warning" data-w4-state="required"&gt;...&lt;/label&gt;
&lt;label class="w4-label w4-label-error" data-w4-state="disabled"&gt;...&lt;/label&gt;
&lt;label class="w4-label w4-label-secondary" data-w4-state="hidden"&gt;...&lt;/label&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary">Estados Nativos Javascript Soportados al Componente
                Label</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones del componente usando <code>data-w4-label-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: Juega con los estados JS soportados para ver su efecto en el Label de prueba.
                </p>
                <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                    <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                            data-w4-target="labelJsPreview">Vista</button>
                        <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                            data-w4-target="labelJsCode">Codigo</button>
                    </div>
                    <div class="w4-stack w4-stack-sm">
                        <div id="labelJsPreview" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                            <div class="w4-stack w4-stack-vertical w4-stack-sm mb-6">
                                <label id="labLabelTarget" class="w4-label w4-label-primary w4-label-lg">Label de
                                    Prueba</label>
                                <input type="text" class="w4-input w4-input-bordered" placeholder="Campo asociado" />
                            </div>
                            <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-neutral"
                                    data-w4-label-state="enabled" data-w4-target="labLabelTarget">Enabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-secondary"
                                    data-w4-label-state="active" data-w4-target="labLabelTarget">Active</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-info"
                                    data-w4-label-state="required" data-w4-target="labLabelTarget">Required</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-warning"
                                    data-w4-label-state="disabled" data-w4-target="labLabelTarget">Disabled</button>
                                <button type="button" class="w4-btn w4-btn-sm w4-btn-error" data-w4-label-state="hidden"
                                    data-w4-target="labLabelTarget">Hidden</button>
                            </div>
                        </div>
                        <div id="labelJsCode" data-w4-tab-panel
                            class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm" hidden
                            aria-hidden="true">
                            <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;label id="labLabelTarget" class="w4-label w4-label-primary"&gt;Label de Prueba&lt;/label&gt;
&lt;button data-w4-label-state="enabled" data-w4-target="labLabelTarget"&gt;Clear&lt;/button&gt;
&lt;button data-w4-label-state="active" data-w4-target="labLabelTarget"&gt;Active&lt;/button&gt;
&lt;button data-w4-label-state="required" data-w4-target="labLabelTarget"&gt;Required&lt;/button&gt;
&lt;button data-w4-label-state="disabled" data-w4-target="labLabelTarget"&gt;Disabled&lt;/button&gt;
&lt;button data-w4-label-state="hidden" data-w4-target="labLabelTarget"&gt;Hidden&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <p class="w4-text w4-text-sm w4-text-neutral">
                    El estado se aplica al label de prueba y refleja los hooks visuales del componente.
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