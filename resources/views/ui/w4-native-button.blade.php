<!DOCTYPE html>
<html lang="en" data-theme="native.light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Native Button Lab</title>
    @W4NativeStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-200 min-h-screen p-8 text-base-content">

    <div class="max-w-6xl mx-auto space-y-12 bg-base-100 p-8 rounded-xl shadow-lg">

        <header class="border-b border-base-300 pb-6 flex justify-between items-start">
            <div>
                <h1 class="text-4xl font-bold">W4 Native: Button Lab</h1>
                <p class="text-lg text-base-content/70 mt-2">Laboratorio de pruebas visuales para el componente <code
                        class="bg-base-300 px-1 rounded">w4-button</code>.</p>
            </div>

            <!-- Selector de Temas -->
            <div class="flex flex-col gap-1">
                <label for="theme-selector" class="text-sm font-semibold text-base-content/80">Cambiar Tema:</label>
                <select id="theme-selector"
                    class="select select-bordered select-sm w-48 bg-base-100 text-base-content border-base-300 rounded"
                    onchange="document.documentElement.setAttribute('data-theme', this.value)">
                    <option value="native.light">Light</option>
                    <option value="native.dark">Dark</option>
                    <option value="native.acid">Acid</option>
                    <option value="native.aqua">Aqua</option>
                    <option value="native.autumn">Autumn</option>
                    <option value="native.black">Black</option>
                    <option value="native.bumblebee">Bumblebee</option>
                    <option value="native.business">Business</option>
                    <option value="native.cmyk">Cmyk</option>
                    <option value="native.coffee">Coffee</option>
                    <option value="native.corporate">Corporate</option>
                    <option value="native.cupcake">Cupcake</option>
                    <option value="native.cyberpunk">Cyberpunk</option>
                    <option value="native.dim">Dim</option>
                    <option value="native.dracula">Dracula</option>
                    <option value="native.emerald">Emerald</option>
                    <option value="native.fantasy">Fantasy</option>
                    <option value="native.forest">Forest</option>
                    <option value="native.garden">Garden</option>
                    <option value="native.halloween">Halloween</option>
                    <option value="native.lemonade">Lemonade</option>
                    <option value="native.lofi">Lofi</option>
                    <option value="native.luxury">Luxury</option>
                    <option value="native.night">Night</option>
                    <option value="native.nord">Nord</option>
                    <option value="native.pastel">Pastel</option>
                    <option value="native.retro">Retro</option>
                    <option value="native.sunset">Sunset</option>
                    <option value="native.synthwave">Synthwave</option>
                    <option value="native.valentine">Valentine</option>
                    <option value="native.winter">Winter</option>
                    <option value="native.wireframe">Wireframe</option>
                </select>
            </div>
        </header>

        <!-- Variantes -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-primary pl-3">Variantes (Variants)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-button">Default</button>
                <button class="w4-button w4-button-neutral">Neutral</button>
                <button class="w4-button w4-button-primary">Primary</button>
                <button class="w4-button w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-accent">Accent</button>
                <button class="w4-button w4-button-info">Info</button>
                <button class="w4-button w4-button-success">Success</button>
                <button class="w4-button w4-button-warning">Warning</button>
                <button class="w4-button w4-button-error">Error</button>
                <button class="w4-button w4-button-ghost">Ghost</button>
                <button class="w4-button w4-button-link">Link</button>
            </div>
        </section>

        <!-- Modificador Outline -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-secondary pl-3">Outline</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-button w4-button-outline">Outline Default</button>
                <button class="w4-button w4-button-outline w4-button-primary">Primary</button>
                <button class="w4-button w4-button-outline w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-outline w4-button-accent">Accent</button>
                <button class="w4-button w4-button-outline w4-button-info">Info</button>
                <button class="w4-button w4-button-outline w4-button-success">Success</button>
                <button class="w4-button w4-button-outline w4-button-warning">Warning</button>
                <button class="w4-button w4-button-outline w4-button-error">Error</button>
            </div>
        </section>

        <!-- Modificador Soft -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Soft</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-button w4-button-soft">Soft Default</button>
                <button class="w4-button w4-button-soft w4-button-primary">Primary</button>
                <button class="w4-button w4-button-soft w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-soft w4-button-accent">Accent</button>
                <button class="w4-button w4-button-soft w4-button-info">Info</button>
                <button class="w4-button w4-button-soft w4-button-success">Success</button>
                <button class="w4-button w4-button-soft w4-button-warning">Warning</button>
                <button class="w4-button w4-button-soft w4-button-error">Error</button>
            </div>
        </section>

        <!-- Modificador Dash -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-info pl-3">Dash</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-button w4-button-dash">Dash Default</button>
                <button class="w4-button w4-button-dash w4-button-primary">Primary</button>
                <button class="w4-button w4-button-dash w4-button-secondary">Secondary</button>
                <button class="w4-button w4-button-dash w4-button-accent">Accent</button>
                <button class="w4-button w4-button-dash w4-button-info">Info</button>
                <button class="w4-button w4-button-dash w4-button-success">Success</button>
                <button class="w4-button w4-button-dash w4-button-warning">Warning</button>
                <button class="w4-button w4-button-dash w4-button-error">Error</button>
            </div>
        </section>

        <!-- Tamaños -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Tamaños (Sizes)</h2>
            <div class="flex flex-wrap items-center gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-button w4-button-primary w4-button-xs">Extra Small (xs)</button>
                <button class="w4-button w4-button-primary w4-button-sm">Small (sm)</button>
                <button class="w4-button w4-button-primary w4-button-md">Medium (md)</button>
                <button class="w4-button w4-button-primary w4-button-lg">Large (lg)</button>
                <button class="w4-button w4-button-primary w4-button-xl">Extra Large (xl)</button>
            </div>
        </section>

        <!-- Estados -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-neutral pl-3">Estados (States)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-button w4-button-primary">Normal</button>
                <button class="w4-button w4-button-primary w4-button-active">Active</button>
                <button class="w4-button w4-button-primary w4-button-loading">Loading</button>
                <button class="w4-button w4-button-primary w4-button-disabled" disabled>Disabled</button>
                <button class="w4-button w4-button-primary w4-button-readonly" readonly>Readonly</button>
            </div>
        </section>

        <!-- Integración Runtime JS -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-success pl-3">Integración JS (Runtime data-w4-*)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-button w4-button-secondary" data-w4-component="button" data-w4-state="loading">
                    Data Loading
                </button>
                <button class="w4-button w4-button-secondary" data-w4-component="button" data-w4-state="disabled"
                    disabled>
                    Data Disabled
                </button>
            </div>
        </section>

    </div>

    @W4NativeScripts
    @W4NativeInit
    @W4NativeLivewire
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (!window.W4NativeUI) {
                return;
            }

            var availableThemes = [
                "native.light",
                "native.dark",
                "native.corporate",
                "native.night",
                "native.synthwave",
                "native.cupcake",
                "native.bumblebee",
                "native.emerald",
                "native.retro",
                "native.cyberpunk",
                "native.valentine",
                "native.halloween",
                "native.garden",
                "native.forest",
                "native.aqua",
                "native.lofi",
                "native.pastel",
                "native.fantasy",
                "native.wireframe",
                "native.black",
                "native.luxury",
                "native.dracula",
                "native.cmyk",
                "native.autumn",
                "native.business",
                "native.acid",
                "native.lemonade",
                "native.coffee",
                "native.winter",
                "native.dim",
                "native.nord",
                "native.sunset",
            ];
            var storageKey = "w4-native-ui-theme";
            var switcher = document.getElementById("themeSwitcher");
            var hookLog = document.getElementById("hookLog");
            var clearHookLog = document.getElementById("clearHookLog");
            var initial = localStorage.getItem(storageKey) || document.documentElement.getAttribute("data-theme") || "native.light";
            var safeInitial = availableThemes.indexOf(initial) !== -1 ? initial : "native.light";

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

            function inferComponentForDemo(target) {
                if (target.classList.contains("w4-button") || target.classList.contains("w4-btn")) return "button";
                if (target.classList.contains("w4-icon-button")) return "icon-button";
                if (target.classList.contains("w4-icon")) return "icon";
                if (target.classList.contains("w4-heading")) return "heading";
                if (target.classList.contains("w4-label")) return "label";
                if (target.classList.contains("w4-link")) return "link";
                if (target.classList.contains("w4-text")) return "text";
                if (target.classList.contains("w4-input")) return "input";
                if (target.classList.contains("w4-select")) return "select";
                if (target.classList.contains("w4-textarea")) return "textarea";
                if (target.classList.contains("w4-checkbox")) return "checkbox";
                if (target.classList.contains("w4-radio")) return "radio";
                if (target.classList.contains("w4-toggle")) return "toggle";
                if (target.classList.contains("w4-divider")) return "divider";
                if (target.classList.contains("w4-alert")) return "alert";
                if (target.classList.contains("w4-badge")) return "badge";
                if (target.classList.contains("w4-toast")) return "toast";
                if (target.classList.contains("w4-progress")) return "progress";
                if (target.classList.contains("w4-skeleton")) return "skeleton";
                if (target.classList.contains("w4-tooltip")) return "tooltip";
                if (target.classList.contains("w4-card")) return "card";
                if (target.classList.contains("w4-panel")) return "panel";
                if (target.classList.contains("w4-section")) return "section";
                if (target.classList.contains("w4-container")) return "container";
                if (target.classList.contains("w4-stack")) return "stack";
                if (target.classList.contains("w4-grid")) return "grid";
                return "";
            }

            function setDynamicState(targetId, state) {
                var target = document.getElementById(targetId);
                if (!target) {
                    return;
                }

                if (!target.getAttribute("data-w4-component")) {
                    var inferred = inferComponentForDemo(target);
                    if (inferred) {
                        target.setAttribute("data-w4-component", inferred);
                    }
                }
                target.setAttribute("data-w4-state", state);

                if (target.classList.contains("w4-button") || target.classList.contains("w4-btn") || target.classList.contains("w4-icon-button")) {
                    if (state.indexOf("disabled") !== -1) {
                        target.setAttribute("disabled", "disabled");
                    } else {
                        target.removeAttribute("disabled");
                    }
                }

                if (target.type === "checkbox" && target.classList.contains("w4-checkbox")) {
                    target.checked = state.indexOf("checked") !== -1;
                    target.indeterminate = state.indexOf("indeterminate") !== -1;
                }

                if (target.type === "radio" && target.classList.contains("w4-radio")) {
                    target.checked = state.indexOf("selected") !== -1;
                }

                if (target.classList.contains("w4-toggle")) {
                    target.checked = state.indexOf("checked") !== -1;
                }

                window.W4NativeUI.sync(target);
            }

            function appendHookLog(detail) {
                if (!hookLog) {
                    return;
                }

                var row = document.createElement("div");
                row.className = "w4-text w4-text-xs";
                row.style.padding = "0.35rem 0.5rem";
                row.style.border = "1px solid hsl(var(--w4-base-300))";
                row.style.borderRadius = "0.375rem";

                var time = new Date().toLocaleTimeString();
                var states = Array.isArray(detail.states) ? detail.states.join(", ") : "";
                row.textContent = "[" + time + "] " + detail.hook + " | component=" + detail.component + " | states=" + states;
                hookLog.prepend(row);

                while (hookLog.children.length > 60) {
                    hookLog.removeChild(hookLog.lastChild);
                }
            }

            window.W4NativeUI.on("w4:hook", function (detail) {
                appendHookLog(detail);
            });

            if (clearHookLog) {
                clearHookLog.addEventListener("click", function () {
                    if (!hookLog) {
                        return;
                    }

                    hookLog.innerHTML = "";
                });
            }

            document.addEventListener("click", function (event) {
                var control = event.target.closest("[data-demo-target]");
                if (!control) {
                    return;
                }

                event.preventDefault();
                var targetValue = control.getAttribute("data-demo-target") || "";
                var state = control.getAttribute("data-demo-state") || "";
                var targetIds = targetValue.split(",");

                for (var i = 0; i < targetIds.length; i += 1) {
                    var targetId = targetIds[i].trim();
                    if (!targetId) {
                        continue;
                    }

                    setDynamicState(targetId, state);
                }
            });
        });
    </script>

</body>

</html>