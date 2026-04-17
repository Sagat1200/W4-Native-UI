/**
 * =========================================
 * ICON BUTTON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4IconButton {
    static init(root = document) {
        // Visual press feedback is handled by core.js centrally
        // This file serves as a placeholder for specific icon-button logic
        
        // Register state handlers for the IconButton component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('icon-button:enabled', this.handleEnabled);
        W4Core.on('icon-button:disabled', this.handleDisabled);
        W4Core.on('icon-button:loading', this.handleLoading);
        W4Core.on('icon-button:active', this.handleActive);
        W4Core.on('icon-button:readonly', this.handleReadonly);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('disabled');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-busy');
    }

    static handleDisabled({ element }) {
        element.setAttribute('disabled', 'true');
        element.setAttribute('aria-disabled', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
        element.setAttribute('disabled', 'true');
    }

    static handleActive({ element }) {
        element.setAttribute('aria-pressed', 'true');
    }

    static handleReadonly({ element }) {
        element.setAttribute('readonly', 'true');
        // If it's a native button, readonly doesn't exist natively, so we mimic it with disabled
        if (element.tagName === 'BUTTON') {
            element.setAttribute('disabled', 'true');
        }
    }
}
