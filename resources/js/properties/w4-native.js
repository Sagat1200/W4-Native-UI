/**
 * =========================================
 * NATIVE W4 VISUAL ENGINE SCRIPT
 * Central JavaScript Initialization
 * =========================================
 */

// Import interactive components
import W4Modal from '../components/interactive/modal.js';
import W4Tooltip from '../components/interactive/tooltip.js';
import W4Alert from '../components/feedback/alert.js';
import W4Toast from '../components/feedback/toast.js';
import W4Skeleton from '../components/feedback/skeleton.js';

// Import forms components
import W4Checkbox from '../components/forms/checkbox.js';
import W4Textarea from '../components/forms/textArea.js';
import W4Input from '../components/forms/input.js';
import W4Radio from '../components/forms/radio.js';
import W4Select from '../components/forms/select.js';
import W4Toggle from '../components/forms/toggle.js';
import W4FieldError from '../components/forms/fieldError.js';
import W4HelperText from '../components/forms/helperText.js';

// Import layout components
import W4Card from '../components/layout/card.js';
import W4Container from '../components/layout/container.js';
import W4Divider from '../components/layout/divider.js';
import W4Grid from '../components/layout/grid.js';
import W4Panel from '../components/layout/panel.js';
import W4Section from '../components/layout/section.js';
import W4Stack from '../components/layout/stack.js';

// Import UI components
import W4Button from '../components/ui/button.js';
import W4IconButton from '../components/ui/iconButton.js';
import W4Heading from '../components/ui/heading.js';
import W4Icon from '../components/ui/icon.js';
import W4Label from '../components/ui/label.js';
import W4Link from '../components/ui/link.js';
import W4Text from '../components/ui/text.js';

// Import navigation components
import W4Breadcrumb from '../components/navigation/breadcrumb.js';
import W4Dropdown from '../components/navigation/dropdown.js';
import W4Menu from '../components/navigation/menu.js';
import W4Navbar from '../components/navigation/navbar.js';
import W4Sidebar from '../components/navigation/sidebar.js';
import W4Tab from '../components/navigation/tab.js';

// Import core logic (previous IIFE logic wrapped in a modern ES6 structure)
import W4Core from '../core.js';

class W4NativeUI {
    /**
     * Initializes all interactive components and core event bindings.
     * Call this when the DOM is ready.
     */
    static start() {
        // 1. Initialize Interactive & Feedback Components
        W4Modal.init();
        W4Tooltip.init();
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

        // 3. Initialize Layout Components
        W4Card.init();
        W4Container.init();
        W4Divider.init();
        W4Grid.init();
        W4Panel.init();
        W4Section.init();
        W4Stack.init();

        // 4. Initialize UI Components
        W4Button.init();
        W4IconButton.init();
        W4Heading.init();
        W4Icon.init();
        W4Label.init();
        W4Link.init();
        W4Text.init();

        // 5. Initialize Navigation Components
        W4Breadcrumb.init();
        W4Dropdown.init();
        W4Menu.init();
        W4Navbar.init();
        W4Sidebar.init();
        W4Tab.init();

        // 6. Initialize Core Event System (Data attributes, ARIA sync, Forms)
        W4Core.init();
    }

    /**
     * Public API to access components programmatically
     */
    static get Modal() { return W4Modal; }
    static get Tooltip() { return W4Tooltip; }
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
    
    // Layout APIs
    static get Card() { return W4Card; }
    static get Container() { return W4Container; }
    static get Divider() { return W4Divider; }
    static get Grid() { return W4Grid; }
    static get Panel() { return W4Panel; }
    static get Section() { return W4Section; }
    static get Stack() { return W4Stack; }

    // UI APIs
    static get Button() { return W4Button; }
    static get IconButton() { return W4IconButton; }
    static get Heading() { return W4Heading; }
    static get Icon() { return W4Icon; }
    static get Label() { return W4Label; }
    static get Link() { return W4Link; }
    static get Text() { return W4Text; }

    // Navigation APIs
    static get Breadcrumb() { return W4Breadcrumb; }
    static get Dropdown() { return W4Dropdown; }
    static get Menu() { return W4Menu; }
    static get Navbar() { return W4Navbar; }
    static get Sidebar() { return W4Sidebar; }
    static get Tab() { return W4Tab; }

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
