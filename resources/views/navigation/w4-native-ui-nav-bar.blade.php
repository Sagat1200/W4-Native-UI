<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Nav Bar Lab</title>
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
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: NavBar Lab</h1>
                <p class="lab-subtitle">Pruebas de layout, variantes, tamaños y estados de `w4-navbar`.</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 NavBar</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>NavBar</strong> (barra de navegación) proporciona una cabecera para la interfaz de
                usuario, típicamente ubicada en la parte superior de la página. Se utiliza para albergar el logotipo de
                la marca, enlaces de navegación principal, búsqueda y perfiles de usuario.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Cabeceras de sitios web:</strong> Navegación principal en la parte superior de sitios web
                    públicos o páginas de aterrizaje.</li>
                <li><strong>Dashboards de aplicaciones:</strong> Barra superior que contiene acciones globales como
                    notificaciones, perfil de usuario y control de tema visual.</li>
                <li><strong>Navegación móvil:</strong> Barras compactas que integran menús hamburguesa para navegación
                    en pantallas pequeñas.</li>
                <li><strong>Barras de herramientas contextuales:</strong> Agrupar botones de acción, filtros o rutas de
                    migas de pan (breadcrumbs) en vistas o secciones específicas.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title">Layouts</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-primary">Start & End</div>
                    <div class="w4-navbar w4-card-bordered w4-navbar-primary">
                        <div class="w4-navbar-start w4-navbar-info">
                            <a class="w4-button w4-button-ghost w4-text-xl">daisyUI</a>
                        </div>
                        <div class="w4-navbar-end">
                            <button class="w4-button w4-button-ghost">Button</button>
                        </div>
                    </div>
                </div>

                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-primary">Start, Center & End</div>
                    <div class="w4-navbar w4-card-bordered w4-variant-base-200">
                        <div class="w4-navbar-start">
                            <button class="w4-button w4-button-ghost">Menu</button>
                        </div>
                        <div class="w4-navbar-center">
                            <a class="w4-button w4-button-ghost w4-text-xl">daisyUI</a>
                        </div>
                        <div class="w4-navbar-end">
                            <button class="w4-button w4-button-ghost">Search</button>
                        </div>
                    </div>
                </div>

                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-primary">Transparent</div>
                    <div class="w4-navbar w4-navbar-transparent w4-card-bordered">
                        <div class="w4-navbar-start w4-navbar-info">
                            <a class="w4-button w4-button-ghost w4-text-xl">Ghost</a>
                        </div>
                        <div class="w4-navbar-end">
                            <button class="w4-button w4-button-ghost">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Variants</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-primary">Primary (`w4-navbar-primary`)</div>
                    <div class="w4-navbar w4-navbar-primary">
                        <div class="w4-navbar-start w4-navbar-primary"><a class="w4-text-xl"
                                style="padding-inline: 1rem; font-weight: bold; cursor: pointer;">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost">Action</button></div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-secondary">Secondary (`w4-navbar-secondary`)</div>
                    <div class="w4-navbar w4-navbar-secondary">
                        <div class="w4-navbar-start"><a class="w4-text-xl"
                                style="padding-inline: 1rem; font-weight: bold; cursor: pointer;">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost">Action</button></div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-neutral">Neutral (`w4-navbar-neutral`)</div>
                    <div class="w4-navbar w4-navbar-neutral">
                        <div class="w4-navbar-start"><a class="w4-text-xl"
                                style="padding-inline: 1rem; font-weight: bold; cursor: pointer;">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost">Action</button></div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-base-300">Base 300 (`w4-navbar-base-300`)</div>
                    <div class="w4-navbar w4-navbar-base-300">
                        <div class="w4-navbar-start"><a class="w4-text-xl"
                                style="padding-inline: 1rem; font-weight: bold; cursor: pointer;">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost">Action</button></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-info));">Sizes</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-info">Size XS</div>
                    <div class="w4-navbar w4-size-xs w4-variant-base-200">
                        <div class="w4-navbar-start"><a class="w4-button w4-button-ghost w4-button-sm">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost w4-button-sm">Btn</button>
                        </div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-info">Size SM</div>
                    <div class="w4-navbar w4-size-sm w4-variant-base-200">
                        <div class="w4-navbar-start"><a class="w4-button w4-button-ghost w4-button-sm">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost w4-button-sm">Btn</button>
                        </div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-info">Size MD</div>
                    <div class="w4-navbar w4-size-md w4-variant-base-200">
                        <div class="w4-navbar-start"><a class="w4-button w4-button-ghost">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost">Btn</button></div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-info">Size LG</div>
                    <div class="w4-navbar w4-size-lg w4-variant-base-200">
                        <div class="w4-navbar-start"><a class="w4-button w4-button-ghost w4-button-lg">Brand</a></div>
                        <div class="w4-navbar-end"><button class="w4-button w4-button-ghost w4-button-lg">Btn</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Active</div>
                    <div class="w4-navbar w4-navbar-active w4-variant-base-200">
                        <div class="w4-navbar-start"><span style="padding-inline: 1rem; font-weight: bold;">Active
                                Navbar</span></div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Disabled</div>
                    <div class="w4-navbar w4-navbar-disabled w4-variant-base-200">
                        <div class="w4-navbar-start"><span style="padding-inline: 1rem; font-weight: bold;">Disabled
                                Navbar</span></div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Data Active / Disabled</div>
                    <div class="w4-navbar w4-variant-base-200" data-w4-state="active">
                        <div class="w4-navbar-start"><span style="padding-inline: 1rem; font-weight: bold;">Data
                                Active</span></div>
                    </div>
                    <br>
                    <div class="w4-navbar w4-variant-base-200" data-w4-state="disabled">
                        <div class="w4-navbar-start"><span style="padding-inline: 1rem; font-weight: bold;">Data
                                Disabled</span></div>
                    </div>
                </div>
                <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                    <div class="w4-label w4-label-sm w4-label-accent">Hidden</div>
                    <div class="w4-navbar w4-navbar-hidden w4-variant-base-200">
                        <div class="w4-navbar-start">Hidden Navbar</div>
                    </div>
                    <div class="w4-text w4-text-sm w4-text-muted">(Navbar invisible por w4-navbar-hidden)</div>
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