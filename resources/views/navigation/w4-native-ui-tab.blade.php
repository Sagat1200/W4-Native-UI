<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Tab Lab</title>
    @NativeUIStyles
    <style>
        body {
            background-color: hsl(var(--w4-base-200));
            color: hsl(var(--w4-base-content));
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
            margin: 0;
            padding: 2rem;
            min-block-size: 100vh;
        }

        .lab-shell {
            max-inline-size: 1280px;
            margin: 0 auto;
            background-color: hsl(var(--w4-base-100));
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .lab-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            border-block-end: 1px solid hsl(var(--w4-base-300));
            padding-block-end: 1.25rem;
        }

        .lab-title {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }

        .lab-subtitle {
            margin: 0.5rem 0 0 0;
            color: hsl(var(--w4-base-content) / 0.72);
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
            min-inline-size: 180px;
        }

        .section-title {
            margin: 0 0 1rem 0;
            font-size: 1.25rem;
            font-weight: 600;
            border-inline-start: 4px solid hsl(var(--w4-primary));
            padding-inline-start: 0.75rem;
        }

        .demo-zone {
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            padding: 1rem;
            display: grid;
            gap: 1rem;
        }

        .demo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 0.875rem;
        }

        .demo-card {
            overflow: visible;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Tab Lab</h1>
                <p class="lab-subtitle">Pruebas de estilos, variantes, tamaños y estados de `w4-tab`.</p>
            </div>
            <div class="theme-selector-wrapper">
                <label for="themeSwitcher" style="font-weight: 600; font-size: 0.875rem;">Cambiar tema:</label>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Tab</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Tab</strong> (pestañas) organiza contenido relacionado en múltiples vistas u
                hojas, permitiendo a los usuarios navegar entre ellas sin tener que cambiar de página. Es excelente para
                ahorrar espacio en pantalla y estructurar información densa.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Paneles de configuración:</strong> Dividir preferencias complejas en categorías ordenadas
                    (General, Seguridad, Notificaciones, etc.).</li>
                <li><strong>Fichas de producto:</strong> Alternar entre la descripción detallada, especificaciones
                    técnicas y reseñas de clientes en un comercio electrónico.</li>
                <li><strong>Dashboards analíticos:</strong> Cambiar la vista de datos (Gráficos, Tablas, Resumen) dentro
                    de un mismo widget o panel interactivo.</li>
                <li><strong>Perfiles de usuario:</strong> Navegar entre información personal, actividad reciente y
                    ajustes de cuenta desde una misma pantalla.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title">Styles & Morphologies</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Default (Ghost)</div>
                        <div class="w4-tabs">
                            <a class="w4-tab w4-tab-active">Tab 1</a>
                            <a class="w4-tab">Tab 2</a>
                            <a class="w4-tab">Tab 3</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Bordered (`w4-tab-bordered`)</div>
                        <div class="w4-tabs">
                            <a class="w4-tab w4-tab-bordered w4-tab-active">Tab 1</a>
                            <a class="w4-tab w4-tab-bordered">Tab 2</a>
                            <a class="w4-tab w4-tab-bordered">Tab 3</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card"
                        style="grid-column: 1 / -1;">
                        <div class="w4-label w4-label-sm w4-label-primary">Lifted (`w4-tab-lifted`)</div>
                        <div class="w4-tabs"
                            style="border-block-end: 1px solid hsl(var(--w4-base-300)); padding-inline-start: 1rem;">
                            <a class="w4-tab w4-tab-lifted w4-tab-active">Tab 1</a>
                            <a class="w4-tab w4-tab-lifted">Tab 2</a>
                            <a class="w4-tab w4-tab-lifted">Tab 3</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card"
                        style="grid-column: 1 / -1;">
                        <div class="w4-label w4-label-sm w4-label-primary">Boxed (`w4-tabs-boxed` + `w4-tab-boxed`)
                        </div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-tab-active">Tab 1</a>
                            <a class="w4-tab w4-tab-boxed">Tab 2</a>
                            <a class="w4-tab w4-tab-boxed">Tab 3</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Variants (Active Color)</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Primary</div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-variant-primary w4-tab-active">Active</a>
                            <a class="w4-tab w4-tab-boxed w4-variant-primary">Normal</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Secondary</div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-variant-secondary w4-tab-active">Active</a>
                            <a class="w4-tab w4-tab-boxed w4-variant-secondary">Normal</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Accent</div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-variant-accent w4-tab-active">Active</a>
                            <a class="w4-tab w4-tab-boxed w4-variant-accent">Normal</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Info (Bordered)</div>
                        <div class="w4-tabs">
                            <a class="w4-tab w4-tab-bordered w4-variant-info w4-tab-active">Active</a>
                            <a class="w4-tab w4-tab-bordered w4-variant-info">Normal</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-warning));">Sizes</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Size XS</div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-size-xs w4-tab-active">Tab XS</a>
                            <a class="w4-tab w4-tab-boxed w4-size-xs">Tab XS</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Size SM</div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-size-sm w4-tab-active">Tab SM</a>
                            <a class="w4-tab w4-tab-boxed w4-size-sm">Tab SM</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Size MD</div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-size-md w4-tab-active">Tab MD</a>
                            <a class="w4-tab w4-tab-boxed w4-size-md">Tab MD</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-warning">Size LG</div>
                        <div class="w4-tabs w4-tabs-boxed">
                            <a class="w4-tab w4-tab-boxed w4-size-lg w4-tab-active">Tab LG</a>
                            <a class="w4-tab w4-tab-boxed w4-size-lg">Tab LG</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-error));">States</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-error">Active</div>
                        <div class="w4-tabs">
                            <a class="w4-tab w4-tab-bordered w4-tab-active">w4-tab-active</a>
                            <a class="w4-tab w4-tab-bordered" data-w4-state="active">data-w4-state="active"</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-error">Disabled</div>
                        <div class="w4-tabs">
                            <a class="w4-tab w4-tab-bordered w4-tab-disabled">w4-tab-disabled</a>
                            <a class="w4-tab w4-tab-bordered" data-w4-state="disabled">data disabled</a>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-error">Hidden</div>
                        <div class="w4-tabs">
                            <a class="w4-tab w4-tab-bordered">Visible</a>
                            <a class="w4-tab w4-tab-bordered w4-tab-hidden">w4-tab-hidden</a>
                        </div>
                    </div>
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
    </script>
</body>

</html>