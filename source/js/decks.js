'use strict';

(function () {
  var decksTabList = document.querySelector('.decks__tabs');

  if (decksTabList) {
    var decksButtons = decksTabList.querySelectorAll('.decks__button');
    var decksListItems = document.querySelectorAll('.decks__item');

    var changeScene =  function (titleElement, buttonDataTitle, button) {
      // Scene 3D change


      // Title change
      if (titleElement && buttonDataTitle && button.classList.contains('active')) {
        titleElement.textContent = buttonDataTitle;
      }
    };

    if (decksButtons && decksListItems) {
      decksButtons.forEach((decksButton, i) => {
        let titleAtrium = document.querySelector('.h3--scene');
        let decksButtonDataTitle = decksButton.getAttribute('data-title');

        // Функция переключения сцены и замены заголовка
        changeScene(titleAtrium, decksButtonDataTitle, decksButton);

        decksButton.addEventListener('click', function () {
          // Удаление активного класса
          window.removeActiveClassElements(decksButtons, true);

          if (decksListItems[i]) {
            window.removeActiveClassElements(decksListItems);

            decksListItems[i].classList.add('active');
          }

          decksButton.parentNode.classList.add('active');
          decksButton.classList.add('active');

          // Функция переключения сцены и замены заголовка
          changeScene(titleAtrium, decksButtonDataTitle, decksButton);
        });
      });
    }

    window.tabListChangeHeight(decksTabList, 'decks__tabs');
  }

  var galleryToggleWrapper = document.querySelector('.scene__gallery-toggle');

  if (galleryToggleWrapper) {
    var gallery = document.querySelector('.scene__gallery');
    var galleryToggleButton = galleryToggleWrapper.querySelector('.scene__toggle');
    var galleryToggleText = galleryToggleWrapper.querySelector('.hints--gallery');
    var sceene3D = document.querySelector('.scene__3d');

    var changeGalleryToggle = function (button, textElement, element3D, galleryRooms) {
      if (button.classList.contains('active')) {
        button.classList.remove('active');
        element3D.classList.remove('active');
        galleryRooms.classList.remove('active');

        textElement.textContent = 'Посмотреть каюты';
      } else {
        button.classList.add('active');
        element3D.classList.add('active');
        galleryRooms.classList.add('active');

        textElement.textContent = 'Скрыть каюты';
      }
    };

    if (galleryToggleButton && galleryToggleText && gallery && sceene3D) {
      galleryToggleButton.addEventListener('click', function () {
        changeGalleryToggle(galleryToggleButton, galleryToggleText, sceene3D, gallery);
      });
    }
  }

  window.addEventListener('orientationchange', function () {
    if (decksButtons) {
      window.tabListChangeHeight(decksTabList, 'decks__tabs');
    }
  });
})();
