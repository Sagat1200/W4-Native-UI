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