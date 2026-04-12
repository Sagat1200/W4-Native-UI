/**
 * =========================================
 * CHECKBOX COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4Checkbox {
    /**
     * Initializes checkbox specific logic.
     * Mainly handles the indeterminate state which cannot be set via pure HTML/CSS.
     * @param {HTMLElement|Document} root 
     */
    static init(root = document) {
        // Find checkboxes that are explicitly marked to be indeterminate on load
        const indeterminateCheckboxes = root.querySelectorAll('.w4-checkbox-indeterminate, [data-w4-state~="indeterminate"]');
        
        indeterminateCheckboxes.forEach(checkbox => {
            checkbox.indeterminate = true;
        });
    }

    /**
     * Utility method to programmatically set the indeterminate state
     * @param {HTMLInputElement} checkbox 
     * @param {boolean} isIndeterminate 
     */
    static setIndeterminate(checkbox, isIndeterminate = true) {
        if (!checkbox || checkbox.type !== 'checkbox') return;
        
        checkbox.indeterminate = isIndeterminate;
        
        // Dispatch event so core.js can sync ARIA and data-states if needed
        checkbox.dispatchEvent(new Event('change', { bubbles: true }));
    }
}
