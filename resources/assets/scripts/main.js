// npm deps
// yarn add when-dom-ready
import whenDomReady from 'when-dom-ready';

// comps
import anims from './comps/anims';
import imgs from './comps/imgs';

// load
whenDomReady().then(() => {
  // animations
  anims.init();
  // images
  imgs.init();
});
