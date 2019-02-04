<?php

return [
    /**
     * Theme support
     * 
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    'title-tag',
    'post-thumbnails',
    'customize-selective-refresh-widgets',
    ['html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']],
];
