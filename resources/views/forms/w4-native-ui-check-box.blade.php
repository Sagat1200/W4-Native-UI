<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Checkbox Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div id="navbar-checkbox" class="w4-navbar w4-navbar-primary">
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

    <main id="main-checkbox" class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Checkbox</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente de estado
                w4-checkbox</p>
        </div>

        <div id="description-checkbox" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Checkbox</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Checkbox</strong> permite a los usuarios seleccionar una o varias opciones de un
                conjunto, o alternar entre dos estados opuestos (como encendido/apagado). Es un elemento de formulario
                esencial para recopilar preferencias y confirmaciones.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-4">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem; list-style-type: disc;">
                <li><strong class="w4-text-active">Aceptación de términos:</strong> Para confirmar que el usuario ha
                    leído y aceptado los
                    términos y condiciones.</li>
                <li><strong class="w4-text-active">Selección múltiple:</strong> En listas de filtros o configuraciones
                    donde se pueden elegir
                    varias opciones simultáneamente.</li>
                <li><strong class="w4-text-active">Configuración de preferencias:</strong> Para activar o desactivar
                    características
                    específicas (ej. recibir notificaciones).</li>
                <li><strong class="w4-text-active">Tareas y listas:</strong> Marcar elementos como completados en una
                    lista de tareas
                    pendientes.</li>
            </ul>
        </div>

        <section id="example-checkbox-variant" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-neutral">Default</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-primary">Primary</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-primary" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-secondary">Secondary</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-secondary" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-accent">Accent</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-accent" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-info">Info</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-info" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-success">Success</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-success" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-warning">Warning</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-warning" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs w4-label-error">Error</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-md w4-checkbox-error" checked />
                    </div>
                </div>
            </div>
        </section>

        <section id="example-checkbox-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">XS (1rem)</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-xs" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">SM (1.25rem)</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-sm" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">MD (1.5rem)</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">LG (2rem)</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-lg" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">XL (2.5rem)</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-xl" checked />
                    </div>
                </div>
            </div>
        </section>

        <section id="example-checkbox-pseudo" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Estados Pseudo-Classes</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Unchecked</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Checked</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Indeterminate</span>
                        <input type="checkbox" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" id="indetCheck" />
                    </div>
                </div>
            </div>
        </section>

        <section id="example-checkbox-states" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Data-States /
                Validation</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Disabled<br>(.w4-checkbox-disabled)</span>
                        <input type="checkbox"
                            class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-disabled" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Readonly<br>(.w4-checkbox-readonly)</span>
                        <input type="checkbox"
                            class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-readonly" checked />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Invalid<br>(Border Error)</span>
                        <input type="checkbox"
                            class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-invalid" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Valid<br>(Border Success)</span>
                        <input type="checkbox"
                            class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-valid" />
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center"
                        style="box-shadow: var(--w4-shadow-sm);">
                        <span class="w4-label w4-label-xs">Loading<br>(.w4-checkbox-loading)</span>
                        <input type="checkbox"
                            class="w4-checkbox w4-checkbox-primary w4-checkbox-md w4-checkbox-loading" checked />
                    </div>
                </div>
            </div>
        </section>

        <section id="example-checkbox-integration" class="w4-section w4-section-xl" style="padding-block-end: 2rem;">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración con Labels</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">

                    <!-- Label Right -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md" style="box-shadow: var(--w4-shadow-sm);">
                        <div class="w4-stack w4-stack-horizontal w4-stack-sm" style="align-items: center;">
                            <input type="checkbox" id="chk1" class="w4-checkbox w4-checkbox-primary w4-checkbox-md" />
                            <label for="chk1" class="w4-label w4-label-primary w4-label-md"
                                style="cursor: pointer; margin: 0;">Aceptar
                                términos y
                                condiciones</label>
                        </div>
                    </div>

                    <!-- Label Left -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md" style="box-shadow: var(--w4-shadow-sm);">
                        <div class="w4-stack w4-stack-horizontal w4-stack-sm"
                            style="align-items: center; justify-content: space-between;">
                            <label for="chk2" class="w4-label w4-label-secondary w4-label-md"
                                style="cursor: pointer; margin: 0;">Recibir
                                notificaciones</label>
                            <input type="checkbox" id="chk2" class="w4-checkbox w4-checkbox-secondary w4-checkbox-md"
                                checked />
                        </div>
                    </div>

                    <!-- Label Required and Error -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md"
                        style="box-shadow: var(--w4-shadow-sm); border: 1px solid hsl(var(--w4-error));">
                        <div class="w4-stack w4-stack-horizontal w4-stack-sm" style="align-items: center;">
                            <input type="checkbox" id="chk3"
                                class="w4-checkbox w4-checkbox-error w4-checkbox-md w4-checkbox-invalid" />
                            <label for="chk3" class="w4-label w4-label-md w4-label-error w4-label-required"
                                style="cursor: pointer; margin: 0;">Acepto la política de privacidad</label>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

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

            // Set indeterminate state for the specific checkbox
            document.getElementById("indetCheck").indeterminate = true;
        });
    </script>
</body>

</html>