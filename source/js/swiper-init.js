'use strict';

document.addEventListener('DOMContentLoaded', function () {
  try {
    let routsSlider = document.querySelector('.route__slider--routs.swiper-container');

    if (routsSlider) {
      let argsSwiperRoutsSlider = {
        speed: 800,
        spaceBetween: 30,
        loop: true,
        freeMode: true,
        slidesPerView: 'auto',
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 768px
          768: {
            spaceBetween: 60,
          },

          // when window width is >= 1280px
          1280: {
            spaceBetween: 30,
          },

          // when window width is >= 1920px
          1920: {
            spaceBetween: 36,
          },
        }
      };

      let routsSwiper = new Swiper(routsSlider, argsSwiperRoutsSlider);
    }
  } catch (e) {
    console.log(e);
  }
});
