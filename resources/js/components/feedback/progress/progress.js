/**
 * =========================================
 * PROGRESS COMPONENT SCRIPT
 * Native W4 Visual Engine implementation
 * Feedback System
 * =========================================
 */

import W4Core from '../../../core.js';

export default class W4Progress {
    static init(root = document) {
        window.W4 = window.W4 || {};
        window.W4.Progress = this;

        this.bindStateTriggers(root);
        this.registerStateHandlers();
        this.bootFromDataset(root);
    }

    static resolveElement(targetOrId) {
        if (!targetOrId) return null;
        if (targetOrId instanceof HTMLElement) return targetOrId;
        if (typeof targetOrId === 'string') {
            return document.getElementById(targetOrId) || document.querySelector(targetOrId);
        }
        return null;
    }

    static getStateTokens(element) {
        const state = (element.getAttribute('data-w4-state') || '').trim();
        if (!state) return [];
        return state.split(/\s+/).filter(Boolean);
    }

    static hasState(element, state) {
        return this.getStateTokens(element).includes(state);
    }

    static resetState(element) {
        element.classList.remove(
            'w4-progress-active',
            'w4-progress-disabled',
            'w4-progress-hidden',
            'w4-progress-loading',
            'w4-progress-indeterminate',
            'w4-progress-success',
        );

        element.removeAttribute('data-w4-state');
        element.removeAttribute('data-w4-hook');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
        element.removeAttribute('aria-busy');

        if (!element.hasAttribute('value')) {
            element.setAttribute('value', '0');
        }

        if (!element.classList.contains('w4-progress-primary')) {
            element.classList.add('w4-progress-primary');
        }
    }

    static setState(targetOrId, state = 'enabled') {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.resetState(element);

        const normalized = String(state || 'enabled').toLowerCase();
        if (normalized !== 'enabled') {
            element.classList.add(`w4-progress-${normalized}`);
            element.setAttribute('data-w4-state', normalized);
        }

        if (normalized === 'indeterminate' || normalized === 'loading') {
            element.removeAttribute('value');
        }

        if (normalized === 'enabled' && !element.hasAttribute('value')) {
            element.setAttribute('value', '0');
        }

        if (typeof W4Core?.syncElement === 'function') {
            W4Core.syncElement(element, `progress:${normalized}`);
        }
    }

    static stopLoadingSimulation(targetOrId) {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        if (!this.loadingIntervals) this.loadingIntervals = new Map();
        const interval = this.loadingIntervals.get(element);
        if (interval) {
            clearInterval(interval);
            this.loadingIntervals.delete(element);
        }
    }

    static startLoadingSimulation(targetOrId) {
        const element = this.resolveElement(targetOrId);
        if (!element) return;

        this.stopLoadingSimulation(element);
        this.setState(element, 'loading');

        let value = parseInt(element.getAttribute('value') || '0', 10);
        if (Number.isNaN(value) || value >= 100) value = 0;
        element.setAttribute('value', String(value));

        if (!this.loadingIntervals) this.loadingIntervals = new Map();
        const interval = setInterval(() => {
            // If another state was selected, stop this simulation.
            if (!this.hasState(element, 'loading')) {
                this.stopLoadingSimulation(element);
                return;
            }

            value += Math.floor(Math.random() * 12) + 4;
            if (value >= 100) {
                value = 100;
                element.setAttribute('value', '100');
                this.stopLoadingSimulation(element);
                this.setState(element, 'success');
                return;
            }

            element.setAttribute('value', String(value));
        }, 320);

        this.loadingIntervals.set(element, interval);
    }

    static bootFromDataset(root = document) {
        const elements = root.querySelectorAll('[data-w4-progress-initial-state]');
        elements.forEach((element) => {
            const state = (element.getAttribute('data-w4-progress-initial-state') || 'enabled').toLowerCase();
            const autostart = (element.getAttribute('data-w4-progress-autostart') || 'false').toLowerCase() === 'true';

            if (state === 'loading' && autostart) {
                this.startLoadingSimulation(element);
                return;
            }

            this.setState(element, state);

            if (state === 'enabled' && !element.hasAttribute('value')) {
                element.setAttribute('value', '0');
            }

            if (state === 'success') {
                element.setAttribute('value', '100');
            }
        });
    }

    static bindStateTriggers(root = document) {
        if (this.triggersBound) return;

        root.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-w4-progress-state]');
            if (!trigger) return;

            const state = trigger.getAttribute('data-w4-progress-state') || 'enabled';
            const targetId = trigger.getAttribute('data-w4-target');
            const element = this.resolveElement(targetId);
            if (!element) return;

            if (state === 'loading') {
                this.startLoadingSimulation(element);
                return;
            }

            this.stopLoadingSimulation(element);
            this.setState(element, state);

            if (state === 'enabled') {
                element.setAttribute('value', '0');
            }

            if (state === 'success') {
                element.setAttribute('value', '100');
            }
        });

        this.triggersBound = true;
    }

    /**
     * Listen for hook events emitted by W4Core
     */
    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('progress:enabled', this.handleEnabled);
        W4Core.on('progress:disabled', this.handleDisabled);
        W4Core.on('progress:active', this.handleActive);
        W4Core.on('progress:hidden', this.handleHidden);
        W4Core.on('progress:loading', this.handleLoading);
        W4Core.on('progress:indeterminate', this.handleIndeterminate);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        // Handled via CSS or custom logic if needed
    }

    static handleHidden({ element }) {
        element.setAttribute('aria-hidden', 'true');
    }

    static handleLoading({ element }) {
        element.setAttribute('aria-busy', 'true');
    }

    static handleIndeterminate({ element }) {
        // For standard HTML <progress> elements, indeterminate state is achieved by removing the "value" attribute.
        if (element.tagName === 'PROGRESS') {
            element.removeAttribute('value');
        }
    }
}
