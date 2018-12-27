// yarn add headroom.js
import Headroom from 'headroom.js';

// comp class
let el = '.js-headroom';

// https://github.com/WickyNilliams/headroom.js#options
let config = {
  offset: 150,
  classes: {
    // el initialised
    initial: 'banner-headroom',
    // scrolling up
    pinned: 'banner-pinned',
    // scrolling down
    unpinned: 'banner-unpinned',
    // above offset
    top: 'banner-top',
    // below offset
    notTop : 'banner-not-top',
    // at bottom of scoll area
    bottom : 'banner-bottom',
    // not at bottom of scroll area
    notBottom : 'banner-not-bottom',
  },
};

function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  let headroom = new Headroom(document.querySelector(el), config);
  headroom.init();
}

export default {
  init,
};
