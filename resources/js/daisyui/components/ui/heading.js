(function (window, document) {
  function initHeading(root) {
    // Placeholder for heading logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
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