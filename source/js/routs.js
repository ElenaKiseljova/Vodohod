'use strict';

(function () {
  try {
    // Маршруты (для теста заданы названия просто так)
    let routsNames = [
      'Енисейская экспедиция',
      'Плато Путорана',
      'Енисейская',
      'Экспедиция на Плато Путорана'
    ];

    // Порядок элементов объекта должен совпадать с порядком DOM элементов пунктов маршрута ".route__toggle"
    let routsNodes = [
      // 0
      {
        title: 'Дудинка',
        text: ''
      },
      // 1
      {
        title: 'Тыяха',
        text: ''
      },
      // 2
      {
        title: 'Игарка',
        text: ''
      },
      // 3
      {
        title: 'Ермаково',
        text: ''
      },
      // 4
      {
        title: 'Туруханск',
        text: 'Туруханск деловой и промышленный центр Восточной Сибири. «Красный яр»'
      },
      // 5
      {
        title: 'Канготово',
        text: ''
      },
      // 6
      {
        title: 'Алинское',
        text: ''
      },
      // 7
      {
        title: 'Бахта',
        text: ''
      },
      // 8
      {
        title: 'Ворогово',
        text: ''
      },
      // 9
      {
        title: 'Ярцево',
        text: ''
      },
      // 10
      {
        title: 'Енисейск',
        text: ''
      },
      // 11
      {
        title: 'Галанино',
        text: ''
      },
      // 12
      {
        title: 'Барабаново',
        text: ''
      },
      // 13
      {
        title: 'Красноярск',
        text: 'Столица Красноярского края, крупнейший культурный, деловой и промышленный центр Восточной Сибири. «Красный яр» - так называли основанный в 1628 году казаками воеводы Андрея Дубенского острог. В 1690 году Сибирь была окончательно присоединена к России и Красноярск получил статус города, а в начале 19 века стал центром Енисейской губернии.'
      },
      // 14
      {
        title: 'Плато Путорана',
        text: 'Плато Путорана, крупнейший культурный, деловой и промышленный центр Восточной Сибири. «Красный яр» - так называли основанный в 1628 году казаками воеводы Андрея Дубенского острог. В 1690 году Сибирь была окончательно присоединена к России и Красноярск получил статус города, а в начале 19 века стал центром Енисейской губернии.'
      }
    ];

    let routs = [
      //1 маршрут
      [
        routsNodes[13], //'Красноярск'
        routsNodes[10], //'Енисейск',
        routsNodes[11], //'Галанино',
        routsNodes[12] //'Барабаново',
      ],
      //2 маршрут
      [
        routsNodes[13], //'Красноярск'
        routsNodes[11], //'Галанино',
        routsNodes[9], //'Ярцево',
        routsNodes[7], //'Бахта',
        routsNodes[8], //'Ворогово',
        routsNodes[10], //'Енисейск',
        routsNodes[12] //'Барабаново',
      ],
      //3 маршрут
      [
        routsNodes[13], //'Красноярск'
        routsNodes[10], //'Енисейск',
        routsNodes[7], //'Бахта',
        routsNodes[6], //'Алинское',
        routsNodes[5], //'Канготово',
        routsNodes[4], //'Туруханск',
        routsNodes[3], //'Ермаково',
        routsNodes[2], //'Игарка',
        routsNodes[1], //'Тыяха',
        routsNodes[0], //'Дудинка',
        routsNodes[14] //'Плато Путорана'
      ],
      //4 маршрут
      [
        routsNodes[0], //'Дудинка',
        routsNodes[1], //'Тыяха',
        routsNodes[2], //'Игарка',
        routsNodes[3], //'Ермаково',
        routsNodes[4], //'Туруханск',
        routsNodes[5], //'Канготово',
        routsNodes[6], //'Алинское',
        routsNodes[7], //'Бахта',
        routsNodes[9], //'Ярцево',
        routsNodes[10], //'Енисейск',
        routsNodes[11], //'Галанино',
        routsNodes[13], //'Красноярск'
        routsNodes[14] //'Плато Путорана'
      ]
    ];

    //console.log(routs);

    // Список-слайдер с названиями маршрутов
    let routsList = document.querySelector('.route__list--routs');

    if (routsList) {
      let templateRoutName = (name, index) => {
        return `
            <li class="route__item route__item--routs swiper-slide" data-index="${index}">
              <h3>
                ${name}
              </h3>
            </li>
          `;
      }

      let templateRoutsList = routsNames.map((name, index) => templateRoutName(name, index));
      let htmlTemplateRoutsList = templateRoutsList.join(' ');

      routsList.innerHTML = htmlTemplateRoutsList;

      // Все табы-названия маршрутов
      let routsListItems = routsList.querySelectorAll('.route__item--routs');

      // Список с описанием пунктов маршрута и Список названий пунктов маршрута

      let routsListDescription = document.querySelector('.route__list--description');
      let routsListNode = document.querySelector('.route__list--nodes');

      // Секция с картой

      let routsMapSection = document.querySelector('.route__right');

      if (routsListItems && routsListDescription && routsListNode && routsMapSection) {
        // Экспортный объект в файл swiper-init.js

        window.routs = {
          // Функция создает пункты списка ".route__list--description"
          createSliderDescriptionElement : function (i) {
            let templateRoutDescription = (description) => {
              return `
                  <li class="route__item route__item--description swiper-slide">
                    <h5 class="route__title">
                      ${description.title}
                    </h5>

                    <p class="text text--description">
                      ${description.text}
                    </p>

                    <button class="route__more" type="button" name="more">
                      Читать подробнее
                    </button>
                  </li>
                `;
            }

            let templateRoutsListDescription = routs[i].map((rout) => templateRoutDescription(rout));
            let htmlTemplateRoutsDescription = templateRoutsListDescription.join(' ');

            routsListDescription.innerHTML = htmlTemplateRoutsDescription;

            // Кнопка "Читать больше" видна только в мобильной версии
            if (window.innerWidth < 768) {
              // Импорт функции из show-more.js
              window.showMore(133, '.text--description', '.route__more');
            }
          },
          // Функция создает пункты списка ".route__list--nodes"
          createSliderNodesElement : function (i) {
            let templateRoutNode = (node) => {
              return `
                  <li class="route__item route__item--nodes swiper-slide">
                    <h3>
                      ${node.title}
                    </h3>
                  </li>
                `;
            }

            let templateRoutsListNode = routs[i].map((rout) => templateRoutNode(rout));
            let htmlTemplateRoutsNode = templateRoutsListNode.join(' ');

            routsListNode.innerHTML = htmlTemplateRoutsNode;

            let indexNodes = routs[i].map((rout) => {
              return routsNodes.indexOf(rout);
            });

            let mapToggles = document.querySelectorAll('.route__toggle');

            if (mapToggles) {
              mapToggles.forEach((mapToggle, i) => {
                if (mapToggle.classList.contains('active') && (indexNodes.indexOf(i) === -1)) {
                  mapToggle.classList.remove('active');
                } else if (!mapToggle.classList.contains('active') && (indexNodes.indexOf(i) > -1)) {
                  mapToggle.setAttribute('data-map', i);
                  mapToggle.classList.add('active');
                }
              });
            }
          }
        };

        // 0 - показ первого маршрута
        window.routs.createSliderDescriptionElement(0);
        window.routs.createSliderNodesElement(0);
      }
    }
  } catch (e) {
    console.log(e);
  }

  window.addEventListener('load', function () {
    // Инициализация слайдеров из файла swiper-init.js
    window.swiperChange.routNamesInit();
    window.swiperChange.routDescriptionInit();
  });
})();
