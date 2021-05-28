'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let form = (id) => {
      let formCheck = document.querySelector(id);
      let buttonSubmit = formCheck.querySelector('button[type="submit"]');

      if (formCheck) {
        let validateForm = function () {
          // Validate flag
          let notValid = false;

          let allInputs = formCheck.querySelectorAll('input');
          let allTextarea = formCheck.querySelectorAll('textarea');

          if (allInputs) {
            allInputs.forEach((item, i) => {
              if (item.type !== 'radio' && item.type !== 'checkbox' && item.type !== 'submit') {
                if (!item.validity.valid) {
                  notValid = true;

                  if (!item.closest('.invalid')) {
                    // Попап формы
                    if (item.closest('.form__row')) {
                      item.closest('.form__row').classList.add('invalid');
                    }

                    // Подписка
                    if (item.closest('.subscribe__field')) {
                      item.closest('.subscribe__field').classList.add('invalid');
                    }
                  }
                }

                item.autocomplete = 'off';

                item.addEventListener('input', () => {
                  // if (!item.validity.valid) {
                  //   notValid = true;
                  //
                  //   if (!item.closest('.invalid')) {
                  //     item.closest('.form__row').classList.add('invalid');
                  //   }
                  // } else
                  if (item.validity.valid) {
                    if (item.closest('.invalid')) {
                      // Попап формы
                      if (item.closest('.form__row')) {
                        item.closest('.form__row').classList.remove('invalid');
                      }

                      // Подписка
                      if (item.closest('.subscribe__field')) {
                        item.closest('.subscribe__field').classList.remove('invalid');
                      }
                    }
                  }
                });
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
                }

                // Подписка
                if (item.closest('.subscribe__field')) {
                  item.closest('.subscribe__field').classList.add('invalid');
                }
              }

              item.addEventListener('input', () => {
                // if (!item.validity.valid) {
                //   notValid = true;
                //
                //   if (!item.closest('.invalid')) {
                //     item.closest('.form__row').classList.add('invalid');
                //   }
                // } else

                if (item.validity.valid) {
                  if (item.closest('.invalid')) {
                    // Попап формы
                    if (item.closest('.form__row')) {
                      item.closest('.form__row').classList.remove('invalid');
                    }

                    // Подписка
                    if (item.closest('.subscribe__field')) {
                      item.closest('.subscribe__field').classList.remove('invalid');
                    }
                  }
                }
              });
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
        };

        formCheck.addEventListener('click', function (evt) {
          if (!evt.target.closest('.subscribe__field') && !evt.target.closest('.form__row')) {
            validateForm();
          }
        });
      }
    };

    // Order popup

    form('#order-popup');

    // Download contact

    form('#download-popup');

    // subscribe

    form('#subscribe');

  } catch (e) {
    console.log(e);
  }
})
