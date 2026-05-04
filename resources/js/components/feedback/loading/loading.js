/**
 * =========================================
 * LOADING COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Loading {
    static init(root = document) {
        // Expose a global API for manipulating loading states dynamically
        window.W4 = window.W4 || {};
        window.W4.Loading = this;

        this.bindStateTriggers(root);
        this.bindShapeTriggers(root);
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
            const trigger = event.target.closest('[data-w4-loading-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-loading-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labLoadingTarget';
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    static setShape(targetOrId, shape = 'spinner') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        const allowedShapes = ['spinner', 'dots', 'ring', 'bars', 'infinity'];
        const nextShape = allowedShapes.includes(String(shape).toLowerCase()) ? String(shape).toLowerCase() : 'spinner';

        element.classList.remove('w4-loading-spinner', 'w4-loading-dots', 'w4-loading-ring', 'w4-loading-bars', 'w4-loading-infinity');
        element.classList.add(`w4-loading-${nextShape}`);
    }

    static bindShapeTriggers(root = document) {
        if (this.shapeTriggersBound) return;

        root.addEventListener('change', (event) => {
            const trigger = event.target.closest('[data-w4-loading-shape]');
            if (!trigger) return;

            const shape = trigger.value || trigger.getAttribute('data-w4-loading-shape') || 'spinner';
            const targetId = trigger.getAttribute('data-w4-target') || 'labLoadingTarget';
            this.setShape(targetId, shape);
        });

        this.shapeTriggersBound = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('loading:enabled', this.handleEnabled);
        W4Core.on('loading:disabled', this.handleDisabled);
        W4Core.on('loading:active', this.handleActive);
        W4Core.on('loading:hidden', this.handleHidden);
        W4Core.on('loading:loading', this.handleLoadingState);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-current');
        element.removeAttribute('aria-busy');
        element.style.filter = '';
        element.style.display = '';
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

    static handleLoadingState({ element }) {
        element.setAttribute('aria-busy', 'true');
    }

    static resetState(element) {
        element.classList.remove('w4-loading-active', 'w4-loading-disabled', 'w4-loading-hidden');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-current');
        element.removeAttribute('aria-busy');
        element.style.filter = '';
        element.style.display = '';
    }

    /**
     * Shows a loading spinner on a target element
     * @param {HTMLElement|string} target - The element or selector to show the loader on
     * @param {Object} options - Configuration options
     * @param {string} [options.variant='primary'] - The semantic color variant (e.g. 'primary', 'neutral')
     * @param {string} [options.size='md'] - The size variant (e.g. 'sm', 'lg')
     * @returns {HTMLElement} The created loading element
     */
    static show(target, options = {}) {
        const el = typeof target === 'string' ? document.querySelector(target) : target;
        if (!el) return null;

        // Prevent multiple loaders on the same element
        if (el.querySelector('.w4-loading-overlay')) {
            return el.querySelector('.w4-loading-overlay');
        }

        const variant = options.variant || 'primary';
        const size = options.size || 'md';

        // Create overlay container
        const overlay = document.createElement('div');
        overlay.className = 'w4-loading-overlay';
        overlay.style.position = 'absolute';
        overlay.style.inset = '0';
        overlay.style.display = 'flex';
        overlay.style.alignItems = 'center';
        overlay.style.justifyContent = 'center';
        overlay.style.backgroundColor = 'hsl(var(--w4-base-100) / 0.7)';
        overlay.style.backdropFilter = 'blur(2px)';
        overlay.style.zIndex = '50';
        overlay.style.borderRadius = getComputedStyle(el).borderRadius || 'var(--w4-radius-md)';
        
        // Ensure parent is relative or absolute
        const parentPos = getComputedStyle(el).position;
        if (parentPos === 'static') {
            el.style.position = 'relative';
        }
        
        // Create the loading spinner
        const spinner = document.createElement('span');
        spinner.className = `w4-loading w4-loading-${variant} w4-loading-${size}`;
        
        overlay.appendChild(spinner);
        el.appendChild(overlay);
        
        // Dispatch event
        el.dispatchEvent(new CustomEvent('w4.loading.show', { bubbles: true }));
        
        return overlay;
    }

    /**
     * Hides and removes the loading spinner from a target element
     * @param {HTMLElement|string} target - The element or selector to hide the loader from
     */
    static hide(target) {
        const el = typeof target === 'string' ? document.querySelector(target) : target;
        if (!el) return;

        const overlay = el.querySelector('.w4-loading-overlay');
        if (overlay) {
            // Fade out smoothly
            overlay.style.opacity = '0';
            overlay.style.transition = 'opacity var(--w4-transition-fast) ease';
            
            setTimeout(() => {
                overlay.remove();
                el.dispatchEvent(new CustomEvent('w4.loading.hide', { bubbles: true }));
            }, 200); // Wait for transition
        }
    }
}
