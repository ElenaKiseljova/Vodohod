
    <footer class="page-footer" itemscope itemtype="http://schema.org/Organization">
      <div class="page-footer__wrapper">
        <div class="phone phone--footer-left">
          <h6>
            Для индивидуальных заказчиков:
          </h6>

          <a href="tel:+74954454650">
            <span itemprop="telephone">
              +7 (495) 445 46 50
            </span>
          </a>

          <a href="mail:premium@vodohod.ru">
            <span itemprop="email">
              premium@vodohod.ru
            </span>
          </a>
        </div>

        <div class="page-footer__center">
          <svg width="200" height="12" aria-label="Узор">
            <use xlink:href="#icon-pattern-footer"></use>
          </svg>

          <a class="logo logo--footer" href="#">
            <svg width="92" height="30" aria-label="Логотип">
              <use xlink:href="#icon-logo"></use>
            </svg>
            <span class="visually-hidden" itemprop="name">
              ВодоходЪ - круизы и путешествия
            </span>
          </a>

          <address class="page-footer__text page-footer__text--center" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="postalCode">125040</span>,
            <span itemprop="addressLocality">г. Москва</span>,
            <span itemprop="streetAddress">Ленинградский проспект, д. 15, стр. 14, этаж 4, пом. V</span>
          </address>

          <ul class="social social--footer">
            <li class="social__item social__item--footer">
              <a class="button button--social" href="" target="_blank">
                <span class="visually-hidden">
                  Facebook
                </span>
                <svg width="16" height="16">
                  <use xlink:href="#icon-facebook"></use>
                </svg>
              </a>
            </li>
            <li class="social__item social__item--footer">
              <a class="button button--social" href="" target="_blank">
                <span class="visually-hidden">
                  Instagram
                </span>
                <svg width="16" height="16">
                  <use xlink:href="#icon-instagram"></use>
                </svg>
              </a>
            </li>
            <li class="social__item social__item--footer">
              <a class="button button--social" href="" target="_blank">
                <span class="visually-hidden">
                  Вконтакте
                </span>
                <svg width="18" height="12">
                  <use xlink:href="#icon-vk"></use>
                </svg>
              </a>
            </li>
            <li class="social__item social__item--footer">
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

        <div class="phone phone--footer-right">
          <h6>
            Для корпоративных заказчиков:
          </h6>

          <a href="tel:+749515046370">
            <span itemprop="telephone">
              +7 (495) 150-46-37
            </span>
          </a>

          <a href="mail:corp@vodohod.ru">
            <span itemprop="email">
              corp@vodohod.ru
            </span>
          </a>
        </div>

        <div class="page-footer__bottom">
          <p class="page-footer__text page-footer__text--copyright">
            © 2020, ВодоходЪ
          </p>
          <p class="page-footer__text page-footer__text--privacy">
            <a href="#">Политика конфиденциальности</a>
          </p>
          <p class="page-footer__text page-footer__text--offerts">
            <a href="#">Публичная оферта</a>
          </p>
          <p class="page-footer__text page-footer__text--number">
            <span>Реестровый номер туроператора</span> <span>серия РТО № 002057</span>
          </p>
          <p class="page-footer__text page-footer__text--creators">
            Дизайн и разработка сайта:
            <a href="#">
              <span>
                TODO Agency
              </span>
            </a>
          </p>
          <a class="button button--totop" href="#top">
            <svg class="button__icon button__icon--white" width="15" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="big-ar-l" fill-rule="evenodd" clip-rule="evenodd" d="M1.40206 5.99998L7 0.667756L6.29897 0L-9.93071e-08 5.99998L6.29897 12L7 11.3322L1.40206 5.99998Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3677 5.99992L7 4.4451L6.29897 3.77734L3.96563 5.99992L6.29897 8.2225L7 7.55474L5.3677 5.99992Z" />
            </svg>
          </a>
        </div>
      </div>
    </footer>

    <!-- Всплывающие окна -->
    <section class="popup popup--order">
      <button class="popup__close button button--close" type="button" name="close">
        <span class="visually-hidden">Закрыть</span>
        <span class="button__icon">
          <svg width="14" height="14">
            <use xlink:href="#icon-close"></use>
          </svg>
        </span>
      </button>

      <div class="popup__wrapper">
        <h4 class="h4 h4--popup">
          Заказать круиз
        </h4>

        <form class="form form--popup" id="order-popup" action="" method="post">
          <div class="form__row">
            <input class="form__field form__field--popup" id="name-2" type="text" name="name-2" pattern="[a-zA-Zа-яА-Я ]{2,}">

            <label class="form__label" for="name-2">Как к вам обращаться?</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row">
            <input class="form__field form__field--popup" id="phone-2" type="tel" name="phone-2" pattern="[0-9-+() ]{9,}">

            <label class="form__label" for="phone-2">Контактный телефон</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row">
            <input class="form__field form__field--popup" id="email-2" type="email" name="email-2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}">

            <label class="form__label" for="email-2">Ваш email</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row form__row--message">
            <textarea class="form__field form__field--message" id="message-2" name="message-2"></textarea>

            <label class="form__label" for="message-2">Здесь вы можете задать интересующие вас вопросы</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__checkbox form__checkbox--privacy">
            <input class="visually-hidden" type="checkbox" id="privacy-2" name="privacy-2" required checked>

            <label class="form__checkbox-label" for="privacy-2">
              Я согласен на обработку моих персональных данных
            </label>
          </div>

          <div class="form__checkbox form__checkbox--news">
            <input class="visually-hidden" type="checkbox" id="news-2" name="news-2">

            <label class="form__checkbox-label" for="news-2">
              Я согласен на получение новостей и персональных предложений
            </label>
          </div>

          <button class="button button--order" type="submit" name="order" disabled>
            <span class="button__text">
              Заказать круиз
            </span>

            <svg width="314" height="60">
              <use xlink:href="#icon-order"></use>
            </svg>
          </button>
        </form>
      </div>
    </section>

    <section class="popup popup--download">
      <button class="popup__close button button--close" type="button" name="close">
        <span class="visually-hidden">Закрыть</span>
        <span class="button__icon">
          <svg width="14" height="14">
            <use xlink:href="#icon-close"></use>
          </svg>
        </span>
      </button>

      <div class="popup__wrapper">
        <h4 class="h4 h4--popup">
          Скачать брошюру
        </h4>

        <form class="form form--popup" id="download-popup" action="" method="post">
          <div class="form__row form__row--popup">
            <input class="form__field form__field--popup" id="name-3" type="text" name="name-3" pattern="[a-zA-Zа-яА-Я ]{2,}">

            <label class="form__label" for="name-3">Как к вам обращаться?</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row form__row--popup">
            <input class="form__field form__field--popup" id="email-3" type="email" name="email-3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}">

            <label class="form__label" for="email-3">Ваш email</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__checkbox form__checkbox--privacy">
            <input class="visually-hidden" type="checkbox" id="privacy-3" name="privacy-3" required checked>

            <label class="form__checkbox-label" for="privacy-3">
              Я согласен на обработку моих персональных данных
            </label>
          </div>

          <div class="form__checkbox form__checkbox--news">
            <input class="visually-hidden" type="checkbox" id="news-3" name="news-3">

            <label class="form__checkbox-label" for="news-3">
              Я согласен на получение новостей и персональных предложений
            </label>
          </div>

          <button class="button button--order" type="submit" name="download" disabled>
            <span class="button__text">
              Отправить
            </span>

            <svg width="314" height="60">
              <use xlink:href="#icon-order"></use>
            </svg>
          </button>
        </form>
      </div>
    </section>

    <section class="cookie">
      <button class="button button--cookie" type="button" name="close">
        <span class="visually-hidden">Закрыть</span>
        <span class="button__icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2947 0.999934L7.00071 6.29337L1.70637 0.999023L1.00047 0.999023L1.00047 1.70492L6.29478 6.99922L1 12.2935V12.9994L1.70589 12.9994L7.00019 7.70561L12.2936 12.9991H12.9995V12.2932L7.70612 6.99975L13.0006 1.70583V0.999934L12.2947 0.999934Z" fill="#A78D65"/>
            <path d="M6.29606 2.00098L5.00195 0.708001L5.00195 0.00210693L5.70784 0.00210731L7.00195 1.29508L7.00195 2.00098L6.29606 2.00098Z" fill="#DCCCB5"/>
            <path d="M12.002 6.29508L13.2949 5.00097L14.0008 5.00097L14.0008 5.70686L12.7078 7.00098L12.002 7.00098L12.002 6.29508Z" fill="#DCCCB5"/>
            <path d="M2.00195 7.70589L0.708977 9.00001L0.00308325 9.00001L0.00308379 8.29411L1.29606 7L2.00195 7L2.00195 7.70589Z" fill="#DCCCB5"/>
            <path d="M7.00195 1.29314L8.29493 -0.000975846L9.00082 -0.000976582L9.00082 0.704918L7.70785 1.99903L7.00195 1.99903L7.00195 1.29314Z" fill="#DCCCB5"/>
            <path d="M12.7078 7.00098L14.002 8.29395L14.002 8.99985L13.2961 8.99985L12.002 7.70687L12.002 7.00098L12.7078 7.00098Z" fill="#DCCCB5"/>
            <path d="M1.29606 7L0.00194625 5.70702L0.00194555 5.00113L0.70784 5.00113L2.00195 6.29411L2.00195 7L1.29606 7Z" fill="#DCCCB5"/>
            <path d="M5.00195 13.2931L6.29493 11.999L7.00082 11.999L7.00082 12.7049L5.70785 13.999L5.00195 13.999L5.00195 13.2931Z" fill="#DCCCB5"/>
            <path d="M8.29606 13.999L7.00195 12.706L7.00195 12.0002L7.70784 12.0002L9.00195 13.2931L9.00195 13.999L8.29606 13.999Z" fill="#DCCCB5"/>
          </svg>
        </span>
      </button>

      <div class="cookie__wrapper">
        <h4 class="h5 h5--cookie">
          Мы используем файлы cookie
        </h4>

        <div class="text-small text-small--cookie">
          <p>
            Некоторые функции могут не работать, если не установлены cookies. Чтобы узнать больше об использовании cookies на нашем сайте, перейдите <a href="#">на информационную страницу Cookies</a>
          </p>
        </div>

        <form class="form form--cookie" action="" method="post">
          <input type="hidden" name="cookie" value="true">

          <button class="cookie__button button button--order" type="submit" name="cookie">
            <span class="button__text">
              согласен
            </span>

            <svg width="314" height="60">
              <use xlink:href="#icon-order"></use>
            </svg>
          </button>
        </form>
      </div>
    </section>

    <!-- Затемнение всплывающих окон -->
    <div class="popup__overlay"></div>

    <!-- img/sprite.svg -->
    <div class="visually-hidden" aria-label="Спрайт svg">
      <?php
        include("img/sprite.svg");
      ?>
    </div>

    <!-- Скрипты -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

    <!-- Swiper -->

    <script src="libs/swiper.min.js"></script>

    <!-- Theme's scripts -->

    <script src="js/remove-active-class-elements.min.js"></script>

    <script src="js/menu.min.js"></script>
    <script src="js/animation-anchor.min.js"></script>

    <script src="js/form.min.js"></script>
    <script src="js/popup.min.js"></script>
    <script src="js/show-more.min.js"></script>
    <script src="js/swiper-init.min.js"></script>
    <script src="js/routs.min.js"></script>
    <script src="js/emotions.min.js"></script>
    <script src="js/tab-list-change-height.min.js"></script>
    <script src="js/decks.min.js"></script>
    <script src="js/rooms.min.js"></script>
    <script src="js/rest.min.js"></script>
    <script src="js/youtube.min.js"></script>

    <script src="js/scroll-gsap.min.js"></script>

    <script src="js/reloader.min.js"></script>
  </body>
</html>
