import W4Core from '../../../core.js';

export default class W4Sidebar {
    /**
     * Initialize SideBar component logic
     */
    static init(root = document) {
        if (this.initialized) return;
        this.registerStateHandlers();
        this.bindEvents(root);
        this.syncInitialState(root);
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
        W4Core.on('sidebar:expanded', this.handleExpanded);

        this.handlersRegistered = true;
    }

    static syncInitialState(root) {
        const sidebars = root.querySelectorAll('.w4-sidebar');
        sidebars.forEach((element) => {
            const state = element.getAttribute('data-w4-state') || 'enabled';
            this.applyState({ element, state });
        });
    }

    static bindEvents(root) {
        root.addEventListener('click', (e) => {
            const toggleBtn = e.target.closest('.w4-sidebar-expanend, .w4-sidebar-expanded');
            if (!toggleBtn) return;

            const targetId = toggleBtn.getAttribute('data-w4-target');
            const sidebar = targetId
                ? root.getElementById(targetId) || document.getElementById(targetId)
                : root.querySelector('.w4-sidebar');

            if (!sidebar) return;
            this.toggleCollapsedExpanded(sidebar);
        });
    }

    static toggleCollapsedExpanded(element) {
        const currentState = element.getAttribute('data-w4-state') || '';
        const isCollapsed = currentState.includes('collapsed') || element.classList.contains('w4-sidebar-collapsed');

        if (isCollapsed) {
            element.setAttribute('data-w4-state', 'expanded');
            this.handleExpanded({ element });
            return;
        }

        element.setAttribute('data-w4-state', 'collapsed');
        this.handleCollapsed({ element });
    }

    static applyState({ element, state }) {
        switch (state) {
            case 'disabled':
                this.handleDisabled({ element });
                break;
            case 'active':
                this.handleActive({ element });
                break;
            case 'hidden':
                this.handleHidden({ element });
                break;
            case 'collapsed':
                this.handleCollapsed({ element });
                break;
            case 'expanded':
                this.handleExpanded({ element });
                break;
            default:
                this.handleEnabled({ element });
                break;
        }
    }

    static handleEnabled({ element }) {
        element.setAttribute('data-w4-state', 'enabled');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.classList.remove('w4-sidebar-disabled');
        element.classList.remove('w4-sidebar-active');
        element.classList.remove('w4-sidebar-hidden');
        element.classList.remove('w4-sidebar-collapsed');
        element.style.pointerEvents = '';
        element.style.opacity = '';
        element.style.display = '';
    }

    static handleDisabled({ element }) {
        element.setAttribute('data-w4-state', 'disabled');
        element.setAttribute('aria-disabled', 'true');
        element.removeAttribute('aria-hidden');
        element.classList.add('w4-sidebar-disabled');
        element.classList.remove('w4-sidebar-active');
        element.classList.remove('w4-sidebar-hidden');
        element.classList.remove('w4-sidebar-collapsed');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
        element.style.display = '';
    }

    static handleActive({ element }) {
        element.setAttribute('data-w4-state', 'active');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.classList.add('w4-sidebar-active');
        element.classList.remove('w4-sidebar-disabled');
        element.classList.remove('w4-sidebar-hidden');
        element.classList.remove('w4-sidebar-collapsed');
        element.style.pointerEvents = '';
        element.style.opacity = '';
        element.style.display = '';
    }

    static handleHidden({ element }) {
        element.setAttribute('data-w4-state', 'hidden');
        element.removeAttribute('aria-disabled');
        element.setAttribute('aria-hidden', 'true');
        element.classList.add('w4-sidebar-hidden');
        element.classList.remove('w4-sidebar-active');
        element.classList.remove('w4-sidebar-disabled');
        element.classList.remove('w4-sidebar-collapsed');
        element.style.display = 'none';
    }

    static handleCollapsed({ element }) {
        if (element.getAttribute('data-w4-state') !== 'collapsed') return;
        element.setAttribute('data-w4-state', 'collapsed');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.classList.add('w4-sidebar-collapsed');
        element.classList.remove('w4-sidebar-expanded');
        element.classList.remove('w4-sidebar-active');
        element.classList.remove('w4-sidebar-disabled');
        element.classList.remove('w4-sidebar-hidden');
        element.style.pointerEvents = '';
        element.style.opacity = '';
        element.style.display = '';
    }

    static handleExpanded({ element }) {
        if (element.getAttribute('data-w4-state') !== 'expanded') return;
        element.setAttribute('data-w4-state', 'expanded');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.classList.add('w4-sidebar-expanded');
        element.classList.remove('w4-sidebar-collapsed');
        element.classList.remove('w4-sidebar-hidden');
        element.style.pointerEvents = '';
        element.style.opacity = '';
        element.style.display = '';
    }
}
