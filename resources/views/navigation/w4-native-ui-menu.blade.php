<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Menu Lab</title>
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
                <h1 class="lab-title">W4 Native: Menu Lab</h1>
                <p class="lab-subtitle">Pruebas de orientaciones, variantes, tamaños y estados de `w4-menu`.</p>
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
            <h2 class="section-title">Orientations & Layouts</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Vertical (Default)</div>
                        <ul class="w4-menu">
                            <li><a href="#" class="active">Dashboard</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card"
                        style="grid-column: 1 / -1; overflow: visible;">
                        <div class="w4-label w4-label-sm w4-label-primary">Horizontal with Submenu</div>
                        <ul class="w4-menu w4-menu-horizontal">
                            <li><a href="#" class="active">Overview</a></li>
                            <li>
                                <span>Activity ▼</span>
                                <ul>
                                    <li><a href="#">Recent</a></li>
                                    <li><a href="#">Archived</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Compact Modifier</div>
                        <ul class="w4-menu w4-menu-compact">
                            <li><a href="#" class="active">Dashboard</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-primary">Submenu (Vertical)</div>
                        <ul class="w4-menu">
                            <li><a href="#" class="active">Dashboard</a></li>
                            <li>
                                <span>Projects</span>
                                <ul>
                                    <li><a href="#">Active</a></li>
                                    <li><a href="#">Archived</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Variants (Active State Color)</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Primary</div>
                        <ul class="w4-menu w4-variant-primary">
                            <li><a href="#" class="active">Selected Item</a></li>
                            <li><a href="#">Normal Item</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Secondary</div>
                        <ul class="w4-menu w4-variant-secondary">
                            <li><a href="#" class="active">Selected Item</a></li>
                            <li><a href="#">Normal Item</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Accent</div>
                        <ul class="w4-menu w4-variant-accent">
                            <li><a href="#" class="active">Selected Item</a></li>
                            <li><a href="#">Normal Item</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Success</div>
                        <ul class="w4-menu w4-variant-success">
                            <li><a href="#" class="active">Selected Item</a></li>
                            <li><a href="#">Normal Item</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-info));">Sizes</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-info">Size XS</div>
                        <ul class="w4-menu w4-size-xs w4-variant-primary">
                            <li><a href="#" class="active">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-info">Size SM</div>
                        <ul class="w4-menu w4-size-sm w4-variant-primary">
                            <li><a href="#" class="active">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-info">Size MD</div>
                        <ul class="w4-menu w4-size-md w4-variant-primary">
                            <li><a href="#" class="active">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-info">Size LG</div>
                        <ul class="w4-menu w4-size-lg w4-variant-primary">
                            <li><a href="#" class="active">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Item Disabled</div>
                        <ul class="w4-menu">
                            <li><a href="#">Normal</a></li>
                            <li class="w4-menu-disabled"><a href="#">Disabled Item</a></li>
                            <li data-w4-state="disabled"><a href="#">Data Disabled</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Data Active</div>
                        <ul class="w4-menu w4-variant-accent">
                            <li data-w4-state="active"><a href="#">Active via Data</a></li>
                            <li><a href="#">Normal Item</a></li>
                        </ul>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body demo-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Menu Hidden</div>
                        <ul class="w4-menu w4-menu-hidden">
                            <li><a href="#">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                        </ul>
                        <div class="w4-text w4-text-sm w4-text-muted">(Menu invisible por w4-menu-hidden)</div>
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