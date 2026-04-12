(function (window, document) {
  function initIcon(root) {
    // Placeholder for icon logic (e.g. dynamic SVG fetching)
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
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