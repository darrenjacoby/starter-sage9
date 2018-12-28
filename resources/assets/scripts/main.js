// Deps
// yarn add when-dom-ready
import whenDomReady from 'when-dom-ready';

// Base
import fontfaces from './base/fontfaces';
import imgs from './base/imgs';
import jump from './base/jump';

// Blocks
import anims from './blocks/anims';
import rellax from './blocks/rellax';

// Layouts
import drawer from './layouts/drawer';
import headroom from './layouts/headroom';

/**
 * Loaded DOM
 */
whenDomReady().then(() => {
  // Base
  fontfaces.init();
  imgs.init();
  jump.init();

  // Blocks
  anims.init();
  rellax.init();

  // Layouts
  drawer.init();
  headroom.init();
});
