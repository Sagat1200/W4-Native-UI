/**
 * =========================================
 * TOAST COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

export default class W4Toast {
    static init() {
        document.addEventListener('click', this.handleClick.bind(this));
        
        // Auto-dismiss initialization for existing toasts in the DOM
        const toasts = document.querySelectorAll('.w4-toast[data-w4-duration]');
        toasts.forEach(toast => {
            if (!toast.hasAttribute('data-w4-toast-bound')) {
                this.setupAutoDismiss(toast);
                toast.setAttribute('data-w4-toast-bound', 'true');
            }
        });
    }

    static handleClick(event) {
        const dismissBtn = event.target.closest('[data-w4-dismiss="toast"]');
        if (!dismissBtn) return;

        const toast = dismissBtn.closest('.w4-toast');
        if (toast) {
            event.preventDefault();
            this.dismiss(toast);
        }
    }

    static setupAutoDismiss(toast) {
        const duration = parseInt(toast.getAttribute('data-w4-duration'), 10);
        if (!isNaN(duration) && duration > 0) {
            setTimeout(() => {
                this.dismiss(toast);
            }, duration);
        }
    }

    static dismiss(toast) {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity var(--w4-transition-normal) ease';
        
        const finishDismiss = () => {
            toast.style.display = 'none';
            toast.dispatchEvent(new CustomEvent('w4.toast.dismissed', { bubbles: true }));
            toast.remove(); // Usually we want to remove toasts from DOM completely
        };

        const handleTransitionEnd = (e) => {
            if (e.target === toast) finishDismiss();
        };

        toast.addEventListener('transitionend', handleTransitionEnd);
        
        setTimeout(() => {
            if (toast.style.opacity === '0') finishDismiss();
        }, 350);
    }

    /**
     * API to create toasts dynamically
     */
    static show(message, options = {}) {
        const type = options.type || 'info';
        const duration = options.duration || 3000;
        
        // Determine container or create one
        let container = document.querySelector('.w4-toast-container');
        if (!container) {
            container = document.createElement('div');
            container.className = 'w4-toast-container';
            // These should ideally be in css, but added here for fallback
            container.style.position = 'fixed';
            container.style.bottom = '1rem';
            container.style.right = '1rem';
            container.style.display = 'flex';
            container.style.flexDirection = 'column';
            container.style.gap = '0.5rem';
            container.style.zIndex = '9999';
            document.body.appendChild(container);
        }

        const toast = document.createElement('div');
        toast.className = `w4-toast w4-toast-${type}`;
        toast.innerHTML = message;
        
        // Add dismiss button if required
        if (options.dismissible) {
            toast.innerHTML += `<button type="button" data-w4-dismiss="toast" aria-label="Close">×</button>`;
        }

        if (duration > 0) {
            toast.setAttribute('data-w4-duration', duration.toString());
            this.setupAutoDismiss(toast);
        }

        container.appendChild(toast);
        return toast;
    }
}
