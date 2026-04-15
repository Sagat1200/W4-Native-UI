<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Stack Lab</title>
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

        .stack-item {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.55rem 0.75rem;
            border-radius: 0.5rem;
            border: 1px solid hsl(var(--w4-base-300));
            background: hsl(var(--w4-base-100));
            min-inline-size: 56px;
            font-weight: 600;
            font-size: 0.875rem;
        }

        .stack-item-wide {
            min-inline-size: 120px;
        }

        .stack-preview-box {
            min-block-size: 140px;
            border: 1px dashed hsl(var(--w4-base-300));
            border-radius: 0.5rem;
            padding: 0.75rem;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Stack Lab</h1>
                <p class="lab-subtitle">Pruebas de orientacion, alineacion, gap y estados de w4-stack.</p>
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

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title">Orientation</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-primary">Vertical (Default)</div>
                        <div class="w4-stack w4-stack-md">
                            <div class="stack-item">A</div>
                            <div class="stack-item">B</div>
                            <div class="stack-item">C</div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-primary">Horizontal</div>
                        <div class="w4-stack w4-stack-horizontal w4-stack-md">
                            <div class="stack-item">A</div>
                            <div class="stack-item">B</div>
                            <div class="stack-item">C</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Gap Sizes</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-secondary">none / xs / sm / md / lg / xl</div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-none">
                        <div class="stack-item">none</div>
                        <div class="stack-item">none</div>
                        <div class="stack-item">none</div>
                    </div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-xs">
                        <div class="stack-item">xs</div>
                        <div class="stack-item">xs</div>
                        <div class="stack-item">xs</div>
                    </div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-sm">
                        <div class="stack-item">sm</div>
                        <div class="stack-item">sm</div>
                        <div class="stack-item">sm</div>
                    </div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-md">
                        <div class="stack-item">md</div>
                        <div class="stack-item">md</div>
                        <div class="stack-item">md</div>
                    </div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-lg">
                        <div class="stack-item">lg</div>
                        <div class="stack-item">lg</div>
                        <div class="stack-item">lg</div>
                    </div>
                    <div class="w4-stack w4-stack-horizontal w4-stack-xl">
                        <div class="stack-item">xl</div>
                        <div class="stack-item">xl</div>
                        <div class="stack-item">xl</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">Alignment</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-accent">Center (Horizontal)</div>
                        <div class="stack-preview-box">
                            <div class="w4-stack w4-stack-horizontal w4-stack-center w4-stack-md"
                                style="block-size: 100%;">
                                <div class="stack-item stack-item-wide">Item 1</div>
                                <div class="stack-item stack-item-wide">Item 2</div>
                            </div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-accent">Center (Vertical)</div>
                        <div class="stack-preview-box">
                            <div class="w4-stack w4-stack-vertical w4-stack-center w4-stack-md"
                                style="block-size: 100%;">
                                <div class="stack-item stack-item-wide">Item 1</div>
                                <div class="stack-item stack-item-wide">Item 2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100 w4-section-primary">
            <h2 class="section-title" style="border-color: hsl(var(--w4-info));">States</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-info">Active</div>
                        <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-active">
                            <div class="stack-item">A</div>
                            <div class="stack-item">B</div>
                            <div class="stack-item">C</div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-info">Disabled</div>
                        <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-disabled">
                            <div class="stack-item">A</div>
                            <div class="stack-item">B</div>
                            <div class="stack-item">C</div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-info">Data state active / disabled</div>
                        <div class="w4-stack w4-stack-horizontal w4-stack-md" data-w4-state="active">
                            <div class="stack-item">active</div>
                            <div class="stack-item">active</div>
                            <div class="stack-item">active</div>
                        </div>
                        <div class="w4-stack w4-stack-horizontal w4-stack-md" data-w4-state="disabled">
                            <div class="stack-item">disabled</div>
                            <div class="stack-item">disabled</div>
                            <div class="stack-item">disabled</div>
                        </div>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-info">Hidden (no visible)</div>
                        <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-hidden">
                            <div class="stack-item">1</div>
                            <div class="stack-item">2</div>
                            <div class="stack-item">3</div>
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