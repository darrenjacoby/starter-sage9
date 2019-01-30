// yarn add tiny-slider
import { tns } from 'tiny-slider/src/tiny-slider.module'

let el = '.js-tns';

// https://github.com/ganlanyuan/tiny-slider#options
let defaults = {
  // layout
  items: 1, 
  gutter: 0,
  edgePadding: 0,

  // playback
  mode: 'carousel', // gallery for fade
  speed: 400,
  autoplay: false,
  loop: false,
  rewind: false,
  axis: 'horizontal',

  // interaction
  controls: true,
  nav: true,
  touch: true,
  arrowKeys: true,

  // perf
  lazyload: true,
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
    tns({ ...defaults, ...config, container });
  });
}

export default init;
