(function (window, document) {
  function initGrid(root) {
    // Placeholder for grid logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initGrid(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initGrid(document);
    });
  } else {
    initGrid(document);
  }
})(window, document);