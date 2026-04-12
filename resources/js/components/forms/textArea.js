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

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
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