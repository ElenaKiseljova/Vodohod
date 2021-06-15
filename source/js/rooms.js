'use strict';

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    var roomsList = document.querySelector('.rooms__list');

    if (roomsList) {
      var flagTimeout = false;

      roomsList.addEventListener('mouseleave', function () {
        flagTimeout = false;
      });

      var rooms = roomsList.querySelectorAll('.rooms__item');

      let lazyShowElements = function (elements) {
        elements.forEach((element, i) => {
          let newLayoutTemplate = '<span>' + element.textContent + '</span>';

          element.innerHTML = newLayoutTemplate;
        });
      };

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
          if (flagTimeout) {
            setTimeout(function () {
              addActiveSlide(room);
            }, 700);
          }

          if (!flagTimeout) {
            addActiveSlide(room);

            flagTimeout = true;
          }

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
          }, 700);

          room.removeEventListener('mouseleave', onMouseLeave);
          room.addEventListener('mouseenter', onMouseEnter);
        };

        room.addEventListener('mouseenter', onMouseEnter);

        let roomsListItems = room.querySelectorAll('.rooms__service');

        lazyShowElements(roomsListItems);
      });

    }
  });
})();
