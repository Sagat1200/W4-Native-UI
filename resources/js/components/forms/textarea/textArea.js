/**
 * =========================================
 * TEXTAREA COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Textarea {
    static init(root = document) {
        // Auto-resize logic
        const textareas = root.querySelectorAll('textarea.w4-textarea[data-w4-auto-resize="true"]');
        
        textareas.forEach(el => {
            if (el.getAttribute('data-w4-textarea-bound') === 'true') return;

            el.addEventListener('input', this.handleResize.bind(this));

            // Trigger once to set initial height based on pre-filled content
            const event = new Event('input', { bubbles: true });
            el.dispatchEvent(event);

            el.setAttribute('data-w4-textarea-bound', 'true');
        });

        // Register state handlers for the Textarea component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('textarea:enabled', this.handleEnabled);
        W4Core.on('textarea:disabled', this.handleDisabled);
        W4Core.on('textarea:loading', this.handleLoading);
        W4Core.on('textarea:readonly', this.handleReadonly);
        W4Core.on('textarea:invalid', this.handleInvalid);
        W4Core.on('textarea:valid', this.handleValid);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.disabled = false;
        element.removeAttribute('aria-disabled');
        element.removeAttribute('readonly');
        element.removeAttribute('aria-busy');
    }

    static handleDisabled({ element }) {
        element.disabled = true;
        element.setAttribute('aria-disabled', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
        // Opcionalmente podemos hacerlo readonly mientras carga
        // element.setAttribute('readonly', 'true');
    }

    static handleReadonly({ element }) {
        element.setAttribute('readonly', 'true');
    }

    static handleInvalid({ element }) {
        element.setAttribute('aria-invalid', 'true');
    }

    static handleValid({ element }) {
        element.removeAttribute('aria-invalid');
    }

    /**
     * Dynamically resizes the textarea based on its content scroll height
     * @param {Event} e 
     */
    static handleResize(e) {
        const target = e.target;
        target.style.height = 'auto'; // Reset to auto to get true scrollHeight if content shrunk
        target.style.height = target.scrollHeight + 'px';
    }
}
