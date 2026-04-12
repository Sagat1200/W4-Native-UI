(function (window, document) {
  function initText(root) {
    // Placeholder for text logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
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