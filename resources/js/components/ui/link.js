(function (window, document) {
  function initLink(root) {
    // Placeholder for link logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initLink(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initLink(document);
    });
  } else {
    initLink(document);
  }
})(window, document);