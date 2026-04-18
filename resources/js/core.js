/**
 * =========================================
 * CORE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Properties & States Sync
 * =========================================
 */

export default class W4Core {
    static COMPONENT_SELECTORS = [
        ".w4-btn", ".w4-button", ".w4-icon-button", ".w4-icon", ".w4-heading",
        ".w4-label", ".w4-link", ".w4-text", ".w4-field-error", ".w4-helper-text",
        ".w4-divider", ".w4-input", ".w4-select", ".w4-textarea", ".w4-checkbox",
        ".w4-radio", ".w4-toggle", ".w4-tooltip", ".w4-alert", ".w4-badge", ".w4-loading",
        ".w4-progress", ".w4-skeleton", ".w4-toast", ".w4-modal", ".w4-card", ".w4-container", ".w4-grid", ".w4-panel", ".w4-section", ".w4-stack", ".w4-breadcrumb", ".w4-dropdown", ".w4-menu", ".w4-navbar", ".w4-sidebar", ".w4-tab",
        "[data-w4-component]",
        "[data-w4-state]", "[data-w4-hook]"
    ].join(", ");

    static COMPONENT_CLASS_MAP = {
        "w4-btn": "button", "w4-button": "button", "w4-icon-button": "icon-button",
        "w4-icon": "icon", "w4-heading": "heading", "w4-label": "label",
        "w4-link": "link", "w4-text": "text", "w4-field-error": "field-error",
        "w4-helper-text": "helper-text", "w4-divider": "divider", "w4-input": "input",
        "w4-select": "select", "w4-textarea": "textarea", "w4-checkbox": "checkbox",
        "w4-radio": "radio", "w4-toggle": "toggle", "w4-tooltip": "tooltip",
        "w4-alert": "alert", "w4-badge": "badge", "w4-loading": "loading",
        "w4-progress": "progress", "w4-skeleton": "skeleton", "w4-toast": "toast", "w4-modal": "modal",
        "w4-card": "card", "w4-container": "container", "w4-grid": "grid", "w4-panel": "panel", "w4-section": "section", "w4-stack": "stack", "w4-breadcrumb": "breadcrumb", "w4-dropdown": "dropdown", "w4-menu": "menu", "w4-navbar": "navbar", "w4-sidebar": "sidebar", "w4-tab": "tab"
    };

    static COMPONENT_STATES = {
        button: ["enabled", "disabled", "loading", "active", "readonly"],
        "icon-button": ["enabled", "disabled", "loading", "readonly", "active"],
        icon: ["enabled", "disabled", "active", "hidden"],
        heading: ["enabled", "disabled", "active", "hidden"],
        label: ["enabled", "disabled", "active", "hidden"],
        link: ["enabled", "disabled", "active", "hidden"],
        text: ["enabled", "disabled", "active", "hidden"],
        "field-error": ["enabled", "disabled", "active", "hidden"],
        "helper-text": ["enabled", "disabled", "active", "hidden"],
        divider: ["enabled", "disabled", "active", "hidden"],
        input: ["enabled", "disabled", "loading", "readonly", "invalid", "valid"],
        select: ["enabled", "disabled", "readonly", "invalid", "valid", "loading"],
        textarea: ["enabled", "disabled", "loading", "readonly", "invalid", "valid"],
        checkbox: ["enabled", "disabled", "readonly", "invalid", "valid", "loading", "checked", "indeterminate"],
        radio: ["enabled", "disabled", "readonly", "invalid", "valid", "loading", "selected"],
        toggle: ["enabled", "disabled", "readonly", "invalid", "valid", "loading", "checked"],
        tooltip: ["enabled", "disabled", "active", "hidden", "open"],
        alert: ["enabled", "disabled", "active", "hidden", "dismissed"],
        badge: ["enabled", "disabled", "active", "hidden", "highlighted"],
        loading: ["enabled", "disabled", "active", "hidden", "loading"],
        progress: ["enabled", "disabled", "active", "hidden", "loading", "indeterminate"],
        skeleton: ["enabled", "disabled", "active", "hidden", "loading"],
        toast: ["enabled", "disabled", "active", "hidden", "dismissed"],
        modal: ["enabled", "disabled", "active", "hidden", "open"],
        card: ["enabled", "disabled", "active", "hidden", "collapsed"],
        container: ["enabled", "disabled", "active", "hidden"],
        grid: ["enabled", "disabled", "active", "hidden"],
        panel: ["enabled", "disabled", "active", "hidden", "collapsed"],
        section: ["enabled", "disabled", "active", "hidden", "collapsed"],
        stack: ["enabled", "disabled", "active", "hidden"],
        breadcrumb: ["enabled", "disabled", "active", "hidden", "collapsed"],
        dropdown: ["enabled", "disabled", "active", "hidden", "open"],
        menu: ["enabled", "disabled", "active", "hidden", "open"],
        navbar: ["enabled", "disabled", "active", "hidden", "collapsed"],
        sidebar: ["enabled", "disabled", "active", "hidden", "collapsed", "open"],
        tab: ["enabled", "disabled", "active", "hidden", "selected"]
    };

    static listeners = {};

    static init(root = document) {
        const elements = root.querySelectorAll(this.COMPONENT_SELECTORS);
        elements.forEach(el => {
            this.bindReactiveEvents(el);
            this.syncElement(el);
        });

        // Setup mutation observer for dynamically added elements
        if (root === document && !this.observer) {
            this.observer = new MutationObserver(mutations => {
                mutations.forEach(mutation => {
                    mutation.addedNodes.forEach(node => {
                        if (node.nodeType !== 1) return;
                        
                        if (node.matches && node.matches(this.COMPONENT_SELECTORS)) {
                            this.bindReactiveEvents(node);
                            this.syncElement(node);
                        }
                        if (node.querySelectorAll) {
                            const children = node.querySelectorAll(this.COMPONENT_SELECTORS);
                            children.forEach(child => {
                                this.bindReactiveEvents(child);
                                this.syncElement(child);
                            });
                        }
                    });
                });
            });
            this.observer.observe(document.body, { childList: true, subtree: true });
        }
    }

    static bindReactiveEvents(element) {
        if (element.getAttribute("data-w4-js-bound") === "true") return;

        const sync = () => this.syncElement(element);

        element.addEventListener("change", sync);
        element.addEventListener("input", sync);
        element.addEventListener("focus", sync);
        element.addEventListener("blur", sync);
        element.addEventListener("click", sync);

        // Press feedback logic
        const applyPress = () => this.applyPressFeedback(element);
        const clearPress = () => this.clearPressFeedback(element);

        element.addEventListener("mousedown", applyPress);
        element.addEventListener("mouseup", clearPress);
        element.addEventListener("mouseleave", clearPress);
        element.addEventListener("touchstart", applyPress);
        element.addEventListener("touchend", clearPress);
        element.addEventListener("touchcancel", clearPress);
        
        element.setAttribute("data-w4-js-bound", "true");
    }

    static syncElement(element) {
        const component = this.resolveComponent(element);
        if (!component) return;

        const states = this.resolveStates(element, component);
        const hooks = this.resolveHooks(element, component, states);

        element.setAttribute("data-w4-component", component);
        if (states.length > 0) {
            element.setAttribute("data-w4-state", states.join(" "));
        } else {
            element.removeAttribute("data-w4-state");
        }
        if (hooks.length > 0) {
            element.setAttribute("data-w4-hook", hooks.join(" "));
        }

        this.applyAria(element, component, states);

        hooks.forEach(hook => this.emitHook(element, component, hook, states));
    }

    static resolveComponent(element) {
        const fromData = element.getAttribute("data-w4-component");
        if (fromData) return fromData.trim().toLowerCase();

        for (const className in this.COMPONENT_CLASS_MAP) {
            if (element.classList.contains(className)) {
                return this.COMPONENT_CLASS_MAP[className];
            }
        }
        return "";
    }

    static resolveStates(element, component) {
        let states = (element.getAttribute("data-w4-state") || "").split(/[\s,]+/).filter(Boolean);
        const knownStates = this.COMPONENT_STATES[component] || [];

        knownStates.forEach(state => {
            if (element.classList.contains(`w4-${component}-${state}`)) {
                states.push(state);
            }
        });

        if (element.hasAttribute("disabled") || element.getAttribute("aria-disabled") === "true") states.push("disabled");
        if (element.hasAttribute("readonly") || element.getAttribute("aria-readonly") === "true") states.push("readonly");
        if (element.getAttribute("aria-invalid") === "true") states.push("invalid");
        if (element.getAttribute("aria-busy") === "true") states.push("loading");
        
        if (element.type === "checkbox" && element.checked) states.push("checked");
        else if (element.type === "checkbox" && !element.checked) {
            // Remove 'checked' from states array if it exists but the element is not checked
            states = states.filter(s => s !== "checked");
        }

        if (element.type === "checkbox" && element.indeterminate) states.push("indeterminate");
        
        if (element.type === "radio" && element.checked) states.push("selected");
        else if (element.type === "radio" && !element.checked) {
             states = states.filter(s => s !== "selected");
        }

        return [...new Set(states)];
    }

    static resolveHooks(element, component, states) {
        let hooks = (element.getAttribute("data-w4-hook") || "").split(/[\s,]+/).filter(Boolean);
        states.forEach(state => hooks.push(`${component}:${state}`));
        return [...new Set(hooks)];
    }

    static applyAria(element, component, states) {
        const hasState = state => states.includes(state);

        if (hasState("disabled")) {
            element.setAttribute("aria-disabled", "true");
            if ("disabled" in element) element.disabled = true;
        } else if (element.hasAttribute("aria-disabled")) {
            element.setAttribute("aria-disabled", "false");
            if ("disabled" in element) element.disabled = false;
        }

        if (hasState("readonly")) {
            element.setAttribute("aria-readonly", "true");
            if ("readOnly" in element) element.readOnly = true;
        } else if (element.hasAttribute("aria-readonly")) {
            element.setAttribute("aria-readonly", "false");
            if ("readOnly" in element) element.readOnly = false;
        }

        if (hasState("invalid")) {
            element.setAttribute("aria-invalid", "true");
        } else if (hasState("valid")) {
            element.setAttribute("aria-invalid", "false");
        } else if (element.hasAttribute("aria-invalid")) {
            element.removeAttribute("aria-invalid");
        }

        if (hasState("loading")) {
            element.setAttribute("aria-busy", "true");
        } else if (element.hasAttribute("aria-busy")) {
            element.setAttribute("aria-busy", "false");
        }

        if (["button", "icon-button", "toggle"].includes(component)) {
            if (hasState("active") || hasState("checked")) {
                element.setAttribute("aria-pressed", "true");
            } else if (element.hasAttribute("aria-pressed")) {
                element.setAttribute("aria-pressed", "false");
            }
        }
    }

    static emitHook(element, component, hook, states) {
        const detail = { component, hook, states: [...states], element };
        
        element.dispatchEvent(new CustomEvent("w4:hook", { bubbles: true, detail }));
        element.dispatchEvent(new CustomEvent(hook, { bubbles: true, detail }));
        
        this.notify("w4:hook", detail);
        this.notify(hook, detail);
    }

    static applyPressFeedback(element) {
        const component = this.resolveComponent(element);
        if (!["button", "icon-button"].includes(component)) return;
        
        const states = (element.getAttribute("data-w4-state") || "").split(/[\s,]+/);
        if (states.includes("disabled") || states.includes("loading") || states.includes("readonly")) return;

        if (component === "button") element.classList.add("w4-button-pressing");
        if (component === "icon-button") element.classList.add("w4-icon-button-pressing");
    }

    static clearPressFeedback(element) {
        element.classList.remove("w4-button-pressing", "w4-icon-button-pressing");
    }

    // Event Emitter API
    static on(eventName, handler) {
        if (!this.listeners[eventName]) this.listeners[eventName] = [];
        this.listeners[eventName].push(handler);
        return () => this.off(eventName, handler);
    }

    static off(eventName, handler) {
        if (!this.listeners[eventName]) return;
        this.listeners[eventName] = this.listeners[eventName].filter(h => h !== handler);
    }

    static notify(eventName, payload) {
        if (!this.listeners[eventName]) return;
        this.listeners[eventName].forEach(handler => handler(payload));
    }
}
