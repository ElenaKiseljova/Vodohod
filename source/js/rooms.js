'use strict';

(function () {
  var rooms = document.querySelectorAll('.rooms__item');

  if (rooms) {
    let addActiveSlide = function (room) {
      room.classList.add('active');

      if (room.classList.contains('mouseleave')) {
        // Класс для смены opacity
        room.classList.remove('mouseleave');
      }

      // Класс для смены opacity
      room.classList.add('mouseenter');
    };

    let removeActiveSlide = function (room) {
      room.classList.remove('active');
    };

    rooms.forEach((room, i) => {
      let onMouseEnter = function () {
        setTimeout(function () {
          addActiveSlide(room);
        }, 800);


        room.removeEventListener('mouseenter', onMouseEnter);
        room.addEventListener('mouseleave', onMouseLeave);
      };

      let onMouseLeave = function () {
        if (room.classList.contains('mouseenter')) {
          // Класс для смены opacity
          room.classList.remove('mouseenter');
        }

        // Класс для смены opacity
        room.classList.add('mouseleave');

        setTimeout(function () {
          removeActiveSlide(room);
        }, 800);

        room.removeEventListener('mouseleave', onMouseLeave);
        room.addEventListener('mouseenter', onMouseEnter);
      };

      room.addEventListener('mouseenter', onMouseEnter);
    });

  }
})();
