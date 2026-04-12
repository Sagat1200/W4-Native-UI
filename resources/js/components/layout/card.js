(function (window, document) {
  function initCard(root) {
    // Placeholder for card logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initCard(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initCard(document);
    });
  } else {
    initCard(document);
  }
})(window, document);