/**
 * =========================================
 * BADGE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Badge {
    static init(root = document) {
        // Register state handlers for the Badge component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('badge:enabled', this.handleEnabled);
        W4Core.on('badge:disabled', this.handleDisabled);
        W4Core.on('badge:active', this.handleActive);
        W4Core.on('badge:hidden', this.handleHidden);
        W4Core.on('badge:highlighted', this.handleHighlighted);

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
        // Handled via CSS or custom aria attributes if needed
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleHighlighted({ element }) {
        // Handled via CSS class, or could trigger animation
    }
}