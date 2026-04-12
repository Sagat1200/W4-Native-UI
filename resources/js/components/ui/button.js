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

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
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