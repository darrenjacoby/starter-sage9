// Base
// import fontFaces from './base/fontFaces';
import images from './base/images';
import links from './base/links';

// Blocks
import animations from './blocks/animations';
import parallax from './blocks/parallax';

// Comps
import carousel from './comps/carousel';
import gridMuuri from './comps/gridMuuri';
import instagram from './comps/instagram';
import lightbox from './comps/lightbox';
import map from './comps/map';

// Layouts
// import banner from './layouts/banner';
import drawer from './layouts/drawer';
import headroom from './layouts/headroom';

/**
 * DOM Loaded
 */
document.addEventListener('DOMContentLoaded', () => {
  // Base
  // fontFaces();
  images();
  links();

  // Blocks
  animations();
  parallax();

  // Comps
  carousel();
  gridMuuri();
  instagram();
  lightbox();
  map();

  // Layouts
  // banner();
  drawer();
  headroom();
});
