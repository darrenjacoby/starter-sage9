// yarn add muuri
// wp_enqueue_script('polyfill', 'https://polyfill.io/v2/polyfill.min.js?features=WebAnimations', false, null, true);
import Muuri from 'muuri';

let el = '.js-muuri';

// https://github.com/haltu/muuri
let config = {
  containerClass: 'js-muuri',
};

function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // run modal
  let instance = new Muuri(el, config); // eslint-disable-line
}

export default init;
