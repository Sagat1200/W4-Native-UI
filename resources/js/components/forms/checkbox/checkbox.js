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

        // Register state handlers for the Checkbox component via W4Core
        this.registerStateHandlers();
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
        W4Core.on('checkbox:check', this.handleCheck);
        W4Core.on('checkbox:indeterminate', this.handleIndeterminateEvent);

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
        // Opcional: Desactivar mientras carga
        element.style.pointerEvents = 'none';
        element.setAttribute('aria-busy', 'true');
    }

    static handleCheck({ element }) {
        element.checked = true;
        element.indeterminate = false;
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
