<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Skeleton Lab</title>
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
            gap: 2rem;
            padding: 2rem;
            background-color: hsl(var(--w4-base-200));
            border-radius: 0.75rem;
            align-items: center;
            justify-content: center;
        }

        .preview-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            background-color: hsl(var(--w4-base-100));
            padding: 1.5rem;
            border-radius: var(--w4-radius-card);
            box-shadow: var(--w4-shadow-sm);
            min-inline-size: 120px;
            text-align: center;
            inline-size: 100%;
        }

        .preview-label-desc {
            font-size: 0.75rem;
            color: hsl(var(--w4-base-content) / 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="lab-container">
        <header class="lab-header">
            <div>
                <h1 class="lab-title">W4 Native: Skeleton Lab</h1>
                <p class="lab-subtitle">Entorno de pruebas visuales para el componente de estado w4-skeleton</p>
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
            <h2 class="section-title">Formas (Shape Modifiers)</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">Default (Rectangle)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-square w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">Square (No radius)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-circle w4-skeleton-loading" style="inline-size: 3rem;"></div>
                    <span class="preview-label-desc">Circle (1:1 ratio)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-title w4-skeleton-loading"></div>
                    <span class="preview-label-desc">Title (50% width)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                    <span class="preview-label-desc">Text (100% width, smaller height)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-secondary))">Tamaños Explícitos (XS - XL)</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-xs w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">XS (0.5rem)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-sm w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">SM (0.75rem)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-md w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">MD (1rem / Default)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-lg w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">LG (1.25rem)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-xl w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">XL (1.5rem)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-accent))">Composición: Layout Card</h2>
            <div class="preview-group">
                <div
                    style="display: flex; flex-direction: column; gap: 1rem; inline-size: 300px; background: hsl(var(--w4-base-100)); padding: 1.5rem; border-radius: var(--w4-radius-card); box-shadow: var(--w4-shadow-md);">
                    <!-- User Info / Avatar -->
                    <div style="display: flex; gap: 1rem; align-items: center;">
                        <div class="w4-skeleton w4-skeleton-circle w4-skeleton-loading" style="inline-size: 3rem;">
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 0.5rem; flex: 1;">
                            <div class="w4-skeleton w4-skeleton-title w4-skeleton-loading" style="inline-size: 70%;">
                            </div>
                            <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading" style="inline-size: 40%;">
                            </div>
                        </div>
                    </div>

                    <!-- Image Placeholder -->
                    <div class="w4-skeleton w4-skeleton-loading"
                        style="inline-size: 150px; inline-size: 100%; border-radius: var(--w4-radius-card);"></div>

                    <!-- Content lines -->
                    <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                        <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                        <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading"></div>
                        <div class="w4-skeleton w4-skeleton-text w4-skeleton-loading" style="inline-size: 80%;"></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-error))">Estados CSS / Data-States</h2>
            <div class="preview-group" style="flex-direction: column;">
                <div class="preview-item">
                    <div class="w4-skeleton" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">Normal (Sin animación)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-loading" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">Loading (.w4-skeleton-loading)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-loading w4-skeleton-active" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">Active (Brightness / .w4-skeleton-active)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-loading w4-skeleton-disabled" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">Disabled (Paused / .w4-skeleton-disabled)</span>
                </div>
                <div class="preview-item">
                    <div class="w4-skeleton w4-skeleton-hidden" style="inline-size: 100%;"></div>
                    <span class="preview-label-desc">Hidden (.w4-skeleton-hidden)</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title" style="border-color: hsl(var(--w4-info))">Integración Dinámica (JS)</h2>
            <div class="preview-group" style="flex-direction: column;">

                <div class="preview-item" style="margin-block-bottom: 1rem; align-items: stretch; text-align: start;">
                    <div id="jsSkeletonContainer"
                        style="display: flex; flex-direction: column; gap: 0.5rem; transition: opacity 0.3s;">
                        <div id="jsSkelTitle" class="w4-skeleton w4-skeleton-title" data-w4-state="loading"></div>
                        <div id="jsSkelText1" class="w4-skeleton w4-skeleton-text" data-w4-state="loading"></div>
                        <div id="jsSkelText2" class="w4-skeleton w4-skeleton-text" data-w4-state="loading"
                            style="inline-size: 70%;"></div>
                    </div>
                </div>

                <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; justify-content: center;">
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-primary"
                        onclick="toggleSkeletonAnimation()">Alternar Animación</button>
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-secondary"
                        onclick="toggleSkeletonDisabled()">Alternar Disabled (Pausar)</button>
                    <button class="w4-button w4-button-sm w4-button-outline w4-button-neutral"
                        onclick="toggleSkeletonHidden()">Alternar Hidden</button>
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