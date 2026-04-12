export default class W4Menu {
    /**
     * Initialize Menu component logic
     */
    static init() {
        // Base logic for Menu.
        // Ready for future custom logic (e.g., active state syncing with router, expandable sub-menus).
        this.bindEvents();
    }

    static bindEvents() {
        // Optional: handle active state switching visually for demonstration
        document.addEventListener('click', (e) => {
            const menuItem = e.target.closest('.w4-menu li > a, .w4-menu li > button');
            if (menuItem && !menuItem.closest('.w4-dropdown')) { // Ignore dropdown menus
                const menu = menuItem.closest('.w4-menu');
                if (menu && menu.hasAttribute('data-w4-sync-active')) {
                    menu.querySelectorAll('.active').forEach(el => el.classList.remove('active'));
                    menuItem.classList.add('active');
                }
            }
        });
    }
}
