// yarn add rellax
import Rellax from 'rellax';

const el = '[data-rellax]';

const config = {
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
function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // eslint-disable-next-line
  const rellax = new Rellax(el, config);
}

export default init;
