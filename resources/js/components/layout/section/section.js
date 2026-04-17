/**
 * =========================================
 * SECTION COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Section {
    static init(root = document) {
        // Register state handlers for the Section component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('section:enabled', this.handleEnabled);
        W4Core.on('section:disabled', this.handleDisabled);
        W4Core.on('section:active', this.handleActive);
        W4Core.on('section:hidden', this.handleHidden);
        W4Core.on('section:collapsed', this.handleCollapsed);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.classList.remove('w4-section-collapsed');
        element.style.pointerEvents = '';
        element.style.opacity = '';
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        element.classList.add('w4-section-active');
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
        element.classList.add('w4-section-collapsed');
    }
}
