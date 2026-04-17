/**
 * =========================================
 * ICON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Icon {
    static init(root = document) {
        // Placeholder for specific icon logic (e.g. dynamic SVG fetching)
        
        // Register state handlers for the Icon component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('icon:enabled', this.handleEnabled);
        W4Core.on('icon:disabled', this.handleDisabled);
        W4Core.on('icon:active', this.handleActive);
        W4Core.on('icon:hidden', this.handleHidden);

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
        // Icons generally don't need a specific aria attribute for 'active', 
        // as interaction is usually managed by a parent (like icon-button).
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}
