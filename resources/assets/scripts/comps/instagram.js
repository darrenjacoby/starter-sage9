// yarn add instafeed.js
import Instafeed from 'instafeed.js';

let el = '.js-instagram';

function instance(target) {
  // attrs
  let attrs = {
    limit: target.getAttribute('data-limit'),
    userId: target.getAttribute('data-userid'),
    clientId: target.getAttribute('data-clientid'),
    accessToken: target.getAttribute('data-token'),
  };

  // config
  let config = {
    target,
    ...attrs,
    resolution: 'standard_resolution',
    get: 'user',
    // https://github.com/stevenschobert/instafeed.js#templating
    template: `
      <div class="instagram-item">
        <a href="{{link}}" target="_blank">
          <figure class="img-mask ratio-1-1">
            <img src="{{image}}">
          </figure>
        </a>
      </div>`,
  };

  // instance
  let feed = new Instafeed(config);

  // run
  feed.run();
}

function init() {
  // return
  if (!document.querySelector(el)) {
    return;
  }

  // get all els
  let els = document.querySelectorAll(el);

  // foreach
  els.forEach(el => instance(el));
}

export default init;