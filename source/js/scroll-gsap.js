'use strict';

(function () {
  // Регистрация плагинов
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

  var toggleActiveClass = function (element) {
    element.classList.toggle('active');
  };

  // Трансформация Промо-секции

  var promoSection = document.querySelector('.promo');
  var headerBottom = document.querySelector('.page-header--bottom');
  var headerTop = document.querySelector('.page-header--top');
  var totemSection = document.querySelector('.totem');

  if (promoSection && headerBottom && headerTop && totemSection) {
    var promoImage = promoSection.querySelector('.promo__image');
    var promoContent = promoSection.querySelector('.promo__content');
    var promoText = promoSection.querySelector('.text--promo');

    // Триггер изменения Промо-секции
    ScrollTrigger.create({
      trigger: '.promo',
      start: 'bottom bottom',
      end: 'bottom top',
      //markers: true,
      pin: true,
      pinSpacing: false,
      onUpdate: self => {
        promoImage.style.transform = 'scale(' + ((parseFloat(self.progress.toFixed(3))/3) + 1) + ')';
        promoText.style.opacity = 1 - (self.progress.toFixed(3) * 2);
        promoText.style.transform = 'translateY(-' + (self.progress.toFixed(3) * 100) + '%)';
        promoContent.style.transform = 'translateY(-' + (self.progress.toFixed(3) * 100) + '%)';

        //console.log(
        // "progress:", self.progress.toFixed(3),
        // "direction:", self.direction,
        // "velocity", self.getVelocity());
      }
    });

    // Триггер на сокрытие/показ хедера
    ScrollTrigger.create({
      trigger: totemSection,
      start: 'top top',
      end: 9999999,
      //markers: true,
      onToggle: self =>  {
        toggleActiveClass(headerTop);
        toggleActiveClass(headerBottom);
        //console.log("toggled, isActive:", self.isActive)
      }
    });

    // Поворот рунического круга
    var rotateRight = gsap.timeline({
      scrollTrigger: {
        trigger: totemSection,
        scrub: 0.2,
        start: 'top top',
        end: '+=10000',
      }
    })
    .to('#right', {
      rotation: 360,
      duration: 1,
      ease: 'none',
      transformOrigin: 'center'
    });

    var rotateLeft = gsap.timeline({
      scrollTrigger: {
        trigger: totemSection,
        scrub: 0.2,
        start: 'top top',
        end: '+=10000',
      }
    })
    .to('#left', {
      rotation: -360,
      duration: 1,
      ease: 'none',
      transformOrigin: 'center'
    });

    // Смещение текста

    let totemTitle = totemSection.querySelector('.h1--totem');
    let totemQuote = totemSection.querySelector('.quote--totem');
    let totemText = totemSection.querySelector('.text--totem');

    if (totemTitle && totemQuote && totemText) {
      // Анимация для планшета/телефона
      if (window.innerWidth < 1280) {
        gsap.to(totemTitle, {
          y: 20,
          duration: 0.5,
          scrollTrigger: {
            trigger: totemSection,
            start: 'top 50%',
            end: 'top 10%',
            scrub: 0.5,
            //markers: true,
            ease: 'none'
          }
        });

        gsap.to(totemQuote, {
          y: 20,
          opacity: 1,
          duration: 0.5,
          scrollTrigger: {
            trigger: totemTitle,
            start: 'top 60%',
            end: 'top 10%',
            scrub: 0.5,
            ease: 'none'
          }
        });

        gsap.to(totemText, {
          y: 20,
          opacity: 1,
          duration: 0.5,
          scrollTrigger: {
            trigger: '.totem__center',
            start: 'top top',
            end: 'bottom center',
            //markers: true,
            scrub: 1,
            ease: 'none'
          }
        });
      }

      // Анимация для десктопа
      if (window.innerWidth >= 1280) {
        gsap.to(totemTitle, {
          y: 30,
          duration: 2,
          scrollTrigger: {
            trigger: totemSection,
            start: 'top 60%',
            end: 'top 10%',
            scrub: 0.5,
            //markers: true,
            ease: 'none'
          }
        });

        gsap.to(totemQuote, {
          y: -40,
          duration: 2,
          scrollTrigger: {
            trigger: totemSection,
            start: 'top 60%',
            end: 'top 10%',
            scrub: 1,
            ease: 'none'
          }
        });

        gsap.to(totemText, {
          y: -80,
          duration: 3,
          scrollTrigger: {
            trigger: totemSection,
            start: 'top 60%',
            end: 'top 10%',
            scrub: 1,
            ease: 'none'
          }
        });
      }
    }
  }

  // Трансформация секции Впечатлений

  let emotions = document.querySelector('.emotions');

  if (emotions) {
    let emotionsImages = emotions.querySelector('.emotions__images');

    const markers = gsap.utils.toArray(".emotions__item--text");

    window.addEventListener('load', function () {
      markers.forEach(function(marker, index) {
       ScrollTrigger.create({
         trigger: marker,
         start: 'top center',
         end: 'bottom center',
         //markers: true,
         onEnter: function() {
           window.swiperChange.emotionsSlideTo(index);
         },
         onEnterBack: function() {
           window.swiperChange.emotionsSlideTo(index);
         }
       });
      });
    });

    if (window.innerWidth >= 1280) {
      ScrollTrigger.create({
        trigger: '.emotions__left',
        start: 'top top',
        end: 'bottom bottom',
        pin: '.emotions__images',
        pinSpacing: false,
        scrub: 1,
        //markers: true,
      });
    }

    if ((window.innerWidth < 1280) && window.innerWidth > 768) {
      ScrollTrigger.create({
        trigger: '.emotions',
        start: '15% top',
        end: 'bottom 70%',
        //markers: true,
        pin: emotionsImages,
      });
    }

    if (window.innerWidth <= 768) {
      ScrollTrigger.create({
        trigger: '.emotions',
        start: '15% top',
        end: 'bottom 40%',
        //markers: true,
        pin: emotionsImages,
      });
    }
  }

  // Заголовки

  let titles = document.querySelectorAll('.title');

  function initTitleWrapper(element) {
    let newLayoutTemplate = element.innerHTML.split('<br>').map(function(elementItem) {
      return '<span class="title__row">' + elementItem + "</span>"
    }).join(' ');

    element.innerHTML = newLayoutTemplate;
  }

  titles.forEach((title, i) => {
    initTitleWrapper(title);

    const titleSpans = title.querySelectorAll('span');

    const titleLines = gsap.utils.toArray(titleSpans);

    titleLines.forEach((titleLine, i) => {
      gsap.to(titleLine, {
        opacity: 1,
        width: '100%',
        duration: 3,
        scrollTrigger: {
          trigger: titleLine,
          start: 'top bottom',
          end: 'bottom center',
          //markers: true,
          scrub: 1
        }
      });
    });
  });

  // Rest gallery

  let restSliderWrapper = document.querySelector('.rest__slider-wrapper');

  if (restSliderWrapper) {
    gsap.to(restSliderWrapper, {
      x: '0%',
      duration: 3,
      scrollTrigger: {
        trigger: '.emotions',
        start: 'bottom bottom',
        scrub: 1,
      }
    });
  }

  // Video

  gsap.to('.youtube__thumbnail img', {
    scale: 1.02,
    y: '3%',
    scrollTrigger: {
      trigger: '.youtube__thumbnail',
      start: 'top top',
      end: '+=100',
      //markers: true,
      scrub: 1,
    }
  });

  // Leisure

  ScrollTrigger.create({
    trigger: '.leisure',
    start: 'top top',
    end: '80% top',
    //markers: true,
    pin: true,
    pinSpacing: false,
    scrub: 1,
  });

  let leisureSlider = document.querySelector('.leisure__slider');

  if (leisureSlider) {
    gsap.to(leisureSlider, {
      x: '0%',
      duration: 3,
      scrollTrigger: {
        trigger: '.leisure',
        start: 'top bottom',
        scrub: 1,
      }
    });
  }

  // Decks

  let decksContainer = document.querySelector('.decks__container');
  let decksBottom = document.querySelector('.decks__bottom');

  if (decksContainer && decksBottom) {
    gsap.to(decksContainer, {
      x: '0%',
      duration: 3,
      scrollTrigger: {
        trigger: '.decks',
        start: 'top bottom',
        end: 'bottom bottom',
        scrub: 1,
      }
    });

    gsap.to(decksBottom, {
      x: '0%',
      duration: 3,
      scrollTrigger: {
        trigger: '.decks',
        start: 'top bottom',
        end: 'bottom bottom',
        scrub: 1,
      }
    });
  }

  // Scroll To

  document.querySelectorAll("a[href*='#']").forEach((btn, index) => {
    btn.addEventListener('click', () => {
      let anchorArray = btn.href.split('#');

      gsap.to(window, {
        duration: 1,
        scrollTo : {
          y : '#' + anchorArray[anchorArray.length - 1],
          offsetY : 65
        }
      });
    });
  });
})();
