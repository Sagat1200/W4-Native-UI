<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Toggle Lab</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="w4-navbar w4-navbar-primary">
        <div class="w4-navbar-start">
            <button class="w4-button w4-button-ghost w4-button-square">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w4-icon w4-icon-md stroke-current">
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

    <main class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Toggle</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente de estado
                w4-toggle</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Toggle</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Toggle</strong> (interruptor) es un elemento visual que permite al usuario
                alternar entre dos estados opuestos, generalmente "encendido" y "apagado". Proporciona retroalimentación
                visual inmediata, similar a un interruptor de luz físico, y es ideal para ajustes de configuración que
                aplican cambios instantáneos.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
                <li><strong class="w4-text-active">Preferencias del sistema:</strong> Activar o desactivar
                    características globales como el
                    "Modo oscuro" o "Notificaciones push".</li>
                <li><strong class="w4-text-active">Configuraciones de privacidad:</strong> Controlar permisos rápidos,
                    como "Perfil público" o
                    "Compartir ubicación".</li>
                <li><strong class="w4-text-active">Filtros instantáneos:</strong> Alternar vistas o estados en tablas y
                    listas (ej. "Mostrar
                    solo elementos activos").</li>
                <li><strong class="w4-text-active">Funciones experimentales:</strong> Habilitar características beta en
                    paneles de
                    administración.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-6">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Default</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md w4-toggle-primary" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Primary</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md w4-toggle-secondary" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Secondary</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md w4-toggle-accent" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Accent</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md w4-toggle-info" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Info</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md w4-toggle-success" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Success</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md w4-toggle-warning" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Warning</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-md w4-toggle-error" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Error</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-5">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-xs" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">XS</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-sm" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">SM</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">MD</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-lg" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">LG</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-xl" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">XL</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Estados Pseudo-Classes</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-6">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md" />
                        <span class="w4-label w4-label-xs w4-text-muted">Unchecked</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md" checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Checked</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Data-States /
                Validation</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-5">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md w4-toggle-disabled"
                            checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Disabled</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md w4-toggle-readonly"
                            checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Readonly</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md w4-toggle-invalid" />
                        <span class="w4-label w4-label-xs w4-text-muted">Invalid (Error)</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md w4-toggle-valid" />
                        <span class="w4-label w4-label-xs w4-text-muted">Valid (Success)</span>
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md w4-toggle-loading"
                            checked />
                        <span class="w4-label w4-label-xs w4-text-muted">Loading</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración con Labels</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-3">

                    <!-- Label Right -->
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center w4-stack-start">
                        <label class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-primary w4-toggle-md" />
                            <span class="w4-label w4-label-primary w4-label-md">Activar Notificaciones</span>
                        </label>
                    </div>

                    <!-- Label Left -->
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center w4-stack-between">
                        <label class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center w4-stack-between">
                            <span class="w4-label w4-label-secondary w4-label-md">Modo Oscuro</span>
                            <input type="checkbox" class="w4-toggle w4-toggle-secondary w4-toggle-md" checked />
                        </label>
                    </div>

                    <!-- Label Required and Error -->
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center w4-stack-start w4-panel-outline-error">
                        <label class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center">
                            <input type="checkbox" class="w4-toggle w4-toggle-error w4-toggle-md w4-toggle-invalid" />
                            <span class="w4-label w4-label-md w4-label-error w4-label-required">Acepto compartir mis
                                datos</span>
                        </label>
                    </div>

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