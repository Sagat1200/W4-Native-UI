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
        this.bindStateTriggers(root);
        // Register state handlers for the Input component via W4Core
        this.registerStateHandlers();
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof HTMLInputElement) return targetOrId;
        if (typeof targetOrId === 'string') {
            return document.getElementById(targetOrId) || document.querySelector(targetOrId);
        }
        return null;
    }

    static resetState(element) {
        if (!element) return;

        element.classList.remove(
            'w4-input-disabled',
            'w4-input-readonly',
            'w4-input-invalid',
            'w4-input-valid',
            'w4-input-loading'
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-readonly');
        element.removeAttribute('aria-invalid');
        element.removeAttribute('aria-busy');
        element.removeAttribute('readonly');
        element.readOnly = false;
        element.disabled = false;
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized === 'enabled') {
            this.handleEnabled({ element });
            if (typeof W4Core?.syncElement === 'function') {
                W4Core.syncElement(element, 'input:enabled');
            }
            return;
        }

        element.classList.add(`w4-input-${normalized}`);
        element.setAttribute('data-w4-state', normalized);

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `input:${normalized}`);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            if (!(event.target instanceof Element)) return;

            const trigger = event.target.closest('[data-w4-input-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-input-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-input-target') || trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
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
        element.removeAttribute('aria-readonly');
        element.removeAttribute('readonly');
        element.readOnly = false;
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
