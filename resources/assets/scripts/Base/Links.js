// yarn add jump.js
import Jump from 'jump.js'

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
function Init() {
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
      el.addEventListener('click', () => Jump(loc, config));
    }
  });
}

export default Init;
