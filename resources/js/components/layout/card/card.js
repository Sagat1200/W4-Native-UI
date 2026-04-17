/**
 * =========================================
 * CARD COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Card {
    static init(root = document) {
        // Register state handlers for the Card component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('card:enabled', this.handleEnabled);
        W4Core.on('card:disabled', this.handleDisabled);
        W4Core.on('card:active', this.handleActive);
        W4Core.on('card:hidden', this.handleHidden);
        W4Core.on('card:collapsed', this.handleCollapsed);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.classList.remove('w4-card-collapsed');
        element.style.pointerEvents = '';
        element.style.opacity = '';
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        element.classList.add('w4-card-active');
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

    static handleCollapsed({ element }) {
        element.classList.add('w4-card-collapsed');
        // Additional DOM logic to hide card body could go here if needed,
        // but typically handled via CSS `.w4-card-collapsed .w4-card-body { display: none; }`
    }
}
