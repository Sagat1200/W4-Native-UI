(function (window, document) {
  function initSkeleton(root) {
    // Placeholder for future skeleton logic (e.g. removing skeleton state when data loads)
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initSkeleton(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initSkeleton(document);
    });
  } else {
    initSkeleton(document);
  }
})(window, document);