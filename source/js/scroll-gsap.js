'use strict';

(function () {
  // Регистрация плагина
  gsap.registerPlugin(ScrollTrigger);

  var toggleActiveClass = function (element) {
    element.classList.toggle('active');
  };

  // Трансформация Промо-секции

  var promoSection = document.querySelector('.promo');
  var promoImage = promoSection.querySelector('.promo__image');
  var promoContent = promoSection.querySelector('.promo__content');
  var promoText = promoSection.querySelector('.text--promo');
  var headerBottom = document.querySelector('.page-header--bottom');
  var headerTop = document.querySelector('.page-header--top');
  var totemSection = document.querySelector('.totem');

  if (promoSection && headerBottom && headerTop) {
    let heightPromoStart = promoSection.offsetHeight;

    // Триггер изменения высоты Промо-секции
    ScrollTrigger.create({
      trigger: '.promo',
      start: "top top",
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
      ease:'none',
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
      ease:'none',
      transformOrigin: 'center'
    });

    // Смещение текста

    let totemTitle = totemSection.querySelector('.h1--totem');

    if (totemTitle) {
      ScrollTrigger.create({
        trigger: totemSection,
        start: 'top top',
        end: 9999999,
        //markers: true,
        onToggle: self =>  {
          toggleActiveClass(totemTitle);
        }
      });
    }
  }

  // Трансформация секции Впечатлений

  const markers = gsap.utils.toArray(".emotions__item--text");

  markers.forEach(function(marker, index) {
   ScrollTrigger.create({
     trigger: marker,
     start: 'top center',
     end: 'bottom center',
     markers: true,
     onEnter: function() {
       window.swiperChange.emotionsSlideTo(index);
     },
     onEnterBack: function() {
       window.swiperChange.emotionsSlideTo(index);
     }
   });
  });

  let attr = {
    trigger: '.emotions__pin',
    start: 'top 10%',
    end: 'bottom bottom',
    pin: true,
    pinSpacing: false,
  };

  ScrollTrigger.create(attr);
})();
