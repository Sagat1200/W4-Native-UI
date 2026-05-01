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

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof HTMLElement) return targetOrId;
        if (typeof targetOrId === 'string') return document.getElementById(targetOrId);
        return null;
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        const nextState = String(state || 'enabled').toLowerCase();

        if (nextState === 'enabled') {
            element.removeAttribute('data-w4-state');
        } else {
            element.setAttribute('data-w4-state', nextState);
        }

        if (typeof W4Core.syncElement === 'function') {
            W4Core.syncElement(element);
        }
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('icon:enabled', this.handleEnabled);
        W4Core.on('icon:disabled', this.handleDisabled);
        W4Core.on('icon:active', this.handleActive);
        W4Core.on('icon:loading', this.handleLoading);
        W4Core.on('icon:hidden', this.handleHidden);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-current');
        element.removeAttribute('aria-busy');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        element.setAttribute('aria-current', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }
}
