/**
 * =========================================
 * TOOLTIP COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Interactive System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Tooltip {
    static init(root = document) {
        // Register state handlers for the Tooltip component via W4Core
        this.registerStateHandlers();
        this.bindInteractionHandlers(root);
        this.bindStateTriggers(root);
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('tooltip:enabled', this.handleEnabled);
        W4Core.on('tooltip:disabled', this.handleDisabled);
        W4Core.on('tooltip:active', this.handleActive);
        W4Core.on('tooltip:hidden', this.handleHidden);
        W4Core.on('tooltip:open', this.handleOpen);

        this.handlersRegistered = true;
    }

    static bindInteractionHandlers(root = document) {
        if (this.interactionsBound) return;

        // We use event delegation on the document to handle touch events for mobile tooltips
        root.addEventListener('touchstart', this.handleTouchStart.bind(this));
        root.addEventListener('click', this.handleClickOutside.bind(this));

        this.interactionsBound = true;
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-tooltip-state]');
            if (!trigger) return;

            const state = trigger.getAttribute('data-w4-tooltip-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target') || 'labTooltipTarget';
            this.setState(targetId, state);
        });

        this.triggersBound = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.style.pointerEvents = '';
        element.style.opacity = '';
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        element.classList.add('w4-tooltip-active');
    }

    static handleHidden({ element }) {
        element.classList.remove('w4-tooltip-active');
        element.classList.remove('w4-tooltip-open');
    }

    static handleOpen({ element }) {
        element.classList.add('w4-tooltip-open');
    }

    /**
     * Handles touch events to manually toggle tooltips on mobile devices
     * where CSS :hover doesn't exist naturally.
     * @param {TouchEvent} e 
     */
    static handleTouchStart(e) {
        const tooltip = e.target.closest('.w4-tooltip');
        
        if (tooltip) {
            const isActive = tooltip.classList.contains('w4-tooltip-active');
            
            // Close all other active tooltips
            this.closeAll();

            if (!isActive) {
                tooltip.classList.add('w4-tooltip-active');
            }
        }
    }

    /**
     * Closes tooltips when clicking outside of them
     * @param {MouseEvent} e 
     */
    static handleClickOutside(e) {
        if (!e.target.closest('.w4-tooltip')) {
            this.closeAll();
        }
    }

    /**
     * Closes all active tooltips on the page
     */
    static closeAll() {
        const activeTooltips = document.querySelectorAll('.w4-tooltip.w4-tooltip-active');
        activeTooltips.forEach(t => t.classList.remove('w4-tooltip-active'));
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        const nextState = String(state || 'enabled').toLowerCase();
        this.resetState(element);

        if (nextState === 'enabled') {
            if (typeof W4Core?.syncElement === 'function') {
                W4Core.syncElement(element);
            }
            return;
        }

        element.setAttribute('data-w4-state', nextState);

        if (nextState === 'open') {
            element.classList.add('w4-tooltip-open');
        } else if (nextState === 'active') {
            element.classList.add('w4-tooltip-active');
        } else if (nextState === 'disabled') {
            element.classList.add('w4-tooltip-disabled');
            element.setAttribute('aria-disabled', 'true');
        } else if (nextState === 'hidden') {
            element.classList.add('w4-tooltip-hidden');
        }

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element);
        }
    }

    static resetState(element) {
        element.classList.remove('w4-tooltip-open', 'w4-tooltip-active', 'w4-tooltip-hidden', 'w4-tooltip-disabled');
        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.style.pointerEvents = '';
        element.style.opacity = '';
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof Element) return targetOrId;
        return document.getElementById(String(targetOrId));
    }
}
