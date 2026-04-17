import W4Core from '../../../core.js';

export default class W4Dropdown {
    /**
     * Initialize Dropdown component logic
     */
    static init(root = document) {
        if (this.initialized) return;
        this.bindEvents(root);
        
        // Register state handlers for the Dropdown component via W4Core
        this.registerStateHandlers();

        this.initialized = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('dropdown:enabled', this.handleEnabled);
        W4Core.on('dropdown:disabled', this.handleDisabled);
        W4Core.on('dropdown:active', this.handleActive);
        W4Core.on('dropdown:hidden', this.handleHidden);
        W4Core.on('dropdown:open', this.handleOpen);

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
        // Puede utilizarse para resaltar el dropdown
        element.classList.add('w4-dropdown-active');
    }

    static handleHidden({ element }) {
        element.classList.remove('w4-dropdown-open');
    }

    static handleOpen({ element }) {
        element.classList.add('w4-dropdown-open');
    }

    static bindEvents(root) {
        // Close dropdowns when clicking outside
        root.addEventListener('click', (e) => {
            const isDropdownClick = e.target.closest('.w4-dropdown');
            if (!isDropdownClick) {
                document.querySelectorAll('.w4-dropdown-open').forEach(dropdown => {
                    dropdown.classList.remove('w4-dropdown-open');
                });
            }
        });

        // Toggle dropdown on click if it has a toggle button
        root.addEventListener('click', (e) => {
            const toggleBtn = e.target.closest('[data-w4-toggle="dropdown"]');
            if (toggleBtn) {
                const dropdown = toggleBtn.closest('.w4-dropdown');
                if (dropdown) {
                    dropdown.classList.toggle('w4-dropdown-open');
                    // Close others
                    document.querySelectorAll('.w4-dropdown-open').forEach(other => {
                        if (other !== dropdown) {
                            other.classList.remove('w4-dropdown-open');
                        }
                    });
                }
            }
        });
    }
}
