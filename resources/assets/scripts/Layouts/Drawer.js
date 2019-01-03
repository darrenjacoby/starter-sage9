// yarn add lodash
import Throttle from 'lodash/throttle';

let el = '.js-drawer';
let state = 'drawer-open';

/**
 * Toggle
 */
function Toggle() {
  document.body.classList.toggle(state);
}

/**
 * Close
 */
function Close() {
  if (!document.body.classList.contains(state)) {
    return;
  }

  Toggle();
}

/**
 * Event Click
 *
 * @requires event
 */
function EventClick(event) {
  event.preventDefault();
  Toggle();
}

/**
 * Event Esc
 * 
 * @requires event
 */
function EventEsc(event) {
  if (event.keyCode === 27) {
    Close();
  }
}

/**
 * Init
 */
function Init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // get toggle els
  let els = document.querySelectorAll(el);
  // click
  Array.from(els).map(el => el.addEventListener('click', event => EventClick(event)));
  // esc
  document.addEventListener('keyup', event => EventEsc(event));
  // scroll
  window.addEventListener('scroll', Throttle(() => Close(), 400));
}

export default Init;
