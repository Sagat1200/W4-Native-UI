<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Helper Text Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Example icons */
        .icon-sm {
            inline-size: 16px;
            block-size: 16px;
        }
    </style>
</head>

<body>

    <div id="navbar-helper-text" class="w4-navbar w4-navbar-primary">
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

    <main id="main-helper-text" class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Helper Text</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para textos de ayuda
                (w4-helper-text)</p>
        </div>

        <div id="description-helper-text" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Helper Text</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Helper Text</strong> proporciona contexto adicional o instrucciones breves debajo
                de los elementos de formulario. Ayuda a guiar al usuario indicando el formato esperado, restricciones o
                aclarando el propósito de un campo antes de que interactúen con él.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
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
        </div>

        <section id="example-helper-text-variant" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text">Escribe tu nombre completo.</span>
                        <span class="w4-label w4-label-xs w4-label-neutral" style="margin-block-start: auto;">Default
                            (Base Content + Opacity)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-primary">Texto de ayuda primario.</span>
                        <span class="w4-label w4-label-xs w4-label-primary"
                            style="margin-block-start: auto;">Primary</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-secondary">Información adicional.</span>
                        <span class="w4-label w4-label-xs w4-label-secondary"
                            style="margin-block-start: auto;">Secondary</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-accent">Dato importante a considerar.</span>
                        <span class="w4-label w4-label-xs w4-label-accent"
                            style="margin-block-start: auto;">Accent</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-info">La contraseña debe ser alfanumérica.</span>
                        <span class="w4-label w4-label-xs w4-label-info" style="margin-block-start: auto;">Info</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-success">Usuario disponible.</span>
                        <span class="w4-label w4-label-xs w4-label-success"
                            style="margin-block-start: auto;">Success</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-warning">Este campo es sensible.</span>
                        <span class="w4-label w4-label-xs w4-label-warning"
                            style="margin-block-start: auto;">Warning</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-error">No compartas esta clave.</span>
                        <span class="w4-label w4-label-xs w4-label-error" style="margin-block-start: auto;">Error</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-helper-text-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-xs">Ayuda tamaño XS (0.75rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">XS</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-sm">Ayuda tamaño SM (0.875rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">SM (Default)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-md">Ayuda tamaño MD (1rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">MD</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-lg">Ayuda tamaño LG (1.125rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">LG</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-xl">Ayuda tamaño XL (1.25rem)</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">XL</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-helper-text-states" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Estados CSS / Opacidad</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text">Texto de ayuda normal (80% opacidad).</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Normal (Default)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-muted">Texto de ayuda atenuado (65% opacidad).</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Muted
                            (.w4-helper-text-muted)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-active">Texto de ayuda resaltado (100%
                            opacidad).</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Active
                            (.w4-helper-text-active)</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-disabled">Texto de ayuda deshabilitado (45%
                            opacidad).</span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Disabled
                            (.w4-helper-text-disabled)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-helper-text-icons" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Con Íconos (Inline Flex Gap)</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: 1fr; gap: 1.5rem;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-info">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Asegúrate de usar letras mayúsculas y minúsculas.
                        </span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Info with SVG Icon</span>
                    </div>
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical">
                        <span class="w4-helper-text w4-helper-text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-sm" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            La visibilidad de tu perfil cambiará a pública.
                        </span>
                        <span class="w4-label w4-label-xs" style="margin-block-start: auto;">Warning with SVG
                            Icon</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-helper-text-integration" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración con Input de Formulario
            </h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid" style="grid-template-columns: 1fr; gap: 1.5rem;">
                    <!-- Field Group Example -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-xs w4-stack-vertical">
                        <label class="w4-label w4-label-md">Nombre de Usuario</label>
                        <input type="text" placeholder="ej. w4_admin"
                            class="w4-input w4-input-md w4-input-bordered w4-input-primary" />
                        <span class="w4-helper-text w4-helper-text-sm w4-helper-text-muted">
                            Este será el nombre visible públicamente en tu perfil. No utilices caracteres especiales.
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