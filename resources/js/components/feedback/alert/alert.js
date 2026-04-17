/**
 * =========================================
 * ALERT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Alert {
    static init() {
        document.addEventListener('click', this.handleClick.bind(this));
        
        // Register state handlers for the Alert component
        this.registerStateHandlers();
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

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Active alerts might trigger an animation or bring to front
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleDismissedState({ element }) {
        W4Alert.dismiss(element);
    }

    static handleClick(event) {
        const dismissBtn = event.target.closest('[data-w4-dismiss="alert"]');
        if (!dismissBtn) return;

        const alert = dismissBtn.closest('.w4-alert');
        if (alert) {
            event.preventDefault();
            // Trigger the state change via core or directly dismiss
            alert.setAttribute('data-w4-state', 'dismissed');
            W4Core.syncElement(alert);
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
