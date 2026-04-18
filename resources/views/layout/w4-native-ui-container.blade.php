<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Container Lab</title>
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
            max-inline-size: 1400px;
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

        .demo-content {
            padding: 1rem;
            border-radius: 0.5rem;
            border: 1px dashed hsl(var(--w4-base-300));
            background: hsl(var(--w4-base-100));
        }

        .chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-block-start: 0.75rem;
        }

        .chip {
            display: inline-flex;
            align-items: center;
            border-radius: 999px;
            padding: 0.25rem 0.6rem;
            font-size: 0.75rem;
            background: hsl(var(--w4-base-300));
            color: hsl(var(--w4-base-content));
        }
    </style>
</head>

<body>
    <div class="lab-shell">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Container Lab</h1>
                <p class="lab-subtitle">Pruebas de max-width, modifier solid y estados del componente container.</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Container</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Container</strong> es el elemento estructural más básico para definir límites de
                ancho (max-width) en el diseño. Ayuda a centrar el contenido y asegurar que el layout se adapte
                correctamente en pantallas grandes, evitando que la información se extienda demasiado y sea difícil de
                leer.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Envoltura de páginas (Wrappers):</strong> Centrar todo el contenido principal de una página
                    web dentro de límites definidos.</li>
                <li><strong>Lectura óptima:</strong> Usar contenedores estrechos (`xs` o `sm`) para artículos de blog y
                    facilitar el seguimiento visual del texto.</li>
                <li><strong>Alineación de secciones:</strong> Alinear diferentes bloques horizontales para que mantengan
                    los mismos márgenes laterales.</li>
                <li><strong>Diseño responsivo:</strong> Adaptar automáticamente el ancho máximo en diferentes
                    breakpoints (móvil, tablet, escritorio).</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Container Sizes</h2>
            <div class="demo-zone">
                <div class="w4-container w4-container-xs w4-container-primary">
                    <div class="demo-content">
                        <strong>XS</strong> - `w4-container-xs`
                    </div>
                </div>
                <div class="w4-container w4-container-sm">
                    <div class="demo-content">
                        <strong>SM</strong> - `w4-container-sm`
                    </div>
                </div>
                <div class="w4-container w4-container-md">
                    <div class="demo-content">
                        <strong>MD</strong> - `w4-container-md`
                    </div>
                </div>
                <div class="w4-container w4-container-lg">
                    <div class="demo-content">
                        <strong>LG</strong> - `w4-container-lg`
                    </div>
                </div>
                <div class="w4-container w4-container-xl">
                    <div class="demo-content">
                        <strong>XL</strong> - `w4-container-xl`
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Modifier Solid</h2>
            <div class="demo-zone">
                <div class="w4-container w4-container-md w4-container-solid">
                    <div class="demo-content">
                        <strong>Solid Container</strong>
                        <p style="margin: 0.5rem 0 0 0;">Aplica fondo y color de texto mediante tokens del componente.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">States</h2>
            <div class="demo-zone">
                <div class="w4-container w4-container-md w4-container-active">
                    <div class="demo-content">
                        <strong>Active</strong>
                        <div class="chip-row">
                            <span class="chip">w4-container-active</span>
                        </div>
                    </div>
                </div>

                <div class="w4-container w4-container-md w4-container-disabled">
                    <div class="demo-content">
                        <strong>Disabled</strong>
                        <div class="chip-row">
                            <span class="chip">w4-container-disabled</span>
                        </div>
                    </div>
                </div>

                <div class="w4-container w4-container-md" data-w4-state="active">
                    <div class="demo-content">
                        <strong>Data State Active</strong>
                        <div class="chip-row">
                            <span class="chip">data-w4-state="active"</span>
                        </div>
                    </div>
                </div>

                <div class="w4-container w4-container-md" data-w4-state="disabled">
                    <div class="demo-content">
                        <strong>Data State Disabled</strong>
                        <div class="chip-row">
                            <span class="chip">data-w4-state="disabled"</span>
                        </div>
                    </div>
                </div>

                <div class="w4-container w4-container-md w4-container-hidden">
                    <div class="demo-content">
                        <strong>Hidden</strong>
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