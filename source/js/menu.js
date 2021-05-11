'use strict';

(function () {
  try {
    let ROOT_ELEMENT = document.documentElement;

    let menuButtons = document.querySelectorAll('button[class*="button--menu"]');
    let menuSection = document.querySelector('.menu');
    let logoHeader = document.querySelector('.logo--header');
    let orderButtonWhiteText = document.querySelector('.button--wheel .button__text--white');

    if (menuButtons && menuSection && ROOT_ELEMENT && logoHeader && orderButtonWhiteText) {
      window.addEventListener('load', function () {
        menuSection.classList.add('loaded');

        //console.log(menuSection.offsetHeight, window.innerHeight);
        if (menuSection.offsetHeight > window.innerHeight) {
          menuSection.classList.add('scroll');
        }
      });

      menuButtons.forEach((menuButton, i) => {
        menuButton.addEventListener('click', function () {
          // Для переключения всех кнопок меню одновременно
          menuButtons.forEach((menuButtonItem, i) => {
            menuButtonItem.classList.toggle('active');

            let menuButtonText =  menuButtonItem.querySelector('.button__text');
            let openMenuAnimate = menuButtonItem.querySelector('animate[id*="openMenuAnimate"]');
            let closeMenuAnimate = menuButtonItem.querySelector('animate[id*="closeMenuAnimate"]');

            if (openMenuAnimate && closeMenuAnimate && menuButtonText) {
              if (menuButtonItem.classList.contains('active')) {
                openMenuAnimate.beginElement();

                menuButtonText.textContent = 'Закрыть меню';

                if (!ROOT_ELEMENT.classList.contains('active')) {
                  ROOT_ELEMENT.classList.add('active');
                }
              } else if (!menuButtonItem.classList.contains('active')) {
                closeMenuAnimate.beginElement();

                menuButtonText.textContent = 'Меню';

                if (ROOT_ELEMENT.classList.contains('active')) {
                  ROOT_ELEMENT.classList.remove('active');
                }
              }
            }
          });

          menuSection.classList.toggle('active');
          logoHeader.classList.toggle('active');
          orderButtonWhiteText.classList.toggle('active');
        });
      });
    }
  } catch (e) {
    console.log(e);
  }
})();
