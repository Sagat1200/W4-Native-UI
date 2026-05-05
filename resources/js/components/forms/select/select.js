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
        this.bindStateTriggers(root);
        // Register state handlers for the Select component via W4Core
        this.registerStateHandlers();
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof HTMLSelectElement) return targetOrId;
        if (typeof targetOrId === 'string') {
            return document.getElementById(targetOrId) || document.querySelector(targetOrId);
        }
        return null;
    }

    static resetState(element) {
        if (!element) return;

        element.classList.remove(
            'w4-select-disabled',
            'w4-select-readonly',
            'w4-select-invalid',
            'w4-select-valid',
            'w4-select-loading'
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-readonly');
        element.removeAttribute('aria-invalid');
        element.removeAttribute('aria-busy');
        element.removeAttribute('readonly');
        element.disabled = false;
        element.style.pointerEvents = '';
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized === 'enabled') {
            this.handleEnabled({ element });
            if (typeof W4Core?.syncElement === 'function') W4Core.syncElement(element, 'select:enabled');
            return;
        }

        element.classList.add(`w4-select-${normalized}`);
        element.setAttribute('data-w4-state', normalized);

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `select:${normalized}`);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            if (!(event.target instanceof Element)) return;

            const trigger = event.target.closest('[data-w4-select-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-select-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-select-target') || trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
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
        element.removeAttribute('aria-readonly');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-busy');
        element.style.pointerEvents = '';
    }

    static handleDisabled({ element }) {
        element.disabled = true;
        element.setAttribute('aria-disabled', 'true');
    }

    static handleReadonly({ element }) {
        element.setAttribute('aria-readonly', 'true');
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
