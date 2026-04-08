<!doctype html>
<html lang="es" data-theme="native.default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>W4 Theme Lab</title>
    @W4NativeStyles
    @vite('resources/js/app.js', 'resources/css/app.css')
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
                        <option value="native.synthwave">native.synthwave</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="w4-section w4-section-lg">
            <h2 class="w4-heading w4-heading-md">Buttons (Base & Semantic)</h2>
            <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-block-start: 0.75rem;">
                <button class="w4-button w4-button-primary w4-button-md">Primary</button>
                <button class="w4-button w4-button-secondary w4-button-md">Secondary</button>
                <button class="w4-button w4-button-accent w4-button-md">Accent</button>
                <button class="w4-button w4-button-neutral w4-button-md">Neutral</button>
                <button class="w4-button w4-button-info w4-button-md">Info</button>
                <button class="w4-button w4-button-success w4-button-md">Success</button>
                <button class="w4-button w4-button-warning w4-button-md">Warning</button>
                <button class="w4-button w4-button-error w4-button-md">Error</button>
            </div>

            <h2 class="w4-heading w4-heading-md" style="margin-block-start: 1.5rem;">Buttons (Styles & Modifiers)</h2>
            <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-block-start: 0.75rem;">
                <button class="w4-button w4-button-primary w4-button-outline w4-button-md">Outline</button>
                <button class="w4-button w4-button-secondary w4-button-dash w4-button-md">Dash</button>
                <button class="w4-button w4-button-accent w4-button-soft w4-button-md">Soft</button>
                <button class="w4-button w4-button-ghost w4-button-md">Ghost</button>
                <button class="w4-button w4-button-link w4-button-md">Link</button>
                <button class="w4-button w4-button-primary w4-button-md" data-w4-state="loading">Loading</button>
                <button class="w4-button w4-button-primary w4-button-md" data-w4-state="disabled"
                    disabled>Disabled</button>
            </div>

            <h2 class="w4-heading w4-heading-md" style="margin-block-start: 1.5rem;">Buttons (Shapes)</h2>
            <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-block-start: 0.75rem; align-items: center;">
                <button class="w4-button w4-button-primary w4-button-square w4-button-md">Sq</button>
                <button class="w4-button w4-button-secondary w4-button-circle w4-button-md">Ci</button>
                <button class="w4-button w4-button-accent w4-button-wide w4-button-md">Wide Button</button>
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
                <button class="w4-icon-button w4-icon-button-neutral w4-icon-button-md" aria-label="Ajustes">⚙</button>
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

        <section class="w4-section w4-section-lg">
            <h2 class="w4-heading w4-heading-md">Estados dinámicos (todos los componentes)</h2>
            <p class="w4-text w4-text-sm">Usa los controles para cambiar `data-w4-state` y validar hooks/ARIA/render.
            </p>

            <div class="w4-panel w4-panel-sm" style="margin-block-start:0.75rem;">
                <div
                    style="display:flex; justify-content:space-between; gap:0.75rem; align-items:center; flex-wrap:wrap;">
                    <strong class="w4-text w4-text-sm">Event log (w4:hook)</strong>
                    <button id="clearHookLog" class="w4-button w4-button-ghost w4-button-xs">Limpiar log</button>
                </div>
                <div id="hookLog"
                    style="margin-block-start:0.5rem; max-block-size:220px; overflow:auto; display:grid; gap:0.35rem;">
                </div>
            </div>

            <div style="display:grid; gap:1rem; margin-block-start:1rem;">
                <article class="w4-card w4-card-sm">
                    <div class="w4-card-body">
                        <strong class="w4-text w4-text-sm">button</strong>
                        <div style="margin-block:0.5rem;">
                            <button id="demoStateButton"
                                class="w4-button w4-button-primary w4-button-md">Guardar</button>
                        </div>
                        <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateButton"
                                data-demo-state="loading">loading</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateButton"
                                data-demo-state="disabled">disabled</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateButton"
                                data-demo-state="active">active</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateButton"
                                data-demo-state="readonly">readonly</button>
                            <button class="w4-button w4-button-ghost w4-button-xs" data-demo-target="demoStateButton"
                                data-demo-state="">clear</button>
                        </div>
                    </div>
                </article>

                <article class="w4-card w4-card-sm">
                    <div class="w4-card-body">
                        <strong class="w4-text w4-text-sm">icon-button</strong>
                        <div style="margin-block:0.5rem;">
                            <button id="demoStateIconButton"
                                class="w4-icon-button w4-icon-button-accent w4-icon-button-md"
                                aria-label="Acción">★</button>
                        </div>
                        <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateIconButton" data-demo-state="loading">loading</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateIconButton" data-demo-state="disabled">disabled</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateIconButton" data-demo-state="active">active</button>
                            <button class="w4-button w4-button-ghost w4-button-xs"
                                data-demo-target="demoStateIconButton" data-demo-state="">clear</button>
                        </div>
                    </div>
                </article>

                <article class="w4-card w4-card-sm">
                    <div class="w4-card-body">
                        <strong class="w4-text w4-text-sm">heading / text / label / link / icon / divider</strong>
                        <div style="display:grid; gap:0.5rem; margin-block:0.5rem;">
                            <h3 id="demoStateHeading" class="w4-heading w4-heading-h3 w4-heading-primary">Título
                                dinámico</h3>
                            <p id="demoStateText" class="w4-text w4-text-md">Texto dinámico</p>
                            <label id="demoStateLabel" class="w4-label w4-label-md" for="demoStateInput">Label
                                dinámico</label>
                            <a id="demoStateLink" href="#" class="w4-link w4-link-primary w4-link-md">Link dinámico</a>
                            <span id="demoStateIcon" class="w4-icon w4-icon-md w4-icon-secondary">◆</span>
                            <hr id="demoStateDivider" class="w4-divider w4-divider-md w4-divider-accent">
                        </div>
                        <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateHeading"
                                data-demo-state="active">heading:active</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateText"
                                data-demo-state="active">text:active</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateLabel"
                                data-demo-state="active">label:active</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateLink"
                                data-demo-state="disabled">link:disabled</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateIcon"
                                data-demo-state="active">icon:active</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateDivider"
                                data-demo-state="active">divider:active</button>
                            <button class="w4-button w4-button-ghost w4-button-xs"
                                data-demo-target="demoStateHeading,demoStateText,demoStateLabel,demoStateLink,demoStateIcon,demoStateDivider"
                                data-demo-state="">clear</button>
                        </div>
                    </div>
                </article>

                <article class="w4-card w4-card-sm">
                    <div class="w4-card-body">
                        <strong class="w4-text w4-text-sm">input / select / textarea</strong>
                        <div style="display:grid; gap:0.5rem; margin-block:0.5rem;">
                            <input id="demoStateInput" class="w4-input w4-input-default w4-input-md"
                                placeholder="Input dinámico">
                            <select id="demoStateSelect" class="w4-select w4-select-md">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                            </select>
                            <textarea id="demoStateTextarea" class="w4-textarea w4-textarea-md" rows="3"
                                placeholder="Textarea dinámico"></textarea>
                        </div>
                        <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateInput,demoStateSelect,demoStateTextarea"
                                data-demo-state="invalid">invalid</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateInput,demoStateSelect,demoStateTextarea"
                                data-demo-state="valid">valid</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateInput,demoStateSelect,demoStateTextarea"
                                data-demo-state="readonly">readonly</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateInput,demoStateSelect,demoStateTextarea"
                                data-demo-state="loading">loading</button>
                            <button class="w4-button w4-button-ghost w4-button-xs"
                                data-demo-target="demoStateInput,demoStateSelect,demoStateTextarea"
                                data-demo-state="">clear</button>
                        </div>
                    </div>
                </article>

                <article class="w4-card w4-card-sm">
                    <div class="w4-card-body">
                        <strong class="w4-text w4-text-sm">checkbox / radio / toggle</strong>
                        <div style="display:flex; gap:1rem; align-items:center; flex-wrap:wrap; margin-block:0.5rem;">
                            <label class="w4-label w4-label-sm"><input id="demoStateCheckbox" type="checkbox"
                                    class="w4-checkbox"> Checkbox</label>
                            <label class="w4-label w4-label-sm"><input id="demoStateRadio" type="radio" name="demoRadio"
                                    class="w4-radio"> Radio</label>
                            <label class="w4-label w4-label-sm"><input id="demoStateToggle" type="checkbox"
                                    class="w4-toggle"> Toggle</label>
                        </div>
                        <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateCheckbox" data-demo-state="checked">checkbox:checked</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateCheckbox"
                                data-demo-state="indeterminate">checkbox:indeterminate</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateRadio"
                                data-demo-state="selected">radio:selected</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateToggle"
                                data-demo-state="checked">toggle:checked</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateCheckbox,demoStateRadio,demoStateToggle"
                                data-demo-state="disabled">disabled</button>
                            <button class="w4-button w4-button-ghost w4-button-xs"
                                data-demo-target="demoStateCheckbox,demoStateRadio,demoStateToggle"
                                data-demo-state="">clear</button>
                        </div>
                    </div>
                </article>

                <article class="w4-card w4-card-sm">
                    <div class="w4-card-body">
                        <strong class="w4-text w4-text-sm">alert / badge / toast / progress / skeleton / tooltip / card
                            / panel / section / container / stack / grid</strong>
                        <div style="display:grid; gap:0.75rem; margin-block:0.5rem;">
                            <div id="demoStateAlert" class="w4-alert w4-alert-info w4-alert-md">Alerta dinámica</div>
                            <span id="demoStateBadge" class="w4-badge w4-badge-accent w4-badge-md">Badge</span>
                            <div id="demoStateToast" class="w4-toast w4-toast-md">Toast dinámico</div>
                            <progress id="demoStateProgress" class="w4-progress w4-progress-md" value="50"
                                max="100"></progress>
                            <div id="demoStateSkeleton" class="w4-skeleton w4-skeleton-md"></div>
                            <div id="demoStateTooltip" class="w4-tooltip w4-tooltip-md">Tooltip base</div>
                            <div id="demoStateCard" class="w4-card w4-card-md">
                                <div class="w4-card-body">Card dinámica</div>
                            </div>
                            <div id="demoStatePanel" class="w4-panel w4-panel-md">Panel dinámico</div>
                            <section id="demoStateSection" class="w4-section w4-section-md">Section dinámica</section>
                            <div id="demoStateContainer" class="w4-container w4-container-md">Container dinámico</div>
                            <div id="demoStateStack" class="w4-stack w4-stack-md"><span>A</span><span>B</span></div>
                            <div id="demoStateGrid" class="w4-grid w4-grid-2 w4-grid-md"><span>1</span><span>2</span>
                            </div>
                        </div>
                        <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateAlert,demoStateBadge,demoStateToast,demoStateProgress,demoStateSkeleton,demoStateCard,demoStatePanel,demoStateSection,demoStateContainer,demoStateStack,demoStateGrid"
                                data-demo-state="active">active</button>
                            <button class="w4-button w4-button-outline w4-button-xs"
                                data-demo-target="demoStateAlert,demoStateBadge,demoStateToast,demoStateProgress,demoStateSkeleton,demoStateCard,demoStatePanel,demoStateSection,demoStateContainer,demoStateStack,demoStateGrid"
                                data-demo-state="disabled">disabled</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateTooltip"
                                data-demo-state="hidden">tooltip:hidden</button>
                            <button class="w4-button w4-button-outline w4-button-xs" data-demo-target="demoStateTooltip"
                                data-demo-state="active">tooltip:active</button>
                            <button class="w4-button w4-button-ghost w4-button-xs"
                                data-demo-target="demoStateAlert,demoStateBadge,demoStateToast,demoStateProgress,demoStateSkeleton,demoStateTooltip,demoStateCard,demoStatePanel,demoStateSection,demoStateContainer,demoStateStack,demoStateGrid"
                                data-demo-state="">clear</button>
                        </div>
                    </div>
                </article>
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
                "native.synthwave",
            ];
            var storageKey = "w4-native-ui-theme";
            var switcher = document.getElementById("themeSwitcher");
            var hookLog = document.getElementById("hookLog");
            var clearHookLog = document.getElementById("clearHookLog");
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