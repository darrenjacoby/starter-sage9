<?php

namespace App;

/**
 * Intervention
 *
 * @link https://github.com/soberwp/intervention
 */
use function \Sober\Intervention\intervention;

if (!function_exists('Sober\Intervention\intervention')) {
    return;
}

$remove = [
    ['remove-dashboard-items', 'pages', 'editor'],
    ['remove-emoji'],
    ['remove-help-tabs'],
    ['remove-howdy'],
    ['remove-menu-items'],
    ['remove-post-components', 'editor'],
    ['remove-page-components', 'editor'],
    ['remove-toolbar-frontend'],
    ['remove-toolbar-items'],
    ['remove-update-notices'],
    ['remove-user-fields'],
    ['remove-user-roles'],
    // ['remove-taxonomies'],
];

$add = [
    ['add-dashboard-redirect', 'pages', 'editor'],
    ['add-acf-page'],
    ['add-svg-support'],
];

$update = [
    ['update-dashboard-columns'],
    ['update-label-footer'],
    ['update-pagination'],
    ['update-label-post', ''],
];

// Register
array_map(function ($item) {
    intervention($item[0], $item[1], $item[2]);
}, array_merge($remove, $add, $update));
