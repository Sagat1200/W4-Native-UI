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
        // We use event delegation on the document to handle touch events for mobile tooltips
        root.addEventListener('touchstart', this.handleTouchStart.bind(this));
        root.addEventListener('click', this.handleClickOutside.bind(this));

        // Register state handlers for the Tooltip component via W4Core
        this.registerStateHandlers();
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
}
