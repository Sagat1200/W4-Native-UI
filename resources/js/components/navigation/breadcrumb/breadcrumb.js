import W4Core from '../../../core.js';

export default class W4Breadcrumb {
    /**
     * Initialize Breadcrumb component logic
     */
    static init(root = document) {
        // Register state handlers for the Breadcrumb component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('breadcrumb:enabled', this.handleEnabled);
        W4Core.on('breadcrumb:disabled', this.handleDisabled);
        W4Core.on('breadcrumb:active', this.handleActive);
        W4Core.on('breadcrumb:hidden', this.handleHidden);
        W4Core.on('breadcrumb:collapsed', this.handleCollapsed);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.classList.remove('w4-breadcrumb-collapsed');
        element.style.pointerEvents = '';
        element.style.opacity = '';
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        element.classList.add('w4-breadcrumb-active');
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
        if (element) {
            element.style.opacity = '0';
            setTimeout(() => {
                element.style.display = 'none';
            }, 300); // Wait for transition
        }
    }

    static handleCollapsed({ element }) {
        element.classList.add('w4-breadcrumb-collapsed');
    }
}
