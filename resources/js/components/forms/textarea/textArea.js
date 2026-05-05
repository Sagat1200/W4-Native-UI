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

        this.bindStateTriggers(root);
        // Register state handlers for the Textarea component via W4Core
        this.registerStateHandlers();
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof HTMLTextAreaElement) return targetOrId;
        if (typeof targetOrId === 'string') {
            return document.getElementById(targetOrId) || document.querySelector(targetOrId);
        }
        return null;
    }

    static resetState(element) {
        if (!element) return;

        element.classList.remove(
            'w4-textarea-disabled',
            'w4-textarea-readonly',
            'w4-textarea-invalid',
            'w4-textarea-valid',
            'w4-textarea-loading'
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-readonly');
        element.removeAttribute('aria-invalid');
        element.removeAttribute('aria-busy');
        element.removeAttribute('readonly');
        element.readOnly = false;
        element.disabled = false;
        element.style.pointerEvents = '';
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized === 'enabled') {
            this.handleEnabled({ element });
            if (typeof W4Core?.syncElement === 'function') W4Core.syncElement(element, 'textarea:enabled');
            return;
        }

        element.classList.add(`w4-textarea-${normalized}`);
        element.setAttribute('data-w4-state', normalized);

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `textarea:${normalized}`);
        }
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            if (!(event.target instanceof Element)) return;

            const trigger = event.target.closest('[data-w4-textarea-state]');
            if (!trigger) return;

            event.preventDefault();
            const state = trigger.getAttribute('data-w4-textarea-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-textarea-target') || trigger.getAttribute('data-w4-target');
            this.setState(targetId, state);
        });

        this.triggersBound = true;
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
        element.removeAttribute('aria-readonly');
        element.removeAttribute('readonly');
        element.readOnly = false;
        element.removeAttribute('aria-busy');
        element.style.pointerEvents = '';
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
        element.setAttribute('aria-readonly', 'true');
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
