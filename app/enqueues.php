<?php

namespace App;

/**
 * Remove Gutenberg styles (5.1)
 * 
 * @link https://github.com/WordPress/gutenberg/issues/7776
 */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
});

/**
 * Remove WP Embed script (4.4)
 * 
 * @link https://github.com/WordPress/gutenberg/issues/7776
 */
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('wp-embed');
});
