'use strict';

(function () {
  let decksTabList = document.querySelector('.decks__tabs');

  if (decksTabList) {
    let decksButtons = decksTabList.querySelectorAll('.decks__button');
    let decksListItems = document.querySelectorAll('.decks__item');

    if (decksButtons && decksListItems) {
      decksButtons.forEach((decksButton, i) => {
        decksButton.addEventListener('click', function () {
          // Удаление активного класса
          window.removeActiveClassElements(decksButtons, true);

          if (decksListItems[i]) {
            window.removeActiveClassElements(decksListItems);

            decksListItems[i].classList.add('active');
          }


          decksButton.parentNode.classList.add('active');
          decksButton.classList.add('active');
        });
      });
    }

    window.tabListChangeHeight(decksTabList, 'decks__tabs');
  }

  window.addEventListener('resize', function () {
    if (decksButtons) {
      window.tabListChangeHeight(decksTabList, 'decks__tabs');
    }
  });
})();
