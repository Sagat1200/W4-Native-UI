<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Grid Lab</title>
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

        .grid-item {
            border-radius: 0.5rem;
            border: 1px solid hsl(var(--w4-base-300));
            background: hsl(var(--w4-base-100));
            padding: 0.75rem;
            text-align: center;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .grid-item-plain {
            border: 0;
            background: hsl(var(--w4-base-100));
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Grid Lab</h1>
                <p class="lab-subtitle">Pruebas de columnas, escalas de gap y estados del componente grid.</p>
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
            <h2 class="section-title">Column Modifiers</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm">`w4-grid-1`</div>
                    <div class="w4-grid w4-grid-1 w4-grid-md">
                        <div class="grid-item">
                            1
                        </div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm">`w4-grid-2`</div>
                    <div class="w4-grid w4-grid-2 w4-grid-md">
                        <div class="grid-item">
                            1
                        </div>
                        <div class="grid-item">2</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm">`w4-grid-3`</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md">
                        <div class="grid-item">1</div>
                        <div class="grid-item">2</div>
                        <div class="grid-item">3</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm">`w4-grid-4`</div>
                    <div class="w4-grid w4-grid-4 w4-grid-md">
                        <div class="grid-item">1</div>
                        <div class="grid-item">2</div>
                        <div class="grid-item">3</div>
                        <div class="grid-item">4</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm">`w4-grid-6`</div>
                    <div class="w4-grid w4-grid-6 w4-grid-sm">
                        <div class="grid-item">1</div>
                        <div class="grid-item">2</div>
                        <div class="grid-item">3</div>
                        <div class="grid-item">4</div>
                        <div class="grid-item">5</div>
                        <div class="grid-item">6</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm">`w4-grid-12`</div>
                    <div class="w4-grid w4-grid-12 w4-grid-xs">
                        <div class="grid-item">1</div>
                        <div class="grid-item">2</div>
                        <div class="grid-item">3</div>
                        <div class="grid-item">4</div>
                        <div class="grid-item">5</div>
                        <div class="grid-item">6</div>
                        <div class="grid-item">7</div>
                        <div class="grid-item">8</div>
                        <div class="grid-item">9</div>
                        <div class="grid-item">10</div>
                        <div class="grid-item">11</div>
                        <div class="grid-item">12</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Gap Sizes</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm">none / xs / sm / md / lg / xl</div>
                    <div class="w4-grid w4-grid-3 w4-grid-none">
                        <div class="grid-item">none</div>
                        <div class="grid-item">none</div>
                        <div class="grid-item">none</div>
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-xs">
                        <div class="grid-item">xs</div>
                        <div class="grid-item">xs</div>
                        <div class="grid-item">xs</div>
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-sm">
                        <div class="grid-item">sm</div>
                        <div class="grid-item">sm</div>
                        <div class="grid-item">sm</div>
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-md">
                        <div class="grid-item">md</div>
                        <div class="grid-item">md</div>
                        <div class="grid-item">md</div>
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-lg">
                        <div class="grid-item">lg</div>
                        <div class="grid-item">lg</div>
                        <div class="grid-item">lg</div>
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-xl">
                        <div class="grid-item">xl</div>
                        <div class="grid-item">xl</div>
                        <div class="grid-item">xl</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-warning));">Bordered Variants</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-warning">`w4-grid-bordered-primary`</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-primary">
                        <div class="grid-item grid-item-plain">primary</div>
                        <div class="grid-item grid-item-plain">primary</div>
                        <div class="grid-item grid-item-plain">primary</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-warning">`w4-grid-bordered-secondary`</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-secondary">
                        <div class="grid-item grid-item-plain">secondary</div>
                        <div class="grid-item grid-item-plain">secondary</div>
                        <div class="grid-item grid-item-plain">secondary</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-warning">`w4-grid-bordered-info`</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-info">
                        <div class="grid-item grid-item-plain">info</div>
                        <div class="grid-item grid-item-plain">info</div>
                        <div class="grid-item grid-item-plain">info</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-warning">`w4-grid-bordered-success / warning / error`
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-success">
                        <div class="grid-item grid-item-plain">success</div>
                        <div class="grid-item grid-item-plain">success</div>
                        <div class="grid-item grid-item-plain">success</div>
                    </div>

                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-warning">
                        <div class="grid-item grid-item-plain">warning</div>
                        <div class="grid-item grid-item-plain">warning</div>
                        <div class="grid-item grid-item-plain">warning</div>
                    </div>

                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-error">
                        <div class="grid-item grid-item-plain">error</div>
                        <div class="grid-item grid-item-plain">error</div>
                        <div class="grid-item grid-item-plain">error</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-neutral">`w4-grid-bordered-neutral / muted`</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-neutral">
                        <div class="grid-item grid-item-plain">neutral</div>
                        <div class="grid-item grid-item-plain">neutral</div>
                        <div class="grid-item grid-item-plain">neutral</div>
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-bordered-muted">
                        <div class="grid-item grid-item-plain">muted</div>
                        <div class="grid-item grid-item-plain">muted</div>
                        <div class="grid-item grid-item-plain">muted</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Active</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-active">
                        <div class="grid-item">A</div>
                        <div class="grid-item">B</div>
                        <div class="grid-item">C</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Disabled</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-disabled">
                        <div class="grid-item">A</div>
                        <div class="grid-item">B</div>
                        <div class="grid-item">C</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Data state active / disabled</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md" data-w4-state="active">
                        <div class="grid-item">active</div>
                        <div class="grid-item">active</div>
                        <div class="grid-item">active</div>
                    </div>
                    <div class="w4-grid w4-grid-3 w4-grid-md" data-w4-state="disabled">
                        <div class="grid-item">disabled</div>
                        <div class="grid-item">disabled</div>
                        <div class="grid-item">disabled</div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Hidden (no visible)</div>
                    <div class="w4-grid w4-grid-3 w4-grid-md w4-grid-hidden">
                        <div class="grid-item">1</div>
                        <div class="grid-item">2</div>
                        <div class="grid-item">3</div>
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