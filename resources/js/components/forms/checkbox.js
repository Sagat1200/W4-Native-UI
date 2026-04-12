(function (window, document) {
  function initCheckbox(root) {
    // Checkboxes usually don't need JS unless we are doing indeterminate state handling
    var scope = root || document;
    var indeterminateCheckboxes = scope.querySelectorAll('.w4-checkbox-indeterminate');
    for (var i = 0; i < indeterminateCheckboxes.length; i++) {
        indeterminateCheckboxes[i].indeterminate = true;
    }
  }

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initCheckbox(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initCheckbox(document);
    });
  } else {
    initCheckbox(document);
  }
})(window, document);