// npm deps
// yarn add when-dom-ready
import whenDomReady from 'when-dom-ready';

// base
import anims from './base/anims';
import fontfaces from './base/fontfaces';
import imgs from './base/imgs';
import jump from './base/jump';
import rellax from './base/rellax';

// layouts
import banner from './layouts/banner';
import drawer from './layouts/drawer';

// load
whenDomReady().then(() => {
  // base
  // animations
  anims.init();
  // font faces
  fontfaces.init();
  // images
  imgs.init();
  // jump
  jump.init();
  // rellax
  rellax.init();

  // layouts
  // banner
  banner.init();
  // drawer
  drawer.init();
});
