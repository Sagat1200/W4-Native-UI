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
            <div class="w4-stack w4-stack-xs">
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Select</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente w4-select
            </p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Select</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Select</strong> (lista desplegable) permite a los usuarios elegir una opción de
                una lista de valores predefinidos. Es ideal cuando el espacio es limitado y hay múltiples opciones
                disponibles, manteniendo la interfaz limpia.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
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
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-6">

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-neutral">Default</label>
                        <select class="w4-select w4-select-md">
                            <option disabled selected>Selecciona una opción</option>
                            <option>Homer Simpson</option>
                            <option>Marge Simpson</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-primary">Primary</label>
                        <select class="w4-select w4-select-md w4-select-primary">
                            <option disabled selected>Opción Principal</option>
                            <option>Iron Man</option>
                            <option>Spider-Man</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-secondary">Secondary</label>
                        <select class="w4-select w4-select-md w4-select-secondary">
                            <option disabled selected>Opción Secundaria</option>
                            <option>Batman</option>
                            <option>Superman</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-accent">Accent</label>
                        <select class="w4-select w4-select-md w4-select-accent">
                            <option disabled selected>Dato Resaltado</option>
                            <option>Flash</option>
                            <option>Aquaman</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-info">Info</label>
                        <select class="w4-select w4-select-md w4-select-info">
                            <option disabled selected>Información</option>
                            <option>Documento PDF</option>
                            <option>Hoja de Cálculo</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-success">Success</label>
                        <select class="w4-select w4-select-md w4-select-success">
                            <option disabled selected>Acción Exitosa</option>
                            <option>Guardar y Continuar</option>
                            <option>Solo Guardar</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-warning">Warning</label>
                        <select class="w4-select w4-select-md w4-select-warning">
                            <option disabled selected>Precaución</option>
                            <option>Sobrescribir</option>
                            <option>Ignorar</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <label class="w4-label w4-label-error">Error</label>
                        <select class="w4-select w4-select-md w4-select-error">
                            <option disabled selected>Selección de Error</option>
                            <option>Forzar Borrado</option>
                            <option>Eliminar Todo</option>
                        </select>
                    </div>

                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Especiales</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Ghost (Fondo transparente)</span>
                        <select class="w4-select w4-select-md w4-select-ghost">
                            <option disabled selected>Select Ghost...</option>
                            <option>Opción 1</option>
                            <option>Opción 2</option>
                        </select>
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
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">XS (0.75rem)</span>
                        <select class="w4-select w4-select-primary w4-select-xs">
                            <option disabled selected>Tamaño XS</option>
                            <option>Pequeño 1</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">SM (0.875rem)</span>
                        <select class="w4-select w4-select-primary w4-select-sm">
                            <option disabled selected>Tamaño SM</option>
                            <option>Pequeño 2</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">MD (0.875rem)</span>
                        <select class="w4-select w4-select-primary w4-select-md">
                            <option disabled selected>Tamaño MD (Default)</option>
                            <option>Normal</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">LG (1.125rem)</span>
                        <select class="w4-select w4-select-primary w4-select-lg">
                            <option disabled selected>Tamaño LG</option>
                            <option>Grande</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">XL (1.25rem)</span>
                        <select class="w4-select w4-select-primary w4-select-xl">
                            <option disabled selected>Tamaño XL</option>
                            <option>Muy Grande</option>
                        </select>
                    </div>

                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Atributos HTML</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Normal</span>
                        <select class="w4-select w4-select-md">
                            <option disabled selected>Select normal...</option>
                            <option>A</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Focus (.w4-select-focus)</span>
                        <select class="w4-select w4-select-md w4-select-focus">
                            <option disabled selected>Foco simulado...</option>
                            <option>B</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Disabled</span>
                        <select class="w4-select w4-select-md w4-select-disabled" disabled>
                            <option disabled selected>No puedes elegir</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Readonly</span>
                        <select class="w4-select w4-select-md w4-select-readonly" readonly>
                            <option disabled selected>Solo lectura...</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Invalid</span>
                        <select class="w4-select w4-select-md w4-select-invalid">
                            <option disabled selected>Selección inválida</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Valid</span>
                        <select class="w4-select w4-select-md w4-select-valid">
                            <option disabled selected>Selección válida</option>
                        </select>
                    </div>

                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-start">
                        <span class="w4-label w4-label-xs w4-text-muted">Loading</span>
                        <select class="w4-select w4-select-md w4-select-loading">
                            <option disabled selected>Cargando opciones...</option>
                        </select>
                    </div>

                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración con Label y Helper Text
            </h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">

                    <!-- Caso de Uso 1: Éxito -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label for="country" class="w4-label w4-label-md w4-label-required">País de Residencia</label>
                        <select id="country" class="w4-select w4-select-md w4-select-valid">
                            <option disabled>Selecciona tu país</option>
                            <option selected>México</option>
                            <option>Colombia</option>
                            <option>España</option>
                            <option>Argentina</option>
                        </select>
                        <span class="w4-helper-text w4-helper-text-sm w4-helper-text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            País verificado.
                        </span>
                    </div>

                    <!-- Caso de Uso 2: Error -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label for="role" class="w4-label w4-label-md w4-label-error w4-label-required">Rol de
                            Usuario</label>
                        <select id="role" class="w4-select w4-select-md w4-select-invalid">
                            <option disabled selected>Selecciona un rol</option>
                            <option>Administrador</option>
                            <option>Editor</option>
                            <option>Lector</option>
                        </select>
                        <span class="w4-field-error w4-field-error-sm w4-field-error-error">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Debes seleccionar un rol válido.
                        </span>
                    </div>

                    <!-- Caso de Uso 3: Normal con helper -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label for="secondaryThemeSwitcher" class="w4-label w4-label-md">Preferencia de Tema</label>
                        <select id="secondaryThemeSwitcher" class="w4-select w4-select-md">
                            <option disabled selected>Por defecto del sistema</option>
                            <option value="native-ui.light">Light</option>
                            <option value="native-ui.dark">Dark</option>
                            <option value="native-ui.corporate">Corporate</option>
                        </select>
                        <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted">
                            Esta configuración solo afectará a tu cuenta en este dispositivo.
                        </span>
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
            var mainSwitcher = document.getElementById("themeSwitcher");
            var secondarySwitcher = document.getElementById("secondaryThemeSwitcher");

            var currentTheme = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native-ui.light";
            document.documentElement.setAttribute("data-theme", currentTheme);

            function updateTheme(theme) {
                document.documentElement.setAttribute("data-theme", theme);
                localStorage.setItem(storageKey, theme);

                // Sync both selects if they exist
                if (mainSwitcher) mainSwitcher.value = theme;
                if (secondarySwitcher) secondarySwitcher.value = theme;
            }

            if (mainSwitcher) {
                mainSwitcher.value = currentTheme;
                mainSwitcher.addEventListener("change", function (event) {
                    updateTheme(event.target.value);
                });
            }

            if (secondarySwitcher) {
                secondarySwitcher.value = currentTheme;
                secondarySwitcher.addEventListener("change", function (event) {
                    updateTheme(event.target.value);
                });
            }
        });
    </script>
</body>

</html>