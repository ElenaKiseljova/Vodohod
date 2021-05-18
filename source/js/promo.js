'use strict';

(function () {
  let changePromoHeight = function () {
    var orientation = window.orientation;
    let browserHeight = window.innerHeight;

    let promo = document.querySelector('.promo');
    let promoWrapper = promo.querySelector('.promo__wrapper');
    let promoText = promo.querySelector('.text--promo');

    if ((orientation === 0) || (orientation === 90 && browserHeight >= 768)) {
      if (promo && promoWrapper && promoText) {
        // Обнуляем стили
        promo.style = '';

        let heightPromo = promo.innerHeight;

        // Обнуляем стили внешних отступов для текста
        promoText.style.marginBottom = '0px';

        // Задаем новую высоту секции Промо
        promo.style.height = browserHeight + 'px';

        if (orientation === 90 && browserHeight >= 768) {
          // Заменяем внутренние отступы стилей CSS (чтобы красивее контент в экран влез)
          promo.style.paddingTop = '14.26%';
          promo.style.paddingBottom = '14.65%';
        }

        // Растягиваем враппер Промо на всю его высоту
        promoWrapper.style.height = '100%';
      }
    } else {
      if (promo && promoWrapper && promoText) {
        // Обнуляем стили
        promoText.style = '';

        // Применяем стили из CSS
        promo.style.height = 'auto';
        promo.style.minHeight = '100vh';
      }
    }
  };

  document.addEventListener('DOMContentLoaded', function () {
    changePromoHeight();
  });

  window.addEventListener('resize', function () {
    changePromoHeight();
  });
})();
