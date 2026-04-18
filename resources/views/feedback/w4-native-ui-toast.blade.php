<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Toast Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Mock layout for dynamic toasts */
        .toast-playground {
            position: relative;
            block-size: 400px;
            background-color: hsl(var(--w4-base-200));
            border: 2px dashed hsl(var(--w4-base-300));
            border-radius: var(--w4-radius-box);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        /* Temporary toast wrapper for the playground */
        .toast-wrapper-playground {
            position: absolute;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 1rem;
        }

        .toast-wrapper-playground.top-right {
            inset-block-start: 0;
            inset-inline-end: 0;
            align-items: flex-end;
        }

        .toast-wrapper-playground.top-left {
            inset-block-start: 0;
            inset-inline-start: 0;
            align-items: flex-start;
        }

        .toast-wrapper-playground.bottom-right {
            inset-block-end: 0;
            inset-inline-end: 0;
            align-items: flex-end;
        }

        .toast-wrapper-playground.bottom-left {
            inset-block-end: 0;
            inset-inline-start: 0;
            align-items: flex-start;
        }

        .toast-wrapper-playground.bottom-center {
            inset-block-end: 0;
            inset-inline-start: 50%;
            transform: translateX(-50%);
            align-items: center;
        }

        .toast-wrapper-playground.top-center {
            inset-block-start: 0;
            inset-inline-start: 50%;
            transform: translateX(-50%);
            align-items: center;
        }
    </style>
</head>

<body>

    <div id="navbar-toast" class="w4-navbar w4-navbar-primary">
        <div class="w4-navbar-start">
            <button class="w4-button w4-button-ghost w4-button-square mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <button class="w4-button w4-button-ghost">Native UI</button>
        </div>
        <div class="w4-navbar-center">
            <a href="#" class="w4-button w4-button-link w4-button-neutral">DOCUMENTACION</a>
        </div>
        <div class="w4-navbar-end">
            <div class="w4-stack w4-stack-xs mx-2">
                <select id="themeSwitcher" class="w4-select w4-select-xs w4-select-neutral">
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
        </div>
    </div>

    <main id="main-toast" class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Toast</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente de estado
                w4-toast</p>
        </div>

        <div id="description-toast" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Toast</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Toast (Notificación) proporciona retroalimentación efímera y no bloqueante sobre una
                operación que el usuario acaba de realizar. Está diseñado para aparecer superpuesto en las esquinas de
                la interfaz y desaparecer automáticamente después de unos segundos, utilizando animaciones de entrada y
                salida suaves integradas en el motor CSS.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-4">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem; list-style-type: disc;">
                <li><strong class="w4-text-active">Confirmaciones de acción:</strong> Mostrar "Registro guardado
                    correctamente" (Success) en la esquina inferior derecha tras enviar un formulario.</li>
                <li><strong class="w4-text-active">Errores no críticos:</strong> Avisar sobre fallos temporales de
                    conexión (Warning) en la parte superior sin interrumpir la navegación.</li>
                <li><strong class="w4-text-active">Nuevos eventos (Push):</strong> Notificar la llegada de un nuevo
                    mensaje de chat o correo (Info/Primary) en tiempo real.</li>
                <li><strong class="w4-text-active">Animación de salida:</strong> Utilizar el estado
                    <code>data-w4-state="dismissed"</code> vía JavaScript para desencadenar el fade-out antes de remover
                    el elemento del DOM.
                </li>
            </ul>
        </div>

        <section id="example-toast-variant" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Variantes de Color Semánticas</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-3">
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-neutral text-center">Default<br>(Inherit from base
                            content)</span>
                        <div class="w4-toast w4-toast-md">Mensaje de notificación estándar</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-primary">Primary</span>
                        <div class="w4-toast w4-toast-md w4-toast-primary">Acción principal completada</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-secondary">Secondary</span>
                        <div class="w4-toast w4-toast-md w4-toast-secondary">Notificación secundaria</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-accent">Accent</span>
                        <div class="w4-toast w4-toast-md w4-toast-accent">¡Nuevo logro desbloqueado!</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-info">Info</span>
                        <div class="w4-toast w4-toast-md w4-toast-info">Nueva actualización disponible</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-success">Success</span>
                        <div class="w4-toast w4-toast-md w4-toast-success">Registro guardado exitosamente</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-warning">Warning</span>
                        <div class="w4-toast w4-toast-md w4-toast-warning">Atención: Conexión inestable</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs w4-label-error">Error</span>
                        <div class="w4-toast w4-toast-md w4-toast-error">Error al procesar la solicitud</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-toast-surface" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Variantes Estilísticas (Surface)
            </h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-3">
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs text-center">Soft (.w4-toast-soft)</span>
                        <div class="w4-toast w4-toast-md w4-toast-soft">Mensaje con estilo suave (Soft)</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs text-center">Outline (.w4-toast-outline) + Primary</span>
                        <div class="w4-toast w4-toast-md w4-toast-primary w4-toast-outline">Notificación outline
                            (Bordes)</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs text-center">Outline (.w4-toast-outline) + Error</span>
                        <div class="w4-toast w4-toast-md w4-toast-error w4-toast-outline">Error en formato outline</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-toast-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-5">
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">XS (.w4-toast-xs)</span>
                        <div class="w4-toast w4-toast-xs w4-toast-primary">Notificación pequeña (XS)</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">SM (.w4-toast-sm)</span>
                        <div class="w4-toast w4-toast-sm w4-toast-primary">Notificación pequeña (SM)</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">MD (.w4-toast-md / Default)</span>
                        <div class="w4-toast w4-toast-md w4-toast-primary">Notificación normal (MD)</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">LG (.w4-toast-lg)</span>
                        <div class="w4-toast w4-toast-lg w4-toast-primary">Notificación grande (LG)</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">XL (.w4-toast-xl)</span>
                        <div class="w4-toast w4-toast-xl w4-toast-primary">Notificación muy grande (XL)</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-toast-states" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Data-States</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-4">
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">Normal</span>
                        <div class="w4-toast w4-toast-md w4-toast-info">Estado normal</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs text-center">Active (.w4-toast-active)<br>Escala y Sombra
                            mayor</span>
                        <div class="w4-toast w4-toast-md w4-toast-info w4-toast-active">Notificación prioritaria
                            (Activa)</div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs">Disabled (.w4-toast-disabled)</span>
                        <div class="w4-toast w4-toast-md w4-toast-info w4-toast-disabled">Notificación deshabilitada
                        </div>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-xs text-center">Hidden<br>(.w4-toast-hidden o
                            .w4-toast-dismissed)</span>
                        <div class="w4-toast w4-toast-md w4-toast-info w4-toast-hidden">No visible</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-toast-integration" class="w4-section w4-section-xl" style="padding-block-end: 2rem;">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración Dinámica y Posicionamiento
                (JS)</h2>
            <hr class="w4-divider w4-divider-info">

            <div class="toast-playground" id="toastPlayground" style="margin-block-start: 1.5rem;">
                <span class="w4-text w4-text-lg"
                    style="color: hsl(var(--w4-base-content) / 0.3); font-weight: 600;">Playground Area</span>

                <div class="toast-wrapper-playground top-right" id="tr-wrapper"></div>
                <div class="toast-wrapper-playground top-left" id="tl-wrapper"></div>
                <div class="toast-wrapper-playground bottom-right" id="br-wrapper"></div>
                <div class="toast-wrapper-playground bottom-left" id="bl-wrapper"></div>
                <div class="toast-wrapper-playground top-center" id="tc-wrapper"></div>
                <div class="toast-wrapper-playground bottom-center" id="bc-wrapper"></div>

                <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center"
                    style="flex-wrap: wrap; z-index: 10;">
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-success"
                        onclick="spawnToast('success', 'Operación exitosa', 'top-right')">Top Right</button>
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-error"
                        onclick="spawnToast('error', 'Error en el sistema', 'top-left')">Top Left</button>
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-info"
                        onclick="spawnToast('info', 'Nuevo mensaje recibido', 'bottom-right')">Bottom Right</button>
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-warning"
                        onclick="spawnToast('warning', 'Alerta de seguridad', 'bottom-left')">Bottom Left</button>
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-primary"
                        onclick="spawnToast('primary', 'Actualizado correctamente', 'top-center')">Top Center</button>
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-secondary"
                        onclick="spawnToast('secondary', 'Conexión establecida', 'bottom-center')">Bottom
                        Center</button>
                </div>
            </div>
        </section>

    </main>

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

        // Simulador dinámico de Toasts
        function spawnToast(type, message, position) {
            const wrapperId = position === 'top-right' ? 'tr-wrapper' :
                position === 'top-left' ? 'tl-wrapper' :
                    position === 'bottom-right' ? 'br-wrapper' :
                        position === 'bottom-left' ? 'bl-wrapper' :
                            position === 'top-center' ? 'tc-wrapper' : 'bc-wrapper';

            const wrapper = document.getElementById(wrapperId);

            const toast = document.createElement('div');
            toast.className = `w4-toast w4-toast-md w4-toast-${type}`;
            toast.innerText = message;

            // Append to wrapper
            wrapper.appendChild(toast);

            // Auto dismiss after 3 seconds
            setTimeout(() => {
                // Add fade out animation (using state dismissed)
                toast.setAttribute('data-w4-state', 'dismissed');

                // Remove from DOM after animation completes
                setTimeout(() => {
                    if (wrapper.contains(toast)) {
                        wrapper.removeChild(toast);
                    }
                }, 300);
            }, 3000);
        }
    </script>
</body>

</html>