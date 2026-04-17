<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Heading Lab</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            flex-direction: column;
            gap: 1.5rem;
            padding: 1.5rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
        }

        /* .preview-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        } */

        .preview-label {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.5);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Heading Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-heading</p>
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

        <section class="w4-section w4-section-md w4-section-base-100"
            style="margin-block-end: 2rem; margin-block-start: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Heading</h1>
            <p class="w4-text w4-text-lg w4-text-neutral" style="margin-block-start: 1rem;">
                El componente Heading se utiliza para crear jerarquía tipográfica y estructura semántica en las páginas.
                Soporta tamaños explícitos, colores temáticos y clases de alineación, asegurando que el SEO y la
                accesibilidad se mantengan intactos.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary"
                style="margin-block-start: 2rem; margin-block-end: 1rem;">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <li><strong class="w4-text-active">Títulos de página:</strong> Nivel H1 principal usando
                    <code>w4-heading-h1</code>.
                </li>
                <li><strong class="w4-text-active">Separación de secciones:</strong> Jerarquía secundaria con H2 y H3.
                </li>
                <li><strong class="w4-text-active">Destacar información:</strong> Uso de variantes de color como Primary
                    o Accent para llamar la atención en Landing Pages.</li>
                <li><strong class="w4-text-active">Tarjetas y Modales:</strong> Encabezados pequeños (H5, H6) integrados
                    en otros componentes de UI.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title w4-heading w4-heading-h2 mb-2 w4-heading-info">Niveles semanticos (H1 - H6)</h2>
            <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-body" style="padding: 0;">
                <div class="w4-tabs w4-tabs-boxed"
                    style="margin: 1rem; border-radius: var(--w4-radius-md); background-color: hsl(var(--w4-base-200));"
                    id="semanticTabs">
                    <a class="w4-tab w4-tab-lifted w4-tab-active" onclick="switchTab(0)">H1</a>
                    <a class="w4-tab w4-tab-lifted" onclick="switchTab(1)">H2</a>
                    <a class="w4-tab w4-tab-lifted" onclick="switchTab(2)">H3</a>
                    <a class="w4-tab w4-tab-lifted" onclick="switchTab(3)">H4</a>
                    <a class="w4-tab w4-tab-lifted" onclick="switchTab(4)">H5</a>
                    <a class="w4-tab w4-tab-lifted" onclick="switchTab(5)">H6</a>
                </div>

                <div id="semanticContent" style="padding: 2rem; border-block-start: 1px solid hsl(var(--w4-base-300));">
                    <div class="w4-tab-pane">
                        <h6 class="w4-heading w4-heading-h6 w4-heading-primary">Default (H1)</h6>
                        <h1 class="w4-heading w4-heading-h1">The quick brown fox jumps over the lazy dog</h1>
                    </div>
                    <div class="w4-tab-pane" style="display: none;">
                        <h6 class="w4-heading w4-heading-h6 w4-heading-primary">H2</h6>
                        <h2 class="w4-heading w4-heading-h2">The quick brown fox jumps over the lazy dog</h2>
                    </div>
                    <div class="w4-tab-pane" style="display: none;">
                        <h6 class="w4-heading w4-heading-h6 w4-heading-primary">H3</h6>
                        <h3 class="w4-heading w4-heading-h3">The quick brown fox jumps over the lazy dog</h3>
                    </div>
                    <div class="w4-tab-pane" style="display: none;">
                        <h6 class="w4-heading w4-heading-h6 w4-heading-primary">H4</h6>
                        <h4 class="w4-heading w4-heading-h4">The quick brown fox jumps over the lazy dog</h4>
                    </div>
                    <div class="w4-tab-pane" style="display: none;">
                        <h6 class="w4-heading w4-heading-h6 w4-heading-primary">H5</h6>
                        <h5 class="w4-heading w4-heading-h5">The quick brown fox jumps over the lazy dog</h5>
                    </div>
                    <div class="w4-tab-pane" style="display: none;">
                        <h6 class="w4-heading w4-heading-h6 w4-heading-primary">H6</h6>
                        <h6 class="w4-heading w4-heading-h6">The quick brown fox jumps over the lazy dog</h6>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title w4-heading w4-heading-h2 mb-2 w4-heading-secondary">Tamaños Explícitos (XS - XL)
            </h2>
            <div class="w4-card w4-card-bordered w4-card-base-200 w4-card-body" style="gap: 1.5rem;">
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">w4-heading-xs</span>
                    <div class="w4-heading w4-heading-xs">The quick brown fox jumps over the lazy dog</div>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">w4-heading-sm</span>
                    <div class="w4-heading w4-heading-sm">The quick brown fox jumps over the lazy dog</div>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">w4-heading-md</span>
                    <div class="w4-heading w4-heading-md">The quick brown fox jumps over the lazy dog</div>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">w4-heading-lg</span>
                    <div class="w4-heading w4-heading-lg">The quick brown fox jumps over the lazy dog</div>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">w4-heading-xl</span>
                    <div class="w4-heading w4-heading-xl">The quick brown fox jumps over the lazy dog</div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title w4-heading w4-heading-h2 mb-2 w4-heading-accent">Variantes de Color</h2>
            <div class="w4-card w4-card-bordered w4-card-base-200 w4-card-body"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Neutral</span>
                    <h3 class="w4-heading w4-heading-neutral">Neutral Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Primary</span>
                    <h3 class="w4-heading w4-heading-primary">Primary Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Secondary</span>
                    <h3 class="w4-heading w4-heading-secondary">Secondary Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Accent</span>
                    <h3 class="w4-heading w4-heading-accent">Accent Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Info</span>
                    <h3 class="w4-heading w4-heading-info">Info Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Success</span>
                    <h3 class="w4-heading w4-heading-success">Success Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Warning</span>
                    <h3 class="w4-heading w4-heading-warning">Warning Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Error</span>
                    <h3 class="w4-heading w4-heading-error">Error Heading</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Muted</span>
                    <h3 class="w4-heading w4-heading-muted">Muted Heading</h3>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title w4-heading w4-heading-h2 mb-2 w4-heading-error">Estados (CSS Classes)</h2>
            <div class="w4-card w4-card-bordered w4-card-base-200 w4-card-body" style="gap: 1.5rem;">
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Normal</span>
                    <h3 class="w4-heading">Heading in normal state</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Active
                        (w4-heading-active)</span>
                    <h3 class="w4-heading w4-heading-active">Heading in active state</h3>
                </div>
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Disabled
                        (w4-heading-disabled)</span>
                    <h3 class="w4-heading w4-heading-disabled">Heading in disabled state</h3>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title w4-heading w4-heading-h2 mb-2 w4-heading-success">Estados JS Soportados
                (data-w4-state)
            </h2>
            <div class="w4-card w4-card-bordered w4-card-base-200 w4-card-body" style="gap: 1.5rem;">
                <div>
                    <span class="w4-label w4-label-sm w4-label-muted"
                        style="text-transform: uppercase; letter-spacing: 0.05em; margin-block-end: 0.25rem;">Heading
                        Interactivo</span>
                    <h3 id="jsInteractiveHeading" class="w4-heading w4-heading-primary" data-w4-component="heading">
                        Dynamic JS Heading</h3>
                    <p class="w4-text w4-text-sm w4-text-muted" style="margin-block-start: 0.5rem;">
                        Usa los botones para modificar el atributo <code>data-w4-state</code> en tiempo real:
                    </p>
                    <div style="display: flex; gap: 0.5rem; margin-block-start: 0.5rem; flex-wrap: wrap;">
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveHeading').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveHeading').setAttribute('data-w4-state', 'active')">Set
                            Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveHeading').setAttribute('data-w4-state', 'disabled')">Set
                            Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveHeading').setAttribute('data-w4-state', 'hidden')">Set
                            Hidden</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @NativeUIScripts
    @NativeUIInit
    @NativeUILivewire

    <script>
        function switchTab(index) {
            const tabs = document.querySelectorAll('#semanticTabs .w4-tab');
            const panes = document.querySelectorAll('#semanticContent .w4-tab-pane');

            tabs.forEach((tab, i) => {
                if (i === index) {
                    tab.classList.add('w4-tab-active');
                } else {
                    tab.classList.remove('w4-tab-active');
                }
            });

            panes.forEach((pane, i) => {
                if (i === index) {
                    pane.style.display = 'block';
                } else {
                    pane.style.display = 'none';
                }
            });
        }

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