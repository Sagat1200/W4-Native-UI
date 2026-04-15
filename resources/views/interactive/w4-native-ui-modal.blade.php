<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Modal Lab</title>
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
            flex-wrap: wrap;
            gap: 1rem;
            padding: 2rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            align-items: center;
            justify-content: flex-start;
        }

        /* Estilos simulados de botones para el Lab eliminados, se usan las clases nativas .w4-button */
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Modal Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente interactivo w4-modal</p>
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

        <section>
            <h2 class="section-title">Tamaños de Modal (Sizes)</h2>
            <div class="preview-group">
                <button class="w4-button w4-button-md" data-w4-toggle="modal" data-w4-target="modal-xs">XS
                    Modal</button>
                <button class="w4-button w4-button-md" data-w4-toggle="modal" data-w4-target="modal-sm">SM
                    Modal</button>
                <button class="w4-button w4-button-md w4-button-primary" data-w4-toggle="modal"
                    data-w4-target="modal-md">MD Modal (Default)</button>
                <button class="w4-button w4-button-md" data-w4-toggle="modal" data-w4-target="modal-lg">LG
                    Modal</button>
                <button class="w4-button w4-button-md" data-w4-toggle="modal" data-w4-target="modal-xl">XL
                    Modal</button>
                <button class="w4-button w4-button-md" data-w4-toggle="modal" data-w4-target="modal-full">Full
                    Modal</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Posiciones de Modal (Positions)
            </h2>
            <div class="preview-group">
                <button class="w4-button w4-button-md" data-w4-toggle="modal" data-w4-target="modal-top">Top
                    Modal</button>
                <button class="w4-button w4-button-md w4-button-primary" data-w4-toggle="modal"
                    data-w4-target="modal-middle">Middle Modal
                    (Default)</button>
                <button class="w4-button w4-button-md" data-w4-toggle="modal" data-w4-target="modal-bottom">Bottom
                    Modal</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Variantes Semánticas (Colors)</h2>
            <div class="preview-group">
                <button class="w4-button w4-button-md w4-button-primary" data-w4-toggle="modal"
                    data-w4-target="modal-primary">Primary</button>
                <button class="w4-button w4-button-md w4-button-secondary" data-w4-toggle="modal"
                    data-w4-target="modal-secondary">Secondary</button>
                <button class="w4-button w4-button-md w4-button-accent" data-w4-toggle="modal"
                    data-w4-target="modal-accent">Accent</button>
                <button class="w4-button w4-button-md w4-button-info" data-w4-toggle="modal"
                    data-w4-target="modal-info">Info</button>
                <button class="w4-button w4-button-md w4-button-success" data-w4-toggle="modal"
                    data-w4-target="modal-success">Success</button>
                <button class="w4-button w4-button-md w4-button-warning" data-w4-toggle="modal"
                    data-w4-target="modal-warning">Warning</button>
                <button class="w4-button w4-button-md w4-button-error" data-w4-toggle="modal"
                    data-w4-target="modal-error">Error</button>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Casos de Uso</h2>
            <div class="preview-group">
                <button class="w4-button w4-button-md w4-button-primary" data-w4-toggle="modal"
                    data-w4-target="modal-form">Modal con Formulario</button>
                <button class="w4-button w4-button-md w4-button-error" data-w4-toggle="modal"
                    data-w4-target="modal-confirm">Modal de
                    Confirmación</button>
            </div>
        </section>

    </div>

    <!-- MODALS DOM -->

    <!-- Sizes -->
    <div id="modal-xs" class="w4-modal w4-modal-xs">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Modal XS</h3>
            <p>Este es un modal extra pequeño (max-inline-size: 20rem).</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal-sm" class="w4-modal w4-modal-sm">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Modal SM</h3>
            <p>Este es un modal pequeño (max-inline-size: 24rem).</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal-md" class="w4-modal w4-modal-md">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Modal MD</h3>
            <p>Este es un modal mediano por defecto (max-inline-size: 32rem).</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal-lg" class="w4-modal w4-modal-lg">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Modal LG</h3>
            <p>Este es un modal grande (max-inline-size: 48rem).</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal-xl" class="w4-modal w4-modal-xl">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Modal XL</h3>
            <p>Este es un modal extra grande (max-inline-size: 64rem).</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal-full" class="w4-modal w4-modal-full">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Modal Full</h3>
            <p>Este es un modal a pantalla completa (max-inline-size: 100%, ocupa casi todo el alto).</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: auto;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <!-- Positions -->
    <div id="modal-top" class="w4-modal w4-modal-top w4-modal-md">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Top Modal</h3>
            <p>Modal alineado en la parte superior de la pantalla.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal-middle" class="w4-modal w4-modal-middle w4-modal-md">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Middle Modal</h3>
            <p>Modal alineado al centro de la pantalla (comportamiento por defecto).</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal-bottom" class="w4-modal w4-modal-bottom w4-modal-md">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0;">Bottom Modal</h3>
            <p>Modal alineado a la parte inferior de la pantalla, simulando un "bottom sheet".</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <!-- Colors -->
    <div id="modal-primary" class="w4-modal w4-modal-md w4-modal-primary">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-primary));">Primary Modal</h3>
            <p>El borde del modal hereda el color primario.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    <div id="modal-secondary" class="w4-modal w4-modal-md w4-modal-secondary">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-secondary));">Secondary Modal</h3>
            <p>El borde del modal hereda el color secundario.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    <div id="modal-accent" class="w4-modal w4-modal-md w4-modal-accent">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-accent));">Accent Modal</h3>
            <p>El borde del modal hereda el color accent.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    <div id="modal-info" class="w4-modal w4-modal-md w4-modal-info">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-info));">Info Modal</h3>
            <p>El borde del modal hereda el color info.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    <div id="modal-success" class="w4-modal w4-modal-md w4-modal-success">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-success));">Success Modal</h3>
            <p>El borde del modal hereda el color success.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    <div id="modal-warning" class="w4-modal w4-modal-md w4-modal-warning">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-warning));">Warning Modal</h3>
            <p>El borde del modal hereda el color warning.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    <div id="modal-error" class="w4-modal w4-modal-md w4-modal-error">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-error));">Error Modal</h3>
            <p>El borde del modal hereda el color de error.</p>
            <div style="display: flex; justify-content: flex-end; margin-block-start: 1rem;">
                <button class="w4-button w4-button-sm" data-w4-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

    <!-- Use Cases -->
    <div id="modal-form" class="w4-modal w4-modal-md">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; margin-block-end: 1.5rem;">Editar Perfil</h3>
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <div style="display: flex; flex-direction: column; gap: 0.25rem;">
                    <label style="font-size: 0.875rem; font-weight: 500;">Nombre Completo</label>
                    <input type="text"
                        style="padding: 0.5rem; border-radius: 0.5rem; border: 1px solid hsl(var(--w4-base-300)); background: transparent; color: inherit;"
                        placeholder="John Doe">
                </div>
                <div style="display: flex; flex-direction: column; gap: 0.25rem;">
                    <label style="font-size: 0.875rem; font-weight: 500;">Correo Electrónico</label>
                    <input type="email"
                        style="padding: 0.5rem; border-radius: 0.5rem; border: 1px solid hsl(var(--w4-base-300)); background: transparent; color: inherit;"
                        placeholder="john@example.com">
                </div>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 0.5rem; margin-block-start: 1.5rem;">
                <button class="w4-button w4-button-md w4-button-ghost" data-w4-dismiss="modal">Cancelar</button>
                <button class="w4-button w4-button-md w4-button-primary" data-w4-dismiss="modal">Guardar
                    Cambios</button>
            </div>
        </div>
    </div>

    <div id="modal-confirm" class="w4-modal w4-modal-sm w4-modal-error">
        <div class="w4-modal-box">
            <h3 style="margin-block-start: 0; color: hsl(var(--w4-error));">¿Eliminar registro?</h3>
            <p style="margin-block-end: 0;">Esta acción es irreversible y se perderán todos los datos asociados. ¿Estás
                seguro de que deseas continuar?</p>
            <div style="display: flex; justify-content: flex-end; gap: 0.5rem; margin-block-start: 1.5rem;">
                <button class="w4-button w4-button-md w4-button-ghost" data-w4-dismiss="modal">Cancelar</button>
                <button class="w4-button w4-button-md w4-button-error" data-w4-dismiss="modal">Sí, Eliminar</button>
            </div>
        </div>
    </div>

    @NativeUIScripts
    @NativeUIInit
    @NativeUILivewire

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Theme Switcher Logic
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