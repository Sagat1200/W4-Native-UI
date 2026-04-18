<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Field Error Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Example icons for field errors */
        .icon-sm {
            inline-size: 16px;
            block-size: 16px;
        }
    </style>
</head>

<body>

    <div id="navbar-field-error" class="w4-navbar w4-navbar-primary">
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

    <main id="main-field-error" class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Field Error</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para mensajes de validación
                (w4-field-error)</p>
        </div>

        <div id="description-field-error" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Field Error</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Field Error</strong> se utiliza para mostrar mensajes de validación o
                retroalimentación contextual asociados directamente a un campo de formulario específico. Ayuda a los
                usuarios a identificar y corregir errores de entrada de datos de forma clara y accesible.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-4">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem; list-style-type: disc;">
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
        </div>

        <section id="example-field-error-variant" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error">Este campo es requerido.</span>
                        <span class="w4-label w4-label-xs w4-label-neutral" style="margin-block-start: auto;">Default
                            (Inherit Error)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-primary">Información principal necesaria.</span>
                        <span class="w4-label w4-label-xs w4-label-primary"
                            style="margin-block-start: auto;">Primary</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-secondary">Sugerencia secundaria.</span>
                        <span class="w4-label w4-label-xs w4-label-secondary"
                            style="margin-block-start: auto;">Secondary</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-accent">Atención requerida.</span>
                        <span class="w4-label w4-label-xs w4-label-accent"
                            style="margin-block-start: auto;">Accent</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-info">La contraseña debe tener 8 caracteres.</span>
                        <span class="w4-label w4-label-xs w4-label-info" style="margin-block-start: auto;">Info</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-success">¡Nombre de usuario disponible!</span>
                        <span class="w4-label w4-label-xs w4-label-success"
                            style="margin-block-start: auto;">Success</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-warning">El correo parece no ser corporativo.</span>
                        <span class="w4-label w4-label-xs w4-label-warning"
                            style="margin-block-start: auto;">Warning</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-error">El formato de email es inválido.</span>
                        <span class="w4-label w4-label-xs w4-label-error" style="margin-block-start: auto;">Error
                            (Explicit)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-field-error-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-xs">Error tamaño XS (0.75rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">XS</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-sm">Error tamaño SM (0.875rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">SM (Default general)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-md">Error tamaño MD (1rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">MD</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-lg">Error tamaño LG (1.125rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">LG</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-xl">Error tamaño XL (1.25rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">XL</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-field-error-icons" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Con Íconos (Inline Flex Gap)</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: 1fr; gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start;">
                        <span class="w4-field-error w4-field-error-error">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            La contraseña ingresada no coincide con nuestros registros.
                        </span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Error with SVG Icon</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start;">
                        <span class="w4-field-error w4-field-error-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Cambios guardados correctamente.
                        </span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Success with SVG
                            Icon</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-field-error-states" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Data-States</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error">Estado normal del mensaje.</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Normal</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-active">Estado activo (Más negrita).</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Active
                            (.w4-field-error-active)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <span class="w4-field-error w4-field-error-disabled">Mensaje deshabilitado (Opaco).</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Disabled
                            (.w4-field-error-disabled)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical"
                        style="box-shadow: var(--w4-shadow-sm); align-items: flex-start; justify-content: space-between; block-size: 100%;">
                        <p class="w4-text w4-text-sm w4-text-neutral" style="margin: 0;">
                            Texto antes del error... <span class="w4-field-error w4-field-error-inline">Error en
                                línea</span> ...texto después.
                        </p>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Inline
                            (.w4-field-error-inline)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-field-error-integration" class="w4-section w4-section-xl" style="padding-block-end: 2rem;">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración con Input de Formulario
            </h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: 1fr; gap: 1.5rem;">
                    <!-- Field Group Example -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical"
                        style="max-inline-size: 400px; box-shadow: var(--w4-shadow-sm);">
                        <label class="w4-label w4-label-md" style="font-weight: 500;">Correo Electrónico</label>
                        <input type="text" value="usuario@invalido"
                            class="w4-input w4-input-error w4-input-md w4-input-bordered" style="inline-size: 100%;" />
                        <span class="w4-field-error w4-field-error-sm w4-field-error-error"
                            style="margin-block-start: 0.25rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            El dominio del correo no está permitido.
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