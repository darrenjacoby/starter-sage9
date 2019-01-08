// yarn add jump.js
import jump from 'jump.js'

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

/**
 * Init
 */
function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // get all els
  let els = document.querySelectorAll(el);

  // foreach
  Array.from(els).map((el) => {
    // get location
    let loc = el.getAttribute('data-jump');
    // event listener
    if (loc) {
      el.addEventListener('click', () => jump(loc, config));
    }
  });
}

export default init;
