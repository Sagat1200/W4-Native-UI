(function (window, document) {
  function initTooltip(root) {
    var scope = root || document;
    var tooltips = scope.querySelectorAll('.w4-tooltip');

    for (var i = 0; i < tooltips.length; i++) {
      var tooltip = tooltips[i];
      if (tooltip.getAttribute('data-w4-tooltip-bound') === 'true') {
        continue;
      }

      // If interactivity is needed beyond CSS hover (e.g. click to toggle on mobile)
      tooltip.addEventListener('touchstart', function(e) {
          var t = e.currentTarget;
          var isActive = t.classList.contains('w4-tooltip-active');
          
          // Close others
          var allActive = document.querySelectorAll('.w4-tooltip.w4-tooltip-active');
          for(var j=0; j<allActive.length; j++) {
              allActive[j].classList.remove('w4-tooltip-active');
          }

          if (!isActive) {
              t.classList.add('w4-tooltip-active');
          }
      });
      
      tooltip.setAttribute('data-w4-tooltip-bound', 'true');
    }
  }

  // Close tooltips when clicking outside
  document.addEventListener('click', function(e) {
      if (!e.target.closest('.w4-tooltip')) {
          var activeTooltips = document.querySelectorAll('.w4-tooltip.w4-tooltip-active');
          for(var i=0; i<activeTooltips.length; i++) {
              activeTooltips[i].classList.remove('w4-tooltip-active');
          }
      }
  });

  if (window.NativeUI) {
      var originalInit = window.NativeUI.init;
      window.NativeUI.init = function(root) {
          if(originalInit) originalInit(root);
          initTooltip(root);
      };
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
      initTooltip(document);
    });
  } else {
    initTooltip(document);
  }

})(window, document);