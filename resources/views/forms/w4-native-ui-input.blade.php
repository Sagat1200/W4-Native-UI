<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Input Lab</title>
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
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Input</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Input:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Input</strong> es el elemento principal para la entrada de texto libre por parte
                del usuario. Permite capturar datos como nombres, correos electrónicos, contraseñas o números, y es
                fundamental para cualquier formulario interactivo.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Captura de datos personales:</strong> Para solicitar información como
                    nombre, apellido o
                    dirección.</li>
                <li><strong class="w4-text-active">Credenciales de acceso:</strong> Campos de correo electrónico y
                    contraseña en formularios de
                    inicio de sesión o registro.</li>
                <li><strong class="w4-text-active">Búsqueda y filtrado:</strong> Barras de búsqueda para encontrar
                    contenido específico dentro
                    de la aplicación.</li>
                <li><strong class="w4-text-active">Entrada de texto general:</strong> Captura de cantidades numéricas,
                    códigos postales o
                    identificadores cortos.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para campos de entrada según contexto visual.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="inputSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="inputSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="inputSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-neutral"
                                placeholder="Neutral"></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-primary"
                                placeholder="Primary"></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-secondary"
                                placeholder="Secondary"></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-accent"
                                placeholder="Accent"></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-info"
                                placeholder="Info"></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-success"
                                placeholder="Success"></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-warning"
                                placeholder="Warning"></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><input class="w4-input w4-input-error"
                                placeholder="Error"></div>
                    </div>
                </div>
                <div id="inputSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input class=&quot;w4-input w4-input-neutral&quot; placeholder=&quot;Neutral&quot;&gt;
&lt;input class=&quot;w4-input w4-input-primary&quot; placeholder=&quot;Primary&quot;&gt;
&lt;input class=&quot;w4-input w4-input-secondary&quot; placeholder=&quot;Secondary&quot;&gt;
&lt;input class=&quot;w4-input w4-input-accent&quot; placeholder=&quot;Accent&quot;&gt;
&lt;input class=&quot;w4-input w4-input-info&quot; placeholder=&quot;Info&quot;&gt;
&lt;input class=&quot;w4-input w4-input-success&quot; placeholder=&quot;Success&quot;&gt;
&lt;input class=&quot;w4-input w4-input-warning&quot; placeholder=&quot;Warning&quot;&gt;
&lt;input class=&quot;w4-input w4-input-error&quot; placeholder=&quot;Error&quot;&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas morfológicas del componente input para distintas densidades.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="inputSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="inputSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="inputSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <input class="w4-input w4-input-xs" placeholder="Input XS">
                        <input class="w4-input w4-input-sm" placeholder="Input SM">
                        <input class="w4-input w4-input-md" placeholder="Input MD">
                        <input class="w4-input w4-input-lg" placeholder="Input LG">
                        <input class="w4-input w4-input-xl" placeholder="Input XL">
                    </div>
                </div>
                <div id="inputSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input class=&quot;w4-input w4-input-xs&quot; placeholder=&quot;Input XS&quot;&gt;
&lt;input class=&quot;w4-input w4-input-sm&quot; placeholder=&quot;Input SM&quot;&gt;
&lt;input class=&quot;w4-input w4-input-md&quot; placeholder=&quot;Input MD&quot;&gt;
&lt;input class=&quot;w4-input w4-input-lg&quot; placeholder=&quot;Input LG&quot;&gt;
&lt;input class=&quot;w4-input w4-input-xl&quot; placeholder=&quot;Input XL&quot;&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Casos de Uso Aplicados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos de captura de datos, credenciales y búsqueda.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-2 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="inputNameDemo">Nombre completo</label>
                    <input id="inputNameDemo" class="w4-input" placeholder="Juan Pérez">
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="inputEmailDemo">Correo electrónico</label>
                    <input id="inputEmailDemo" class="w4-input w4-input-primary" placeholder="correo@dominio.com">
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="inputPasswordDemo">Contraseña</label>
                    <input id="inputPasswordDemo" class="w4-input w4-input-secondary" type="password"
                        placeholder="••••••••">
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="inputSearchDemo">Búsqueda</label>
                    <input id="inputSearchDemo" class="w4-input w4-input-accent" placeholder="Buscar por nombre o ID">
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
                                data-w4-target="inputStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="inputStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="inputStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <input class="w4-input w4-input-disabled" value="Disabled">
                                    <input class="w4-input w4-input-readonly" value="Readonly">
                                    <input class="w4-input w4-input-invalid" value="Invalid">
                                    <input class="w4-input w4-input-valid" value="Valid">
                                    <input class="w4-input w4-input-loading" value="Loading">
                                </div>
                            </div>
                            <div id="inputStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input class=&quot;w4-input w4-input-disabled&quot; value=&quot;Disabled&quot;&gt;
&lt;input class=&quot;w4-input w4-input-readonly&quot; value=&quot;Readonly&quot;&gt;
&lt;input class=&quot;w4-input w4-input-invalid&quot; value=&quot;Invalid&quot;&gt;
&lt;input class=&quot;w4-input w4-input-valid&quot; value=&quot;Valid&quot;&gt;
&lt;input class=&quot;w4-input w4-input-loading&quot; value=&quot;Loading&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="inputStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="inputStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="inputStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <input class="w4-input" data-w4-state="disabled" value="disabled">
                                    <input class="w4-input" data-w4-state="readonly" value="readonly">
                                    <input class="w4-input" data-w4-state="invalid" value="invalid">
                                    <input class="w4-input" data-w4-state="valid" value="valid">
                                    <input class="w4-input" data-w4-state="loading" value="loading">
                                </div>
                            </div>
                            <div id="inputStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;input class=&quot;w4-input&quot; data-w4-state=&quot;disabled&quot; value=&quot;disabled&quot;&gt;
&lt;input class=&quot;w4-input&quot; data-w4-state=&quot;readonly&quot; value=&quot;readonly&quot;&gt;
&lt;input class=&quot;w4-input&quot; data-w4-state=&quot;invalid&quot; value=&quot;invalid&quot;&gt;
&lt;input class=&quot;w4-input&quot; data-w4-state=&quot;valid&quot; value=&quot;valid&quot;&gt;
&lt;input class=&quot;w4-input&quot; data-w4-state=&quot;loading&quot; value=&quot;loading&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Input
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-input-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al input de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="inputJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="inputJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="inputJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <input id="labInputTarget" class="w4-input w4-input-primary"
                                        placeholder="Input de prueba">
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-input-state="enabled"
                                            data-w4-target="labInputTarget">Enabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-input-state="readonly"
                                            data-w4-target="labInputTarget">Readonly</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-input-state="disabled"
                                            data-w4-target="labInputTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-info"
                                            data-w4-input-state="loading"
                                            data-w4-target="labInputTarget">Loading</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-input-state="invalid"
                                            data-w4-target="labInputTarget">Invalid</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-accent"
                                            data-w4-input-state="valid" data-w4-target="labInputTarget">Valid</button>
                                    </div>
                                </div>
                            </div>
                            <div id="inputJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">
&lt;input id=&quot;labInputTarget&quot; class=&quot;w4-input w4-input-primary&quot; placeholder=&quot;Input de prueba&quot;&gt;
&lt;button data-w4-input-state=&quot;enabled&quot; data-w4-target=&quot;labInputTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-input-state=&quot;readonly&quot; data-w4-target=&quot;labInputTarget&quot;&gt;Readonly&lt;/button&gt;
&lt;button data-w4-input-state=&quot;disabled&quot; data-w4-target=&quot;labInputTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-input-state=&quot;loading&quot; data-w4-target=&quot;labInputTarget&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-input-state=&quot;invalid&quot; data-w4-target=&quot;labInputTarget&quot;&gt;Invalid&lt;/button&gt;
&lt;button data-w4-input-state=&quot;valid&quot; data-w4-target=&quot;labInputTarget&quot;&gt;Valid&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al input de prueba y sincroniza sus hooks visuales.
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