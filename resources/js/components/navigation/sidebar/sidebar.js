import W4Core from '../../../core.js';

export default class W4Sidebar {
    /**
     * Initialize Sidebar component logic
     */
    static init(root = document) {
        if (this.initialized) return;
        this.bindEvents(root);

        // Register state handlers for the Sidebar component via W4Core
        this.registerStateHandlers();

        this.initialized = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('sidebar:enabled', this.handleEnabled);
        W4Core.on('sidebar:disabled', this.handleDisabled);
        W4Core.on('sidebar:active', this.handleActive);
        W4Core.on('sidebar:hidden', this.handleHidden);
        W4Core.on('sidebar:collapsed', this.handleCollapsed);
        W4Core.on('sidebar:open', this.handleOpen);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.style.pointerEvents = '';
        element.style.opacity = '';
        element.classList.remove('w4-sidebar-collapsed');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        element.classList.add('w4-sidebar-active');
    }

    static handleHidden({ element }) {
        element.classList.remove('w4-sidebar-open');
    }

    static handleCollapsed({ element }) {
        element.classList.add('w4-sidebar-collapsed');
    }

    static handleOpen({ element }) {
        element.classList.add('w4-sidebar-open');
    }

    static bindEvents(root) {
        // Handle toggling the sidebar via data attributes
        root.addEventListener('click', (e) => {
            const toggleBtn = e.target.closest('[data-w4-toggle="sidebar"]');
            if (toggleBtn) {
                const targetId = toggleBtn.getAttribute('data-w4-target');
                const sidebar = targetId 
                    ? root.getElementById(targetId) || document.getElementById(targetId)
                    : toggleBtn.closest('.w4-sidebar') || root.querySelector('.w4-sidebar');
                
                if (sidebar) {
                    sidebar.classList.toggle('w4-sidebar-open');
                }
            }
            
            // Handle closing when clicking a dismiss button inside the sidebar
            const dismissBtn = e.target.closest('[data-w4-dismiss="sidebar"]');
            if (dismissBtn) {
                const sidebar = dismissBtn.closest('.w4-sidebar');
                if (sidebar) {
                    sidebar.classList.remove('w4-sidebar-open');
                }
            }
        });
    }
}
