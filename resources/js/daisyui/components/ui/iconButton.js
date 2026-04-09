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