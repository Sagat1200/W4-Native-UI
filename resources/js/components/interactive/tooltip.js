/**
 * =========================================
 * TOOLTIP COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Interactive System
 * =========================================
 */

export default class W4Tooltip {
    static init() {
        // We use event delegation on the document to handle touch events for mobile tooltips
        document.addEventListener('touchstart', this.handleTouchStart.bind(this));
        document.addEventListener('click', this.handleClickOutside.bind(this));
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
