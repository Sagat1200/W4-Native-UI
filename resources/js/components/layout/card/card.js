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
        this.registerStateHandlers();
        this.bindStateTriggers(root);
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

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-card-state]');
            if (!trigger) return;

            const state = trigger.getAttribute('data-w4-card-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labCardTarget';
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    static handleEnabled({ element }) {
        this.resetState(element);
    }

    static handleDisabled({ element }) {
        element.classList.add('w4-card-disabled');
        element.setAttribute('data-w4-state', 'disabled');
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        element.classList.add('w4-card-active');
        element.setAttribute('data-w4-state', 'active');
    }

    static handleHidden({ element }) {
        element.classList.add('w4-card-hidden');
        element.setAttribute('data-w4-state', 'hidden');
        element.setAttribute('aria-hidden', 'true');
    }

    static handleCollapsed({ element }) {
        element.classList.add('w4-card-collapsed');
        element.setAttribute('data-w4-state', 'collapsed');
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const nextState = String(state || 'enabled').toLowerCase();
        if (nextState === 'enabled') {
            if (typeof W4Core.syncElement === 'function') {
                W4Core.syncElement(element);
            }
            return;
        }

        element.setAttribute('data-w4-state', nextState);

        if (nextState === 'active') {
            element.classList.add('w4-card-active');
        } else if (nextState === 'disabled') {
            element.classList.add('w4-card-disabled');
            element.setAttribute('aria-disabled', 'true');
        } else if (nextState === 'hidden') {
            element.classList.add('w4-card-hidden');
            element.setAttribute('aria-hidden', 'true');
        } else if (nextState === 'collapsed') {
            element.classList.add('w4-card-collapsed');
        }

        if (typeof W4Core.syncElement === 'function') {
            W4Core.syncElement(element);
        }
    }

    static resetState(element) {
        element.classList.remove('w4-card-active', 'w4-card-disabled', 'w4-card-hidden', 'w4-card-collapsed');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof Element) return targetOrId;
        return document.getElementById(String(targetOrId));
    }
}
