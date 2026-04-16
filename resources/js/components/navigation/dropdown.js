export default class W4Dropdown {
    /**
     * Initialize Dropdown component logic
     */
    static init() {
        if (this.initialized) return;
        this.bindEvents();
        this.initialized = true;
    }

    static bindEvents() {
        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            const isDropdownClick = e.target.closest('.w4-dropdown');
            if (!isDropdownClick) {
                document.querySelectorAll('.w4-dropdown-open').forEach(dropdown => {
                    dropdown.classList.remove('w4-dropdown-open');
                });
            }
        });

        // Toggle dropdown on click if it has a toggle button
        document.addEventListener('click', (e) => {
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
