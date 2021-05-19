<?php
  include("header.php");
?>

<main class="page-main">
  <section class="promo">
    <div class="promo__wrapper">
      <div class="text text--promo">
        <p>
          Енисейская экспедиция с полетом на Плато Путорана.
          Енисей – одна из самых протяженных, полноводных рек мира – всегда манила
          исследователей, путешественников и любителей бросить вызов дикой природе.
        </p>
      </div>

      <nav class="navigation navigation--promo" role="navigation">
        <ul class="navigation__list navigation__list--promo">
          <li class="navigation__item navigation__item--promo">
            <a href="#">
              Маршруты
            </a>
          </li>
          <li class="navigation__item navigation__item--promo">
            <a href="#">
              теплоход
            </a>
          </li>
          <li class="navigation__item navigation__item--promo">
            <a href="#">
              Каюты
            </a>
          </li>
          <li class="navigation__item navigation__item--promo">
            <a href="#">
              Рестораны
            </a>
          </li>
          <li class="navigation__item navigation__item--promo">
            <a href="#">
              Развлечения
            </a>
          </li>
          <li class="navigation__item navigation__item--promo">
            <a href="#">
              Расписание
            </a>
          </li>
          <li class="navigation__item navigation__item--promo">
            <a href="#">
              Отзывы
            </a>
          </li>
        </ul>

        <svg class="navigation__subline" width="1023" height="10">
          <use xlink:href="#icon-line-submenu"></use>
        </svg>
      </nav>

      <h1 class="promo__title">
        <span>
          Wild life
        </span>
        <small>
          Первый экспедиционный речной круиз по Енисею
        </small>
      </h1>

      <div class="promo__select">
        <button class="button button--select-promo" type="button" name="select">
          <span class="button__text">
            Выбрать круиз
          </span>
          <span class="button__border"></span>
        </button>
      </div>
    </div>
    <div class="promo__angle">
      <svg class="promo__angle-bg" width="201" height="470">
        <use xlink:href="#icon-angle"></use>
      </svg>

      <div class="promo__angle-content">
        <span>
          крутите вниз
        </span>

        <svg class="promo__icon promo__icon--mouse" width="14" height="28">
          <use xlink:href="#icon-mouse"></use>
        </svg>

        <svg class="promo__icon promo__icon--swipe" width="16" height="20">
          <use xlink:href="#icon-swipe"></use>
        </svg>
      </div>
    </div>
    <div class="promo__bg">
      <!-- Картинка 'img/promo-1280.jpg' используется также для маски в Меню.
           При замене из админки картинки - имя файла и его расположение должно совпадать с версткой.
           Либо заменить здесь текст 'img/promo-1280.jpg' и в файле sprite.svg на новый путь к картинке.
      -->
      <picture itemscope itemtype="http://schema.org/ImageObject">
        <source media="(min-width: 1360px)" srcset="img/promo-1920.jpg" type="image/jpg">
        <source media="(min-width: 1024px)" srcset="img/promo-1280.jpg" type="image/jpg">
        <source media="(min-width: 425px)" srcset="img/promo-768.jpg" type="image/jpg">

        <img itemprop="contentUrl" src="img/promo-320.jpg" alt="Фон">

        <meta itemprop="name" content="Фон">
      </picture>
      <div class="promo__mask"></div>
    </div>
  </section>

  <section class="page-header page-header--bottom">
    <div class="page-header__wrapper page-header__wrapper--bottom">
      <div class="page-header__left page-header__left--bottom">
        <button class="button button--menu-bottom" type="button" name="menu">
          <span class="button__icon">
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                   fill-rule="evenodd"
                   clip-rule="evenodd"
                   d="M2 7.64715L7.64715 2H8.35304V2.70589L2.70589 8.35304H2V7.64715ZM2.70554 12.5888L12.5881 2.70628H13.2939V3.41217L3.41144 13.2947L2.70554 13.2947V12.5888ZM13.9999 8.35272L8.35272 13.9999H7.64683V13.294L13.294 7.64683H13.9999V8.35272Z"
              >
                <animate id="openMenuAnimate-bottom" attributeName="d"
                         from="M2 7.64715L7.64715 2H8.35304V2.70589L2.70589 8.35304H2V7.64715ZM2.70554 12.5888L12.5881 2.70628H13.2939V3.41217L3.41144 13.2947L2.70554 13.2947V12.5888ZM13.9999 8.35272L8.35272 13.9999H7.64683V13.294L13.294 7.64683H13.9999V8.35272Z"

                         to="M13.2957 1.99993L8.00169 7.29337L2.70734 1.99902L2.00145 1.99902L2.00145 2.70492L7.29576 7.99922L2.00098 13.2935V13.9994L2.70687 13.9994L8.00116 8.70561L13.2946 13.9991H14.0005V13.2932L8.70709 7.99975L14.0015 2.70583V1.99993L13.2957 1.99993Z"
                         dur="500ms"
                         begin="indefinite"
                         repeatCount="1"
                         fill="freeze"
                         calcMode="paced"
                         />

                  <animate id="closeMenuAnimate-bottom" attributeName="d"
                           from="M13.2957 1.99993L8.00169 7.29337L2.70734 1.99902L2.00145 1.99902L2.00145 2.70492L7.29576 7.99922L2.00098 13.2935V13.9994L2.70687 13.9994L8.00116 8.70561L13.2946 13.9991H14.0005V13.2932L8.70709 7.99975L14.0015 2.70583V1.99993L13.2957 1.99993Z"

                           to="M2 7.64715L7.64715 2H8.35304V2.70589L2.70589 8.35304H2V7.64715ZM2.70554 12.5888L12.5881 2.70628H13.2939V3.41217L3.41144 13.2947L2.70554 13.2947V12.5888ZM13.9999 8.35272L8.35272 13.9999H7.64683V13.294L13.294 7.64683H13.9999V8.35272Z"
                           dur="500ms"
                           begin="indefinite"
                           repeatCount="1"
                           fill="freeze"
                           calcMode="paced"
                           />
              </path>

              <path class="angle angle--top" d="M7.29508 3.00098L6.00097 1.708L6.00097 1.00211L6.70686 1.00211L8.00098 2.29508L8.00098 3.00098L7.29508 3.00098Z" />
              <path class="angle angle--right" d="M13.002 7.29508L14.2949 6.00097L15.0008 6.00097L15.0008 6.70686L13.7078 8.00098L13.002 8.00098L13.002 7.29508Z" />
              <path class="angle angle--left" d="M3.00195 8.70589L1.70898 10L1.00308 10L1.00308 9.29411L2.29606 8L3.00195 8L3.00195 8.70589Z" />
              <path class="angle angle--top" d="M8 2.29314L9.29298 0.999024L9.99887 0.999023L9.99887 1.70492L8.70589 2.99903L8 2.99903L8 2.29314Z" />
              <path class="angle angle--right" d="M13.7069 8.00098L15.001 9.29395L15.001 9.99985L14.2951 9.99985L13.001 8.70687L13.001 8.00098L13.7069 8.00098Z" />
              <path class="angle angle--left" d="M2.29411 8L0.999993 6.70702L0.999992 6.00113L1.70589 6.00113L3 7.29411L3 8L2.29411 8Z" />
              <path class="angle angle--bottom" d="M6.00098 14.2931L7.29395 12.999L7.99985 12.999L7.99985 13.7049L6.70687 14.999L6.00098 14.999L6.00098 14.2931Z" />
              <path class="angle angle--bottom" d="M9.29508 14.999L8.00097 13.706L8.00097 13.0002L8.70686 13.0002L10.001 14.2931L10.001 14.999L9.29508 14.999Z" />
            </svg>
          </span>

          <span class="button__text button__text--black">
            Меню
          </span>
        </button>

        <div class="phone phone--header-bottom">
          <h6>
            Телефон для бронирования
          </h6>

          <a href="tel:+74954454650">
            +7 (495) 445 46 50
          </a>
        </div>
      </div>
      <div class="page-header__center page-header__center--bottom">
        <a class="logo logo--header-bottom" href="#">
          <svg width="80" height="20" aria-label="Логотип">
            <use xlink:href="#icon-logo-bottom"></use>
          </svg>
        </a>
      </div>
      <div class="page-header__right page-header__right--bottom">
        <button class="button button--download-desktop-bottom openpopup" data-popup="download" type="button" name="download">
          Скачать брошюру
        </button>

        <button class="button button--wheel-bottom openpopup" data-popup="order" type="button" name="wheel">
          <span class="button__text button__text--black">
            Заказать круиз
          </span>

          <span class="button__icon button__icon--white">
            <svg width="20" height="20">
              <use xlink:href="#icon-wheel"></use>
            </svg>
          </span>
        </button>
      </div>
    </div>
  </section>

  <section class="totem">
    <div class="totem__wrapper">
      <h2 class="h1 h1--totem">
        Первый экспедиционный речной круиз по Енисею
      </h2>

      <div class="totem__left">
        <blockquote class="quote quote--totem" cite="http:///">
          <p>
            Наши гости смогут ощутить особый клубный дух, так как на теплоходе расположено всего 46 кают.
          </p>

          <p>
            В основу дизайна интерьеров
            и декора теплохода легли этнические мотивы малых народностей Севера.
          </p>
        </blockquote>
      </div>

      <div class="totem__center">
        <!-- <svg class="totem__runes" width="301" height="301">
          <use xlink:href="#icon-runes-white"></use>
        </svg> -->
        <svg class="totem__runes" width="301" height="301" viewBox="0 0 634 633" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g class="rotate-right">
            <use xlink:href="img/sprite-runes.svg#runes-white-right" />
          </g>
          <g class="rotate-left">
            <use xlink:href="img/sprite-runes.svg#runes-white-left" />
          </g>
        </svg>

        <picture class="totem__image" itemscope itemtype="http://schema.org/ImageObject">
          <source media="(min-width: 1024px)" srcset="img/mask-1920.png" type="image/png">
          <source media="(min-width: 425px)" srcset="img/mask-768.png" type="image/png">

          <img itemprop="contentUrl" src="img/mask-320.png" alt="Маска">

          <meta itemprop="name" content="Маска">
        </picture>
      </div>

      <div class="totem__right">
        <div class="text text--totem">
          <p>
            В начале 2020 года завершилась амбициозная модернизация теплохода до уровня 5 звезд по международным стандартам.
          </p>

          <p>
            В результате переоборудования на шлюпочной палубе разместился большой ресторанно развлекательный комплекс, на солнечной палубе — зона SPA c тренажерным залом.
          </p>

          <p>
            На всем протяжении круиза вы будете наслаждаться непревзойденной роскошью и домашней атмосферой.
          </p>
        </div>
      </div>
    </div>

    <div class="route">
      <div class="route__top">
        <h2 class="h2 h2--route">
          Маршруты экспедиций
        </h2>

        <div class="route__slider route__slider--routs swiper-container">
          <ul class="route__list route__list--routs swiper-wrapper">
            <!-- routs.js -->
            <!-- <li class="route__item route__item--routs swiper-slide">
              <h3>
                Енисейская экспедиция
              </h3>
            </li> -->
          </ul>
        </div>
      </div>

      <div class="route__content">
        <div class="route__left">
          <div class="route__slider route__slider--description swiper-container">
            <ul class="route__list route__list--description swiper-wrapper">
              <!-- routs.js -->
              <!-- <li class="route__item route__item--description swiper-slide">
                <h5 class="route__title">
                  Красноярск
                </h5>

                <p class="text text--description">
                  Столица Красноярского края, крупнейший культурный, деловой и промышленный центр Восточной Сибири. «Красный яр» - так называли основанный в 1628 году казаками воеводы Андрея Дубенского острог. В 1690 году Сибирь была окончательно присоединена к России
                  и Красноярск получил статус города, а в начале 19 века стал центром Енисейской губернии.
                </p>

                <button class="route__more" type="button" name="more">
                  Читать подробнее
                </button>
              </li>
               -->
            </ul>
          </div>
        </div>

        <div class="route__right">
          <svg width="517" height="722" viewBox="0 0 517 722" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g class="route__toggle route__toggle--dudinka">
              <use xlink:href="img/sprite-map.svg#dudinka" />
            </g>
            <g class="route__toggle route__toggle--tyjaha">
              <use xlink:href="img/sprite-map.svg#tyjaha" />
            </g>
            <g class="route__toggle route__toggle--igarka">
              <use xlink:href="img/sprite-map.svg#igarka" />
            </g>
            <g class="route__toggle route__toggle--ermakovo">
              <use xlink:href="img/sprite-map.svg#ermakovo" />
            </g>
            <g class="route__toggle route__toggle--turuhansk">
              <use xlink:href="img/sprite-map.svg#turuhansk" />
            </g>
            <g class="route__toggle route__toggle--kangotovo">
              <use xlink:href="img/sprite-map.svg#kangotovo" />
            </g>
            <g class="route__toggle route__toggle--alinskoe">
              <use xlink:href="img/sprite-map.svg#alinskoe" />
            </g>
            <g class="route__toggle route__toggle--bahta">
              <use xlink:href="img/sprite-map.svg#bahta" />
            </g>
            <g class="route__toggle route__toggle--vorogovo">
              <use xlink:href="img/sprite-map.svg#vorogovo" />
            </g>
            <g class="route__toggle route__toggle--jarcevo">
              <use xlink:href="img/sprite-map.svg#jarcevo" />
            </g>
            <g class="route__toggle route__toggle--enisejsk">
              <use xlink:href="img/sprite-map.svg#enisejsk" />
            </g>
            <g class="route__toggle route__toggle--galanino">
              <use xlink:href="img/sprite-map.svg#galanino" />
            </g>
            <g class="route__toggle route__toggle--barabanovo">
              <use xlink:href="img/sprite-map.svg#barabanovo" />
            </g>
            <g class="route__toggle route__toggle--krasnojarsk">
              <use xlink:href="img/sprite-map.svg#krasnojarsk" />
            </g>
            <g class="route__toggle route__toggle--putorana">
              <use xlink:href="img/sprite-map.svg#plato-putorana" />
            </g>

            <g class="route__map">
              <use xlink:href="img/sprite-map.svg#map" />
            </g>
          </svg>
        </div>

        <div class="route__bottom">
          <button class="button button--arrow-left prev prev--nodes" type="button" name="arrow">
            <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
            </svg>
          </button>

          <div class="route__slider-wraper">
            <div class="route__slider route__slider--nodes swiper-container">
              <ul class="route__list route__list--nodes swiper-wrapper">
                <!-- <li class="route__item route__item--nodes swiper-slide">
                  <h3>
                    Красноярск
                  </h3>
                </li> -->
              </ul>
            </div>
          </div>

          <button class="button button--arrow-right next next--nodes" type="button" name="arrow">
            <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="video">
    <div class="video__wrapper">
      <div class="youtube" data-id="QBsY1pQbP30">
        <div class="logo logo--video">
          <svg width="90" height="30" aria-label="Логотип">
            <use xlink:href="#icon-logo"></use>
          </svg>
        </div>
        <h2 class="youtube__title">
          Енисейская экспедиция
        </h2>

        <button class="youtube__button button button--play" type="button" name="play" aria-label="Включить/выключить видео">
          <span class="button__icon">
            <svg width="13" height="16">
              <use xlink:href="#icon-play"></use>
            </svg>
          </span>
        </button>

        <picture class="youtube__thumbnail" itemscope itemtype="http://schema.org/ImageObject">
          <source media="(min-width: 1360px)" srcset="img/video-1920.jpg" type="image/jpg">
          <source media="(min-width: 1024px)" srcset="img/video-1280.jpg" type="image/jpg">
          <source media="(min-width: 425px)" srcset="img/video-768.jpg" type="image/jpg">

          <img itemprop="contentUrl" src="img/video-320.jpg" alt="Poster">

          <meta itemprop="name" content="Poster">
        </picture>
        <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section class="leisure">
    <div class="leisure__wrapper">
      <header class="leisure__header">
        <h2 class="h2 h2--leisure">
          Досуг на борту
        </h2>

        <p class="text text--leisure">
          Для Вас работает SPA-зона с обширным набором услуг: фитнес зал,
          массажный кабинет, сибирский банный комплекс. В вечернее пребывание
          на борту мы хотели добавить что-то по-сибирски душевное, поэтому
          на шлюпочной палубе всех желающих ждет наш караоке клуб.
        </p>
      </header>

      <div class="leisure__slider-wrapper">
        <div class="leisure__slider leisure__slider--text swiper-container">
          <ul class="leisure__list swiper-wrapper">
            <li class="leisure__item swiper-slide">
              <h3 class="h4 h4--leisure">
                Фитнес
              </h3>

              <picture class="leisure__image" itemscope itemtype="http://schema.org/ImageObject">
                <source media="(min-width: 1360px)" srcset="img/leisure-1-1920.jpg" type="image/jpg">
                <source media="(min-width: 425px)" srcset="img/leisure-1-768.jpg" type="image/jpg">

                <img itemprop="contentUrl" src="img/leisure-1-320.jpg" alt="leisure">

                <meta itemprop="name" content="leisure">
              </picture>

              <p class="text-small text-small--leisure">
                Йога, пилатес, поддерживающие тренировки - это то,
                что нужно, чтобы сохранить форму на отдыхе.
              </p>
            </li>
            <li class="leisure__item swiper-slide">
              <h3 class="h4 h4--leisure">
                Wellness и SPA
              </h3>

              <picture class="leisure__image" itemscope itemtype="http://schema.org/ImageObject">
                <source media="(min-width: 1360px)" srcset="img/leisure-2-1920.jpg" type="image/jpg">
                <source media="(min-width: 425px)" srcset="img/leisure-1-768.jpg" type="image/jpg">

                <img itemprop="contentUrl" src="img/leisure-1-320.jpg" alt="leisure">

                <meta itemprop="name" content="leisure">
              </picture>

              <p class="text-small text-small--leisure">
                Сибирская сауна и массаж – лучший способ релаксации после насыщенного дня. Расслабьтесь, восстановите силы, запаситесь энергией.
              </p>
            </li>
            <li class="leisure__item swiper-slide">
              <h3 class="h4 h4--leisure">
                Караоке
              </h3>

              <picture class="leisure__image" itemscope itemtype="http://schema.org/ImageObject">
                <source media="(min-width: 1360px)" srcset="img/leisure-3-1920.jpg" type="image/jpg">
                <source media="(min-width: 425px)" srcset="img/leisure-1-768.jpg" type="image/jpg">

                <img itemprop="contentUrl" src="img/leisure-1-320.jpg" alt="leisure">

                <meta itemprop="name" content="leisure">
              </picture>

              <p class="text-small text-small--leisure">
                Если вы прекрасно поете, обязательно сходите в караоке-бар, а если с пением у вас не очень, все равно сходите - здесь все свои.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="cave">
    <div class="cave__wrapper">
      <div class="cave__slider cave__slider--text swiper-container">
        <ul class="cave__list cave__list--text swiper-wrapper">
          <li class="cave__item cave__item--text swiper-slide">
            <h3 class="h2 h2--cave">
              Откройте самые невероятные места планеты
            </h3>

            <p class="text-small text-small--cave">
              Спуститесь в подземные ледяные пещеры, поднимитесь на плато Путорана,
              побывайте в местах, которых  нет на картах. Испытайте себя в экспедиции
              на уникальном маршруте в сердце Сибири.
            </p>
          </li>
          <li class="cave__item cave__item--text swiper-slide">
            <h3 class="h2 h2--cave">
              Невероятные места планеты
            </h3>

            <p class="text-small text-small--cave">
              Спуститесь в подземные ледяные пещеры, поднимитесь на плато Путорана,
              побывайте в местах, которых  нет на картах. Испытайте себя в экспедиции
              на уникальном маршруте в сердце Сибири.
            </p>
          </li>
          <li class="cave__item cave__item--text swiper-slide">
            <h3 class="h2 h2--cave">
              Откройте самые невероятные места планеты Откройте самые
            </h3>

            <p class="text-small text-small--cave">
              Спуститесь в подземные
            </p>
          </li>
        </ul>
      </div>

      <div class="cave__bottom">
        <div class="cave__buttons">
          <button class="button button--arrow-left prev prev--cave" type="button" name="arrow">
            <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
            </svg>
          </button>

          <button class="button button--arrow-right next next--cave" type="button" name="arrow">
            <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
            </svg>
          </button>
        </div>

        <div class="fraction fraction--cave">
          <span class="fraction__current fraction__current--cave">
            001
          </span>

          <span class="fraction__all fraction__all--cave">
            004
          </span>
        </div>
      </div>
    </div>
    <div class="cave__slider cave__slider--images swiper-container">
      <ul class="cave__list cave__list--images swiper-wrapper">
        <li class="cave__item cave__item--images swiper-slide">
          <picture itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/cave-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/cave-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/cave-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/cave-320.jpg" alt="Reviews">

            <meta itemprop="name" content="Cave">
          </picture>
        </li>
        <li class="cave__item cave__item--images swiper-slide">
          <picture itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/cave-1920-2.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/cave-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/cave-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/cave-320.jpg" alt="Reviews">

            <meta itemprop="name" content="Cave">
          </picture>
        </li>
        <li class="cave__item cave__item--images swiper-slide">
          <picture itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/cave-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/cave-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/cave-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/cave-320.jpg" alt="Reviews">

            <meta itemprop="name" content="Cave">
          </picture>
        </li>
      </ul>

      <div class="cave__mask"></div>
    </div>
  </section>

  <section class="timetable">
    <div class="timetable__wrapper">
      <header class="timetable__header">
        <h2 class="h4 h4--timetable">
          Расписание
        </h2>
        <p class="hints hints--timetable">
          *Стоимость указана за одного человека в двухместном размещении
        </p>
      </header>
      <div class="timetable__slider-wrapper">
        <div class="timetable__slider timetable__slider--months swiper-container">
          <ul class="timetable__list timetable__list--months swiper-wrapper">
            <li class="timetable__item timetable__item--months swiper-slide">
              <h5 class="timetable__title">
                Май 2021
              </h5>
            </li>
            <li class="timetable__item timetable__item--months swiper-slide">
              <h5 class="timetable__title">
                Июнь 2021
              </h5>
            </li>
            <li class="timetable__item timetable__item--months swiper-slide">
              <h5 class="timetable__title">
                Сентябрь 2021
              </h5>
            </li>
          </ul>
        </div>
      </div>

      <div class="timetable__slider timetable__slider--timetable swiper-container">
        <ul class="timetable__list timetable__list--timetable swiper-wrapper">
          <li class="timetable__item timetable__item--timetable swiper-slide">
            <ul class="timetable__list timetable__list--inner">
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    20-23
                  </span>
                  <span class="timetable__date-months">
                    мая
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Енисейск
                      </li>
                      <li class="timetable__node">
                        Галанино
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 62 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    24-27
                  </span>
                  <span class="timetable__date-months">
                    мая
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Енисейск
                      </li>
                      <li class="timetable__node">
                        Галанино
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 59 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    28-5
                  </span>
                  <span class="timetable__date-months">
                    мая - июня
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Бахта
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + день на борту, Ярцево, Ворогово, Енисейск, Галанино, Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 156 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    29-5
                  </span>
                  <span class="timetable__date-months">
                    мая - июня
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Бахта
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + день на борту, Ярцево, Ворогово, Енисейск, Галанино, Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 138 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
            </ul>
          </li>
          <li class="timetable__item timetable__item--timetable swiper-slide">
            <ul class="timetable__list timetable__list--inner">
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    12-13
                  </span>
                  <span class="timetable__date-months">
                    мая
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Енисейск
                      </li>
                      <li class="timetable__node">
                        Галанино
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 62 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    24-27
                  </span>
                  <span class="timetable__date-months">
                    мая
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Енисейск
                      </li>
                      <li class="timetable__node">
                        Галанино
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 59 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    28-5
                  </span>
                  <span class="timetable__date-months">
                    мая - июня
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Бахта
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + день на борту, Ярцево, Ворогово, Енисейск, Галанино, Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 156 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    29-5
                  </span>
                  <span class="timetable__date-months">
                    мая - июня
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Бахта
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + день на борту, Ярцево, Ворогово, Енисейск, Галанино, Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 138 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
            </ul>
          </li>
          <li class="timetable__item timetable__item--timetable swiper-slide">
            <ul class="timetable__list timetable__list--inner">
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    30-31
                  </span>
                  <span class="timetable__date-months">
                    мая
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Енисейск
                      </li>
                      <li class="timetable__node">
                        Галанино
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 62 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    24-27
                  </span>
                  <span class="timetable__date-months">
                    мая
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Енисейск
                      </li>
                      <li class="timetable__node">
                        Галанино
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 59 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    28-5
                  </span>
                  <span class="timetable__date-months">
                    мая - июня
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Бахта
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + день на борту, Ярцево, Ворогово, Енисейск, Галанино, Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 156 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
              <li class="timetable__item timetable__item--inner">
                <p class="timetable__date">
                  <span class="timetable__date-days">
                    29-5
                  </span>
                  <span class="timetable__date-months">
                    мая - июня
                  </span>
                </p>

                <div class="timetable__content">
                  <div class="timetable__left">
                    <ul class="timetable__nodes">
                      <li class="timetable__node">
                        Красноярск
                      </li>
                      <li class="timetable__node">
                        Бахта
                      </li>
                      <li class="timetable__node">
                        Красноярск
                      </li>
                    </ul>
                    <p class="text-small text-small--timetable">
                      + день на борту, Ярцево, Ворогово, Енисейск, Галанино, Барабаново
                    </p>
                  </div>

                  <p class="timetable__price">
                    от 138 000 ₽
                  </p>

                  <button class="button button--order-text openpopup" data-popup="order" type="button" name="order-text">
                    Заказать
                  </button>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="reviews__wrapper">
      <h2 class="h2 h2--reviews">
        Яркие впечатления наших гостей
      </h2>

      <div class="reviews__slider swiper-container">
        <ul class="reviews__list swiper-wrapper">
          <li class="reviews__item swiper-slide" itemscope itemtype="https://schema.org/Review">
            <picture class="reviews__image" itemscope itemtype="http://schema.org/ImageObject">
              <source media="(min-width: 1360px)" srcset="img/reviews-1920.jpg" type="image/jpg">
              <source media="(min-width: 1024px)" srcset="img/reviews-1280.jpg" type="image/jpg">
              <source media="(min-width: 425px)" srcset="img/reviews-768.jpg" type="image/jpg">

              <img itemprop="contentUrl" src="img/reviews-320.jpg" alt="Reviews">

              <meta itemprop="name" content="Reviews">
            </picture>

            <div class="reviews__content">
              <div class="text text--reviews" itemprop="reviewBody">
                <p>
                  Енисею собрались наспех,
                  но ни разу не пожалели. Классно все: программа, теплоход, кухня, персонал. Видимо были включены в программу отличная
                  для сентября и этих мест погода, а также отличная компания наших соседей туристов. Искренне рада, что и наши ребята из Водохода научились отлично делать турпродукт.
                  Все "Принцессы" тихо курят в сторонке.
                  Желаю компании больше хороших новых маршрутов и процветания на долгие времена.
                  А мы вас всегда поддержим.
                </p>
              </div>

              <div class="reviews__bottom">
                <div class="text-small text-small--reviews">
                  <h6>
                    По Енисею :
                  </h6>

                  <p>
                    Красноярск, Енисейск, Норильск
                  </p>
                </div>

                <h5 class="h5 h5--reviews" itemprop="author" itemscope itemtype="https://schema.org/Person">
                  <span itemprop="name">
                    Константин
                  </span>
                  <span itemprop="familyName">
                    Константинопольский
                  </span>
                </h5>

                <div class="reviews__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                  <!-- Модификатор равен рейтингу. Например: 4 - четыре закрашенные звезды и одна пустая. -->
                  <div class="reviews__stars reviews__stars--4">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                  <meta itemprop="worstRating" content="1">
                  <meta itemprop="ratingValue" content="5">
                  <meta itemprop="bestRating" content="5"/>
                </div>
                <time class="text-small text-small--date">
                  17 сентября 2020
                  <meta itemprop="datePublished" content="2020-09-17"/>
                </time>
              </div>
            </div>
          </li>
          <li class="reviews__item swiper-slide" itemscope itemtype="https://schema.org/Review">
            <picture class="reviews__image" itemscope itemtype="http://schema.org/ImageObject">
              <source media="(min-width: 1360px)" srcset="img/reviews-1920.jpg" type="image/jpg">
              <source media="(min-width: 1024px)" srcset="img/reviews-1280.jpg" type="image/jpg">
              <source media="(min-width: 425px)" srcset="img/reviews-768.jpg" type="image/jpg">

              <img itemprop="contentUrl" src="img/reviews-320.jpg" alt="Reviews">

              <meta itemprop="name" content="Reviews">
            </picture>

            <div class="reviews__content">
              <div class="text text--reviews" itemprop="reviewBody">
                <p>
                  Желаю компании больше хороших новых маршрутов и процветания на долгие времена.
                  А мы вас всегда поддержим.
                </p>
              </div>

              <div class="reviews__bottom">
                <div class="text-small text-small--reviews">
                  <h6>
                    По Енисею :
                  </h6>

                  <p>
                    Красноярск, Енисейск, Норильск
                  </p>
                </div>

                <h5 class="h5 h5--reviews" itemprop="author" itemscope itemtype="https://schema.org/Person">
                  <span itemprop="name">
                    Константин
                  </span>
                  <span itemprop="familyName">
                    Константинопольский
                  </span>
                </h5>

                <div class="reviews__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                  <!-- Модификатор равен рейтингу. Например: 4 - четыре закрашенные звезды и одна пустая. -->
                  <div class="reviews__stars reviews__stars--1">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                  <meta itemprop="worstRating" content="1">
                  <meta itemprop="ratingValue" content="5">
                  <meta itemprop="bestRating" content="5"/>
                </div>
                <time class="text-small text-small--date">
                  22 ноября 2020
                  <meta itemprop="datePublished" content="2020-11-22"/>
                </time>
              </div>
            </div>
          </li>
          <li class="reviews__item swiper-slide" itemscope itemtype="https://schema.org/Review">
            <picture class="reviews__image" itemscope itemtype="http://schema.org/ImageObject">
              <source media="(min-width: 1360px)" srcset="img/reviews-1920.jpg" type="image/jpg">
              <source media="(min-width: 1024px)" srcset="img/reviews-1280.jpg" type="image/jpg">
              <source media="(min-width: 425px)" srcset="img/reviews-768.jpg" type="image/jpg">

              <img itemprop="contentUrl" src="img/reviews-320.jpg" alt="Reviews">

              <meta itemprop="name" content="Reviews">
            </picture>

            <div class="reviews__content">
              <div class="text text--reviews" itemprop="reviewBody">
                <p>
                  В круиз по Енисею собрались наспех,
                  но ни разу не пожалели. Классно все: программа, теплоход, кухня, персонал. Видимо были включены в программу отличная
                  для сентября и этих мест погода, а также отличная компания наших соседей туристов. Искренне рада, что и наши ребята из Водохода научились отлично делать турпродукт.
                  Все "Принцессы" тихо курят в сторонке.
                  Желаю компании больше хороших новых маршрутов и процветания на долгие времена.
                  А мы вас всегда поддержим.
                </p>
              </div>

              <div class="reviews__bottom">
                <div class="text-small text-small--reviews">
                  <h6>
                    По Енисею :
                  </h6>

                  <p>
                    Красноярск, Енисейск, Норильск
                  </p>
                </div>

                <h5 class="h5 h5--reviews" itemprop="author" itemscope itemtype="https://schema.org/Person">
                  <span itemprop="name">
                    Константин
                  </span>
                  <span itemprop="familyName">
                    Константинопольский
                  </span>
                </h5>

                <div class="reviews__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                  <!-- Модификатор равен рейтингу. Например: 4 - четыре закрашенные звезды и одна пустая. -->
                  <div class="reviews__stars reviews__stars--5">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                  <meta itemprop="worstRating" content="1">
                  <meta itemprop="ratingValue" content="5">
                  <meta itemprop="bestRating" content="5"/>
                </div>
                <time class="text-small text-small--date">
                  18 сентября 2020
                  <meta itemprop="datePublished" content="2020-09-18"/>
                </time>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="reviews__toggle">
        <button class="button button--arrow-left-big prev prev--reviews" type="button" name="arrow">
          <svg class="button__icon button__icon--brown" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
          </svg>
        </button>

        <div class="fraction fraction--reviews">
          <span class="fraction__current fraction__current--reviews">
            005
          </span>

          <span class="fraction__all fraction__all--reviews">
            020
          </span>
        </div>

        <button class="button button--arrow-right-big next next--reviews" type="button" name="arrow">
          <svg class="button__icon button__icon--brown" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
          </svg>
        </button>
      </div>
    </div>
  </section>

  <section class="subscribe">
    <div class="subscribe__wrapper">
      <div class="subscribe__text">
        <h3 class="h3 h3--subscribe">
          Подписка на новости
        </h3>

        <div class="text text--subscribe">
          <p>
            Никакого спама! Только полезные новости о премиумных круизах компании «ВодоходЪ»
          </p>
        </div>
      </div>

      <form class="subscribe__form" action="index.html" method="post">
        <div class="subscribe__field">
          <input class="subscribe__input" value="" type="email" id="email-subscribe" name="email-subscribe" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" required>
          <label class="subscribe__label" for="email-subscribe">
            Введите ваш e-mail
          </label>
        </div>
        <button class="button button--subscribe" type="submit" name="subscribe">
          <span class="button__text">
            Подписаться
          </span>

          <svg width="314" height="60">
            <use xlink:href="#icon-subscribe"></use>
          </svg>
        </button>
      </form>
    </div>
  </section>
</main>

<?php
  include("footer.php");
?>
