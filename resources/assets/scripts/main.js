// Deps
// yarn add when-dom-ready
import LoadedDom from 'when-dom-ready';

// Base
// import FontFaces from './Base/FontFaces';
import Images from './Base/Images';
import Links from './Base/Links';

// Blocks
import Animations from './Blocks/Animations';
import Parallax from './Blocks/Parallax';

// Comps
import Carousel from './Comps/Carousel';

// Layouts
// import Banner from './Layouts/Banner';
import Drawer from './Layouts/Drawer';
import Headroom from './Layouts/Headroom';

/**
 * Loaded DOM
 */
LoadedDom().then(() => {
  // Base
  // FontFaces();
  Images();
  Links();

  // Blocks
  Animations();
  Parallax();

  // Comps
  Carousel();

  // Layouts
  // Banner();
  Drawer();
  Headroom();
});
