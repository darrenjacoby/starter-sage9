<?php

namespace App;

/**
 * Remove Gutenberg styles from frontend
 */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
});
