// yarn add rellax
import Rellax from 'rellax';

let el = '[data-rellax]';

let config = {
  speed: -1,
  center: true,
  wrapper: null,
  round: true,
  vertical: true,
  horizontal: false,
}

/**
 * Init
 */
function Init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // eslint-disable-next-line
  let rellax = new Rellax(el, config);
}

export default Init;