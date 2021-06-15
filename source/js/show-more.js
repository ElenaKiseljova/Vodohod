'use strict';

(function () {
  // Функция экспорта в routs.js/emotions.js
  window.showMore = function (countChars, classText, classButton) {
    let texts = document.querySelectorAll(classText);
    let buttons = document.querySelectorAll(classButton);

    if (texts && buttons) {
      texts.forEach(function (textItem, index) {
        let textLong = textItem.textContent;

        if (textLong.length > countChars) {
          let textShort = textLong.substring(0, countChars) + '...';

          textItem.textContent = textShort;

          buttons[index].classList.add('show');

          buttons[index].addEventListener('click', function () {
            if (buttons[index].classList.contains('active')) {
              textItem.textContent = textShort;

              buttons[index].classList.remove('active');
            } else if (!buttons[index].classList.contains('active')) {
              textItem.textContent = textLong;

              buttons[index].classList.add('active');
            }
          });
        } else {
          buttons[index].classList.add('hide');
        }
      });
    }
  }
})();
