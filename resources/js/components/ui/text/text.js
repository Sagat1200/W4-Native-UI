/**
 * =========================================
 * TEXT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Text {
    static init(root = document) {
        // Placeholder for specific text logic
        
        // Register state handlers for the Text component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('text:enabled', this.handleEnabled);
        W4Core.on('text:disabled', this.handleDisabled);
        W4Core.on('text:active', this.handleActive);
        W4Core.on('text:hidden', this.handleHidden);

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
        // Active text elements might not need specific ARIA beyond generic styling
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}
