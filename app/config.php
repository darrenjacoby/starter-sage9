<?php

namespace App;

/**
 * Theme
 * 
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
 */
$theme_supports = include locate_config('theme-support');

add_action('after_setup_theme', function () use ($theme_supports) {
    array_map(function ($item) {
        is_array($item) ? 
            add_theme_support($item[0], $item[1]) : 
            add_theme_support($item);
    }, $theme_supports);
});

/**
 * Menus
 * 
 * @link https://developer.wordpress.org/reference/functions/add_image_size/
 */
array_map(function ($item) {
    register_nav_menus([$item]);
}, include locate_config('menus'));

/**
 * Images
 * 
 * @link https://developer.wordpress.org/reference/functions/add_image_size/
 */
array_map(function ($item) {
    add_image_size($item[0], $item[1], $item[2] ?? 9999, $item[3] ?? false);
}, include locate_config('images'));

/**
 * Polyfills
 * 
 * @link https://polyfill.io/v3/url-builder
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
$polyfills = array_map(function ($item) {
    return "{$item},";
}, include locate_config('polyfills'));

add_action('wp_enqueue_scripts', function ($polyfills) {
    wp_enqueue_script('polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=' . rtrim($polyfills), false, null, true);
}, 50);

/**
 * Intervention
 * 
 * @link https://github.com/soberwp/intervention
 */
if (function_exists('\Sober\Intervention\intervention')) {
    array_map(function ($item) {
        \Sober\Intervention\intervention($item[0], $item[1], $item[2]);
    }, include locate_config('intervention'));
}

/**
 * Models
 * 
 * @link https://github.com/soberwp/models
 */
$post_types = locate_config('post_types');

add_filter('sober/models/path', function () use ($post_types) {
    return $post_types;
});

/**
 * Advanced Custom Fields
 * 
 * @link https://www.advancedcustomfields.com/
 * @link https://www.advancedcustomfields.com/resources/local-json/
 * @link https://developers.google.com/maps/documentation/javascript/get-api-key
 */
$acf_json = locate_config('acf-json');
$api_keys = include locate_config('api-keys');

add_filter('acf/settings/save_json', function ($path) use ($acf_json) {
    return $acf_json;
});

add_filter('acf/settings/load_json', function ($path) use ($acf_json) {
    return [$acf_json];
});

add_action('acf/init', function () use ($api_keys) {
    acf_update_setting('google_api_key', $api_keys['google']);
});
