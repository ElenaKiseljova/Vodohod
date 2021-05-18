'use strict';

(function () {
  try {
    let changeHeightVideo = function (element) {
      let COEFFICIENT_HEIGHT_16_9 = 1.77777777778;

      element.style.height = (youtube.offsetWidth / COEFFICIENT_HEIGHT_16_9) + 'px';
    };

    let youtube = document.querySelector('.youtube');

    if (youtube) {
      // Изменяет высоту видео под пропорцию 16 на 9
      changeHeightVideo(youtube);

      let idVideo = youtube.getAttribute('data-id');

      let buttonVideo = youtube.querySelector('.youtube__button');

      if (buttonVideo) {
        buttonVideo.addEventListener('click', function () {
          buttonVideo.classList.toggle('active');

          let iframeVideo = youtube.querySelector('.youtube__iframe');

          if (iframeVideo) {
            iframeVideo.classList.toggle('active');
            iframeVideo.src = 'https://www.youtube.com/embed/' + idVideo + '?autoplay=1';
          }
        });
      }

      window.addEventListener('resize', function () {
        // Изменяет высоту видео под пропорцию 16 на 9
        changeHeightVideo(youtube);
      });
    }
  } catch (e) {
    console.log(e);
  }
})();
