<!doctype html>
<html lang="es" data-theme="native.default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>W4 Theme Lab</title>
    @W4NativeStyles
</head>

<body>
    <main style="max-inline-size: 980px; margin: 2rem auto; padding: 0 1rem;">
        <section class="w4-card w4-card-md">
            <div class="w4-card-body">
                <h1 class="w4-heading w4-heading-lg">W4 Theme Lab</h1>
                <p class="w4-text w4-text-md">Prueba visual de presets, variantes y estados principales.</p>

                <div
                    style="display:flex; gap: 0.75rem; align-items: center; flex-wrap: wrap; margin-block-start: 1rem;">
                    <label class="w4-label w4-label-sm" for="themeSwitcher">Theme</label>
                    <select id="themeSwitcher" class="w4-select w4-select-md">
                        <option value="native.default">native.default</option>
                        <option value="native.dark">native.dark</option>
                        <option value="native.corporate">native.corporate</option>
                        <option value="native.soft">native.soft</option>
                        <option value="native.night">native.night</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-lg">
            <h2 class="w4-heading w4-heading-md">Buttons</h2>
            <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-block-start: 0.75rem;">
                <button class="w4-button w4-button-primary w4-button-md">Primary</button>
                <button class="w4-button w4-button-secondary w4-button-md">Secondary</button>
                <button class="w4-button w4-button-accent w4-button-md">Accent</button>
                <button class="w4-button w4-button-neutral w4-button-md">Neutral</button>
                <button class="w4-button w4-button-outline w4-button-md">Outline</button>
                <button class="w4-button w4-button-ghost w4-button-md">Ghost</button>
                <button class="w4-button w4-button-primary w4-button-md" data-w4-state="loading">Loading</button>
                <button class="w4-button w4-button-primary w4-button-md" data-w4-state="disabled"
                    disabled>Disabled</button>
            </div>
        </section>

        <section class="w4-section w4-section-lg">
            <h2 class="w4-heading w4-heading-md">Divider contraste</h2>
            <p class="w4-text w4-text-sm">Cambia de theme y revisa cómo varía el contraste de cada divider.</p>
            <hr class="w4-divider w4-divider-md w4-divider-neutral">
            <hr class="w4-divider w4-divider-md w4-divider-primary">
            <hr class="w4-divider w4-divider-md w4-divider-secondary">
            <hr class="w4-divider w4-divider-md w4-divider-accent">
            <hr class="w4-divider w4-divider-md w4-divider-muted">
        </section>

        <section class="w4-section w4-section-lg">
            <h2 class="w4-heading w4-heading-md">Heading</h2>
            <div style="display:grid; gap:0.5rem; margin-block-start: 0.75rem;">
                <h1 class="w4-heading w4-heading-h1 w4-heading-primary">Heading H1 Primary</h1>
                <h2 class="w4-heading w4-heading-h2 w4-heading-secondary">Heading H2 Secondary</h2>
                <h3 class="w4-heading w4-heading-h3 w4-heading-accent">Heading H3 Accent</h3>
                <h4 class="w4-heading w4-heading-h4 w4-heading-muted">Heading H4 Muted</h4>
                <h5 class="w4-heading w4-heading-h5 w4-heading-md w4-heading-active" data-w4-component="heading"
                    data-w4-state="active">Heading Active</h5>
            </div>
        </section>

        <section class="w4-section w4-section-lg">
            <h2 class="w4-heading w4-heading-md">IconButton + Icon</h2>
            <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-block-start: 0.75rem;">
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-md" aria-label="Buscar">🔍</button>
                <button class="w4-icon-button w4-icon-button-secondary w4-icon-button-md" aria-label="Editar">✎</button>
                <button class="w4-icon-button w4-icon-button-accent w4-icon-button-md" aria-label="Favorito">★</button>
                <button class="w4-icon-button w4-icon-button-neutral w4-icon-button-md w4-icon-spin"
                    aria-label="Ajustes">⚙</button>
                <button class="w4-icon-button w4-icon-button-ghost w4-icon-button-md" aria-label="Compartir">↗</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-md" data-w4-state="loading"
                    aria-label="Cargando">⏳</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-md" data-w4-state="disabled"
                    disabled aria-label="Deshabilitado">⛔</button>
            </div>

            <div style="display:flex; gap:0.75rem; flex-wrap:wrap; align-items:center; margin-block-start:1rem;">
                <span class="w4-icon w4-icon-primary w4-icon-md">★</span>
                <span class="w4-icon w4-icon-secondary w4-icon-lg">✦</span>
                <span class="w4-icon w4-icon-accent w4-icon-md w4-icon-spin">⟳</span>
                <span class="w4-icon w4-icon-muted w4-icon-sm">•</span>
                <span class="w4-icon w4-icon-md w4-icon-active" data-w4-component="icon" data-w4-state="active">⬤</span>
            </div>
        </section>

        <section class="w4-section w4-section-lg">
            <h2 class="w4-heading w4-heading-md">Label + Link + Text</h2>

            <div style="display:grid; gap:0.5rem; margin-block-start:0.75rem;">
                <label class="w4-label w4-label-md" for="demoName">Nombre</label>
                <label class="w4-label w4-label-required w4-label-sm" for="demoEmail">Correo</label>
                <label class="w4-label w4-label-primary w4-label-lg">Label Primary</label>
                <label class="w4-label w4-label-muted w4-label-sm">Label Muted</label>
                <input id="demoName" class="w4-input w4-input-default w4-input-md" placeholder="Escribe tu nombre">
                <input id="demoEmail" class="w4-input w4-input-default w4-input-md" placeholder="correo@ejemplo.com">
            </div>

            <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-block-start:1rem;">
                <a href="#" class="w4-link w4-link-primary w4-link-md">Link Primary</a>
                <a href="#" class="w4-link w4-link-secondary w4-link-md">Link Secondary</a>
                <a href="#" class="w4-link w4-link-accent w4-link-md">Link Accent</a>
                <a href="#" class="w4-link w4-link-neutral w4-link-md">Link Neutral</a>
                <a href="#" class="w4-link w4-link-muted w4-link-md">Link Muted</a>
                <a href="#" class="w4-link w4-link-primary w4-link-md w4-link-disabled" aria-disabled="true">Link
                    Disabled</a>
            </div>

            <div style="display:grid; gap:0.5rem; margin-block-start:1rem;">
                <p class="w4-text w4-text-md">Texto base del sistema.</p>
                <p class="w4-text w4-text-lead w4-text-lg">Texto lead para introducción.</p>
                <p class="w4-text w4-text-primary w4-text-md">Texto primary.</p>
                <p class="w4-text w4-text-secondary w4-text-md">Texto secondary.</p>
                <p class="w4-text w4-text-accent w4-text-md">Texto accent.</p>
                <p class="w4-text w4-text-muted w4-text-md">Texto muted.</p>
            </div>
        </section>
    </main>

    @W4NativeScripts
    @W4NativeInit
    @W4NativeLivewire
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (!window.W4NativeUI) {
                return;
            }

            var availableThemes = [
                "native.default",
                "native.dark",
                "native.corporate",
                "native.soft",
                "native.night",
            ];
            var storageKey = "w4-native-ui-theme";
            var switcher = document.getElementById("themeSwitcher");
            var initial = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native.default";
            var safeInitial = availableThemes.indexOf(initial) !== -1 ? initial : "native.default";

            window.W4NativeUI.setTheme(safeInitial);

            if (switcher) {
                switcher.value = safeInitial;
                switcher.addEventListener("change", function (event) {
                    var theme = event.target.value;
                    if (availableThemes.indexOf(theme) === -1) {
                        return;
                    }

                    window.W4NativeUI.setTheme(theme);
                    localStorage.setItem(storageKey, theme);
                });
            }
        });
    </script>
</body>

</html>