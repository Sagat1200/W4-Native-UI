/**
 * =========================================
 * TOGGLE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Toggle {
    static init(root = document) {
        // Register state handlers for the Toggle component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('toggle:enabled', this.handleEnabled);
        W4Core.on('toggle:disabled', this.handleDisabled);
        W4Core.on('toggle:readonly', this.handleReadonly);
        W4Core.on('toggle:invalid', this.handleInvalid);
        W4Core.on('toggle:valid', this.handleValid);
        W4Core.on('toggle:loading', this.handleLoading);
        W4Core.on('toggle:checked', this.handleChecked);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.disabled = false;
        element.removeAttribute('aria-disabled');
        element.removeAttribute('readonly');
    }

    static handleDisabled({ element }) {
        element.disabled = true;
        element.setAttribute('aria-disabled', 'true');
    }

    static handleReadonly({ element }) {
        element.setAttribute('readonly', 'true');
    }

    static handleInvalid({ element }) {
        element.setAttribute('aria-invalid', 'true');
    }

    static handleValid({ element }) {
        element.removeAttribute('aria-invalid');
    }

    static handleLoading({ element }) {
        // Opcional: Desactivar visualmente o evitar clicks mientras carga
        element.style.pointerEvents = 'none';
        element.setAttribute('aria-busy', 'true');
    }

    static handleChecked({ element }) {
        // Only force checked if it's explicitly driven by a data-w4-state or class,
        // otherwise it intercepts natural clicks
        if (element.classList.contains('w4-toggle-checked') || element.getAttribute('data-w4-state')?.includes('checked')) {
            element.checked = true;
        }
    }
}
