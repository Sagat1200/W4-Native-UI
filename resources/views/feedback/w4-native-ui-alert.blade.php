<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Alert Lab</title>
    @NativeUIStyles
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            padding: 2rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Alert Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente de feedback w4-alert</p>
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
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-start">Componente: W4 Alert</h1>
            <p class="w4-text w4-text-lg w4-text-neutral" style="margin-block-start: 1rem;">
                El componente Alert es un elemento de retroalimentación visual diseñado para comunicar información
                importante, cambios de estado o advertencias críticas al usuario sin interrumpir su flujo de trabajo
                principal.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary"
                style="margin-block-start: 2rem; margin-block-end: 1rem;">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <li><strong class="w4-text-active">Feedback de sistema:</strong> Notificar sobre el éxito de una
                    operación ("Guardado exitosamente") o un error crítico.</li>
                <li><strong class="w4-text-active">Anuncios informativos:</strong> Informar sobre nuevas
                    características, actualizaciones del sistema o mantenimientos programados.</li>
                <li><strong class="w4-text-active">Validación de formularios:</strong> Agrupar errores de validación en
                    la parte superior de un formulario extenso.</li>
                <li><strong class="w4-text-active">Banner global:</strong> Fijarlo en la parte superior del Layout
                    principal para alertas a nivel de aplicación usando las variantes de tamaño y color sólido.</li>
            </ul>
        </section>

        <section>
            <h2 class="section-title">Variantes de Color Semánticas (Soft por Defecto)</h2>
            <div class="preview-group grid-container">
                <div class="preview-item">
                    <span class="preview-label-desc">Default (Neutral)</span>
                    <div class="w4-alert">
                        <i class="fa-solid fa-bell"></i>
                        <span>Un mensaje de alerta general para el usuario.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Primary</span>
                    <div class="w4-alert w4-alert-primary">
                        <i class="fa-solid fa-star"></i>
                        <span>Destacamos esta información usando el color primario.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Secondary</span>
                    <div class="w4-alert w4-alert-secondary">
                        <i class="fa-solid fa-tag"></i>
                        <span>Información complementaria con el color secundario.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Accent</span>
                    <div class="w4-alert w4-alert-accent">
                        <i class="fa-solid fa-bolt"></i>
                        <span>Un detalle rápido resaltado con el color de acento.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Info</span>
                    <div class="w4-alert w4-alert-info">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>El nuevo sistema de correos ya está disponible.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Success</span>
                    <div class="w4-alert w4-alert-success">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Tus cambios han sido guardados correctamente.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Warning</span>
                    <div class="w4-alert w4-alert-warning">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Atención: Esta acción no se puede deshacer.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Error</span>
                    <div class="w4-alert w4-alert-error">
                        <i class="fa-solid fa-circle-xmark"></i>
                        <span>Error crítico: No se pudo conectar con el servidor.</span>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Modificadores Estilísticos</h2>
            <div class="preview-group grid-container">
                <!-- SOLID -->
                <div class="preview-item" style="grid-column: 1 / -1; margin-block-end: -1rem;">
                    <span class="preview-label-desc" style="color: hsl(var(--w4-primary)); font-size: 1rem;">Solid
                        (Relleno Fuerte)</span>
                </div>

                <div class="preview-item">
                    <div class="w4-alert w4-alert-info w4-alert-solid">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>El nuevo sistema de correos ya está disponible.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <div class="w4-alert w4-alert-success w4-alert-solid">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Tus cambios han sido guardados correctamente.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <div class="w4-alert w4-alert-warning w4-alert-solid">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Atención: Esta acción no se puede deshacer.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <div class="w4-alert w4-alert-error w4-alert-solid">
                        <i class="fa-solid fa-circle-xmark"></i>
                        <span>Error crítico: No se pudo conectar con el servidor.</span>
                    </div>
                </div>

                <!-- OUTLINE -->
                <div class="preview-item"
                    style="grid-column: 1 / -1; margin-block-end: -1rem; margin-block-start: 1rem;">
                    <span class="preview-label-desc" style="color: hsl(var(--w4-primary)); font-size: 1rem;">Outline
                        (Solo Borde)</span>
                </div>

                <div class="preview-item">
                    <div class="w4-alert w4-alert-info w4-alert-outline">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>El nuevo sistema de correos ya está disponible.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <div class="w4-alert w4-alert-success w4-alert-outline">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Tus cambios han sido guardados correctamente.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <div class="w4-alert w4-alert-warning w4-alert-outline">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Atención: Esta acción no se puede deshacer.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <div class="w4-alert w4-alert-error w4-alert-outline">
                        <i class="fa-solid fa-circle-xmark"></i>
                        <span>Error crítico: No se pudo conectar con el servidor.</span>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">w4-alert-xs</span>
                    <div class="w4-alert w4-alert-info w4-alert-xs">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Alerta extra pequeña. Útil para integrarla dentro de cards o paneles pequeños.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-alert-sm</span>
                    <div class="w4-alert w4-alert-info w4-alert-sm">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Alerta pequeña con menor padding.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-alert-md (Default)</span>
                    <div class="w4-alert w4-alert-info w4-alert-md">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Alerta de tamaño mediano estándar.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-alert-lg</span>
                    <div class="w4-alert w4-alert-info w4-alert-lg">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Alerta grande, para mensajes que requieren atención inmediata en pantalla completa.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">w4-alert-xl</span>
                    <div class="w4-alert w4-alert-info w4-alert-xl">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Alerta extra grande. El tamaño máximo soportado por el motor morfológico.</span>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados Estáticos (CSS Classes)</h2>
            <div class="preview-group">
                <div class="preview-item">
                    <span class="preview-label-desc">Normal</span>
                    <div class="w4-alert w4-alert-warning">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Alerta en estado normal.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Active (Aumenta la escala y añade sombra)</span>
                    <div class="w4-alert w4-alert-warning w4-alert-active">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Alerta en estado activo.</span>
                    </div>
                </div>
                <div class="preview-item">
                    <span class="preview-label-desc">Disabled (Pierde color y opacidad)</span>
                    <div class="w4-alert w4-alert-warning w4-alert-disabled">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Alerta en estado deshabilitado.</span>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-success))">Estados JS Soportados (data-w4-state)
            </h2>
            <div class="preview-group" style="padding: 2rem;">

                <div style="display: flex; flex-direction: column; gap: 1.5rem; inline-size: 100%;">
                    <div style="min-block-size: 80px; display: flex; align-items: center;">
                        <div id="jsInteractiveAlert" class="w4-alert w4-alert-success w4-alert-solid w4-alert-lg"
                            data-w4-component="alert">
                            <i class="fa-solid fa-rocket"></i>
                            <div style="display: flex; flex-direction: column; gap: 0.25rem;">
                                <strong style="font-size: 1.1em;">Alerta Dinámica JS</strong>
                                <span>Esta alerta reacciona a los atributos de estado inyectados en tiempo real.</span>
                            </div>
                        </div>
                    </div>

                    <div style="border-block-end: 1px solid hsl(var(--w4-base-300)); padding-block-start: 1.5rem;">
                        <p
                            style="font-size: 0.875rem; color: hsl(var(--w4-base-content) / 0.7); margin-block-end: 1rem; margin-block-start: 0;">
                            Modifica el atributo <code>data-w4-state</code> usando estos botones:
                        </p>

                        <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <button class="w4-button w4-button-sm w4-button-outline"
                                onclick="document.getElementById('jsInteractiveAlert').removeAttribute('data-w4-state')">Clear
                                (Normal)</button>
                            <button class="w4-button w4-button-sm w4-button-info"
                                onclick="document.getElementById('jsInteractiveAlert').setAttribute('data-w4-state', 'active')">Set
                                Active</button>
                            <button class="w4-button w4-button-sm w4-button-warning"
                                onclick="document.getElementById('jsInteractiveAlert').setAttribute('data-w4-state', 'disabled')">Set
                                Disabled</button>
                            <button class="w4-button w4-button-sm w4-button-error"
                                onclick="document.getElementById('jsInteractiveAlert').setAttribute('data-w4-state', 'dismissed')">Set
                                Dismissed (Hidden)</button>
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