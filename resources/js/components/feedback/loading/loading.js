/**
 * =========================================
 * LOADING COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Loading {
    static init() {
        // Expose a global API for manipulating loading states dynamically
        window.W4 = window.W4 || {};
        window.W4.Loading = this;

        // Register state handlers for the Loading component
        this.registerStateHandlers();
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
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // May adjust visual state
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleLoadingState({ element }) {
        // Custom loading behavior on the spinner itself if needed
        element.setAttribute('aria-busy', 'true');
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