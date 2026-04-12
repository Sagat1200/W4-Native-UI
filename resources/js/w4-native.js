/**
 * =========================================
 * NATIVE W4 VISUAL ENGINE SCRIPT
 * Central JavaScript Initialization
 * =========================================
 */

// Import interactive components
import W4Modal from './components/interactive/modal.js';
import W4Alert from './components/feedback/alert.js';
import W4Toast from './components/feedback/toast.js';
import W4Skeleton from './components/feedback/skeleton.js';

// Import forms components
import W4Checkbox from './components/forms/checkbox.js';
import W4Textarea from './components/forms/textArea.js';
import W4Input from './components/forms/input.js';
import W4Radio from './components/forms/radio.js';
import W4Select from './components/forms/select.js';
import W4Toggle from './components/forms/toggle.js';
import W4FieldError from './components/forms/fieldError.js';
import W4HelperText from './components/forms/helperText.js';

// Import core logic (previous IIFE logic wrapped in a modern ES6 structure)
import W4Core from './core.js';

class W4NativeUI {
    /**
     * Initializes all interactive components and core event bindings.
     * Call this when the DOM is ready.
     */
    static start() {
        // 1. Initialize Interactive & Feedback Components
        W4Modal.init();
        W4Alert.init();
        W4Toast.init();
        W4Skeleton.init();

        // 2. Initialize Forms Components
        W4Checkbox.init();
        W4Textarea.init();
        W4Input.init();
        W4Radio.init();
        W4Select.init();
        W4Toggle.init();
        W4FieldError.init();
        W4HelperText.init();

        // 3. Initialize Core Event System (Data attributes, ARIA sync, Forms)
        W4Core.init();
    }

    /**
     * Public API to access components programmatically
     */
    static get Modal() { return W4Modal; }
    static get Alert() { return W4Alert; }
    static get Toast() { return W4Toast; }
    static get Skeleton() { return W4Skeleton; }
    
    // Form APIs
    static get Checkbox() { return W4Checkbox; }
    static get Textarea() { return W4Textarea; }
    static get Input() { return W4Input; }
    static get Radio() { return W4Radio; }
    static get Select() { return W4Select; }
    static get Toggle() { return W4Toggle; }
    static get FieldError() { return W4FieldError; }
    static get HelperText() { return W4HelperText; }
    
    static get Core() { return W4Core; }
}

// Auto-initialize if running in a browser environment
if (typeof window !== 'undefined' && typeof document !== 'undefined') {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => W4NativeUI.start());
    } else {
        W4NativeUI.start();
    }

    // Expose to window for external scripts (backward compatibility & global access)
    window.W4NativeUI = W4NativeUI;
}

export default W4NativeUI;
