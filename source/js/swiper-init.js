'use strict';

document.addEventListener('DOMContentLoaded', function () {
  try {
    // Виды экспедиций
    let routsNameSlider = document.querySelector('.route__slider--routs.swiper-container');

    if (routsNameSlider) {
      var argsSwiperroutsNameSlider = {
        speed: 800,
        spaceBetween: 30,
        //loop: true,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        slidesPerView: 'auto',
        slideToClickedSlide: true,
        //init: false,
        //mousewheel: true,
        resizeObserver: true,

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
    }

    let routsDescriptionSlider = document.querySelector('.route__slider--description.swiper-container');

    if (routsDescriptionSlider) {
      var argsSwiperRoutsDescriptionSlider = {
        speed: 800,
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        navigation: {
          nextEl: '.next--nodes',
          prevEl: '.prev--nodes'
        },
        //init: false,
        resizeObserver: true,
      };

      // Города (табы)

      if (window.innerWidth >= 768) {
        var routsNodesSlider = document.querySelector('.route__slider--nodes.swiper-container');

        if (routsNodesSlider) {
          var argsSwiperRoutsNodesSlider = {
            speed: 800,
            spaceBetween: 60,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            slidesPerView: 'auto',
            //init: false,
            resizeObserver: true,

            // Responsive breakpoints
            breakpoints: {
              // when window width is >= 1280px
              1280: {
                spaceBetween: 30,
              },

              // when window width is >= 1920px
              1920: {
                spaceBetween: 50,
              },
            }
          };
        }
      }
    }

    // Объект экспорта в файл routs.js
    var routsNameSwiper, routsNodesSwiper, routsDescriptionSwiper;

    window.swiperChange = {
      routNamesInit: function () {
        if (routsNameSlider && argsSwiperroutsNameSlider) {
          routsNameSwiper = new Swiper(routsNameSlider, argsSwiperroutsNameSlider);

          routsNameSwiper.on('slideChange', function () {
            let index = routsNameSwiper.activeIndex;



            window.routs.createSliderDescriptionElement(index);
            window.routs.createSliderNodesElement(index);
            // Инициализация слайдеров из файла swiper-init.js
            window.swiperChange.routDescriptionUpdate();
            //window.swiperChange.routDescriptionInit();
          });
        }
      },
      routDescriptionInit: function () {
        if (routsDescriptionSlider && argsSwiperRoutsDescriptionSlider) {
          if ((window.innerWidth >= 768) && routsNodesSlider && argsSwiperRoutsNodesSlider && argsSwiperRoutsDescriptionSlider) {
            routsNodesSwiper = new Swiper(routsNodesSlider, argsSwiperRoutsNodesSlider);

            argsSwiperRoutsDescriptionSlider.thumbs = {
              swiper: routsNodesSwiper,
            };
          }

          routsDescriptionSwiper = new Swiper(routsDescriptionSlider, argsSwiperRoutsDescriptionSlider);

          let mapToggles = document.querySelectorAll('.route__toggle.active');

          if (mapToggles) {
            mapToggles.forEach((mapToggle, i) => {
              let index = mapToggle.getAttribute('data-map');

              if (index && routsDescriptionSwiper) {
                mapToggle.addEventListener('click', function () {
                  routsDescriptionSwiper.slideTo(index);
                });
              }
            });
          }
        }
      },
      routDescriptionUpdate: function () {
        if (routsDescriptionSwiper) {
          routsDescriptionSwiper.updateSlides();

          if ((window.innerWidth >= 768) && routsNodesSwiper) {
            routsNodesSwiper.updateSlides();
          }
        }
      }
    };
  } catch (e) {
    console.log(e);
  }
});
