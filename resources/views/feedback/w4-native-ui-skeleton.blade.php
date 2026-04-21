<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Skeleton Lab</title>
    @NativeUIStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div id="navbar-skeleton" class="w4-navbar w4-navbar-primary">
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

    <main id="main-skeleton" class="w4-container w4-container-xl">

        <div class="w4-section w4-section-xl">
            <h1 class="w4-heading w4-heading-h1 w4-heading-primary w4-heading-center">Native Skeleton</h1>
            <p class="w4-text w4-text-neutral w4-text-center">Entorno de pruebas visuales para el componente w4-skeleton
            </p>
        </div>

        <div id="description-skeleton" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Componente: W4 Skeleton</h2>
            <hr class="w4-divider w4-divider-primary">
            <p class="w4-text w4-text-lg w4-text-neutral">
                El componente Skeleton proporciona una representación visual anticipada (placeholder) de la interfaz
                mientras los datos subyacentes se están cargando. Esto mejora drásticamente el rendimiento percibido por
                el usuario en comparación con un spinner tradicional.
            </p>

            <h3 class="w4-heading w4-heading-h3 w4-heading-secondary mt-2">Casos de uso comunes:</h3>
            <ul class="w4-text w4-text-md w4-text-neutral w4-stack w4-stack-xs mt-2"
                style="padding-inline-start: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem; list-style-type: disc;">
                <li><strong class="w4-text-active">Carga de Tarjetas (Cards):</strong> Combinar formas de círculo
                    (avatar) y texto para imitar el perfil de un usuario antes de que la API responda.</li>
                <li><strong class="w4-text-active">DataGrids / Tablas:</strong> Renderizar filas de Skeletons para
                    mantener la estructura de la tabla estática mientras se realiza el fetching.</li>
                <li><strong class="w4-text-active">Imágenes de héroe:</strong> Usar la variante de bloque sin radio
                    (Square) para reservar el espacio de imágenes pesadas y evitar Layout Shifts (CLS).</li>
                <li><strong class="w4-text-active">Transiciones suaves:</strong> Utilizar el estado JS para desaparecer
                    el skeleton e intercambiarlo por el contenido real mediante opacidad.</li>
            </ul>
        </div>

        <section id="example-skeleton-shapes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-primary w4-heading-start">Formas (Shape Modifiers)</h2>
            <hr class="w4-divider w4-divider-primary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 200px;">
                        <div class="w4-skeleton w4-skeleton-loading" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs w4-label-neutral">Default (Rectangle)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 200px;">
                        <div class="w4-skeleton w4-skeleton-square w4-skeleton-loading" style="inline-size: 100%;">
                        </div>
                        <span class="w4-label w4-label-xs w4-label-neutral">Square (No radius)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 200px;">
                        <div class="w4-skeleton w4-skeleton-circle w4-skeleton-loading" style="inline-size: 3rem;">
                        </div>
                        <span class="w4-label w4-label-xs w4-label-neutral">Circle (1:1 ratio)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center"
                        style="min-inline-size: 200px; inline-size: 100%; max-inline-size: 300px;">
                        <div class="w4-skeleton w4-skeleton-title w4-skeleton-loading"></div>
                        <span class="w4-label w4-label-xs w4-label-neutral">Title (50% width)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center"
                        style="min-inline-size: 200px; inline-size: 100%; max-inline-size: 300px;">
                        <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                        <span class="w4-label w4-label-xs w4-label-neutral">Text (100% width)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-skeleton-sizes" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-secondary w4-heading-start">Tamaños Explícitos (XS - XL)</h2>
            <hr class="w4-divider w4-divider-secondary">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <div class="w4-skeleton w4-skeleton-xs w4-skeleton-loading" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs">XS (0.5rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <div class="w4-skeleton w4-skeleton-sm w4-skeleton-loading" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs">SM (0.75rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <div class="w4-skeleton w4-skeleton-md w4-skeleton-loading" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs">MD (1rem / Default)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <div class="w4-skeleton w4-skeleton-lg w4-skeleton-loading" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs">LG (1.25rem)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 150px;">
                        <div class="w4-skeleton w4-skeleton-xl w4-skeleton-loading" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs">XL (1.5rem)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-skeleton-composition" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-accent w4-heading-start">Composición: Layout Card</h2>
            <hr class="w4-divider w4-divider-accent">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-center">
                    <div class="w4-panel w4-panel-base-100 w4-panel-md"
                        style="inline-size: 100%; max-inline-size: 400px; box-shadow: var(--w4-shadow-md);">
                        <div class="w4-stack w4-stack-md">
                            <!-- User Info / Avatar -->
                            <div class="w4-stack w4-stack-horizontal w4-stack-sm" style="align-items: center;">
                                <div class="w4-skeleton w4-skeleton-circle w4-skeleton-loading"
                                    style="inline-size: 3rem;"></div>
                                <div class="w4-stack w4-stack-xs" style="flex: 1;">
                                    <div class="w4-skeleton w4-skeleton-title w4-skeleton-loading"
                                        style="inline-size: 70%;"></div>
                                    <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"
                                        style="inline-size: 40%;"></div>
                                </div>
                            </div>

                            <!-- Image Placeholder -->
                            <div class="w4-skeleton w4-skeleton-loading"
                                style="inline-size: 100%; block-size: 150px; border-radius: var(--w4-radius-card);">
                            </div>

                            <!-- Content lines -->
                            <div class="w4-stack w4-stack-xs">
                                <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                                <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                                <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading" style="inline-size: 80%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-skeleton-states" class="w4-section w4-section-xl">
            <h2 class="w4-heading w4-heading-h2 w4-heading-error w4-heading-start">Estados CSS / Data-States</h2>
            <hr class="w4-divider w4-divider-error">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-horizontal w4-stack-md w4-stack-center" style="flex-wrap: wrap;">
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 180px;">
                        <div class="w4-skeleton" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs text-center">Normal<br>(Sin animación)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 180px;">
                        <div class="w4-skeleton w4-skeleton-loading" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs text-center">Loading<br>(.w4-skeleton-loading)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 180px;">
                        <div class="w4-skeleton w4-skeleton-loading w4-skeleton-active" style="inline-size: 100%;">
                        </div>
                        <span class="w4-label w4-label-xs text-center">Active<br>(.w4-skeleton-active)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 180px;">
                        <div class="w4-skeleton w4-skeleton-loading w4-skeleton-disabled" style="inline-size: 100%;">
                        </div>
                        <span class="w4-label w4-label-xs text-center">Disabled<br>(.w4-skeleton-disabled)</span>
                    </div>
                    <div class="w4-stack w4-stack-xs w4-stack-center" style="min-inline-size: 180px;">
                        <div class="w4-skeleton w4-skeleton-hidden" style="inline-size: 100%;"></div>
                        <span class="w4-label w4-label-xs text-center">Hidden<br>(.w4-skeleton-hidden)</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="example-skeleton-integration" class="w4-section w4-section-xl" style="padding-block-end: 2rem;">
            <h2 class="w4-heading w4-heading-h2 w4-heading-info w4-heading-start">Integración Dinámica (JS)</h2>
            <hr class="w4-divider w4-divider-info">
            <div class="w4-panel w4-panel-base-200 w4-panel-md">
                <div class="w4-stack w4-stack-md" style="flex-direction: column; align-items: center;">

                    <div class="w4-panel w4-panel-base-100 w4-panel-md"
                        style="box-shadow: var(--w4-shadow-md); inline-size: 100%; max-inline-size: 400px; margin-block-end: 1.5rem;">
                        <div id="jsSkeletonContainer" class="w4-stack w4-stack-xs"
                            style="transition: opacity 0.3s; text-align: start;">
                            <div id="jsSkelTitle" class="w4-skeleton w4-skeleton-title" data-w4-state="loading"></div>
                            <div id="jsSkelText1" class="w4-skeleton w4-skeleton-text" data-w4-state="loading"></div>
                            <div id="jsSkelText2" class="w4-skeleton w4-skeleton-text" data-w4-state="loading"
                                style="inline-size: 70%;"></div>
                        </div>
                    </div>

                    <div class="w4-stack w4-stack-horizontal w4-stack-xs w4-stack-center" style="flex-wrap: wrap;">
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-primary"
                            onclick="toggleSkeletonAnimation()">Alternar Animación</button>
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-secondary"
                            onclick="toggleSkeletonDisabled()">Alternar Disabled (Pausar)</button>
                        <button class="w4-button w4-button-sm w4-button-outline w4-button-neutral"
                            onclick="toggleSkeletonHidden()">Alternar Hidden</button>
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

        // Controles de JS para Skeleton
        function getSkeletonElements() {
            return [
                document.getElementById('jsSkelTitle'),
                document.getElementById('jsSkelText1'),
                document.getElementById('jsSkelText2')
            ];
        }

        function toggleSkeletonAnimation() {
            const elements = getSkeletonElements();
            const firstEl = elements[0];

            // Check if current state includes loading
            const hasLoading = firstEl.getAttribute('data-w4-state') === 'loading' ||
                firstEl.classList.contains('w4-skeleton-loading');

            elements.forEach(el => {
                if (hasLoading) {
                    el.removeAttribute('data-w4-state');
                    el.classList.remove('w4-skeleton-loading');
                } else {
                    el.setAttribute('data-w4-state', 'loading');
                    el.classList.add('w4-skeleton-loading');
                }
            });
        }

        function toggleSkeletonDisabled() {
            const elements = getSkeletonElements();
            const firstEl = elements[0];

            // Note: disabled pauses the animation according to CSS
            const isDisabled = firstEl.classList.contains('w4-skeleton-disabled');

            elements.forEach(el => {
                if (isDisabled) {
                    el.classList.remove('w4-skeleton-disabled');
                    el.removeAttribute('data-w4-state');
                    // restore loading state if it was there visually
                    el.classList.add('w4-skeleton-loading');
                } else {
                    el.classList.add('w4-skeleton-disabled');
                    el.setAttribute('data-w4-state', 'disabled');
                }
            });
        }

        function toggleSkeletonHidden() {
            const container = document.getElementById('jsSkeletonContainer');

            if (container.style.opacity === '0') {
                container.style.opacity = '1';
                // Wait for fade in, then display block isn't needed if we just use opacity, 
                // but if using hidden class we could do this:
                setTimeout(() => {
                    container.classList.remove('w4-skeleton-hidden');
                }, 10);
            } else {
                container.style.opacity = '0';
                // Wait for fade out
                setTimeout(() => {
                    container.classList.add('w4-skeleton-hidden');
                }, 300);
            }
        }
    </script>
</body>

</html>