/**
 * =========================================
 * LINK COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Link {
    static init(root = document) {
        // Placeholder for specific link logic
        
        // Register state handlers for the Link component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('link:enabled', this.handleEnabled);
        W4Core.on('link:disabled', this.handleDisabled);
        W4Core.on('link:active', this.handleActive);
        W4Core.on('link:hidden', this.handleHidden);

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
        // Typically links use an active class, but might also use aria-current if applicable
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}
