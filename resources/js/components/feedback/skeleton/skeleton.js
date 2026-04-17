/**
 * =========================================
 * SKELETON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Skeleton {
    static init(root = document) {
        // Register state handlers for the Skeleton component
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('skeleton:enabled', this.handleEnabled);
        W4Core.on('skeleton:disabled', this.handleDisabled);
        W4Core.on('skeleton:active', this.handleActive);
        W4Core.on('skeleton:hidden', this.handleHidden);
        W4Core.on('skeleton:loading', this.handleLoading);

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

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
    }

    /**
     * Replaces a skeleton loader with the actual content element
     * @param {HTMLElement} skeletonEl - The skeleton element to remove
     * @param {HTMLElement} contentEl - The content element to insert
     */
    static replace(skeletonEl, contentEl) {
        if (!skeletonEl || !skeletonEl.parentNode) return;
        
        // Optional: Add a brief fade-in for the new content
        contentEl.style.opacity = '0';
        contentEl.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        skeletonEl.parentNode.replaceChild(contentEl, skeletonEl);
        
        // Trigger reflow to ensure transition works
        void contentEl.offsetWidth;
        contentEl.style.opacity = '1';
        
        contentEl.dispatchEvent(new CustomEvent('w4.skeleton.replaced', { bubbles: true }));
    }

    /**
     * Hides all skeletons inside a specific container
     * @param {HTMLElement} container 
     */
    static hideAllIn(container = document) {
        const skeletons = container.querySelectorAll('.w4-skeleton');
        skeletons.forEach(s => {
            s.style.opacity = '0';
            setTimeout(() => {
                s.style.display = 'none';
            }, 300);
        });
    }
}
