<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Alert Lab</title>
    @NativeUIStyles
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="navbar-alert" class="w4-navbar w4-navbar-primary">
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

    <main id="main-alert" class="w4-container w4-container-xl">
        <div>
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Alert</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales</p>
        </div>

        <div id="description-alert" class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Alert</h1>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Alert es un elemento de retroalimentación visual diseñado para comunicar información
                importante, cambios de estado o advertencias críticas al usuario sin interrumpir su flujo de trabajo
                principal.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-2">Casos de uso comunes:</h3>

            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2">
                <li><strong class="w4-text-active">Feedback de sistema:</strong> Notificar sobre el éxito de una
                    operación ("Guardado exitosamente") o un error crítico.</li>
                <li><strong class="w4-text-active">Anuncios informativos:</strong> Informar sobre nuevas
                    características, actualizaciones del sistema o mantenimientos programados.</li>
                <li><strong class="w4-text-active">Validación de formularios:</strong> Agrupar errores de validación en
                    la parte superior de un formulario extenso.</li>
                <li><strong class="w4-text-active">Banner global:</strong> Fijarlo en la parte superior del Layout
                    principal para alertas a nivel de aplicación usando las variantes de tamaño y color sólido.</li>
            </ul>

        </div>

        <section id="example-alert-variant" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color (Soft por
                defecto)</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-4">
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-neutral">Neutral</label>
                        <div class="w4-alert w4-alert-neutral">
                            <i class="w4-icon fa-solid fa-bell"></i>
                            <span>Mensaje de sistema neutral.</span>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-primary">Primary</label>
                        <div class="w4-alert w4-alert-primary">
                            <i class="w4-icon fa-solid fa-star"></i>
                            <span>Alerta destacada primaria.</span>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-secondary">Secondary</label>
                        <div class="w4-alert w4-alert-secondary">
                            <i class="w4-icon fa-solid fa-star"></i>
                            <span>Alerta destacada segunda.</span>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-accent">Accent</label>
                        <div class="w4-alert w4-alert-accent">
                            <i class="w4-icon fa-solid fa-star"></i>
                            <span>Alerta destacada accent.</span>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-info">Info</label>
                        <div class="w4-alert w4-alert-info">
                            <i class="w4-icon fa-solid fa-circle-info"></i>
                            <span>Nueva actualización disponible.</span>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-success">Success</label>
                        <div class="w4-alert w4-alert-success">
                            <i class="w4-icon fa-solid fa-check-circle"></i>
                            <span>Los cambios se guardaron correctamente.</span>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-warning">Warning</label>
                        <div class="w4-alert w4-alert-warning">
                            <i class="w4-icon fa-solid fa-triangle-exclamation"></i>
                            <span>Tu contraseña caduca en 3 días.</span>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs">
                        <label class="w4-label w4-label-error">Error</label>
                        <div class="w4-alert w4-alert-error">
                            <i class="w4-icon fa-solid fa-circle-xmark"></i>
                            <span>Error de conexión con el servidor.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-alert-styles" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Modificadores Estilísticos</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <h4 class="w4-heading w4-heading-h4 w4-heading-primary w4-heading-start">Solid (Fondo Sólido)</h4>
                <div class="w4-grid w4-grid-3 mt-2">
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-stack-xs">
                            <div class="w4-alert w4-alert-info w4-alert-solid">
                                <i class="w4-icon fa-solid fa-radiation"></i>
                                <span>Alerta crítica de alta visibilidad.</span>
                            </div>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-stack-xs">
                            <div class="w4-alert w4-alert-warning w4-alert-solid">
                                <i class="w4-icon fa-solid fa-radiation"></i>
                                <span>Alerta crítica de alta visibilidad.</span>
                            </div>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-stack-xs">
                            <div class="w4-alert w4-alert-error w4-alert-solid">
                                <i class="w4-icon fa-solid fa-radiation"></i>
                                <span>Alerta crítica de alta visibilidad.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="w4-heading w4-heading-h4 w4-heading-primary w4-heading-start mt-6">Outline (Solo Borde)</h4>
                <div class="w4-grid w4-grid-3 mt-2">
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-stack-xs">
                            <div class="w4-alert w4-alert-info w4-alert-outline">
                                <i class="w4-icon fa-solid fa-circle-info"></i>
                                <span class="w4-text w4-text-neutral">Alerta sutil con bordes delineados.</span>
                            </div>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-stack-xs">
                            <div class="w4-alert w4-alert-warning w4-alert-outline">
                                <i class="w4-icon fa-solid fa-circle-info"></i>
                                <span class="w4-text w4-text-neutral">Alerta sutil con bordes delineados.</span>
                            </div>
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-md">
                        <div class="w4-stack w4-stack-xs">
                            <div class="w4-alert w4-alert-error w4-alert-outline">
                                <i class="w4-icon fa-solid fa-circle-info"></i>
                                <span class="w4-text w4-text-neutral">Alerta sutil con bordes delineados.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="example-alert-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Escalas de Tamaño</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-md">
                    <div class="w4-alert w4-alert-primary w4-alert-xs">
                        <i class="w4-icon fa-solid fa-info"></i>
                        <span>Alerta extra pequeña (XS)</span>
                    </div>
                    <div class="w4-alert w4-alert-primary w4-alert-sm">
                        <i class="w4-icon fa-solid fa-info"></i>
                        <span>Alerta pequeña (SM)</span>
                    </div>
                    <div class="w4-alert w4-alert-primary w4-alert-md">
                        <i class="w4-icon fa-solid fa-info"></i>
                        <span>Alerta mediana por defecto (MD)</span>
                    </div>
                    <div class="w4-alert w4-alert-primary w4-alert-lg">
                        <i class="w4-icon fa-solid fa-info"></i>
                        <span>Alerta grande (LG)</span>
                    </div>
                    <div class="w4-alert w4-alert-primary w4-alert-xl">
                        <i class="w4-icon fa-solid fa-info"></i>
                        <span>Alerta extra grande (XL)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-alert-complex" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Composición Avanzada con Stacks
            </h2>
            <hr class="w4-divider w4-divider-success">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-alert w4-alert-warning w4-alert-solid">
                    <i class="w4-icon fa-solid fa-shield-halved w4-text-xl"></i>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical">
                        <h4 class="font-bold">Actualización de
                            Seguridad</h4>
                        <p class="font-semibold">Es necesario reiniciar el sistema para aplicar
                            los últimos parches de seguridad.</p>
                    </div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-sm" style="margin-inline-start: auto;">
                        <button class="w4-button w4-button-sm w4-button-ghost">Posponer</button>
                        <button class="w4-button w4-button-sm w4-button-neutral">Reiniciar Ahora</button>
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