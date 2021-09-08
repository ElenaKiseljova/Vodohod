'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let form = (id) => {
      let formCheck = document.querySelector(id);

      if (formCheck) {
        let buttonSubmit = formCheck.querySelector('button[type="submit"]');

        // Сбрасываю, если атрибут прописан (чтобы клик прошел по кнопке)
        buttonSubmit.disabled = false;
        buttonSubmit.style.cursor = 'default';
        buttonSubmit.querySelector('svg').style.fill = '#dcccb5';
        buttonSubmit.querySelector('svg').style.pointerEvents = 'none';

        let inputEventListenerFlag = false;

        /*
          * field - text 'all' or element DOM
        */
        let validateForm = function (check = false, field = 'all') {
          // Validate flag
          let notValid = false;

          let allInputs = formCheck.querySelectorAll('input');
          let allTextarea = formCheck.querySelectorAll('textarea');

          if (allInputs) {
            allInputs.forEach((item, i) => {
              if (item.type !== 'radio' && item.type !== 'checkbox' && item.type !== 'submit') {
                if ((item.type === 'tel' || item.type === 'email' || item.type === 'text') && item.required === false) {
                  item.required = true;
                }

                item.autocomplete = 'off';

                if (!item.validity.valid) {
                  notValid = true;

                  if (check && (field === 'all' || field === item)) {
                    if (!item.closest('.invalid')) {
                      // Попап формы
                      if (item.closest('.form__row')) {
                        item.closest('.form__row').classList.add('invalid');
                        item.closest('.form__row').classList.remove('valid');
                      }

                      // Подписка
                      if (item.closest('.subscribe__field')) {
                        item.closest('.subscribe__field').classList.add('invalid');
                        item.closest('.subscribe__field').classList.remove('valid');
                      }
                    }
                  }
                } else {
                  if (check && (field === 'all' || field === item)) {
                    if (item.closest('.invalid')) {
                      // Попап формы
                      if (item.closest('.form__row')) {
                        item.closest('.form__row').classList.remove('invalid');
                        item.closest('.form__row').classList.add('valid');
                      }

                      // Подписка
                      if (item.closest('.subscribe__field')) {
                        item.closest('.subscribe__field').classList.remove('invalid');
                        item.closest('.subscribe__field').classList.add('valid');
                      }
                    } else if (!item.closest('.invalid') && !item.closest('.valid')) {
                      // Попап формы
                      if (item.closest('.form__row')) {
                        item.closest('.form__row').classList.add('valid');
                      }

                      // Подписка
                      if (item.closest('.subscribe__field')) {
                        item.closest('.subscribe__field').classList.add('valid');
                      }
                    }
                  }
                }

                if (inputEventListenerFlag === false) {
                  item.addEventListener('blur', () => {
                    validateForm(true, item);
                  });

                  let lastTimeout;
                  item.addEventListener('input', () => {
                    if (lastTimeout) {
                      clearTimeout(lastTimeout);
                    }

                    lastTimeout = setTimeout(function () {
                      validateForm(true, item);
                    }, 500);
                  });
                }
              }
            });
          }

          if (allTextarea) {
            allTextarea.forEach((item, i) => {
              if (!item.validity.valid) {
                notValid = true;

                if (check && (field === 'all' || field === item)) {
                  // Попап формы
                  if (item.closest('.form__row')) {
                    item.closest('.form__row').classList.add('invalid');
                    item.closest('.form__row').classList.remove('valid');
                  }

                  // Подписка
                  if (item.closest('.subscribe__field')) {
                    item.closest('.subscribe__field').classList.add('invalid');
                    item.closest('.subscribe__field').classList.remove('valid');
                  }
                }
              } else {
                if (check && (field === 'all' || field === item)) {
                  if (item.closest('.invalid')) {
                    // Попап формы
                    if (item.closest('.form__row')) {
                      item.closest('.form__row').classList.remove('invalid');
                      item.closest('.form__row').classList.add('valid');
                    }

                    // Подписка
                    if (item.closest('.subscribe__field')) {
                      item.closest('.subscribe__field').classList.remove('invalid');
                      item.closest('.subscribe__field').classList.add('valid');
                    }
                  } else if (!item.closest('.invalid') && !item.closest('.valid')) {
                    // Попап формы
                    if (item.closest('.form__row')) {
                      item.closest('.form__row').classList.add('valid');
                    }

                    // Подписка
                    if (item.closest('.subscribe__field')) {
                      item.closest('.subscribe__field').classList.add('valid');
                    }
                  }
                }
              }

              if (inputEventListenerFlag === false) {
                item.addEventListener('blur', () => {
                  validateForm(true, item);
                });

                let lastTimeout;
                item.addEventListener('input', () => {
                  if (lastTimeout) {
                    clearTimeout(lastTimeout);
                  }

                  lastTimeout = setTimeout(function () {
                    validateForm(true, item);
                  }, 500);
                });
              }
            });
          }

          //console.log(notValid);

          if (check) {
            if (!notValid) {
              buttonSubmit.style.cursor = 'pointer';
              buttonSubmit.querySelector('svg').style.fill = '#c8a97a';
              buttonSubmit.querySelector('svg').style.pointerEvents = 'all';
            } else {
              buttonSubmit.style.cursor = 'default';
              buttonSubmit.querySelector('svg').style.fill = '#dcccb5';
              buttonSubmit.querySelector('svg').style.pointerEvents = 'none';
            }
          }

          inputEventListenerFlag = true;
        };

        // Запуск для добавления валидации при вводе в поля
        validateForm();

        buttonSubmit.addEventListener('click', function (evt) {
          //if (!evt.target.closest('.subscribe__field') && !evt.target.closest('.form__row')) {
            validateForm(true, 'all');
          //}
        });
      }
    };

    // Order popup
    form('#order-popup');

    // Download contact
    form('#download-popup');

    // Subscribe
    form('#subscribe-form');
  } catch (e) {
    console.log(e);
  }
});
