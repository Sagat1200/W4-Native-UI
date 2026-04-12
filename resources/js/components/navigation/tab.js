export default class W4Tab {
    /**
     * Initialize Tab component logic
     */
    static init() {
        this.bindEvents();
    }

    static bindEvents() {
        // Handle tab switching
        document.addEventListener('click', (e) => {
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
