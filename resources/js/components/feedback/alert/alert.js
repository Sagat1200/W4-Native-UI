/**
 * =========================================
 * ALERT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Alert {
    static init(root = document) {
        root.addEventListener('click', this.handleClick.bind(this));
        this.registerStateHandlers();
        this.bindStateTriggers(root);
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('alert:enabled', this.handleEnabled);
        W4Core.on('alert:disabled', this.handleDisabled);
        W4Core.on('alert:active', this.handleActive);
        W4Core.on('alert:hidden', this.handleHidden);
        W4Core.on('alert:dismissed', this.handleDismissedState);

        this.handlersRegistered = true;
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
        if (nextState === 'enabled') {
            if (typeof W4Core.syncElement === 'function') W4Core.syncElement(element);
            return;
        }

        element.setAttribute('data-w4-state', nextState);
        if (typeof W4Core.syncElement === 'function') {
            W4Core.syncElement(element);
        }

        if (nextState === 'dismissed') {
            this.dismiss(element);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-alert-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-alert-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labAlertTarget';
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    static resetState(element) {
        element.classList.remove('w4-alert-active', 'w4-alert-disabled', 'w4-alert-hidden', 'w4-alert-dismissed');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.style.opacity = '';
        element.style.transition = '';
        element.style.display = '';
        element.style.filter = '';
        element.style.transform = '';
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.style.opacity = '';
        element.style.transition = '';
        element.style.display = '';
        element.style.filter = '';
        element.style.transform = '';
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        element.style.transform = 'scale(1.01)';
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleDismissedState({ element }) {
        this.dismiss(element);
    }

    static handleClick(event) {
        const dismissBtn = event.target.closest('[data-w4-dismiss="alert"]');
        if (!dismissBtn) return;

        const alert = dismissBtn.closest('.w4-alert');
        if (alert) {
            event.preventDefault();
            this.setState(alert, 'dismissed');
        }
    }

    static dismiss(alert) {
        if (alert.style.display === 'none') return;
        
        // Opacity transition instead of abrupt display: none
        alert.style.opacity = '0';
        alert.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        const finishDismiss = () => {
            alert.style.display = 'none';
            alert.setAttribute('aria-hidden', 'true');
            alert.dispatchEvent(new CustomEvent('w4.alert.dismissed', { bubbles: true }));
            alert.removeEventListener('transitionend', handleTransitionEnd);
        };

        const handleTransitionEnd = (e) => {
            if (e.target === alert) finishDismiss();
        };

        alert.addEventListener('transitionend', handleTransitionEnd);
        
        // Fallback
        setTimeout(() => {
            if (alert.style.opacity === '0') finishDismiss();
        }, 350);
    }
}
