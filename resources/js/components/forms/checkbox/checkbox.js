/**
 * =========================================
 * CHECKBOX COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Checkbox {
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

        this.bindStateTriggers(root);
        // Register state handlers for the Checkbox component via W4Core
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
            'w4-checkbox-disabled',
            'w4-checkbox-readonly',
            'w4-checkbox-invalid',
            'w4-checkbox-valid',
            'w4-checkbox-loading',
            'w4-checkbox-checked',
            'w4-checkbox-indeterminate'
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-invalid');
        element.removeAttribute('aria-busy');
        element.removeAttribute('readonly');
        element.disabled = false;
        element.checked = false;
        element.indeterminate = false;
        element.style.pointerEvents = '';
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized === 'enabled') {
            if (typeof W4Core?.syncElement === 'function') W4Core.syncElement(element);
            return;
        }

        if (normalized === 'checked') {
            element.checked = true;
        } else if (normalized === 'indeterminate') {
            element.indeterminate = true;
        } else {
            element.classList.add(`w4-checkbox-${normalized}`);
        }

        element.setAttribute('data-w4-state', normalized);

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `checkbox:${normalized}`);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            if (!(event.target instanceof Element)) return;

            const trigger = event.target.closest('[data-w4-checkbox-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-checkbox-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-checkbox-target') || trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('checkbox:enabled', this.handleEnabled);
        W4Core.on('checkbox:disabled', this.handleDisabled);
        W4Core.on('checkbox:readonly', this.handleReadonly);
        W4Core.on('checkbox:invalid', this.handleInvalid);
        W4Core.on('checkbox:valid', this.handleValid);
        W4Core.on('checkbox:loading', this.handleLoading);
        W4Core.on('checkbox:check', this.handleChecked);
        W4Core.on('checkbox:checked', this.handleChecked);
        W4Core.on('checkbox:indeterminate', this.handleIndeterminateEvent);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.disabled = false;
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-busy');
        element.removeAttribute('readonly');
        element.style.pointerEvents = '';
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
        // Opcional: Desactivar mientras carga
        element.style.pointerEvents = 'none';
        element.setAttribute('aria-busy', 'true');
    }

    static handleChecked({ element }) {
        if (element.classList.contains('w4-checkbox-checked') || element.getAttribute('data-w4-state')?.includes('checked')) {
            element.checked = true;
            element.indeterminate = false;
        }
    }

    static handleIndeterminateEvent({ element }) {
        element.indeterminate = true;
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
