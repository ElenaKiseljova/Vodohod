<?php
  include("header.php");
?>

<main class="page-main">
  <section class="promo">
    <div class="promo__wrapper">
      <p class="text text--promo">
        Енисейская экспедиция с полетом на Плато Путорана.
        Енисей – одна из самых протяженных, полноводных рек мира – всегда манила
        исследователей, путешественников и любителей бросить вызов дикой природе.
      </p>

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

  <section class="subscribe">
    <div class="subscribe__wrapper">
      <div class="subscribe__text">
        <h3 class="h3 h3--subscribe">
          Подписка на новости
        </h3>

        <p class="text text--subscribe">
          Никакого спама! Только полезные новости о премиумных круизах компании «ВодоходЪ»
        </p>
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
