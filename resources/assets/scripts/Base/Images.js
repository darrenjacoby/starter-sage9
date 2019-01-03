import IntersectionObserver from '../Utils/IntersectionObserver';
import ImageLoaded from '../Utils/ImageLoaded';

let el = '[data-src]';

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
    // only fire once
    once: true,
    // load image -50% in view
    rootMargin: '0% 0% 0% 0%',
    // on enter
    enter: (item) => {
      // get data-src
      let src = item.getAttribute('data-src');
      // wait until image has loaded
      ImageLoaded(src).then(() => {
        // change img srcset
        item.srcset = item.getAttribute('data-srcset');
        // add class loaded
        item.classList.add('loaded');
      });
    },
    // exit: (item) => {},
  });

  // run
  instances.observe();
}

export default Init;
