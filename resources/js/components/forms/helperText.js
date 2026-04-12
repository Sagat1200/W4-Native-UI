(function (window, document) {
  function initHelperText(root) {
    // Placeholder for helper text logic
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initHelperText(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initHelperText(document);
    });
  } else {
    initHelperText(document);
  }
})(window, document);