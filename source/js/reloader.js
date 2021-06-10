'use strict';

(function () {
  window.addEventListener('orientationchange', function () {
    console.log('orientationchange');
    document.location.reload();
  })
})();
