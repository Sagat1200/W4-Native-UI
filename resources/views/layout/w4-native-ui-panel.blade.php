<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Panel Lab</title>
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

        .panel-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 0.875rem;
        }

        .panel-note {
            margin: 0;
            font-size: 0.875rem;
            opacity: 0.82;
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Panel Lab</h1>
                <p class="lab-subtitle">Pruebas de modifiers, variantes, tamanos y estados de w4-panel.</p>
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

        <section style="margin-block-end: 2rem; margin-block-start: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Panel</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Panel</strong> es un contenedor estructurado similar a una tarjeta (Card), pero
                generalmente utilizado para envolver secciones enteras de una interfaz o vistas de detalle más
                complejas. Ayuda a destacar bloques de contenido del fondo principal de la aplicación.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Vistas de configuración:</strong> Agrupar formularios y opciones de cuenta de usuario.</li>
                <li><strong>Paneles laterales (Asides):</strong> Contener herramientas de filtrado, navegación
                    secundaria o información contextual en un layout complejo.</li>
                <li><strong>Contenido destacado:</strong> Envolver un mensaje importante, un resumen de métricas o una
                    alerta persistente.</li>
                <li><strong>Layouts divididos:</strong> Usar múltiples paneles uno al lado del otro para dividir la
                    información (ej. editor a la izquierda, vista previa a la derecha).</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Modifiers</h2>
            <div class="demo-zone">
                <div class="panel-grid">
                    <div class="w4-panel w4-panel-md">
                        <div class="w4-label w4-label-sm w4-label-primary">Default</div>
                        <p class="panel-note">Panel base para bloques de contenido.</p>
                    </div>
                    <div class="w4-panel w4-panel-md w4-panel-elevated">
                        <div class="w4-label w4-label-sm w4-label-primary">Elevated</div>
                        <p class="panel-note">Agrega sombra para mayor jerarquia visual.</p>
                    </div>
                    <div class="w4-panel w4-panel-md w4-panel-ghost">
                        <div class="w4-label w4-label-sm w4-label-primary">Ghost</div>
                        <p class="panel-note">Sin fondo ni borde, ideal para layouts livianos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Semantic Variants</h2>
            <div class="demo-zone">
                <div class="panel-grid">
                    <div class="w4-panel w4-panel-sm w4-panel-primary">
                        <div class="w4-label w4-label-sm">Primary</div>
                    </div>
                    <div class="w4-panel w4-panel-sm w4-panel-secondary">
                        <div class="w4-label w4-label-sm">Secondary</div>
                    </div>
                    <div class="w4-panel w4-panel-sm w4-panel-accent">
                        <div class="w4-label w4-label-sm">Accent</div>
                    </div>
                    <div class="w4-panel w4-panel-sm w4-panel-info">
                        <div class="w4-label w4-label-sm">Info</div>
                    </div>
                    <div class="w4-panel w4-panel-sm w4-panel-success">
                        <div class="w4-label w4-label-sm">Success</div>
                    </div>
                    <div class="w4-panel w4-panel-sm w4-panel-warning">
                        <div class="w4-label w4-label-sm">Warning</div>
                    </div>
                    <div class="w4-panel w4-panel-sm w4-panel-error">
                        <div class="w4-label w4-label-sm">Error</div>
                    </div>
                    <div class="w4-panel w4-panel-sm w4-panel-base-300">
                        <div class="w4-label w4-label-sm">Base 300</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">Sizes</h2>
            <div class="demo-zone">
                <div class="panel-grid">
                    <div class="w4-panel w4-panel-xs">
                        <div class="w4-label w4-label-sm w4-label-accent">XS</div>
                    </div>
                    <div class="w4-panel w4-panel-sm">
                        <div class="w4-label w4-label-sm w4-label-accent">SM</div>
                    </div>
                    <div class="w4-panel w4-panel-md">
                        <div class="w4-label w4-label-sm w4-label-accent">MD</div>
                    </div>
                    <div class="w4-panel w4-panel-lg">
                        <div class="w4-label w4-label-sm w4-label-accent">LG</div>
                    </div>
                    <div class="w4-panel w4-panel-xl">
                        <div class="w4-label w4-label-sm w4-label-accent">XL</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info));">States</h2>
            <div class="demo-zone">
                <div class="panel-grid">
                    <div class="w4-panel w4-panel-md">
                        <div class="w4-label w4-label-sm w4-label-info">Normal</div>
                        <p class="panel-note">Estado base sin modificadores.</p>
                    </div>
                    <div class="w4-panel w4-panel-md w4-panel-active">
                        <div class="w4-label w4-label-sm w4-label-info">Active</div>
                        <p class="panel-note">Resaltado con color primario.</p>
                    </div>
                    <div class="w4-panel w4-panel-md w4-panel-disabled">
                        <div class="w4-label w4-label-sm w4-label-info">Disabled</div>
                        <p class="panel-note">No interactivo, opacidad reducida.</p>
                    </div>
                    <div class="w4-panel w4-panel-md" data-w4-state="active">
                        <div class="w4-label w4-label-sm w4-label-info">Data State Active</div>
                        <p class="panel-note">Activo via data attribute.</p>
                    </div>
                    <div class="w4-panel w4-panel-md" data-w4-state="disabled">
                        <div class="w4-label w4-label-sm w4-label-info">Data State Disabled</div>
                        <p class="panel-note">Disabled via data attribute.</p>
                    </div>
                    <div class="w4-panel w4-panel-md w4-panel-collapsed">
                        <div class="w4-label w4-label-sm w4-label-info">Collapsed</div>
                        <p class="panel-note">Este contenido se colapsa por CSS.</p>
                    </div>
                    <div class="w4-panel w4-panel-md w4-panel-hidden">
                        <div class="w4-label w4-label-sm w4-label-info">Hidden</div>
                        <p class="panel-note">No visible en pantalla.</p>
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