import W4Core from '../../../core.js';

export default class W4Drawer {
    /**
     * Initialize Drawer component logic
     */
    static init(root = document) {
        if (this.initialized) return;
        this.bindEvents(root);

        // Register state handlers for the Drawer component via W4Core
        this.registerStateHandlers();

        this.initialized = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('drawer:open', this.handleOpen);
        W4Core.on('drawer:closed', this.handleClosed);

        this.handlersRegistered = true;
    }

    static handleOpen({ element }) {
        element.classList.add('w4-drawer-open');
        element.setAttribute('data-w4-state', 'open');
        element.setAttribute('aria-hidden', 'false');
    }

    static handleClosed({ element }) {
        element.classList.remove('w4-drawer-open');
        element.setAttribute('data-w4-state', 'closed');
        element.setAttribute('aria-hidden', 'true');
    }

    static bindEvents(root) {
        // Handle toggling the drawer via data attributes
        root.addEventListener('click', (e) => {
            const toggleBtn = e.target.closest('[data-w4-toggle="drawer"]');
            if (toggleBtn) {
                const targetId = toggleBtn.getAttribute('data-w4-target');
                const drawer = targetId 
                    ? root.getElementById(targetId) || document.getElementById(targetId)
                    : toggleBtn.closest('.w4-drawer') || root.querySelector('.w4-drawer');
                
                if (drawer) {
                    if (targetId) {
                        toggleBtn.setAttribute('aria-controls', targetId);
                    }
                    const isOpen = drawer.classList.contains('w4-drawer-open') || drawer.getAttribute('data-w4-state') === 'open';
                    if (isOpen) {
                        this.handleClosed({ element: drawer });
                        toggleBtn.setAttribute('aria-expanded', 'false');
                    } else {
                        this.handleOpen({ element: drawer });
                        toggleBtn.setAttribute('aria-expanded', 'true');
                    }
                }
            }
            
            // Handle closing when clicking a dismiss button inside the drawer
            const dismissBtn = e.target.closest('[data-w4-dismiss="drawer"]');
            if (dismissBtn) {
                const drawer = dismissBtn.closest('.w4-drawer');
                if (drawer) {
                    this.handleClosed({ element: drawer });
                    const drawerId = drawer.getAttribute('id');
                    if (drawerId) {
                        const toggles = root.querySelectorAll(`[data-w4-toggle="drawer"][data-w4-target="${drawerId}"]`);
                        toggles.forEach((toggle) => {
                            toggle.setAttribute('aria-controls', drawerId);
                            toggle.setAttribute('aria-expanded', 'false');
                        });
                    }
                }
            }
        });
    }
}
