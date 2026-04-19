<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Modal Lab</title>
    @NativeUIStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="w4-navbar w4-navbar-primary">
        <div class="w4-navbar-start">
            <button class="w4-button w4-button-ghost w4-button-square">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w4-icon w4-icon-md stroke-current">
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
            <div class="w4-stack w4-stack-xs">
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

    <main class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Modal</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente de estado
                w4-modal</p>
        </div>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Modal</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente <strong>Modal</strong> (cuadro de diálogo) es una ventana superpuesta que requiere la
                atención del usuario y bloquea temporalmente la interacción con el resto de la página. Es perfecto para
                mostrar información importante, confirmaciones o formularios sin que el usuario pierda su contexto
                actual.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Casos de Uso Comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs w4-stack-vertical">
                <li><strong>Confirmaciones críticas:</strong> Preguntar al usuario "¿Estás seguro?" antes de eliminar un
                    registro (Modal de Advertencia/Error).</li>
                <li><strong>Formularios contextuales:</strong> Crear o editar un registro rápidamente (ej. "Añadir nuevo
                    usuario") sin cambiar de página.</li>
                <li><strong>Visualización de detalles:</strong> Mostrar la información completa de un elemento de una
                    tabla o lista al hacer clic sobre él.</li>
                <li><strong>Mensajes y notificaciones:</strong> Mostrar términos y condiciones o actualizaciones
                    importantes del sistema.</li>
            </ul>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Comportamiento Básico y Cierre</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-4">
                    <!-- Modal Center (Default) -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted">Alineación Central (Default)</span>
                        <button class="w4-button w4-button-primary w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-center">Abrir Modal
                            Central</button>

                        <div id="modal-center" class="w4-modal">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-primary">¡Hola desde el centro!</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Este es el comportamiento predeterminado
                                    del modal. Se posiciona en el centro de la pantalla con una animación suave desde
                                    abajo.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-ghost" data-w4-dismiss="modal">Cerrar</button>
                                    <button class="w4-button w4-button-primary" data-w4-dismiss="modal">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Top -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted">Alineación Superior (.w4-modal-top)</span>
                        <button class="w4-button w4-button-secondary w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-top">Abrir Modal
                            Arriba</button>

                        <div id="modal-top" class="w4-modal w4-modal-top">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">¡Hola desde arriba!</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Esta variante usa `.w4-modal-top` para
                                    alinearse al principio de la pantalla.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-secondary"
                                        data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Bottom -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted">Alineación Inferior (.w4-modal-bottom)</span>
                        <button class="w4-button w4-button-accent w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-bottom">Abrir Modal
                            Abajo</button>

                        <div id="modal-bottom" class="w4-modal w4-modal-bottom">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-accent">¡Hola desde abajo!</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Esta variante usa `.w4-modal-bottom`.
                                    Ahora mantiene un margen de 2rem desde el borde inferior de la pantalla y respeta su
                                    radio de borde original.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-accent" data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Static (No cierra afuera) -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <span class="w4-label w4-label-md w4-text-muted">Cierre Estricto (Static)</span>
                        <button class="w4-button w4-button-error w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-static">Abrir Modal
                            Estricto</button>

                        <div id="modal-static" class="w4-modal" data-w4-backdrop="static">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-error">Modal Estático</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Intenta hacer clic afuera de esta caja (en
                                    el fondo oscuro). ¡No se cerrará! Solo puedes cerrarlo explícitamente con los
                                    botones. Esto se logra añadiendo el atributo <code>data-w4-backdrop="static"</code>
                                    al modal.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-error" data-w4-dismiss="modal">Entendido,
                                        Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Variantes de Tamaño (Max-Width y
                Altura)</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-3">
                    <!-- XS -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-xs">Modal
                            XS</button>
                        <div id="modal-xs" class="w4-modal w4-modal-xs">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h4 w4-heading-info">Tamaño XS (20rem)</h3>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-sm"
                                    style="margin-block-start: 1rem;">
                                    <button class="w4-button w4-button-info w4-button-sm"
                                        data-w4-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SM -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-sm">Modal
                            SM</button>
                        <div id="modal-sm" class="w4-modal w4-modal-sm">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-info">Tamaño SM (24rem)</h3>
                                <p class="w4-text w4-text-sm w4-text-neutral">Ideal para confirmaciones rápidas.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-sm"
                                    style="margin-block-start: 1rem;">
                                    <button class="w4-button w4-button-info w4-button-sm"
                                        data-w4-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MD -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-md">Modal
                            MD</button>
                        <div id="modal-md" class="w4-modal w4-modal-md">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-info">Tamaño MD (32rem)</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">El tamaño predeterminado del sistema.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1rem;">
                                    <button class="w4-button w4-button-info" data-w4-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LG -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-lg">Modal
                            LG</button>
                        <div id="modal-lg" class="w4-modal w4-modal-lg">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h2 w4-heading-info">Tamaño LG (48rem)</h3>
                                <p class="w4-text w4-text-lg w4-text-neutral">Perfecto para formularios complejos o
                                    vista de detalles.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md">
                                    <button class="w4-button w4-button-info w4-button-lg"
                                        data-w4-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- XL -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-xl">Modal
                            XL</button>
                        <div id="modal-xl" class="w4-modal w4-modal-xl">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h2 w4-heading-info">Tamaño XL (64rem)</h3>
                                <p class="w4-text w4-text-lg w4-text-neutral">Ideal para interfaces de gestión o tablas
                                    de datos extensas que requieren mucho espacio horizontal.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1rem;">
                                    <button class="w4-button w4-button-info w4-button-md"
                                        data-w4-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2XL -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-2xl">Modal
                            2XL</button>
                        <div id="modal-2xl" class="w4-modal w4-modal-2xl">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h2 w4-heading-info">Tamaño 2XL (72rem)</h3>
                                <p class="w4-text w4-text-lg w4-text-neutral">Excelente para dashboards internos,
                                    editores de contenido o visualización
                                    de múltiples columnas.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1rem;">
                                    <button class="w4-button w4-button-info w4-button-md"
                                        data-w4-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3XL -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-3xl">Modal
                            3XL</button>
                        <div id="modal-3xl" class="w4-modal w4-modal-3xl">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h2 w4-heading-info">Tamaño 3XL (80rem)</h3>
                                <p class="w4-text w4-text-lg w4-text-neutral">El tamaño máximo antes de pantalla
                                    completa (1280px). Utilizado en layouts súper anchos o vistas maestras complejas.
                                </p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1rem;">
                                    <button class="w4-button w4-button-info w4-button-md"
                                        data-w4-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FULL -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-full">Modal
                            Full</button>
                        <div id="modal-full" class="w4-modal w4-modal-full">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h1 w4-heading-info">Tamaño Full Screen (100%)</h3>
                                <p class="w4-text w4-text-xl w4-text-neutral">Abarca casi toda la pantalla, perdiendo el
                                    radio de borde para emular una página completa. Útil para flujos inmersivos.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: auto;">
                                    <button class="w4-button w4-button-info" data-w4-dismiss="modal">Cerrar
                                        Experiencia</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CONFIGURATION (Escalado Horizontal y Vertical) -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-config">Modal
                            Configuración</button>
                        <div id="modal-config" class="w4-modal w4-modal-lg w4-modal-h-screen">
                            <div class="w4-modal-box w4-stack w4-stack-vertical">
                                <h3 class="w4-heading w4-heading-h2 w4-heading-info">Configuración de Usuario</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Ejemplo de escalado horizontal
                                    (.w4-modal-lg) y vertical (.w4-modal-h-screen).</p>

                                <div class="w4-panel w4-panel-base-200 w4-panel-sm"
                                    style="flex: 1; overflow-y: auto; margin-block: 1rem;">
                                    <div class="w4-grid w4-grid-md w4-grid-2">
                                        <!-- Opciones simuladas de configuración -->
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md">Tema Preferido</label>
                                            <select class="w4-select w4-select-md w4-select-info">
                                                <option>Automático</option>
                                                <option>Claro</option>
                                                <option>Oscuro</option>
                                            </select>
                                        </div>
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md">Zona Horaria</label>
                                            <select class="w4-select w4-select-md w4-select-info">
                                                <option>UTC-06:00 (Ciudad de México)</option>
                                                <option>UTC-05:00 (Bogotá, Lima, Quito)</option>
                                                <option>UTC-03:00 (Buenos Aires)</option>
                                            </select>
                                        </div>
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md">Notificaciones por Correo</label>
                                            <label class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-start"
                                                style="cursor: pointer;">
                                                <input type="checkbox" class="w4-toggle w4-toggle-info w4-toggle-md"
                                                    checked />
                                                <span class="w4-label w4-label-sm w4-text-neutral">Recibir resumen
                                                    semanal</span>
                                            </label>
                                        </div>
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md">Autenticación de Dos Factores</label>
                                            <label class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-start"
                                                style="cursor: pointer;">
                                                <input type="checkbox" class="w4-toggle w4-toggle-info w4-toggle-md" />
                                                <span class="w4-label w4-label-sm w4-text-neutral">Habilitar 2FA</span>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="w4-text w4-text-sm w4-text-muted" style="margin-block-start: 1rem;">El
                                        contenido interno se distribuye horizontalmente (w4-grid-2) y hace scroll
                                        automáticamente gracias a la altura definida por
                                        <code>.w4-modal-h-screen</code>.
                                    </p>
                                </div>

                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md">
                                    <button class="w4-button w4-button-ghost" data-w4-dismiss="modal">Cancelar</button>
                                    <button class="w4-button w4-button-info" data-w4-dismiss="modal">Guardar
                                        Preferencias</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Variantes Semánticas (Bordes)</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-3">

                    <!-- Primary Modal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-primary w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-primary">Modal
                            Primary</button>
                        <div id="modal-primary" class="w4-modal w4-modal-primary">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Destacado Principal</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Este modal usa el color primario para su
                                    borde.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-primary" data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Modal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-secondary w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-secondary">Modal
                            Secondary</button>
                        <div id="modal-secondary" class="w4-modal w4-modal-secondary">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Enfoque Secundario</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Modal con la variante semántica
                                    secundaria.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-secondary"
                                        data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accent Modal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-accent w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-accent">Modal
                            Accent</button>
                        <div id="modal-accent" class="w4-modal w4-modal-accent">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-accent">Dato Resaltado</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Usando el color de acento para captar la
                                    atención.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-accent" data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Modal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-info w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-info">Modal
                            Info</button>
                        <div id="modal-info" class="w4-modal w4-modal-info">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h3 w4-heading-info">Información Importante</h3>
                                <p class="w4-text w4-text-md w4-text-neutral">Modal informativo para guiar al usuario.
                                </p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-info" data-w4-dismiss="modal">Entendido</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Success Modal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-success w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-success">Modal
                            Success</button>
                        <div id="modal-success" class="w4-modal w4-modal-success">
                            <div class="w4-modal-box">
                                <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-xl"
                                        style="color: hsl(var(--w4-success));" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <h3 class="w4-heading w4-heading-h3 w4-heading-success">¡Operación Exitosa!</h3>
                                        <p class="w4-text w4-text-md w4-text-neutral">El registro ha sido guardado
                                            correctamente en la base de datos.</p>
                                    </div>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-success"
                                        data-w4-dismiss="modal">Continuar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Warning Modal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-warning w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-warning">Modal
                            Warning</button>
                        <div id="modal-warning" class="w4-modal w4-modal-warning">
                            <div class="w4-modal-box">
                                <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-xl"
                                        style="color: hsl(var(--w4-warning));" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <div>
                                        <h3 class="w4-heading w4-heading-h3 w4-heading-warning">Acción Irreversible</h3>
                                        <p class="w4-text w4-text-md w4-text-neutral">Estás a punto de modificar un
                                            registro compartido. ¿Deseas continuar?</p>
                                    </div>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-ghost" data-w4-dismiss="modal">Cancelar</button>
                                    <button class="w4-button w4-button-warning"
                                        data-w4-dismiss="modal">Modificar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Error Modal -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-error w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-error">Modal
                            Error</button>
                        <div id="modal-error" class="w4-modal w4-modal-error">
                            <div class="w4-modal-box">
                                <div class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w4-icon w4-icon-xl"
                                        style="color: hsl(var(--w4-error));" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <h3 class="w4-heading w4-heading-h3 w4-heading-error">Fallo de Conexión</h3>
                                        <p class="w4-text w4-text-md w4-text-neutral">No se pudo contactar con el
                                            servidor. Por favor, verifica tu conexión a internet e inténtalo de nuevo.
                                        </p>
                                    </div>
                                </div>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md"
                                    style="margin-block-start: 1.5rem;">
                                    <button class="w4-button w4-button-error w4-button-outline"
                                        data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Integración con Formularios</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-grid w4-grid-md w4-grid-2">

                    <!-- Form Modal: Login -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-primary w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-form-login">Modal
                            Login</button>

                        <div id="modal-form-login" class="w4-modal w4-modal-primary">
                            <div class="w4-modal-box">
                                <div class="w4-stack w4-stack-vertical w4-stack-sm w4-stack-center w4-text-center">
                                    <h3 class="w4-heading w4-heading-h3 w4-heading-primary">Bienvenido de nuevo</h3>
                                    <p class="w4-text w4-text-sm w4-text-neutral">Ingresa tus credenciales para acceder
                                        a tu cuenta.</p>
                                </div>

                                <form class="w4-stack w4-stack-vertical w4-stack-md" onsubmit="event.preventDefault();">
                                    <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                        <label class="w4-label w4-label-md w4-label-required">Correo Electrónico</label>
                                        <input type="email" class="w4-input w4-input-sm w4-input-primary"
                                            placeholder="ejemplo@correo.com" />
                                    </div>

                                    <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                        <label class="w4-label w4-label-md w4-label-required">Contraseña</label>
                                        <input type="password" class="w4-input w4-input-sm w4-input-primary"
                                            placeholder="••••••••" />
                                        <a href="#" class="w4-link w4-link-primary w4-link-sm w4-text-right">¿Olvidaste
                                            tu contraseña?</a>
                                    </div>

                                    <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-end"
                                        style="margin-block-start: 1rem;">
                                        <button type="button" class="w4-button w4-button-ghost"
                                            data-w4-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="w4-button w4-button-primary"
                                            data-w4-dismiss="modal">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Form Modal: Edit Contact -->
                    <div class="w4-panel w4-panel-base-100 w4-panel-sm w4-stack w4-stack-vertical w4-stack-center">
                        <button class="w4-button w4-button-secondary w4-button-md" data-w4-toggle="modal"
                            data-w4-target="modal-form-contact">Modal
                            Datos de Contacto</button>

                        <div id="modal-form-contact" class="w4-modal w4-modal-secondary w4-modal-2xl">
                            <div class="w4-modal-box">
                                <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-start">
                                    <h3 class="w4-heading w4-heading-h3 w4-heading-secondary">Actualizar Datos</h3>
                                    <p class="w4-text w4-text-sm w4-text-muted mb-8">Ingresa tu información de contacto
                                        actualizada.</p>
                                </div>

                                <form class="w4-stack w4-stack-vertical w4-stack-md" onsubmit="event.preventDefault();">

                                    <div class="w4-grid w4-grid-md w4-grid-4">
                                        <!-- Nombre Completo -->
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md w4-label-required">Nombre</label>


                                            <input type="text" class="w4-input w4-input-primary"
                                                placeholder="Ej. Juan P." />

                                        </div>

                                        <!-- Correo Electrónico -->
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md w4-label-required">Correo</label>


                                            <input type="email" class="w4-input w4-input-primary"
                                                placeholder="correo@..." />

                                        </div>

                                        <!-- Teléfono -->
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md w4-label-required">Teléfono</label>
                                            <input type="tel" class="w4-input w4-input-primary" placeholder="+52..." />

                                        </div>

                                        <!-- Dirección Física (Textarea) -->
                                        <div class="w4-stack w4-stack-vertical w4-stack-xs">
                                            <label class="w4-label w4-label-md w4-label-required">Dirección</label>
                                            <textarea class="w4-textarea w4-textarea-xs w4-textarea-primary"
                                                placeholder="Calle..."></textarea>
                                        </div>
                                    </div>

                                    <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-end"
                                        style="margin-block-start: 1rem;">
                                        <button type="button" class="w4-button w4-button-ghost"
                                            data-w4-dismiss="modal">Cancelar</button>
                                        <button type="button" class="w4-button w4-button-secondary"
                                            data-w4-dismiss="modal">Guardar
                                            Cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!-- CSS STATES SECTION -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados (CSS Classes & Atributos)
            </h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-wrap">

                    <!-- Normal (Solo para referencia) -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <button class="w4-button w4-button-neutral" data-w4-toggle="modal"
                            data-w4-target="modal-css-normal">Normal</button>
                        <div id="modal-css-normal" class="w4-modal">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h4">Modal Normal</h3>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md">
                                    <button class="w4-button w4-button-neutral" data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden Class -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <button class="w4-button w4-button-neutral w4-button-outline" data-w4-toggle="modal"
                            data-w4-target="modal-css-class-hidden">Hidden Class</button>

                        <div id="modal-css-class-hidden" class="w4-modal">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h4">Modal Hidden (.w4-modal-hidden)</h3>
                                <p class="w4-text w4-text-sm">Al presionar el botón, se añadirá la clase
                                    <code>.w4-modal-hidden</code> que forzará su desaparición temporal.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md w4-mt-4">
                                    <button class="w4-button w4-button-warning" onclick="
                                        const m = document.getElementById('modal-css-class-hidden');
                                        m.classList.add('w4-modal-hidden');
                                        setTimeout(() => m.classList.remove('w4-modal-hidden'), 2000);
                                    ">Ocultar 2s</button>
                                    <button class="w4-button w4-button-neutral" data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Disabled Class -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <button class="w4-button w4-button-neutral" data-w4-toggle="modal"
                            data-w4-target="modal-css-class-disabled">Disabled</button>
                        <div id="modal-css-class-disabled" class="w4-modal w4-modal-disabled">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h4">Modal Disabled (.w4-modal-disabled)</h3>
                                <p class="w4-text w4-text-sm">Interacciones bloqueadas por clase CSS.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md w4-mt-4">
                                    <button class="w4-button w4-button-neutral" data-w4-dismiss="modal">Inútil</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Class -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <button class="w4-button w4-button-neutral w4-button-active" data-w4-toggle="modal"
                            data-w4-target="modal-css-class-active">Active</button>
                        <div id="modal-css-class-active" class="w4-modal w4-modal-active">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h4">Modal Active (.w4-modal-active)</h3>
                                <p class="w4-text w4-text-sm">Forzado en el z-index superior.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md w4-mt-4">
                                    <button class="w4-button w4-button-neutral" data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Static Backdrop (Attr) -->
                    <div class="w4-stack w4-stack-vertical w4-stack-xs w4-stack-center">
                        <button class="w4-button w4-button-neutral" data-w4-toggle="modal"
                            data-w4-target="modal-css-attr-static">Static (Attr)</button>
                        <div id="modal-css-attr-static" class="w4-modal" data-w4-backdrop="static">
                            <div class="w4-modal-box">
                                <h3 class="w4-heading w4-heading-h4">Modal Static (data-w4-backdrop="static")</h3>
                                <p class="w4-text w4-text-sm">No cierra al dar clic afuera.</p>
                                <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md w4-mt-4">
                                    <button class="w4-button w4-button-neutral" data-w4-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- JS STATES SECTION (w4-state) -->
        <section class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-success w4-heading-start">Estados JS Soportados
                (data-w4-state)</h2>
            <hr class="w4-divider w4-divider-success">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">

                <div class="w4-stack w4-stack-horizontal w4-stack-between w4-stack-center w4-w-full">

                    <!-- Botón que dispara el modal interactivo -->
                    <button class="w4-button w4-button-success" data-w4-toggle="modal"
                        data-w4-target="jsInteractiveModal">
                        Abrir Dynamic JS Modal
                    </button>

                    <!-- Botonera de inyección de estados -->
                    <div
                        class="w4-stack w4-stack-horizontal w4-stack-sm w4-stack-center w4-stack-wrap w4-border-s w4-border-base-300 w4-ps-4">
                        <span class="w4-text w4-text-sm w4-text-muted w4-me-2">Set
                            State:</span>

                        <button class="w4-button w4-button-sm w4-button-outline"
                            onclick="document.getElementById('jsInteractiveModal').removeAttribute('data-w4-state')">Clear
                            (Normal)</button>

                        <!-- Open inyecta 'open' que abre el modal sin data-toggle -->
                        <button class="w4-button w4-button-sm w4-button-info"
                            onclick="document.getElementById('jsInteractiveModal').setAttribute('data-w4-state', 'open')">Open</button>

                        <!-- Disabled se notará visualmente si el modal ya está abierto -->
                        <button class="w4-button w4-button-sm w4-button-warning"
                            onclick="document.getElementById('jsInteractiveModal').setAttribute('data-w4-state', 'disabled')">Disabled</button>

                        <button class="w4-button w4-button-sm w4-button-secondary"
                            onclick="document.getElementById('jsInteractiveModal').setAttribute('data-w4-state', 'active')">Active</button>

                        <!-- Hidden cerrará/ocultará forzosamente el modal -->
                        <button class="w4-button w4-button-sm w4-button-error"
                            onclick="document.getElementById('jsInteractiveModal').setAttribute('data-w4-state', 'hidden')">Hidden</button>
                    </div>
                </div>

                <!-- El Modal Dinámico que recibirá los atributos -->
                <div id="jsInteractiveModal" class="w4-modal" data-w4-component="modal">
                    <div class="w4-modal-box">
                        <h3 class="w4-heading w4-heading-h3 w4-heading-success">Modal JS Interactivo</h3>
                        <p class="w4-text w4-text-md w4-text-neutral">A este modal se le inyectarán los atributos
                            <code>data-w4-state</code> en tiempo real mediante la botonera exterior o la API JS.
                        </p>
                        <p class="w4-text w4-text-xs w4-text-muted w4-mt-2">
                            (Tip: Si haces clic en "Disabled", el modal se volverá gris y no podrás cerrarlo. Deberás
                            hacer clic en "Clear" afuera para restaurarlo).
                        </p>
                        <div class="w4-stack w4-stack-horizontal w4-stack-end w4-stack-md w4-mt-6">
                            <!-- Asegurarse de limpiar el estado manual al cerrar para no romper la experiencia de prueba -->
                            <button class="w4-button w4-button-success" data-w4-dismiss="modal" onclick="
                                document.getElementById('jsInteractiveModal').removeAttribute('data-w4-state');
                            ">Cerrar</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

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