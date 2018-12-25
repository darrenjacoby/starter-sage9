import intersectionObserver from '../utils/intersectionObserver';

// el
let el = '[data-anim]';

// start
function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // observer
  let instances = intersectionObserver(el, {
    // on enter
    enter: (item) => {
      // add class from data-anim attribute
      item.classList.add(item.getAttribute('data-anim'));
    },
    // on exit
    exit: (item) => {
      // remove class from data-anim attribute
      item.classList.remove(item.getAttribute('data-anim'));
    },
  });

  // run
  instances.observe();
}

export default {
  init,
};
