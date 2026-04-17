/**
 * =========================================
 * RADIO COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Radio {
    static init(root = document) {
        // Register state handlers for the Radio component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('radio:enabled', this.handleEnabled);
        W4Core.on('radio:disabled', this.handleDisabled);
        W4Core.on('radio:readonly', this.handleReadonly);
        W4Core.on('radio:invalid', this.handleInvalid);
        W4Core.on('radio:valid', this.handleValid);
        W4Core.on('radio:loading', this.handleLoading);
        W4Core.on('radio:selected', this.handleSelected);

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

    static handleSelected({ element }) {
        element.checked = true;
    }
}
