(function (window, document) {
  var api = {
    setTheme: function (theme) {
      if (!theme) {
        return;
      }

      var root = document.documentElement;
      root.setAttribute("data-theme", theme);
    },
  };

  window.W4NativeUI = window.W4NativeUI || api;
})(window, document);
