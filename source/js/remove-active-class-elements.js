'use strict';

(function () {
  window.removeActiveClassElements = function (elements, removeParentActive = false) {
    elements.forEach((element, i) => {
      if (element.classList.contains('active')) {
        element.classList.remove('active');

        if (removeParentActive) {
          element.parentNode.classList.remove('active');
        }
      }
    });
  };
})();
