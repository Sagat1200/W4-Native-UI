/**
 * =========================================
 * TOAST COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Toast {
    static init(root = document) {
        // Inicializa listeners manuales (ej: click en botones de dismiss)
        root.addEventListener('click', this.handleClick.bind(this));
        this.bindStateTriggers(root);
        
        // Auto-dismiss initialization for existing toasts in the DOM
        const toasts = root.querySelectorAll('.w4-toast[data-w4-duration]');
        toasts.forEach(toast => {
            if (!toast.hasAttribute('data-w4-toast-bound')) {
                this.setupAutoDismiss(toast);
                toast.setAttribute('data-w4-toast-bound', 'true');
            }
        });

        // Register state handlers for the Toast component via W4Core
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
            'w4-toast-active',
            'w4-toast-disabled',
            'w4-toast-hidden',
            'w4-toast-dismissed'
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.style.display = '';
        element.style.opacity = '';
        element.style.transition = '';
        element.style.filter = '';
        element.style.transform = '';
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized === 'enabled') {
            if (typeof W4Core?.syncElement === 'function') W4Core.syncElement(element);
            return;
        }

        element.classList.add(`w4-toast-${normalized}`);
        element.setAttribute('data-w4-state', normalized);

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `toast:${normalized}`);
        }

        if (normalized === 'dismissed') {
            this.dismiss(element);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            if (!(event.target instanceof Element)) return;

            const trigger = event.target.closest('[data-w4-toast-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-toast-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-toast-target') || trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('toast:enabled', this.handleEnabled);
        W4Core.on('toast:disabled', this.handleDisabled);
        W4Core.on('toast:active', this.handleActive);
        W4Core.on('toast:hidden', this.handleHidden);
        W4Core.on('toast:dismissed', this.handleDismissed);

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
        }
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
        if (element) {
            element.style.opacity = '0';
            setTimeout(() => {
                element.style.display = 'none';
            }, 300);
        }
    }

    static handleDismissed({ element }) {
        // Si W4Core detecta el estado "dismissed", lo manejamos igual que si hicieran click
        W4Toast.dismiss(element);
    }

    static handleClick(event) {
        const dismissBtn = event.target.closest('[data-w4-dismiss="toast"]');
        if (!dismissBtn) return;

        const toast = dismissBtn.closest('.w4-toast');
        if (toast) {
            event.preventDefault();
            this.dismiss(toast);
        }
    }

    static setupAutoDismiss(toast) {
        const duration = parseInt(toast.getAttribute('data-w4-duration'), 10);
        if (!isNaN(duration) && duration > 0) {
            setTimeout(() => {
                this.dismiss(toast);
            }, duration);
        }
    }

    static dismiss(toast) {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        const finishDismiss = () => {
            toast.style.display = 'none';
            toast.dispatchEvent(new CustomEvent('w4.toast.dismissed', { bubbles: true }));
            toast.remove(); // Usually we want to remove toasts from DOM completely
        };

        const handleTransitionEnd = (e) => {
            if (e.target === toast) finishDismiss();
        };

        toast.addEventListener('transitionend', handleTransitionEnd);
        
        setTimeout(() => {
            if (toast.style.opacity === '0') finishDismiss();
        }, 350);
    }

    /**
     * API to create toasts dynamically
     */
    static show(message, options = {}) {
        const type = options.type || 'info';
        const duration = options.duration || 3000;
        const position = options.position || 'bottom-right';
        
        // Determine container or create one
        let container = document.querySelector(`.w4-toast-container[data-w4-toast-position="${position}"]`);
        if (!container) {
            container = document.createElement('div');
            container.className = 'w4-toast-container';
            container.setAttribute('data-w4-toast-position', position);
            document.body.appendChild(container);
        }

        const toast = document.createElement('div');
        toast.className = `w4-toast w4-toast-${type}`;
        toast.innerHTML = message;
        
        // Add dismiss button if required
        if (options.dismissible) {
            toast.innerHTML += `<button type="button" data-w4-dismiss="toast" aria-label="Close">×</button>`;
        }

        if (duration > 0) {
            toast.setAttribute('data-w4-duration', duration.toString());
            this.setupAutoDismiss(toast);
        }

        container.appendChild(toast);
        return toast;
    }
}
