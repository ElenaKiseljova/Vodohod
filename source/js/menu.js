'use strict';

(function () {
  try {
    let ROOT_ELEMENT = document.documentElement;

    let menuButtons = document.querySelectorAll('button[class*="button--menu"]');
    let menuSection = document.querySelector('.menu');
    let logoHeader = document.querySelector('.logo--header');
    let orderButtonWhiteText = document.querySelector('.button__text--white');

    if (menuButtons && menuSection && ROOT_ELEMENT && logoHeader && orderButtonWhiteText) {
      window.addEventListener('load', function () {
        menuSection.classList.add('loaded');

        console.log(menuSection.offsetHeight, window.innerHeight);
        if (menuSection.offsetHeight > window.innerHeight) {
          menuSection.classList.add('scroll');
        }
      });

      menuButtons.forEach((menuButton, i) => {
        menuButton.addEventListener('click', function () {
          menuButton.classList.toggle('active');
          ROOT_ELEMENT.classList.toggle('active');
          menuSection.classList.toggle('active');
          logoHeader.classList.toggle('active');
          orderButtonWhiteText.classList.toggle('active');

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
      });
    }
  } catch (e) {
    console.log(e);
  }
})();
