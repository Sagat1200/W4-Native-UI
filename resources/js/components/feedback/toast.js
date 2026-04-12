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
                if (window.NativeUI && window.NativeUI.emit) {
                   window.NativeUI.emit('toast:dismissed', { element: t });
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
                if (window.NativeUI && window.NativeUI.emit) {
                   window.NativeUI.emit('toast:dismissed', { element: t });
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

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initToast(root);
      };
      window.NativeUI.toast = ToastAPI;
  } else {
      window.NativeUI = { toast: ToastAPI };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initToast(document);
    });
  } else {
    initToast(document);
  }

})(window, document);