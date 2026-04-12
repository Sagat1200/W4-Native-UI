(function (window, document) {
  function initHeading(root) {
    // Placeholder for heading logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initHeading(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initHeading(document);
    });
  } else {
    initHeading(document);
  }
})(window, document);