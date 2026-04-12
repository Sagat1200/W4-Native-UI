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
          if (window.NativeUI && window.NativeUI.emit) {
             window.NativeUI.emit('alert:dismissed', { element: alert });
          }
        }
      });
      
      btn.setAttribute('data-w4-alert-bound', 'true');
    }
  }

  // Bind to NativeUI lifecycle if available
  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
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
