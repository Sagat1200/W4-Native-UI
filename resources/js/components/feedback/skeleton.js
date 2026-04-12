/**
 * =========================================
 * SKELETON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

export default class W4Skeleton {
    static init() {
        // Skeletons are primarily visual, but we can provide utility
        // functions here for removing them dynamically once data loads.
    }

    /**
     * Replaces a skeleton loader with the actual content element
     * @param {HTMLElement} skeletonEl - The skeleton element to remove
     * @param {HTMLElement} contentEl - The content element to insert
     */
    static replace(skeletonEl, contentEl) {
        if (!skeletonEl || !skeletonEl.parentNode) return;
        
        // Optional: Add a brief fade-in for the new content
        contentEl.style.opacity = '0';
        contentEl.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        skeletonEl.parentNode.replaceChild(contentEl, skeletonEl);
        
        // Trigger reflow to ensure transition works
        void contentEl.offsetWidth;
        contentEl.style.opacity = '1';
        
        contentEl.dispatchEvent(new CustomEvent('w4.skeleton.replaced', { bubbles: true }));
    }

    /**
     * Hides all skeletons inside a specific container
     * @param {HTMLElement} container 
     */
    static hideAllIn(container = document) {
        const skeletons = container.querySelectorAll('.w4-skeleton');
        skeletons.forEach(s => {
            s.style.opacity = '0';
            setTimeout(() => {
                s.style.display = 'none';
            }, 300);
        });
    }
}
