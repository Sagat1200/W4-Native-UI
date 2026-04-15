<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Divider Lab</title>
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

        .demo-card {
            padding: 0.9rem;
            border-radius: 0.6rem;
            background-color: hsl(var(--w4-base-100));
            border: 1px solid hsl(var(--w4-base-300));
        }

        .vertical-row {
            display: flex;
            align-items: stretch;
            min-block-size: 84px;
            border-radius: 0.6rem;
            background: hsl(var(--w4-base-100));
            border: 1px solid hsl(var(--w4-base-300));
            overflow: hidden;
        }

        .vertical-col {
            flex: 1 1 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            padding: 0.75rem;
        }

        .label {
            font-size: 0.82rem;
            margin-block-end: 0.45rem;
            color: hsl(var(--w4-base-content) / 0.72);
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Divider Lab</h1>
                <p class="lab-subtitle">Pruebas visuales para orientacion, variantes, tamanos y estados del divider.</p>
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
            <h2 class="section-title">Horizontal Divider</h2>
            <div class="demo-zone">
                <div class="demo-card">
                    <div class="label">Default</div>
                    <hr class="w4-divider">
                </div>
                <div class="demo-card">
                    <div class="label">Variants</div>
                    <hr class="w4-divider w4-divider-primary">
                    <hr class="w4-divider w4-divider-secondary">
                    <hr class="w4-divider w4-divider-accent">
                    <hr class="w4-divider w4-divider-info">
                    <hr class="w4-divider w4-divider-success">
                    <hr class="w4-divider w4-divider-warning">
                    <hr class="w4-divider w4-divider-error">
                    <hr class="w4-divider w4-divider-neutral">
                    <hr class="w4-divider w4-divider-muted">
                </div>
                <div class="demo-card">
                    <div class="label">Sizes (spacing)</div>
                    <hr class="w4-divider w4-divider-xs w4-divider-primary">
                    <hr class="w4-divider w4-divider-sm w4-divider-primary">
                    <hr class="w4-divider w4-divider-md w4-divider-primary">
                    <hr class="w4-divider w4-divider-lg w4-divider-primary">
                    <hr class="w4-divider w4-divider-xl w4-divider-primary">
                </div>
                <div class="demo-card">
                    <div class="label">Text Alignment</div>
                    <div class="w4-divider w4-divider-start w4-divider-primary">
                        inicio
                    </div>
                    <div class="w4-divider w4-divider-center w4-divider-secondary">Centro</div>
                    <div class="w4-divider w4-divider-end w4-divider-accent">Final</div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Vertical Divider</h2>
            <div class="demo-zone">
                <div class="vertical-row">
                    <div class="vertical-col">Col A</div>
                    <div class="w4-divider w4-divider-vertical w4-divider-primary"></div>
                    <div class="vertical-col">Col B</div>
                    <div class="w4-divider w4-divider-vertical w4-divider-secondary"></div>
                    <div class="vertical-col">Col C</div>
                </div>
                <div class="w4-divider w4-divider-primary w4-divider-xl w4-divider-center">divider spacing xl</div>
                <div class="vertical-row">
                    <div class="vertical-col">Left</div>
                    <div class="w4-divider w4-divider-vertical w4-divider-neutral"></div>
                    <div class="vertical-col">Center</div>
                    <div class="w4-divider w4-divider-vertical w4-divider-warning"></div>
                    <div class="vertical-col">Right</div>
                </div>
                <div class="vertical-row" style="min-block-size: 160px;">
                    <div class="vertical-col">Start</div>
                    <div class="w4-divider w4-divider-vertical w4-divider-start w4-divider-primary">inicio</div>
                    <div class="vertical-col">Center</div>
                    <div class="w4-divider w4-divider-vertical w4-divider-center w4-divider-secondary">centro</div>
                    <div class="vertical-col">End</div>
                    <div class="w4-divider w4-divider-vertical w4-divider-end w4-divider-accent">final</div>
                    <div class="vertical-col">Preview</div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="demo-card">
                    <div class="label">Active (thicker + primary)</div>
                    <hr class="w4-divider w4-divider-active">
                </div>
                <div class="demo-card">
                    <div class="label">Disabled</div>
                    <hr class="w4-divider w4-divider-disabled">
                </div>
                <div class="demo-card">
                    <div class="label">Data State Active</div>
                    <hr class="w4-divider" data-w4-state="active">
                </div>
                <div class="demo-card">
                    <div class="label">Data State Disabled</div>
                    <hr class="w4-divider" data-w4-state="disabled">
                </div>
                <div class="demo-card">
                    <div class="label">Hidden (not visible)</div>
                    <hr class="w4-divider w4-divider-hidden">
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