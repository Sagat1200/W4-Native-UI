<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Helper Text Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Helper Text</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Helper Text:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Helper Text</strong> proporciona contexto adicional o instrucciones breves debajo
                de los elementos de formulario. Ayuda a guiar al usuario indicando el formato esperado, restricciones o
                aclarando el propósito de un campo antes de que interactúen con él.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Requisitos de formato:</strong> Indicar cómo debe ingresarse un dato
                    (ej. "Usa formato
                    DD/MM/AAAA").</li>
                <li><strong class="w4-text-active">Explicación de propósito:</strong> Aclarar para qué se usará la
                    información (ej. "Tu correo
                    no será compartido").</li>
                <li><strong class="w4-text-active">Límites y restricciones:</strong> Informar sobre límites de
                    caracteres o tamaños de archivo
                    máximos.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para textos de ayuda e instrucciones de formulario.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="helperSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="helperSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="helperSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text">Default helper text</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text w4-helper-text-primary">Primary helper text</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text w4-helper-text-secondary">Secondary helper text</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text w4-helper-text-accent">Accent helper text</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text w4-helper-text-info">Info helper text</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text w4-helper-text-success">Success helper text</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text w4-helper-text-warning">Warning helper text</p>
                        </div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm">
                            <p class="w4-helper-text w4-helper-text-error">Error helper text</p>
                        </div>
                    </div>
                </div>
                <div id="helperSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;p class=&quot;w4-helper-text&quot;&gt;Default helper text&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-primary&quot;&gt;Primary helper text&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-secondary&quot;&gt;Secondary helper text&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-accent&quot;&gt;Accent helper text&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-info&quot;&gt;Info helper text&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-success&quot;&gt;Success helper text&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-warning&quot;&gt;Warning helper text&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-error&quot;&gt;Error helper text&lt;/p&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas tipográficas para helper text según densidad visual.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="helperSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="helperSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="helperSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <p class="w4-helper-text w4-helper-text-xs">XS: Usa formato DD/MM/AAAA</p>
                        <p class="w4-helper-text w4-helper-text-sm">SM: Usa formato DD/MM/AAAA</p>
                        <p class="w4-helper-text w4-helper-text-md">MD: Usa formato DD/MM/AAAA</p>
                        <p class="w4-helper-text w4-helper-text-lg">LG: Usa formato DD/MM/AAAA</p>
                        <p class="w4-helper-text w4-helper-text-xl">XL: Usa formato DD/MM/AAAA</p>
                    </div>
                </div>
                <div id="helperSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;p class=&quot;w4-helper-text w4-helper-text-xs&quot;&gt;XS&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-sm&quot;&gt;SM&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-md&quot;&gt;MD&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-lg&quot;&gt;LG&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-xl&quot;&gt;XL&lt;/p&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Casos de Uso Aplicados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos prácticos para formato, propósito y límites de entrada.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-3 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label w4-label-primary" for="helperDateField">Fecha de nacimiento</label>
                    <input id="helperDateField" class="w4-input w4-input-primary" placeholder="DD/MM/AAAA">
                    <p class="w4-helper-text w4-helper-text-info">Usa formato DD/MM/AAAA.</p>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label w4-label-primary" for="helperEmailField">Correo electrónico</label>
                    <input id="helperEmailField" class="w4-input w4-input-primary" placeholder="correo@dominio.com">
                    <p class="w4-helper-text w4-helper-text-success">Tu correo no será compartido.</p>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label w4-label-primary" for="helperFileField">Nombre del archivo</label>
                    <input id="helperFileField" class="w4-input w4-input-primary" placeholder="reporte.pdf">
                    <p class="w4-helper-text w4-helper-text-warning">Máximo 2MB y 64 caracteres.</p>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Estados Visuales</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Estados por clase y por atributo <code>data-w4-state</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Clase</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="helperStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="helperStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="helperStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <p class="w4-helper-text w4-helper-text-info w4-helper-text-active">Estado active
                                        por clase</p>
                                    <p class="w4-helper-text w4-helper-text-warning w4-helper-text-disabled">Estado
                                        disabled por clase</p>
                                    <p class="w4-helper-text w4-helper-text-neutral w4-helper-text-hidden">Estado hidden
                                        por clase</p>
                                </div>
                            </div>
                            <div id="helperStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">
&lt;p class=&quot;w4-helper-text w4-helper-text-info w4-helper-text-active&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-warning w4-helper-text-disabled&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-neutral w4-helper-text-hidden&quot;&gt;...&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="helperStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="helperStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="helperStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <p class="w4-helper-text w4-helper-text-info" data-w4-state="active">Estado active
                                        por atributo</p>
                                    <p class="w4-helper-text w4-helper-text-warning" data-w4-state="disabled">Estado
                                        disabled por atributo</p>
                                    <p class="w4-helper-text w4-helper-text-neutral" data-w4-state="hidden">Estado
                                        hidden por atributo</p>
                                </div>
                            </div>
                            <div id="helperStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">
&lt;p class=&quot;w4-helper-text w4-helper-text-info&quot; data-w4-state=&quot;active&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-warning&quot; data-w4-state=&quot;disabled&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;w4-helper-text w4-helper-text-neutral&quot; data-w4-state=&quot;hidden&quot;&gt;...&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Helper Text
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-helper-text-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al helper text de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="helperJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="helperJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="helperJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <p id="labHelperTextTarget"
                                        class="w4-helper-text w4-helper-text-info w4-helper-text-md">
                                        Tu contraseña debe tener 8 caracteres.
                                    </p>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-helper-text-state="enabled"
                                            data-w4-target="labHelperTextTarget">Enabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-secondary"
                                            data-w4-helper-text-state="active"
                                            data-w4-target="labHelperTextTarget">Active</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-helper-text-state="disabled"
                                            data-w4-target="labHelperTextTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-helper-text-state="hidden"
                                            data-w4-target="labHelperTextTarget">Hidden</button>
                                    </div>
                                </div>
                            </div>
                            <div id="helperJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">&lt;p id=&quot;labHelperTextTarget&quot; class=&quot;w4-helper-text w4-helper-text-info w4-helper-text-md&quot;&gt;
  Tu contraseña debe tener 8 caracteres.
&lt;/p&gt;
&lt;button data-w4-helper-text-state=&quot;enabled&quot; data-w4-target=&quot;labHelperTextTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-helper-text-state=&quot;active&quot; data-w4-target=&quot;labHelperTextTarget&quot;&gt;Active&lt;/button&gt;
&lt;button data-w4-helper-text-state=&quot;disabled&quot; data-w4-target=&quot;labHelperTextTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-helper-text-state=&quot;hidden&quot; data-w4-target=&quot;labHelperTextTarget&quot;&gt;Hidden&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al helper text de prueba y sincroniza sus hooks visuales.
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