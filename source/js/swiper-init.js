'use strict';

document.addEventListener('DOMContentLoaded', function () {
  // Функция прогресса Swiper (кастомная)
  var swiperProgress = function (slider, elementProgress) {
    let newWidthElementProgress = slider.progress * 100;

    if (newWidthElementProgress < 0) {
      newWidthElementProgress = 0;
    }

    if (newWidthElementProgress > 100) {
      newWidthElementProgress = 100;
    }

    elementProgress.style.width = newWidthElementProgress + '%';
  };

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
        //watchSlidesVisibility: true,
        //watchSlidesProgress: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        slideToClickedSlide: true,
        //init: false,
        //mousewheel: true,
        resizeObserver: true,
        navigation: {
          nextEl: '.next--route',
          prevEl: '.prev--route'
        },

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
        //loop: true,
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        //init: false,
        resizeObserver: true,
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 1280px
          1280: {
            allowTouchMove: false,
          },
        }
      };
    }

    // Города (табы)
    var routsNodesSlider = document.querySelector('.route__slider--nodes.swiper-container');
    if (routsNodesSlider) {
      var argsSwiperRoutsNodesSlider = {
        speed: 300,
        //loop: true,
        spaceBetween: 60,
        freeMode: true,
        centeredSlides: true,
        navigation: {
          nextEl: '.next--nodes',
          prevEl: '.prev--nodes'
        },
        //watchSlidesVisibility: true,
        //watchSlidesProgress: true,
        slidesPerView: 'auto',
        slideToClickedSlide: true,
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

    var checkMapToggle = function (mapToggle, mapToggles = false) {
      if (mapToggles) {
        // Функция стирания всех маркеров подсветки
        window.removeActiveClassElements(mapToggles, false, 'checked');
      }

      // Класс для подсветки кликнутого нода
      mapToggle.classList.add('checked');
    };

    // Функция для активации пунктов карты
    var activatingMapNodes = function (sliderSwiper, currentSlide = false) {
      let mapContainer = document.querySelector('.route__map');
      let mapToggles = mapContainer.querySelectorAll('.route__toggle');

      let newMapToggles = '';
      mapToggles.forEach((mapToggle, i) => {
        if (!mapToggle.classList.contains('active')) {
          mapToggle.dataset.map = null;
        }
        newMapToggles += mapToggle.outerHTML;
        mapToggle.remove();
      });
      mapContainer.insertAdjacentHTML('beforeend', newMapToggles);

      // Пункты на карте (активные)
      mapToggles = mapContainer.querySelectorAll('.route__toggle');
      let mapTogglesActive = [].filter.call(mapToggles, (mapToggle => mapToggle.classList.contains('active')));

      mapTogglesActive.forEach((mapToggle, i) => {
        let index = mapToggle.getAttribute('data-map');

        if (index && routsDescriptionSwiper) {
          if (currentSlide && currentSlide === index) {
            checkMapToggle(mapToggle, mapToggles);
          }
          mapToggle.addEventListener('click', function (evt) {
            // console.log('click');

            checkMapToggle(mapToggle, mapTogglesActive);

            // Проверяем в цикле ли слайдер
            if (sliderSwiper.loop === undefined) {
              sliderSwiper.slideTo(index);
            } else {
              sliderSwiper.slideToLoop(index);
            }
          });
        }
      });
    };

    // Объект экспорта в файлы routs.js
    var routsNameSwiper, routsNodesSwiper, routsDescriptionSwiper;

    window.swiperChange = {
      routNamesInit: function () {
        if (routsNameSlider && argsSwiperroutsNameSlider) {
          routsNameSwiper = new Swiper(routsNameSlider, argsSwiperroutsNameSlider);

          routsNameSwiper.on('slideChange', function () {
            let index;

            if (routsNameSwiper.loop === undefined) {
              index = routsNameSwiper.activeIndex;
            } else {
              index = routsNameSwiper.realIndex;
            }

            // Отключение кнопки на последнем клике
            if (routsNameSwiper.slides.length === (index + 1)) {
              routsNameSwiper.navigation.nextEl.classList.add('swiper-button-disabled');
            } else if (routsNameSwiper.navigation.nextEl.classList.contains('swiper-button-disabled')) {
              routsNameSwiper.navigation.nextEl.classList.remove('swiper-button-disabled');
            }

            window.routs.createSliderDescriptionElement(index);
            window.routs.createSliderNodesElement(index);

            // Разрушени слайдеров Узлов и Описаний
            window.swiperChange.routDescriptionNodesDestroy();

            // Инициализация слайдеров Узлов и Описаний
            window.swiperChange.routDescriptionNodesInit();
          });
        }
      },
      routDescriptionNodesInit: function () {
        if (routsDescriptionSlider && routsNodesSlider && argsSwiperRoutsDescriptionSlider && argsSwiperRoutsNodesSlider) {
          // Слайдер Узлов
          routsNodesSwiper = new Swiper(routsNodesSlider, argsSwiperRoutsNodesSlider);

          // Слайдер Описаний
          routsDescriptionSwiper = new Swiper(routsDescriptionSlider, argsSwiperRoutsDescriptionSlider);

          routsNodesSwiper.controller.control = routsDescriptionSwiper;
          routsDescriptionSwiper.controller.control = routsNodesSwiper;

          routsNodesSwiper.on('slideChange', function () {
            let index;

            if (routsNodesSwiper.loop === undefined) {
              index = routsNodesSwiper.activeIndex;
            } else {
              index = routsNodesSwiper.realIndex;
            }

            // Пункты на карте (активные)
            let mapTogglesActive = document.querySelectorAll('.route__toggle.active');
            // Пункт на карте
            let mapToggle = document.querySelector(`[data-map="${index}"]`);
            if (mapToggle && mapTogglesActive) {
              checkMapToggle(mapToggle, mapTogglesActive);
            }
          });

          // Активация пунктов карты и пунктов Узлового слайдера
          activatingMapNodes(routsNodesSwiper, '0');
        }
      },
      routDescriptionNodesDestroy: function () {
        if (routsDescriptionSwiper && routsNodesSwiper) {
          routsDescriptionSwiper.destroy();
          routsNodesSwiper.destroy();
        }
      }
    };
  } catch (e) {
    console.log(e);
  }

  // Галерея из 3D
  /*
  try {
    let sceneContainer = document.querySelector('.scene__slider.swiper-container');

    if (sceneContainer) {
      var argsSwiperScene = {
        speed: 300,
        // freeMode: true,
        // watchSlidesVisibility: true,
        // watchSlidesProgress: true,
        slidesPerView: 1,
        spaceBetween: 10,
        resizeObserver: true,
      };

      let sceneSwiper = new Swiper(sceneContainer, argsSwiperScene);

      let sceneProgress = document.querySelector('.progress--scene span');

      sceneSwiper.on('progress', function () {
        if (sceneProgress) {
          swiperProgress(sceneSwiper, sceneProgress);
        }
      });
    }
  } catch (e) {
    console.log(e);
  }
  */
  // Типы кают

  try {
    let roomsContainers = document.querySelectorAll('.rooms__slider.swiper-container');

    if (roomsContainers) {
      roomsContainers.forEach((roomsContainer, i) => {
        let argsSwiperRooms = {
          speed: 300,
          effect: 'fade',
          fadeEffect: {
            crossFade: true
          },
          slidesPerView: 1,
          resizeObserver: true,
          pagination: {
            el: `.fraction--rooms-${i + 1}`,
            type: 'custom',
            renderCustom: function (swiper, current, total) {
              function numberAppend(d) {
                return (d < 10) ? '00' + d.toString() : '0' + d.toString();
              }
              return '<span class="fraction__current fraction__current--rooms">' + numberAppend(current) + '</span>' +
                     '<span class="fraction__all fraction__all--rooms">' + numberAppend(total) + '</span>';
            }
          },
          navigation: {
            nextEl: `.next--rooms-${i + 1}`,
            prevEl: `.prev--rooms-${i + 1}`
          },
        };

        let roomsSwiper = new Swiper(roomsContainer, argsSwiperRooms);

        let roomsProgress = document.querySelector(`.progress--rooms-${i + 1} span`);

        roomsSwiper.on('progress', function () {
          if (roomsProgress) {
            swiperProgress(roomsSwiper, roomsProgress);
          }
        });
      });
    }
  } catch (e) {
    console.log(e);
  }

  // Впечатления

  try {
    let emotionsContainer = document.querySelector('.emotions__slider.swiper-container');

    if (emotionsContainer) {
      var argsSwiperEmotions = {
        slidesPerView: 1,
        allowTouchMove: false,
        resizeObserver: true,
        effect: 'fade',
      };

      let emotionsSwiper = new Swiper(emotionsContainer, argsSwiperEmotions);

      window.swiperChange.emotionsSlideTo = function (index) {
        emotionsSwiper.slideTo(index);
      };

      window.addEventListener('orientationchange', function () {
        emotionsSwiper.destroy();

        emotionsSwiper = new Swiper(emotionsContainer, argsSwiperEmotions);
      });
    }
  } catch (e) {
    console.log(e);
  }

  // Вкус

  try {
    let flavourContainer = document.querySelector('.flavour__slider.swiper-container');

    if (flavourContainer) {
      var argsSwiperflavour = {
        speed: 300,
        loop: true,
        //freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        slidesPerView: 1,
        spaceBetween: 20,
        resizeObserver: true,
        navigation: {
          nextEl: '.next--flavour',
          prevEl: '.prev--flavour'
        },
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 600px
          600: {
            slidesPerView: 2,
            slidesPerGroup: 2,
          },
        }
      };

      var flavourSwiper = new Swiper(flavourContainer, argsSwiperflavour);
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
        slidesPerView: 'auto',
        slideToClickedSlide: true,
        //loop: true,
        centeredSlides: true,
        spaceBetween: 48,
        resizeObserver: true,
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 768px
          768: {
            spaceBetween: 126,
          },
          // when window width is >= 1280px
          1280: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
        }
      };

      let timetableMonthsSwiper = new Swiper(timetableMonthsContainer, argsSwiperTimetableMonths);

      var argsSwiperTimetable = {
        speed: 300,
        slidesPerView: 1,
        //slideToClickedSlide: true,
        //loop: true,
        autoHeight: true,
        resizeObserver: true,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        // thumbs: {
        //   swiper: timetableMonthsSwiper,
        // }
      };

      let timetableTimetableSwiper = new Swiper(timetableTimetableContainer, argsSwiperTimetable);

      timetableMonthsSwiper.on('slideChange', function () {
        timetableTimetableSwiper.slideTo(timetableMonthsSwiper.activeIndex);
        // console.log(timetableMonthsSwiper.activeIndex);
      });

      timetableTimetableSwiper.on('slideChange', function () {
        timetableMonthsSwiper.slideTo(timetableTimetableSwiper.activeIndex);
        // console.log(timetableTimetableSwiper.activeIndex);
      });

      // Переключаю на следующий слайд при загрузке страницы
      // timetableMonthsSwiper.slideNext();
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
          //console.log('next');

          caveSwiperImages.slideNext();
        });

        caveSwiperText.on('slidePrevTransitionStart', function () {
          //console.log('prev');
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
        //loop: true,
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
            spaceBetween: 80
          },

          // when window width is >= 1280px
          1280: {
            slidesPerView: 2,
            spaceBetween: 90,
            allowTouchMove: false,
          },
        }
      };

      let leisureSwiper = new Swiper(leisureContainer, argsSwiperLeisure);
    }
  } catch (e) {
    console.log(e);
  }
});
