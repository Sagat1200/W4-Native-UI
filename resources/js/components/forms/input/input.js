/**
 * =========================================
 * INPUT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Input {
    static init(root = document) {
        // Register state handlers for the Input component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('input:enabled', this.handleEnabled);
        W4Core.on('input:disabled', this.handleDisabled);
        W4Core.on('input:loading', this.handleLoading);
        W4Core.on('input:readonly', this.handleReadonly);
        W4Core.on('input:invalid', this.handleInvalid);
        W4Core.on('input:valid', this.handleValid);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.disabled = false;
        element.removeAttribute('aria-disabled');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-busy');
    }

    static handleDisabled({ element }) {
        element.disabled = true;
        element.setAttribute('aria-disabled', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
        // Opcionalmente podemos hacerlo readonly mientras carga
        // element.setAttribute('readonly', 'true');
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
}
