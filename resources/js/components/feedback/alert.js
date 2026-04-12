/**
 * =========================================
 * ALERT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

export default class W4Alert {
    static init() {
        document.addEventListener('click', this.handleClick.bind(this));
    }

    static handleClick(event) {
        const dismissBtn = event.target.closest('[data-w4-dismiss="alert"]');
        if (!dismissBtn) return;

        const alert = dismissBtn.closest('.w4-alert');
        if (alert) {
            event.preventDefault();
            this.dismiss(alert);
        }
    }

    static dismiss(alert) {
        // Opacity transition instead of abrupt display: none
        alert.style.opacity = '0';
        alert.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        const finishDismiss = () => {
            alert.style.display = 'none';
            alert.dispatchEvent(new CustomEvent('w4.alert.dismissed', { bubbles: true }));
            alert.removeEventListener('transitionend', handleTransitionEnd);
        };

        const handleTransitionEnd = (e) => {
            if (e.target === alert) finishDismiss();
        };

        alert.addEventListener('transitionend', handleTransitionEnd);
        
        // Fallback
        setTimeout(() => {
            if (alert.style.opacity === '0') finishDismiss();
        }, 350);
    }
}
