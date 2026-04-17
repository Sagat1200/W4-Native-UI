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
        // Handle clicks for active state and submenus
        document.addEventListener('click', (e) => {
            const menuItem = e.target.closest('.w4-menu li > a, .w4-menu li > button, .w4-menu li > span');
            if (menuItem && !menuItem.closest('.w4-dropdown')) { // Ignore dropdown menus
                const parentLi = menuItem.closest('li');
                const menu = menuItem.closest('.w4-menu');
                
                // Toggle submenus if the clicked item is a span or has a sub-menu sibling
                const subMenu = parentLi.querySelector('ul');
                if (subMenu) {
                    e.preventDefault();
                    
                    // Close other submenus at the same level if it's a horizontal menu or if we want accordion style
                    if (menu.classList.contains('w4-menu-horizontal')) {
                         const siblings = parentLi.parentElement.children;
                         Array.from(siblings).forEach(sibling => {
                             if (sibling !== parentLi) {
                                 sibling.classList.remove('w4-menu-open');
                                 sibling.removeAttribute('data-w4-state');
                             }
                         });
                    }

                    parentLi.classList.toggle('w4-menu-open');
                    
                    // Add state attribute for CSS consistency
                    if (parentLi.classList.contains('w4-menu-open')) {
                        parentLi.setAttribute('data-w4-state', 'open');
                    } else {
                        parentLi.removeAttribute('data-w4-state');
                    }
                    return; // Don't trigger active state on parent containers
                }

                // Handle active state
                if (menu && menu.hasAttribute('data-w4-sync-active')) {
                    menu.querySelectorAll('.active').forEach(el => el.classList.remove('active'));
                    menuItem.classList.add('active');
                }
            } else if (!e.target.closest('.w4-menu')) {
                // Clicked outside any menu: close horizontal submenus
                document.querySelectorAll('.w4-menu-horizontal > li.w4-menu-open').forEach(li => {
                    li.classList.remove('w4-menu-open');
                    li.removeAttribute('data-w4-state');
                });
            }
        });
        
        // Handle horizontal submenus on hover as fallback/enhancement
        // Using JS for this makes it more robust than pure CSS :hover which can be twitchy
        document.querySelectorAll('.w4-menu-horizontal > li:has(> ul)').forEach(item => {
            let timeoutId;
            
            item.addEventListener('mouseenter', () => {
                clearTimeout(timeoutId);
                // Close siblings
                Array.from(item.parentElement.children).forEach(sibling => {
                    if (sibling !== item) {
                        sibling.classList.remove('w4-menu-open');
                        sibling.removeAttribute('data-w4-state');
                    }
                });
                item.classList.add('w4-menu-open');
                item.setAttribute('data-w4-state', 'open');
            });
            
            item.addEventListener('mouseleave', () => {
                // Small delay to prevent accidental closing when moving mouse slightly off
                timeoutId = setTimeout(() => {
                    item.classList.remove('w4-menu-open');
                    item.removeAttribute('data-w4-state');
                }, 150);
            });
        });
    }
}
