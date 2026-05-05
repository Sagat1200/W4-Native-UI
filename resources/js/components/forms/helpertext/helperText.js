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
        this.bindStateTriggers(root);
        // Register state handlers for the HelperText component via W4Core
        this.registerStateHandlers();
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof HTMLElement) return targetOrId;
        if (typeof targetOrId === 'string') {
            return document.getElementById(targetOrId) || document.querySelector(targetOrId);
        }
        return null;
    }

    static resetState(element) {
        if (!element) return;

        element.classList.remove(
            'w4-helper-text-disabled',
            'w4-helper-text-active',
            'w4-helper-text-hidden'
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.style.display = '';
        element.style.opacity = '';
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized !== 'enabled') {
            element.classList.add(`w4-helper-text-${normalized}`);
            element.setAttribute('data-w4-state', normalized);
        }

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `helper-text:${normalized}`);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            if (!(event.target instanceof Element)) return;

            const trigger = event.target.closest('[data-w4-helper-text-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-helper-text-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-helper-text-target') || trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
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
