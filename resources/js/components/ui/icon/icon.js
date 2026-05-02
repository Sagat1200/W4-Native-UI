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
        this.bindStateTriggers(root);
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

        this.resetState(element);

        const nextState = String(state || 'enabled').toLowerCase();

        if (nextState !== 'enabled') {
            element.setAttribute('data-w4-state', nextState);
        }

        if (nextState === 'active') {
            element.classList.add('w4-icon-active');
            element.setAttribute('aria-current', 'true');
        } else if (nextState === 'loading') {
            element.classList.add('w4-icon-loading');
            element.setAttribute('aria-busy', 'true');
        } else if (nextState === 'disabled') {
            element.classList.add('w4-icon-disabled');
            element.setAttribute('aria-disabled', 'true');
        } else if (nextState === 'hidden') {
            element.classList.add('w4-icon-hidden');
            element.setAttribute('aria-hidden', 'true');
        }

        if (typeof W4Core.syncElement === 'function') {
            W4Core.syncElement(element);
        } else {
            // Keep hooks clean if core is unavailable.
            element.removeAttribute('data-w4-hook');
        }
    }

    static resetState(element) {
        element.classList.remove('w4-icon-active', 'w4-icon-loading', 'w4-icon-disabled', 'w4-icon-hidden', 'w4-icon-spin');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-current');
        element.removeAttribute('aria-busy');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-icon-state]');
            if (!trigger) return;

            const state = trigger.getAttribute('data-w4-icon-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labIconTarget';

            this.setState(targetId, state);
        });

        this.triggersBound = true;
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
