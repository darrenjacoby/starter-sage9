import IntersectionObserver from '../Utils/IntersectionObserver';

let el = '[data-anim]';

/**
 * Init
 */
function Init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // observer
  let instances = IntersectionObserver(el, {
    // once: true,
    // rootMargin: '0% 0% 0% 0%',
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

export default Init;
