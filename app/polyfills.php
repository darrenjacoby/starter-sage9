<?php

namespace App;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    // add Promise,Element.prototype.classList for IE11
    wp_enqueue_script('polyfill', 'https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver,Array.from', false, null, true);

    /** 
     * IE11 object-fit polyfill
     * https://github.com/bfred-it/object-fit-images/
     * 
     * wp_enqueue_script('object-fit', 'https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js', false, null, true);
    */
}, 50);
