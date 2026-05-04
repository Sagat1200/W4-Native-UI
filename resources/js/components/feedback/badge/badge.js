/**
 * =========================================
 * BADGE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Badge {
    static init(root = document) {
        this.bindStateTriggers(root);
        this.registerStateHandlers();
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof Element) return targetOrId;
        return document.getElementById(String(targetOrId));
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const nextState = String(state || 'enabled').toLowerCase();
        if (nextState !== 'enabled') {
            element.setAttribute('data-w4-state', nextState);
        }

        if (typeof W4Core.syncElement === 'function') {
            W4Core.syncElement(element);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-badge-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-badge-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labBadgeTarget';
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('badge:enabled', this.handleEnabled);
        W4Core.on('badge:disabled', this.handleDisabled);
        W4Core.on('badge:active', this.handleActive);
        W4Core.on('badge:hidden', this.handleHidden);
        W4Core.on('badge:highlighted', this.handleHighlighted);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-current');
        element.style.filter = '';
        element.style.transform = '';
        element.style.display = '';
        element.style.animation = '';
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

    static handleHighlighted({ element }) {
        element.removeAttribute('aria-hidden');
    }

    static resetState(element) {
        element.classList.remove('w4-badge-active', 'w4-badge-disabled', 'w4-badge-hidden', 'w4-badge-highlighted');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-current');
        element.style.filter = '';
        element.style.transform = '';
        element.style.display = '';
        element.style.animation = '';
    }
}
