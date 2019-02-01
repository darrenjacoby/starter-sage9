<?php

namespace App;

/**
 * Get Svg
 * 
 * @param $src
 */
function get_svg($src)
{
    // get theme root
    $path = get_theme_file_path();

    // get hashed file
    $file = sage('assets')->get($src);

    // include
    include "{$path}/dist/{$file}";
}

/**
 * Get Image Src
 * 
 * @param $id, $size
 */
function get_img_src($id, $size = 'thumbnail')
{
    return wp_get_attachment_image_url($id, $size);
}

/**
 * Get Image Srcset
 * 
 * @param $id, $size
 */
function get_img_srcset($id, $size = 'thumbnail')
{
    return wp_get_attachment_image_srcset($id, $size);
}

/**
 * Get Image Srcset
 * 
 * @param $id, $size
 */
function get_img_alt($id)
{
    return get_post_meta($id, '_wp_attachment_image_alt', true);
}

/**
 * Get Featured Image ID
 * 
 * @param $id, $size
 */
function get_featured_img_id($id, $size = 'thumbnail')
{
    if (!$id) {
        $id = get_the_ID();
    }

    return get_post_thumbnail_id($id, $size);
}

/**
 * Image
 * 
 * @param $id, $size, $max_size
 */
function image($id, $size = 'thumbnail', $max_size = false)
{   
    // src
    $src = get_img_src($id, 'placeholder');
    // alt tag
    $alt = get_img_alt($id);
    // data-src
    $data_src = get_img_src($id, $size);
    // data-srcset
    $data_srcset = get_img_src($id, $size);

    echo "src=\"{$src}\" alt=\"{$alt}\" data-src=\"{$data_src}\" data-srcset=\"{$data_srcset}\"";

    if ($max_size) {
        echo "sizes=\"(max-width: {$max_size}px) 100vw, {$max_size}px\"";
    }
}
