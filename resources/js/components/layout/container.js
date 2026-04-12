(function (window, document) {
  function initContainer(root) {
    // Placeholder for container logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initContainer(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initContainer(document);
    });
  } else {
    initContainer(document);
  }
})(window, document);