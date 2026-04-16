<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Link Lab</title>
    @NativeUIStyles
    <style>
        body {
            background-color: hsl(var(--w4-base-200));
            color: hsl(var(--w4-base-content));
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin: 0;
            padding: 2rem;
            min-block-size: 100vh;
        }

        .lab-container {
            max-inline-size: 1200px;
            margin: 0 auto;
            background-color: hsl(var(--w4-base-100));
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .lab-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-block-end: 1px solid hsl(var(--w4-base-300));
            padding-block-end: 1.5rem;
        }

        .lab-title {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }

        .lab-subtitle {
            margin: 0.5rem 0 0 0;
            color: hsl(var(--w4-base-content) / 0.7);
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
            font-size: 1rem;
            min-inline-size: 200px;
        }

        .section-title {
            margin: 0 0 1rem 0;
            font-size: 1.5rem;
            font-weight: 600;
            border-inline-start: 4px solid hsl(var(--w4-primary));
            padding-inline-start: 0.75rem;
        }

        .preview-group {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            padding: 1.5rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            background-color: hsl(var(--w4-base-100));
            padding: 1rem;
            border-radius: var(--w4-radius-card);
            box-shadow: var(--w4-shadow-sm);
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.5);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Link Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-link</p>
            </div>

            <div class="theme-selector-wrapper">
                <label for="themeSwitcher" style="font-weight: 600; font-size: 0.875rem;">Cambiar Tema:</label>
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

        <section style="margin-block-end: 2rem;">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Link</h1>
            <p class="w4-text w4-text-lg w4-text-neutral" style="margin-block-start: 1rem;">
                El componente Link se encarga de estilizar hipervínculos (etiquetas <code>&lt;a&gt;</code>) de manera
                consistente. Soporta variantes de color para indicar la naturaleza del enlace, hereda automáticamente el
                tamaño de la tipografía donde se encuentre insertado y cuenta con estados accesibles (focus ring)
                integrados.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary"
                style="margin-block-start: 2rem; margin-block-end: 1rem;">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <li><strong class="w4-text-active">Navegación textual:</strong> Enlaces integrados dentro de párrafos o
                    artículos.</li>
                <li><strong class="w4-text-active">Acciones secundarias:</strong> Textos como "Olvidé mi contraseña" en
                    formularios de login.</li>
                <li><strong class="w4-text-active">Breadcrumbs:</strong> Estilizar las rutas de navegación estructural
                    del sitio.</li>
                <li><strong class="w4-text-active">Políticas y Legales:</strong> Resaltar términos de servicio, cookies
                    o acuerdos de privacidad con las variantes Secondary o Neutral.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color</h2>
            <div class="preview-group grid-container">
                <div class="preview-item">
                    <span class="preview-label-desc">Primary (Default)</span>
                    <a href="#" class="w4-link">Ir a inicio</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Secondary</span>
                    <a href="#" class="w4-link w4-link-secondary">Términos y condiciones</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Accent</span>
                    <a href="#" class="w4-link w4-link-accent">Ofertas especiales</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Info</span>
                    <a href="#" class="w4-link w4-link-info">Saber más</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Success</span>
                    <a href="#" class="w4-link w4-link-success">Verificar cuenta</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Warning</span>
                    <a href="#" class="w4-link w4-link-warning">Atención al cliente</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Error</span>
                    <a href="#" class="w4-link w4-link-error">Reportar un problema</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Neutral</span>
                    <a href="#" class="w4-link w4-link-neutral">Volver atrás</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Muted</span>
                    <a href="#" class="w4-link w4-link-muted">Cancelar suscripción</a>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Comportamiento en Línea (Inline)
            </h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">Texto Integrado</span>
                    <p style="margin: 0; line-height: 1.5;">
                        Al hacer clic en <a href="#" class="w4-link w4-link-primary">Aceptar</a>, usted confirma que ha
                        leído nuestra
                        <a href="#" class="w4-link w4-link-secondary">Política de Privacidad</a> y está de acuerdo con
                        el
                        <a href="#" class="w4-link w4-link-neutral">Uso de Cookies</a> en este sitio web.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">w4-link-xs</span>
                    <a href="#" class="w4-link w4-link-xs">Enlace extra pequeño</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-link-sm</span>
                    <a href="#" class="w4-link w4-link-sm">Enlace pequeño</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-link-md (Default/Inherit)</span>
                    <a href="#" class="w4-link w4-link-md">Enlace mediano</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-link-lg</span>
                    <a href="#" class="w4-link w4-link-lg">Enlace grande</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-link-xl</span>
                    <a href="#" class="w4-link w4-link-xl">Enlace extra grande</a>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes & Atributos)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">Normal (Con focus-visible)</span>
                    <a href="#" class="w4-link">Navega usando la tecla Tab para ver el Focus Ring</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Active (w4-link-active)</span>
                    <a href="#" class="w4-link w4-link-active">Enlace activo presionado</a>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Disabled (w4-link-disabled)</span>
                    <a href="#" class="w4-link w4-link-disabled">Enlace deshabilitado</a>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="preview-group">
                <div class="preview-item" style="padding: 2rem;">
                    <div style="margin-bottom: 1.5rem;">
                        <a href="#" id="jsInteractiveLink" class="w4-link w4-link-lg" data-w4-component="link"
                            onclick="event.preventDefault()">
                            Enlace Interactivo Dinámico
                        </a>
                    </div>

                    <p
                        style="font-size: 0.875rem; color: hsl(var(--w4-base-content) / 0.7); margin-bottom: 0.5rem; margin-top: 0;">
                        Modifica el atributo <code>data-w4-state</code> en tiempo real usando estos botones:
                    </p>

                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveLink').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveLink').setAttribute('data-w4-state', 'active')">Set
                            Active</button>
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveLink').setAttribute('data-w4-state', 'disabled')">Set
                            Disabled</button>
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveLink').setAttribute('data-w4-state', 'hidden')">Set
                            Hidden</button>
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