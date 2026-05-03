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
            element.classList.add('w4-text-active');
            element.setAttribute('aria-current', 'true');
        } else if (nextState === 'disabled') {
            element.classList.add('w4-text-disabled');
            element.setAttribute('aria-disabled', 'true');
        } else if (nextState === 'hidden') {
            element.classList.add('w4-text-hidden');
            element.setAttribute('aria-hidden', 'true');
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

        W4Core.on('text:enabled', this.handleEnabled);
        W4Core.on('text:disabled', this.handleDisabled);
        W4Core.on('text:active', this.handleActive);
        W4Core.on('text:hidden', this.handleHidden);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-current');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        element.setAttribute('aria-current', 'true');
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-text-state]');
            if (!trigger) return;

            const state = trigger.getAttribute('data-w4-text-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labTextTarget';
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    static resetState(element) {
        element.classList.remove('w4-text-active', 'w4-text-disabled', 'w4-text-hidden');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-current');
    }
}
