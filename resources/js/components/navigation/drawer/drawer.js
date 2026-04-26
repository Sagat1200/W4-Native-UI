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

        W4Core.on('drawer:enabled', this.handleEnabled);
        W4Core.on('drawer:disabled', this.handleDisabled);
        W4Core.on('drawer:active', this.handleActive);
        W4Core.on('drawer:hidden', this.handleHidden);
        W4Core.on('drawer:collapsed', this.handleCollapsed);
        W4Core.on('drawer:open', this.handleOpen);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.style.pointerEvents = '';
        element.style.opacity = '';
        element.classList.remove('w4-drawer-collapsed');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        element.classList.add('w4-drawer-active');
    }

    static handleHidden({ element }) {
        element.classList.remove('w4-drawer-open');
    }

    static handleCollapsed({ element }) {
        element.classList.add('w4-drawer-collapsed');
    }

    static handleOpen({ element }) {
        element.classList.add('w4-drawer-open');
    }

    static bindEvents(root) {
        const removeOpenState = (element) => {
            const states = (element.getAttribute('data-w4-state') || '')
                .split(/\s+/)
                .filter(Boolean)
                .filter((state) => state !== 'open');

            if (states.length > 0) {
                element.setAttribute('data-w4-state', states.join(' '));
            } else {
                element.removeAttribute('data-w4-state');
            }
        };

        // Handle toggling the sidebar via data attributes
        root.addEventListener('click', (e) => {
            const toggleBtn = e.target.closest('[data-w4-toggle="drawer"]');
            if (toggleBtn) {
                const targetId = toggleBtn.getAttribute('data-w4-target');
                const drawer = targetId 
                    ? root.getElementById(targetId) || document.getElementById(targetId)
                    : toggleBtn.closest('.w4-drawer') || root.querySelector('.w4-drawer');
                
                if (drawer) {
                    const willOpen = !drawer.classList.contains('w4-drawer-open');
                    drawer.classList.toggle('w4-drawer-open');
                    if (!willOpen) {
                        removeOpenState(drawer);
                    }
                }
            }
            
            // Handle closing when clicking a dismiss button inside the sidebar
            const dismissBtn = e.target.closest('[data-w4-dismiss="drawer"]');
            if (dismissBtn) {
                const drawer = dismissBtn.closest('.w4-drawer');
                if (drawer) {
                    drawer.classList.remove('w4-drawer-open');
                    removeOpenState(drawer);    
                }
            }
        });
    }
}
