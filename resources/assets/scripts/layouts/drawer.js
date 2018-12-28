// yarn add lodash
import throttle from 'lodash/throttle';

let el = '.js-drawer';
let state = 'drawer-open';

/**
 * Toggle
 */
function toggle() {
  document.body.classList.toggle(state);
}

/**
 * Close
 */
function close() {
  if (!document.body.classList.contains(state)) {
    return;
  }

  toggle();
}

/**
 * Event Handler
 *
 * @requires event
 */
function eventHandler(event) {
  event.preventDefault();
  toggle();
}

/**
 * Event Esc
 * 
 * @requires event
 */
function eventEsc(event) {
  if (event.keyCode === 27) {
    close();
  }
}

/**
 * Init
 */
function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // get toggles
  let triggers = document.querySelectorAll(el);
  // click
  Array.from(triggers).map(el => el.addEventListener('click', event => eventHandler(event)));
  // esc
  document.addEventListener('keyup', event => eventEsc(event));
  // scroll
  window.addEventListener('scroll', throttle(() => close(), 400));
}

export default {
  init,
}
