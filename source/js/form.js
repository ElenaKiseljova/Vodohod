'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let form = (id) => {
      let formCheck = document.querySelector(id);

      if (formCheck) {
        let validateForm = function () {
          // Validate flag
          let notValid = false;

          let allInputs = formCheck.querySelectorAll('input');
          let allTextarea = formCheck.querySelectorAll('textarea');

          allInputs.forEach((item, i) => {
            if (item.type !== 'radio' && item.type !== 'checkbox' && item.type !== 'submit') {
              if (!item.validity.valid) {
                notValid = true;

                if (!item.closest('.invalid')) {
                  item.closest('.form__row').classList.add('invalid');
                }
              }

              item.autocomplete = 'off';

              item.addEventListener('input', () => {
                if (!item.validity.valid) {
                  notValid = true;

                  if (!item.closest('.invalid')) {
                    item.closest('.form__row').classList.add('invalid');
                  }
                } else {
                  if (item.closest('.invalid')) {
                    item.closest('.form__row').classList.remove('invalid');
                  }
                }
              });
            }
          });

          allTextarea.forEach((item, i) => {
            if (!item.validity.valid) {
              notValid = true;

              if (!item.closest('.invalid')) {
                item.closest('.form__row').classList.add('invalid');
              }
            }

            item.addEventListener('input', () => {
              if (!item.validity.valid) {
                notValid = true;

                if (!item.closest('.invalid')) {
                  item.closest('.form__row').classList.add('invalid');
                }
              } else {
                if (item.closest('.invalid')) {
                  item.closest('.form__row').classList.remove('invalid');
                }
              }
            });
          });
          //console.log(notValid);

          if (!notValid) {
            let buttonSubmit = formCheck.querySelector('button[type="submit"]');

            if (buttonSubmit) {
              buttonSubmit.disabled = false;
            }
          }
        };

        formCheck.addEventListener('click', function () {
          validateForm();
        });
      }
    };

    // Order popup

    form('#order-popup');

    // Download contact

    form('#download-popup');

  } catch (e) {
    console.log(e);
  }
})
