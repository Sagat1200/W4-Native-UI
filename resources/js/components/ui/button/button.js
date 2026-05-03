/**
 * =========================================
 * BUTTON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Button {
    static init(root = document) {
        // Visual press feedback is handled by core.js centrally
        
        // Register state handlers for the Button component
        this.registerStateHandlers();
        this.bindStateTriggers(root);
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('button:enabled', this.handleEnabled);
        W4Core.on('button:disabled', this.handleDisabled);
        W4Core.on('button:loading', this.handleLoading);
        W4Core.on('button:active', this.handleActive);
        W4Core.on('button:readonly', this.handleReadonly);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('disabled');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-readonly');
        element.removeAttribute('aria-busy');
        if ('readOnly' in element) element.readOnly = false;
    }

    static handleDisabled({ element }) {
        element.setAttribute('disabled', 'true');
        element.setAttribute('aria-disabled', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
        element.setAttribute('disabled', 'true');
    }

    static handleActive({ element }) {
        element.setAttribute('aria-pressed', 'true');
    }

    static handleReadonly({ element }) {
        element.setAttribute('readonly', 'true');
        element.setAttribute('aria-readonly', 'true');
        // If it's a native button, readonly doesn't exist natively, so we mimic it with disabled
        if (element.tagName === 'BUTTON') {
            element.setAttribute('disabled', 'true');
        }
        if ('readOnly' in element) element.readOnly = true;
    }

    /**
     * Public API used by labs/integrations to force a button state.
     * Accepts an element reference or an element id.
     */
    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const nextState = String(state || 'enabled').toLowerCase();
        if (nextState === 'enabled') {
            return;
        }

        element.setAttribute('data-w4-state', nextState);

        if (nextState === 'active') {
            element.classList.add('w4-button-active');
            element.setAttribute('aria-pressed', 'true');
        } else if (nextState === 'loading') {
            element.classList.add('w4-button-loading');
            element.setAttribute('aria-busy', 'true');
            element.setAttribute('disabled', 'true');
        } else if (nextState === 'readonly') {
            element.classList.add('w4-button-readonly');
            element.setAttribute('readonly', 'true');
            element.setAttribute('aria-readonly', 'true');
            element.setAttribute('disabled', 'true');
            if ('readOnly' in element) element.readOnly = true;
        } else if (nextState === 'disabled') {
            element.classList.add('w4-button-disabled');
            element.setAttribute('disabled', 'true');
            element.setAttribute('aria-disabled', 'true');
        }

        if (typeof W4Core.syncElement === 'function') {
            W4Core.syncElement(element);
        }
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof Element) return targetOrId;
        return document.getElementById(String(targetOrId));
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-button-state]');
            if (!trigger) return;

            const state = trigger.getAttribute('data-w4-button-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labButtonTarget';
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    static resetState(element) {
        element.classList.remove('w4-button-active', 'w4-button-loading', 'w4-button-disabled', 'w4-button-readonly');
        element.removeAttribute('disabled');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-readonly');
        element.removeAttribute('aria-busy');
        element.removeAttribute('aria-pressed');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        if ('readOnly' in element) element.readOnly = false;
    }
}
