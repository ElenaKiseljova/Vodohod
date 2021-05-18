// 'use strict';
//
// (function () {
//   let changePromoHeight = function () {
//     var orientation = window.orientation;
//     let browserHeight = window.innerHeight;
//
//     let promo = document.querySelector('.promo');
//     let promoWrapper = promo.querySelector('.promo__wrapper');
//     let promoText = promo.querySelector('.text--promo');
//
//     if (orientation === 0) {
//       if (promo && promoWrapper && promoText) {
//         // Обнуляем стили
//         promo.style = '';
//
//         let heightPromo = promo.offsetHeight;
//
//         // Обнуляем стили внешних отступов для текста
//         promoText.style.marginBottom = '0px';
//
//         // Задаем новую высоту секции Промо
//         promo.style.height = browserHeight + 'px';
//
//         // Растягиваем враппер Промо на всю его высоту
//         promoWrapper.style.height = '100%';
//       }
//     } else {
//       if (promo && promoWrapper && promoText) {
//         // Обнуляем стили
//         promoText.style = '';
//         promo.style = '';
//       }
//     }
//   };
//
//   document.addEventListener('DOMContentLoaded', function () {
//     changePromoHeight();
//   });
//
//   window.addEventListener('resize', function () {
//     changePromoHeight();
//   });
// })();
