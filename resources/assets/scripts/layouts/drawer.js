// yarn add lodash
import throttle from 'lodash/throttle';

const el = '.js-drawer';
const state = 'drawer-open';

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
 * Event Click
 *
 * @requires event
 */
function eventClick(event) {
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

  // get toggle els
  const els = document.querySelectorAll(el);
  // click
  Array.from(els).map(el => el.addEventListener('click', event => eventClick(event)));
  // esc
  document.addEventListener('keyup', event => eventEsc(event));
  // scroll
  window.addEventListener('scroll', throttle(() => close(), 400));
}

export default init;
