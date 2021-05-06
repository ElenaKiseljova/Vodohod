'use strict';

(function () {
  try {
    let menuButton = document.querySelector('.button--menu');

    if (menuButton) {
      menuButton.addEventListener('click', function () {
        menuButton.classList.toggle('active');

        let menuButtonText =  menuButton.querySelector('.button__text');
        let openMenuAnimate = menuButton.querySelector('#openMenuAnimate');
        let closeMenuAnimate = menuButton.querySelector('#closeMenuAnimate');

        if (openMenuAnimate && closeMenuAnimate && menuButtonText) {
          if (menuButton.classList.contains('active')) {
            openMenuAnimate.beginElement();

            menuButtonText.textContent = 'Закрыть меню';
          } else if (!menuButton.classList.contains('active')) {
            closeMenuAnimate.beginElement();

            menuButtonText.textContent = 'Меню';
          }
        }
      });
    }
  } catch (e) {
    console.log(e);
  }
})();
