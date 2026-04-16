<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Progress Lab</title>
    @NativeUIStyles
    <style>
        body {
            background-color: hsl(var(--w4-base-200));
            color: hsl(var(--w4-base-content));
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin: 0;
            padding: 2rem;
            min-block-size: 100vh;
        }

        .lab-container {
            max-inline-size: 1200px;
            margin: 0 auto;
            background-color: hsl(var(--w4-base-100));
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .lab-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-block-end: 1px solid hsl(var(--w4-base-300));
            padding-block-end: 1.5rem;
        }

        .lab-title {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }

        .lab-subtitle {
            margin: 0.5rem 0 0 0;
            color: hsl(var(--w4-base-content) / 0.7);
        }

        .theme-selector-wrapper {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .theme-selector {
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 1px solid hsl(var(--w4-base-300));
            background-color: hsl(var(--w4-base-100));
            color: hsl(var(--w4-base-content));
            font-size: 1rem;
            min-inline-size: 200px;
        }

        .section-title {
            margin: 0 0 1rem 0;
            font-size: 1.5rem;
            font-weight: 600;
            border-inline-start: 4px solid hsl(var(--w4-primary));
            padding-inline-start: 0.75rem;
        }

        .preview-group {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 2rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            align-items: center;
            justify-content: center;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            background-color: hsl(var(--w4-base-100));
            padding: 1.5rem;
            border-radius: var(--w4-radius-card);
            box-shadow: var(--w4-shadow-sm);
            min-inline-size: 120px;
            text-align: center;
            inline-size: 100%;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Progress Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente de estado w4-progress</p>
            </div>

            <div class="theme-selector-wrapper">
                <label for="themeSwitcher" style="font-weight: 600; font-size: 0.875rem;">Cambiar Tema:</label>
                <select id="themeSwitcher" class="theme-selector">
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
        </header>

        <section style="margin-block-end: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Progress</h1>
            <p class="w4-text w4-text-lg w4-text-neutral" style="margin-block-start: 1rem;">
                El componente Progress estiliza la etiqueta nativa <code>&lt;progress&gt;</code> de HTML5. Se utiliza
                para visualizar el estado de avance de una operación extensa (como una descarga o un flujo de pasos
                múltiples), ofreciendo tanto estados determinados (porcentajes) como indeterminados (animación de carga
                continua).
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary"
                style="margin-block-start: 2rem; margin-block-end: 1rem;">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <li><strong class="w4-text-active">Subida/Descarga de archivos:</strong> Mostrar el porcentaje exacto de
                    un archivo que se está procesando usando el atributo <code>value</code>.</li>
                <li><strong class="w4-text-active">Wizards y Formularios por pasos:</strong> Indicar en qué paso se
                    encuentra el usuario dentro de un flujo largo.</li>
                <li><strong class="w4-text-active">Carga de aplicaciones:</strong> Usar el estado indeterminado
                    (removiendo el atributo value) durante el enrutamiento inicial o carga de datos pesados.</li>
                <li><strong class="w4-text-active">Cuotas y límites:</strong> Representar visualmente el uso de
                    almacenamiento de una cuenta (cambiando a color Warning o Error al acercarse al 100%).</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item">
                    <progress class="w4-progress" value="0" max="100"></progress>
                    <span class="preview-label-desc">Default (0%)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-primary" value="10" max="100"></progress>
                    <span class="preview-label-desc">Primary (10%)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-secondary" value="25" max="100"></progress>
                    <span class="preview-label-desc">Secondary (25%)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-accent" value="40" max="100"></progress>
                    <span class="preview-label-desc">Accent (40%)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-info" value="55" max="100"></progress>
                    <span class="preview-label-desc">Info (55%)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-success" value="70" max="100"></progress>
                    <span class="preview-label-desc">Success (70%)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-warning" value="85" max="100"></progress>
                    <span class="preview-label-desc">Warning (85%)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-error" value="100" max="100"></progress>
                    <span class="preview-label-desc">Error (100%)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-primary w4-progress-xs" value="40" max="100"></progress>
                    <span class="preview-label-desc">XS (0.25rem)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-primary w4-progress-sm" value="50" max="100"></progress>
                    <span class="preview-label-desc">SM (0.375rem)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-primary w4-progress-md" value="60" max="100"></progress>
                    <span class="preview-label-desc">MD (0.5rem)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-primary w4-progress-lg" value="70" max="100"></progress>
                    <span class="preview-label-desc">LG (0.75rem)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-primary w4-progress-xl" value="80" max="100"></progress>
                    <span class="preview-label-desc">XL (1rem)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Indeterminate / Loading State</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-primary w4-progress-indeterminate" max="100"></progress>
                    <span class="preview-label-desc">Indeterminate Class (.w4-progress-indeterminate)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-secondary" max="100" data-w4-state="loading"></progress>
                    <span class="preview-label-desc">Data State (data-w4-state="loading")</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-accent" max="100"></progress>
                    <span class="preview-label-desc">HTML Attribute (No value attribute)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Data-States</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-success" value="50" max="100"></progress>
                    <span class="preview-label-desc">Normal</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-success w4-progress-active" value="50"
                        max="100"></progress>
                    <span class="preview-label-desc">Active (Glow effect / .w4-progress-active)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-success w4-progress-disabled" value="50"
                        max="100"></progress>
                    <span class="preview-label-desc">Disabled (.w4-progress-disabled)</span>
                </div>
                <div class="preview-item">
                    <progress class="w4-progress w4-progress-success w4-progress-hidden" value="50"
                        max="100"></progress>
                    <span class="preview-label-desc">Hidden (.w4-progress-hidden)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración Dinámica (JS)</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item" style="margin-block-bottom: 1rem;">
                    <progress id="jsProgressBar" class="w4-progress w4-progress-primary w4-progress-lg" value="0"
                        max="100"></progress>
                    <div
                        style="display: flex; justify-content: space-between; margin-block-top: 0.5rem; inline-size: 100%;">
                        <span class="w4-text w4-text-sm" style="color: hsl(var(--w4-base-content) / 0.7)">Descargando
                            archivos...</span>
                        <span id="jsProgressText" class="w4-text w4-text-sm" style="font-weight: 700;">0%</span>
                    </div>
                </div>

                <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; justify-content: center;">
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
        </section>
    </div>

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