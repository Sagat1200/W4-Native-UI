<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Section Lab</title>
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
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 0.875rem;
        }

        .demo-content {
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.45;
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Section Lab</h1>
                <p class="lab-subtitle">Pruebas de variantes, tamanos y estados del componente w4-section.</p>
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

        <section>
            <h2 class="section-title">Semantic Variants</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-section w4-section-md w4-section-primary">
                        <div class="w4-label w4-label-sm">Primary Section</div>
                        <p class="demo-content">Fondo y texto semanticos para bloques principales.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-secondary">
                        <div class="w4-label w4-label-sm">Secondary Section</div>
                        <p class="demo-content">Variante secundaria para contenido complementario.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-accent">
                        <div class="w4-label w4-label-sm">Accent Section</div>
                        <p class="demo-content">Enfasis visual en zonas destacadas.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-100">
                        <div class="w4-label w4-label-sm w4-label-primary">Base 100</div>
                        <p class="demo-content">Superficie base clara.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-200">
                        <div class="w4-label w4-label-sm w4-label-primary">Base 200</div>
                        <p class="demo-content">Superficie intermedia del sistema.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-300">
                        <div class="w4-label w4-label-sm w4-label-primary">Base 300</div>
                        <p class="demo-content">Superficie con mayor contraste.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Size Scales</h2>
            <div class="demo-zone">
                <div class="w4-section w4-section-none w4-section-base-100">
                    <div class="w4-label w4-label-sm w4-label-secondary">w4-section-none</div>
                </div>
                <div class="w4-section w4-section-xs w4-section-base-100">
                    <div class="w4-label w4-label-sm w4-label-secondary">w4-section-xs</div>
                </div>
                <div class="w4-section w4-section-sm w4-section-base-100">
                    <div class="w4-label w4-label-sm w4-label-secondary">w4-section-sm</div>
                </div>
                <div class="w4-section w4-section-md w4-section-base-100">
                    <div class="w4-label w4-label-sm w4-label-secondary">w4-section-md</div>
                </div>
                <div class="w4-section w4-section-lg w4-section-base-100">
                    <div class="w4-label w4-label-sm w4-label-secondary">w4-section-lg</div>
                </div>
                <div class="w4-section w4-section-xl w4-section-base-100">
                    <div class="w4-label w4-label-sm w4-label-secondary">w4-section-xl</div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-section w4-section-md w4-section-base-100">
                        <div class="w4-label w4-label-sm w4-label-accent">Normal</div>
                        <p class="demo-content">Estado base sin modificadores.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-100 w4-section-active">
                        <div class="w4-label w4-label-sm w4-label-accent">Active</div>
                        <p class="demo-content">Con indicador lateral y resaltado suave.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-100 w4-section-disabled">
                        <div class="w4-label w4-label-sm w4-label-accent">Disabled</div>
                        <p class="demo-content">No interactivo, opacidad reducida.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-100" data-w4-state="active">
                        <div class="w4-label w4-label-sm w4-label-accent">Data State Active</div>
                        <p class="demo-content">Activo a traves de data attribute.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-100" data-w4-state="disabled">
                        <div class="w4-label w4-label-sm w4-label-accent">Data State Disabled</div>
                        <p class="demo-content">Disabled a traves de data attribute.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-100 w4-section-collapsed">
                        <div class="w4-label w4-label-sm w4-label-accent">Collapsed</div>
                        <p class="demo-content">Este contenido se colapsa visualmente.</p>
                    </div>
                    <div class="w4-section w4-section-md w4-section-base-100 w4-section-hidden">
                        <div class="w4-label w4-label-sm w4-label-accent">Hidden</div>
                        <p class="demo-content">No visible en pantalla.</p>
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