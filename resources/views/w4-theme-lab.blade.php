<!doctype html>
<html lang="es" data-theme="native.default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>W4 Theme Lab</title>
    @W4NativeStyles
    @vite('resources/css/app.css', 'resources/js/app.js')
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