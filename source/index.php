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
      <picture>
        <source media="(min-width: 1360px)" srcset="img/promo-1920.jpg" type="image/jpg">
        <source media="(min-width: 1024px)" srcset="img/promo-1280.jpg" type="image/jpg">
        <source media="(min-width: 425px)" srcset="img/promo-768.jpg" type="image/jpg">

        <img src="img/promo-320.jpg" alt="Фон">
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

        <picture class="totem__image">
          <source media="(min-width: 1024px)" srcset="img/mask-1920.png" type="image/png">
          <source media="(min-width: 425px)" srcset="img/mask-768.png" type="image/png">

          <img src="img/mask-320.png" alt="Маска">
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
            <li class="route__item route__item--routs swiper-slide">
              <button class="button button--routs" type="button" name="slide">
                Енисейская экспедиция
              </button>
            </li>
            <li class="route__item route__item--routs swiper-slide">
              <button class="button button--routs" type="button" name="slide">
                Плато Путорана
              </button>
            </li>
          </ul>
        </div>
      </div>

      <div class="route__left">

      </div>

      <div class="route__right">
        <svg width="300" height="422" viewBox="0 0 517 722" fill="none" xmlns="http://www.w3.org/2000/svg">
          <use xlink:href="img/sprite-map.svg#map" />

          <g class="route__toggle route__toggle--dudinka" data-map="0">
            <use xlink:href="img/sprite-map.svg#dudinka" />
          </g>
          <g class="route__toggle route__toggle--tyjaha" data-map="1">
            <use xlink:href="img/sprite-map.svg#tyjaha" />
          </g>
          <g class="route__toggle route__toggle--ermakovo" data-map="2">
            <use xlink:href="img/sprite-map.svg#ermakovo" />
          </g>
          <g class="route__toggle route__toggle--kangotovo" data-map="3">
            <use xlink:href="img/sprite-map.svg#kangotovo" />
          </g>
          <g class="route__toggle route__toggle--jarcevo" data-map="4">
            <use xlink:href="img/sprite-map.svg#jarcevo" />
          </g>
          <g class="route__toggle route__toggle--galanino" data-map="5">
              <use xlink:href="img/sprite-map.svg#galanino" />
          </g>
          <g class="route__toggle route__toggle--putorana" data-map="6">
            <use xlink:href="img/sprite-map.svg#plato-putorana" />
          </g>
          <g class="route__toggle route__toggle--igarka" data-map="7">
            <use xlink:href="img/sprite-map.svg#igarka" />
          </g>
          <g class="route__toggle route__toggle--turuhansk" data-map="8">
            <use xlink:href="img/sprite-map.svg#turuhansk" />
          </g>
          <g class="route__toggle route__toggle--bahta" data-map="9">
            <use xlink:href="img/sprite-map.svg#bahta" />
          </g>
          <g class="route__toggle route__toggle--vorogovo" data-map="10">
            <use xlink:href="img/sprite-map.svg#vorogovo" />
          </g>
          <g class="route__toggle route__toggle--enisejsk" data-map="11">
            <use xlink:href="img/sprite-map.svg#enisejsk" />
          </g>
          <g class="route__toggle route__toggle--krasnojarsk" data-map="12">
            <use xlink:href="img/sprite-map.svg#krasnojarsk" />
          </g>
        </svg>
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

  <!-- На время верстки (начало) -->
  <a href="/uikit.php">
    Ui Kit
  </a>
  <!-- На время верстки (конец) -->
</main>

<?php
  include("footer.php");
?>
