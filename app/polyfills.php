<?php

namespace App;

/**
 * Polyfills
 * 
 * @link https://polyfill.io/v2/docs/features/
 * @link https://github.com/bfred-it/object-fit-images/
 */
add_action('wp_enqueue_scripts', function () {
    // Safari, Edge
    wp_enqueue_script('polyfill', 'https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver,Array.from', false, null, true);

    // IE11
    // wp_enqueue_script('polyfill', 'https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver,Array.from,Promise,Element.prototype.classList', false, null, true);
    // wp_enqueue_script('object-fit', 'https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js', false, null, true);
}, 50);
