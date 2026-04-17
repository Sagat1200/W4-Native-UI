/**
 * =========================================
 * LABEL COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Label {
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
