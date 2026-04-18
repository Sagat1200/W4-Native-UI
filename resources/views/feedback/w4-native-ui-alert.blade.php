<!DOCTYPE html>
<html lang="en" data-theme="native-ui.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Alert Lab</title>
    @NativeUIStyles
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="w4-navbar w4-card-bordered w4-navbar-primary">
        <div class="w4-navbar-start w4-navbar-info">
            <a class="w4-button w4-button-ghost w4-text-xl">daisyUI</a>
        </div>
        <div class="w4-navbar-end">
            <button class="w4-button w4-button-ghost">Button</button>
        </div>
    </div>

    <main class="w4-container w4-container-xl">

        <div class="w4-section w4-section-md w4-section-secondary">
            <div class="w4-label w4-label-sm">Secondary Section</div>
            <p class="demo-content">Variante secundaria para contenido complementario.</p>
        </div>
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
    </script>
</body>

</html>