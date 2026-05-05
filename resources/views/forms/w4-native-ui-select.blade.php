<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Select Lab</title>
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
        <div class="w4-section w4-section-xl">
            <h1 class="w4-hdg w4-hdg-h1 w4-hdg-primary w4-hdg-center mt-12">Native UI Select</h1>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Select:</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Select</strong> (lista desplegable) permite a los usuarios elegir una opción de
                una lista de valores predefinidos. Es ideal cuando el espacio es limitado y hay múltiples opciones
                disponibles, manteniendo la interfaz limpia.
            </p>
            <h2 class="w4-hdg w4-hdg-h3 w4-hdg-primary w4-hdg-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start">
                <li><strong class="w4-text-active">Selección de país o región:</strong> Elegir una ubicación de una
                    lista extensa de países.
                </li>
                <li><strong class="w4-text-active">Filtrado y ordenamiento:</strong> Cambiar el orden de visualización
                    de una tabla o lista
                    (ej. "Más recientes", "Precio menor a mayor").</li>
                <li><strong class="w4-text-active">Categorización:</strong> Asignar una categoría o estado a un elemento
                    (ej. Estado de una
                    tarea: "Pendiente", "En progreso", "Completada").</li>
                <li><strong class="w4-text-active">Configuraciones:</strong> Seleccionar temas, idiomas o preferencias
                    de visualización.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Variantes Semanticas</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Variantes de color para listas desplegables según contexto visual.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="selectSemanticPreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="selectSemanticCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="selectSemanticPreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-grid w4-grid-4 w4-grid-sm">
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select class="w4-select w4-select-primary">
                                <option>Primary</option>
                            </select></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select
                                class="w4-select w4-select-secondary">
                                <option>Secondary</option>
                            </select></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select class="w4-select w4-select-accent">
                                <option>Accent</option>
                            </select></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select class="w4-select w4-select-info">
                                <option>Info</option>
                            </select></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select class="w4-select w4-select-success">
                                <option>Success</option>
                            </select></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select class="w4-select w4-select-warning">
                                <option>Warning</option>
                            </select></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select class="w4-select w4-select-error">
                                <option>Error</option>
                            </select></div>
                        <div class="w4-panel w4-panel-base-200 w4-panel-sm"><select class="w4-select w4-select-ghost">
                                <option>Ghost</option>
                            </select></div>
                    </div>
                </div>
                <div id="selectSemanticCode" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm" hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;select class=&quot;w4-select w4-select-primary&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-secondary&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-accent&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-info&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-success&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-warning&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-error&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-ghost&quot;&gt;...&lt;/select&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Tamaños</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Escalas morfológicas del componente select de <code>xs</code> a <code>xl</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                <div class="w4-stack w4-stack-horizontal w4-stack-center">
                    <div class="w4-tabs w4-tabs-boxed" data-w4-component="tab">
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-primary w4-tab-active"
                            data-w4-target="selectSizePreview">Vista Previa</button>
                        <button type="button" class="w4-tab w4-tab-boxed w4-tab-secondary"
                            data-w4-target="selectSizeCode">Codigo HTML</button>
                    </div>
                </div>
                <div id="selectSizePreview" data-w4-tab-panel
                    class="w4-tab-content w4-panel w4-panel-base-100 w4-panel-sm">
                    <div class="w4-stack w4-stack-sm">
                        <select class="w4-select w4-select-xs">
                            <option>Select XS</option>
                        </select>
                        <select class="w4-select w4-select-sm">
                            <option>Select SM</option>
                        </select>
                        <select class="w4-select w4-select-md">
                            <option>Select MD</option>
                        </select>
                        <select class="w4-select w4-select-lg">
                            <option>Select LG</option>
                        </select>
                        <select class="w4-select w4-select-xl">
                            <option>Select XL</option>
                        </select>
                    </div>
                </div>
                <div id="selectSizeCode" data-w4-tab-panel class="w4-tab-content w4-panel w4-panel-base-200 w4-panel-sm"
                    hidden aria-hidden="true">
                    <pre class="m-0"><code class="w4-text w4-text-xs">&lt;select class=&quot;w4-select w4-select-xs&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-sm&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-md&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-lg&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-xl&quot;&gt;...&lt;/select&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">Casos de Uso Aplicados</h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Ejemplos reales para región, ordenamiento y estado de tareas.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-grid w4-grid-3 w4-grid-sm">
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="selectCountryDemo">País o región</label>
                    <select id="selectCountryDemo" class="w4-select">
                        <option>México</option>
                        <option>Colombia</option>
                        <option>Argentina</option>
                    </select>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="selectSortDemo">Ordenar resultados</label>
                    <select id="selectSortDemo" class="w4-select w4-select-primary">
                        <option>Más recientes</option>
                        <option>Más antiguos</option>
                        <option>Precio menor a mayor</option>
                    </select>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-sm">
                    <label class="w4-label" for="selectTaskDemo">Estado de tarea</label>
                    <select id="selectTaskDemo" class="w4-select w4-select-secondary">
                        <option>Pendiente</option>
                        <option>En progreso</option>
                        <option>Completada</option>
                    </select>
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
                                data-w4-target="selectStateClassPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="selectStateClassCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="selectStateClassPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <select class="w4-select w4-select-disabled">
                                        <option>Disabled</option>
                                    </select>
                                    <select class="w4-select w4-select-readonly">
                                        <option>Readonly</option>
                                    </select>
                                    <select class="w4-select w4-select-invalid">
                                        <option>Invalid</option>
                                    </select>
                                    <select class="w4-select w4-select-valid">
                                        <option>Valid</option>
                                    </select>
                                    <select class="w4-select w4-select-loading">
                                        <option>Loading</option>
                                    </select>
                                </div>
                            </div>
                            <div id="selectStateClassCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;select class=&quot;w4-select w4-select-disabled&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-readonly&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-invalid&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-valid&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select w4-select-loading&quot;&gt;...&lt;/select&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w4-panel w4-panel-base-100 w4-panel-md">
                    <h3 class="w4-hdg w4-hdg-h4 w4-hdg-primary w4-hdg-start">Por Atributo</h3>
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="selectStateAttrPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="selectStateAttrCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="selectStateAttrPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <select class="w4-select" data-w4-state="disabled">
                                        <option>disabled</option>
                                    </select>
                                    <select class="w4-select" data-w4-state="readonly">
                                        <option>readonly</option>
                                    </select>
                                    <select class="w4-select" data-w4-state="invalid">
                                        <option>invalid</option>
                                    </select>
                                    <select class="w4-select" data-w4-state="valid">
                                        <option>valid</option>
                                    </select>
                                    <select class="w4-select" data-w4-state="loading">
                                        <option>loading</option>
                                    </select>
                                </div>
                            </div>
                            <div id="selectStateAttrCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre class="m-0"><code class="w4-text w4-text-xs">&lt;select class=&quot;w4-select&quot; data-w4-state=&quot;disabled&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select&quot; data-w4-state=&quot;readonly&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select&quot; data-w4-state=&quot;invalid&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select&quot; data-w4-state=&quot;valid&quot;&gt;...&lt;/select&gt;
&lt;select class=&quot;w4-select&quot; data-w4-state=&quot;loading&quot;&gt;...&lt;/select&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-hdg w4-hdg-h2 w4-hdg-primary w4-hdg-start">
                Estados Nativos Javascript Soportados al Componente Select
            </h2>
            <p class="w4-text w4-text-lg w4-text-neutral">
                Controles para probar transiciones usando <code>data-w4-select-state</code> y
                <code>data-w4-target</code>.
            </p>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <p class="w4-text w4-text-sm w4-text-neutral">
                    Playground: aplica estados JS al select de prueba.
                </p>
                <div class="w4-stack w4-stack-md">
                    <div class="w4-stack w4-stack-sm w4-tab-lifted-content-panels">
                        <div class="w4-tabs w4-tabs-lifted" data-w4-component="tab">
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-primary w4-tab-active"
                                data-w4-target="selectJsPreview">Vista previa</button>
                            <button type="button" class="w4-tab w4-tab-lifted w4-tab-secondary"
                                data-w4-target="selectJsCode">Codigo HTML</button>
                        </div>
                        <div class="w4-stack w4-stack-sm">
                            <div id="selectJsPreview" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-100 w4-panel-sm">
                                <div class="w4-stack w4-stack-sm">
                                    <select id="labSelectTarget" class="w4-select w4-select-primary">
                                        <option value="">Selecciona una opción</option>
                                        <option value="one">Opción 1</option>
                                        <option value="two">Opción 2</option>
                                        <option value="three">Opción 3</option>
                                    </select>
                                    <div class="w4-stack w4-stack-horizontal w4-stack-wrap w4-stack-sm">
                                        <button type="button" class="w4-button w4-button-sm w4-button-neutral"
                                            data-w4-select-state="enabled"
                                            data-w4-target="labSelectTarget">Enabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-select-state="readonly"
                                            data-w4-target="labSelectTarget">Readonly</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-error"
                                            data-w4-select-state="disabled"
                                            data-w4-target="labSelectTarget">Disabled</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-info"
                                            data-w4-select-state="loading"
                                            data-w4-target="labSelectTarget">Loading</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-warning"
                                            data-w4-select-state="invalid"
                                            data-w4-target="labSelectTarget">Invalid</button>
                                        <button type="button" class="w4-button w4-button-sm w4-button-accent"
                                            data-w4-select-state="valid" data-w4-target="labSelectTarget">Valid</button>
                                    </div>
                                </div>
                            </div>
                            <div id="selectJsCode" data-w4-tab-panel
                                class="w4-tab-content w4-tab-lifted-content w4-panel w4-panel-base-200 w4-panel-sm"
                                hidden aria-hidden="true">
                                <pre
                                    class="m-0"><code class="w4-text w4-text-xs">&lt;select id=&quot;labSelectTarget&quot; class=&quot;w4-select w4-select-primary&quot;&gt;...&lt;/select&gt;
&lt;button data-w4-select-state=&quot;enabled&quot; data-w4-target=&quot;labSelectTarget&quot;&gt;Enabled&lt;/button&gt;
&lt;button data-w4-select-state=&quot;readonly&quot; data-w4-target=&quot;labSelectTarget&quot;&gt;Readonly&lt;/button&gt;
&lt;button data-w4-select-state=&quot;disabled&quot; data-w4-target=&quot;labSelectTarget&quot;&gt;Disabled&lt;/button&gt;
&lt;button data-w4-select-state=&quot;loading&quot; data-w4-target=&quot;labSelectTarget&quot;&gt;Loading&lt;/button&gt;
&lt;button data-w4-select-state=&quot;invalid&quot; data-w4-target=&quot;labSelectTarget&quot;&gt;Invalid&lt;/button&gt;
&lt;button data-w4-select-state=&quot;valid&quot; data-w4-target=&quot;labSelectTarget&quot;&gt;Valid&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <p class="w4-text w4-text-sm w4-text-neutral">
                        El estado se aplica al select de prueba y sincroniza sus hooks visuales.
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
            var mainSwitcher = document.getElementById("themeSwitcher");

            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";
            document.documentElement.setAttribute("data-theme", currentTheme);

            function updateTheme(theme) {
                document.documentElement.setAttribute("data-theme", theme);
                localStorage.setItem(storageKey, theme);
            }

            if (mainSwitcher) {
                mainSwitcher.value = currentTheme;
                mainSwitcher.addEventListener("change", function (event) {
                    updateTheme(event.target.value);
                });
            }
        });
    </script>
</body>

</html>