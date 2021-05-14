'use strict';

(function () {
  var showMore = function (countChars, classText, classButton) {
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

  // Кнопка "Читать больше" видна только в мобильной версии
  if (window.innerWidth < 768) {
    showMore(133, '.text--description', '.route__more');
  }
})();
