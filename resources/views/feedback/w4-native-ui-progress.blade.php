<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Progress Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div id="navbar-progress" class="w4-navbar w4-navbar-primary">
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

    <main id="main-progress" class="w4-container w4-container-xl">

        <div style="margin-block-start: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Progress</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente de estado
                w4-progress</p>
        </div>

        <div id="description-progress" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Progress</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Progress estiliza la etiqueta nativa <code>&lt;progress&gt;</code> de HTML5. Se utiliza
                para visualizar el estado de avance de una operación extensa (como una descarga o un flujo de pasos
                múltiples), ofreciendo tanto estados determinados (porcentajes) como indeterminados (animación de carga
                continua).
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-4">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem; list-style-type: disc;">
                <li><strong class="w4-text-active">Subida/Descarga de archivos:</strong> Mostrar el porcentaje exacto de
                    un archivo que se está procesando usando el atributo <code>value</code>.</li>
                <li><strong class="w4-text-active">Wizards y Formularios por pasos:</strong> Indicar en qué paso se
                    encuentra el usuario dentro de un flujo largo.</li>
                <li><strong class="w4-text-active">Carga de aplicaciones:</strong> Usar el estado indeterminado
                    (removiendo el atributo value) durante el enrutamiento inicial o carga de datos pesados.</li>
                <li><strong class="w4-text-active">Cuotas y límites:</strong> Representar visualmente el uso de
                    almacenamiento de una cuenta (cambiando a color Warning o Error al acercarse al 100%).</li>
            </ul>
        </div>

        <section id="example-progress-variant" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress" value="0" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-neutral">Default (0%)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-primary" value="10" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-primary">Primary (10%)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-secondary" value="25" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-secondary">Secondary (25%)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-accent" value="40" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-accent">Accent (40%)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-info" value="55" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-info">Info (55%)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-success" value="70" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-success">Success (70%)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-warning" value="85" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-warning">Warning (85%)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-error" value="100" max="100"></progress>
                        <span class="w4-label w4-label-xs w4-label-error">Error (100%)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-progress-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-primary w4-progress-xs" value="40"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs">XS (0.25rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-primary w4-progress-sm" value="50"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs">SM (0.375rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-primary w4-progress-md" value="60"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs">MD (0.5rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-primary w4-progress-lg" value="70"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs">LG (0.75rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-primary w4-progress-xl" value="80"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs">XL (1rem)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-progress-indeterminate" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Indeterminate / Loading State</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 250px;">
                        <progress class="w4-progress w4-progress-primary w4-progress-indeterminate"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs text-center">Indeterminate
                            Class<br>(.w4-progress-indeterminate)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 250px;">
                        <progress class="w4-progress w4-progress-secondary" max="100"
                            data-w4-state="loading"></progress>
                        <span class="w4-label w4-label-xs text-center">Data State<br>(data-w4-state="loading")</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 250px;">
                        <progress class="w4-progress w4-progress-accent" max="100"></progress>
                        <span class="w4-label w4-label-xs text-center">HTML Attribute<br>(No value attribute)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-progress-states" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Data-States</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-success" value="50" max="100"></progress>
                        <span class="w4-label w4-label-xs">Normal</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-success w4-progress-active" value="50"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs text-center">Active<br>(.w4-progress-active)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-success w4-progress-disabled" value="50"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs text-center">Disabled<br>(.w4-progress-disabled)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <progress class="w4-progress w4-progress-success w4-progress-hidden" value="50"
                            max="100"></progress>
                        <span class="w4-label w4-label-xs text-center">Hidden<br>(.w4-progress-hidden)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-progress-integration" class="w4-section w4-section-xl" style="padding-block-end: 2rem;">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración Dinámica (JS)</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-md" style="flex-direction: column; align-items: center;">
                    <div class="w4-panel w4-panel-base-100 w4-panel-md"
                        style="box-shadow: var(--w4-shadow-md); inline-size: 100%; max-inline-size: 400px; margin-block-end: 1.5rem;">
                        <div class="w4-stack w4-stack-xs">
                            <progress id="jsProgressBar" class="w4-progress w4-progress-primary w4-progress-lg"
                                value="0" max="100"></progress>
                            <div
                                style="display: flex; justify-content: space-between; margin-block-top: 0.5rem; inline-size: 100%;">
                                <span class="w4-text w4-text-sm"
                                    style="color: hsl(var(--w4-base-content) / 0.7)">Descargando archivos...</span>
                                <span id="jsProgressText" class="w4-text w4-text-sm" style="font-weight: 700;">0%</span>
                            </div>
                        </div>
                    </div>

                    <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center" style="flex-wrap: wrap;">
                        <button class="w4-button w4-button-sm w4-button-outline" onclick="simulateProgress()">Simular
                            Descarga</button>
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-error"
                            onclick="resetProgress()">Reset</button>
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-warning"
                            onclick="toggleIndeterminate()">Alternar Indeterminado</button>
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-secondary"
                            onclick="toggleDisabled()">Alternar Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-neutral"
                            onclick="toggleHidden()">Alternar Hidden</button>
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

        // Simulador de Progreso
        let progressInterval;
        function simulateProgress() {
            const bar = document.getElementById('jsProgressBar');
            const text = document.getElementById('jsProgressText');

            bar.removeAttribute('data-w4-state');
            if (!bar.hasAttribute('value')) bar.setAttribute('value', '0');

            clearInterval(progressInterval);
            let val = parseInt(bar.getAttribute('value') || 0);

            if (val >= 100) {
                val = 0;
            }

            bar.className = "w4-progress w4-progress-primary w4-progress-lg w4-progress-active";

            progressInterval = setInterval(() => {
                val += Math.floor(Math.random() * 10) + 1;
                if (val >= 100) {
                    val = 100;
                    clearInterval(progressInterval);
                    bar.className = "w4-progress w4-progress-success w4-progress-lg";
                }
                bar.setAttribute('value', val);
                text.innerText = val + '%';
            }, 300);
        }

        function resetProgress() {
            clearInterval(progressInterval);
            const bar = document.getElementById('jsProgressBar');
            const text = document.getElementById('jsProgressText');
            bar.className = "w4-progress w4-progress-primary w4-progress-lg";
            bar.setAttribute('value', '0');
            bar.removeAttribute('data-w4-state');
            text.innerText = '0%';
        }

        function toggleIndeterminate() {
            clearInterval(progressInterval);
            const bar = document.getElementById('jsProgressBar');
            const text = document.getElementById('jsProgressText');

            if (bar.hasAttribute('data-w4-state') && bar.getAttribute('data-w4-state') === 'indeterminate') {
                bar.removeAttribute('data-w4-state');
                bar.setAttribute('value', '0');
                text.innerText = '0%';
                bar.className = "w4-progress w4-progress-primary w4-progress-lg";
            } else {
                bar.setAttribute('data-w4-state', 'indeterminate');
                bar.removeAttribute('value');
                text.innerText = 'Cargando...';
                bar.className = "w4-progress w4-progress-primary w4-progress-lg";
            }
        }

        function toggleDisabled() {
            clearInterval(progressInterval);
            const bar = document.getElementById('jsProgressBar');
            const text = document.getElementById('jsProgressText');

            if (bar.hasAttribute('data-w4-state') && bar.getAttribute('data-w4-state') === 'disabled') {
                bar.removeAttribute('data-w4-state');
                bar.className = "w4-progress w4-progress-primary w4-progress-lg";
                text.innerText = bar.getAttribute('value') ? bar.getAttribute('value') + '%' : '0%';
            } else {
                bar.setAttribute('data-w4-state', 'disabled');
                bar.className = "w4-progress w4-progress-primary w4-progress-lg w4-progress-disabled";
                text.innerText = 'Pausado / Deshabilitado';
            }
        }

        function toggleHidden() {
            const barContainer = document.getElementById('jsProgressBar').parentElement;

            if (barContainer.style.display === 'none') {
                barContainer.style.display = 'flex';
                barContainer.style.flexDirection = 'column';
            } else {
                barContainer.style.display = 'none';
            }
        }
    </script>
</body>

</html>