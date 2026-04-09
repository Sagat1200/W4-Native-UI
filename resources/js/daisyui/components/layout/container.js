(function (window, document) {
  function initContainer(root) {
    // Placeholder for container logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
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