// yarn add halkabox
import lightbox from 'halkabox';

let el = '.js-lightbox';

// https://github.com/ahmednooor/halkaBox.js/blob/master/src/halkaBox.js#L30
let config = {
  // playback
  animation: 'slide', // fade

  // interaction
  hideButtons: true, // for touch
  swipeDownToClose: false,
  nextPrevOnWheel: false,
  isZoomable: true,

  // perf
  preload: 2,
};

function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  let els = document.querySelectorAll(el);

  let groups = Array.from(els).map((el) => {
    // get the data-group attr
    let group = el.getAttribute('data-group') || 'default';
    // add the class that halkabox requires
    el.classList.add(`js-group-${group}`);
    // return img group
    return group;
  });

  // remove duplicates using ES6 new Set
  // https://wsvincent.com/javascript-remove-duplicates-array/
  let uniques = Array.from(new Set(groups));

  // init lightbox for each group collection
  uniques.map((group) => {
    lightbox.run(`js-group-${group}`, config);
  });

  /**
   * Collections
   * 
   * add 
   */
  /*
  let handlers = document.querySelectorAll('.js-lightbox-toggle');
  // map through handlers and add event listener
  Array.from(handlers).map((el) => {
    // get the data-group attr
    let group = el.getAttribute('data-group') || 'default';
    // open the groups first image
    el.addEventListener('click', () => {
      document.querySelector(`.js-group-${group}`).open(0);
    });
  });
  */
}

export default init;
