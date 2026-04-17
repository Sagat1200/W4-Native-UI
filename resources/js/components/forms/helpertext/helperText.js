/**
 * =========================================
 * HELPER TEXT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4HelperText {
    static init(root = document) {
        // Register state handlers for the HelperText component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('helper-text:enabled', this.handleEnabled);
        W4Core.on('helper-text:disabled', this.handleDisabled);
        W4Core.on('helper-text:active', this.handleActive);
        W4Core.on('helper-text:hidden', this.handleHidden);

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
        if (element) {
            element.style.display = '';
            element.style.opacity = '1';
            element.removeAttribute('aria-hidden');
        }
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
        if (element) {
            element.style.opacity = '0';
            setTimeout(() => {
                element.style.display = 'none';
            }, 300); // Wait for transition
        }
    }
}
