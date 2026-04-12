(function (window, document) {
  function initLabel(root) {
    // Placeholder for label logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
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