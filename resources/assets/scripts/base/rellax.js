import Rellax from 'rellax';

// el
let el = '[data-rellax]';

// config
let config = {
  speed: -1,
  center: true,
  wrapper: null,
  round: true,
  vertical: true,
  horizontal: false,
}

function init() {
  // check for el
  if (!document.querySelector(el)) {
    return;
  }

  // eslint-disable-next-line
  let rellax = new Rellax(el, config);
}

export default {
  init,
};
