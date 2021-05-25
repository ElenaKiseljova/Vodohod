'use strict';

document.addEventListener('DOMContentLoaded', function () {
  // Маршруты
  try {
    // Виды экспедиций
    let routsNameSlider = document.querySelector('.route__slider--routs.swiper-container');

    if (routsNameSlider) {
      var argsSwiperroutsNameSlider = {
        speed: 300,
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
        speed: 300,
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

      var routsNodesSlider = document.querySelector('.route__slider--nodes.swiper-container');

      if (routsNodesSlider) {
        var argsSwiperRoutsNodesSlider = {
          speed: 300,
          spaceBetween: 60,
          freeMode: true,
          watchSlidesVisibility: true,
          watchSlidesProgress: true,
          slidesPerView: 'auto',
          //init: false,
          navigation: {
            nextEl: '.next--nodes',
            prevEl: '.prev--nodes'
          },
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

    // Функция для активации пунктов карты
    var activatingMapNodes = function (sliderSwiper, sliderThumbSwiper = null) {
      let mapToggles = document.querySelectorAll('.route__toggle.active');

      if (mapToggles) {
        mapToggles.forEach((mapToggle, i) => {
          let index = mapToggle.getAttribute('data-map');

          if (index && routsDescriptionSwiper) {
            mapToggle.addEventListener('click', function () {
              sliderSwiper.slideTo(index);

              if (sliderThumbSwiper != null) {
                sliderThumbSwiper.slideTo(index);
              }
            });
          }
        });
      }
    };

    // Объект экспорта в файлы routs.js
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
          if (routsNodesSlider && argsSwiperRoutsNodesSlider && argsSwiperRoutsDescriptionSlider) {
            routsNodesSwiper = new Swiper(routsNodesSlider, argsSwiperRoutsNodesSlider);

            argsSwiperRoutsDescriptionSlider.thumbs = {
              swiper: routsNodesSwiper,
            };
          }

          routsDescriptionSwiper = new Swiper(routsDescriptionSlider, argsSwiperRoutsDescriptionSlider);

          if (routsNodesSwiper) {
            // Активация пунктов карты
            activatingMapNodes(routsDescriptionSwiper, routsNodesSwiper);
          } else {
            // Активация пунктов карты
            activatingMapNodes(routsDescriptionSwiper);
          }
        }
      },
      routDescriptionUpdate: function () {
        if (routsDescriptionSwiper && routsNodesSwiper) {
          routsDescriptionSwiper.updateSlides();
          routsNodesSwiper.updateSlides();

          // Активация пунктов карты
          activatingMapNodes(routsDescriptionSwiper, routsNodesSwiper);
        }
      }
    };
  } catch (e) {
    console.log(e);
  }

  // Галерея из 3D

  try {
    let sceneContainer = document.querySelector('.scene__slider.swiper-container');

    if (sceneContainer) {
      var argsSwiperScene = {
        speed: 300,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        slidesPerView: 1,
        spaceBetween: 10,
        resizeObserver: true,
      };

      let sceneSwiper = new Swiper(sceneContainer, argsSwiperScene);

      let swiperProgress = function (slider, elementProgress) {
        let newWidthElementProgress = slider.progress * 100;

        if (newWidthElementProgress < 0) {
          newWidthElementProgress = 0;
        }

        if (newWidthElementProgress > 100) {
          newWidthElementProgress = 100;
        }

        elementProgress.style.width = newWidthElementProgress + '%';
      };

      let sceneProgress = document.querySelector('.scene__progress span');

      sceneSwiper.on('progress', function () {
        if (sceneProgress) {
          swiperProgress(sceneSwiper, sceneProgress);
        }
      });
    }
  } catch (e) {
    console.log(e);
  }

  // Расписание

  try {
    let emotionsContainer = document.querySelector('.emotions__slider.swiper-container');

    if (emotionsContainer) {
      var argsSwiperEmotions = {
        speed: 0,
        slidesPerView: 1,
        allowTouchMove: false,
        effect: 'fade',
        resizeObserver: true,
      };

      let emotionsSwiper = new Swiper(emotionsContainer, argsSwiperEmotions);
    }
  } catch (e) {
    console.log(e);
  }

  // Отдых

  try {
    let restContainer = document.querySelector('.rest__slider.swiper-container');

    if (restContainer) {
      var argsSwiperRest = {
        speed: 300,
        loop: true,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        slidesPerView: 1,
        spaceBetween: 10,
        resizeObserver: true,
        navigation: {
          nextEl: '.next--rest',
          prevEl: '.prev--rest'
        },
        pagination: {
          el: '.fraction--rest',
          type: 'custom',
          renderCustom: function (swiper, current, total) {
            function numberAppend(d) {
              return (d < 10) ? '00' + d.toString() : '0' + d.toString();
            }
            return '<span class="fraction__current fraction__current--rest">' + numberAppend(current) + '</span>' +
                   '<span class="fraction__all fraction__all--rest">' + numberAppend(total) + '</span>';
          }
        },
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 768px
          768: {
            spaceBetween: 20,
          },
        }
      };

      let restSwiper = null;

      // Объект экспорта в файлы rest.js
      window.swiperChange.restSliderInit = function () {
        if (restSwiper === null) {
          restSwiper = new Swiper(restContainer, argsSwiperRest);
        }
      };

      window.swiperChange.restSliderDestroy = function () {
        if (restSwiper !== null) {
          restSwiper.destroy();

          restSwiper = null;
        }
      };
    }
  } catch (e) {
    console.log(e);
  }

  // Расписание

  try {
    let timetableMonthsContainer = document.querySelector('.timetable__slider--months.swiper-container');
    let timetableTimetableContainer = document.querySelector('.timetable__slider--timetable.swiper-container');

    if (timetableMonthsContainer && timetableTimetableContainer) {
      var argsSwiperTimetableMonths = {
        speed: 300,
        slidesPerView: 1,
        slideToClickedSlide: true,
        spaceBetween: 30,
        resizeObserver: true,
      };

      let timetableMonthsSwiper = new Swiper(timetableMonthsContainer, argsSwiperTimetableMonths);

      var argsSwiperTimetable = {
        speed: 300,
        slidesPerView: 1,
        slideToClickedSlide: true,
        resizeObserver: true,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        thumbs: {
          swiper: timetableMonthsSwiper,
        }
      };

      let timetableTimetableSwiper = new Swiper(timetableTimetableContainer, argsSwiperTimetable);

      timetableMonthsSwiper.on('slideChange', function () {
        timetableTimetableSwiper.slideTo(timetableMonthsSwiper.activeIndex);
      });
    }
  } catch (e) {
    console.log(e);
  }

  // Отзывы
  try {
    let reviewsContainer = document.querySelector('.reviews__slider.swiper-container');

    if (reviewsContainer) {
      var argsSwiperReviews = {
        speed: 300,
        loop: true,
        slidesPerView: 1,
        resizeObserver: true,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        navigation: {
          nextEl: '.next--reviews',
          prevEl: '.prev--reviews'
        },
        pagination: {
          el: '.fraction--reviews',
          type: 'custom',
          renderCustom: function (swiper, current, total) {
            function numberAppend(d) {
              return (d < 10) ? '00' + d.toString() : '0' + d.toString();
            }
            return '<span class="fraction__current fraction__current--reviews">' + numberAppend(current) + '</span>' +
                   '<span class="fraction__all fraction__all--reviews">' + numberAppend(total) + '</span>';
          }
        },
      };

      let reviewsSwiper = new Swiper(reviewsContainer, argsSwiperReviews);
    }
  } catch (e) {
    console.log(e);
  }

  // Слайдер с пещерными рисунками
  try {
    let caveContainerText = document.querySelector('.cave__slider--text.swiper-container');
    let caveContainerImages = document.querySelector('.cave__slider--images.swiper-container');

    if (caveContainerText && caveContainerImages) {
      var argsSwiperCaveText = {
        speed: 800,
        loop: true,
        slidesPerView: 1,
        resizeObserver: true,
        navigation: {
          nextEl: '.next--cave',
          prevEl: '.prev--cave'
        },
        pagination: {
          el: '.fraction--cave',
          type: 'custom',
          renderCustom: function (swiper, current, total) {
            function numberAppend(d) {
              return (d < 10) ? '00' + d.toString() : '0' + d.toString();
            }
            return '<span class="fraction__current fraction__current--cave">' + numberAppend(current) + '</span>' +
                   '<span class="fraction__all fraction__all--cave">' + numberAppend(total) + '</span>';
          }
        },
      };

      let caveSwiperText = new Swiper(caveContainerText, argsSwiperCaveText);

      var argsSwiperCaveImages = {
        speed: 800,
        loop: true,
        slidesPerView: 1,
        resizeObserver: true,
      };

      let caveSwiperImages = new Swiper(caveContainerImages, argsSwiperCaveImages);

      if (caveSwiperText && caveSwiperImages) {
        caveSwiperText.on('slideNextTransitionStart', function () {
          console.log('next');

          caveSwiperImages.slideNext();
        });

        caveSwiperText.on('slidePrevTransitionStart', function () {
          console.log('prev');
          caveSwiperImages.slidePrev();
        });
      }
    }
  } catch (e) {
    console.log(e);
  }

  // Досуг
  try {
    let leisureContainer = document.querySelector('.leisure__slider.swiper-container');

    if (leisureContainer) {
      var argsSwiperLeisure = {
        speed: 300,
        loop: true,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        spaceBetween: 20,
        slidesPerView: 1,
        resizeObserver: true,
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 768px
          768: {
            slidesPerView: 1,
            spaceBetween: 80,
          },

          // when window width is >= 1280px
          1280: {
            slidesPerView: 2,
            spaceBetween: 90,
          },
        }
      };

      let leisureSwiper = new Swiper(leisureContainer, argsSwiperLeisure);
    }
  } catch (e) {
    console.log(e);
  }
});
