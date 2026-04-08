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
    }

    if (hasState("readonly")) {
      element.setAttribute("aria-readonly", "true");
      if ("readOnly" in element) {
        element.readOnly = true;
      }
    }

    if (hasState("invalid")) {
      element.setAttribute("aria-invalid", "true");
    } else if (hasState("valid")) {
      element.setAttribute("aria-invalid", "false");
    }

    if (hasState("loading")) {
      element.setAttribute("aria-busy", "true");
    }

    if (hasState("hidden")) {
      element.setAttribute("aria-hidden", "true");
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
