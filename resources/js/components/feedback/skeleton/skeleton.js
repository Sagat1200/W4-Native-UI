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
        window.W4 = window.W4 || {};
        window.W4.Skeleton = this;

        this.bindStateTriggers(root);
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
        element.classList.remove(
            'w4-skeleton-active',
            'w4-skeleton-disabled',
            'w4-skeleton-hidden',
            'w4-skeleton-loading'
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-busy');
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized !== 'enabled') {
            element.classList.add(`w4-skeleton-${normalized}`);
            element.setAttribute('data-w4-state', normalized);
        }

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `skeleton:${normalized}`);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-skeleton-state]');
            if (!trigger) return;

            const state = trigger.getAttribute('data-w4-skeleton-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
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
        element.removeAttribute('aria-busy');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        if (element) element.removeAttribute('aria-hidden');
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
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

        skeletonEl.parentNode.replaceChild(contentEl, skeletonEl);

        contentEl.dispatchEvent(new CustomEvent('w4.skeleton.replaced', { bubbles: true }));
    }

    /**
     * Hides all skeletons inside a specific container
     * @param {HTMLElement} container 
     */
    static hideAllIn(container = document) {
        const skeletons = container.querySelectorAll('.w4-skeleton');
        skeletons.forEach(s => {
            this.setState(s, 'hidden');
        });
    }
}
