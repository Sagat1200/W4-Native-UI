import W4Core from '../../../core.js';

export default class W4Tab {
    /**
     * Initialize Tab component logic
     */
    static init(root = document) {
        this.bindEvents(root);
        
        // Register state handlers for the Tab component via W4Core
        this.registerStateHandlers();
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('tab:enabled', this.handleEnabled);
        W4Core.on('tab:disabled', this.handleDisabled);
        W4Core.on('tab:active', this.handleActive);
        W4Core.on('tab:hidden', this.handleHidden);
        W4Core.on('tab:selected', this.handleSelected);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('disabled');
        element.removeAttribute('aria-disabled');
        element.style.pointerEvents = '';
        element.style.opacity = '';
    }

    static handleDisabled({ element }) {
        element.setAttribute('disabled', 'true');
        element.setAttribute('aria-disabled', 'true');
        element.style.pointerEvents = 'none';
        element.style.opacity = '0.5';
    }

    static handleActive({ element }) {
        // En tabs suele coincidir con selected o ser visual
        element.classList.add('w4-tab-active');
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
        if (element) {
            element.style.display = 'none';
        }
    }

    static handleSelected({ element }) {
        // Forzamos el click de JS para que se propague el cambio de panel y la lógica de tabs
        if (!element.hasAttribute('disabled')) {
            element.click();
        }
    }

    static bindEvents(root) {
        // Handle tab switching
        root.addEventListener('click', (e) => {
            const tab = e.target.closest('.w4-tab');
            if (tab && !tab.hasAttribute('disabled')) {
                const tabGroup = tab.closest('.w4-tabs');
                if (tabGroup) {
                    // Remove active from all siblings
                    tabGroup.querySelectorAll('.w4-tab').forEach(t => t.classList.remove('w4-tab-active'));
                    // Add active to clicked tab
                    tab.classList.add('w4-tab-active');

                    // If tabs are linked to panels via data-w4-target
                    const targetId = tab.getAttribute('data-w4-target');
                    if (targetId) {
                        const targetPanel = document.getElementById(targetId);
                        if (targetPanel) {
                            // Find all sibling panels and hide them
                            const panelGroup = targetPanel.parentElement;
                            if (panelGroup) {
                                Array.from(panelGroup.children).forEach(sibling => {
                                    if (sibling.hasAttribute('data-w4-tab-panel')) {
                                        sibling.style.display = 'none';
                                    }
                                });
                            }
                            // Show target panel
                            targetPanel.style.display = '';
                        }
                    }
                }
            }
        });
    }
}
