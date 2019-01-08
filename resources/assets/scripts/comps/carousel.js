// yarn add tiny-slider
import { tns as Tns } from 'tiny-slider/src/tiny-slider.module'

let el = '.js-tns';

let config = {
  items: 1,
  loop: false,
  nav: true,
  lazyload: true,
  speed: 200,
  // mode: 'gallery',
  arrowKeys: true,
  controls: false,
  responsive: {
    992: {
      nav: false,
      controls: true,
    },
  },
};

function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // get all els
  let els = document.querySelectorAll(el);

  // run tns
  Array.from(els).map((container) => {
    Tns({ ...config, container });
  });
}

export default init;