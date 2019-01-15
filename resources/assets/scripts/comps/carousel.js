// yarn add tiny-slider
import { tns } from 'tiny-slider/src/tiny-slider.module'

let el = '.js-tns';

// https://github.com/ganlanyuan/tiny-slider#options
let defaults = {
  items: 1,
  loop: false,
  nav: false,
  lazyload: true,
  speed: 200,
  mode: 'gallery',
  arrowKeys: true,
  controls: true,
  responsive: {
    992: {
      // nav: false,
      // controls: true,
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
    let config = JSON.parse(container.dataset.json);
    // console.log(container.dataset);
    tns({ ...defaults, ...config, container });
  });
}

export default init;