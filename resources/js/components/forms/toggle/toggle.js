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
        this.bindStateTriggers(root);
        // Register state handlers for the Toggle component via W4Core
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
            'w4-toggle-disabled',
            'w4-toggle-readonly',
            'w4-toggle-invalid',
            'w4-toggle-valid',
            'w4-toggle-loading',
            'w4-toggle-checked'
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
        element.style.pointerEvents = '';
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized === 'enabled') {
            this.handleEnabled({ element });
            if (typeof W4Core?.syncElement === 'function') W4Core.syncElement(element, 'toggle:enabled');
            return;
        }

        if (normalized === 'checked') {
            element.checked = true;
        } else if (normalized === 'unchecked') {
            element.checked = false;
        }

        if (normalized !== 'unchecked') {
            element.classList.add(`w4-toggle-${normalized}`);
            element.setAttribute('data-w4-state', normalized);
        }

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `toggle:${normalized}`);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            if (!(event.target instanceof Element)) return;

            const trigger = event.target.closest('[data-w4-toggle-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-toggle-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-toggle-target') || trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
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
        element.removeAttribute('aria-readonly');
        element.removeAttribute('readonly');
        element.readOnly = false;
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
