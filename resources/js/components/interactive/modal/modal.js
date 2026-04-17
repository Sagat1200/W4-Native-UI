/**
 * =========================================
 * MODAL COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Interactive System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Modal {
    /**
     * Initializes the modal functionality on the document.
     * Sets up event listeners for toggling modals and handling accessibility.
     */
    static init(root = document) {
        root.addEventListener('click', this.handleClick.bind(this));
        root.addEventListener('keydown', this.handleKeydown.bind(this));

        // Register state handlers for the Modal component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('modal:enabled', this.handleEnabled);
        W4Core.on('modal:disabled', this.handleDisabled);
        W4Core.on('modal:active', this.handleActive);
        W4Core.on('modal:hidden', this.handleHidden);
        W4Core.on('modal:open', this.handleOpen);

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
        element.style.zIndex = '1000';
    }

    static handleHidden({ element }) {
        W4Modal.close(element);
    }

    static handleOpen({ element }) {
        W4Modal.open(element);
    }

    /**
     * Handles global click events to open/close modals.
     * @param {MouseEvent} event 
     */
    static handleClick(event) {
        const target = event.target;

        // 1. Open modal via data attribute trigger
        const trigger = target.closest('[data-w4-toggle="modal"]');
        if (trigger) {
            const targetId = trigger.getAttribute('data-w4-target');
            if (targetId) {
                const modal = document.getElementById(targetId);
                if (modal) {
                    event.preventDefault();
                    this.open(modal);
                }
            }
            return;
        }

        // 2. Close modal via dismiss button inside the modal
        const dismiss = target.closest('[data-w4-dismiss="modal"]');
        if (dismiss) {
            const modal = dismiss.closest('.w4-modal');
            if (modal) {
                event.preventDefault();
                this.close(modal);
            }
            return;
        }

        // 3. Close modal by clicking on the backdrop
        if (target.classList.contains('w4-modal') && target.classList.contains('w4-modal-open')) {
            // Check if it's explicitly not supposed to close on backdrop click
            if (target.getAttribute('data-w4-backdrop') !== 'static') {
                this.close(target);
            }
        }
    }

    /**
     * Handles global keydown events (e.g., Escape key).
     * @param {KeyboardEvent} event 
     */
    static handleKeydown(event) {
        if (event.key === 'Escape') {
            const openModals = document.querySelectorAll('.w4-modal.w4-modal-open');
            if (openModals.length > 0) {
                // Get the top-most modal
                const topModal = openModals[openModals.length - 1];
                if (topModal.getAttribute('data-w4-backdrop') !== 'static') {
                    this.close(topModal);
                }
            }
        }
    }

    /**
     * Opens a specific modal element.
     * @param {HTMLElement} modal 
     */
    static open(modal) {
        if (!modal) return;
        
        // Remove closing class if it was in the middle of closing
        modal.classList.remove('w4-modal-closing');
        
        // Add open class
        modal.classList.add('w4-modal-open');
        modal.setAttribute('aria-hidden', 'false');
        modal.setAttribute('open', ''); // For native dialog support if used

        // Dispatch custom event
        modal.dispatchEvent(new CustomEvent('w4.modal.opened', { bubbles: true }));

        // Optional: lock body scroll
        document.body.style.overflow = 'hidden';
    }

    /**
     * Closes a specific modal element with animation.
     * @param {HTMLElement} modal 
     */
    static close(modal) {
        if (!modal || !modal.classList.contains('w4-modal-open')) return;

        // Apply closing class to trigger CSS animation
        modal.classList.add('w4-modal-closing');

        // Wait for CSS animation to finish before actually hiding
        // The transition in modal.css is defined via var(--w4-transition-normal), typically 0.2s or 0.3s.
        // We'll listen to transitionend, but provide a fallback timeout.
        
        const finishClose = () => {
            modal.classList.remove('w4-modal-open', 'w4-modal-closing');
            modal.setAttribute('aria-hidden', 'true');
            modal.removeAttribute('open');
            
            // Dispatch custom event
            modal.dispatchEvent(new CustomEvent('w4.modal.closed', { bubbles: true }));

            // Check if there are other open modals before unlocking body scroll
            const otherOpenModals = document.querySelectorAll('.w4-modal.w4-modal-open');
            if (otherOpenModals.length === 0) {
                document.body.style.overflow = '';
            }
            
            modal.removeEventListener('transitionend', handleTransitionEnd);
        };

        const handleTransitionEnd = (e) => {
            // Ensure we are catching the opacity or transform transition on the modal itself
            if (e.target === modal || e.target.classList.contains('w4-modal-box')) {
                finishClose();
            }
        };

        modal.addEventListener('transitionend', handleTransitionEnd);
        
        // Fallback in case transitionend fails to fire (e.g. if transition is 0s)
        setTimeout(() => {
            if (modal.classList.contains('w4-modal-closing')) {
                finishClose();
            }
        }, 350); // Safe threshold slightly above standard transition time
    }
}
