(function (window, document) {
  function initText(root) {
    // Placeholder for text logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
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