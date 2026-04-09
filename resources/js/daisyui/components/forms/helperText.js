(function (window, document) {
  function initHelperText(root) {
    // Placeholder for helper text logic
  }

  if (window.W4NativeUI) {
      var originalInit = window.W4NativeUI.init;
      window.W4NativeUI.init = function(root) {
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