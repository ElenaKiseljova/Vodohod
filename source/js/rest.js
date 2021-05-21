'use strict';

(function () {
  try {
    // Wrapper
    let restWrapper = document.querySelector('.rest__wrapper');

    let restHeader = restWrapper.querySelector('.rest__header');
    let restTabList = restWrapper.querySelector('.rest__tabs');
    let restSliderList = restWrapper.querySelector('.rest__list');
    let restContent = restWrapper.querySelector('.rest__content');
    let restContentText = restWrapper.querySelector('.text-small--rest');

    if (restTabList) {
      let restButtons = restTabList.querySelectorAll('.rest__button');

      if (restButtons) {
        restButtons.forEach((restButton, i) => {
          // Текст под/над слайдером
          let restSubButtonText = restButton.nextElementSibling;

          // Шаблон для пунктов слайдера i

          let createRestSlidesTemplate = function (i) {
            let restSlidesTemplate = restWrapper.querySelector(`#rest-slides-${i}`);

            if (restSlidesTemplate && restSliderList) {
              let restSlidesTemplateContent = restSlidesTemplate.content.cloneNode(true);

              restSliderList.innerHTML = '';
              restSliderList.appendChild(restSlidesTemplateContent);
            }
          };

          if (restButton.classList.contains('active') && restContentText) {
            restContentText.textContent = restSubButtonText.textContent;

            createRestSlidesTemplate(i);
          }

          restButton.addEventListener('click', function () {
            // Удаление активного класса
            window.removeActiveClassElements(restButtons, true);

            restButton.parentNode.classList.add('active');
            restButton.classList.add('active');

            restContentText.textContent = restSubButtonText.textContent;

            // Сброс слайдера
            window.swiperChange.restSliderDestroy();

            createRestSlidesTemplate(i);

            // Новая инициализация слайдера
            window.swiperChange.restSliderInit();
          });
        });
      }

      window.tabListChangeHeight(restTabList, 'rest__tabs');
    }

    let replaceContent = function () {
      if (restContent && restHeader) {
        let restHeaderContent = restHeader.querySelector('.rest__content');

        if (window.innerWidth > 1279) {
          if (!restHeaderContent) {
            restHeader.appendChild(restWrapper.removeChild(restContent));
          }
        } else {
          if (restHeaderContent) {
            restWrapper.appendChild(restHeader.removeChild(restContent));
          }
        }
      }
    };

    replaceContent();

    window.addEventListener('resize', function () {
      if (restTabList) {
        window.tabListChangeHeight(restTabList, 'rest__tabs');
      }

      replaceContent();
    });

    window.addEventListener('load', function () {
      // Инициализация слайдеров из файла swiper-init.js
      window.swiperChange.restSliderInit();
    });
  } catch (e) {
    console.log(e);
  }
})();
