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
        promoImage.style.transform = 'scale(' + (parseFloat(self.progress.toFixed(3)) + 1) + ')';
        promoSection.style.minHeight = ((1 - parseFloat(self.progress.toFixed(3))) * 100) + 'vh';
        promoSection.style.height = (heightPromoStart * (1 - parseFloat(self.progress.toFixed(3)))) + 'px';
        promoText.style.opacity = 1 - (self.progress.toFixed(3) * 4);

        let coeffitientMargin = -100;

        if (window.innerWidth > 1280) {
          coeffitientMargin = -20;
        }

        promoText.style.marginTop = (self.progress.toFixed(3) * coeffitientMargin) + 'vh';

        //console.log("progress:", self.progress.toFixed(3), "direction:", self.direction, "velocity", self.getVelocity());
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
      rotation: 360 * 5,
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
      rotation: -360 * 5,
      duration: 1,
      ease:'none',
      transformOrigin: 'center'
    });

    // Смещение текста

    let totemTitle = totemSection.querySelector('.h1--totem');

    if (totemTitle) {
      console.log(totemSection.offsetTop);
      ScrollTrigger.create({
        trigger: totemSection,
        start: 'top top',
        end: 9999999,
        markers: true,
        onToggle: self =>  {
          toggleActiveClass(totemTitle);
        }
      });
    }
  }
})();
