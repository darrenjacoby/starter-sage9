// yarn add jump.js
import jump from 'jump.js'

// el
let el = '[data-jump]';

let config = {
  /*
  duration: 1000,
  offset: 0,
  callback: undefined,
  easing: easeInOutQuad,
  a11y: false,
  */
}

function instance(el) {
  // get location
  let loc = el.getAttribute('data-jump');
  // event listener
  if (loc) {
    el.addEventListener('click', () => jump(loc, config));
  }
}

function init() {
  if (!document.querySelector(el)) {
    return;
  }

  // get all els
  let els = document.querySelectorAll(el);

  // foreach
  Array.from(els).map(el => instance(el));
}

export default {
  init,
};
