
    <footer class="page-footer">
      <div class="page-footer__wrapper">
        Футер
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
            <input class="form__field form__field--popup" id="name-2" type="text" name="name-2" required pattern="[a-zA-Zа-яА-Я ]{2,}">

            <label class="form__label" for="name-2">Как к вам обращаться?</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row">
            <input class="form__field form__field--popup" id="phone-2" type="tel" name="phone-2" required pattern="[0-9-+() ]{9,}">

            <label class="form__label" for="phone-2">Контактный телефон</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row">
            <input class="form__field form__field--popup" id="email-2" type="email" name="email-2" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}">

            <label class="form__label" for="email-2">Ваш email</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row form__row--message">
            <textarea class="form__field form__field--message" id="message-2" name="message-2" required></textarea>

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
            <input class="form__field form__field--popup" id="name-3" type="text" name="name-3" required pattern="[a-zA-Zа-яА-Я ]{2,}">

            <label class="form__label" for="name-3">Как к вам обращаться?</label>
            <span class="form__field-border form__field-border--popup"></span>
          </div>
          <span class="form__error form__error--popup">Введен недопустимый символ</span>

          <div class="form__row form__row--popup">
            <input class="form__field form__field--popup" id="email-3" type="email" name="email-3" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}">

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

    <!-- Затемнение всплывающих окон -->
    <div class="popup__overlay"></div>

    <!-- img/sprite.svg -->
    <div class="visually-hidden" aria-label="Спрайт svg">
      <?php
        include("img/sprite.svg");
      ?>
    </div>

    <!-- Скрипты -->

    <script src="libs/swiper.min.js"></script>
    <script src="js/menu.min.js"></script>

    <script src="js/form.min.js"></script>
    <script src="js/popup.min.js"></script>
    <script src="js/show-more.min.js"></script>
    <script src="js/swiper-init.min.js"></script>
    <script src="js/routs.min.js"></script>
  </body>
</html>
