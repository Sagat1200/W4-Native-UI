/**
 * =========================================
 * SELECT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Select {
    static init(root = document) {
        // Register state handlers for the Select component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('select:enabled', this.handleEnabled);
        W4Core.on('select:disabled', this.handleDisabled);
        W4Core.on('select:readonly', this.handleReadonly);
        W4Core.on('select:invalid', this.handleInvalid);
        W4Core.on('select:valid', this.handleValid);
        W4Core.on('select:loading', this.handleLoading);

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

    static handleReadonly({ element }) {
        element.setAttribute('readonly', 'true');
        // Para selects, a veces 'readonly' no es nativo visualmente como en inputs
        // pero podemos mantenerlo en aria y data-attributes
    }

    static handleInvalid({ element }) {
        element.setAttribute('aria-invalid', 'true');
    }

    static handleValid({ element }) {
        element.removeAttribute('aria-invalid');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
        element.style.pointerEvents = 'none';
    }
}
