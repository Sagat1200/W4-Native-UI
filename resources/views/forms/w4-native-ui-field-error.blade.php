<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Field Error Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Field Error</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Field Error:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Field Error</strong> se utiliza para mostrar mensajes de validación o
                retroalimentación contextual asociados directamente a un campo de formulario específico. Ayuda a los
                usuarios a identificar y corregir errores de entrada de datos de forma clara y accesible.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Validación de formularios:</strong> Mostrar errores cuando un campo
                    requerido está vacío o
                    tiene un formato incorrecto.</li>
                <li><strong class="w4-text-active">Retroalimentación de éxito:</strong> Indicar visualmente que un campo
                    (como un nombre de
                    usuario) es válido o está disponible.</li>
                <li><strong class="w4-text-active">Reglas y sugerencias:</strong> Mostrar advertencias o reglas de
                    formato (ej. "La contraseña
                    debe tener al menos 8 caracteres") debajo del input.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para mensajes de error y retroalimentación contextual.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="fieldErrorSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="fieldErrorSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="fieldErrorSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error">Field error default</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error w4-field-error-primary">Field error primary</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error w4-field-error-secondary">Field error secondary</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error w4-field-error-accent">Field error accent</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error w4-field-error-success">Field error success</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error w4-field-error-info">Field error info</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error w4-field-error-warning">Field error warning</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-field-error w4-field-error-error">Field error error</p>
                        </div>
                    </div>
                </div>
                <div id="fieldErrorSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class=&quot;w4-field-error&quot;&gt;Field error default&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-primary&quot;&gt;Field error primary&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-secondary&quot;&gt;Field error secondary&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-accent&quot;&gt;Field error accent&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-success&quot;&gt;Field error success&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-info&quot;&gt;Field error info&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-warning&quot;&gt;Field error warning&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-error&quot;&gt;Field error error&lt;/p&gt;
</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas tipográficas para adaptar el mensaje al contexto del formulario.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="fieldErrorSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="fieldErrorSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="fieldErrorSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm w4-stack-center">
                        <p class="w4-field-error w4-field-error-error w4-field-error-xs">XS: campo requerido</p>
                        <p class="w4-field-error w4-field-error-error w4-field-error-sm">SM: campo requerido</p>
                        <p class="w4-field-error w4-field-error-error w4-field-error-md">MD: campo requerido</p>
                        <p class="w4-field-error w4-field-error-error w4-field-error-lg">LG: campo requerido</p>
                        <p class="w4-field-error w4-field-error-error w4-field-error-xl">XL: campo requerido</p>
                    </div>
                </div>
                <div id="fieldErrorSizeCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class=&quot;w4-field-error w4-field-error-error w4-field-error-xs&quot;&gt;XS&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-error w4-field-error-sm&quot;&gt;SM&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-error w4-field-error-md&quot;&gt;MD&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-error w4-field-error-lg&quot;&gt;LG&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-error w4-field-error-xl&quot;&gt;XL&lt;/p&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Casos de Uso Aplicados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos reales de validación, éxito y sugerencias de formato.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="demoFieldEmail">Correo electrónico</label>
                    <input id="demoFieldEmail" class="w4-input w4-input-error" value="correo@">
                    <p class="w4-field-error w4-field-error-error">Ingresa un correo electrónico válido.</p>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="demoFieldUser">Nombre de usuario</label>
                    <input id="demoFieldUser" class="w4-input w4-input-success" value="w4_user">
                    <p class="w4-field-error w4-field-error-success">Nombre de usuario disponible.</p>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="demoFieldPass">Contraseña</label>
                    <input id="demoFieldPass" class="w4-input w4-input-warning" value="abc123">
                    <p class="w4-field-error w4-field-error-warning">Debe tener al menos 8 caracteres.</p>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="demoFieldPhone">Teléfono</label>
                    <input id="demoFieldPhone" class="w4-input w4-input-info" value="+52">
                    <p class="w4-field-error w4-field-error-info">Formato sugerido: +52 55 1234 5678.</p>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados soportados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="fieldStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="fieldStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="fieldStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <p class="w4-field-error w4-field-error-error w4-field-error-active">Estado active
                                        por clase</p>
                                    <p class="w4-field-error w4-field-error-warning w4-field-error-disabled">Estado
                                        disabled por clase</p>
                                    <p class="w4-field-error w4-field-error-info w4-field-error-hidden">Estado hidden
                                        por clase</p>
                                </div>
                            </div>
                            <div id="fieldStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class=&quot;w4-field-error w4-field-error-error w4-field-error-active&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-warning w4-field-error-disabled&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-info w4-field-error-hidden&quot;&gt;...&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="fieldStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="fieldStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="fieldStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <p class="w4-field-error w4-field-error-error" data-w4-state="active">Estado active
                                        por atributo</p>
                                    <p class="w4-field-error w4-field-error-warning" data-w4-state="disabled">Estado
                                        disabled por atributo</p>
                                    <p class="w4-field-error w4-field-error-info" data-w4-state="hidden">Estado hidden
                                        por atributo</p>
                                </div>
                            </div>
                            <div id="fieldStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">
&lt;p class=&quot;w4-field-error w4-field-error-error&quot; data-w4-state=&quot;active&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-warning&quot; data-w4-state=&quot;disabled&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-field-error w4-field-error-info&quot; data-w4-state=&quot;hidden&quot;&gt;...&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Field Error
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-field-error-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al mensaje de error de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="fieldJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="fieldJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="fieldJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <p id="labFieldErrorTarget"
                                        class="w4-field-error w4-field-error-error w4-field-error-md">
                                        El correo es obligatorio.
                                    </p>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                            data-w4-field-error-state="active"
                                            data-w4-target="labFieldErrorTarget">Active</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-field-error-state="disabled"
                                            data-w4-target="labFieldErrorTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-field-error-state="hidden"
                                            data-w4-target="labFieldErrorTarget">Hidden</button>
                                    </div>
                                </div>
                            </div>
                            <div id="fieldJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">
&lt;p id=&quot;labFieldErrorTarget&quot; class=&quot;w4-field-error w4-field-error-error w4-field-error-md&quot;&gt;
  El correo es obligatorio.
&lt;/p&gt;
&lt;button data-w4-field-error-state=&quot;enabled&quot; data-w4-target=&quot;labFieldErrorTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-field-error-state=&quot;active&quot; data-w4-target=&quot;labFieldErrorTarget&quot;&gt;Active&lt;/button&gt;
&lt;button data-w4-field-error-state=&quot;disabled&quot; data-w4-target=&quot;labFieldErrorTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-field-error-state=&quot;hidden&quot; data-w4-target=&quot;labFieldErrorTarget&quot;&gt;Hidden&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al mensaje de error de prueba y sincroniza sus hooks visuales.
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