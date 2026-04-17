/**
 * =========================================
 * HEADING COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Heading {
    static init(root = document) {
        // Register state handlers for the Heading component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('heading:enabled', this.handleEnabled);
        W4Core.on('heading:disabled', this.handleDisabled);
        W4Core.on('heading:active', this.handleActive);
        W4Core.on('heading:hidden', this.handleHidden);

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
        // Headings don't typically have aria-pressed, but could have aria-current
        // We leave it empty or map it to a custom state if needed.
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}
