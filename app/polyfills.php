<?php

namespace App;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    // add Promise for IE11
    wp_enqueue_script('polyfill', 'https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver,Array.from', false, null, true);
}, 50);
