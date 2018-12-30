<?php

namespace App;

/**
 * Remove Gutenberg styles from frontend
 * 
 * @link https://github.com/WordPress/gutenberg/issues/7776
 */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
});
