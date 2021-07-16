'use strict';

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    // Регистрация плагинов
    gsap.registerPlugin(ScrollTrigger);

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
      var promoAngle = promoSection.querySelector('.promo__angle');

      // Триггер изменения Промо-секции

      gsap.to(promoImage, {
        scale: 1.2,
        duration: 3,
        ease: 'none',
        scrollTrigger: {
          trigger: '.totem',
          scrub: 1,
          start: 'top bottom',
          end: 'top top',
        }
      });

      gsap.to(promoText, {
        y: '-150px',
        opacity: 0,
        duration: 3,
        ease: 'none',
        scrollTrigger: {
          trigger: '.totem',
          scrub: 0.3,
          start: 'top bottom',
          end: 'top top',
        }
      });

      gsap.to(promoContent, {
        y: '-100px',
        opacity: 0,
        duration: 6,
        ease: 'none',
        scrollTrigger: {
          trigger: '.totem',
          scrub: 0.3,
          start: 'top bottom',
          end: 'top top',
        }
      });

      gsap.to(promoAngle, {
        x: '100%',
        duration: 5,
        ease: 'none',
        scrollTrigger: {
          trigger: '.totem',
          scrub: 0.3,
          start: 'top bottom',
          end: 'top top',
        }
      });

      ScrollTrigger.create({
        trigger: '.promo',
        start: 'bottom bottom',
        end: 'bottom top',
        //markers: true,
        pin: true,
        pinSpacing: false,
        /*onUpdate: self => {
          promoImage.style.transform = 'scale(' + ((parseFloat(self.progress.toFixed(3))/3) + 1) + ')';
          promoText.style.opacity = 1 - (self.progress.toFixed(3) * 2);
          promoText.style.transform = 'translateY(-' + (self.progress.toFixed(3) * 100) + '%)';
          promoContent.style.transform = 'translateY(-' + (self.progress.toFixed(3) * 100) + '%)';

          //console.log(
          // "progress:", self.progress.toFixed(3),
          // "direction:", self.direction,
          // "velocity", self.getVelocity());
        }*/
      });

      // Триггер на сокрытие/показ хедера
      ScrollTrigger.create({
        trigger: '.totem',
        start: 'top top',
        end: 9999999,
        //markers: true,
        onToggle: self =>  {
          toggleActiveClass(headerTop);
          toggleActiveClass(headerBottom);
          //console.log("toggled, isActive:", self.isActive)
        }
      });

      // Поворот Заказать
      gsap.to('.button--wheel .button__icon--white', {
        transformOrigin: '50% 50%',
        rotation: 360,
        duration: 5,
        ease: 'none',
        scrollTrigger: {
          scrub: 1,
        }
      });

      gsap.to('.button--wheel-bottom .button__icon--white', {
        transformOrigin: '50% 50%',
        rotation: 360,
        duration: 5,
        ease: 'none',
        scrollTrigger: {
          scrub: 1,
        }
      });

      // Поворот рунического круга
      gsap.to('#right', {
        transformOrigin: '50% 50%',
        rotation: 360,
        duration: 1,
        ease: 'none',
        scrollTrigger: {
          trigger: '.totem__image',
          scrub: 0.2,
          start: 'top bottom',
          end: '+=10000',
        }
      });

      gsap.to('#left', {
        transformOrigin: '50% 50%',
        rotation: -360,
        duration: 2,
        ease: 'none',
        scrollTrigger: {
          trigger: '.totem__image',
          scrub: 0.2,
          start: 'top bottom',
          end: '+=10000',
        }
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
      let emotionsLeft = emotions.querySelector('.emotions__left');
      let emotionsImages = emotions.querySelector('.emotions__images');
      let emotionsRight = emotions.querySelector('.emotions__right');

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

      if ((window.innerWidth >= 1024) || ((window.innerWidth < 1024) && (window.innerHeight <= 320))) {
        ScrollTrigger.create({
          trigger: emotionsLeft,
          start: 'top top',
          end: 'bottom bottom',
          //markers: true,
          pin: emotionsImages,
          pinSpacing: false,
          scrub: 1,
        });
      }

      if ((window.innerWidth < 1024) && (window.innerHeight > 320)) {
        let emotionsLeftHeight =  emotionsLeft.offsetHeight;
        let emotionsRightHeight =  emotionsRight.offsetHeight;

        emotionsLeft.style.height = (emotionsLeftHeight + emotionsRightHeight) + 'px';
        emotionsRight.style.marginTop = '-' + emotionsRightHeight + 'px';

        ScrollTrigger.create({
          trigger: emotionsLeft,
          start: 'top 67px',
          end: 'bottom 55%',
          pin: emotionsImages,
          pinSpacing: false,
          scrub: 1,
          //markers: true,
        });
      }
    }

    // Заголовки

    let titles = document.querySelectorAll('.title');

    function initTitleWrapper(element) {
      let newLayoutTemplate = element.innerHTML.split('<br>').map(function(elementItem) {
        return '<span class="title__row">' + elementItem + '</span>'
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
      scale: 1.005,
      scrollTrigger: {
        trigger: '.rest',
        start: 'center top',
        end: '+=1000',
        //markers: true,
        scrub: 1,
      }
    });

    let leisureSlider = document.querySelector('.leisure__slider');

    if (leisureSlider && window.innerWidth >= 1280) {
      gsap.to(leisureSlider, {
        x: '-57vw',
        duration: 3,
        scrollTrigger: {
          trigger: '.leisure',
          start: 'top 40%',
          scrub: 2,
          ease: 'none',
          //markers: true,
        }
      });
    }

    // Cave

    // let cave = document.querySelector('.cave');
    //
    // if (cave) {
    //   let heightCave = cave.offsetHeight;
    //
    //   cave.style.transform = 'translate3d(0, -' + heightCave + 'px, 0)';
    //
    //   gsap.to('.cave', {
    //     y: '0px',
    //     duration: 2,
    //     scrollTrigger: {
    //       trigger: '.leisure',
    //       start: 'center bottom',
    //       end: 'center top',
    //       scrub: 5,
    //       ease: 'none',
    //       //markers: true,
    //     }
    //   });
    // }

    ScrollTrigger.create({
      trigger: '.cave',
      start: 'top bottom',
      end: 'bottom top',
      //markers: true,
      pin: '.leisure',
      pinSpacing: false,
    });

    // Decks

    let decksContainer = document.querySelector('.decks__container');
    let decksBottom = document.querySelector('.decks__bottom');

    if (decksContainer && decksBottom) {
      gsap.to(decksContainer, {
        y: '30px',
        duration: 5,
        scrollTrigger: {
          trigger: '.decks',
          start:  'top bottom',
          end: 'bottom top',
          scrub: 0.5,
          //markers: true
        }
      });

      gsap.to(decksBottom, {
        y: '30px',
        duration: 10,
        scrollTrigger: {
          trigger: '.decks',
          start: 'top bottom',
          end: 'bottom top',
          scrub: 0.5,
          //markers: true
        }
      });
    }
  });
})();
