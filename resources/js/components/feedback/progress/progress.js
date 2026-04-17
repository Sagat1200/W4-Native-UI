/**
 * =========================================
 * PROGRESS COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Progress {
    static init(root = document) {
        // Register state handlers for the Progress component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('progress:enabled', this.handleEnabled);
        W4Core.on('progress:disabled', this.handleDisabled);
        W4Core.on('progress:active', this.handleActive);
        W4Core.on('progress:hidden', this.handleHidden);
        W4Core.on('progress:loading', this.handleLoading);
        W4Core.on('progress:indeterminate', this.handleIndeterminate);

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
        // Handled via CSS or custom logic if needed
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
    }

    static handleIndeterminate({ element }) {
        // For standard HTML <progress> elements, indeterminate state is achieved by removing the "value" attribute.
        if (element.tagName === 'PROGRESS') {
            element.removeAttribute('value');
        }
    }
}