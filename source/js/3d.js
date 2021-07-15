window.addEventListener('load', function() {
  pano = new pano2vrPlayer('3d-container');
  const titleElement = document.getElementsByClassName('h3--scene')[0];

  skin = new pano2vrSkin(pano, null, setActiveOnMap);

  pano.readConfigUrlAsync('../pano.xml');

  let nodes = [];
  const interval = setInterval(() => {
    if (pano.getNodeIds().length) {
      nodes = pano.getNodeIds();
      clearInterval(interval);
      setNodes(nodes);
      initSliderFor3D();
    }
  }, 1000);

  function setNodes(tourNodes) {
    var currentIndex = 0;
    const t = [];
    for (var i = 0; i < tourNodes.length; i++) {
      var nodeId = tourNodes[i];
      var nodeData = pano.getNodeUserdata(nodeId);

      const sliderElement = createSliderElement(nodeData);
      sliderAppendElement(sliderElement);
      t.push({
               title: nodeData.title.replace(/\ №[0-9]+/, ''),
               node: nodeData.nodeid,
               level: 'main',
               original: nodeData.title,
             });
    }
  }

  var tabs = document.getElementsByClassName('decks__button');
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].onclick = (e) => {
      setActiveOnMap(e.target.dataset.node, e.target.parentNode.dataset.type);
      pano.openNext('{' + e.target.dataset.node + '}', pano.hotspot.target);
    };
  }
  var rooms = document.getElementsByClassName('decks__room');
  for (var i = 0; i < rooms.length; i++) {
    rooms[i].onclick = (e) => {
      setActiveOnMap(e.target.dataset.node);
      pano.openNext('{' + e.target.dataset.node + '}', pano.hotspot.target);
    };
  }

  let curentPaluba = 'main';
  let curentPanorama = 'node37';

  function createSliderElement(nodeDataElement) {
    const stringToHtml =
              '<div class="scene__image scene__image--slide" itemscope="" itemtype="http://schema.org/ImageObject">' +
              '<img itemprop="contentUrl" src="' + skin.basePath +
              'images/node_image_' + nodeDataElement.nodeid +
              '.jpg" alt="room">' +
              '<meta itemprop="name" content="room"></div>' +
              '<h5 class="text-small text-small--room">' +
              nodeDataElement.title + '</h5><div class="scene__mask"></div>';
    return stringToHTML(stringToHtml, nodeDataElement);
  }

  function sliderAppendElement(newSliderElement) {
    const sliderContainer = document.getElementsByClassName('scene__list')[0];
    if (sliderContainer)
      sliderContainer.appendChild(newSliderElement);
  }

  var stringToHTML = function(str, nodeDataElement) {
    var dom = document.createElement('li');
    dom.classList.add('scene__item');
    dom.classList.add('swiper-slide');
    dom.onclick = () => {
      setActiveOnMap(nodeDataElement.nodeid);
      pano.openNext('{' + nodeDataElement.nodeid + '}', pano.hotspot.target);
    };
    dom.innerHTML = str;
    return dom;
  };

  function initSliderFor3D() {
    try {
      let sceneContainer = document.querySelector(
          '.scene__slider.swiper-container');

      if (sceneContainer) {
        var argsSwiperScene = {
          speed: 300,
          slidesPerView: 1,
          spaceBetween: 10,
          resizeObserver: true,
        };

        let sceneSwiper = new Swiper(sceneContainer, argsSwiperScene);

        let sceneProgress = document.querySelector('.progress--scene span');

        sceneSwiper.on('progress', function() {
          if (sceneProgress) {
            swiperProgress(sceneSwiper, sceneProgress);
          }
        });
      }
    } catch (e) {
      console.log(e);
    }
  }

  var swiperProgress = function(slider, elementProgress) {
    let newWidthElementProgress = slider.progress * 100;

    if (newWidthElementProgress < 0) {
      newWidthElementProgress = 0;
    }

    if (newWidthElementProgress > 100) {
      newWidthElementProgress = 100;
    }
    elementProgress.style.width = newWidthElementProgress + '%';
  };

  function setActiveOnMap(nodeId, paluba = false) {
    if ((
        paluba && curentPaluba !== paluba
    ) || !json[nodeId].level.includes(curentPaluba)) {
      curentPaluba = paluba || json[nodeId].level[0];
      setActiveTab(curentPaluba);
    }
    const remove = document.querySelectorAll(
        '.decks__room[data-node=' + curentPanorama + ']')[0];
    if (remove) {
      remove.classList.remove('active');
    }
    curentPanorama = nodeId;
    const add = document.querySelectorAll(
        '.decks__room[data-node=' + curentPanorama + ']')[0];
    if (add) {
      add.classList.add('active');
    }

    titleElement.innerHTML = json[nodeId].title;
  }

  function setActiveTab(type) {

    const active = document.querySelectorAll('.decks__tab.active')[0];
    document.querySelectorAll('.decks__item.active')[0].classList.remove(
        'active');
    active.classList.remove('active');
    active.firstElementChild.classList.remove('active');

    const typeSet = document.querySelectorAll('[data-type=' + type + ']')[0];
    document.querySelectorAll(
        '.decks__item[data-type=' + type + ']')[0].classList.add('active');
    typeSet.classList.add('active');
    typeSet.firstElementChild.classList.add('active');
  }

  const element2 = document.querySelector('.cave__slider--images');
  const element = document.querySelector('.cave');



  window.addEventListener('scroll', () => {
    const rect = element.getBoundingClientRect();
    const inTop = rect.top + rect.height;
    if (rect.top <= document.documentElement.clientHeight && inTop >= 0) {
      const c = 25 + (
          element.getBoundingClientRect().bottom /
          element.getBoundingClientRect().height
      ) * -25;
      element2.style.transform = 'translateY(' + c + '%)';
    }
  });
});
