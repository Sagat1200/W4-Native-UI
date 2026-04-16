<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Breadcrumb Lab</title>
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

        .crumb-card {
            overflow: auto;
        }

        .crumb-link {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            line-height: 1;
            font-size: inherit;
        }

        .crumb-link .w4-icon {
            --w4-icon-size: 1em;
            inline-size: 1em;
            block-size: 1em;
            display: inline-block;
            vertical-align: middle;
            flex-shrink: 0;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Breadcrumb Lab</h1>
                <p class="lab-subtitle">Pruebas de tamaños, variantes y estados para `w4-breadcrumb`.</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Breadcrumb</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Breadcrumb</strong> (migas de pan) es un elemento de navegación secundario que
                revela la ubicación del usuario dentro de la jerarquía de un sitio web o aplicación. Permite volver
                fácilmente a páginas de nivel superior.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>E-commerce y catálogos:</strong> Mostrar la ruta desde la página de inicio, pasando por las
                    categorías, hasta llegar al producto actual (ej. Inicio > Ropa > Zapatos > Zapatillas Deportivas).
                </li>
                <li><strong>Paneles de administración:</strong> Ubicar al usuario dentro de configuraciones anidadas
                    (ej. Dashboard > Ajustes > Perfil > Seguridad).</li>
                <li><strong>Sistemas de archivos o documentos:</strong> Mostrar la estructura de carpetas actual (ej.
                    Documentos > 2023 > Reportes Financieros).</li>
                <li><strong>Portales de ayuda y documentación:</strong> Indicar la sección del manual que se está
                    consultando.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title">Sizes</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-primary">w4-size-xs</div>
                        <nav class="w4-breadcrumb w4-size-xs">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Products</a></li>
                                <li><span>Detail</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-primary">w4-size-sm</div>
                        <nav class="w4-breadcrumb w4-size-sm">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Products</a></li>
                                <li><span>Detail</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-primary">w4-size-md</div>
                        <nav class="w4-breadcrumb w4-size-md">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Products</a></li>
                                <li><span>Detail</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-primary">w4-size-lg</div>
                        <nav class="w4-breadcrumb w4-size-lg">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Products</a></li>
                                <li><span>Detail</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-primary">w4-size-xl</div>
                        <nav class="w4-breadcrumb w4-size-xl">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Products</a></li>
                                <li><span>Detail</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Variants</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Primary</div>
                        <nav class="w4-breadcrumb w4-breadcrumb-primary">
                            <ul>
                                <li><a href="#" class="w4-link w4-link-primary">Dashboard</a></li>
                                <li><a href="#" class="w4-link">Orders</a></li>
                                <li><span>#1024</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Secondary</div>
                        <nav class="w4-breadcrumb w4-variant-secondary">
                            <ul>
                                <li><a href="#" class="w4-link">Dashboard</a></li>
                                <li><a href="#" class="w4-link">Orders</a></li>
                                <li><span>#1024</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Accent</div>
                        <nav class="w4-breadcrumb w4-variant-accent">
                            <ul>
                                <li><a href="#" class="w4-link">Dashboard</a></li>
                                <li><a href="#" class="w4-link">Orders</a></li>
                                <li><span>#1024</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-secondary">Neutral</div>
                        <nav class="w4-breadcrumb w4-variant-neutral">
                            <ul>
                                <li><a href="#" class="w4-link">Dashboard</a></li>
                                <li><a href="#" class="w4-link">Orders</a></li>
                                <li><span>#1024</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-info));">Breadcrumbs Con Iconos</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-info">Iconos Basicos</div>
                        <nav class="w4-breadcrumb w4-size-md">
                            <ul>
                                <li>
                                    <a href="#" class="w4-link crumb-link">
                                        <svg class="w4-icon w4-icon-sm w4-icon-primary" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true">
                                            <path d="M12 3l9 8h-3v10h-5v-6H11v6H6V11H3l9-8z" />
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w4-link crumb-link">
                                        <svg class="w4-icon w4-icon-sm w4-icon-secondary" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M4 6a2 2 0 012-2h12a2 2 0 012 2v2H4V6zm0 4h16v8a2 2 0 01-2 2H6a2 2 0 01-2-2v-8z" />
                                        </svg>
                                        Catalogo
                                    </a>
                                </li>
                                <li>
                                    <span class="crumb-link">
                                        <svg class="w4-icon w4-icon-sm w4-icon-accent" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M12 2a7 7 0 00-7 7c0 1.93.78 3.68 2.05 4.95L12 22l4.95-8.05A6.98 6.98 0 0019 9a7 7 0 00-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z" />
                                        </svg>
                                        Detalle
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-info">Con Estados De Icono</div>
                        <nav class="w4-breadcrumb w4-variant-primary">
                            <ul>
                                <li>
                                    <a href="#" class="w4-link crumb-link">
                                        <svg class="w4-icon w4-icon-sm w4-icon-active" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true">
                                            <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Flujo
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w4-link crumb-link">
                                        <svg class="w4-icon w4-icon-sm w4-icon-loading" viewBox="0 0 24 24" fill="none"
                                            aria-hidden="true">
                                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-dasharray="42 14" />
                                        </svg>
                                        Procesando
                                    </a>
                                </li>
                                <li>
                                    <span class="crumb-link">
                                        <svg class="w4-icon w4-icon-sm w4-icon-disabled" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true">
                                            <path d="M7 6h10l-1 14H8L7 6zm2-2h6l1 2H8l1-2z" />
                                        </svg>
                                        Final
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Active</div>
                        <nav class="w4-breadcrumb w4-breadcrumb-active">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Admin</a></li>
                                <li><span>Users</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Disabled</div>
                        <nav class="w4-breadcrumb w4-breadcrumb-disabled">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Admin</a></li>
                                <li><span>Users</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Collapsed</div>
                        <nav class="w4-breadcrumb w4-breadcrumb-collapsed">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Admin</a></li>
                                <li><a href="#" class="w4-link">Users</a></li>
                                <li><span>Profile</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Data State Active / Disabled</div>
                        <nav class="w4-breadcrumb" data-w4-state="active">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Settings</a></li>
                                <li><span>Security</span></li>
                            </ul>
                        </nav>
                        <nav class="w4-breadcrumb" data-w4-state="disabled">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Settings</a></li>
                                <li><span>Security</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body crumb-card">
                        <div class="w4-label w4-label-sm w4-label-accent">Hidden (no visible)</div>
                        <nav class="w4-breadcrumb w4-breadcrumb-hidden">
                            <ul>
                                <li><a href="#" class="w4-link">Home</a></li>
                                <li><a href="#" class="w4-link">Settings</a></li>
                                <li><span>Security</span></li>
                            </ul>
                        </nav>
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