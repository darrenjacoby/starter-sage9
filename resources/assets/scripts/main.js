// Deps
// yarn add when-dom-ready
import whenDomReady from 'when-dom-ready';

// Base
// import fontFaces from './base/fontFaces';
import imgs from './base/imgs';
import jump from './base/jump';

// Blocks
import anims from './blocks/anims';
import rellax from './blocks/rellax';

// Layouts
// import banner from './layouts/banner';
import drawer from './layouts/drawer';
import headroom from './layouts/headroom';

/**
 * Loaded DOM
 */
whenDomReady().then(() => {
  // Base
  // fontFaces.init();
  imgs.init();
  jump.init();

  // Blocks
  anims.init();
  rellax.init();

  // Layouts
  // banner.init();
  drawer.init();
  headroom.init();
});
