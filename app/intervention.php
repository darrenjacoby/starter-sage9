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

intervention('add-dashboard-redirect', 'pages', 'editor');
intervention('add-acf-page');
intervention('add-svg-support');
intervention('remove-dashboard-items');
intervention('remove-emoji');
intervention('remove-help-tabs');
intervention('remove-howdy');
intervention('remove-menu-items');
intervention('remove-post-components');
intervention('remove-post-components', 'editor');
intervention('remove-page-components', 'editor');
intervention('remove-taxonomies', ['tag']);
intervention('remove-toolbar-frontend');
intervention('remove-toolbar-items');
intervention('remove-update-notices');
intervention('remove-user-fields');
intervention('remove-user-roles');
intervention('update-dashboard-columns');
intervention('update-label-footer');
intervention('update-pagination');
// intervention('update-label-post', '');
