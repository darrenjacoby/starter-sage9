// https://alligator.io/js/intersection-observer/
// yarn add intersection-observer
// import 'intersection-observer';
const defaults = {
  rootMargin: '0px',
  threshold: 0,
  once: false,
  enter() {},
  exit() {},
}

const onIntersection = (enter, exit, once) => (entries, observer) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      enter(entry.target);
      if (once || entry.target.getAttribute('data-once') !== null) {
        observer.unobserve(entry.target);
      }
    } else {
      exit(entry.target);
    }
  })
}

export default function (selector = '[data-src]', config = {}) {
  const {root, rootMargin, threshold, once, enter, exit} = {...defaults, ...config};
  let observer;

  if (window.IntersectionObserver) {
    observer = new IntersectionObserver(onIntersection(enter, exit, once), {
      root,
      rootMargin,
      threshold,
    });
  }

  return {
    observe() {
      const els = document.querySelectorAll(selector);
      Array.from(els).map(el => observer.observe(el));
    },
  }
}
