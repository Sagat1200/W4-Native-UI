<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Radio Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Radio</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente de estado
                w4-radio</p>
        </div>

        <div class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Radio</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Radio</strong> (botón de opción) permite a los usuarios seleccionar una única
                opción de un conjunto mutuamente excluyente. A diferencia de los checkboxes, cuando se selecciona un
                radio button, cualquier otro botón previamente seleccionado en el mismo grupo se deselecciona
                automáticamente.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
                <li><strong class="w4-text-active">Selección de planes:</strong> Elegir un nivel de suscripción (Básico,
                    Pro, Enterprise).</li>
                <li><strong class="w4-text-active">Métodos de pago:</strong> Seleccionar una única forma de pago
                    (Tarjeta de crédito, PayPal,
                    Transferencia).</li>
                <li><strong class="w4-text-active">Preferencias únicas:</strong> Configurar opciones donde solo es
                    válida una respuesta, como
                    el género, rango de edad o idioma principal.</li>
                <li><strong class="w4-text-active">Encuestas o exámenes:</strong> Preguntas de opción múltiple donde
                    solo se admite una
                    respuesta correcta.</li>
            </ul>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-lg w4-stack-wrap">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-neutral">Default</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-primary">Primary</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-primary" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-secondary">Secondary</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-secondary" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-accent">Accent</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-accent" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-info">Info</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-info" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-success">Success</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-success" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-warning">Warning</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-warning" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-error">Error</span>
                        <input type="radio" name="semantic" class="w4-radio w4-radio-md w4-radio-error" checked />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-lg w4-stack-wrap">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">XS (1rem)</span>
                        <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-xs" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">SM (1.25rem)</span>
                        <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-sm" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">MD (1.5rem)</span>
                        <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-md" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">LG (2rem)</span>
                        <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-lg" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">XL (2.5rem)</span>
                        <input type="radio" name="sizes" class="w4-radio w4-radio-primary w4-radio-xl" checked />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Estados Pseudo-Classes</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-lg w4-stack-wrap">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">Unchecked</span>
                        <input type="radio" name="states" class="w4-radio w4-radio-primary w4-radio-md" />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">Checked</span>
                        <input type="radio" name="states" class="w4-radio w4-radio-primary w4-radio-md" checked />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Data-States /
                Validation</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-lg w4-stack-wrap">
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-text-center">Disabled<br>(.w4-radio-disabled)</span>
                        <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-disabled" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-text-center">Readonly<br>(.w4-radio-readonly)</span>
                        <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-readonly" checked />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-text-center">Invalid<br>(Border Error)</span>
                        <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-invalid" />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-text-center">Valid<br>(Border Success)</span>
                        <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-valid" />
                    </div>
                    <div
                        class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-text-center">Loading<br>(.w4-radio-loading)</span>
                        <input type="radio" class="w4-radio w4-radio-primary w4-radio-md w4-radio-loading" checked />
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración con Labels</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-lg w4-stack-wrap">

                    <!-- Radio Group Example -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-md w4-stack w4-stack-md w4-stack-vertical">
                        <span class="w4-heading w4-heading-h4 w4-heading-start">Selecciona un plan:</span>

                        <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center">
                            <input type="radio" id="rad_basic" name="plan"
                                class="w4-radio w4-radio-primary w4-radio-md" />
                            <label for="rad_basic" class="w4-label w4-label-md">Plan Básico</label>
                        </div>

                        <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center">
                            <input type="radio" id="rad_pro" name="plan" class="w4-radio w4-radio-primary w4-radio-md"
                                checked />
                            <label for="rad_pro" class="w4-label w4-label-primary w4-label-md w4-text-active">Plan
                                Profesional</label>
                        </div>

                        <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center">
                            <input type="radio" id="rad_ent" name="plan"
                                class="w4-radio w4-radio-primary w4-radio-md w4-radio-disabled" disabled />
                            <label for="rad_ent" class="w4-label w4-label-md w4-label-disabled">Plan Enterprise
                                (Próximamente)</label>
                        </div>
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