import W4Core from '../../../core.js';

export default class W4Navbar {
    /**
     * Initialize Navbar component logic
     */
    static init(root = document) {
        // Base logic for Navbar.
        // Ready for future custom logic (e.g., scroll transparency transitions, mobile menu toggling).

        // Register state handlers for the Navbar component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('navbar:enabled', this.handleEnabled);
        W4Core.on('navbar:disabled', this.handleDisabled);
        W4Core.on('navbar:active', this.handleActive);
        W4Core.on('navbar:hidden', this.handleHidden);
        W4Core.on('navbar:collapsed', this.handleCollapsed);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.style.pointerEvents = '';
        element.style.opacity = '';
        element.classList.remove('w4-navbar-collapsed');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        element.classList.add('w4-navbar-active');
    }

    static handleHidden({ element }) {
        element.classList.add('w4-navbar-hidden');
    }

    static handleCollapsed({ element }) {
        element.classList.add('w4-navbar-collapsed');
    }
}
