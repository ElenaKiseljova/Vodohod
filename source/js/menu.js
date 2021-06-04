'use strict';

(function () {
  try {
    let ROOT_ELEMENT = document.documentElement;

    let menuButtons = document.querySelectorAll('button[class*="button--menu"]');
    let menuSection = document.querySelector('.menu');
    let promoSection = document.querySelector('.promo');
    let menuRunesRight = menuSection.querySelector('.menu__runes-right');
    let menuRunesLeft = menuSection.querySelector('.menu__runes-left');
    let logoHeader = document.querySelector('.logo--header');
    let orderButtonWhiteText = document.querySelector('.button--wheel .button__text--white');

    promoSection.style.minHeight = window.innerHeight + 'px';

    if (menuButtons && menuSection && ROOT_ELEMENT && logoHeader && orderButtonWhiteText) {
      window.addEventListener('load', function () {
        menuSection.classList.add('loaded');

        menuSection.style.minHeight = window.innerHeight + 'px';

        if (menuSection.offsetHeight > window.innerHeight) {
          // Добавление скролла, если высота меню больше вьюпорта
          menuSection.classList.add('scroll');
        }

        if (promoSection.offsetHeight < window.innerHeight) {
          promoSection.style.height = window.innerHeight;
        }
      });

      var toggleMenuButtons = function () {
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

        if ((window.innerWidth >= 768) && menuRunesRight && menuRunesLeft) {
          menuRunesRight.classList.toggle('rotate-right');
          menuRunesLeft.classList.toggle('rotate-left');
        }

        menuSection.classList.toggle('active');
        logoHeader.classList.toggle('active');
        orderButtonWhiteText.classList.toggle('active');
      };

      menuButtons.forEach((menuButton, i) => {
        menuButton.addEventListener('click', function () {
          // Переключение состояния кнопок меню: открыто/закрыто
          toggleMenuButtons();
        });
      });

      menuSection.addEventListener('click', function (evt) {
        if (evt.target.tagName === 'A') {
          if (evt.target.href.indexOf('#') > -1) {
            // Переключение состояния кнопок меню: открыто/закрыто
            toggleMenuButtons();
          }
        }
      });
    }
  } catch (e) {
    console.log(e);
  }
})();
