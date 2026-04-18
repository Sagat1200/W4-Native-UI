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

    <div id="navbar-badge" class="w4-navbar w4-navbar-primary">
        <div class="w4-navbar-start">
            <button class="w4-button w4-button-ghost w4-button-square mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <button class="w4-button w4-button-ghost">Native UI</button>
        </div>
        <div class="w4-navbar-center">
            <a href="#" class="w4-button w4-button-link w4-button-neutral">DOCUMENTACION</a>
        </div>
        <div class="w4-navbar-end">
            <div class="w4-stack w4-stack-xs mx-2">
                <select id="themeSwitcher" class="w4-select w4-select-xs w4-select-neutral">
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

    <main id="main-badge" class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Badge</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales</p>
        </div>

        <div id="description-badge" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Badge</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Badge es un pequeño indicador visual utilizado para resaltar metadatos, contadores,
                etiquetas de estado o atributos clave. Es altamente flexible y está diseñado para ser anidado dentro de
                otros componentes más grandes como botones, tarjetas o elementos de navegación.

            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-2">Casos de uso comunes:</h3>

            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2">
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

            <section id="example-badge-variant" class="w4-section w4-section-xl">
                <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color</h2>
                <hr class="w4-divider w4-divider-primary">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-stack w4-stack-horizontal w4-stack-md" style="flex-wrap: wrap;">
                        <div class="w4-badge w4-badge-primary">Primary</div>
                        <div class="w4-badge w4-badge-secondary">Secondary</div>
                        <div class="w4-badge w4-badge-accent">Accent</div>
                        <div class="w4-badge w4-badge-info">Info</div>
                        <div class="w4-badge w4-badge-success">Success</div>
                        <div class="w4-badge w4-badge-warning">Warning</div>
                        <div class="w4-badge w4-badge-error">Error</div>
                        <div class="w4-badge w4-badge-neutral">Neutral</div>
                    </div>
                </div>
            </section>

            <section id="example-badge-styles" class="w4-section w4-section-xl">
                <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Modificadores Estilísticos
                </h2>
                <hr class="w4-divider w4-divider-secondary">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-stack w4-stack-horizontal w4-stack-md" style="flex-wrap: wrap;">
                        <div class="w4-stack w4-stack-xs w4-stack-center">
                            <span class="w4-label w4-label-xs">Solid (Defecto)</span>
                            <div class="w4-badge w4-badge-primary">Solid</div>
                        </div>
                        <div class="w4-stack w4-stack-xs w4-stack-center">
                            <span class="w4-label w4-label-xs">Outline</span>
                            <div class="w4-badge w4-badge-primary w4-badge-outline">Outline</div>
                        </div>
                        <div class="w4-stack w4-stack-xs w4-stack-center">
                            <span class="w4-label w4-label-xs">Soft</span>
                            <div class="w4-badge w4-badge-primary w4-badge-soft">Soft</div>
                        </div>
                    </div>

                    <div class="w4-divider"></div>

                    <div class="w4-stack w4-stack-horizontal w4-stack-md" style="flex-wrap: wrap;">
                        <div class="w4-badge w4-badge-info w4-badge-soft">Info Soft</div>
                        <div class="w4-badge w4-badge-success w4-badge-soft">Success Soft</div>
                        <div class="w4-badge w4-badge-warning w4-badge-soft">Warning Soft</div>
                        <div class="w4-badge w4-badge-error w4-badge-soft">Error Soft</div>
                    </div>
                </div>
            </section>

            <section id="example-badge-sizes" class="w4-section w4-section-xl">
                <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Escalas de Tamaño</h2>
                <hr class="w4-divider w4-divider-accent">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                        <div class="w4-badge w4-badge-neutral w4-badge-xs">Extra Small (XS)</div>
                        <div class="w4-badge w4-badge-neutral w4-badge-sm">Small (SM)</div>
                        <div class="w4-badge w4-badge-neutral w4-badge-md">Medium (MD)</div>
                        <div class="w4-badge w4-badge-neutral w4-badge-lg">Large (LG)</div>
                        <div class="w4-badge w4-badge-neutral w4-badge-xl">Extra Large (XL)</div>
                    </div>
                </div>
            </section>

            <section id="example-badge-complex" class="w4-section w4-section-xl">
                <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Composición e Integración</h2>
                <hr class="w4-divider w4-divider-success">
                <div class="w4-panel w4-panel-base-200 w4-panel-md">
                    <div class="w4-grid w4-grid-2">

                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-label w4-label-sm">En Botones (Notificaciones)</span>
                            <button class="w4-button w4-button-primary">
                                Mensajes
                                <div class="w4-badge w4-badge-secondary w4-badge-sm">+99</div>
                            </button>
                        </div>

                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-label w4-label-sm">Como Etiquetas / Categorías</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-xs">
                                <span class="w4-text w4-text-md w4-text-neutral" style="font-weight: 600;">Artículo
                                    UI</span>
                                <div class="w4-badge w4-badge-info w4-badge-outline w4-badge-sm">Nuevo</div>
                            </div>
                        </div>

                        <div class="w4-stack w4-stack-xs">
                            <span class="w4-label w4-label-sm">Indicador de Estado</span>
                            <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center">
                                <div class="w4-badge w4-badge-success w4-badge-xs"
                                    style="padding-inline: 0; inline-size: 0.875rem;"></div>
                                <span class="w4-text w4-text-sm w4-text-neutral">Servidor Online</span>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

    </main>

    <section id="example-badge-states-css" class="w4-container w4-container-xl w4-section w4-section-xl"
        style="padding-block-end: 0;">
        <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados (CSS Classes & Atributos)</h2>
        <hr class="w4-divider w4-divider-error">
        <div class="w4-panel w4-panel-base-200 w4-panel-md">
            <div class="w4-stack w4-stack-horizontal w4-stack-md" style="flex-wrap: wrap; align-items: center;">
                <div class="w4-badge w4-badge-primary">Normal</div>
                <div class="w4-badge w4-badge-primary w4-badge-active">Active</div>
                <div class="w4-badge w4-badge-primary w4-badge-highlighted">Highlighted</div>
                <div class="w4-badge w4-badge-primary" disabled>Disabled (Attr)</div>
            </div>
        </div>
    </section>

    <section id="example-badge-states-js" class="w4-container w4-container-xl w4-section w4-section-xl">
        <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Estados JS Soportados (data-w4-state)
        </h2>
        <hr class="w4-divider w4-divider-success">
        <div class="w4-panel w4-panel-base-200 w4-panel-md">

            <div class="w4-stack w4-stack-md" style="flex-direction: column; align-items: flex-start;">

                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="inline-size: 100%;">
                    <div id="jsInteractiveBadge" class="w4-badge w4-badge-primary w4-badge-lg"
                        data-w4-component="badge">
                        <i class="w4-icon fa-solid fa-bell"></i>
                        <span>Dynamic JS Badge</span>
                    </div>

                    <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center"
                        style="flex-wrap: wrap; margin-inline-start: auto; border-inline-start: 1px solid hsl(var(--w4-base-300)); padding-inline-start: 1rem;">
                        <span class="w4-text w4-text-sm w4-text-neutral"
                            style="opacity: 0.7; margin-inline-end: 0.5rem;">Set State:</span>
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveBadge').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'active')">Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'highlighted')">Highlighted</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'disabled')">Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-neutral"
                            onclick="document.getElementById('jsInteractiveBadge').setAttribute('data-w4-state', 'hidden')">Hidden</button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    @NativeUIScripts
    @NativeUIInit
    @NativeUILivewire

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