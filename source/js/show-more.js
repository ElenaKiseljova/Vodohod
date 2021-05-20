'use strict';

(function () {
  // Функция экспорта в routs.js
  window.showMore = function (countChars, classText, classButton) {
    let texts = document.querySelectorAll(classText);
    let buttons = document.querySelectorAll(classButton);

    if (texts && buttons) {
      texts.forEach(function (textItem, index) {
        let textLong = textItem.textContent;

        if (textLong.length > countChars) {
          let textShort = textLong.substring(0, countChars);

          textItem.textContent = textShort + '...';

          buttons[index].classList.add('active');

          buttons[index].addEventListener('click', function () {
            textItem.textContent = textLong;

            buttons[index].classList.remove('active');
          });
        }
      });
    }
  }
})();
