<?php
  include("header.php");
?>

<main class="page-main">
  <div class="page-main__wrapper">
    <h1 class="h1">
      Заголовок 1
    </h1>
    <h2 class="h2">
      Заголовок 2
    </h2>
    <h2 class="h3">
      Заголовок 3
    </h2>
    <h2 class="h4">
      Заголовок 4
    </h2>
    <h2 class="h5">
      Заголовок 5
    </h2>
    <h2 class="h6">
      Заголовок 6
    </h2>
    <p class="text">
      Текст
    </p>
    <p class="text-small">
      Текст Мелкий
    </p>
    <blockquote class="quote" cite="http://">
      <p>
        Цитата
      </p>
    </blockquote>
    <p class="hints">
      Подсказка
    </p>
    <nav class="navigation" role="navigation">
      <a class="navigation__link" href="#">
        Пункт навигации
      </a>
    </nav>

    <h1 class="h1">UI Kit</h1>

    <div class="page-main__row">
      <button class="button button--select" type="button" name="select">
        <span class="button__text">
          Выбрать круиз
        </span>
        <span class="button__border"></span>
      </button>
    </div>

    <div class="page-main__row">
      <button class="button button--order" type="button" name="order">
        <span class="button__text">
          Заказать круиз
        </span>

        <svg width="314" height="60">
          <use xlink:href="#icon-order"></use>
        </svg>
      </button>
    </div>

    <div class="page-main__row">
      <a class="button button--reservation" href="">
        <span class="button__text">
          Забронировать
        </span>
        <svg width="380" height="90">
          <use xlink:href="#icon-reservation"></use>
        </svg>
      </a>
    </div>

    <div class="page-main__row">
      <ul class="social">
        <li class="social__item">
          <a class="button button--social" href="" target="_blank">
            <span class="visually-hidden">
              Facebook
            </span>
            <svg width="16" height="16">
              <use xlink:href="#icon-facebook"></use>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a class="button button--social" href="" target="_blank">
            <span class="visually-hidden">
              Instagram
            </span>
            <svg width="16" height="16">
              <use xlink:href="#icon-instagram"></use>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a class="button button--social" href="" target="_blank">
            <span class="visually-hidden">
              Вконтакте
            </span>
            <svg width="18" height="12">
              <use xlink:href="#icon-vk"></use>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a class="button button--social" href="" target="_blank">
            <span class="visually-hidden">
              Однокласники
            </span>
            <svg width="18" height="18">
              <use xlink:href="#icon-odnoklassniki"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <div class="subscribe">
      <div class="page-main__row">
        <button class="button button--menu" type="button" name="menu">
          <span class="button__icon">
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                   fill-rule="evenodd"
                   clip-rule="evenodd"
                   d="M2 7.64715L7.64715 2H8.35304V2.70589L2.70589 8.35304H2V7.64715ZM2.70554 12.5888L12.5881 2.70628H13.2939V3.41217L3.41144 13.2947L2.70554 13.2947V12.5888ZM13.9999 8.35272L8.35272 13.9999H7.64683V13.294L13.294 7.64683H13.9999V8.35272Z"
              >
                <animate id="openMenuAnimate" attributeName="d"
                         from="M2 7.64715L7.64715 2H8.35304V2.70589L2.70589 8.35304H2V7.64715ZM2.70554 12.5888L12.5881 2.70628H13.2939V3.41217L3.41144 13.2947L2.70554 13.2947V12.5888ZM13.9999 8.35272L8.35272 13.9999H7.64683V13.294L13.294 7.64683H13.9999V8.35272Z"

                         to="M13.2957 1.99993L8.00169 7.29337L2.70734 1.99902L2.00145 1.99902L2.00145 2.70492L7.29576 7.99922L2.00098 13.2935V13.9994L2.70687 13.9994L8.00116 8.70561L13.2946 13.9991H14.0005V13.2932L8.70709 7.99975L14.0015 2.70583V1.99993L13.2957 1.99993Z"
                         dur="500ms"
                         begin="indefinite"
                         repeatCount="1"
                         fill="freeze"
                         calcMode="paced"
                         />

                  <animate id="closeMenuAnimate" attributeName="d"
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

          <span class="button__text">
            Меню
          </span>
        </button>
      </div>

      <div class="page-main__row">
        <button class="button button--wheel" type="button" name="wheel">
          <span class="button__text">
            Заказать круиз
          </span>

          <span class="button__icon">
            <svg width="20" height="20">
              <use xlink:href="#icon-wheel"></use>
            </svg>
          </span>
        </button>
      </div>

      <div class="page-main__row">
        <button class="button button--arrow-left" type="button" name="arrow">
          <svg width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
          </svg>
        </button>
        <button class="button button--arrow-right" type="button" name="arrow">
          <svg width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="big-ar-r" fill-rule="evenodd" clip-rule="evenodd" d="M5.59794 5.99998L0 0.667756L0.701032 0L7 5.99998L0.701032 12L0 11.3322L5.59794 5.99998Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6323 5.99992L0 4.4451L0.701032 3.77734L3.03437 5.99992L0.701032 8.2225L0 7.55474L1.6323 5.99992Z" />
          </svg>
        </button>
      </div>

      <div class="page-main__row">
        <button class="button button--play" type="button" name="play" aria-label="Включить/выключить видео">
          <span class="button__icon">
            <svg width="13" height="16">
              <use xlink:href="#icon-play"></use>
            </svg>
          </span>
        </button>
      </div>
    </div>
    <div class="page-main__row">

    </div>
  </div>
  <div class="subscribe">
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
  </div>
</main>

<?php
  include("footer.php");
?>
