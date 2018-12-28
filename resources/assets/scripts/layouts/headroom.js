// yarn add headroom.js
import Headroom from 'headroom.js';

let el = '.js-headroom';

// https://github.com/WickyNilliams/headroom.js#options
let config = {
  offset: 150,
  classes: {
    // el initialised
    initial: 'headroom',
    // scrolling up
    pinned: 'headroom-pinned',
    // scrolling down
    unpinned: 'headroom-unpinned',
    // above offset
    top: 'headroom-top',
    // below offset
    notTop : 'headroom-not-top',
    // at bottom of scoll area
    bottom : 'headroom-bottom',
    // not at bottom of scroll area
    notBottom : 'headroom-not-bottom',
  },
};

/**
 * Init
 */
function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // new headroom
  let headroom = new Headroom(document.querySelector(el), config);
  // init
  headroom.init();
}

export default {
  init,
};
