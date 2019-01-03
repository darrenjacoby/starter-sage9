// yarn add lodash
import Throttle from 'lodash/throttle';

// wp generated wp classes
let el = '.menu-item-has-children > a';

// declare before querySelectorAll
let els;

// anim classes
let anim = {
  on: 'is-active',
  off: 'is-exiting',
}

// req min screen size
let screen = 768;

/**
 * Open
 * 
 * @requires ul
 */
function Open(ul) {
  // run checks
  if (ul.classList.contains(anim.on)) {
    return;
  }

  // add class is-active
  ul.classList.add(anim.on);
}

/**
 * Close
 * 
 * @requires ul
 */
function Close(ul) {
  // run checks
  if (!ul.classList.contains(anim.on)) {
    return;
  }

  // add is-exiting class
  ul.classList.add(anim.off);

  // on anim complete
  // https://medium.com/@DavideRama/removeeventlistener-and-anonymous-functions-ab9dbabd3e7b
  ul.addEventListener('animationend', function _listener() {
    // remove all anim classes
    ul.classList.remove(anim.on, anim.off);
    // remove this listener
    ul.removeEventListener('animationend', _listener);
  });
}

/**
 * Close All
 * 
 * @requires els
 */
function CloseAll(els) {
  Array.from(els).map(el => Close(el.parentNode)); 
}

/**
 * Event Click
 * 
 * @requires event
 */
function EventClick(event) {
  // disable link
  event.preventDefault();

  // close all other items that are open
  CloseAll();

  // then open selected item
  Open(event.target.parentNode);
}

/**
 * Event Esc
 * 
 * @requires event
 */
function EventEsc(event) {
  if (event.keyCode === 27) {
    CloseAll();
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

  // only if screen size qualifies
  if (window.screen.width < screen) {
    return;
  }

  // get menu-item-has-children els
  els = document.querySelectorAll(el);
  // click
  Array.from(els).map(el => el.addEventListener('click', event => EventClick(event)));
  // esc
  document.addEventListener('keyup', event => EventEsc(event));
  // scroll
  window.addEventListener('scroll', Throttle(() => CloseAll(), 400));
}

export default Init;
