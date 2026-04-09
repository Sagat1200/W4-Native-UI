(function (window, document) {
  function initIcon(root) {
    // Placeholder for icon logic (e.g. dynamic SVG fetching)
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initIcon(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initIcon(document);
    });
  } else {
    initIcon(document);
  }
})(window, document);