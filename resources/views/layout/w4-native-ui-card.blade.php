<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Card Lab</title>
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

        .lab-container {
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

        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
            padding: 1.25rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
        }

        .w4-card h3 {
            margin: 0;
            font-size: 1rem;
        }

        .w4-card p {
            margin: 0;
            opacity: 0.9;
            font-size: 0.9rem;
            line-height: 1.35;
        }

        .card-media {
            inline-size: 100%;
            block-size: 140px;
            object-fit: cover;
            border-start-start-radius: inherit;
            border-start-end-radius: inherit;
            border-end-start-radius: 0;
            border-end-end-radius: 0;
            display: block;
            background-color: hsl(var(--w4-base-300));
        }

        .card-media-xs {
            block-size: 88px;
        }

        .card-media-sm {
            block-size: 110px;
        }

        .card-media-md {
            block-size: 140px;
        }

        .card-media-lg {
            block-size: 170px;
        }

        .card-media-xl {
            block-size: 210px;
        }
    </style>
</head>

<body>
    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Card Lab</h1>
                <p class="lab-subtitle">Pruebas visuales para estilos de card: modifiers, variantes, tamanos y estados.
                </p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Card</h1>
            <p class="w4-text w4-text-base w4-text-start" style="margin-block-start: 1rem;">
                El componente <strong>Card</strong> (tarjeta) es un contenedor versátil y flexible utilizado para
                agrupar contenido relacionado y acciones. Es fundamental en el diseño de interfaces modernas para
                organizar información de manera estructurada, legible y visualmente atractiva.
            </p>
            <br>
            <h2 class="w4-heading w4-heading-h3 w4-heading-secondary w4-heading-start">Casos de Uso Comunes:</h2>
            <ul class="w4-text w4-text-base w4-text-start"
                style="list-style-type: disc; padding-inline-start: 1.5rem; margin-block-start: 0.5rem;">
                <li><strong>Listados de contenido:</strong> Mostrar productos de una tienda, artículos de un blog o
                    perfiles de usuario en una cuadrícula.</li>
                <li><strong>Paneles de control (Dashboards):</strong> Agrupar métricas, gráficos o resúmenes de
                    información en widgets independientes.</li>
                <li><strong>Formularios estructurados:</strong> Contener secciones lógicas de un formulario largo (ej.
                    "Datos personales", "Información de pago").</li>
                <li><strong>Elementos interactivos:</strong> Crear tarjetas clicables que actúan como enlaces grandes
                    hacia vistas detalladas.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Modifiers</h2>
            <div class="preview-grid">
                <article class="w4-card">
                    <div class="w4-card-body ">
                        <h3>Default</h3>
                        <p>Card base del sistema.</p>
                    </div>
                </article>

                <article class="w4-card w4-card-bordered">
                    <div class="w4-card-body">
                        <h3>Bordered</h3>
                        <p>Borde mas visible.</p>
                    </div>
                </article>

                <article class="w4-card w4-card-elevated">
                    <div class="w4-card-body">
                        <h3>Elevated</h3>
                        <p>Sombra reforzada para mayor jerarquia.</p>
                    </div>
                </article>

                <article class="w4-card w4-card-ghost">
                    <div class="w4-card-body">
                        <h3>Ghost</h3>
                        <p>Sin fondo ni borde, para layouts livianos.</p>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary));">Semantic Variants</h2>
            <div class="preview-grid">
                <article class="w4-card w4-card-primary">
                    <div class="w4-card-body">
                        <h3>Primary</h3>
                        <p>Uso principal.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-secondary">
                    <div class="w4-card-body">
                        <h3>Secondary</h3>
                        <p>Uso secundario.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-accent">
                    <div class="w4-card-body">
                        <h3>Accent</h3>
                        <p>Enfasis visual.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-info">
                    <div class="w4-card-body">
                        <h3>Info</h3>
                        <p>Informacion.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-success">
                    <div class="w4-card-body">
                        <h3>Success</h3>
                        <p>Operacion exitosa.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-warning">
                    <div class="w4-card-body">
                        <h3>Warning</h3>
                        <p>Advertencia.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-error">
                    <div class="w4-card-body">
                        <h3>Error</h3>
                        <p>Estado critico.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-base-300">
                    <div class="w4-card-body">
                        <h3>Base 300</h3>
                        <p>Color estructural.</p>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent));">Sizes</h2>
            <div class="preview-grid">
                <article class="w4-card w4-card-xs">
                    <div class="w4-card-body">
                        <h3>XS</h3>
                        <p>Padding compacto.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-sm">
                    <div class="w4-card-body">
                        <h3>SM</h3>
                        <p>Espaciado reducido.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-md">
                    <div class="w4-card-body">
                        <h3>MD</h3>
                        <p>Tamano por defecto.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-lg">
                    <div class="w4-card-body">
                        <h3>LG</h3>
                        <p>Espaciado amplio.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-xl">
                    <div class="w4-card-body">
                        <h3>XL</h3>
                        <p>Bloque destacado.</p>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-primary));">Image Cards By Size</h2>
            <div class="preview-grid">
                <article class="w4-card w4-card-xs w4-card-elevated">
                    <img class="card-media card-media-xs" src="https://picsum.photos/seed/w4-card-xs/640/360"
                        alt="Card XS sample image">
                    <div class="w4-card-body">
                        <h3>Card XS</h3>
                        <p>Imagen compacta para tarjetas pequenas.</p>
                    </div>
                </article>

                <article class="w4-card w4-card-sm w4-card-elevated">
                    <img class="card-media card-media-sm" src="https://picsum.photos/seed/w4-card-sm/640/360"
                        alt="Card SM sample image">
                    <div class="w4-card-body">
                        <h3>Card SM</h3>
                        <p>Balance entre densidad y legibilidad.</p>
                    </div>
                </article>

                <article class="w4-card w4-card-md w4-card-elevated">
                    <img class="card-media card-media-md" src="https://picsum.photos/seed/w4-card-md/640/360"
                        alt="Card MD sample image">
                    <div class="w4-card-body">
                        <h3>Card MD</h3>
                        <p>Tamano base recomendado para listados.</p>
                    </div>
                </article>

                <article class="w4-card w4-card-lg w4-card-elevated">
                    <img class="card-media card-media-lg" src="https://picsum.photos/seed/w4-card-lg/640/360"
                        alt="Card LG sample image">
                    <div class="w4-card-body">
                        <h3>Card LG</h3>
                        <p>Mayor presencia visual para contenido destacado.</p>
                    </div>
                </article>

                <article class="w4-card w4-card-xl w4-card-elevated">
                    <img class="card-media card-media-xl" src="https://picsum.photos/seed/w4-card-xl/640/360"
                        alt="Card XL sample image">
                    <div class="w4-card-body">
                        <h3>Card XL</h3>
                        <p>Formato hero para bloques principales.</p>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-warning));">Border Colors</h2>
            <div class="preview-grid">
                <article class="w4-card w4-card-bordered w4-card-bordered-primary">
                    <div class="w4-card-body">
                        <h3>Border Primary</h3>
                        <p>Borde semantico primario.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-bordered w4-card-bordered-secondary">
                    <div class="w4-card-body">
                        <h3>Border Secondary</h3>
                        <p>Borde semantico secundario.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-bordered w4-card-bordered-accent">
                    <div class="w4-card-body">
                        <h3>Border Accent</h3>
                        <p>Borde de enfasis.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-bordered w4-card-bordered-info">
                    <div class="w4-card-body">
                        <h3>Border Info</h3>
                        <p>Borde informativo.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-bordered w4-card-bordered-success">
                    <div class="w4-card-body">
                        <h3>Border Success</h3>
                        <p>Borde de estado exitoso.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-bordered w4-card-bordered-warning">
                    <div class="w4-card-body">
                        <h3>Border Warning</h3>
                        <p>Borde de advertencia.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-bordered w4-card-bordered-error">
                    <div class="w4-card-body">
                        <h3>Border Error</h3>
                        <p>Borde de estado critico.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-bordered w4-card-bordered-neutral">
                    <div class="w4-card-body">
                        <h3>Border Neutral</h3>
                        <p>Borde neutral para contexto base.</p>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info));">States</h2>
            <div class="preview-grid">
                <article class="w4-card">
                    <div class="w4-card-body">
                        <h3>Normal</h3>
                        <p>Estado base.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-active">
                    <div class="w4-card-body">
                        <h3>Active</h3>
                        <p>Elevacion y borde resaltado.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-disabled">
                    <div class="w4-card-body">
                        <h3>Disabled</h3>
                        <p>No interactiva.</p>
                    </div>
                </article>
                <article class="w4-card w4-card-collapsed">
                    <div class="w4-card-body">
                        <h3>Collapsed</h3>
                        <p>Body oculto.</p>
                    </div>
                </article>
                <article class="w4-card" data-w4-state="active">
                    <div class="w4-card-body">
                        <h3>Data State Active</h3>
                        <p>Activo via data attribute.</p>
                    </div>
                </article>
                <article class="w4-card" data-w4-state="disabled">
                    <div class="w4-card-body">
                        <h3>Data State Disabled</h3>
                        <p>Disabled via data attribute.</p>
                    </div>
                </article>
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