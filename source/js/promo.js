'use strict';

(function () {
  let changePromoHeight = function () {
    var orientation = window.orientation;
    let browserHeight = window.innerHeight;

    let promo = document.querySelector('.promo');
    let promoWrapper = promo.querySelector('.promo__wrapper');
    let promoText = promo.querySelector('.text--promo');

    if (promo && promoWrapper && promoText) {
      // Обнуляем стили
      promo.style = '';

      let heightPromo = promo.offsetHeight;

      if (heightPromo > browserHeight) {
        promo.style.minHeight = browserHeight + 'px';
      }
    }
  };

  changePromoHeight();

  window.addEventListener('resize', function () {
    changePromoHeight();
  });
})();
