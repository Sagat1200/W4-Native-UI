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