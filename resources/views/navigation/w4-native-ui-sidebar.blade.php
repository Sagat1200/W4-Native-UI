<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Sidebar Lab</title>
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

        .demo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
        }

        /* Contenedor específico para simular el layout con sidebar sin afectar todo el body */
        .sidebar-container-mock {
            position: relative;
            display: flex;
            block-size: 400px;
            background-color: hsl(var(--w4-base-100));
            border: 1px solid hsl(var(--w4-base-300));
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .sidebar-container-mock .w4-sidebar {
            /* Anulamos temporalmente las propiedades fijas o de pantalla completa para la demo en línea */
            position: static;
            block-size: 100%;
            inline-size: 100%;
        }

        .sidebar-content-mock {
            flex: 1;
            padding: 1.5rem;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Sidebar Lab</h1>
                <p class="lab-subtitle">Pruebas de layout off-canvas en las 4 direcciones (top, right, bottom, left) con
                    tamaños porcentuales (5%, 10%, 15%, 20%).</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Sidebar</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Sidebar</strong> (barra lateral o panel off-canvas) proporciona un contenedor
                deslizante que se superpone al contenido principal. Es ideal para mostrar opciones de navegación,
                filtros o detalles adicionales sin cambiar de página.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Navegación principal en móviles:</strong> Menús hamburguesa que se despliegan desde el
                    lateral izquierdo (o derecho) para acceder a las secciones del sitio.</li>
                <li><strong>Paneles de filtros en e-commerce:</strong> Barras laterales para aplicar filtros avanzados
                    de búsqueda de productos sin salir del catálogo.</li>
                <li><strong>Previsualización de detalles:</strong> Mostrar la información detallada de un registro (ej.
                    un usuario o una orden) al hacer clic en una fila de una tabla, deslizándose desde la derecha.</li>
                <li><strong>Carrito de compras:</strong> Un "mini-carrito" off-canvas que permite al usuario revisar los
                    productos seleccionados y proceder al pago rápidamente.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-md w4-section-base-100">
            <h2 class="section-title">Off-Canvas Toggles</h2>
            <div class="demo-zone">
                <div class="demo-grid">
                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-primary">Left (20% width)</div>
                        <button class="w4-button w4-button-primary" data-w4-toggle="sidebar"
                            data-w4-target="sidebar-left">Open Left</button>
                    </div>

                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-secondary">Right (15% width)</div>
                        <button class="w4-button w4-button-secondary" data-w4-toggle="sidebar"
                            data-w4-target="sidebar-right">Open Right</button>
                    </div>

                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-accent">Top (10% height)</div>
                        <button class="w4-button w4-button-accent" data-w4-toggle="sidebar"
                            data-w4-target="sidebar-top">Open Top</button>
                    </div>

                    <div class="w4-card w4-card-bordered w4-card-base-100 w4-card-sm w4-card-body">
                        <div class="w4-label w4-label-sm w4-label-info">Bottom (5% height)</div>
                        <button class="w4-button w4-button-info" data-w4-toggle="sidebar"
                            data-w4-target="sidebar-bottom">Open Bottom</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Off-canvas Sidebars (Fixed) -->
        <aside id="sidebar-left" class="w4-sidebar w4-sidebar-fixed w4-sidebar-left w4-size-20p w4-sidebar-primary">
            <div
                style="padding: 1rem; display: flex; justify-content: space-between; border-block-end: 1px solid var(--w4-base-300);">
                <span style="font-weight: bold;">Left (20vw)</span>
                <button class="w4-button w4-button-xs w4-button-ghost" data-w4-dismiss="sidebar">X</button>
            </div>
            <div style="padding: 1rem;">Contenido 100vh de alto.</div>
        </aside>

        <aside id="sidebar-right" class="w4-sidebar w4-sidebar-fixed w4-sidebar-right w4-size-15p w4-sidebar-secondary">
            <div
                style="padding: 1rem; display: flex; justify-content: space-between; border-block-end: 1px solid var(--w4-base-300);">
                <span style="font-weight: bold;">Right (15vw)</span>
                <button class="w4-button w4-button-xs w4-button-ghost" data-w4-dismiss="sidebar">X</button>
            </div>
            <div style="padding: 1rem;">Contenido 100vh de alto.</div>
        </aside>

        <aside id="sidebar-top" class="w4-sidebar w4-sidebar-fixed w4-sidebar-top w4-size-10p w4-sidebar-accent">
            <div style="padding: 1rem; display: flex; justify-content: space-between;">
                <span style="font-weight: bold;">Top (10vh, 100vw)</span>
                <button class="w4-button w4-button-xs w4-button-ghost" data-w4-dismiss="sidebar">X</button>
            </div>
        </aside>

        <aside id="sidebar-bottom" class="w4-sidebar w4-sidebar-fixed w4-sidebar-bottom w4-size-5p w4-sidebar-info">
            <div style="padding: 1rem; display: flex; justify-content: space-between;">
                <span style="font-weight: bold;">Bottom (5vh, 100vw)</span>
                <button class="w4-button w4-button-xs w4-button-ghost" data-w4-dismiss="sidebar">X</button>
            </div>
        </aside>

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