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

(function (window, document) {
  // Skeleton, Progress, and Badge are primarily visual components.
  // We can provide a basic JS structure if they need future interactivity,
  // but for now, they don't require heavy DOM binding like buttons or alerts.
  
  function initBadge(root) {
    // Placeholder for future badge logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initBadge(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initBadge(document);
    });
  } else {
    initBadge(document);
  }
})(window, document);

(function (window, document) {
  function initProgress(root) {
    // Placeholder for future progress logic (e.g. updating progress values dynamically)
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initProgress(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initProgress(document);
    });
  } else {
    initProgress(document);
  }
})(window, document);

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

/**
 * =========================================
 * CHECKBOX COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4Checkbox {
    /**
     * Initializes checkbox specific logic.
     * Mainly handles the indeterminate state which cannot be set via pure HTML/CSS.
     * @param {HTMLElement|Document} root 
     */
    static init(root = document) {
        // Find checkboxes that are explicitly marked to be indeterminate on load
        const indeterminateCheckboxes = root.querySelectorAll('.w4-checkbox-indeterminate, [data-w4-state~="indeterminate"]');
        
        indeterminateCheckboxes.forEach(checkbox => {
            checkbox.indeterminate = true;
        });
    }

    /**
     * Utility method to programmatically set the indeterminate state
     * @param {HTMLInputElement} checkbox 
     * @param {boolean} isIndeterminate 
     */
    static setIndeterminate(checkbox, isIndeterminate = true) {
        if (!checkbox || checkbox.type !== 'checkbox') return;
        
        checkbox.indeterminate = isIndeterminate;
        
        // Dispatch event so core.js can sync ARIA and data-states if needed
        checkbox.dispatchEvent(new Event('change', { bubbles: true }));
    }
}

/**
 * =========================================
 * FIELD ERROR COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4FieldError {
    static init(root = document) {
        // Placeholder for specific field error logic 
        // e.g. integrating with JS validation libraries
    }
}

/**
 * =========================================
 * HELPER TEXT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4HelperText {
    static init(root = document) {
        // Placeholder for specific helper text logic 
    }
}

/**
 * =========================================
 * INPUT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4Input {
    static init(root = document) {
        // Placeholder for specific input logic 
        // e.g. character counting, input masks, custom formatting
    }
}

/**
 * =========================================
 * RADIO COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4Radio {
    static init(root = document) {
        // Placeholder for specific radio logic 
        // e.g. group state management if custom visual feedback is needed
    }
}

/**
 * =========================================
 * SELECT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4Select {
    static init(root = document) {
        // Placeholder for specific select logic 
        // e.g. handling custom dropdown behavior for complex selects
    }
}

/**
 * =========================================
 * TEXTAREA COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4Textarea {
    static init(root = document) {
        // Auto-resize logic
        const textareas = root.querySelectorAll('textarea.w4-textarea[data-w4-auto-resize="true"]');
        
        textareas.forEach(el => {
            if (el.getAttribute('data-w4-textarea-bound') === 'true') return;

            el.addEventListener('input', this.handleResize.bind(this));

            // Trigger once to set initial height based on pre-filled content
            const event = new Event('input', { bubbles: true });
            el.dispatchEvent(event);

            el.setAttribute('data-w4-textarea-bound', 'true');
        });
    }

    /**
     * Dynamically resizes the textarea based on its content scroll height
     * @param {Event} e 
     */
    static handleResize(e) {
        const target = e.target;
        target.style.height = 'auto'; // Reset to auto to get true scrollHeight if content shrunk
        target.style.height = target.scrollHeight + 'px';
    }
}

/**
 * =========================================
 * TOGGLE COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Forms System
 * =========================================
 */

export default class W4Toggle {
    static init(root = document) {
        // Placeholder for specific toggle logic 
    }
}

/**
 * =========================================
 * CARD COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

export default class W4Card {
    static init(root = document) {
        // Placeholder for specific card logic
    }
}

/**
 * =========================================
 * CONTAINER COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

export default class W4Container {
    static init(root = document) {
        // Placeholder for specific container logic
    }
}

/**
 * =========================================
 * DIVIDER COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

export default class W4Divider {
    static init(root = document) {
        // Placeholder for specific divider logic
    }
}

/**
 * =========================================
 * GRID COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

export default class W4Grid {
    static init(root = document) {
        // Placeholder for specific grid logic
    }
}

/**
 * =========================================
 * PANEL COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

export default class W4Panel {
    static init(root = document) {
        // Placeholder for specific panel logic
    }
}

/**
 * =========================================
 * SECTION COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

export default class W4Section {
    static init(root = document) {
        // Placeholder for specific section logic
    }
}

/**
 * =========================================
 * STACK COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Layout System
 * =========================================
 */

export default class W4Stack {
    static init(root = document) {
        // Placeholder for specific stack logic
    }
}

/**
 * =========================================
 * BUTTON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

export default class W4Button {
    static init(root = document) {
        // Visual press feedback is handled by core.js centrally
        // This file serves as a placeholder for any button-specific future logic
        // (e.g. handling complex loading state transitions)
    }
}

/**
 * =========================================
 * HEADING COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

export default class W4Heading {
    static init(root = document) {
        // Placeholder for specific heading logic
    }
}

/**
 * =========================================
 * ICON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

export default class W4Icon {
    static init(root = document) {
        // Placeholder for specific icon logic (e.g. dynamic SVG fetching)
    }
}

/**
 * =========================================
 * ICON BUTTON COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

export default class W4IconButton {
    static init(root = document) {
        // Visual press feedback is handled by core.js centrally
        // This file serves as a placeholder for specific icon-button logic
    }
}

/**
 * =========================================
 * LABEL COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

export default class W4Label {
    static init(root = document) {
        // Placeholder for specific label logic
    }
}

/**
 * =========================================
 * LINK COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

export default class W4Link {
    static init(root = document) {
        // Placeholder for specific link logic
    }
}

/**
 * =========================================
 * TEXT COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * UI System
 * =========================================
 */

export default class W4Text {
    static init(root = document) {
        // Placeholder for specific text logic
    }
}
