'use strict';

(function () {
  let flagEventClik = {};

  window.tabListChangeHeight = function (tabList, tabsClass) {
    // Устанавливаю проверку наличия события Клика, чтобы исключить двойного Клика при ресайзе
    if (!flagEventClik[tabsClass]) {
      flagEventClik[tabsClass] = -1;
    }

    let changeHeightList = function () {
      let defaultHeightTabList;

      tabList.style.height = 'auto';

      defaultHeightTabList = tabList.offsetHeight;

      //console.log(defaultHeightTabList);

      let onTabListToggle = function (evt) {
        if (!evt.target.closest(`.${tabsClass}`)) {
          toggleTabList();
        }
      };

      let toggleTabList = function () {
        if (tabList.classList.contains('active')) {

          tabList.classList.remove('active');
          tabList.parentNode.classList.remove('active');

          tabList.style = '';

          document.removeEventListener('click', onTabListToggle);
        } else if (!tabList.classList.contains('active')) {

          tabList.classList.add('active');
          tabList.parentNode.classList.add('active');

          tabList.style.height = defaultHeightTabList + 'px';

          document.addEventListener('click', onTabListToggle);
        }
      };

      let onTabListClick = function (evt) {
        toggleTabList();
        //console.log('click');
      };

      if (window.innerWidth < 768) {

        tabList.style = '';
        tabList.classList.add('changed');

        if (flagEventClik[tabsClass] === -1) {
          tabList.addEventListener('click', onTabListClick);

          flagEventClik[tabsClass] = 1;
        }
      } else {
        if (tabList.classList.contains('changed')) {
          tabList.classList.remove('changed');
        }
      }
    };

    changeHeightList();
  };
})();
