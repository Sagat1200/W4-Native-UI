import W4Core from '../../../core.js';

export default class W4Tab {
    static init(root = document) {
        this.bindEvents(root);
        this.registerStateHandlers();
        this.syncInitialState(root);
    }

    static registerStateHandlers() {
        if (this.handlersRegistered) return;

        W4Core.on('tab:enabled', this.handleEnabled);
        W4Core.on('tab:disabled', this.handleDisabled);
        W4Core.on('tab:active', this.handleActive);
        W4Core.on('tab:hidden', this.handleHidden);
        W4Core.on('tab:selected', this.handleSelected);

        this.handlersRegistered = true;
    }

    static handleEnabled({ element }) {
        if (!element) return;
        element.classList.remove('w4-tab-disabled');
        element.classList.remove('w4-tab-hidden');
        element.removeAttribute('disabled');
        element.removeAttribute('aria-disabled');
        element.removeAttribute('aria-hidden');
    }

    static handleDisabled({ element }) {
        if (!element) return;
        element.classList.add('w4-tab-disabled');
        element.setAttribute('disabled', 'true');
        element.setAttribute('aria-disabled', 'true');
    }

    static handleActive({ element }) {
        this.activateTab(element);
    }

    static handleHidden({ element }) {
        if (!element) return;
        element.classList.add('w4-tab-hidden');
        element.setAttribute('aria-hidden', 'true');

        const tabGroup = element.closest('.w4-tabs');
        if (!tabGroup) return;

        const activeTab = tabGroup.querySelector('.w4-tab.w4-tab-active');
        if (activeTab === element) {
            const fallback = this.getTabs(tabGroup).find((tab) => !this.isTabDisabled(tab) && !this.isTabHidden(tab));
            if (fallback) this.activateTab(fallback);
        }
    }

    static handleSelected({ element }) {
        this.activateTab(element);
    }

    static bindEvents(root) {
        root.addEventListener('click', (e) => {
            const tab = e.target.closest('.w4-tab');
            if (!tab || this.isTabDisabled(tab) || this.isTabHidden(tab)) return;
            this.activateTab(tab, true);
        });

        root.addEventListener('keydown', (e) => {
            const currentTab = e.target.closest('.w4-tab');
            if (!currentTab) return;

            const tabGroup = currentTab.closest('.w4-tabs');
            if (!tabGroup) return;

            const tabs = this.getTabs(tabGroup).filter((tab) => !this.isTabDisabled(tab) && !this.isTabHidden(tab));
            if (!tabs.length) return;

            const currentIndex = tabs.indexOf(currentTab);
            let nextTab = null;

            if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                nextTab = tabs[(currentIndex + 1) % tabs.length];
            } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                nextTab = tabs[(currentIndex - 1 + tabs.length) % tabs.length];
            } else if (e.key === 'Home') {
                nextTab = tabs[0];
            } else if (e.key === 'End') {
                nextTab = tabs[tabs.length - 1];
            } else {
                return;
            }

            e.preventDefault();
            this.activateTab(nextTab, true);
        });
    }

    static syncInitialState(root = document) {
        const groups = root.querySelectorAll('.w4-tabs');

        groups.forEach((group) => {
            group.setAttribute('role', group.getAttribute('role') || 'tablist');

            const tabs = this.getTabs(group);
            tabs.forEach((tab) => {
                tab.setAttribute('role', tab.getAttribute('role') || 'tab');
            });

            const preferredTab = tabs.find((tab) => this.isTabSelected(tab) && !this.isTabDisabled(tab) && !this.isTabHidden(tab));
            const firstAvailableTab = tabs.find((tab) => !this.isTabDisabled(tab) && !this.isTabHidden(tab));
            const tabToActivate = preferredTab || firstAvailableTab;

            if (tabToActivate) {
                this.activateTab(tabToActivate);
            }
        });
    }

    static activateTab(tab, focus = false) {
        if (!tab || this.isTabDisabled(tab) || this.isTabHidden(tab)) return;

        const tabGroup = tab.closest('.w4-tabs');
        if (!tabGroup) return;

        const tabs = this.getTabs(tabGroup);
        tabs.forEach((item) => {
            const isActive = item === tab;

            item.classList.toggle('w4-tab-active', isActive);
            item.classList.toggle('w4-tab-selected', isActive);
            item.setAttribute('aria-selected', isActive ? 'true' : 'false');
            item.setAttribute('tabindex', isActive ? '0' : '-1');
            this.syncTabStateAttribute(item, isActive);
        });

        this.syncPanels(tabGroup, tab);

        if (focus) tab.focus();
    }

    static syncTabStateAttribute(tab, isActive) {
        const rawState = tab.getAttribute('data-w4-state') || '';
        const states = rawState.split(/[\s,]+/).filter(Boolean);
        const nextStates = states.filter((state) => state !== 'active' && state !== 'selected');

        if (isActive) {
            nextStates.push('active', 'selected');
        }

        const uniqueStates = [...new Set(nextStates)];
        if (uniqueStates.length) {
            tab.setAttribute('data-w4-state', uniqueStates.join(' '));
        } else {
            tab.removeAttribute('data-w4-state');
        }
    }

    static syncPanels(tabGroup, activeTab) {
        const targetIds = this.getTabs(tabGroup)
            .map((tab) => tab.getAttribute('data-w4-target'))
            .filter(Boolean);

        targetIds.forEach((targetId) => {
            const panel = document.getElementById(targetId);
            if (!panel) return;

            const isActivePanel = activeTab.getAttribute('data-w4-target') === targetId;
            panel.classList.add('w4-tab-content');
            panel.classList.toggle('w4-tab-content-active', isActivePanel);
            panel.classList.toggle('w4-tab-content-hidden', !isActivePanel);
            panel.setAttribute('aria-hidden', isActivePanel ? 'false' : 'true');
            panel.toggleAttribute('hidden', !isActivePanel);
        });
    }

    static getTabs(tabGroup) {
        return Array.from(tabGroup.querySelectorAll('.w4-tab'));
    }

    static isTabDisabled(tab) {
        return tab.hasAttribute('disabled') || tab.classList.contains('w4-tab-disabled') || (tab.getAttribute('data-w4-state') || '').includes('disabled');
    }

    static isTabHidden(tab) {
        return tab.classList.contains('w4-tab-hidden') || (tab.getAttribute('data-w4-state') || '').includes('hidden');
    }

    static isTabSelected(tab) {
        const state = tab.getAttribute('data-w4-state') || '';
        return (
            tab.classList.contains('w4-tab-active') ||
            tab.classList.contains('w4-tab-selected') ||
            tab.getAttribute('aria-selected') === 'true' ||
            state.includes('active') ||
            state.includes('selected')
        );
    }
}
