// Deps
// yarn add when-dom-ready
import loadedDom from 'when-dom-ready';

// Base
// import fontFaces from './base/fontFaces';
import images from './base/images';
import links from './base/links';

// Blocks
import animations from './blocks/animations';
import parallax from './blocks/parallax';

// Comps

// Layouts
// import banner from './layouts/banner';
import drawer from './layouts/drawer';
import headroom from './layouts/headroom';

/**
 * Loaded DOM
 */
loadedDom().then(() => {
  // Base
  // fontFaces();
  images();
  links();

  // Blocks
  animations();
  parallax();

  // Comps

  // Layouts
  // banner();
  drawer();
  headroom();
});
