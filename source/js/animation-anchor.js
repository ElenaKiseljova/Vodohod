'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    window.animationAnchor = function (animationSpeed, draftY = null, exceptElementIds = [], draftYForExcerpt = null) {
      let startAnimation = function (elementToScroll, draft) {
        let start = Date.now(); // запомнить время начала

        // Текущее положение скролла
        let yCoord;

        // Смещение верхней точки элемента от края документа
        let topScroll = elementToScroll.getBoundingClientRect().top;

        // Текущее положение скролла
        let documentScrollHeight = window.scrollY;

        // Финальная точка. Для сравнения с текущей и контроля таймера
        let finalPositionScroll;

        // Флаг для определения прямого/обратного хода
        let topScrollFlag = false;

        // Если задано смещение (прямой ход)
        if (draft !== null) {
          topScroll = topScroll - draft;
        }

        // Финальная точка (прямой ход)
        finalPositionScroll = documentScrollHeight + topScroll;

        // Если нужен обратный ход
        if (topScroll < 0) {
          topScrollFlag = true;

          topScroll = Math.abs(topScroll);

          // Финальная точка (обратный ход)
          finalPositionScroll = documentScrollHeight - topScroll;
        }

        // Вычисляем время анимации
        let animationTime = topScroll / animationSpeed;

        let draw = function (timePassed) {
          if (topScrollFlag === true) {
            //Обратный ход
            yCoord = documentScrollHeight - ( ( timePassed / animationTime) * topScroll );

            if (yCoord < finalPositionScroll) {
              yCoord = finalPositionScroll;
            }
          } else {
            //Прямой ход
            yCoord = documentScrollHeight + ( ( timePassed / animationTime) * topScroll );

            if (yCoord > finalPositionScroll) {
              yCoord = finalPositionScroll;
            }
          }

          window.scroll(0, yCoord);
        };

        let timer = setInterval(function() {
          // сколько времени прошло с начала анимации?
          let timePassed = Date.now() - start;

          // Прямой ход
          if ((topScrollFlag === false) && (yCoord >= finalPositionScroll)) {
            // закончить анимацию после достижения нужной точки экрана
            clearInterval(timer);

            return;
          }

          // Обратный ход
          if ((topScrollFlag === true) && (yCoord <= finalPositionScroll)) {
            // закончить анимацию после достижения нужной точки экрана
            clearInterval(timer);

            return;
          }

          // отрисовать анимацию на момент timePassed, прошедший с начала анимации
          draw(timePassed);
        }, 10);
      };

      let allElementAnchors = document.querySelectorAll('a[href*="#"]');

      allElementAnchors.forEach((itemAnchor, i) => {
        let hrefElementAnchor = itemAnchor.href;

        let hrefElementAnchorArr = hrefElementAnchor.split('#');
        let elementScrollId = hrefElementAnchorArr[hrefElementAnchorArr.length - 1];

        if (elementScrollId.length > 0) {
          let elementToScroll = document.querySelector(`#${elementScrollId}`);

          if (elementToScroll) {
            itemAnchor.addEventListener('click', (evt) => {
              evt.preventDefault();

              if (elementScrollId !== 'panorama') {
                if (exceptElementIds.indexOf(elementScrollId) === -1) {
                  startAnimation(elementToScroll, draftY);
                } else {
                  startAnimation(elementToScroll, draftYForExcerpt);
                }
              } else if (window.innerWidth < 1280 && elementScrollId === 'panorama') {
                if (exceptElementIds.indexOf(elementScrollId) === -1) {
                  startAnimation(elementToScroll, draftY);
                } else {
                  startAnimation(elementToScroll, draftYForExcerpt);
                }
              }
            });
          }
        }
      });
    };

    let heightHeader = document.querySelector('.page-header--bottom').offsetHeight;

    if (window.innerWidth < 768) {
      window.animationAnchor(7, heightHeader);
    }

    if ((window.innerWidth < 1920) && window.innerWidth >= 768) {
      window.animationAnchor(7, null, ['totem', 'route', 'panorama'], heightHeader);
    }

    if (window.innerWidth >= 1920) {
      window.animationAnchor(7, -100, ['totem', 'route', 'panorama'], heightHeader);
    }
  } catch (e) {
    console.log(e);
  }
});
