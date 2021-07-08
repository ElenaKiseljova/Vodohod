'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let form = (id) => {
      let formCheck = document.querySelector(id);

      if (formCheck) {
        let buttonSubmit = formCheck.querySelector('button[type="submit"]');

        let inputEventListenerFlag = false;

        let validateForm = function () {
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
                } else {
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
                  }
                }

                if (inputEventListenerFlag === false) {
                  item.addEventListener('input', () => {
                    validateForm();
                  });
                }
              }
            });
          }

          if (allTextarea) {
            allTextarea.forEach((item, i) => {
              if (!item.validity.valid) {
                notValid = true;

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
              } else {
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
                }
              }

              if (inputEventListenerFlag === false) {
                item.addEventListener('input', () => {
                  validateForm();
                });
              }
            });
          }

          //console.log(notValid);

          if (buttonSubmit) {
            if (!notValid) {
              buttonSubmit.disabled = false;
            } else {
              buttonSubmit.disabled = true;
            }
          }

          inputEventListenerFlag = true;
        };

        formCheck.addEventListener('click', function (evt) {
          //if (!evt.target.closest('.subscribe__field') && !evt.target.closest('.form__row')) {
            validateForm();
          //}
        });
      }
    };

    // Order popup

    form('#order-popup');

    // Download contact

    form('#download-popup');

    // subscribe

    form('#subscribe-form');
  } catch (e) {
    console.log(e);
  }
});
