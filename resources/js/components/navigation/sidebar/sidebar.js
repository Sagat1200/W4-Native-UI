export default class W4Sidebar {
    /**
     * Initialize Sidebar component logic
     */
    static init() {
        if (this.initialized) return;
        this.bindEvents();
        this.initialized = true;
    }

    static bindEvents() {
        // Handle toggling the sidebar via data attributes
        document.addEventListener('click', (e) => {
            const toggleBtn = e.target.closest('[data-w4-toggle="sidebar"]');
            if (toggleBtn) {
                const targetId = toggleBtn.getAttribute('data-w4-target');
                const sidebar = targetId 
                    ? document.getElementById(targetId) 
                    : toggleBtn.closest('.w4-sidebar') || document.querySelector('.w4-sidebar');
                
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
