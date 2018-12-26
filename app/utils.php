<?php

/**
 * get_svg
 * @param $src
 */
function get_svg($src)
{
    // get theme root
    $path = get_theme_file_path();

    // get hashed file
    $file = App\sage('assets')->get($src);

    // include
    include "{$path}/dist/{$file}";
}

/**
 * get_image_src
 * @param $id, $size
 */
function get_image_src($id, $size = 'thumbnail')
{
    return wp_get_attachment_image_url($id, $size);
}

/**
 * get_image_srcset
 * @param $id, $size
 */
function get_image_srcset($id, $size = 'thumbnail')
{
    return wp_get_attachment_image_srcset($id, $size);
}

/**
 * get_featured_image_id
 * @param $id, $size
 */
function get_featured_image_id($id, $size = 'thumbnail')
{
    if (!$id) {
        $id = get_the_ID();
    }

    return get_post_thumbnail_id($id, $size);
}

/**
 * image
 * @param $id, $size, $max_size
 */
function image($id, $size = 'thumbnail', $max_size = false)
{
    $src = wp_get_attachment_image_url($id, 'placeholder');
    $data_src = wp_get_attachment_image_url($id, $size);
    $data_srcset = wp_get_attachment_image_srcset($id, $size);

    echo "src=\"{$src}\" data-src=\"{$data_src}\" data-srcset=\"{$data_srcset}\"";

    if ($max_size) {
        echo "sizes=\"(max-width: {$max_size}px) 100vw, {$max_size}px\"";
    }
}
