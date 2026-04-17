/**
 * =========================================
 * TEXTAREA COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

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
