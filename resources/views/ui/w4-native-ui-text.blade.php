<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Text Lab</title>
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
            padding: 1.5rem;
            border-radius: var(--w4-radius-card);
            box-shadow: var(--w4-shadow-sm);
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.5);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-block-end: 0.5rem;
            display: block;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Text Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente w4-text</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Text</h1>
            <p class="w4-text w4-text-lg w4-text-neutral" style="margin-block-start: 1rem;">
                El componente Text es la base fundamental para el renderizado de contenido escrito en la aplicación.
                Garantiza una legibilidad óptima ajustando dinámicamente el interlineado, los pesos tipográficos y el
                contraste de colores según el tema activo y las convenciones de accesibilidad (WCAG).
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary"
                style="margin-block-start: 2rem; margin-block-end: 1rem;">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <li><strong class="w4-text-active">Cuerpos de texto:</strong> Artículos, descripciones largas o entradas
                    de blog utilizando la variante Default/Neutral.</li>
                <li><strong class="w4-text-active">Introducciones (Leads):</strong> Resaltar el primer párrafo de una
                    sección importante utilizando el modificador especial <code>w4-text-lead</code>.</li>
                <li><strong class="w4-text-active">Feedback de sistema:</strong> Mostrar mensajes de éxito, error o
                    advertencia dentro de alertas o notificaciones Toast.</li>
                <li><strong class="w4-text-active">Metadatos:</strong> Mostrar fechas, autores o información auxiliar
                    utilizando el tamaño <code>w4-text-xs</code> junto a la variante <code>w4-text-muted</code>.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas</h2>
            <div class="preview-group grid-container">
                <div class="preview-item">
                    <span class="preview-label-desc">Neutral (Default)</span>
                    <p class="w4-text w4-text-neutral">Este es un bloque de texto neutral estándar. Utiliza el color de
                        contenido base del tema actual. Perfecto para la mayoría de los párrafos y descripciones largas
                        en la interfaz.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Primary</span>
                    <p class="w4-text w4-text-primary">Texto destacado utilizando el color primario del tema. Ideal para
                        resaltar información importante o métricas clave.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Secondary</span>
                    <p class="w4-text w4-text-secondary">Texto secundario que complementa la información primaria,
                        usando el color secundario de la paleta actual.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Accent</span>
                    <p class="w4-text w4-text-accent">Texto de acento diseñado para romper la monotonía visual y atraer
                        la mirada hacia detalles específicos.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Info</span>
                    <p class="w4-text w4-text-info">El servidor se ha reiniciado correctamente a las 04:00 AM. Todos los
                        servicios están operando normalmente.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Success</span>
                    <p class="w4-text w4-text-success">¡Tu perfil ha sido actualizado con éxito! Los cambios ya son
                        visibles para otros usuarios.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Warning</span>
                    <p class="w4-text w4-text-warning">Tu suscripción expirará en 3 días. Por favor, actualiza tu método
                        de pago para evitar interrupciones.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Error</span>
                    <p class="w4-text w4-text-error">No se pudo establecer conexión con la base de datos. Revisa la
                        configuración de red e inténtalo de nuevo.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Muted</span>
                    <p class="w4-text w4-text-muted">Texto atenuado con menor opacidad. Usado frecuentemente para notas
                        al pie, marcas de tiempo, o descripciones legales que no requieren atención inmediata.</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos y Modificadores
            </h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">w4-text-xs</span>
                    <p class="w4-text w4-text-xs">Este es un texto extra pequeño (0.75rem). Útil para meta-información o
                        tooltips.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-text-sm</span>
                    <p class="w4-text w4-text-sm">Este es un texto pequeño (0.875rem). Común en leyendas o detalles
                        secundarios.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-text-md (Default)</span>
                    <p class="w4-text w4-text-md">Este es un texto mediano (1rem). El tamaño de lectura estándar para
                        párrafos de contenido.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-text-lg</span>
                    <p class="w4-text w4-text-lg">Este es un texto grande (1.125rem). Llama un poco más la atención que
                        el cuerpo normal.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-text-xl</span>
                    <p class="w4-text w4-text-xl">Este es un texto extra grande (1.25rem). A menudo usado como subtítulo
                        suave o cita destacada.</p>
                </div>
                <div class="preview-item" style="border-left: 4px solid hsl(var(--w4-primary));">
                    <span class="preview-label-desc">w4-text-lead (Modificador de Estilo)</span>
                    <p class="w4-text w4-text-lead w4-text-lg">El modificador "lead" aumenta el peso de la fuente y el
                        interlineado. Está diseñado específicamente para párrafos introductorios que necesitan guiar al
                        usuario hacia el contenido principal.</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados (CSS Classes & Atributos)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">Normal</span>
                    <p class="w4-text">Texto en estado base sin modificaciones adicionales.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Active (w4-text-active)</span>
                    <p class="w4-text w4-text-active">Texto en estado activo. Aumenta el grosor de la fuente y añade un
                        subrayado, indicando selección o estado resaltado permanente.</p>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Disabled (w4-text-disabled)</span>
                    <p class="w4-text w4-text-disabled">Texto deshabilitado. La opacidad se reduce drásticamente y no
                        responde a eventos del puntero. Generalmente indica que una opción u bloque de información no
                        está disponible.</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="preview-group">
                <div class="preview-item" style="padding: 2rem;">
                    <div style="margin-bottom: 1.5rem; min-height: 80px;">
                        <p id="jsInteractiveText" class="w4-text w4-text-lg w4-text-primary" data-w4-component="text">
                            Este es un bloque de texto interactivo. Altera su estado utilizando los controles inferiores
                            para observar cómo el motor CSS aplica las transformaciones en tiempo real basándose en el
                            atributo <code>data-w4-state</code>.
                        </p>
                    </div>

                    <div style="border-top: 1px solid hsl(var(--w4-base-300)); padding-top: 1.5rem;">
                        <p
                            style="font-size: 0.875rem; color: hsl(var(--w4-base-content) / 0.7); margin-bottom: 0.75rem; margin-top: 0;">
                            Panel de Control de Estados:
                        </p>

                        <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <button class="w4-button w4-button-sm w4-button-outline"
                                onclick="document.getElementById('jsInteractiveText').removeAttribute('data-w4-state')">Clear
                                (Normal)</button>
                            <button class="w4-button w4-button-sm w4-button-info"
                                onclick="document.getElementById('jsInteractiveText').setAttribute('data-w4-state', 'active')">Set
                                Active</button>
                            <button class="w4-button w4-button-sm w4-button-warning"
                                onclick="document.getElementById('jsInteractiveText').setAttribute('data-w4-state', 'disabled')">Set
                                Disabled</button>
                            <button class="w4-button w4-button-sm w4-button-error"
                                onclick="document.getElementById('jsInteractiveText').setAttribute('data-w4-state', 'hidden')">Set
                                Hidden</button>
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