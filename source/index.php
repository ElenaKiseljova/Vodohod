<?php
  include("header.php");
?>

<main class="page-main" id='top'>
  <section class="promo" id="promo">
    <div class="promo__wrapper">
      <div class="text text--promo">
        <p>
          Енисейская экспедиция с полетом на Плато Путорана.
          Енисей – одна из самых протяженных, полноводных рек мира – всегда манила
          исследователей, путешественников и любителей бросить вызов дикой природе.
        </p>
      </div>

      <div class="promo__content">
        <nav class="navigation navigation--promo" role="navigation">
          <ul class="navigation__list navigation__list--promo">
            <li class="navigation__item navigation__item--promo">
              <a href="#route">
                Маршруты
              </a>
            </li>
            <li class="navigation__item navigation__item--promo">
              <a href="#through">
                теплоход
              </a>
            </li>
            <li class="navigation__item navigation__item--promo">
              <a href="#rooms">
                Каюты
              </a>
            </li>
            <li class="navigation__item navigation__item--promo">
              <a href="#rest">
                Рестораны
              </a>
            </li>
            <li class="navigation__item navigation__item--promo">
              <a href="#leisure">
                Развлечения
              </a>
            </li>
            <li class="navigation__item navigation__item--promo">
              <a href="#timetable">
                Расписание
              </a>
            </li>
            <li class="navigation__item navigation__item--promo">
              <a href="#reviews">
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
          <a class="button button--select-promo" href="#timetable">
            <span class="button__text">
              Выбрать круиз
            </span>
            <span class="button__border"></span>
          </a>
        </div>
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
           Либо заменить здесь текст 'img/promo-1280.jpg' и в файле header.php на новый путь к картинке.
      -->
      <picture class="promo__image" itemscope itemtype="http://schema.org/ImageObject">
        <source media="(min-width: 1360px)" srcset="img/promo-1920.jpg" type="image/jpg">
        <source media="(min-width: 1024px)" srcset="img/promo-1280.jpg" type="image/jpg">
        <source media="(min-width: 425px)" srcset="img/promo-768.jpg" type="image/jpg">

        <img itemprop="contentUrl" src="img/promo-320.jpg" alt="Фон">

        <meta itemprop="name" content="Фон">
      </picture>
      <div class="promo__mask"></div>
    </div>
  </section>

  <section class="totem">
    <div class="totem__wrapper" id="totem">
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
        <div class="totem__runes">
          <svg id="right" width="634" height="633" viewBox="0 0 634 633" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use xlink:href="img/sprite-runes.svg#runes-white-right" />
          </svg>
          <svg id="left" width="456" height="455" viewBox="0 0 634 633" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use xlink:href="img/sprite-runes.svg#runes-white-left" />
          </svg>
        </div>

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

    <div class="route" id="route">
      <div class="route__top">
        <h2 class="h2 h2--route title">
          Маршруты экспедиций
        </h2>

        <div class="route__buttons">
          <button class="button button--route prev prev--route" type="button" name="button">
            <svg class="button__icon button__icon--prev" width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7 11.3322L1.40206 6.00002L7 0.667801L6.29897 4.48227e-05L0 6.00002L6.29897 12L7 11.3322ZM7 7.55485L5.3677 6.00003L7 4.44521L6.29897 3.77745L3.96563 6.00003L6.29897 8.22261L7 7.55485Z" fill="white"/>
            </svg>
          </button>
          <button class="button button--route next next--route" type="button" name="button">
            <svg class="button__icon button__icon--next" width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 11.3322L5.59794 6.00002L0 0.667801L0.701032 4.48227e-05L7 6.00002L0.701032 12L0 11.3322ZM0 7.55485L1.6323 6.00003L0 4.44521L0.701032 3.77745L3.03437 6.00003L0.701032 8.22261L0 7.55485Z" fill="white"/>
            </svg>
          </button>
        </div>
        <div class="route__slider-container">
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
          <div class="route__map">
            <img src="../img/map.svg" width="517" height="722" alt="Карта">

            <button class="route__toggle route__toggle--0" type="button" name="rout">
              <svg width="80" height="12">
                <use xlink:href="img/sprite-map.svg#dudinka"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--1" type="button" name="rout">
              <svg width="57" height="10">
                <use xlink:href="img/sprite-map.svg#tyjaha"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--2" type="button" name="rout">
              <svg width="64" height="10">
                <use xlink:href="img/sprite-map.svg#igarka"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--3" type="button" name="rout">
              <svg width="93" height="11">
                <use xlink:href="img/sprite-map.svg#ermakovo"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--4" type="button" name="rout">
              <svg width="100" height="11">
                <use xlink:href="img/sprite-map.svg#turuhansk"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--5" type="button" name="rout">
              <svg width="103" height="11">
                <use xlink:href="img/sprite-map.svg#kangotovo"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--6" type="button" name="rout">
              <svg width="150" height="26">
                <use xlink:href="img/sprite-map.svg#staroobryadci"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--7" type="button" name="rout">
              <svg width="52" height="10">
                <use xlink:href="img/sprite-map.svg#bahta"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--8" type="button" name="rout">
              <svg width="95" height="11">
                <use xlink:href="img/sprite-map.svg#vorogovo"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--9" type="button" name="rout">
              <svg width="67" height="12">
                <use xlink:href="img/sprite-map.svg#jarcevo"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--10" type="button" name="rout">
              <svg width="91" height="13">
                <use xlink:href="img/sprite-map.svg#enisejsk"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--11" type="button" name="rout">
              <svg width="92" height="11">
                <use xlink:href="img/sprite-map.svg#galanino"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--12" type="button" name="rout">
              <svg width="115" height="11">
                <use xlink:href="img/sprite-map.svg#barabanovo"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--13" type="button" name="rout">
              <svg width="115" height="11">
                <use xlink:href="img/sprite-map.svg#krasnojarsk"></use>
              </svg>
            </button>
            <button class="route__toggle route__toggle--14" type="button" name="rout">
              <svg width="155" height="11">
                <use xlink:href="img/sprite-map.svg#plato-putorana"></use>
              </svg>
            </button>
          </div>
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
  <svg  width="78" height="24">
    <use xlink:href="img/sprite.svg#icon-work-2" />
  </svg>
  <section class="through" id="through">
    <div class="through__wrapper">
      <div class="through__content">
        <h2 class="h2 h2--through title">
          Сквозь сибирскую
          <br>
          тайгу с комфортом!
        </h2>

        <ul class="through__list">
          <li class="through__item">
            <h4 class="h4 h4--through">
              94
            </h4>
            <p class="hints hints--through">
              посадочных места
            </p>
          </li>
          <li class="through__item">
            <h4 class="h4 h4--through">
              22 км/ч
            </h4>
            <p class="hints hints--through">
              максимальная скорость
            </p>
          </li>
          <li class="through__item">
            <h4 class="h4 h4--through">
              110.1 × 14.5 м
            </h4>
            <p class="hints hints--through">
              размер теплохода
            </p>
          </li>
          <li class="through__item">
            <h4 class="h4 h4--through">
              2.3 м
            </h4>
            <p class="hints hints--through">
              осадка теплохода
            </p>
          </li>
        </ul>

        <div class="text text--through">
          <p>
            Наши гости смогут ощутить особый клубный дух, так как
            на теплоходе расположено всего 46 кают. В основу дизайна интерьеров и декора теплохода легли этнические мотивы малых народностей Севера.
          </p>
          <p>
            В начале 2020 года завершилась амбициозная модернизация теплохода до уровня 5 звезд по международным стандартам.
            В результате переоборудования на шлюпочной палубе разместился большой ресторанно развлекательный комплекс,
            на солнечной палубе — зона SPA c тренажерным залом.
          </p>
        </div>
      </div>
      <div class="through__image" itemscope itemtype="http://schema.org/ImageObject">
        <picture>
          <source media="(min-width: 1920px)" srcset="img/through-1920.png" type="image/jpg">
          <source media="(min-width: 425px)" srcset="img/through-768.png" type="image/jpg">

          <img itemprop="contentUrl" src="img/through-320.png" alt="картинка">
        </picture>

        <meta itemprop="name" content="картинка">
      </div>
    </div>
  </section>

  <section class="decks" id="decks">
    <div class="decks__wrapper">
      <div class="decks__top">
        <h2 class="h2 h2--decks title">
          План палуб
        </h2>

        <div class="decks__container">
          <div class="decks__tabs-wrapper">
            <ul class="decks__tabs">
              <!-- Порядковый номер пунктов в списке Табов должен совпадать с порядковым номером
                   пунктов с изображениями палуб в списке ниже-->
              <li class="decks__tab active" data-type="main">
                <button class="decks__button active" data-title="Атриум «Арктика»" type="button" name="decks">
                  Главная палуба
                </button>
              </li>
              <li class="decks__tab" data-type="middle">
                <button class="decks__button" data-title="Атриум «Тайга»" type="button" name="decks">
                  Средняя палуба
                </button>
              </li>
              <li class="decks__tab" data-type="boat">
                <button class="decks__button" data-title="Атриум «Степь»" type="button" name="decks">
                  Шлюпочная палуба
                </button>
              </li>
              <li class="decks__tab" data-type="sun">
                <button class="decks__button" data-title="Атриум «Солнечная»" type="button" name="decks">
                  Солнечная палуба
                </button>
              </li>
            </ul>
          </div>

          <!-- В дата-атрибуте 'data-room' элемента 'decks__room' находится идентификатор каюты
               из скрипта 3D туров (полагаю, он там есть какой-то и нумирация идет сквозная, а не по палубам. Соответствует кадрам в галерее.). По клику на 'decks__room' - переход к просмотру 3D сцены помещения. -->
          <ul class="decks__list">
            <li class="decks__item active" data-type="main">
              <div class="decks__image" itemscope itemtype="http://schema.org/ImageObject">
                <img itemprop="contentUrl" src="img/deck-main.svg" alt="Атриум «Арктика»">

                <meta itemprop="name" content="Атриум «Арктика»">
              </div>

              <!-- Ссылки на помещения -->
              <div class="decks__row decks__row--main-1">
                <a class="decks__room" data-room="1" href="#panorama">
                  Сибирский паб
                </a>
              </div>
              <div class="decks__row decks__row--main-2">
                <a class="decks__room" data-room="2" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--main-3">
                <a class="decks__room" data-room="3" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--main-4">
                <a class="decks__room" data-room="4" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--main-5">
                <a class="decks__room" data-room="5" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--main-6">
                <a class="decks__room" data-room="31" href="#panorama">
                  Ресепшин палубы
                </a>
              </div>
            </li>
            <li class="decks__item" data-type="middle">
              <div class="decks__image" itemscope itemtype="http://schema.org/ImageObject">
                <img itemprop="contentUrl" src="img/deck-middle.svg" alt="Атриум «Тайга»">

                <meta itemprop="name" content="Атриум «Тайга»">
              </div>
              <!-- Ссылки на помещения -->
              <div class="decks__row decks__row--middle-1">
                <a class="decks__room" data-room="6" href="#panorama">
                  конференц-зал
                </a>
              </div>
              <div class="decks__row decks__row--middle-2">
                <a class="decks__room" data-room="7" href="#panorama">
                  одноместный
                </a>
              </div>
              <div class="decks__row decks__row--middle-3">
                <a class="decks__room" data-room="8" href="#panorama">
                  одноместный
                </a>
              </div>
              <div class="decks__row decks__row--middle-4">
                <a class="decks__room" data-room="9" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-5">
                <a class="decks__room" data-room="10" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-6">
                <a class="decks__room" data-room="11" href="#panorama">
                  Атриум палубы
                </a>
              </div>
              <div class="decks__row decks__row--middle-7">
                <a class="decks__room" data-room="12" href="#panorama">
                  одноместный
                </a>
              </div>
              <div class="decks__row decks__row--middle-8">
                <a class="decks__room" data-room="13" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-9">
                <a class="decks__room" data-room="14" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-10">
                <a class="decks__room" data-room="15" href="#panorama">
                  3-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-11">
                <a class="decks__room" data-room="16" href="#panorama">
                  3-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-12">
                <a class="decks__room" data-room="17" href="#panorama">
                  одноместный
                </a>
              </div>
              <div class="decks__row decks__row--middle-13">
                <a class="decks__room" data-room="18" href="#panorama">
                  одноместный
                </a>
              </div>
              <div class="decks__row decks__row--middle-14">
                <a class="decks__room" data-room="19" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-15">
                <a class="decks__room" data-room="20" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--middle-16">
                <a class="decks__room" data-room="21" href="#panorama">
                  Раздевалка
                </a>
              </div>
            </li>
            <li class="decks__item" data-type="boat">
              <div class="decks__image" itemscope itemtype="http://schema.org/ImageObject">
                <img itemprop="contentUrl" src="img/deck-boat.svg" alt="Атриум «Степь»">

                <meta itemprop="name" content="Атриум «Степь»">
              </div>

              <!-- Ссылки на помещения -->
              <div class="decks__row decks__row--boat-1">
                <a class="decks__room" data-room="22" href="#panorama">
                  Винотека
                </a>
              </div>
              <div class="decks__row decks__row--boat-2">
                <a class="decks__room" data-room="23" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--boat-3">
                <a class="decks__room" data-room="24" href="#panorama">
                  2-местные делюкс
                </a>
              </div>
              <div class="decks__row decks__row--boat-4">
                <a class="decks__room" data-room="25" href="#panorama">
                  Караоке бар
                </a>
              </div>
              <div class="decks__row decks__row--boat-5">
                <a class="decks__room" data-room="26" href="#panorama">
                  Ресторан Енисей
                </a>
              </div>
              <div class="decks__row decks__row--boat-6">
                <a class="decks__room" data-room="27" href="#panorama">
                  Ресторан Улов дня
                </a>
              </div>
              <div class="decks__row decks__row--boat-7">
                <a class="decks__room" data-room="28" href="#panorama">
                  Атриум палубы
                </a>
              </div>
              <div class="decks__row decks__row--boat-8">
                <a class="decks__room" data-room="29" href="#panorama">
                  зал Ресторана
                </a>
              </div>
            </li>
            <li class="decks__item" data-type="sun">
              <div class="decks__image" itemscope itemtype="http://schema.org/ImageObject">
                <img itemprop="contentUrl" src="img/deck-sun.svg" alt="Атриум «Солнечная»">

                <meta itemprop="name" content="Атриум «Солнечная»">
              </div>

              <!-- Ссылки на помещения -->
              <div class="decks__row decks__row--sun-1">
                <a class="decks__room" data-room="30" href="#panorama">
                  Холл Спа-центра
                </a>
              </div>
              <div class="decks__row decks__row--sun-2">
                <a class="decks__room" data-room="30" href="#panorama">
                  Wellness-зона
                </a>
              </div>
              <div class="decks__row decks__row--sun-3">
                <a class="decks__room" data-room="30" href="#panorama">
                  Сауна
                </a>
              </div>
              <div class="decks__row decks__row--sun-4">
                <a class="decks__room" data-room="30" href="#panorama">
                  Хамам
                </a>
              </div>
              <div class="decks__row decks__row--sun-5">
                <a class="decks__room" data-room="30" href="#panorama">
                  Массажный кабинет
                </a>
              </div>
              <div class="decks__row decks__row--sun-6">
                <a class="decks__room" data-room="30" href="#panorama">
                  Соляная комната
                </a>
              </div>
              <div class="decks__row decks__row--sun-7">
                <a class="decks__room" data-room="30" href="#panorama">
                  Фитнес и йога
                </a>
              </div>
              <div class="decks__row decks__row--sun-8">
                <a class="decks__room" data-room="30" href="#panorama">
                  Солнечная палуба
                </a>
              </div>
              <div class="decks__row decks__row--sun-9">
                <a class="decks__room" data-room="30" href="#panorama">
                  Смотровая площадка
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="decks__bottom" id="panorama">
        <div class="scene">
          <h3 class="h3 h3--scene">
            <!-- decks.js -->
          </h3>

          <div class="scene__3d">
            <div class="scene__3d-wrapper">
              <div class="3d-container">

              </div>
              <!-- заглушка -->
              <picture class="scene__image scene__image--test" itemscope itemtype="http://schema.org/ImageObject">
                <source media="(min-width: 1920px)" srcset="img/atrium-prairie-1920.jpg" type="image/jpg">
                <source media="(min-width: 1280px)" srcset="img/atrium-prairie-1280.jpg" type="image/jpg">
                <source media="(min-width: 425px)" srcset="img/atrium-prairie-768.jpg" type="image/jpg">

                <img itemprop="contentUrl" src="img/atrium-prairie-320.jpg" alt="atrium-prairie">

                <meta itemprop="name" content="atrium-prairie">
              </picture>
              <!-- заглушка -->
            </div>

            <div class="scene__swipe">
              <div class="scene__icon">
                <img class="scene__svg scene__svg--mobile" src="img/swipe-mobile.svg" alt="swipe" width="50" height="50">
                <img class="scene__svg scene__svg--desktop" src="img/swipe-desktop.svg" alt="mouse down" width="50" height="50">
              </div>

              <p class="hints hints--scene">
                Нажмите левую кнопку мыши и перетяните, чтобы осмотреться
              </p>
            </div>

            <div class="scene__gallery-toggle">
              <p class="hints hints--gallery">
                Посмотреть каюты
              </p>

              <button class="scene__toggle" type="button" name="gallery-toggle">
                <img class="scene__svg scene__svg--show" src="img/room-show.svg" alt="gallery" width="22" height="22">
                <img class="scene__svg scene__svg--hide" src="img/room-hide.svg" alt="gallery" width="22" height="22">
              </button>
            </div>
          </div>
          <div class="scene__gallery">
            <div class="scene__slider swiper-container">
              <ul class="scene__list swiper-wrapper">
                <li class="scene__item swiper-slide">
                  <div class="scene__image scene__image--slide" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="contentUrl"  src="img/room-1.jpg" alt="room">

                    <meta itemprop="name" content="room">
                  </div>
                  <h5 class="text-small text-small--room">
                    Одноместная каюта
                  </h5>

                  <div class="scene__mask"></div>
                </li>
                <li class="scene__item swiper-slide">
                  <div class="scene__image scene__image--slide" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="contentUrl"  src="img/room-2.jpg" alt="room">

                    <meta itemprop="name" content="room">
                  </div>
                  <h5 class="text-small text-small--room">
                    Делюкс
                  </h5>

                  <div class="scene__mask"></div>
                </li>
                <li class="scene__item swiper-slide">
                  <div class="scene__image scene__image--slide" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="contentUrl"  src="img/room-3.jpg" alt="room">

                    <meta itemprop="name" content="room">
                  </div>
                  <h5 class="text-small text-small--room">
                    Делюкс трехместный
                  </h5>

                  <div class="scene__mask"></div>
                </li>
                <li class="scene__item swiper-slide">
                  <div class="scene__image scene__image--slide" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="contentUrl"  src="img/room-4.jpg" alt="room">

                    <meta itemprop="name" content="room">
                  </div>
                  <h5 class="text-small text-small--room">
                    Одноместная каюта
                  </h5>

                  <div class="scene__mask"></div>
                </li>
                <li class="scene__item swiper-slide">
                  <div class="scene__image scene__image--slide" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="contentUrl"  src="img/room-5.jpg" alt="room">

                    <meta itemprop="name" content="room">
                  </div>
                  <h5 class="text-small text-small--room">
                    Делюкс
                  </h5>

                  <div class="scene__mask"></div>
                </li>
                <li class="scene__item swiper-slide">
                  <div class="scene__image scene__image--slide" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="contentUrl"  src="img/room-6.jpg" alt="room">

                    <meta itemprop="name" content="room">
                  </div>
                  <h5 class="text-small text-small--room">
                    Делюкс трехместный
                  </h5>

                  <div class="scene__mask"></div>
                </li>
              </ul>
            </div>
            <div class="progress progress--scene">
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="rooms" id="rooms">
    <ul class="rooms__list">
      <li class="rooms__item rooms__item--1">
        <div class="rooms__item-container">
          <div class="rooms__wrapper">
            <header class="rooms__header">
              <h4 class="h4 h4--rooms title">
                Стандарт
                <br>
                одноместный
              </h4>

              <p class="h4 h4--rooms-area">
                Площадь - от 8,1 м2 до 13,9 м2
              </p>
            </header>

            <div class="rooms__content">
              <p class="text-small text-small--rooms">
                Насладитесь незабываемым путешествием в дизайнерских интерьерах. Плавно сменяющиеся пейзажи в окнах каюты гармонично дополнят и подчеркнут колоритную обстановку.
              </p>
              <ul class="rooms__services">
                <li class="rooms__service rooms__service--1">
                  Односпальная кровать
                </li>
                <li class="rooms__service rooms__service--2">
                  Шкаф для одежды
                </li>
                <li class="rooms__service rooms__service--3">
                  Холодильник (минибар)
                </li>
                <li class="rooms__service rooms__service--4">
                  Телевизор
                </li>
                <li class="rooms__service rooms__service--5">
                  Радио
                </li>
                <li class="rooms__service rooms__service--6">
                  Кондиционер
                </li>
                <li class="rooms__service rooms__service--7">
                  Санузел
                </li>
                <li class="rooms__service rooms__service--8">
                  Фен
                </li>
                <li class="rooms__service rooms__service--9">
                  Окно
                </li>
                <li class="rooms__service rooms__service--10">
                  Розетка 220V
                </li>
              </ul>

              <div class="rooms__bottom">
                <div class="progress progress--rooms-1">
                  <span></span>
                </div>

                <div class="fraction fraction--rooms-1">
                  <span class="fraction__current fraction__current--rooms">
                    005
                  </span>

                  <span class="fraction__all fraction__all--rooms">
                    020
                  </span>
                </div>

                <div class="rooms__buttons">
                  <button class="button button--arrow-left-rooms prev prev--rooms-1" type="button" name="arrow">
                    <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
                    </svg>
                  </button>

                  <button class="button button--arrow-right-rooms next next--rooms-1" type="button" name="arrow">
                    <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
                    </svg>
                  </button>
                </div>

                <div class="rooms__select">
                  <a class="button button--select-rooms" href="#timetable">
                    <span class="button__text">
                      Выбрать круиз
                    </span>
                    <span class="button__border"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="rooms__slider rooms__slider--1 swiper-container">
            <ul class="rooms__slider-list swiper-wrapper">
              <?php
                for ($i=0; $i < 19; $i++) {
                  ?>
                    <li class="rooms__slider-item swiper-slide">
                      <picture class="rooms__image" itemscope itemtype="http://schema.org/ImageObject">
                        <source media="(min-width: 1920px)" srcset="img/rooms-1-1920.jpg" type="image/jpg">
                        <source media="(min-width: 1280px)" srcset="img/rooms-1-1280.jpg" type="image/jpg">
                        <source media="(min-width: 425px)" srcset="img/rooms-1-768.jpg" type="image/jpg">

                        <img itemprop="contentUrl" src="img/rooms-1-320.jpg" alt="rooms">

                        <meta itemprop="name" content="rooms">
                      </picture>
                    </li>
                  <?php
                }
              ?>
            </ul>

            <div class="rooms__mask"></div>
          </div>
        </div>
      </li>
      <li class="rooms__item rooms__item--2">
        <div class="rooms__item-container">
          <div class="rooms__wrapper">
            <header class="rooms__header">
              <h4 class="h4 h4--rooms title">
                Делюкс
              </h4>

              <p class="h4 h4--rooms-area">
                Площадь - от 12,5 м2 до 18,9 м2
              </p>
            </header>

            <div class="rooms__content">
              <p class="text-small text-small--rooms">
                Насладитесь незабываемым путешествием в дизайнерских интерьерах.
                Плавно сменяющиеся пейзажи в окнах каюты гармонично дополнят и подчеркнут колоритную обстановку.
              </p>
              <ul class="rooms__services">
                <li class="rooms__service rooms__service--1">
                  Двуспальная кровать
                </li>
                <li class="rooms__service rooms__service--2">
                  Шкаф для одежды
                </li>
                <li class="rooms__service rooms__service--3">
                  Холодильник (минибар)
                </li>
                <li class="rooms__service rooms__service--4">
                  Телевизор
                </li>
                <li class="rooms__service rooms__service--5">
                  Радио
                </li>
                <li class="rooms__service rooms__service--6">
                  Кондиционер
                </li>
                <li class="rooms__service rooms__service--7">
                  Санузел
                </li>
                <li class="rooms__service rooms__service--8">
                  Фен
                </li>
                <li class="rooms__service rooms__service--9">
                  Телефон
                </li>
                <li class="rooms__service rooms__service--10">
                  Два окна
                </li>
                <li class="rooms__service rooms__service--11">
                  Розетка 220V
                </li>
              </ul>

              <div class="rooms__bottom">
                <div class="progress progress--rooms-2">
                  <span></span>
                </div>

                <div class="fraction fraction--rooms-2">
                  <span class="fraction__current fraction__current--rooms">
                    005
                  </span>

                  <span class="fraction__all fraction__all--rooms">
                    020
                  </span>
                </div>

                <div class="rooms__buttons">
                  <button class="button button--arrow-left-rooms prev prev--rooms-2" type="button" name="arrow">
                    <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
                    </svg>
                  </button>

                  <button class="button button--arrow-right-rooms next next--rooms-2" type="button" name="arrow">
                    <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
                    </svg>
                  </button>
                </div>

                <div class="rooms__select">
                  <a class="button button--select-rooms" href="#timetable">
                    <span class="button__text">
                      Выбрать круиз
                    </span>
                    <span class="button__border"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="rooms__slider rooms__slider--1 swiper-container">
            <ul class="rooms__slider-list swiper-wrapper">
              <?php
                for ($i=0; $i < 15; $i++) {
                  ?>
                    <li class="rooms__slider-item swiper-slide">
                      <picture class="rooms__image" itemscope itemtype="http://schema.org/ImageObject">
                        <source media="(min-width: 1920px)" srcset="img/rooms-2-1920.jpg" type="image/jpg">
                        <source media="(min-width: 1280px)" srcset="img/rooms-2-1280.jpg" type="image/jpg">
                        <source media="(min-width: 425px)" srcset="img/rooms-2-768.jpg" type="image/jpg">

                        <img itemprop="contentUrl" src="img/rooms-2-320.jpg" alt="rooms">

                        <meta itemprop="name" content="rooms">
                      </picture>
                    </li>
                  <?php
                }
              ?>
            </ul>

            <div class="rooms__mask"></div>
          </div>
        </div>
      </li>
      <li class="rooms__item rooms__item--3">
        <div class="rooms__item-container">
          <div class="rooms__wrapper">
            <header class="rooms__header">
              <h4 class="h4 h4--rooms title">
                Делюкс
                <br>
                трехместный
              </h4>

              <p class="h4 h4--rooms-area">
                Площадь - 17,7 м2
              </p>
            </header>

            <div class="rooms__content">
              <p class="text-small text-small--rooms">
                Насладитесь незабываемым путешествием в дизайнерских интерьерах. Плавно сменяющиеся пейзажи в окнах каюты гармонично дополнят и подчеркнут колоритную обстановку.
              </p>
              <ul class="rooms__services">
                <li class="rooms__service rooms__service--1">
                  Двуспальная кровать
                </li>
                <li class="rooms__service rooms__service--2">
                  Шкаф для одежды
                </li>
                <li class="rooms__service rooms__service--3">
                  Холодильник (минибар)
                </li>
                <li class="rooms__service rooms__service--4">
                  Телевизор
                </li>
                <li class="rooms__service rooms__service--5">
                  Радио
                </li>
                <li class="rooms__service rooms__service--6">
                  Кондиционер
                </li>
                <li class="rooms__service rooms__service--7">
                  Санузел
                </li>
                <li class="rooms__service rooms__service--8">
                  Фен
                </li>
                <li class="rooms__service rooms__service--9">
                  Телефон
                </li>
                <li class="rooms__service rooms__service--10">
                  Два окна
                </li>
                <li class="rooms__service rooms__service--11">
                  Розетка 220V
                </li>
                <li class="rooms__service rooms__service--12">
                  Диван
                </li>
              </ul>

              <div class="rooms__bottom">
                <div class="progress progress--rooms-3">
                  <span></span>
                </div>

                <div class="fraction fraction--rooms-3">
                  <span class="fraction__current fraction__current--rooms">
                    005
                  </span>

                  <span class="fraction__all fraction__all--rooms">
                    020
                  </span>
                </div>

                <div class="rooms__buttons">
                  <button class="button button--arrow-left-rooms prev prev--rooms-3" type="button" name="arrow">
                    <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
                    </svg>
                  </button>

                  <button class="button button--arrow-right-rooms next next--rooms-3" type="button" name="arrow">
                    <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
                    </svg>
                  </button>
                </div>

                <div class="rooms__select">
                  <a class="button button--select-rooms" href="#timetable">
                    <span class="button__text">
                      Выбрать круиз
                    </span>
                    <span class="button__border"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="rooms__slider rooms__slider--1 swiper-container">
            <ul class="rooms__slider-list swiper-wrapper">
              <?php
                for ($i=0; $i < 20; $i++) {
                  ?>
                    <li class="rooms__slider-item swiper-slide">
                      <picture class="rooms__image" itemscope itemtype="http://schema.org/ImageObject">
                        <source media="(min-width: 1920px)" srcset="img/rooms-3-1920.jpg" type="image/jpg">
                        <source media="(min-width: 1280px)" srcset="img/rooms-3-1280.jpg" type="image/jpg">
                        <source media="(min-width: 425px)" srcset="img/rooms-3-768.jpg" type="image/jpg">

                        <img itemprop="contentUrl" src="img/rooms-3-320.jpg" alt="rooms">

                        <meta itemprop="name" content="rooms">
                      </picture>
                    </li>
                  <?php
                }
              ?>
            </ul>

            <div class="rooms__mask"></div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <section class="emotions" id="emotions">
    <div class="emotions__wrapper">
      <h2 class="h2 h2--emotions title">
        Мы позаботились о том, чтобы вы получили максимум
        <br>
        новых впечатлений и положительных эмоций.
      </h2>

      <svg class="emotions__subline emotions__subline--top" width="1820" height="10">
        <use xlink:href="#icon-line-emotions"></use>
      </svg>

      <div class="emotions__left">
        <div class="emotions__images">
          <div class="emotions__slider swiper-container">
            <ul class="emotions__list emotions__list--images swiper-wrapper">
              <li class="emotions__item emotions__item--image swiper-slide">
                <picture class="emotions__image" itemscope itemtype="http://schema.org/ImageObject">
                  <source media="(min-width: 1920px)" srcset="img/emotions-1-1920.jpg" type="image/jpg">
                  <source media="(min-width: 1280px)" srcset="img/emotions-1-1280.jpg" type="image/jpg">
                  <source media="(min-width: 425px)" srcset="img/emotions-1-768.jpg" type="image/jpg">

                  <img itemprop="contentUrl" src="img/emotions-1-320.jpg" alt="emotions">

                  <meta itemprop="name" content="emotions">
                </picture>
              </li>
              <li class="emotions__item emotions__item--image swiper-slide">
                <picture class="emotions__image" itemscope itemtype="http://schema.org/ImageObject">
                  <source media="(min-width: 1920px)" srcset="img/emotions-2-1920.jpg" type="image/jpg">
                  <source media="(min-width: 1280px)" srcset="img/emotions-2-1280.jpg" type="image/jpg">
                  <source media="(min-width: 425px)" srcset="img/emotions-2-768.jpg" type="image/jpg">

                  <img itemprop="contentUrl" src="img/emotions-2-320.jpg" alt="emotions">

                  <meta itemprop="name" content="emotions">
                </picture>
              </li>
              <li class="emotions__item emotions__item--image swiper-slide">
                <picture class="emotions__image" itemscope itemtype="http://schema.org/ImageObject">
                  <source media="(min-width: 1920px)" srcset="img/emotions-3-1920.jpg" type="image/jpg">
                  <source media="(min-width: 1280px)" srcset="img/emotions-3-1280.jpg" type="image/jpg">
                  <source media="(min-width: 425px)" srcset="img/emotions-3-768.jpg" type="image/jpg">

                  <img itemprop="contentUrl" src="img/emotions-3-320.jpg" alt="emotions">

                  <meta itemprop="name" content="emotions">
                </picture>
              </li>
            </ul>
          </div>

          <svg class="emotions__subline emotions__subline--images" width="1820" height="10">
            <use xlink:href="#icon-line-emotions"></use>
          </svg>
        </div>
      </div>
      <div class="emotions__right">
        <ul class="emotions__list emotions__list--text">
          <li class="emotions__item emotions__item--text">
            <h4 class="h4 h4--emotions title">
              Лучшие краеведы
              <br>
              Русского Севера
            </h4>

            <p class="text text--emotions">
              За короткое, пусть и насыщенное, путешествие невозможно в полной
              мере постичь всю магию и душу Сибири. Для того, чтобы ваше знакомство с Русским Севером состоялось более близко,
              мы пригласили самых опытных экспертов по части истории и жизни Красноярского края. За короткое, пусть и насыщенное, путешествие невозможно в полной
              мере постичь всю магию и душу Сибири. Для того, чтобы ваше знакомство с Русским Севером состоялось более близко,
              мы пригласили самых опытных экспертов по части истории и жизни Красноярского края.
            </p>

            <button class="emotions__more" type="button" name="more">
              <span class="emotions__more-default">
                Развернуть
              </span>
              <span class="emotions__more-active">
                Cвернуть
              </span>
              <svg width="16" height="12">
                <use xlink:href="#icon-emotions-toggle"></use>
              </svg>
            </button>
          </li>
          <li class="emotions__item emotions__item--text">
            <h4 class="h4 h4--emotions title">
              Вертолетный тур
              <br>
              на плато Путорана
            </h4>

            <p class="text text--emotions">
              Знакомство с плато Путорана с высоты птичьего полета - одно
              из самых захватывающих впечатлений экспедиции. На большом пассажирском вертолете МИ-8Т вы совершите незабываемую прогулку над одним из самых красивых, удивительных и загадочных мест планеты Знакомство с плато Путорана с высоты птичьего полета - одно
              из самых захватывающих впечатлений экспедиции. На большом пассажирском вертолете МИ-8Т вы совершите незабываемую прогулку над одним из самых красивых, удивительных и загадочных мест планеты
            </p>

            <button class="emotions__more" type="button" name="more">
              <span class="emotions__more-default">
                Развернуть
              </span>
              <span class="emotions__more-active">
                Cвернуть
              </span>
              <svg width="16" height="12">
                <use xlink:href="#icon-emotions-toggle"></use>
              </svg>
            </button>
          </li>
          <li class="emotions__item emotions__item--text">
            <h4 class="h4 h4--emotions title">
              Экипировка
              <br>
              для экспедиции
            </h4>

            <p class="text text--emotions">
              Главное в экспедиции — это не только готовность к новым впечатлениям, но еще комфорт и безопасность. Вы отправитесь
              в сибирскую тайгу, населенную различными обитателями фауны — животными и насекомыми.
              Для того, чтобы ничего не отвлекало вас от красоты заповедных лесов, вы получите специальную экипировку подходящего размера.
            </p>

            <button class="emotions__more" type="button" name="more">
              <span class="emotions__more-default">
                Развернуть
              </span>
              <span class="emotions__more-active">
                Cвернуть
              </span>
              <svg width="16" height="12">
                <use xlink:href="#icon-emotions-toggle"></use>
              </svg>
            </button>
          </li>
        </ul>
      </div>

      <svg class="emotions__subline emotions__subline--bottom" width="1820" height="10">
        <use xlink:href="#icon-line-emotions"></use>
      </svg>
    </div>
  </section>

  <section class="flavour" id="flavour">
    <div class="flavour__wrapper">
      <div class="flavour__left">
        <h2 class="h2 h2--flavour title">
          Настоящий вкус
          <br>
          Сибири
        </h2>

        <div class="flavour__slider swiper-container">
          <ul class="flavour__list swiper-wrapper">
            <li class="flavour__item swiper-slide">
              <div class="flavour__image" itemscope itemtype="http://schema.org/ImageObject">
                <picture>
                  <source media="(min-width: 1920px)" srcset="img/flavour-1-1920.jpg" type="image/jpg">
                  <source media="(min-width: 1280px)" srcset="img/flavour-1-1280.jpg" type="image/jpg">

                  <img itemprop="contentUrl" src="img/flavour-1-320.jpg" alt="картинка">
                </picture>

                <meta itemprop="name" content="картинка">
              </div>
            </li>
            <li class="flavour__item swiper-slide">
              <div class="flavour__image" itemscope itemtype="http://schema.org/ImageObject">
                <picture>
                  <source media="(min-width: 1920px)" srcset="img/flavour-2-1920.jpg" type="image/jpg">
                  <source media="(min-width: 1280px)" srcset="img/flavour-2-1280.jpg" type="image/jpg">

                  <img itemprop="contentUrl" src="img/flavour-2-320.jpg" alt="картинка">
                </picture>

                <meta itemprop="name" content="картинка">
              </div>
            </li>
          </ul>
        </div>

        <div class="flavour__buttons">
          <button class="button button--arrow-left-flavour prev prev--flavour" type="button" name="arrow">
            <svg class="button__icon button__icon--brown" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
            </svg>
          </button>

          <button class="button button--arrow-right-flavour next next--flavour" type="button" name="arrow">
            <svg class="button__icon button__icon--brown" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
            </svg>
          </button>
        </div>
      </div>
      <div class="flavour__content">
        <div class="text text--flavour">
          <p>
            Без национальной кухни невозможно полностью понять историю, прочувствовать особенности традиций, быта и культуры. Для реализации настоящего сибирского опыта мы выбрали надёжного гастрономического партнёра - Bellini group - холдинг с безупречной репутацией и с 15-летним опытом работы в Красноярском крае.
          </p>
          <p>
            Специальное меню для теплохода «Максим Горький» разработал шеф-повар красноярского ресторана сибирской кухни «Хозяин тайги» Алексей Ровинец в коллаборации с приглашённым шефом Михаилом Хмелининым.
          </p>
          <p>
            В качестве эксклюзивного дополнения гостям теплохода будет предложен гастрономический рыбный ресторан «Улов дня». Почувствуйте вкус Сибири в Енисейской экспедиции на теплоходе «Максим Горький»!
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="rest" id="rest">
    <div class="rest__wrapper">
      <header class="rest__header">
        <h2 class="h2 h2--rest title">
          Отдых
          <br>
          с лучшим видом
        </h2>

        <div class="rest__tabs-wrapper">
          <ul class="rest__tabs">
            <li class="rest__tab active">
              <button class="rest__button active" type="button" name="rest">
                Сибирский паб
              </button>
              <p class="rest__text visually-hidden">
                Посмотрите в окно, оглянитесь вокруг, прочувствуйте атмосферу Сибири и русского Севера. Закажите подходящие к настроению закуски и напитки. Традиционные напитки и закуски, легкая музыка и приятное общение – что еще нужно для хорошего вечера.
              </p>
            </li>
            <li class="rest__tab">
              <button class="rest__button" type="button" name="rest">
                Винотека
              </button>
              <p class="rest__text visually-hidden">
                Винотека в окно, оглянитесь вокруг, прочувствуйте атмосферу Сибири и русского Севера. Закажите подходящие к настроению закуски и напитки. Традиционные напитки и закуски, легкая музыка и приятное общение – что еще нужно для хорошего вечера.
              </p>
            </li>
            <li class="rest__tab">
              <button class="rest__button" type="button" name="rest">
                Улов дня
              </button>
              <p class="rest__text visually-hidden">
                Улов дня в окно, оглянитесь вокруг, прочувствуйте атмосферу Сибири и русского Севера. Закажите подходящие к настроению закуски и напитки. Традиционные напитки и закуски, легкая музыка и приятное общение – что еще нужно для хорошего вечера.
              </p>
            </li>
          </ul>
        </div>
      </header>

      <div class="rest__slider-wrapper">
        <div class="rest__slider swiper-container">
          <ul class="rest__list swiper-wrapper">
            <!-- Templates id="rest-slides-" -->
          </ul>
        </div>
      </div>

      <div class="rest__content">
        <p class="text-small text-small--rest">
          <!-- Текст подставляется rest.js из-под кнопок -->
        </p>

        <div class="rest__buttons">
          <button class="button button--arrow-left-rest prev prev--rest" type="button" name="arrow">
            <svg class="button__icon button__icon--brown" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
            </svg>
          </button>

          <div class="fraction fraction--rest">
            <span class="fraction__current fraction__current--rest">
              005
            </span>

            <span class="fraction__all fraction__all--rest">
              020
            </span>
          </div>

          <button class="button button--arrow-right-rest next next--rest" type="button" name="arrow">
            <svg class="button__icon button__icon--brown" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
            </svg>
          </button>
        </div>
      </div>

      <template id="rest-slides-0">
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
      </template>
      <template id="rest-slides-1">
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
      </template>
      <template id="rest-slides-2">
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
        <li class="rest__item swiper-slide">
          <picture class="rest__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/rest-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/rest-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/rest-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/rest-320.jpg" alt="rest">

            <meta itemprop="name" content="rest">
          </picture>
        </li>
      </template>
    </div>
  </section>

  <section class="video"id="video">
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

  <section class="leisure" id="leisure">
    <div class="leisure__wrapper">
      <header class="leisure__header">
        <h2 class="h2 h2--leisure title">
          Досуг
          <br>
          на борту
        </h2>

        <p class="text text--leisure title">
          Для Вас работает SPA-зона с обширным набором услуг: фитнес зал,
          <br>
          массажный кабинет, сибирский банный комплекс. В вечернее пребывание
          <br>
          на борту мы хотели добавить что-то по-сибирски душевное, поэтому
          <br>
          на шлюпочной палубе всех желающих ждет наш караоке клуб.
        </p>
      </header>

      <div class="leisure__slider-wrapper">
        <div class="leisure__slider swiper-container">
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
      <div id="cave"></div>
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
          <picture class="cave__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/cave-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/cave-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/cave-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/cave-320.jpg" alt="Cave">

            <meta itemprop="name" content="Cave">
          </picture>
        </li>
        <li class="cave__item cave__item--images swiper-slide">
          <picture class="cave__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/cave-1920-2.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/cave-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/cave-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/cave-320.jpg" alt="Cave">

            <meta itemprop="name" content="Cave">
          </picture>
        </li>
        <li class="cave__item cave__item--images swiper-slide">
          <picture class="cave__image" itemscope itemtype="http://schema.org/ImageObject">
            <source media="(min-width: 1360px)" srcset="img/cave-1920.jpg" type="image/jpg">
            <source media="(min-width: 1024px)" srcset="img/cave-1280.jpg" type="image/jpg">
            <source media="(min-width: 425px)" srcset="img/cave-768.jpg" type="image/jpg">

            <img itemprop="contentUrl" src="img/cave-320.jpg" alt="Cave">

            <meta itemprop="name" content="Cave">
          </picture>
        </li>
      </ul>

      <div class="cave__mask"></div>
    </div>
  </section>

  <section class="timetable" id="timetable">
    <div class="timetable__wrapper">
      <header class="timetable__header">
        <h2 class="h4 h4--timetable title">
          Расписание
        </h2>
        <p class="hints hints--timetable title">
          *Стоимость указана за одного
          <br>
           человека в двухместном
           <br>
           размещении
        </p>
      </header>
      <div class="timetable__slider-wrapper">
        <div class="timetable__slider timetable__slider--months swiper-container">
          <ul class="timetable__list timetable__list--months swiper-wrapper">
            <li class="timetable__item timetable__item--months swiper-slide">
              <h5 class="timetable__title">
                Май
              </h5>
            </li>
            <li class="timetable__item timetable__item--months swiper-slide">
              <h5 class="timetable__title">
                Июнь
              </h5>
            </li>
            <li class="timetable__item timetable__item--months swiper-slide">
              <h5 class="timetable__title">
                Июль
              </h5>
            </li>
            <li class="timetable__item timetable__item--months swiper-slide">
              <h5 class="timetable__title">
                Сентябрь
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
                    июня
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
                    июля
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
                    сентября
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

  <section class="reviews" id="reviews">
    <div class="reviews__wrapper">
      <h2 class="h2 h2--reviews title">
        Яркие
        <br>
        впечатления
        <br>
        наших гостей
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

  <section class="subscribe" id="subscribe">
    <div class="subscribe__wrapper">
      <div class="subscribe__text">
        <h3 class="h3 h3--subscribe title">
          Подписка на новости
        </h3>

        <div class="text text--subscribe">
          <p>
            Никакого спама! Только полезные новости о премиумных круизах компании «ВодоходЪ»
          </p>
        </div>
      </div>

      <form class="subscribe__form" action="index.html" method="post" id="subscribe-form">
        <div class="subscribe__field">
          <input class="subscribe__input" value="" type="email" id="email-subscribe" name="email-subscribe" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" required>
          <label class="subscribe__label" for="email-subscribe">
            Введите ваш e-mail
          </label>
          <span class="subscribe__error">
            Неправильно введён e-mail
          </span>
        </div>
        <button class="button button--subscribe" type="submit" name="subscribe" disabled>
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
