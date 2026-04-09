(function (window, document) {
  var COMPONENT_SELECTORS = [
    ".w4-btn",
    ".w4-button",
    ".w4-icon-button",
    ".w4-input",
    ".w4-select",
    ".w4-textarea",
    ".w4-checkbox",
    ".w4-radio",
    ".w4-toggle",
    ".w4-tooltip",
    "[data-w4-component]",
    "[data-w4-state]",
    "[data-w4-hook]",
  ].join(", ");

  var COMPONENT_CLASS_MAP = {
    "w4-btn": "button",
    "w4-button": "button",
    "w4-icon-button": "icon-button",
    "w4-input": "input",
    "w4-select": "select",
    "w4-textarea": "textarea",
    "w4-checkbox": "checkbox",
    "w4-radio": "radio",
    "w4-toggle": "toggle",
    "w4-tooltip": "tooltip",
  };

  var COMPONENT_STATES = {
    button: ["disabled", "loading", "active", "readonly"],
    "icon-button": ["disabled", "loading", "readonly", "active"],
    input: ["disabled", "loading", "readonly", "invalid", "valid"],
    select: ["disabled", "loading", "readonly", "invalid", "valid"],
    textarea: ["disabled", "loading", "readonly", "invalid", "valid"],
    checkbox: ["disabled", "readonly", "invalid", "valid", "loading", "checked", "indeterminate"],
    radio: ["disabled", "readonly", "invalid", "valid", "loading", "selected"],
    toggle: ["disabled", "readonly", "invalid", "valid", "loading", "checked"],
    tooltip: ["hidden", "active"],
  };
  var listeners = {};

  function splitValues(value) {
    if (!value || typeof value !== "string") {
      return [];
    }

    return value
      .split(/[\s,]+/)
      .map(function (item) {
        return item.trim();
      })
      .filter(function (item) {
        return item.length > 0;
      });
  }

  function unique(values) {
    var seen = {};
    var result = [];

    for (var i = 0; i < values.length; i += 1) {
      var value = values[i];
      if (!seen[value]) {
        seen[value] = true;
        result.push(value);
      }
    }

    return result;
  }

  function ensureListeners(eventName) {
    if (!listeners[eventName]) {
      listeners[eventName] = [];
    }

    return listeners[eventName];
  }

  function notify(eventName, payload) {
    var handlers = listeners[eventName];
    if (!handlers || handlers.length === 0) {
      return;
    }

    var snapshot = handlers.slice();
    for (var i = 0; i < snapshot.length; i += 1) {
      snapshot[i](payload);
    }
  }

  function hasBlockingState(element) {
    var states = splitValues(element.getAttribute("data-w4-state"));

    if (states.indexOf("disabled") !== -1 || states.indexOf("loading") !== -1 || states.indexOf("readonly") !== -1) {
      return true;
    }

    if (element.hasAttribute("disabled") || element.getAttribute("aria-disabled") === "true") {
      return true;
    }

    return false;
  }

  function pressClass(component) {
    if (component === "button") {
      return "w4-button-pressing";
    }

    if (component === "icon-button") {
      return "w4-icon-button-pressing";
    }

    return "";
  }

  function applyPressFeedback(element) {
    var component = resolveComponent(element);
    if (component !== "button" && component !== "icon-button") {
      return;
    }

    if (hasBlockingState(element)) {
      return;
    }

    var className = pressClass(component);
    if (!className) {
      return;
    }

    element.classList.add(className);
  }

  function clearPressFeedback(element) {
    element.classList.remove("w4-button-pressing");
    element.classList.remove("w4-icon-button-pressing");
  }

  function inferComponent(element) {
    for (var className in COMPONENT_CLASS_MAP) {
      if (Object.prototype.hasOwnProperty.call(COMPONENT_CLASS_MAP, className) && element.classList.contains(className)) {
        return COMPONENT_CLASS_MAP[className];
      }
    }

    return "";
  }

  function resolveComponent(element) {
    var fromData = element.getAttribute("data-w4-component");
    if (fromData) {
      return fromData.trim().toLowerCase();
    }

    return inferComponent(element);
  }

  function resolveStates(element, component) {
    var states = splitValues(element.getAttribute("data-w4-state"));
    var knownStates = COMPONENT_STATES[component] || [];

    for (var i = 0; i < knownStates.length; i += 1) {
      var state = knownStates[i];
      var className = "w4-" + component + "-" + state;
      if (element.classList.contains(className)) {
        states.push(state);
      }
    }

    if (element.hasAttribute("disabled") || element.getAttribute("aria-disabled") === "true") {
      states.push("disabled");
    }

    if (element.hasAttribute("readonly") || element.getAttribute("aria-readonly") === "true") {
      states.push("readonly");
    }

    if (element.getAttribute("aria-invalid") === "true") {
      states.push("invalid");
    }

    if (element.getAttribute("aria-busy") === "true") {
      states.push("loading");
    }

    if (element.type === "checkbox" && element.checked) {
      states.push("checked");
    }

    if (element.type === "checkbox" && element.indeterminate) {
      states.push("indeterminate");
    }

    if (element.type === "radio" && element.checked) {
      states.push("selected");
    }

    return unique(states);
  }

  function resolveHooks(element, component, states) {
    var hooks = splitValues(element.getAttribute("data-w4-hook"));

    for (var i = 0; i < states.length; i += 1) {
      hooks.push(component + ":" + states[i]);
    }

    return unique(hooks);
  }

  function applyAria(element, component, states) {
    var hasState = function (state) {
      return states.indexOf(state) !== -1;
    };

    if (hasState("disabled")) {
      element.setAttribute("aria-disabled", "true");
      if ("disabled" in element) {
        element.disabled = true;
      }
    } else if (element.hasAttribute("aria-disabled")) {
      element.setAttribute("aria-disabled", "false");
      if ("disabled" in element) {
        element.disabled = false;
      }
    }

    if (hasState("readonly")) {
      element.setAttribute("aria-readonly", "true");
      if ("readOnly" in element) {
        element.readOnly = true;
      }
    } else if (element.hasAttribute("aria-readonly")) {
      element.setAttribute("aria-readonly", "false");
      if ("readOnly" in element) {
        element.readOnly = false;
      }
    }

    if (hasState("invalid")) {
      element.setAttribute("aria-invalid", "true");
    } else if (hasState("valid")) {
      element.setAttribute("aria-invalid", "false");
    } else if (element.hasAttribute("aria-invalid")) {
      element.removeAttribute("aria-invalid");
    }

    if (hasState("loading")) {
      element.setAttribute("aria-busy", "true");
    } else if (element.hasAttribute("aria-busy")) {
      element.setAttribute("aria-busy", "false");
    }

    if (hasState("hidden")) {
      element.setAttribute("aria-hidden", "true");
    } else if (element.hasAttribute("aria-hidden")) {
      element.setAttribute("aria-hidden", "false");
    }

    if (component === "button" || component === "icon-button" || component === "toggle") {
      if (hasState("active") || hasState("checked")) {
        element.setAttribute("aria-pressed", "true");
      } else if (element.hasAttribute("aria-pressed")) {
        element.setAttribute("aria-pressed", "false");
      }
    }
  }

  function emitHook(element, component, hook, states) {
    var detail = {
      component: component,
      hook: hook,
      states: states.slice(),
      element: element,
    };

    element.dispatchEvent(
      new CustomEvent("w4:hook", {
        bubbles: true,
        detail: detail,
      })
    );

    element.dispatchEvent(
      new CustomEvent(hook, {
        bubbles: true,
        detail: detail,
      })
    );

    notify("w4:hook", detail);
    notify(hook, detail);
  }

  function syncElement(element) {
    var component = resolveComponent(element);
    if (!component) {
      return;
    }

    var states = resolveStates(element, component);
    var hooks = resolveHooks(element, component, states);

    element.setAttribute("data-w4-component", component);
    if (states.length > 0) {
      element.setAttribute("data-w4-state", states.join(" "));
    }
    if (hooks.length > 0) {
      element.setAttribute("data-w4-hook", hooks.join(" "));
    }

    applyAria(element, component, states);

    for (var i = 0; i < hooks.length; i += 1) {
      emitHook(element, component, hooks[i], states);
    }
  }

  function bindReactiveEvents(element) {
    if (element.getAttribute("data-w4-js-bound") === "true") {
      return;
    }

    var sync = function () {
      syncElement(element);
    };

    element.addEventListener("change", sync);
    element.addEventListener("input", sync);
    element.addEventListener("focus", sync);
    element.addEventListener("blur", sync);
    element.addEventListener("click", sync);
    element.addEventListener("mousedown", function () {
      applyPressFeedback(element);
    });
    element.addEventListener("mouseup", function () {
      clearPressFeedback(element);
    });
    element.addEventListener("mouseleave", function () {
      clearPressFeedback(element);
    });
    element.addEventListener("touchstart", function () {
      applyPressFeedback(element);
    });
    element.addEventListener("touchend", function () {
      clearPressFeedback(element);
    });
    element.addEventListener("touchcancel", function () {
      clearPressFeedback(element);
    });
    element.addEventListener("blur", function () {
      clearPressFeedback(element);
    });
    element.setAttribute("data-w4-js-bound", "true");
  }

  function init(root) {
    var scope = root || document;
    var elements = scope.querySelectorAll(COMPONENT_SELECTORS);

    for (var i = 0; i < elements.length; i += 1) {
      bindReactiveEvents(elements[i]);
      syncElement(elements[i]);
    }
  }

  var observer = new MutationObserver(function (mutations) {
    for (var i = 0; i < mutations.length; i += 1) {
      var mutation = mutations[i];
      for (var j = 0; j < mutation.addedNodes.length; j += 1) {
        var node = mutation.addedNodes[j];
        if (node.nodeType !== 1) {
          continue;
        }

        if (node.matches && node.matches(COMPONENT_SELECTORS)) {
          bindReactiveEvents(node);
          syncElement(node);
        }

        if (node.querySelectorAll) {
          init(node);
        }
      }
    }
  });

  var api = {
    setTheme: function (theme) {
      if (!theme) {
        return;
      }

      document.documentElement.setAttribute("data-theme", theme);
    },
    init: init,
    sync: syncElement,
    on: function (eventName, handler) {
      if (!eventName || typeof handler !== "function") {
        return function () {};
      }

      var handlers = ensureListeners(eventName);
      handlers.push(handler);

      return function () {
        api.off(eventName, handler);
      };
    },
    once: function (eventName, handler) {
      if (!eventName || typeof handler !== "function") {
        return function () {};
      }

      var off = api.on(eventName, function (payload) {
        off();
        handler(payload);
      });

      return off;
    },
    off: function (eventName, handler) {
      var handlers = listeners[eventName];
      if (!handlers || handlers.length === 0) {
        return;
      }

      if (typeof handler !== "function") {
        listeners[eventName] = [];
        return;
      }

      listeners[eventName] = handlers.filter(function (item) {
        return item !== handler;
      });
    },
    emit: function (eventName, detail) {
      if (!eventName) {
        return;
      }

      var payload = detail || {};
      notify(eventName, payload);
      document.dispatchEvent(
        new CustomEvent(eventName, {
          bubbles: true,
          detail: payload,
        })
      );
    },
  };

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      init(document);
      observer.observe(document.body, { childList: true, subtree: true });
    });
  } else {
    init(document);
    observer.observe(document.body, { childList: true, subtree: true });
  }

  window.W4NativeUI = Object.assign({}, window.W4NativeUI || {}, api);
})(window, document);

(function (window, document) {
  function initAlerts(root) {
    var scope = root || document;
    var closeButtons = scope.querySelectorAll('.w4-alert [data-dismiss="alert"]');

    for (var i = 0; i < closeButtons.length; i++) {
      var btn = closeButtons[i];
      if (btn.getAttribute('data-w4-alert-bound') === 'true') {
        continue;
      }

      btn.addEventListener('click', function(e) {
        var alert = e.target.closest('.w4-alert');
        if (alert) {
          alert.style.display = 'none';
          if (window.W4NativeUI && window.W4NativeUI.emit) {
             window.W4NativeUI.emit('alert:dismissed', { element: alert });
          }
        }
      });
      
      btn.setAttribute('data-w4-alert-bound', 'true');
    }
  }

  // Bind to W4NativeUI lifecycle if available
  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initAlerts(root);
      };
  }

  // Also try to bind on DOMContentLoaded in case it's loaded independently
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initAlerts(document);
    });
  } else {
    initAlerts(document);
  }

  // Mutation observer logic could be added here similar to w4-native.js
  // if dynamic alerts are frequently added, but we rely on W4NativeUI.init() for now.

})(window, document);

(function (window, document) {
  // Skeleton, Progress, and Badge are primarily visual components.
  // We can provide a basic JS structure if they need future interactivity,
  // but for now, they don't require heavy DOM binding like buttons or alerts.
  
  function initBadge(root) {
    // Placeholder for future badge logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
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

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
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

(function (window, document) {
  function initSkeleton(root) {
    // Placeholder for future skeleton logic (e.g. removing skeleton state when data loads)
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initSkeleton(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initSkeleton(document);
    });
  } else {
    initSkeleton(document);
  }
})(window, document);

(function (window, document) {
  function initToast(root) {
    var scope = root || document;
    var toasts = scope.querySelectorAll('.w4-toast');

    for (var i = 0; i < toasts.length; i++) {
      var toast = toasts[i];
      if (toast.getAttribute('data-w4-toast-bound') === 'true') {
        continue;
      }

      // Check if auto-dismiss is requested
      var duration = toast.getAttribute('data-duration');
      if (duration) {
        var ms = parseInt(duration, 10);
        if (!isNaN(ms) && ms > 0) {
          setTimeout(function(t) {
            return function() {
              t.style.opacity = '0';
              setTimeout(function() {
                t.style.display = 'none';
                if (window.W4NativeUI && window.W4NativeUI.emit) {
                   window.W4NativeUI.emit('toast:dismissed', { element: t });
                }
              }, 300); // Wait for fade out
            }
          }(toast), ms);
        }
      }

      // Allow click to dismiss if configured
      if (toast.getAttribute('data-dismissible') === 'true') {
          toast.style.cursor = 'pointer';
          toast.addEventListener('click', function(e) {
              var t = e.currentTarget;
              t.style.opacity = '0';
              setTimeout(function() {
                t.style.display = 'none';
                if (window.W4NativeUI && window.W4NativeUI.emit) {
                   window.W4NativeUI.emit('toast:dismissed', { element: t });
                }
              }, 300);
          });
      }
      
      toast.setAttribute('data-w4-toast-bound', 'true');
    }
  }

  // API to create toasts dynamically
  var ToastAPI = {
      show: function(message, options) {
          options = options || {};
          var type = options.type || 'info';
          var duration = options.duration || 3000;
          
          // Determine container or create one
          var container = document.querySelector('.w4-toast-container');
          if (!container) {
              container = document.createElement('div');
              container.className = 'w4-toast-container';
              // Basic styling for container - usually placed bottom-right
              container.style.position = 'fixed';
              container.style.bottom = '1rem';
              container.style.right = '1rem';
              container.style.display = 'flex';
              container.style.flexDirection = 'column';
              container.style.gap = '0.5rem';
              container.style.zIndex = '9999';
              document.body.appendChild(container);
          }

          var toast = document.createElement('div');
          toast.className = 'w4-toast w4-toast-' + type;
          toast.innerHTML = message;
          toast.setAttribute('data-duration', duration.toString());
          toast.style.transition = 'opacity 0.3s ease';

          container.appendChild(toast);
          initToast(container);
          
          return toast;
      }
  };

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initToast(root);
      };
      window.W4NativeUI.toast = ToastAPI;
  } else {
      window.W4NativeUI = { toast: ToastAPI };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initToast(document);
    });
  } else {
    initToast(document);
  }

})(window, document);

(function (window, document) {
  function initTooltip(root) {
    var scope = root || document;
    var tooltips = scope.querySelectorAll('.w4-tooltip');

    for (var i = 0; i < tooltips.length; i++) {
      var tooltip = tooltips[i];
      if (tooltip.getAttribute('data-w4-tooltip-bound') === 'true') {
        continue;
      }

      // If interactivity is needed beyond CSS hover (e.g. click to toggle on mobile)
      tooltip.addEventListener('touchstart', function(e) {
          var t = e.currentTarget;
          var isActive = t.classList.contains('w4-tooltip-active');
          
          // Close others
          var allActive = document.querySelectorAll('.w4-tooltip.w4-tooltip-active');
          for(var j=0; j<allActive.length; j++) {
              allActive[j].classList.remove('w4-tooltip-active');
          }

          if (!isActive) {
              t.classList.add('w4-tooltip-active');
          }
      });
      
      tooltip.setAttribute('data-w4-tooltip-bound', 'true');
    }
  }

  // Close tooltips when clicking outside
  document.addEventListener('click', function(e) {
      if (!e.target.closest('.w4-tooltip')) {
          var activeTooltips = document.querySelectorAll('.w4-tooltip.w4-tooltip-active');
          for(var i=0; i<activeTooltips.length; i++) {
              activeTooltips[i].classList.remove('w4-tooltip-active');
          }
      }
  });

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initTooltip(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initTooltip(document);
    });
  } else {
    initTooltip(document);
  }

})(window, document);

(function (window, document) {
  function initCheckbox(root) {
    // Checkboxes usually don't need JS unless we are doing indeterminate state handling
    var scope = root || document;
    var indeterminateCheckboxes = scope.querySelectorAll('.w4-checkbox-indeterminate');
    for (var i = 0; i < indeterminateCheckboxes.length; i++) {
        indeterminateCheckboxes[i].indeterminate = true;
    }
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initCheckbox(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initCheckbox(document);
    });
  } else {
    initCheckbox(document);
  }
})(window, document);

(function (window, document) {
  function initFieldError(root) {
    // Placeholder for field error logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initFieldError(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initFieldError(document);
    });
  } else {
    initFieldError(document);
  }
})(window, document);

(function (window, document) {
  function initHelperText(root) {
    // Placeholder for helper text logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initHelperText(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initHelperText(document);
    });
  } else {
    initHelperText(document);
  }
})(window, document);

(function (window, document) {
  function initInput(root) {
    // Placeholder for input logic (e.g. character counting, input masks)
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initInput(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initInput(document);
    });
  } else {
    initInput(document);
  }
})(window, document);

(function (window, document) {
  function initRadio(root) {
    // Placeholder for radio logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initRadio(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initRadio(document);
    });
  } else {
    initRadio(document);
  }
})(window, document);

(function (window, document) {
  function initSelect(root) {
    // Placeholder for select logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initSelect(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initSelect(document);
    });
  } else {
    initSelect(document);
  }
})(window, document);

(function (window, document) {
  function initTextArea(root) {
    // Auto-resize logic could go here
    var scope = root || document;
    var textareas = scope.querySelectorAll('textarea.w4-textarea[data-auto-resize="true"]');
    
    for (var i = 0; i < textareas.length; i++) {
        var el = textareas[i];
        if (el.getAttribute('data-w4-textarea-bound') === 'true') continue;

        el.addEventListener('input', function(e) {
            var target = e.target;
            target.style.height = 'auto';
            target.style.height = target.scrollHeight + 'px';
        });

        // Trigger once to set initial height
        var event = new Event('input', { bubbles: true });
        el.dispatchEvent(event);

        el.setAttribute('data-w4-textarea-bound', 'true');
    }
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initTextArea(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initTextArea(document);
    });
  } else {
    initTextArea(document);
  }
})(window, document);

(function (window, document) {
  function initToggle(root) {
    // Placeholder for toggle logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initToggle(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initToggle(document);
    });
  } else {
    initToggle(document);
  }
})(window, document);

(function (window, document) {
  function initCard(root) {
    // Placeholder for card logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initCard(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initCard(document);
    });
  } else {
    initCard(document);
  }
})(window, document);

(function (window, document) {
  function initContainer(root) {
    // Placeholder for container logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initContainer(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initContainer(document);
    });
  } else {
    initContainer(document);
  }
})(window, document);

(function (window, document) {
  function initDivider(root) {
    // Placeholder for divider logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initDivider(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initDivider(document);
    });
  } else {
    initDivider(document);
  }
})(window, document);

(function (window, document) {
  function initGrid(root) {
    // Placeholder for grid logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initGrid(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initGrid(document);
    });
  } else {
    initGrid(document);
  }
})(window, document);

(function (window, document) {
  function initPanel(root) {
    // Placeholder for panel logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initPanel(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initPanel(document);
    });
  } else {
    initPanel(document);
  }
})(window, document);

(function (window, document) {
  function initSection(root) {
    // Placeholder for section logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initSection(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initSection(document);
    });
  } else {
    initSection(document);
  }
})(window, document);

(function (window, document) {
  function initStack(root) {
    // Placeholder for stack logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initStack(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initStack(document);
    });
  } else {
    initStack(document);
  }
})(window, document);

(function (window, document) {
  function initButton(root) {
    var scope = root || document;
    var buttons = scope.querySelectorAll('.w4-btn, .w4-button');

    for (var i = 0; i < buttons.length; i++) {
        var btn = buttons[i];
        if (btn.getAttribute('data-w4-button-bound') === 'true') continue;

        // Visual feedback for clicking (active/pressing state)
        btn.addEventListener('mousedown', function(e) {
            if (!e.currentTarget.disabled && !e.currentTarget.classList.contains('w4-button-disabled')) {
                e.currentTarget.classList.add('w4-button-pressing');
            }
        });

        btn.addEventListener('mouseup', function(e) {
            e.currentTarget.classList.remove('w4-button-pressing');
        });

        btn.addEventListener('mouseleave', function(e) {
            e.currentTarget.classList.remove('w4-button-pressing');
        });

        btn.setAttribute('data-w4-button-bound', 'true');
    }
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initButton(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initButton(document);
    });
  } else {
    initButton(document);
  }
})(window, document);

(function (window, document) {
  function initHeading(root) {
    // Placeholder for heading logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initHeading(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initHeading(document);
    });
  } else {
    initHeading(document);
  }
})(window, document);

(function (window, document) {
  function initIcon(root) {
    // Placeholder for icon logic (e.g. dynamic SVG fetching)
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initIcon(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initIcon(document);
    });
  } else {
    initIcon(document);
  }
})(window, document);

(function (window, document) {
  function initIconButton(root) {
    var scope = root || document;
    var buttons = scope.querySelectorAll('.w4-icon-button');

    for (var i = 0; i < buttons.length; i++) {
        var btn = buttons[i];
        if (btn.getAttribute('data-w4-icon-button-bound') === 'true') continue;

        // Visual feedback for clicking (active/pressing state)
        btn.addEventListener('mousedown', function(e) {
            if (!e.currentTarget.disabled && !e.currentTarget.classList.contains('w4-icon-button-disabled')) {
                e.currentTarget.classList.add('w4-icon-button-pressing');
            }
        });

        btn.addEventListener('mouseup', function(e) {
            e.currentTarget.classList.remove('w4-icon-button-pressing');
        });

        btn.addEventListener('mouseleave', function(e) {
            e.currentTarget.classList.remove('w4-icon-button-pressing');
        });

        btn.setAttribute('data-w4-icon-button-bound', 'true');
    }
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initIconButton(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initIconButton(document);
    });
  } else {
    initIconButton(document);
  }
})(window, document);

(function (window, document) {
  function initLabel(root) {
    // Placeholder for label logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initLabel(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initLabel(document);
    });
  } else {
    initLabel(document);
  }
})(window, document);

(function (window, document) {
  function initLink(root) {
    // Placeholder for link logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initLink(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initLink(document);
    });
  } else {
    initLink(document);
  }
})(window, document);

(function (window, document) {
  function initText(root) {
    // Placeholder for text logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initText(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initText(document);
    });
  } else {
    initText(document);
  }
})(window, document);
