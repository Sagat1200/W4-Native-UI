/**
 * =========================================
 * CORE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Properties & States Sync
 * =========================================
 */

class W4Core {
    static COMPONENT_SELECTORS = [
        ".w4-btn", ".w4-button", ".w4-icon-button", ".w4-icon", ".w4-heading",
        ".w4-label", ".w4-link", ".w4-text", ".w4-field-error", ".w4-helper-text",
        ".w4-divider", ".w4-input", ".w4-select", ".w4-textarea", ".w4-checkbox",
        ".w4-radio", ".w4-toggle", ".w4-tooltip", ".w4-alert", ".w4-badge", ".w4-loading",
        ".w4-progress",
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
        "w4-progress": "progress"
    };

    static COMPONENT_STATES = {
        button: ["enabled", "disabled", "loading", "active", "readonly"],
        "icon-button": ["enabled", "disabled", "loading", "readonly", "active"],
        icon: ["enabled", "disabled", "active", "hidden"],
        heading: ["enabled", "disabled", "active", "hidden"],
        label: ["enabled", "disabled", "active", "hidden"],
        link: ["enabled", "disabled", "active", "hidden"],
        text: ["enabled", "disabled", "active", "hidden"],
        "field-error": ["disabled", "active", "hidden"],
        "helper-text": ["disabled", "active", "hidden"],
        divider: ["disabled", "active", "hidden"],
        input: ["disabled", "loading", "readonly", "invalid", "valid"],
        select: ["disabled", "loading", "readonly", "invalid", "valid"],
        textarea: ["disabled", "loading", "readonly", "invalid", "valid"],
        checkbox: ["disabled", "readonly", "invalid", "valid", "loading", "checked", "indeterminate"],
        radio: ["disabled", "readonly", "invalid", "valid", "loading", "selected"],
        toggle: ["disabled", "readonly", "invalid", "valid", "loading", "checked"],
        tooltip: ["hidden", "active"],
        alert: ["enabled", "disabled", "active", "hidden", "dismissed"],
        badge: ["enabled", "disabled", "active", "hidden", "highlighted"],
        loading: ["enabled", "disabled", "active", "hidden", "loading"],
        progress: ["enabled", "disabled", "active", "hidden", "loading", "indeterminate"]
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
        if (element.type === "checkbox" && element.indeterminate) states.push("indeterminate");
        if (element.type === "radio" && element.checked) states.push("selected");

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

/**
 * =========================================
 * ALERT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */



class W4Alert {
    static init() {
        document.addEventListener('click', this.handleClick.bind(this));
        
        // Register state handlers for the Alert component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('alert:enabled', this.handleEnabled);
        W4Core.on('alert:disabled', this.handleDisabled);
        W4Core.on('alert:active', this.handleActive);
        W4Core.on('alert:hidden', this.handleHidden);
        W4Core.on('alert:dismissed', this.handleDismissedState);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Active alerts might trigger an animation or bring to front
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleDismissedState({ element }) {
        W4Alert.dismiss(element);
    }

    static handleClick(event) {
        const dismissBtn = event.target.closest('[data-w4-dismiss="alert"]');
        if (!dismissBtn) return;

        const alert = dismissBtn.closest('.w4-alert');
        if (alert) {
            event.preventDefault();
            // Trigger the state change via core or directly dismiss
            alert.setAttribute('data-w4-state', 'dismissed');
            W4Core.syncElement(alert);
        }
    }

    static dismiss(alert) {
        if (alert.style.display === 'none') return;
        
        // Opacity transition instead of abrupt display: none
        alert.style.opacity = '0';
        alert.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        const finishDismiss = () => {
            alert.style.display = 'none';
            alert.setAttribute('aria-hidden', 'true');
            alert.dispatchEvent(new CustomEvent('w4.alert.dismissed', { bubbles: true }));
            alert.removeEventListener('transitionend', handleTransitionEnd);
        };

        const handleTransitionEnd = (e) => {
            if (e.target === alert) finishDismiss();
        };

        alert.addEventListener('transitionend', handleTransitionEnd);
        
        // Fallback
        setTimeout(() => {
            if (alert.style.opacity === '0') finishDismiss();
        }, 350);
    }
}

/**
 * =========================================
 * BADGE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */



class W4Badge {
    static init(root = document) {
        // Register state handlers for the Badge component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('badge:enabled', this.handleEnabled);
        W4Core.on('badge:disabled', this.handleDisabled);
        W4Core.on('badge:active', this.handleActive);
        W4Core.on('badge:hidden', this.handleHidden);
        W4Core.on('badge:highlighted', this.handleHighlighted);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Handled via CSS or custom aria attributes if needed
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleHighlighted({ element }) {
        // Handled via CSS class, or could trigger animation
    }
}

/**
 * =========================================
 * LOADING COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */



class W4Loading {
    static init() {
        // Expose a global API for manipulating loading states dynamically
        window.W4 = window.W4 || {};
        window.W4.Loading = this;

        // Register state handlers for the Loading component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('loading:enabled', this.handleEnabled);
        W4Core.on('loading:disabled', this.handleDisabled);
        W4Core.on('loading:active', this.handleActive);
        W4Core.on('loading:hidden', this.handleHidden);
        W4Core.on('loading:loading', this.handleLoadingState);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // May adjust visual state
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleLoadingState({ element }) {
        // Custom loading behavior on the spinner itself if needed
        element.setAttribute('aria-busy', 'true');
    }

    /**
     * Shows a loading spinner on a target element
     * @param {HTMLElement|string} target - The element or selector to show the loader on
     * @param {Object} options - Configuration options
     * @param {string} [options.variant='primary'] - The semantic color variant (e.g. 'primary', 'neutral')
     * @param {string} [options.size='md'] - The size variant (e.g. 'sm', 'lg')
     * @returns {HTMLElement} The created loading element
     */
    static show(target, options = {}) {
        const el = typeof target === 'string' ? document.querySelector(target) : target;
        if (!el) return null;

        // Prevent multiple loaders on the same element
        if (el.querySelector('.w4-loading-overlay')) {
            return el.querySelector('.w4-loading-overlay');
        }

        const variant = options.variant || 'primary';
        const size = options.size || 'md';

        // Create overlay container
        const overlay = document.createElement('div');
        overlay.className = 'w4-loading-overlay';
        overlay.style.position = 'absolute';
        overlay.style.inset = '0';
        overlay.style.display = 'flex';
        overlay.style.alignItems = 'center';
        overlay.style.justifyContent = 'center';
        overlay.style.backgroundColor = 'hsl(var(--w4-base-100) / 0.7)';
        overlay.style.backdropFilter = 'blur(2px)';
        overlay.style.zIndex = '50';
        overlay.style.borderRadius = getComputedStyle(el).borderRadius || 'var(--w4-radius-md)';
        
        // Ensure parent is relative or absolute
        const parentPos = getComputedStyle(el).position;
        if (parentPos === 'static') {
            el.style.position = 'relative';
        }
        
        // Create the loading spinner
        const spinner = document.createElement('span');
        spinner.className = `w4-loading w4-loading-${variant} w4-loading-${size}`;
        
        overlay.appendChild(spinner);
        el.appendChild(overlay);
        
        // Dispatch event
        el.dispatchEvent(new CustomEvent('w4.loading.show', { bubbles: true }));
        
        return overlay;
    }

    /**
     * Hides and removes the loading spinner from a target element
     * @param {HTMLElement|string} target - The element or selector to hide the loader from
     */
    static hide(target) {
        const el = typeof target === 'string' ? document.querySelector(target) : target;
        if (!el) return;

        const overlay = el.querySelector('.w4-loading-overlay');
        if (overlay) {
            // Fade out smoothly
            overlay.style.opacity = '0';
            overlay.style.transition = 'opacity var(--w4-transition-fast) ease';
            
            setTimeout(() => {
                overlay.remove();
                el.dispatchEvent(new CustomEvent('w4.loading.hide', { bubbles: true }));
            }, 200); // Wait for transition
        }
    }
}

/**
 * =========================================
 * PROGRESS COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */



class W4Progress {
    static init(root = document) {
        // Register state handlers for the Progress component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('progress:enabled', this.handleEnabled);
        W4Core.on('progress:disabled', this.handleDisabled);
        W4Core.on('progress:active', this.handleActive);
        W4Core.on('progress:hidden', this.handleHidden);
        W4Core.on('progress:loading', this.handleLoading);
        W4Core.on('progress:indeterminate', this.handleIndeterminate);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Handled via CSS or custom logic if needed
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
    }

    static handleIndeterminate({ element }) {
        // For standard HTML <progress> elements, indeterminate state is achieved by removing the "value" attribute.
        if (element.tagName === 'PROGRESS') {
            element.removeAttribute('value');
        }
    }
}

/**
 * =========================================
 * SKELETON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

class W4Skeleton {
    static init() {
        // Skeletons are primarily visual, but we can provide utility
        // functions here for removing them dynamically once data loads.
    }

    /**
     * Replaces a skeleton loader with the actual content element
     * @param {HTMLElement} skeletonEl - The skeleton element to remove
     * @param {HTMLElement} contentEl - The content element to insert
     */
    static replace(skeletonEl, contentEl) {
        if (!skeletonEl || !skeletonEl.parentNode) return;
        
        // Optional: Add a brief fade-in for the new content
        contentEl.style.opacity = '0';
        contentEl.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        skeletonEl.parentNode.replaceChild(contentEl, skeletonEl);
        
        // Trigger reflow to ensure transition works
        void contentEl.offsetWidth;
        contentEl.style.opacity = '1';
        
        contentEl.dispatchEvent(new CustomEvent('w4.skeleton.replaced', { bubbles: true }));
    }

    /**
     * Hides all skeletons inside a specific container
     * @param {HTMLElement} container 
     */
    static hideAllIn(container = document) {
        const skeletons = container.querySelectorAll('.w4-skeleton');
        skeletons.forEach(s => {
            s.style.opacity = '0';
            setTimeout(() => {
                s.style.display = 'none';
            }, 300);
        });
    }
}

/**
 * =========================================
 * TOAST COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

class W4Toast {
    static init() {
        document.addEventListener('click', this.handleClick.bind(this));
        
        // Auto-dismiss initialization for existing toasts in the DOM
        const toasts = document.querySelectorAll('.w4-toast[data-w4-duration]');
        toasts.forEach(toast => {
            if (!toast.hasAttribute('data-w4-toast-bound')) {
                this.setupAutoDismiss(toast);
                toast.setAttribute('data-w4-toast-bound', 'true');
            }
        });
    }

    static handleClick(event) {
        const dismissBtn = event.target.closest('[data-w4-dismiss="toast"]');
        if (!dismissBtn) return;

        const toast = dismissBtn.closest('.w4-toast');
        if (toast) {
            event.preventDefault();
            this.dismiss(toast);
        }
    }

    static setupAutoDismiss(toast) {
        const duration = parseInt(toast.getAttribute('data-w4-duration'), 10);
        if (!isNaN(duration) && duration > 0) {
            setTimeout(() => {
                this.dismiss(toast);
            }, duration);
        }
    }

    static dismiss(toast) {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        const finishDismiss = () => {
            toast.style.display = 'none';
            toast.dispatchEvent(new CustomEvent('w4.toast.dismissed', { bubbles: true }));
            toast.remove(); // Usually we want to remove toasts from DOM completely
        };

        const handleTransitionEnd = (e) => {
            if (e.target === toast) finishDismiss();
        };

        toast.addEventListener('transitionend', handleTransitionEnd);
        
        setTimeout(() => {
            if (toast.style.opacity === '0') finishDismiss();
        }, 350);
    }

    /**
     * API to create toasts dynamically
     */
    static show(message, options = {}) {
        const type = options.type || 'info';
        const duration = options.duration || 3000;
        
        // Determine container or create one
        let container = document.querySelector('.w4-toast-container');
        if (!container) {
            container = document.createElement('div');
            container.className = 'w4-toast-container';
            // These should ideally be in css, but added here for fallback
            container.style.position = 'fixed';
            container.style.bottom = '1rem';
            container.style.right = '1rem';
            container.style.display = 'flex';
            container.style.flexDirection = 'column';
            container.style.gap = '0.5rem';
            container.style.zIndex = '9999';
            document.body.appendChild(container);
        }

        const toast = document.createElement('div');
        toast.className = `w4-toast w4-toast-${type}`;
        toast.innerHTML = message;
        
        // Add dismiss button if required
        if (options.dismissible) {
            toast.innerHTML += `<button type="button" data-w4-dismiss="toast" aria-label="Close">×</button>`;
        }

        if (duration > 0) {
            toast.setAttribute('data-w4-duration', duration.toString());
            this.setupAutoDismiss(toast);
        }

        container.appendChild(toast);
        return toast;
    }
}

/**
 * =========================================
 * CHECKBOX COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4Checkbox {
    /**
     * Initializes checkbox specific logic.
     * Mainly handles the indeterminate state which cannot be set via pure HTML/CSS.
     * @param {HTMLElement|Document} root 
     */
    static init(root = document) {
        // Find checkboxes that are explicitly marked to be indeterminate on load
        const indeterminateCheckboxes = root.querySelectorAll('.w4-checkbox-indeterminate, [data-w4-state~="indeterminate"]');
        
        indeterminateCheckboxes.forEach(checkbox => {
            checkbox.indeterminate = true;
        });
    }

    /**
     * Utility method to programmatically set the indeterminate state
     * @param {HTMLInputElement} checkbox 
     * @param {boolean} isIndeterminate 
     */
    static setIndeterminate(checkbox, isIndeterminate = true) {
        if (!checkbox || checkbox.type !== 'checkbox') return;
        
        checkbox.indeterminate = isIndeterminate;
        
        // Dispatch event so core.js can sync ARIA and data-states if needed
        checkbox.dispatchEvent(new Event('change', { bubbles: true }));
    }
}

/**
 * =========================================
 * FIELD ERROR COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4FieldError {
    static init(root = document) {
        // Placeholder for specific field error logic 
        // e.g. integrating with JS validation libraries
    }
}

/**
 * =========================================
 * HELPER TEXT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4HelperText {
    static init(root = document) {
        // Placeholder for specific helper text logic 
    }
}

/**
 * =========================================
 * INPUT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4Input {
    static init(root = document) {
        // Placeholder for specific input logic 
        // e.g. character counting, input masks, custom formatting
    }
}

/**
 * =========================================
 * RADIO COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4Radio {
    static init(root = document) {
        // Placeholder for specific radio logic 
        // e.g. group state management if custom visual feedback is needed
    }
}

/**
 * =========================================
 * SELECT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4Select {
    static init(root = document) {
        // Placeholder for specific select logic 
        // e.g. handling custom dropdown behavior for complex selects
    }
}

/**
 * =========================================
 * TEXTAREA COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4Textarea {
    static init(root = document) {
        // Auto-resize logic
        const textareas = root.querySelectorAll('textarea.w4-textarea[data-w4-auto-resize="true"]');
        
        textareas.forEach(el => {
            if (el.getAttribute('data-w4-textarea-bound') === 'true') return;

            el.addEventListener('input', this.handleResize.bind(this));

            // Trigger once to set initial height based on pre-filled content
            const event = new Event('input', { bubbles: true });
            el.dispatchEvent(event);

            el.setAttribute('data-w4-textarea-bound', 'true');
        });
    }

    /**
     * Dynamically resizes the textarea based on its content scroll height
     * @param {Event} e 
     */
    static handleResize(e) {
        const target = e.target;
        target.style.height = 'auto'; // Reset to auto to get true scrollHeight if content shrunk
        target.style.height = target.scrollHeight + 'px';
    }
}

/**
 * =========================================
 * TOGGLE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

class W4Toggle {
    static init(root = document) {
        // Placeholder for specific toggle logic 
    }
}

/**
 * =========================================
 * MODAL COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Interactive System
 * =========================================
 */

class W4Modal {
    /**
     * Initializes the modal functionality on the document.
     * Sets up event listeners for toggling modals and handling accessibility.
     */
    static init() {
        document.addEventListener('click', this.handleClick.bind(this));
        document.addEventListener('keydown', this.handleKeydown.bind(this));
    }

    /**
     * Handles global click events to open/close modals.
     * @param {MouseEvent} event 
     */
    static handleClick(event) {
        const target = event.target;

        // 1. Open modal via data attribute trigger
        const trigger = target.closest('[data-w4-toggle="modal"]');
        if (trigger) {
            const targetId = trigger.getAttribute('data-w4-target');
            if (targetId) {
                const modal = document.getElementById(targetId);
                if (modal) {
                    event.preventDefault();
                    this.open(modal);
                }
            }
            return;
        }

        // 2. Close modal via dismiss button inside the modal
        const dismiss = target.closest('[data-w4-dismiss="modal"]');
        if (dismiss) {
            const modal = dismiss.closest('.w4-modal');
            if (modal) {
                event.preventDefault();
                this.close(modal);
            }
            return;
        }

        // 3. Close modal by clicking on the backdrop
        if (target.classList.contains('w4-modal') && target.classList.contains('w4-modal-open')) {
            // Check if it's explicitly not supposed to close on backdrop click
            if (target.getAttribute('data-w4-backdrop') !== 'static') {
                this.close(target);
            }
        }
    }

    /**
     * Handles global keydown events (e.g., Escape key).
     * @param {KeyboardEvent} event 
     */
    static handleKeydown(event) {
        if (event.key === 'Escape') {
            const openModals = document.querySelectorAll('.w4-modal.w4-modal-open');
            if (openModals.length > 0) {
                // Get the top-most modal
                const topModal = openModals[openModals.length - 1];
                if (topModal.getAttribute('data-w4-backdrop') !== 'static') {
                    this.close(topModal);
                }
            }
        }
    }

    /**
     * Opens a specific modal element.
     * @param {HTMLElement} modal 
     */
    static open(modal) {
        if (!modal) return;
        
        // Remove closing class if it was in the middle of closing
        modal.classList.remove('w4-modal-closing');
        
        // Add open class
        modal.classList.add('w4-modal-open');
        modal.setAttribute('aria-hidden', 'false');
        modal.setAttribute('open', ''); // For native dialog support if used

        // Dispatch custom event
        modal.dispatchEvent(new CustomEvent('w4.modal.opened', { bubbles: true }));

        // Optional: lock body scroll
        document.body.style.overflow = 'hidden';
    }

    /**
     * Closes a specific modal element with animation.
     * @param {HTMLElement} modal 
     */
    static close(modal) {
        if (!modal || !modal.classList.contains('w4-modal-open')) return;

        // Apply closing class to trigger CSS animation
        modal.classList.add('w4-modal-closing');

        // Wait for CSS animation to finish before actually hiding
        // The transition in modal.css is defined via var(--w4-transition-normal), typically 0.2s or 0.3s.
        // We'll listen to transitionend, but provide a fallback timeout.
        
        const finishClose = () => {
            modal.classList.remove('w4-modal-open', 'w4-modal-closing');
            modal.setAttribute('aria-hidden', 'true');
            modal.removeAttribute('open');
            
            // Dispatch custom event
            modal.dispatchEvent(new CustomEvent('w4.modal.closed', { bubbles: true }));

            // Check if there are other open modals before unlocking body scroll
            const otherOpenModals = document.querySelectorAll('.w4-modal.w4-modal-open');
            if (otherOpenModals.length === 0) {
                document.body.style.overflow = '';
            }
            
            modal.removeEventListener('transitionend', handleTransitionEnd);
        };

        const handleTransitionEnd = (e) => {
            // Ensure we are catching the opacity or transform transition on the modal itself
            if (e.target === modal || e.target.classList.contains('w4-modal-box')) {
                finishClose();
            }
        };

        modal.addEventListener('transitionend', handleTransitionEnd);
        
        // Fallback in case transitionend fails to fire (e.g. if transition is 0s)
        setTimeout(() => {
            if (modal.classList.contains('w4-modal-closing')) {
                finishClose();
            }
        }, 350); // Safe threshold slightly above standard transition time
    }
}

/**
 * =========================================
 * TOOLTIP COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Interactive System
 * =========================================
 */

class W4Tooltip {
    static init() {
        // We use event delegation on the document to handle touch events for mobile tooltips
        document.addEventListener('touchstart', this.handleTouchStart.bind(this));
        document.addEventListener('click', this.handleClickOutside.bind(this));
    }

    /**
     * Handles touch events to manually toggle tooltips on mobile devices
     * where CSS :hover doesn't exist naturally.
     * @param {TouchEvent} e 
     */
    static handleTouchStart(e) {
        const tooltip = e.target.closest('.w4-tooltip');
        
        if (tooltip) {
            const isActive = tooltip.classList.contains('w4-tooltip-active');
            
            // Close all other active tooltips
            this.closeAll();

            if (!isActive) {
                tooltip.classList.add('w4-tooltip-active');
            }
        }
    }

    /**
     * Closes tooltips when clicking outside of them
     * @param {MouseEvent} e 
     */
    static handleClickOutside(e) {
        if (!e.target.closest('.w4-tooltip')) {
            this.closeAll();
        }
    }

    /**
     * Closes all active tooltips on the page
     */
    static closeAll() {
        const activeTooltips = document.querySelectorAll('.w4-tooltip.w4-tooltip-active');
        activeTooltips.forEach(t => t.classList.remove('w4-tooltip-active'));
    }
}

/**
 * =========================================
 * CARD COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

class W4Card {
    static init(root = document) {
        // Placeholder for specific card logic
    }
}

/**
 * =========================================
 * CONTAINER COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

class W4Container {
    static init(root = document) {
        // Placeholder for specific container logic
    }
}

/**
 * =========================================
 * DIVIDER COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

class W4Divider {
    static init(root = document) {
        // Placeholder for specific divider logic
    }
}

/**
 * =========================================
 * GRID COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

class W4Grid {
    static init(root = document) {
        // Placeholder for specific grid logic
    }
}

/**
 * =========================================
 * PANEL COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

class W4Panel {
    static init(root = document) {
        // Placeholder for specific panel logic
    }
}

/**
 * =========================================
 * SECTION COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

class W4Section {
    static init(root = document) {
        // Placeholder for specific section logic
    }
}

/**
 * =========================================
 * STACK COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

class W4Stack {
    static init(root = document) {
        // Placeholder for specific stack logic
    }
}

class W4Breadcrumb {
    /**
     * Initialize Breadcrumb component logic
     */
    static init() {
        // Base logic for Breadcrumb.
        // Ready for future custom logic (e.g., collapsible breadcrumbs, scrollable overflow).
    }
}

class W4Dropdown {
    /**
     * Initialize Dropdown component logic
     */
    static init() {
        if (this.initialized) return;
        this.bindEvents();
        this.initialized = true;
    }

    static bindEvents() {
        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            const isDropdownClick = e.target.closest('.w4-dropdown');
            if (!isDropdownClick) {
                document.querySelectorAll('.w4-dropdown-open').forEach(dropdown => {
                    dropdown.classList.remove('w4-dropdown-open');
                });
            }
        });

        // Toggle dropdown on click if it has a toggle button
        document.addEventListener('click', (e) => {
            const toggleBtn = e.target.closest('[data-w4-toggle="dropdown"]');
            if (toggleBtn) {
                const dropdown = toggleBtn.closest('.w4-dropdown');
                if (dropdown) {
                    dropdown.classList.toggle('w4-dropdown-open');
                    // Close others
                    document.querySelectorAll('.w4-dropdown-open').forEach(other => {
                        if (other !== dropdown) {
                            other.classList.remove('w4-dropdown-open');
                        }
                    });
                }
            }
        });
    }
}

class W4Menu {
    /**
     * Initialize Menu component logic
     */
    static init() {
        // Base logic for Menu.
        // Ready for future custom logic (e.g., active state syncing with router, expandable sub-menus).
        this.bindEvents();
    }

    static bindEvents() {
        // Handle clicks for active state and submenus
        document.addEventListener('click', (e) => {
            const menuItem = e.target.closest('.w4-menu li > a, .w4-menu li > button, .w4-menu li > span');
            if (menuItem && !menuItem.closest('.w4-dropdown')) { // Ignore dropdown menus
                const parentLi = menuItem.closest('li');
                const menu = menuItem.closest('.w4-menu');
                
                // Toggle submenus if the clicked item is a span or has a sub-menu sibling
                const subMenu = parentLi.querySelector('ul');
                if (subMenu) {
                    e.preventDefault();
                    
                    // Close other submenus at the same level if it's a horizontal menu or if we want accordion style
                    if (menu.classList.contains('w4-menu-horizontal')) {
                         const siblings = parentLi.parentElement.children;
                         Array.from(siblings).forEach(sibling => {
                             if (sibling !== parentLi) {
                                 sibling.classList.remove('w4-menu-open');
                                 sibling.removeAttribute('data-w4-state');
                             }
                         });
                    }

                    parentLi.classList.toggle('w4-menu-open');
                    
                    // Add state attribute for CSS consistency
                    if (parentLi.classList.contains('w4-menu-open')) {
                        parentLi.setAttribute('data-w4-state', 'open');
                    } else {
                        parentLi.removeAttribute('data-w4-state');
                    }
                    return; // Don't trigger active state on parent containers
                }

                // Handle active state
                if (menu && menu.hasAttribute('data-w4-sync-active')) {
                    menu.querySelectorAll('.active').forEach(el => el.classList.remove('active'));
                    menuItem.classList.add('active');
                }
            } else if (!e.target.closest('.w4-menu')) {
                // Clicked outside any menu: close horizontal submenus
                document.querySelectorAll('.w4-menu-horizontal > li.w4-menu-open').forEach(li => {
                    li.classList.remove('w4-menu-open');
                    li.removeAttribute('data-w4-state');
                });
            }
        });
        
        // Handle horizontal submenus on hover as fallback/enhancement
        // Using JS for this makes it more robust than pure CSS :hover which can be twitchy
        document.querySelectorAll('.w4-menu-horizontal > li:has(> ul)').forEach(item => {
            let timeoutId;
            
            item.addEventListener('mouseenter', () => {
                clearTimeout(timeoutId);
                // Close siblings
                Array.from(item.parentElement.children).forEach(sibling => {
                    if (sibling !== item) {
                        sibling.classList.remove('w4-menu-open');
                        sibling.removeAttribute('data-w4-state');
                    }
                });
                item.classList.add('w4-menu-open');
                item.setAttribute('data-w4-state', 'open');
            });
            
            item.addEventListener('mouseleave', () => {
                // Small delay to prevent accidental closing when moving mouse slightly off
                timeoutId = setTimeout(() => {
                    item.classList.remove('w4-menu-open');
                    item.removeAttribute('data-w4-state');
                }, 150);
            });
        });
    }
}

class W4Navbar {
    /**
     * Initialize Navbar component logic
     */
    static init() {
        // Base logic for Navbar.
        // Ready for future custom logic (e.g., scroll transparency transitions, mobile menu toggling).
    }
}

class W4Tab {
    /**
     * Initialize Tab component logic
     */
    static init() {
        this.bindEvents();
    }

    static bindEvents() {
        // Handle tab switching
        document.addEventListener('click', (e) => {
            const tab = e.target.closest('.w4-tab');
            if (tab && !tab.hasAttribute('disabled')) {
                const tabGroup = tab.closest('.w4-tabs');
                if (tabGroup) {
                    // Remove active from all siblings
                    tabGroup.querySelectorAll('.w4-tab').forEach(t => t.classList.remove('w4-tab-active'));
                    // Add active to clicked tab
                    tab.classList.add('w4-tab-active');

                    // If tabs are linked to panels via data-w4-target
                    const targetId = tab.getAttribute('data-w4-target');
                    if (targetId) {
                        const targetPanel = document.getElementById(targetId);
                        if (targetPanel) {
                            // Find all sibling panels and hide them
                            const panelGroup = targetPanel.parentElement;
                            if (panelGroup) {
                                Array.from(panelGroup.children).forEach(sibling => {
                                    if (sibling.hasAttribute('data-w4-tab-panel')) {
                                        sibling.style.display = 'none';
                                    }
                                });
                            }
                            // Show target panel
                            targetPanel.style.display = '';
                        }
                    }
                }
            }
        });
    }
}



/**
 * =========================================
 * BUTTON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */



class W4Button {
    static init(root = document) {
        // Visual press feedback is handled by core.js centrally
        
        // Register state handlers for the Button component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('button:enabled', this.handleEnabled);
        W4Core.on('button:disabled', this.handleDisabled);
        W4Core.on('button:loading', this.handleLoading);
        W4Core.on('button:active', this.handleActive);
        W4Core.on('button:readonly', this.handleReadonly);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('disabled');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-busy');
    }

    static handleDisabled({ element }) {
        element.setAttribute('disabled', 'true');
        element.setAttribute('aria-disabled', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
        element.setAttribute('disabled', 'true');
    }

    static handleActive({ element }) {
        element.setAttribute('aria-pressed', 'true');
    }

    static handleReadonly({ element }) {
        element.setAttribute('readonly', 'true');
        // If it's a native button, readonly doesn't exist natively, so we mimic it with disabled
        if (element.tagName === 'BUTTON') {
            element.setAttribute('disabled', 'true');
        }
    }
}

/**
 * =========================================
 * HEADING COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */



class W4Heading {
    static init(root = document) {
        // Register state handlers for the Heading component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('heading:enabled', this.handleEnabled);
        W4Core.on('heading:disabled', this.handleDisabled);
        W4Core.on('heading:active', this.handleActive);
        W4Core.on('heading:hidden', this.handleHidden);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Headings don't typically have aria-pressed, but could have aria-current
        // We leave it empty or map it to a custom state if needed.
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}

/**
 * =========================================
 * ICON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */



class W4Icon {
    static init(root = document) {
        // Placeholder for specific icon logic (e.g. dynamic SVG fetching)
        
        // Register state handlers for the Icon component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('icon:enabled', this.handleEnabled);
        W4Core.on('icon:disabled', this.handleDisabled);
        W4Core.on('icon:active', this.handleActive);
        W4Core.on('icon:hidden', this.handleHidden);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Icons generally don't need a specific aria attribute for 'active', 
        // as interaction is usually managed by a parent (like icon-button).
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}

/**
 * =========================================
 * ICON BUTTON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */



class W4IconButton {
    static init(root = document) {
        // Visual press feedback is handled by core.js centrally
        // This file serves as a placeholder for specific icon-button logic
        
        // Register state handlers for the IconButton component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('icon-button:enabled', this.handleEnabled);
        W4Core.on('icon-button:disabled', this.handleDisabled);
        W4Core.on('icon-button:loading', this.handleLoading);
        W4Core.on('icon-button:active', this.handleActive);
        W4Core.on('icon-button:readonly', this.handleReadonly);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('disabled');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-busy');
    }

    static handleDisabled({ element }) {
        element.setAttribute('disabled', 'true');
        element.setAttribute('aria-disabled', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
        element.setAttribute('disabled', 'true');
    }

    static handleActive({ element }) {
        element.setAttribute('aria-pressed', 'true');
    }

    static handleReadonly({ element }) {
        element.setAttribute('readonly', 'true');
        // If it's a native button, readonly doesn't exist natively, so we mimic it with disabled
        if (element.tagName === 'BUTTON') {
            element.setAttribute('disabled', 'true');
        }
    }
}

/**
 * =========================================
 * LABEL COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */



class W4Label {
    static init(root = document) {
        // Placeholder for specific label logic
        
        // Register state handlers for the Label component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('label:enabled', this.handleEnabled);
        W4Core.on('label:disabled', this.handleDisabled);
        W4Core.on('label:active', this.handleActive);
        W4Core.on('label:hidden', this.handleHidden);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Active label might not require a specific aria attribute,
        // but could be linked to an active input state.
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}

/**
 * =========================================
 * TEXT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */



class W4Text {
    static init(root = document) {
        // Placeholder for specific text logic
        
        // Register state handlers for the Text component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('text:enabled', this.handleEnabled);
        W4Core.on('text:disabled', this.handleDisabled);
        W4Core.on('text:active', this.handleActive);
        W4Core.on('text:hidden', this.handleHidden);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Active text elements might not need specific ARIA beyond generic styling
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}

/**
 * =========================================
 * NATIVE W4 VISUAL ENGINE SCRIPT
 * Central JavaScript Initialization
 * =========================================
 */

// Import interactive components






// Import forms components









// Import layout components








// Import UI components








// Import navigation components







// Import core logic (previous IIFE logic wrapped in a modern ES6 structure)


class W4NativeUI {
    /**
     * Initializes all interactive components and core event bindings.
     * Call this when the DOM is ready.
     */
    static start() {
        if (this.initialized) return;
        this.initialized = true;

        // 1. Initialize Interactive & Feedback Components
        W4Modal.init();
        W4Tooltip.init();
        W4Alert.init();
        W4Toast.init();
        W4Skeleton.init();

        // 2. Initialize Forms Components
        W4Checkbox.init();
        W4Textarea.init();
        W4Input.init();
        W4Radio.init();
        W4Select.init();
        W4Toggle.init();
        W4FieldError.init();
        W4HelperText.init();

        // 3. Initialize Layout Components
        W4Card.init();
        W4Container.init();
        W4Divider.init();
        W4Grid.init();
        W4Panel.init();
        W4Section.init();
        W4Stack.init();

        // 4. Initialize UI Components
        W4Button.init();
        W4IconButton.init();
        W4Heading.init();
        W4Icon.init();
        W4Label.init();
        W4Link.init();
        W4Text.init();

        // 5. Initialize Navigation Components
        W4Breadcrumb.init();
        W4Dropdown.init();
        W4Menu.init();
        W4Navbar.init();
        W4Sidebar.init();
        W4Tab.init();

        // 6. Initialize Core Event System (Data attributes, ARIA sync, Forms)
        W4Core.init();
    }

    /**
     * Public API to access components programmatically
     */
    static get Modal() { return W4Modal; }
    static get Tooltip() { return W4Tooltip; }
    static get Alert() { return W4Alert; }
    static get Toast() { return W4Toast; }
    static get Skeleton() { return W4Skeleton; }
    
    // Form APIs
    static get Checkbox() { return W4Checkbox; }
    static get Textarea() { return W4Textarea; }
    static get Input() { return W4Input; }
    static get Radio() { return W4Radio; }
    static get Select() { return W4Select; }
    static get Toggle() { return W4Toggle; }
    static get FieldError() { return W4FieldError; }
    static get HelperText() { return W4HelperText; }
    
    // Layout APIs
    static get Card() { return W4Card; }
    static get Container() { return W4Container; }
    static get Divider() { return W4Divider; }
    static get Grid() { return W4Grid; }
    static get Panel() { return W4Panel; }
    static get Section() { return W4Section; }
    static get Stack() { return W4Stack; }

    // UI APIs
    static get Button() { return W4Button; }
    static get IconButton() { return W4IconButton; }
    static get Heading() { return W4Heading; }
    static get Icon() { return W4Icon; }
    static get Label() { return W4Label; }
    static get Link() { return W4Link; }
    static get Text() { return W4Text; }

    // Navigation APIs
    static get Breadcrumb() { return W4Breadcrumb; }
    static get Dropdown() { return W4Dropdown; }
    static get Menu() { return W4Menu; }
    static get Navbar() { return W4Navbar; }
    static get Sidebar() { return W4Sidebar; }
    static get Tab() { return W4Tab; }

    static get Core() { return W4Core; }
}

// Auto-initialize if running in a browser environment
if (typeof window !== 'undefined' && typeof document !== 'undefined') {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => W4NativeUI.start());
    } else {
        W4NativeUI.start();
    }

    // Expose to window for external scripts (backward compatibility & global access)
    window.W4NativeUI = W4NativeUI;
}
